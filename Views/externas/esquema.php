
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
        



{
    "id": 17,
    "nombre_contenedor": "ZGRU1090804",
    "descripcionC": "USA",
    "generador_id": 1,
    "telemetria_id": 33,
    "set_point": 4,
    "ultima_fecha": "2024-03-09 14:10:03",
    "temp_supply_1": 15,
    "return_air": 15.8,
    "evaporation_coil": 15.8,
    "condensation_coil": 30.2,
    "compress_coil_1": 33.2,
    "ambient_air": 27.4,
    "cargo_1_temp": 0,
    "cargo_2_temp": -38.5,
    "cargo_3_temp": -38.5,
    "cargo_4_temp": -38.5,
    "relative_humidity": 32766,
    "avl": 0,
    "line_voltage": 480,
    "line_frequency": 60,
    "consumption_ph_1": 6.6,
    "consumption_ph_2": 3.4,
    "consumption_ph_3": 3.2,
    "co2_reading": 25.4,
    "power_kwh": 19702.7,
    "alarm_present": 0,
    "power_state": 0,
    "controlling_mode": "1",
    "humidity_control": 1,
    "humidity_set_point": 90,
    "set_point_co2": 3,
    "defrost_term_temp": 18,
    "defrost_interval": 6,
    "ethylene": 23.9,
    "stateProcess": "6",
    "stateInyection": "0",
    "timerOfProcess": 2,
    "sp_ethyleno": 6,
    "extra_1": 1
    "latitud": 35.7396,
    "longitud": -119.238,
  },

  function temperatura($dato,$orden){
    if($orden==1 && $data != null){
        $temp = round((($dato*9)/5 +32),2);
    }else{
        $temp = $dato;
    }
    return $temp ; 
  }
  function ajustarTemperatura($dato){
    if($dato>=-45 && $dato<=120){
        $temp =$dato;
    }else{
        $temp =null;
    }
    return $temp ; 
  }
  function ajustarPorcentaje($dato){
    if($dato>=0 && $dato<=100){
        $temp =$dato;
    }else{
        $temp =null;
    }
    return $temp ; 
  }
  function ajustarE($dato){
    if($dato>=0 && $dato<=250){
        $temp =$dato;
    }else{
        $temp =null;
    }
    return $temp ; 
  }
  function objeto($document,$orden){
    $objeto = [
        "Id" => $document["id"],
        "NombreContenedor" => $document["nombre_contenedor"],
        "Descripcion" => $document["descripcionC"],
        "GeneradorId" => $document["generador_id"],
        "TelemetriaId" => $document["telemetria_id"],
        "SetPoint" => temperatura(ajustarTemperatura($document["set_point"]),$orden),
        "Date" =>$document["ultima_fecha"],
        "TempSupply1"=> temperatura(ajustarTemperatura($document["temp_supply_1"]),$orden),
        "ReturnAir"=> temperatura(ajustarTemperatura($document["return_air"]),$orden),
        "EvaporationCoil"=> temperatura(ajustarTemperatura($document["evaporation_coil"]),$orden),
        "CondensationCoil"=> temperatura(ajustarTemperatura($document["condensation_coil"]),$orden),
        "CompressCoil1"=> temperatura(ajustarTemperatura($document["compress_coil_1"]),$orden),
        "AmbientAir"=> temperatura(ajustarTemperatura($document["ambient_air"]),$orden),
        "CargoTemp1"=> temperatura(ajustarTemperatura($document["cargo_1_temp"]),$orden),
        "CargoTemp2"=> temperatura(ajustarTemperatura($document["cargo_2_temp"]),$orden),
        "CargoTemp3"=> temperatura(ajustarTemperatura($document["cargo_3_temp"]),$orden),
        "CargoTemp4"=> temperatura(ajustarTemperatura($document["cargo_4_temp"]),$orden),
        "RelativeHumidity"=> ajustarPorcentaje($document["relative_humidity"]),
        "AVL"=> $document["avl"],
        "LineVoltage"=> $document["line_voltage"],
        "LineFrequency"=> $document["line_frequency"],
        "ConsumptionPH1"=> $document["consumption_ph_1"],
        "ConsumptionPH2"=> $document["consumption_ph_2"],
        "ConsumptionPH3"=> $document["consumption_ph_3"],
        "Co2Reading"=> ajustarPorcentaje($document["co2_reading"]),
        "PowerKwh"=> $document["power_kwh"],
        "AlarmPresent"=> $document["alarm_present"],
        "CapacityLoad"=> $document["capacity_load"],
        "PowerState"=> $document["power_state"],
        "ControllingMode"=> $document["controlling_mode"],
        "HumidityControl"=> $document["humidity_control"],
        "HumiditySetPoint"=> ajustarPorcentaje($document["humidity_set_point"]),
        "SetPointCo2"=> ajustarPorcentaje($document["set_point_co2"]),
        "DefrostTermTemp"=> $document["defrost_term_temp"],
        "DefrostInterval"=> temperatura(ajustarTemperatura($document["defrost_term_temp"]),$orden),
        "Ethylene"=> ajustarE($document["ethylene"]),
        "StateProcess"=> $document["stateProcess"],
        "StateInyection"=> $document["stateInyection"],
        "TimerOfProcess"=> $document["timerOfProcess"],
        "SetEthyleno"=> ajustarE($document["sp_ethyleno"]),
        "Latitude"=> $document["latitud"],
        "Longitude"=> $document["longitud"],
    ];
    return $objeto ;
}









