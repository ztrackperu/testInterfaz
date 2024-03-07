<?php
class Principal extends Controller{
    public function __construct() {
        session_start();
        parent::__construct();
    }
    public function index()
    {
        $data = $this->model->getContenedores();
        $data1 = json_encode($data,JSON_UNESCAPED_UNICODE);
        $this->views->getView($this, "principal",$data1);
        //echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }

}