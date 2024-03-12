<?php

    $fechaaInicio1 =.":00";
    $fechaFin1 =$fechaFin.":00";


    $idf = $_GET['id'];
    $parte2 =  substr($idf, strpos($idf,',')+strlen(','));
    $fechaaInicio = substr($idf, 0, strpos($idf, ','));
    $fechaFin = substr($parte2, 0, strpos($parte2, ';'));
    $telemetria = substr($parte2, strpos($parte2,';')+strlen(';'));          
    $uri = 'mongodb://localhost:27017';
    $apiVersion = new ServerApi(ServerApi::V1);
    $client = new MongoDB\Client($uri, [], ['serverApi' => $apiVersion]);
     $fechaaInicio1 =$fechaaInicio.":00";
     $fechaFin1 =$fechaFin.":00";

     $fechaaInicio1 =$fechaaInicio.":00";
     $fechaFin1 =$fechaFin.":00";


     //problemas con fecha 5 horas menos debe ser UTC-5
     $puntoA = strtotime($fechaaInicio);
     $puntoA1 = strtotime("-5 hours",$puntoA)*1000;
     $puntoB = strtotime($fechaFin)  ;
     $puntoB1 = strtotime("-5 hours" ,$puntoB)*1000  ;
     // se selcciona los campos y las fechas 
     $cursor  = $client->ztrack_ja->madurador->find(array('$and' =>array( ['created_at'=>array('$gte'=>new MongoDB\BSON\UTCDateTime($puntoA1),'$lte'=>new MongoDB\BSON\UTCDateTime($puntoB1)),'telemetria_id'=>intval(6)] )),
     array('projection' => array('_id' => 0,'trama'=> 1, 'created_at' => 1,'stateProcess' => 1,'set_point' => 1,'temp_supply_1' => 1,'return_air' => 1,'evaporation_coil' => 1,'ambient_air' => 1,'relative_humidity' => 1,'controlling_mode' => 1,'sp_ethyleno' => 1,
     'ethylene' => 1,'avl' => 1,'power_state' => 1,'compress_coil_1' => 1,'consumption_ph_1' => 1,'consumption_ph_2' => 1,'consumption_ph_3' => 1,'co2_reading' => 1,'o2_reading' => 1,'set_point_o2' => 1,'set_point_co2' => 1,'line_voltage' => 1,
     'defrost_term_temp' => 1,'defrost_interval' => 1,'inyeccion_pwm' => 1,'inyeccion_hora' => 1,'latitud' => 1,'longitud' => 1,'fresh_air_ex_mode' => 1,'telemetria_id'=>1,'cargo_1_temp' =>1,'cargo_2_temp' =>1,'cargo_3_temp' =>1,'cargo_4_temp' =>1,'id'=>1 ,'power_kwh' =>1),'sort'=>array('id'=>1)));
    //analizar el tiempo
    $date1 = new DateTime($fechaaInicio1);
    $date2 = new DateTime($fechaFin1);
    $diff = $date1->diff($date2);
    $total['diferencia_fecha']= [];
    array_push($total['diferencia_fecha'],$diff->days);
    array_push($total['diferencia_fecha'],$diff->h);
    $dif_dia=$diff->days;
     $total1['fecha']= [];
     $total1['setPoint'] =[];
     $total1['returnAir'] =[];
     $total1['tempSupply'] =[];
     $total1['ambienteAir'] =[];
     $total1['relativeHumidity'] =[];
     $total1['evaporationCoil'] =[];
     $total1['D_ethylene'] =[];
     $total1['co2'] =[];
     $total1['sp_ethylene'] =[];
     $total1['inyeccionEtileno'] =[];
     $total1['telemetria_id'] =[];
     $total1['objetivo'] =[];
     $total1['cargo_1_temp'] =[];
     $total1['cargo_2_temp'] =[];
     $total1['cargo_3_temp'] =[];
     $total1['cargo_4_temp'] =[];
     //array('$gt'=>new MongoDB\BSON\UTCDateTime(strtotime($fechaaInicio)*1000), '$gte'=>new MongoDB\BSON\UTCDateTime(strtotime($fechaFin)*1000))
     //     $cursor  = $client->ztrack->madurador2->find(array('$and' =>array( ['created_at'=>array('$gt'=>new MongoDB\BSON\UTCDateTime($puntoA)),'created_at'=>array('$gte'=>new MongoDB\BSON\UTCDateTime($puntoB)),'telemetria_id'=>intval($telemetria)] )));
     $total['madurador'] = [];
     $total1['madurador2'] = [];
     $total1['inyeccion_pwm'] =[];
     $cont=0;
     foreach ($cursor as $document) {
    //$returnInicial =$document['return_air'];
    array_push( $total['madurador'] ,$document);
     }
    //for(i=1;i<count()){
    //}
    if($dif_dia<1){
        $segundos =300;
        $porcentaje =5;
        $array_optimo =[];
        array_push($array_optimo,$total['madurador'][0]);
        array_push($total['diferencia_fecha'],$total['madurador']);
        array_push($total['diferencia_fecha'],optimo($total['madurador'][0],$segundos));
        //optimo($total['madurador'],$segundos);
        //variables iniciales 
        //$return_air_inical=$total['madurador'][0]->return_air;
        $return_air_inicial=$total['madurador'][0]['return_air'];
        array_push($total['diferencia_fecha'],$return_air_inicial);
        $tiempo_inicial=json_decode($total['madurador'][0]['created_at'])/1000;
        //$tiempo_inicial =json_decode($xd)/1000;
        array_push($total['diferencia_fecha'],$tiempo_inicial);
        $cadenae ="";
        for($i=1;$i<count($total['madurador']);$i++){
            $tiempo_a =json_decode($total['madurador'][$i]['created_at'])/1000;
            $comparador =$total['madurador'][$i]['return_air'];
            if(($tiempo_a-$tiempo_inicial) <= $segundos){
                //if( ($salario >= 0) && ($salario <= 500000) )
                if($comparador<0){
                    if(( $comparador <= (($return_air_inicial)*(100-$porcentaje)/100)) && ($comparador >= (($return_air_inicial)*(100+$porcentaje)/100))){
                        //array_push($array_optimo,$comparador);
                    }else{
                        array_push($array_optimo,$total['madurador'][$i]);
                        $return_air_inicial=$total['madurador'][$i]['return_air'];
                        $tiempo_inicial=json_decode($total['madurador'][$i]['created_at'])/1000;
                        //$tiempo_inicial =json_decode($xd)/1000;
                    }
                }else{
                    if(( $comparador >= (($return_air_inicial)*(100-$porcentaje)/100)) && ($comparador <= (($return_air_inicial)*(100+$porcentaje)/100))){
                        //array_push($array_optimo,$comparador);
                    }else{
                        array_push($array_optimo,$total['madurador'][$i]);
                        $return_air_inicial=$total['madurador'][$i]['return_air'];
                        $tiempo_inicial=json_decode($total['madurador'][$i]['created_at'])/1000;
                        //$tiempo_inicial =json_decode($xd)/1000;
                    }
                }
            }            
            else{
                array_push($array_optimo,$total['madurador'][$i]);
                $return_air_inicial=$total['madurador'][$i]['return_air'];
                //$xd=$total['madurador'][$i]['created_at'];
                //$tiempo_inicial =json_decode($xd)/1000;
                $tiempo_inicial=json_decode($total['madurador'][$i]['created_at'])/1000;
            }
            $cadenae =$cadenae." a : ".$i;
        }
        array_push($total['diferencia_fecha'],$cadenae);
        array_push($total['diferencia_fecha'],$array_optimo);
    }elseif($dif_dia<3){
        $segundos =600;
        $porcentaje =6;
        $array_optimo =[];
        array_push($array_optimo,$total['madurador'][0]);
        array_push($total['diferencia_fecha'],$total['madurador']);
        array_push($total['diferencia_fecha'],optimo($total['madurador'][0],$segundos));
        //optimo($total['madurador'],$segundos);
        //variables iniciales 
        //$return_air_inical=$total['madurador'][0]->return_air;
        $return_air_inicial=$total['madurador'][0]['return_air'];
        array_push($total['diferencia_fecha'],$return_air_inicial);
        $tiempo_inicial=json_decode($total['madurador'][0]['created_at'])/1000;
        //$tiempo_inicial =json_decode($xd)/1000;
        array_push($total['diferencia_fecha'],$tiempo_inicial);
        $cadenae ="";
        for($i=1;$i<count($total['madurador']);$i++){
            $tiempo_a =json_decode($total['madurador'][$i]['created_at'])/1000;
            $comparador =$total['madurador'][$i]['return_air'];
            if(($tiempo_a-$tiempo_inicial) <= $segundos){
                //if( ($salario >= 0) && ($salario <= 500000) )
                if($comparador<0){
                    if(( $comparador <= (($return_air_inicial)*(100-$porcentaje)/100)) && ($comparador >= (($return_air_inicial)*(100+$porcentaje)/100))){
                        //array_push($array_optimo,$comparador);
                    }else{
                        array_push($array_optimo,$total['madurador'][$i]);
                        $return_air_inicial=$total['madurador'][$i]['return_air'];
                        $tiempo_inicial=json_decode($total['madurador'][$i]['created_at'])/1000;
                        //$tiempo_inicial =json_decode($xd)/1000;
                    }
                }else{
                    if(( $comparador >= (($return_air_inicial)*(100-$porcentaje)/100)) && ($comparador <= (($return_air_inicial)*(100+$porcentaje)/100))){
                        //array_push($array_optimo,$comparador);
                    }else{
                        array_push($array_optimo,$total['madurador'][$i]);
                        $return_air_inicial=$total['madurador'][$i]['return_air'];
                        $tiempo_inicial=json_decode($total['madurador'][$i]['created_at'])/1000;
                        //$tiempo_inicial =json_decode($xd)/1000;
                    }
                }
            }
            else{
                array_push($array_optimo,$total['madurador'][$i]);
                $return_air_inicial=$total['madurador'][$i]['return_air'];
                //$xd=$total['madurador'][$i]['created_at'];
                //$tiempo_inicial =json_decode($xd)/1000;
                $tiempo_inicial=json_decode($total['madurador'][$i]['created_at'])/1000;
            }
            $cadenae =$cadenae." a : ".$i;
        }
        array_push($total['diferencia_fecha'],$cadenae);
        array_push($total['diferencia_fecha'],$array_optimo);
    }elseif($dif_dia<9){
        $segundos =1200;
        $porcentaje =8;
        $array_optimo =[];
        array_push($array_optimo,$total['madurador'][0]);
        array_push($total['diferencia_fecha'],$total['madurador']);
        array_push($total['diferencia_fecha'],optimo($total['madurador'][0],$segundos));
        //optimo($total['madurador'],$segundos);
        //variables iniciales 
        //$return_air_inical=$total['madurador'][0]->return_air;
        $return_air_inicial=$total['madurador'][0]['return_air'];
        array_push($total['diferencia_fecha'],$return_air_inicial);
        $tiempo_inicial=json_decode($total['madurador'][0]['created_at'])/1000;
        //$tiempo_inicial =json_decode($xd)/1000;
        array_push($total['diferencia_fecha'],$tiempo_inicial);
        $cadenae ="";
        for($i=1;$i<count($total['madurador']);$i++){
            $tiempo_a =json_decode($total['madurador'][$i]['created_at'])/1000;
            $comparador =$total['madurador'][$i]['return_air'];
            if(($tiempo_a-$tiempo_inicial) <= $segundos){
                //if( ($salario >= 0) && ($salario <= 500000) )
                if($comparador<0){
                    if(( $comparador <= (($return_air_inicial)*(100-$porcentaje)/100)) && ($comparador >= (($return_air_inicial)*(100+$porcentaje)/100))){
                        //array_push($array_optimo,$comparador);
                    }else{
                        array_push($array_optimo,$total['madurador'][$i]);
                        $return_air_inicial=$total['madurador'][$i]['return_air'];
                        $tiempo_inicial=json_decode($total['madurador'][$i]['created_at'])/1000;
                        //$tiempo_inicial =json_decode($xd)/1000;
                    }
                }else{
                    if(( $comparador >= (($return_air_inicial)*(100-$porcentaje)/100)) && ($comparador <= (($return_air_inicial)*(100+$porcentaje)/100))){
                        //array_push($array_optimo,$comparador);
                    }else{
                        array_push($array_optimo,$total['madurador'][$i]);
                        $return_air_inicial=$total['madurador'][$i]['return_air'];
                        $tiempo_inicial=json_decode($total['madurador'][$i]['created_at'])/1000;
                        //$tiempo_inicial =json_decode($xd)/1000;
                    }
                }
            }
            else{
                array_push($array_optimo,$total['madurador'][$i]);
                $return_air_inicial=$total['madurador'][$i]['return_air'];
                //$xd=$total['madurador'][$i]['created_at'];
                //$tiempo_inicial =json_decode($xd)/1000;
                $tiempo_inicial=json_decode($total['madurador'][$i]['created_at'])/1000;
            }
            $cadenae =$cadenae." a : ".$i;
        }
        array_push($total['diferencia_fecha'],$cadenae);
        array_push($total['diferencia_fecha'],$array_optimo);
    }elseif($dif_dia<31){
        $segundos =2400;
        $porcentaje =10;
        $array_optimo =[];
        array_push($array_optimo,$total['madurador'][0]);
        array_push($total['diferencia_fecha'],$total['madurador']);
        array_push($total['diferencia_fecha'],optimo($total['madurador'][0],$segundos));
        //optimo($total['madurador'],$segundos);
        //variables iniciales 
        //$return_air_inical=$total['madurador'][0]->return_air;
        $return_air_inicial=$total['madurador'][0]['return_air'];
        array_push($total['diferencia_fecha'],$return_air_inicial);
        $tiempo_inicial=json_decode($total['madurador'][0]['created_at'])/1000;
        //$tiempo_inicial =json_decode($xd)/1000;
        array_push($total['diferencia_fecha'],$tiempo_inicial);
        $cadenae ="";
        for($i=1;$i<count($total['madurador']);$i++){
            $tiempo_a =json_decode($total['madurador'][$i]['created_at'])/1000;
            $comparador =$total['madurador'][$i]['return_air'];
            if(($tiempo_a-$tiempo_inicial) <= $segundos){
                //if( ($salario >= 0) && ($salario <= 500000) )
                if($comparador<0){
                    if(( $comparador <= (($return_air_inicial)*(100-$porcentaje)/100)) && ($comparador >= (($return_air_inicial)*(100+$porcentaje)/100))){
                        //array_push($array_optimo,$comparador);
                    }else{
                        array_push($array_optimo,$total['madurador'][$i]);
                        $return_air_inicial=$total['madurador'][$i]['return_air'];
                        $tiempo_inicial=json_decode($total['madurador'][$i]['created_at'])/1000;
                        //$tiempo_inicial =json_decode($xd)/1000;
                    }
                }else{
                    if(( $comparador >= (($return_air_inicial)*(100-$porcentaje)/100)) && ($comparador <= (($return_air_inicial)*(100+$porcentaje)/100))){
                        //array_push($array_optimo,$comparador);
                    }else{
                        array_push($array_optimo,$total['madurador'][$i]);
                        $return_air_inicial=$total['madurador'][$i]['return_air'];
                        $tiempo_inicial=json_decode($total['madurador'][$i]['created_at'])/1000;
                        //$tiempo_inicial =json_decode($xd)/1000;
                    }
                }
            }
            else{
                array_push($array_optimo,$total['madurador'][$i]);
                $return_air_inicial=$total['madurador'][$i]['return_air'];
                //$xd=$total['madurador'][$i]['created_at'];
                //$tiempo_inicial =json_decode($xd)/1000;
                $tiempo_inicial=json_decode($total['madurador'][$i]['created_at'])/1000;
            }
            $cadenae =$cadenae." a : ".$i;
        }
        array_push($total['diferencia_fecha'],$cadenae);
        array_push($total['diferencia_fecha'],$array_optimo);
    }else{
        $segundos =4800;
        $porcentaje =12;
        $array_optimo =[];
        array_push($array_optimo,$total['madurador'][0]);
        array_push($total['diferencia_fecha'],$total['madurador']);
        array_push($total['diferencia_fecha'],optimo($total['madurador'][0],$segundos));
        //optimo($total['madurador'],$segundos);
        //variables iniciales 
        //$return_air_inical=$total['madurador'][0]->return_air;
        $return_air_inicial=$total['madurador'][0]['return_air'];
        array_push($total['diferencia_fecha'],$return_air_inicial);
        $tiempo_inicial=json_decode($total['madurador'][0]['created_at'])/1000;
        //$tiempo_inicial =json_decode($xd)/1000;
        array_push($total['diferencia_fecha'],$tiempo_inicial);
        $cadenae ="";
        for($i=1;$i<count($total['madurador']);$i++){
            $tiempo_a =json_decode($total['madurador'][$i]['created_at'])/1000;
            $comparador =$total['madurador'][$i]['return_air'];
            if(($tiempo_a-$tiempo_inicial) <= $segundos){
                //if( ($salario >= 0) && ($salario <= 500000) )
                if($comparador<0){
                    if(( $comparador <= (($return_air_inicial)*(100-$porcentaje)/100)) && ($comparador >= (($return_air_inicial)*(100+$porcentaje)/100))){
                        //array_push($array_optimo,$comparador);
                    }else{
                        array_push($array_optimo,$total['madurador'][$i]);
                        $return_air_inicial=$total['madurador'][$i]['return_air'];
                        $tiempo_inicial=json_decode($total['madurador'][$i]['created_at'])/1000;
                        //$tiempo_inicial =json_decode($xd)/1000;
                    }
                }else{
                    if(( $comparador >= (($return_air_inicial)*(100-$porcentaje)/100)) && ($comparador <= (($return_air_inicial)*(100+$porcentaje)/100))){
                        //array_push($array_optimo,$comparador);
                    }else{
                        array_push($array_optimo,$total['madurador'][$i]);
                        $return_air_inicial=$total['madurador'][$i]['return_air'];
                        $tiempo_inicial=json_decode($total['madurador'][$i]['created_at'])/1000;
                        //$tiempo_inicial =json_decode($xd)/1000;
                    }
                }
            }
            else{
                array_push($array_optimo,$total['madurador'][$i]);
                $return_air_inicial=$total['madurador'][$i]['return_air'];
                //$xd=$total['madurador'][$i]['created_at'];
                //$tiempo_inicial =json_decode($xd)/1000;
                $tiempo_inicial=json_decode($total['madurador'][$i]['created_at'])/1000;
            }
            $cadenae =$cadenae." a : ".$i;
        }
        array_push($total['diferencia_fecha'],$cadenae);
        array_push($total['diferencia_fecha'],$array_optimo);
    }
    array_push($total['diferencia_fecha'],$segundos);
    foreach ($array_optimo as $document) {
        $cont++;
        if($cont%1==0)
        {
        //array_push($total['fecha'],$document['created_at']);
        $fechaJa = json_decode($document['created_at'])/1000;
        // $fechaJa1 = $fechaJa['$date'];
        $fechaD = date('d-m-Y H:i:s', $fechaJa);

        $puntoA = strtotime($fechaD);
        $puntoA1 = strtotime("+5 hours",$puntoA);
        $fechaD1 = date('d-m-Y H:i:s', $puntoA1);
       // array_push($total,$fechaD);
       array_push($total1['fecha'],$fechaD1);
        //array_push($total['tramaMadurador'],$document);  
        array_push($total1['setPoint'],$document['set_point']);
        array_push($total1['returnAir'],$document['return_air']);
        array_push($total1['tempSupply'],$document['temp_supply_1']);
        array_push($total1['ambienteAir'],$document['ambient_air']);
        if($document['relative_humidity']<=100.00){
            array_push($total1['relativeHumidity'],$document['relative_humidity']);
        }else{
            array_push($total1['relativeHumidity'],null);
        }
        //array_push($total['relativeHumidity'],$document['relative_humidity']);
        array_push($total1['objetivo'],2.00);
        if($document['evaporation_coil']>=50.00){
            array_push($total1['evaporationCoil'],null);
        }else{
            array_push($total1['evaporationCoil'],$document['evaporation_coil']);
        }
        //array_push($total['evaporationCoil'],$document['evaporation_coil']);
        if($document['cargo_1_temp']>=40.00 || $document['cargo_1_temp']==25.60  ){
            array_push($total1['cargo_1_temp'],null);
        }else{
            array_push($total1['cargo_1_temp'],$document['cargo_1_temp']);
        }
        if($document['cargo_2_temp']>=40.00){
            array_push($total1['cargo_2_temp'],null);
        }else{
            array_push($total1['cargo_2_temp'],$document['cargo_2_temp']);
        }
        if($document['cargo_3_temp']>=40.00){
            array_push($total1['cargo_3_temp'],null);
        }else{
            array_push($total1['cargo_3_temp'],$document['cargo_3_temp']);
        }
        if($document['cargo_4_temp']>=40.00){
            array_push($total1['cargo_4_temp'],null);
        }else{
            array_push($total1['cargo_4_temp'],$document['cargo_4_temp']);
        }
        if($document['co2_reading']==25.4 || $document['co2_reading']==25.5 ){
            array_push($total1['co2'],null);
        }
        //else if($document['co2_reading']>25){
          //  array_push($total['co2'],0.1);
        //}
        else{
            array_push($total1['co2'],$document['co2_reading']);
        }
        //array_push($total['co2'],$document['co2_reading']);
        if($document['sp_ethyleno']==-1.00){
            array_push($total1['sp_ethylene'],null);
        }else{
            array_push($total1['sp_ethylene'],$document['sp_ethyleno']);
        }
        //array_push($total['fecha'],$document['created_at']);
        //array_push($total['inyeccionEtileno'],$document['stateProcess']);
        if($document['stateProcess']==5.00 ){
            array_push($total1['inyeccionEtileno'],100); 
            array_push($total1['D_ethylene'],$document['ethylene']);  
        }else{
            array_push($total1['inyeccionEtileno'],0);
            //if($document['stateProcess']==-1.00){
            //}
            if($document['telemetria_id']==260 || $document['telemetria_id']==259 || $document['telemetria_id']==258 || $document['telemetria_id']==33 ){
                //se hace la regulacion  de datos por encima de 20 ppm
                $nuevoEthyleno = (intval(($document['ethylene']-0.9)*10))/10;
                if($nuevoEthyleno>0 && $nuevoEthyleno<20){
                    array_push($total1['D_ethylene'],$nuevoEthyleno);
                }elseif($nuevoEthyleno>20){
                    array_push($total1['D_ethylene'],null);
                }
                else{
                    array_push($total1['D_ethylene'],0);
                }

            }
            else if($document['telemetria_id']==378){
                if($document['ethylene']>89){
                    array_push($total1['D_ethylene'],null);

                }else{
                    array_push($total1['D_ethylene'],$document['ethylene']);

                }
            }       
            else{
                array_push($total1['D_ethylene'],$document['ethylene']);
            }
            /*
            if($document['ethylene']>=80.00){
                array_push($total['D_ethylene'],null);
            }else{
                array_push($total['D_ethylene'],$document['ethylene']);
            }
            */
        }
        array_push($total1['telemetria_id'],$document['telemetria_id']);
        if($document['inyeccion_pwm']==-1.00){
            array_push($total1['inyeccion_pwm'],null);
        }else{
            array_push($total1['inyeccion_pwm'],$document['inyeccion_pwm']);
        }
        //array_push($total['inyeccion_pwm'],$document['inyeccion_pwm']);
        array_unshift($total1['madurador2'],$document);
        //array_push($total['madurador'],$document);
    } 
    }
    echo json_encode($total1);