function datosGrafico($dataTotal ,$tipoGrafica,$c_f,$objetivo=0){
    $total=[];
    foreach($dataTotal as $document){
        array_unshift($total,objeto($document,$data1[1]));
      }  
    if($tipoGrafica)  
}














//require_once '../models/principal.php';
require '../../ztotal/vendor/autoload.php';
//use Exception;
use MongoDB\Client;
use MongoDB\Driver\ServerApi;
use MongoDB\BSON\UTCDateTime ;

$uri = 'mongodb://localhost:27017';
// Specify Stable API version 1
$apiVersion = new ServerApi(ServerApi::V1);
// Create a new client and connect to the server
$client = new MongoDB\Client($uri, [], ['serverApi' => $apiVersion]);
$mes_fecha = date("n_Y");
$prueba1 =$variable."_".$mes_fecha;
try {
    // Send a ping to confirm a successful connection
    $client->selectDatabase('ZTRACK_P')->command(['ping' => 1]);
    //echo "Pinged your deployment. You successfully connected to MongoDB!\n";
} catch (Exception $e) {
    printf($e->getMessage());
}

//echo "WONDERFUL: <br>";
//echo $prueba1;
//$total[$variable] = [];
$total['device'] =[];
array_push($total['device'],$variable);
//'projection' =>  array('_id' => 0, 'created_at' => 1,'set_point' => 1,'temp_supply_1' => 1,'return_air' => 1,'evaporation_coil' => 1,
//'ambient_air' =>  1,'relative_humidity' => 1,'power_state' => 1,'telemetria_id'=>1,'cargo_1_temp' =>1,'cargo_2_temp' =>1,'cargo_3_temp' =>1,'cargo_4_temp' =>1,)  
$cursor  = $client->$prueba1->madurador->find(array(),array( 'sort'=>array('id'=>-1),'limit'=>1000));
//8 campos clasicos para reefer
$total['fecha']= [];
$total['setPoint'] =[];
$total['returnAir'] =[];
$total['tempSupply'] =[];
$total['ambienteAir'] =[];
$total['relativeHumidity'] =[];
$total['evaporationCoil'] =[];
$total['powerState'] =[];
//5 campos a aumentar si es tunel 
if($tipoG=2){
    $total['objetivo'] =[];
    $total['sensor1'] =[];
    $total['sensor2'] =[];
    $total['sensor3'] =[];
    $total['sensor4'] =[];
}
// 5 campos a aumentra si es Madurador
if($tipoG=1){
    $total['Inyected'] =[];
    $total['Co2'] =[];
    $total['SpEthylene'] =[];
    $total['Ethylene'] =[];
    $total['Pwm'] =[];
}
foreach ($cursor as $document) {
    $fechaJa = json_decode($document['created_at'])/1000;
    $fechaD = date('d-m-Y H:i:s', $fechaJa);
    $puntoA = strtotime($fechaD);
    $baseHoraGTM = 2+3;
    $puntoA1 = strtotime($baseHoraGTM." hours",$puntoA);
    $fechaD1 = date('d-m-Y H:i:s', $puntoA1);
    array_unshift($total['fecha'],$fechaD1); //1
    array_unshift($total['relativeHumidity'],ajustarPorcentaje($document['relative_humidity']));//2
    array_unshift($total['setPoint'],temperatura(ajustarTemperatura($document['set_point']),$orden));//3
    array_unshift($total['returnAir'],temperatura(ajustarTemperatura($document['return_air']),$orden));//4
    array_unshift($total['tempSupply'],temperatura(ajustarTemperatura($document['temp_supply_1']),$orden));//5
    array_unshift($total['ambienteAir'],temperatura(ajustarTemperatura($document['ambient_air']),$orden));//6
    array_unshift($total['evaporationCoil'],temperatura(ajustarTemperatura($document['evaporation_coil']),$orden));//7
    array_unshift($total['powerState'],sombreado($document['power_state']));

    if($tipoG=2){
        array_unshift($total['objetivo'],temperatura(ajustarTemperatura($document["extra_2"]),$orden));
        array_unshift($total['sensor1'],temperatura(ajustarTemperatura($document['cargo_1_temp']),$orden));//8
        array_unshift($total['sensor2'],temperatura(ajustarTemperatura($document['cargo_2_temp']),$orden));//9
        array_unshift($total['sensor3'],temperatura(ajustarTemperatura($document['cargo_3_temp']),$orden));//10
        array_unshift($total['sensor4'],temperatura(ajustarTemperatura($document['cargo_4_temp']),$orden));//11
    }
    if($tipoG=1){
        array_unshift($total['Inyected'],sombreado($document["stateProcess"]));
        array_unshift($total['Co2'],ajustarPorcentaje($document['co2_reading']));//8
        array_unshift($total['SpEthylene'],ajustarE($document['sp_ethyleno']));//9
        array_unshift($total['Ethylene'],ajustarE($document['ethylene']));//10
        array_unshift($total['Pwm'],ajustarPorcentaje($document['inyeccion_pwm']));//11
    }
}
echo json_encode($total);



