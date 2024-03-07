<?php
//error_reporting(E_ALL);
ini_set('memory_limit', '-1');
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
$dispositivos = array("ZGRU1090804");
$prueba1 =$dispositivos[0]."_".$mes_fecha;
try {
    // Send a ping to confirm a successful connection
    $client->selectDatabase('ZTRACK_P')->command(['ping' => 1]);
    //echo "Pinged your deployment. You successfully connected to MongoDB!\n";
} catch (Exception $e) {
    printf($e->getMessage());
}

//echo "WONDERFUL: <br>";
//echo $prueba1;
$total['ZGRU1090804'] = [];
$cursor  = $client->$prueba1->madurador->find(array(),array('sort'=>array('id'=>-1),'limit'=>400));
foreach ($cursor as $document) {
    array_unshift($total['ZGRU1090804'],$document);
}
echo json_encode($total);
//echo json_encode($cursor);
?>

<?php

class Conexion{
    private $conect;
    public function __construct($host,$db,$user,$pass)
    {
        $pdo = "mysql:host=".$host.";dbname=".$db.";.charset.";
        try {
            $this->conect = new PDO($pdo, $user, $pass);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error en la conexion".$e->getMessage();
        }
    }
    public function conect()
    {
        return $this->conect;
    }
}

?>