function optimo($array,$tiempo){
$returnInicial = [];
foreach($array as $ar){
    //echo $ar . "<br>";
    array_push($returnInicial,$ar);
} 
return $returnInicial;
}
?>



<?php
  echo "junio tunel" ; 
  echo "julio viernes "; 

  echo " ";
?>


<?php

$segundos = [300,900,1800,3600];
$porcentaje = [5,8,12,18]; 

function determinarRango($numero,$segundos,$porcentaje) {
    if ($numero >= 0 && $numero <= 4) {
        $respuesta = [$segundos[0],$porcentaje[0]];
    } elseif ($numero > 4 && $numero <= 15) {
        $respuesta = [$segundos[1],$porcentaje[1]];
    } elseif ($numero > 15 && $numero <= 30) {
        $respuesta = [$segundos[2],$porcentaje[2]];
    } else {
        $respuesta = [$segundos[3],$porcentaje[3]];
    }
    return $respuesta
}

function optimizar($resultado,$total){
    $segundos =$resultado[0];
    $porcentaje =$resultado[1];
    array_push($array_optimo,$total[0]);
    $return_air_inicial=$total[0]['return_air'];
    $tiempo_inicial=json_decode($total[0]['created_at'])/1000;
    for($i=1;$i<count($total);$i++){
        $tiempo_a =json_decode($total[$i]['created_at'])/1000;
        $comparador =$total[$i]['return_air'];
        if(($tiempo_a-$tiempo_inicial) <= $segundos){
            if($comparador<0){
                if(( $comparador <= (($return_air_inicial)*(100-$porcentaje)/100)) && ($comparador >= (($return_air_inicial)*(100+$porcentaje)/100))){
                }else{
                    array_push($array_optimo,$total[$i]);
                    $return_air_inicial=$total[$i]['return_air'];
                    $tiempo_inicial=json_decode($total[$i]['created_at'])/1000;
                }
            }else{
                if(( $comparador >= (($return_air_inicial)*(100-$porcentaje)/100)) && ($comparador <= (($return_air_inicial)*(100+$porcentaje)/100))){
                }else{
                    array_push($array_optimo,$total[$i]);
                    $return_air_inicial=$total[$i]['return_air'];
                    $tiempo_inicial=json_decode($total[$i]['created_at'])/1000;
                }
            }
        }            
        else{
            array_push($array_optimo,$total[$i]);
            $return_air_inicial=$total[$i]['return_air'];
            $tiempo_inicial=json_decode($total[$i]['created_at'])/1000;
        }
    }
    return $array_optimo ;
}

    $segundos =300;
    $porcentaje =5;
    $array_optimo =[];
    array_push($array_optimo,$total[0]);
    $return_air_inicial=$total['madurador'][0]['return_air'];
    $tiempo_inicial=json_decode($total['madurador'][0]['created_at'])/1000;
    for($i=1;$i<count($total['madurador']);$i++){
        $tiempo_a =json_decode($total['madurador'][$i]['created_at'])/1000;
        $comparador =$total['madurador'][$i]['return_air'];
        if(($tiempo_a-$tiempo_inicial) <= $segundos){
            if($comparador<0){
                if(( $comparador <= (($return_air_inicial)*(100-$porcentaje)/100)) && ($comparador >= (($return_air_inicial)*(100+$porcentaje)/100))){
                }else{
                    array_push($array_optimo,$total['madurador'][$i]);
                    $return_air_inicial=$total['madurador'][$i]['return_air'];
                    $tiempo_inicial=json_decode($total['madurador'][$i]['created_at'])/1000;
                }
            }else{
                if(( $comparador >= (($return_air_inicial)*(100-$porcentaje)/100)) && ($comparador <= (($return_air_inicial)*(100+$porcentaje)/100))){
                }else{
                    array_push($array_optimo,$total['madurador'][$i]);
                    $return_air_inicial=$total['madurador'][$i]['return_air'];
                    $tiempo_inicial=json_decode($total['madurador'][$i]['created_at'])/1000;
                }
            }
        }            
        else{
            array_push($array_optimo,$total['madurador'][$i]);
            $return_air_inicial=$total['madurador'][$i]['return_air'];
            $tiempo_inicial=json_decode($total['madurador'][$i]['created_at'])/1000;
        }
    }
    array_push($total['diferencia_fecha'],$array_optimo);





