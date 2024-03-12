<?php
 header('Content-type: application/json; charset=utf-8');
 date_default_timezone_set('America/Lima');
 $datosRecibidos = file_get_contents("php://input");
 $recepcion_externa = json_decode($datosRecibidos);
 //$sql = $recepcion_externa->sql;
 require '../conexionMysql.php';
//$conexion =  new Conexion("localhost:3307","interfaz","root","Lpmp2018");
$conexion =  new Conexion("localhost","zgroupztrack","ztrack2023","lpmp2018");


$conexionHecha = $conexion->conect();

$sql = "SELECT * FROM contenedores where estado=1 and  ultima_fecha>'2024-03-08 12:42:44'";
$resul = $conexionHecha->prepare($sql);
$resul->execute();
$data = $resul->fetchAll(PDO::FETCH_ASSOC);
//echo  var_dump($data);
//return  json_encode($data);
echo json_encode($data);
