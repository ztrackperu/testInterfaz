<?php
class Principal extends Controller{
    public function __construct() {
        session_start();
        parent::__construct();
    }
    public function index()
    {
        //$data = $this->model->getContenedores();
        //$data1 = json_encode($data,JSON_UNESCAPED_UNICODE);
        //$cositas = $_GET['data'];
        //$data1 =$cositas;
        if($_SESSION['activo_ztrack']){
            $this->views->getView($this, "principal");
        }else{
            header("location: ".base_url);
        }
        //$this->views->getView($this, "principal");
        //echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }
    public function sesion($data)
    {
        //aqui habilitamos la session 
        $info = explode(",", $data);
        $_SESSION['id_ztrack'] = $info[0];
        $_SESSION['usuario_ztrack'] = $info[1];
        $_SESSION['apellidos_ztrack'] = $info[2];
        $_SESSION['nombres_ztrack'] = $info[3];
        $_SESSION['correo_ztrack'] = $info[4];
        $_SESSION['c_f_ztrack'] = $info[5];
        $_SESSION['empresa_ztrack'] = $info[6];
        $_SESSION['activo_ztrack'] = true;
        //echo var_dump($info);

header("location: ".base_url."/Principal");


    }
    public function salir()
    {
        session_destroy();
        header("location: ".base_url);
    }

}