mongoexport --db=ztracj_ja --collection=madurador --query='{"telemetria_id": "ABC", created_at: { $gte: { "$date": "2024-01-01T00:00:00.000Z" }, $lte: { "$date": "2024-01-31T23:59:59.000Z" }}}' -out=contacts.json

mongoexport --db=sales --collection=contacts --out=contacts.json

{ 
    $and: [
      {telemetria_id: 33},
      {created_at: {$gte: new Date("2024-01-01T00:00:00.000Z")}},
      {created_at: {$lte: new Date("2020-01-31T23:59:59.999Z")}}
    ]
  }

  { 
    $and: [
      {telemetria_id: 33},
      {created_at: {$gte: new ISODate("2024-01-01T00:00:00.000Z")}},
      {created_at: {$lte: new ISODate("2020-01-31T23:59:59.999Z")}}
    ]
  }



  db.madurador.runCommand(
    {
      explain: {
        $and: [
            {telemetria_id: 33}
          ]
      }
    }
 )

 db.madurador.explain("executionStats").find({telemetria_id: 33})

 db.madurador.findOne({telemetria_id: 33})

//ultimos 5 datos
 db.madurador.find({ telemetria_id: 33 }).sort({id:-1}).limit(5)

//primeros  2 datos de ZGRU1090804
db.madurador.find({ telemetria_id: 33 }).sort({id:1}).limit(2)

 db.madurador.find(
    { 
        $and: [
          {telemetria_id: 33},
          {created_at: {$gte: new ISODate("2024-01-01T00:00:00.000Z")}},
          {created_at: {$lte: new ISODate("2020-01-31T23:59:59.999Z")}}
        ]
      }
 ).sort({id:-1}).limit(5)


 db.madurador.find({ $and: [{telemetria_id: 33},{created_at: {$gte: new ISODate("2024-01-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2024-01-31T23:59:59.999Z")}}]}).sort({id:-1}).limit(2)

 db.madurador.find({ $and: [{telemetria_id: 33},{created_at: {$gte: new ISODate("2024-01-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2024-01-31T23:59:59.999Z")}}]}).sort({id:1}).limit(2)




 mongoexport --db=ztrack_ja --collection=madurador --query='{"telemetria_id": "ABC", created_at: { $gte: { "$date": "2024-01-01T00:00:00.000Z" }, $lte: { "$date": "2024-01-31T23:59:59.000Z" }}}' -out=.json

 //ESTRUCTURA PARA ARBOL DE DATOS DE ZGRU1090804
 db.madurador.find({ $and: [{telemetria_id: 33},{created_at: {$gte: new ISODate("2023-03-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-03-31T23:59:59.999Z")}}]}).sort({id:1})

 mongoexport --db=ztrack_ja --collection=madurador --query='{ $and: [{telemetria_id: 33},{created_at: {$gte: new ISODate("2023-03-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2024-03-31T23:59:59.999Z")}}]}' -out=/home/zgroup1/wondefulD/ZGRU1090804/3_2023.json

 mongoexport --db=ztrack_ja --collection=madurador --query='{"telemetria_id": 33}' -out=/home/zgroup1/wondefulD/ZGRU1090804/3_2023.json


 mongoexport --db=ztrack_ja --collection=madurador --query='{ $and: [{"telemetria_id": 33},{"created_at": {$gte: "new ISODate("2023-03-01T00:00:00.000Z")"}},{"created_at": {$lte: "new ISODate("2024-03-31T23:59:59.999Z")"}}]}' -out=/home/zgroup1/wondefulD/ZGRU1090804/03_2023.json

 mongoexport --db=ztrack_ja --collection=madurador --query='{ $and: [{"telemetria_id": 33},{"id": {$gte: 148590}},{"id": {$lte: 225880 }}]}' -out=/home/zgroup1/wondefulD/ZGRU1090804/6_2023.json


 db.madurador.find({ $and: [{"telemetria_id": 33},{"id": {$gte: 225886}},{"id": {$lte: 445204 }}]})
 db.madurador.explain("executionStats").find({ $and: [{"telemetria_id": 33},{"id": {$gte: 225886}},{"id": {$lte: 445204 }}]})

 //mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 33},{"created_at": {"$gte": "new ISODate("2023-03-01T00:00:00.000Z")"}},{"created_at": {"$lte": "new ISODate("2023-07-31T23:59:59.999Z")" }}]}' -out=07_2023

 db.madurador.find({ $and: [{telemetria_id: 33},{created_at: {$gte: new ISODate("2023-06-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-06-31T23:59:59.999Z")}}]}).sort({id:1})
 db.madurador.explain("executionStats").find({ $and: [{telemetria_id: 33},{created_at: {$gte: new ISODate("2023-06-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-06-30T23:59:59.999Z")}}]})


 db.madurador.find({ $and: [{telemetria_id: 33},{created_at: {$gte: new ISODate("2023-03-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-03-31T23:59:59.999Z")}}]}).sort({id:-1}).limit(1)
 db.madurador.find({ $and: [{telemetria_id: 33},{created_at: {$gte: new ISODate("2023-04-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-04-30T23:59:59.999Z")}}]}).sort({id:1}).limit(1)
 db.madurador.find({ $and: [{telemetria_id: 33},{created_at: {$gte: new ISODate("2023-05-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-05-31T23:59:59.999Z")}}]}).sort({id:1}).limit(1)
 db.madurador.find({ $and: [{telemetria_id: 33},{created_at: {$gte: new ISODate("2023-06-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-06-30T23:59:59.999Z")}}]}).sort({id:1}).limit(1)
 db.madurador.find({ $and: [{telemetria_id: 33},{created_at: {$gte: new ISODate("2023-07-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-07-31T23:59:59.999Z")}}]}).sort({id:-1}).limit(1)
 db.madurador.find({ $and: [{telemetria_id: 33},{created_at: {$gte: new ISODate("2023-08-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-08-31T23:59:59.999Z")}}]}).sort({id:-1}).limit(1)
 db.madurador.find({ $and: [{telemetria_id: 33},{created_at: {$gte: new ISODate("2023-09-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-09-30T23:59:59.999Z")}}]}).sort({id:-1}).limit(1)
 db.madurador.find({ $and: [{telemetria_id: 33},{created_at: {$gte: new ISODate("2023-10-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-10-31T23:59:59.999Z")}}]}).sort({id:-1}).limit(1)
 db.madurador.find({ $and: [{telemetria_id: 33},{created_at: {$gte: new ISODate("2023-11-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-11-30T23:59:59.999Z")}}]}).sort({id:-1}).limit(1)
 db.madurador.find({ $and: [{telemetria_id: 33},{created_at: {$gte: new ISODate("2023-12-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-12-31T23:59:59.999Z")}}]}).sort({id:-1}).limit(1)
 db.madurador.find({ $and: [{telemetria_id: 33},{created_at: {$gte: new ISODate("2024-01-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2024-01-31T23:59:59.999Z")}}]}).sort({id:-1}).limit(1)
 db.madurador.find({ $and: [{telemetria_id: 33},{created_at: {$gte: new ISODate("2024-02-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2024-02-29T23:59:59.999Z")}}]}).sort({id:-1}).limit(1)

 mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 33},{"id": {"$gte": 40128}},{"id": {"$lte": 57279 }}]}' --out=5_2023.json
 mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 33},{"id": {"$gte": 148590}},{"id": {"$lte": 225880 }}]}' --out=6_2023.json
 mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 33},{"id": {"$gte": 225886}},{"id": {"$lte": 445204 }}]}' --out=7_2023.json
 mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 33},{"id": {"$gte": 445206}},{"id": {"$lte": 674365 }}]}' --out=8_2023.json
 mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 33},{"id": {"$gte": 674392}},{"id": {"$lte": 813817 }}]}' --out=9_2023.json
 mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 33},{"id": {"$gte": 813824}},{"id": {"$lte": 1267558 }}]}' --out=10_2023.json
 mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 33},{"id": {"$gte": 1267581}},{"id": {"$lte": 2499726 }}]}' --out=11_2023.json
 mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 33},{"id": {"$gte": 2499781}},{"id": {"$lte": 5017785 }}]}' --out=12_2023.json
 mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 33},{"id": {"$gte": 5017856}},{"id": {"$lte": 7756579 }}]}' --out=1_2024.json
 mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 33},{"id": {"$gte": 7756625}},{"id": {"$lte": 10611589 }}]}' --out=2_2024.json

 mongoimport --db ZGRU1090804_5_2023 --collection madurador --file 5_2023.json

 mongoimport --db ZGRU1090804_5_2023 --collection madurador --file 5_2023.json
 mongoimport --db ZGRU1090804_6_2023 --collection madurador --file 6_2023.json
 mongoimport --db ZGRU1090804_7_2023 --collection madurador --file 7_2023.json
 mongoimport --db ZGRU1090804_8_2023 --collection madurador --file 8_2023.json
 mongoimport --db ZGRU1090804_9_2023 --collection madurador --file 9_2023.json
 mongoimport --db ZGRU1090804_10_2023 --collection madurador --file 10_2023.json
 mongoimport --db ZGRU1090804_11_2023 --collection madurador --file 11_2023.json
 mongoimport --db ZGRU1090804_12_2023 --collection madurador --file 12_2023.json
 mongoimport --db ZGRU1090804_1_2024 --collection madurador --file 1_2024.json
 mongoimport --db ZGRU1090804_2_2024 --collection madurador --file 2_2024.json



 $gmt ="-0500";


