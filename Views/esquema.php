
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


<?php
/*
     $cursor  = $client->ztrack_ja->madurador->find(
        array('$and' =>
            array( ['created_at'=>
                array('$gte'=>new MongoDB\BSON\UTCDateTime($puntoA1),'$lte'=>new MongoDB\BSON\UTCDateTime($puntoB1)),'telemetria_id'=>intval($telemetria)] ))
        ,
        array('projection' => 
            array('_id' => 0,'trama'=> 1, 'created_at' => 1,'stateProcess' => 1,'set_point' => 1,'temp_supply_1' => 1,'return_air' => 1,'evaporation_coil' => 1,'ambient_air' => 1,'relative_humidity' => 1,'controlling_mode' => 1,'sp_ethyleno' => 1,
            'ethylene' => 1,'avl' => 1,'power_state' => 1,'compress_coil_1' => 1,'consumption_ph_1' => 1,'consumption_ph_2' => 1,'consumption_ph_3' => 1,'co2_reading' => 1,'o2_reading' => 1,'set_point_o2' => 1,'set_point_co2' => 1,'line_voltage' => 1,
            'defrost_term_temp' => 1,'defrost_interval' => 1,'inyeccion_pwm' => 1,'inyeccion_hora' => 1,'latitud' => 1,'longitud' => 1,'fresh_air_ex_mode' => 1,'telemetria_id'=>1,'cargo_1_temp' =>1,'cargo_2_temp' =>1,'cargo_3_temp' =>1,'cargo_4_temp' =>1,'id'=>1 ,'power_kwh' =>1),'sort'=>array('id'=>1)));


            'projection' =>  array('_id' => 0, 'created_at' => 1,'set_point' => 1,'temp_supply_1' => 1,'return_air' => 1,'evaporation_coil' => 1,'ambient_air' => 1,'relative_humidity' => 1,'power_state' => 1,'telemetria_id'=>1,'cargo_1_temp' =>1,'cargo_2_temp' =>1,'cargo_3_temp' =>1,'cargo_4_temp' =>1,)        

*/
$total['fecha']= [];
$total['setPoint'] =[];
$total['returnAir'] =[];
$total['tempSupply'] =[];
$total['ambienteAir'] =[];
$total['relativeHumidity'] =[];
$total['evaporationCoil'] =[];
$total['powerState'] =[];
$total['telemetriaId'] =[];
$total['objetivo'] =[];
$total['sensor1'] =[];
$total['sensor2'] =[];
$total['sensor3'] =[];
$total['sensor4'] =[];
function temp($det){
    if($det<=40 && $det>=-40){$te = $det ;}
    else{ $te =null ;}
    return $te;
}
function cargo($det){
    if($det==25.60){$te = $det ;}
    else{ $te =null ;}
    return $te;
}
foreach ($cursor as $document) {
    $fechaJa = json_decode($document['created_at'])/1000;
    $fechaD = date('d-m-Y H:i:s', $fechaJa);
    $puntoA = strtotime($fechaD);
    $baseHoraGTM = 5+5;
    $puntoA1 = strtotime($baseHoraGTM." hours",$puntoA);
    $fechaD1 = date('d-m-Y H:i:s', $puntoA1);
    array_push($total['fecha'],$fechaD1); //1
    if($document['relative_humidity']<=100.00 && $document['relative_humidity']>=0.00){
                array_push($total['relativeHumidity'],$document['relative_humidity']);//2
    }else{
        array_push($total['relativeHumidity'],null);
    }
    array_push($total['objetivo'],2.00);
    array_push($total['setPoint'],temp($document['set_point']));//3
    array_push($total['returnAir'],temp($document['return_air']));//4
    array_push($total['tempSupply'],temp($document['temp_supply_1']));//5
    array_push($total['ambienteAir'],temp($document['ambient_air']));//6
    array_push($total['evaporationCoil'],temp($document['evaporation_coil']));//7
    array_push($total['sensor1'],cargo(temp($document['cargo_1_temp'])));//8
    array_push($total['sensor2'],cargo(temp($document['cargo_2_temp'])));//9
    array_push($total['sensor3'],cargo(temp($document['cargo_3_temp'])));//10
    array_push($total['sensor4'],cargo(temp($document['cargo_4_temp'])));//11
    array_push($total['telemetriaId'],$document['telemetria_id']);//12
    if($document['relative_humidity']==1){
        array_push($total['powerState'],100);
    }else{
        array_push($total['powerState'],0);    
    }
}
echo json_encode($total);
        




?>
       