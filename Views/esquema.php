
<div class="album py-5 bg-body-tertiary">
    <div class="container2">
        <div class="row">
            <?php foreach($data as $row){ ?>
            <div class="col-sm-6 col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <div class="card-headers" style="color: black ;height: 80px;">
                        <div class="row iconos-s">
                            <div class="col-4">
                                <i class="fa-solid fa-power-off icon" id="power" style="color: green"></i>
                            </div>
                            <div class="col-4">
                                <img src="<?php echo base_url ; ?>Assets/principal/img/aaa.jpg" alt="" width="100 px" />
                            </div>
                            <div class="col-4">
                                <i class="fa-solid fa-rotate-right icon" style="color: orange"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body1 py-2">
                        <span id=""><?= $row['id'] ?></span>
                        <h5 class="card-title py-1 titulo-cuadro" >ID: <?= $row['nombre_contenedor'] ?> </h5>
                        <h5 class="card-title py-2 subtitulo-cuadro">ALIAS: Nombre perzonalizado</h5>
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
                    </div>
                    <div class="card-body">
                        <div class="table-responsive cargaInicial">
                            <table  class="table table-bordered border-dark tablas align-items-center tabla" id="Datos">
                                <thead>
                                    <tr style="background-color: black;">
                                        <th class="text-title zoom">Param</th>
                                        <th class="text-title">Set</th>
                                        <th class="text-title zoom2">Actual</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="iconos">
                                            <div class="icon_P">
                                                <i class="fa-solid fa-temperature-half"></i>
                                            </div>
                                        </th>
                                        <td>
                                             <div class="input-group mb-2 inputmodificado">
                                                <input type="text" class="form-control" aria-label="temperatura" value="<?= $row['set_point'] ?>" readonly />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-secondary">
                                                <span >S : <?= $row['temp_supply_1'] ?> ' C°</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="iconos">
                                            <div class="icon_P">
                                               <i class="fa-solid fa-cloud-rain"></i>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="input-group mb-2 inputmodificado">
                                                <input type="text" class="form-control" value="<?= $row['humidity_set_point'] ?>" readonly />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-secondary">
                                                <span >R: <?= $row['return_air'] ?>  %</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="iconos">
                                            <div class="icon_P " style="margin-top: 10px;">CO2</div>
                                        </th>
                                        <td>
                                            <div class="input-group mb-2 inputmodificado">
                                                <input type="text" class="form-control" value="<?= $row['set_point_co2'] ?>" readonly />
                                            </div>
                                        </td>
                                        <td class="text-secondary">
                                            <div class="div">
                                                <span > <?= $row['co2_reading'] ?> %</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="iconos">
                                            <div class="icon_P" style="margin-top: 10px;">C2H2</div>
                                        </th>                                   
                                        <td>
                                            <div class="input-group mb-2 inputmodificado">
                                                <input type="text" class="form-control" value="<?= $row['sp_ethyleno'] ?>" readonly />
                                            </div>
                                        </td>
                                        <td class="text-secondary">
                                            <span > <?= $row['ethylene'] ?> ppm</span>
                                        </td>
                                    </tr>                     
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
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="datosExtras'.$row['id'].'" class="datos-div" ></div>
                            <div class="card-footers">
                                <div class="expandir" >
                                    <button type="button" onclick="#"  class="btn redondo" data-id="1" ><i class="fa-solid fa-chevron-down"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                <div class="col-12">
                    <p class="float-end mb-1 arrow-up">
                        <a href="#"><i class="fa-solid fa-arrow-up"></i></a>
                    </p>
                </div>
            </div>
        </div>
    




    <div class="album py-5 bg-body-tertiary">
            <div class="container2">

                <?php

                    echo '  <div class="row">';
                 
                    foreach($data as $row){
                            echo '  <div class="col-sm-6 col-md-6 col-lg-4 mb-4">
                                         <div class="card">
                
                                             <div class="card-headers" style="color: black ;height: 80px;">
                                                 <div class="row iconos-s">
                                                     <div class="col-4">
                                                         <i class="fa-solid fa-power-off icon" id="power" style="color: green"></i>
                                                     </div>
                                                     <div class="col-4">
                                                         <img src="<?php echo base_url ; ?>Assets/principal/img/aaa.jpg" alt="" width="100 px" />
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
                    
                
                ?>

                <?php
                echo '<nav aria-label="Page navigation example">';
                echo '<ul class="pagination justify-content-center">';

                ?>
                <div class="col-12">
                    <p class="float-end mb-1 arrow-up">
                        <a href="#"><i class="fa-solid fa-arrow-up"></i></a>
                    </p>
                </div>
            </div>
        </div>
       