function gmt($data){
    $signo = substr($data,0,-4);
    $hora = intval(substr($data,1,-2));
    $minuto = intval(substr($data,3));
    if($signo=="-"){
      $total =array($hora*(-1),$minuto*(-1));
    }else{
      $total =array($hora*(+1),$minuto*(+1));
   }

    return $total;
}
echo var_dump(gmt($gmt));

$fecha1 ="02-02-2024 12:12:30" ;
$fecha2 ="02-02-2024 13:12:30" ;

if($fecha1>$fecha2){
echo " normal realizar ";
}else{
echo "no pasa a datos";
}

$segundos1 = [300,900,1800,3600];
$porcentaje1 = [5,8,12,18];
$numero1 =7;
function determinarRango($numero,$segundos,$porcentaje) {
    if ($numero >= 0 && $numero <= 4) {
        $respuesta = [$segundos[0],$porcentaje[0]];
    } elseif ($numero > 4 && $numero <= 15) {
        $respuesta = [$segundos[1],$porcentaje[1]];
    } elseif ($numero > 15 && $numero <= 30) {
        $respuesta = [$segundos[2],$porcentaje[2]];
    } else {
        $respuesta = [$segundos[3],$porcentaje[3]];
    }
    return $respuesta;
}

echo var_dump(determinarRango($numero1,$segundos1,$porcentaje1));