?>

<?php

//me viene un rango de fechas 

$fechaaInicio = "10-03-2024 5:01:20";
$fechaFin = "07-03-2024 3:20:10";

$date1 = new DateTime($fechaaInicio1);
$date2 = new DateTime($fechaFin1);
$diff = $date1->diff($date2);
$total['diferencia_fecha']= [];
array_push($total['diferencia_fecha'],$diff->days);
array_push($total['diferencia_fecha'],$diff->h);

$puntoA = strtotime($fechaaInicio);
$puntoB = strtotime($fechaaInicio);

$c = date("n_Y",$puntoA );
$nuevoformato2= date("n_Y",$puntoB );
$total['meses']= [];
array_push($total['meses'],$nuevoformato1);
array_push($total['meses'],$nuevoformato2);

if(total['meses'][0]==total['meses'][0]){
    echo " solo se consultara una base de datos"
}else{
    $f1 = explode("_",$total['meses'][0]);
    $f2 = explode("_",$total['meses'][1]);
    $if($f1[1]==$f2[1]){
        echo "son del mismo año estamos bien";
    }
   
}

$puntoA = strtotime($fechaaInicio);
$puntoA1 = strtotime("-5 hours",$puntoA)*1000;
$puntoB = strtotime($fechaFin)  ;
$puntoB1 = strtotime("-5 hours" ,$puntoB)*1000 ;


echo json_encode($total);
?>
       