<?php
require('config.php');
$result = $connexion->query('SELECT COUNT(*) as total_contenedores FROM contenedores WHERE estado =1');
$row = $result->fetch_assoc();
$num_total_rows = $row['total_contenedores'];

$QueryComentarios      = ("SELECT * FROM comentarios ORDER BY id DESC LIMIT 5");

?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Paginación de resultados con PHP Demo</title>

    <link rel="stylesheet" href="views/assets/css/styles.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />

    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <header data-bs-theme="dark">
        <div class="collapse text-bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4>About</h4>
                        <p class="text-body-secondary">
                            Add some information about the album below, the author, or any
                            other background context. Make it a few sentences long so folks
                            can pick up some informative tidbits. Then, link them off to
                            some social networking sites or contact information.
                        </p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4>Contact</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">Follow on Twitter</a></li>
                            <li><a href="#" class="text-white">Like on Facebook</a></li>
                            <li><a href="#" class="text-white">Email me</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24">
                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                        <circle cx="12" cy="13" r="4" />
                    </svg>
                    <strong>Album</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>
    <main>
        <section class="py-3 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-7 col-md-9 mx-auto">
                    <h1 class="fw-light">Sistema de control y monitoreo en vivo</h1>
                </div>
            </div>
        </section>

        <div class="info-page" style="text-align: center">
            <h3>Numero de articulos:</h3>
            <h3>
                En cada pagina se muestra articulos ordenados por fecha en formato
                descendente.
            </h3>
            <h3>Mostrando la pagina 5 paginas.</h3>
        </div>

        <div class="album py-5 bg-body-tertiary">
            <div class="container2">

                <?php
                if ($num_total_rows > 0) {
                    $page = false;

                    //examino la pagina a mostrar y el inicio del registro a mostrar
                    if (isset($_GET["page"])) {
                        $page = $_GET["page"];
                    }

                    if (!$page) {
                        $start = 0;
                        $page = 1;
                    } else {
                        $start = ($page - 1) * NUM_ITEMS_BY_PAGE;
                    }

                    //calculo el total de paginas
                    $total_pages = ceil($num_total_rows / NUM_ITEMS_BY_PAGE);

                    //pongo el n�mero de registros total, el tama�o de p�gina y la p�gina que se muestra
                    /*echo '<h3>Numero de articulos: '.$num_total_rows.'</h3>';
                          echo '<h3>En cada pagina se muestra '.NUM_ITEMS_BY_PAGE.' articulos ordenados por fecha en formato descendente.</h3>';
                          echo '<h3>Mostrando la pagina '.$page.' de ' .$total_pages.' paginas.</h3>';*/

                    $result = $connexion->query(
                        'SELECT * FROM contenedores WHERE estado =1 
                            ORDER BY nombre_contenedor DESC LIMIT ' . $start . ', ' . NUM_ITEMS_BY_PAGE
                    );


                    echo '  <div class="row">';

                    if ($result->num_rows > 0) {

                        while ($row = $result->fetch_assoc()) {


                            echo '  <div class="col-sm-6 col-md-6 col-lg-4 mb-4">
                                         <div class="card">
                
                                             <div class="card-headers" style="color: black ;height: 80px;">
                                                 <div class="row iconos-s">
                                                     <div class="col-4">
                                                         <i class="fa-solid fa-power-off icon" id="power" style="color: green"></i>
                                                     </div>
                                                     <div class="col-4">
                                                         <img src="views/assets/images/aaa.jpg" alt="" width="100 px" />
                                                     </div>
                                                     <div class="col-4">
                                                         <i class="fa-solid fa-rotate-right icon" style="color: orange"></i>
                                                     </div>
                                                 </div>
                                             </div>';


                            echo '<div class="card-body1 py-2">

                                    <span id="">'.$row['id'].'</span>';

                                    

                            echo '<h5 class="card-title py-1 titulo-cuadro" >ID:' . utf8_encode($row['nombre_contenedor']) . '</h5>';

                            echo '<h5 class="card-title py-2 subtitulo-cuadro">ID: ZDSDES12344AS</h5>
                            
                                         <div class="d-flex justify-content-center align-items-center centrar-iconos">
                                         <div class="btn-group justify-content-between align-items-center">
                                             <button type="button" class="btn btn-sm btn-outline-primary">
                                                 <i class="fa-solid fa-chart-line"></i>
                                             </button>
                                             <button type="button" class="btn btn-sm btn-outline-secondary">
                                                 <i class="fa-solid fa-database"></i>
                                             </button>
                                             <button type="button" class="btn btn-sm btn-outline-success">
                                                 <i class="fa-solid fa-envelope"></i>
                                             </button>
                                             <button type="button" class="btn btn-sm btn-outline-danger">
                                                 <i class="fa-regular fa-file-pdf"></i>
                                             </button>
                                         </div>
                                     </div>
                                 </div>';


                            echo ' <div class="card-body">
                                         <div class="table-responsive cargaInicial">';

                            echo '    <table  class="table table-bordered border-dark tablas align-items-center tabla" id="Datos">
                                              <thead>
                                                      <tr style="background-color: black;">
                                                          <th class="text-title zoom">Param</th>
                                                          <th class="text-title">Set</th>
                                                          <th class="text-title zoom2">Actual</th>
                                                      </tr>
                                                      </thead>';
                            echo '       <tbody>
                                                      <tr>
                                                          <th class="iconos">
                                                              <div class="icon_P">
                                                                  <i class="fa-solid fa-temperature-half"></i>
                                                              </div>
                                                          </th>';

                            echo ' <td>
                                                  <div class="input-group mb-2 inputmodificado">
                                                  <input type="text" class="form-control" aria-label="temperatura"
                                                  value="' . $row['set_point'] . '" readonly />
                                                  </div>
                                                  </td>


                                  <td>
                                                      <div class="text-secondary">
                                                      <span >S : ' . $row['temp_supply_1'] . ' C°</span>
                                                      </div>
                                                      </td>
                                                      </tr>
                                                      <tr>
                                                      <th class="iconos">
                                                      <div class="icon_P">
                                                          <i class="fa-solid fa-cloud-rain"></i>
                                                      </div>
                                                      </th>';

                            echo '         <td>
                                                      <div class="input-group mb-2 inputmodificado">
                                                      <input type="text" class="form-control"
                                                      value="' . $row['humidity_set_point'] . '" readonly />
                                                      </div>
                                                      </td>
                                                      <td>
                                                      <div class="text-secondary">
                                                        <span >R: ' . $row['return_air'] . ' %</span>
                                                    </div>

                                                      </td>
                                                      </tr>';

                            echo '           <tr>
                                                      <th class="iconos">
                                                          <div class="icon_P " style="margin-top: 10px;">CO2</div>
                                                      </th>

                                                      <td>
                                                      <div class="input-group mb-2 inputmodificado">
                                                      <input type="text" class="form-control"
                                                          value="' . $row['set_point_co2'] . '" readonly />
                                                  </div>

                                                      </td>
                                                      <td class="text-secondary">
                                                      <div class="div">
                                                      <span > ' . $row['co2_reading'] . ' %</span>
                                                  </div>

                                                      </td>
                                                      </tr>
                                                      <tr>
                                                      <th class="iconos">
                                                          <div class="icon_P" style="margin-top: 10px;">C2H2</div>
                                                      </th>';


                            echo '   
                                                      <td    >
                                                      <div class="input-group mb-2 inputmodificado">
                                                      <input type="text" class="form-control"
                                                          value="' . $row['sp_ethyleno'] . '" readonly />
                                                  </div>
                                                      </td>
                                                      <td class="text-secondary">
                                                        <span > ' . $row['ethylene'] . ' ppm</span>
                                                    </td>
                                                      </tr>';


                            echo '
                                                      <tr>
                                                          <th class="iconos">
                                                              <div class="icon_P">
                                                                  <i class="fa-solid fa-syringe icon_P"></i>
                                                              </div>
                                                          </th>
                                                          <td>
                                                              <div class="input-group mb-2 inputmodificado">
                                                                  <input type="text" class="form-control"  id="ultima_fecha" readonly />
                                                              </div>
                                                          </td>
                                                          <td class="text-secondary">
                                                              <span >Horas</span>
                                                          </td>
                                                      </tr>';
                            echo '</tbody>

                                                      </table>
                                     </div>
                                     <div id="datosExtras'.$row['id'].'" class="datos-div" ></div>
                                            <div class="card-footers">
                                                <div class="expandir" >
                                                    <button type="button" onclick="mostrarMasDatos1('.$row['id']. ' )"  class="btn redondo" data-id="'.$row['id'].'" ><i class="fa-solid fa-chevron-down"></i></button>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>';
                        }
                    }
                }
                ?>

                <?php

                echo '<nav aria-label="Page navigation example">';

                echo '<ul class="pagination justify-content-center">';

                if ($total_pages > 1) {

                    if ($page != 1) {

                        echo '<li class="page-item"><a class="page-link" aria-label="Previous" href="index.php?page=' . ($page - 1) . '"><span aria-hidden="true">&laquo;</span></a></li>';
                    }


                    $numToShow = 1; // Número de páginas a mostrar antes y después de la página actual


                    for ($i = 1; $i <= $total_pages; $i++) {

                        if ($i <= $numToShow || $i > $total_pages - $numToShow || ($i >= $page - $numToShow && $i <= $page + $numToShow)) {

                            if ($page == $i) {

                                echo '<li class="page-item active"><a class="page-link" href="#">' . $page . '</a></li>';
                            } else {
                                echo '<li class="page-item"><a class="page-link" href="index.php?page=' . $i . '">' . $i . '</a></li>';
                            }
                        } elseif ($i == $total_pages - $numToShow) {

                            echo '<li class="page-item disabled"><span class="page-link">...</span></li>';
                        }
                    }

                    if ($page != $total_pages) {
                        echo '<li class="page-item"><a class="page-link" href="index.php?page=' . ($page + 1) . '"><span aria-hidden="true">&raquo;</span></a></li>';
                    }

                    echo '  </ul>
                    </nav>';
                }

                ?>
                <div class="col-12">
                    <p class="float-end mb-1 arrow-up">
                        <a href="#"><i class="fa-solid fa-arrow-up"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </main>




    <footer class="text-body-secondary py-5">
        <div class="container justify-content-center">

            <h1>control</h1>

        </div>
    </footer>
    <script>
        $("#power").click(function() {
            $("#power").removeClass("color: green");
            $("#power").addClass("color:red");

        });
    </script>
    <script src="views/assets/js/script.js"></script>
    <script src="views/assets/js/MostarTablas.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>


</body>

</html>