?>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
ini_set('memory_limit', '-1');

$fechaaInicio = "12-12-2024 3:01:20";
$fechaFin = "12-12-2024 5:20:10";

$date1 = new DateTime($fechaaInicio);
$date2 = new DateTime($fechaFin);
$diff = $date1->diff($date2);
$total['diferencia_fecha']= [];
array_push($total['diferencia_fecha'],$diff->days);
array_push($total['diferencia_fecha'],$diff->h);

$puntoA = strtotime($fechaaInicio);
$puntoB = strtotime($fechaFin);

$nuevoformato1 = date("n_Y",$puntoA );
$nuevoformato2= date("n_Y",$puntoB );
$total['meses']= [];
array_push($total['meses'],$nuevoformato1);
array_push($total['meses'],$nuevoformato2);

$total['secuencia']=[];
if($total['meses'][0]==$total['meses'][1]){
    echo " solo se consultara una base de datos";
    array_push($total['secuencia'],$total['meses'][1]);
}else{
    $f1 = explode("_",$total['meses'][0]);
    $f2 = explode("_",$total['meses'][1]);
    echo var_dump($f2[1]);
    if($f1[1]==$f2[1]){
       echo "son del mismo año estamos bien";
       for($j =$f1[0] ;$j<$f2[0]+1 ;$j++){
          $dat = $j."_".$f2[1];
          array_push($total['secuencia'],$dat);
       }
    } else{
      $z=0;
       for($i =$f1[1];$i<$f2[1];$i++){
         if($z==0){$variador =$f1[0]; $z=1;
         }else{ $variador =1; }
         for($j=$variador;$j<13;$j++){
           $dat = $j."_".$i;
           array_push($total['secuencia'],$dat);
         }
       }
      for($j =1 ;$j<$f2[0]+1 ;$j++){
           $dat = $j."_".$f2[1];
           array_push($total['secuencia'],$dat);
     }
    }
}



