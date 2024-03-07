
<?php

//echo $data;
$sql ="ola z";

//$url1 = "http://148.102.22.93:2531/api/ot/";
$url1 = "http://161.132.206.104/apizgroup/datamaduradores/";
//$url1 = "http://localhost:8080/apizgroup/dataMaduradores/";
$datos = [
    "sql" => $sql,
];
$opciones = array(
    "http" => array(
        "header" => "Content-type: application/json\r\n",
        "method" => "POST",
        "content" => json_encode($datos), # Agregar el contenido definido antes
    ),
);
# Preparar petición
$contexto = stream_context_create($opciones);

$resultadoEX = file_get_contents($url1, false, $contexto);
/*
if ($resultadoEX === false) {
    echo "Error haciendo petición";
    exit;
}else{
    echo "peticion ok";
}
*/
//$data1 = json_decode($data);
$data1 = json_decode($resultadoEX);
//echo $resultadoEX;

?>


<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DemoCarrusel</title>
    <link rel="stylesheet" href="<?php echo base_url ; ?>Assets/Principal/css/styles.css" />
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


<div class="album py-5 bg-body-tertiary">
    <div class="container2">
        <div class="row">
            <?php foreach($data1 as $row){ ?>
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
                        <span id=""><?= $row->id ?></span>
                        <h5 class="card-title py-1 titulo-cuadro" >ID: <?= $row->nombre_contenedor ?> </h5>
                        <h5 class="card-title py-2 subtitulo-cuadro">ALIAS: Nombre perzonalizado</h5>
                        <div class="d-flex justify-content-center align-items-center centrar-iconos">
                            <div class="btn-group justify-content-between align-items-center">
                                <button type="button" class="btn btn-sm btn-outline-primary" onclick="abrirGrafica('<?= $row->nombre_contenedor ?>')">
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
                                                <input type="text" class="form-control" aria-label="temperatura" value="<?= $row->set_point ?>" readonly />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-secondary">
                                                <span >S : <?= $row->temp_supply_1 ?> ' C°</span>
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
                                                <input type="text" class="form-control" value="<?= $row->humidity_set_point ?>" readonly />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-secondary">
                                                <span >R: <?= $row->return_air ?>  %</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="iconos">
                                            <div class="icon_P " style="margin-top: 10px;">CO2</div>
                                        </th>
                                        <td>
                                            <div class="input-group mb-2 inputmodificado">
                                                <input type="text" class="form-control" value="<?= $row->set_point_co2 ?>" readonly />
                                            </div>
                                        </td>
                                        <td class="text-secondary">
                                            <div class="div">
                                                <span > <?= $row->co2_reading ?> %</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="iconos">
                                            <div class="icon_P" style="margin-top: 10px;">C2H2</div>
                                        </th>                                   
                                        <td>
                                            <div class="input-group mb-2 inputmodificado">
                                                <input type="text" class="form-control" value="<?= $row->sp_ethyleno ?>" readonly />
                                            </div>
                                        </td>
                                        <td class="text-secondary">
                                            <span > <?= $row->ethylene ?> ppm</span>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0 "></script>

    <div id="interfazGrafica" class="modal modal-xl fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title text-white" id="title">Data Dispositivo</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <h1 align="center">Ripener Monitoring Data : Test </h1>
            <canvas align ="center" id="graficaFinal" style="" width="600" height="400"></canvas>
            </div>
        </div>
    </div>
</div>
<script>
const grafica1 = document.getElementById("graficaFinal");

 function graficaMadurador1(info){

    if (typeof w !== 'undefined') {w.destroy();}
    setPoint =[];
    returnAir = [];
    tempSupply =[];
    ambienteAir =[];
    relativeHumidity =[];
    evaporationCoil =[];
    D_ethylene = [];
    co2 = [];
    sp_ethylene =[];
    fecha =[];
    inyeccionEtileno = [];
 
    contador =0;

    const datosInyeccion ={
        label : " PowerState",
        data : info.powerState,
        backgroundColor: '#f7f2e2', // Color de fondo
        borderColor: '#f7f2e2', // Color del borde
        borderWidth: 1,
        yAxisID : 'y1',
        pointRadius: 0,
        cubicInterpolationMode: 'monotone',
        tension: 0.4 ,
        fill: true,  
        datalabels: {
            //display: 'false',  
            labels: {
                title: null
              } 
          },
    }


    const datosEvaporationCoil ={
        label : " Evap",
        data : info.evaporationCoil,
        backgroundColor: '#95a5a6', // Color de fondo
        borderColor: '#95a5a6', // Color del borde
        borderWidth: 3,
        yAxisID : 'y',
        pointRadius: 0,
        cubicInterpolationMode: 'monotone',
        tension: 0.4 ,
        hidden :true,
        datalabels: {
            //display: 'false', 
            labels: {
                title: null
              } 
          },
    }

    const datosSetPoint ={
        label : " SetPoint",
        data : info.setPoint,
        backgroundColor: '#f1c40f', // Color de fondo
        borderColor: '#f1c40f', // Color del borde
        borderWidth: 3,
        yAxisID : 'y',
        pointRadius: 0,
        cubicInterpolationMode: 'monotone',
        tension: 0.4 ,
        hidden :false,
        datalabels: {
            //display: 'false', 
            labels: {
                title: 'terrible'
              }  
          },
    }
    const datosreturnAir ={
        label : " Return ",
        data : info.returnAir,
        backgroundColor: '#ec7063', // Color de fondo
        borderColor: '#ec7063', // Color del borde
        borderWidth: 3,// Ancho del borde
        yAxisID : 'y',
        pointRadius: 0,
        cubicInterpolationMode: 'monotone',
        tension: 0.4,
        hidden :false,
        datalabels: {
            display: 'auto',
            clip :'true',
            clamp :'true',
            align: 'end',   
          },
    }
    const datostempSupply ={
        label : " Supply",
        data : info.tempSupply,
        backgroundColor: '#27ae60', // Color de fondo
        borderColor: '#27ae60', // Color del borde
        borderWidth: 3,// Ancho del borde
        yAxisID : 'y',
        pointRadius : 0,
        cubicInterpolationMode: 'monotone',
        tension: 0.4,
        hidden :false,
        datalabels: {
            display: 'auto',
            clip :'true',
            clamp :'true',
            align: 'end',   
          },
    }
    const datosambienteAir ={
        label : " Ambient",
        data : info.ambienteAir,
        backgroundColor: '#9ccc65', // Color de fondo
        borderColor: '#9ccc65', // Color del borde
        borderWidth: 3,// Ancho del borde
        yAxisID : 'y',
        pointRadius : 0,
        cubicInterpolationMode: 'monotone',
        tension: 0.4,
        hidden :false,
        datalabels: {
            display: 'auto',
            clip :'true',
            clamp :'true',
            align: 'end',   
          },
    }
    const datorelativeHumidity ={
        label : "Humidity",
        data : info.relativeHumidity,
        backgroundColor: '#e4c1f4', // Color de fondo
        borderColor: '#e4c1f4', // Color del borde4476c6
        borderWidth: 3,// Ancho del borde
        yAxisID : 'y1',
        pointRadius : 0,
        cubicInterpolationMode: 'monotone',
        tension: 0.4,
        hidden :false,
        datalabels: {
            display: 'auto',
            clip :'true',
            clamp :'true',
            align: 'end',   
          },
    }


    console.time('loop');
    w = new Chart(grafica1, {
        type: 'line',// Tipo de gráfica
        data: {
            labels: info.fecha,
            datasets: [
                datosreturnAir,
                    datorelativeHumidity,
                    datosambienteAir,
                    datostempSupply,
                    datosEvaporationCoil, 
                    datosSetPoint ,
                    datosInyeccion 
        
                    // Aquí más datos...
            ]
        },
        options: {
            animation: {

              },
            responsive : true,
            backgroundColor: '#fff',
            interaction :{
                mode : 'index',
                intersect :false,
            },
            stacked :false,
            scales: {
                y: {
                    position: 'left',
                    display: true,
                    title: {
                        display: true,
                        text: 'Temperature (C°)',
                        color: '#1a2c4e',
                        font: {     
                            size: 20,
                            style: 'normal',
                            lineHeight: 1.2
                        },
                        padding: {top: 30, left: 0, right: 0, bottom: 0}
                    },
                    suggestedMin: 0,
                    suggestedMax: 60
                },
                y1: {
                    type: 'linear',
                    display: true,
                    position: 'right',
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Percentage (%)',
                        color: '#1a2c4e',
                        font: {                      
                            size: 20,
                            style: 'normal',
                            lineHeight: 1.2
                        },
                        padding: {top: 30, left: 0, right: 0, bottom: 0}
                    },
                    grid: {
                        drawOnChartArea: false, // only want the grid lines for one axis to show up
                    },
                    suggestedMin: 0,
                    suggestedMax: 100,
                },
            },
            plugins: {
                datalabels: {
                    color: function(context) {
                      return context.dataset.backgroundColor;
                    },
                    font: {
                      weight: 'bold'
                    },          
                    padding: 6,
    
                  },
                title: {
                    display: true,
                    text: '',
                    color: '#1a2c4e',
                    font: {                        
                        size: 35,
                        style: 'normal',
                        lineHeight: 1.2
                    },
                    padding: {top: 30, left: 0, right: 0, bottom: 0}
                },
                zoom: {
                    pan :{
                        enabled :true,
                        mode: 'x',
                    },
                    zoom: {
                        wheel: {
                            enabled: true,
                        },
                        pinch: {
                            enabled: true
                        },
                        mode: 'x',
                        drag :{
                            enabled: false,
                        },
                        scaleMode :'x',
                    }
                },
                customCanvasBackgroundColor : {
                    color :'#fff',
                },
                legend : {
                    position :'top',
                    align : 'center',
                    labels : {
                        boxWidth :20 ,
                        boxHeight : 20,
                        color :'#1a2c4e',
                        padding :15 ,
                        textAlign : 'left',
                        font: {
                            size: 12,
                            style: 'normal',
                            lineHeight: 1.2
                          },
                        title : {
                            text :'Datos Graficados:',
                        },
                    },
                },
            }           
        },
       // plugins : [plugin,ChartDataLabels],
    });    
    console.timeEnd('loop');
}

function abrirGrafica(codigo) {
    //document.getElementById("title").textContent = "Actualizar Receta";
    //document.getElementById("btnAccion").textContent = "Modificar";

    const url = "http://161.132.206.104/apizgroup/data12horas/index.php?data=" + codigo;
    const http = new XMLHttpRequest();
    http.open("GET", url, true);
    http.send();
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            //const res = this.responseText;

           const res = JSON.parse(this.responseText);
           //graficaMadurador1(res, codigo);
            /*
            document.getElementById("id").value = res.id;
            document.getElementById("codigo_receta").value = res.codigo_receta;
            document.getElementById("nombre_receta").value = res.nombre_receta;
            document.getElementById("descripcion_receta").value = res.descripcion;                
            */
           console.log(res);
           //console.log(codigo);
           //terrible =res[codigo];
           //console.log(terrible);
            graficaMadurador1(res);
            $("#interfazGrafica").modal("show");
        }
    }
}

</script>
</body>

</html>