echo json_encode($total);



?>

<?php

function totalDataCrudo($totalMeses,$dispositivo,$fechaInicio,$fechaFin){
     $puntoA = strtotime($fechaInicio);
     $puntoA1 = strtotime("-5 hours",$puntoA)*1000;
     $puntoB = strtotime($fechaFin)  ;
     $puntoB1 = strtotime("-5 hours" ,$puntoB)*1000 ;
     $contarMeses =count($totalMeses);
     $acumulado=[];
     if($contarMeses==1){
        $bd=$dispositivo."_".$totalMeses[0];
        $cursor  = $client->$bd->madurador->find(array('$and' =>array( ['created_at'=>array('$gte'=>new MongoDB\BSON\UTCDateTime($puntoA1),'$lte'=>new MongoDB\BSON\UTCDateTime($puntoB1))])));
        foreach ($cursor as $document) {
            array_unshift($acumulado,$document);
        }
     }else{
        for($i=0;)
        
        
     }


     $cursor  = $client->ztrack_ja->madurador->find(array('created_at'=>array('$gte'=>new MongoDB\BSON\UTCDateTime($puntoA1))));

     $cursor  = $client->ztrack_ja->madurador->find(array('created_at'=>array('$lte'=>new MongoDB\BSON\UTCDateTime($puntoB1))));

     $cursor  = $client->ztrack_ja->madurador->find(array('$and' =>array( ['created_at'=>array('$gte'=>new MongoDB\BSON\UTCDateTime($puntoA1),'$lte'=>new MongoDB\BSON\UTCDateTime($puntoB1))])));

     $z=0;
     for($i =$f1[1];$i<$f2[1];$i++){
       if($z==0){$variador =$f1[0]; $z=1;
       }else{ $variador =1; }
       for($j=$variador;$j<13;$j++){
         $dat = $j."_".$i;
         array_push($total['secuencia'],$dat);
       }
     }
    for($j =1 ;$j<$f2[0]+1 ;$j++){
         $dat = $j."_".$f2[1];
         array_push($total['secuencia'],$dat);
   }

}

?>


$puntoA = strtotime($fechaaInicio);
     $puntoA1 = strtotime("-5 hours",$puntoA)*1000;
     $puntoB = strtotime($fechaFin)  ;
     $puntoB1 = strtotime("-5 hours" ,$puntoB)*1000  ;
     // se selcciona los campos y las fechas 
     $cursor  = $client->ztrack_ja->madurador->find(array('$and' =>array( ['created_at'=>array('$gte'=>new MongoDB\BSON\UTCDateTime($puntoA1),'$lte'=>new MongoDB\BSON\UTCDateTime($puntoB1)),'telemetria_id'=>intval(6)] )),
     array('projection' => array('_id' => 0,'trama'=> 1, 'created_at' => 1,'stateProcess' => 1,'set_point' => 1,'temp_supply_1' => 1,'return_air' => 1,'evaporation_coil' => 1,'ambient_air' => 1,'relative_humidity' => 1,'controlling_mode' => 1,'sp_ethyleno' => 1,
     'ethylene' => 1,'avl' => 1,'power_state' => 1,'compress_coil_1' => 1,'consumption_ph_1' => 1,'consumption_ph_2' => 1,'consumption_ph_3' => 1,'co2_reading' => 1,'o2_reading' => 1,'set_point_o2' => 1,'set_point_co2' => 1,'line_voltage' => 1,
     'defrost_term_temp' => 1,'defrost_interval' => 1,'inyeccion_pwm' => 1,'inyeccion_hora' => 1,'latitud' => 1,'longitud' => 1,'fresh_air_ex_mode' => 1,'telemetria_id'=>1,'cargo_1_temp' =>1,'cargo_2_temp' =>1,'cargo_3_temp' =>1,'cargo_4_temp' =>1,'id'=>1 ,'power_kwh' =>1),'sort'=>array('id'=>1)));
    //analizar el tiempo



    <?php
 db.madurador.explain("executionStats").find()
 db.madurador.find().sort({id:-1}).limit(1)


ZGRU1090804_12_2023_60    
$R = array(300,5,5);
$R1 = array(900,8,15);
$R2 = array(1800,12,30);
$R3 = array(3600,18,60);


    

function optimizarBD($resultado,$total,$dispositivo,$meses){
    $uri = 'mongodb://localhost:27017';
    // Specify Stable API version 1
    $apiVersion = new ServerApi(ServerApi::V1);
    $client = new MongoDB\Client($uri, [], ['serverApi' => $apiVersion]);
    $segundos =$resultado[0];
    $porcentaje =$resultado[1];
    $delta =$resultado[2];
    $array_optimo=[];
    $base_de_mongo = $dispositivo."_".$meses[0]."_".$delta ; 
    $cursorW  = $client->$base_de_mongo->madurador->insertOne($total[0]);
    //array_push($array_optimo,$total[0]);
    $return_air_inicial=$total[0]['return_air'];
    $tiempo_inicial=json_decode($total[0]['created_at'])/1000;
    $c=0;
    for($i=1;$i<count($total);$i++){
        $tiempo_a =json_decode($total[$i]['created_at'])/1000;
        $comparador =$total[$i]['return_air'];
        if(($tiempo_a-$tiempo_inicial) <= $segundos){
            if($comparador<0){
                if(( $comparador <= (($return_air_inicial)*(100-$porcentaje)/100)) && ($comparador >= (($return_air_inicial)*(100+$porcentaje)/100))){
                }else{
                    //array_push($array_optimo,$total[$i]);
                    $cursorW  = $client->$base_de_mongo->madurador->insertOne($total[$i]);
                    $return_air_inicial=$total[$i]['return_air'];
                    $tiempo_inicial=json_decode($total[$i]['created_at'])/1000;
                }
            }else{
                if(( $comparador >= (($return_air_inicial)*(100-$porcentaje)/100)) && ($comparador <= (($return_air_inicial)*(100+$porcentaje)/100))){
                }else{
                    //array_push($array_optimo,$total[$i]);
                    $cursorW  = $client->$base_de_mongo->madurador->insertOne($total[$i]);
                    $return_air_inicial=$total[$i]['return_air'];
                    $tiempo_inicial=json_decode($total[$i]['created_at'])/1000;
                }
            }
        }
        else{
            //array_push($array_optimo,$total[$i]);
            $cursorW  = $client->$base_de_mongo->madurador->insertOne($total[$i]);
            $return_air_inicial=$total[$i]['return_air'];
            $tiempo_inicial=json_decode($total[$i]['created_at'])/1000;
        }
        $c++;
    }
    return $c;
}



if($nombrecontenedor=="ZGRU1090804" || $nombrecontenedor=="ZGRU2232647" ||$nombrecontenedor=="ZGRU2009227"|| $nombrecontenedor=="ZGRU2008220"){
    //crear base de datos de wonderfull por mes y codigo y año
    $mes_fecha = date("n_Y");
    $base_de_mongo =$segundoFiltro."_".$mes_fecha;
      $cursorW  = $client->$base_de_mongo->madurador->insertOne($buscarUltimo);
    //$mensaje ="ENTRO EN WODERFUL";
    
    }else{
    
    $mes_fecha = date("n_Y");
    $base_de_mongo =$segundoFiltro."_".$mes_fecha;
      $cursorW  = $client->$base_de_mongo->madurador->insertOne($buscarUltimo);
    
    }
        echo $mensaje;
        //echo "RESET ";

    










        function totalDataCrudo($totalMeses,$disposistivo,$fechaInicio,$fechaFin){
            $uri = 'mongodb://localhost:27017';
            // Specify Stable API version 1
            $apiVersion = new ServerApi(ServerApi::V1);
            $client = new MongoDB\Client($uri, [], ['serverApi' => $apiVersion]);
            $puntoA = strtotime($fechaInicio);
            $puntoA1 = strtotime("-5 hours",$puntoA)*1000;
            $puntoB = strtotime($fechaFin)  ;
            $puntoB1 = strtotime("-5 hours" ,$puntoB)*1000;
            $contarMeses = count($totalMeses);
            $fechaActual =date("n_Y");
            $acumulado=[];
            if($contarMeses==1){
                $db=$disposistivo."_".$totalMeses[0];
                $cursor =$client->$db->madurador->find(array('$and' =>array( ['created_at'=>array('$gte'=>new MongoDB\BSON\UTCDateTime($puntoA1),'$lte'=>new MongoDB\BSON\UTCDateTime($puntoB1))])));
                //echo $db;
                foreach($cursor as $document){
                    array_push($acumulado,objetoCrudo($document));
                }
              //echo "acumulado " .count($acumulado);
            }else{
                $z=0;
                for($i=0;$i<$contarMeses-1;$i++){
                    $db=$disposistivo."_".$totalMeses[$i];
                    if($z==0){
                        $cursor =$client->$db->madurador->find(array('created_at'=>array('$gte'=>new MongoDB\BSON\UTCDateTime($puntoA1))));
                        foreach($cursor as $document){
                            array_push($acumulado,$document);
                        }
                        $z=1;
                    }else{
                        $cursor =$client->$db->madurador->find();
                        foreach($cursor as $document){
                            array_push($acumulado,$document);
                        }
                    }
        //echo "oli primer";
                }
                for($i=$contarMeses-1;$i<$contarMeses;$i++){
                    $db=$disposistivo."_".$totalMeses[$i];
                    $cursor =$client->$db->madurador->find(array('created_at'=>array('$lte'=>new MongoDB\BSON\UTCDateTime($puntoB1))));
                    foreach($cursor as $document){
                        array_push($acumulado,$document);
                    }
        //echo "oli segundo";
                }
            }
            return $acumulado;
        }
        







?>

