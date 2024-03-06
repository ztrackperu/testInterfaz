<?php
class Configuracion extends Controller
{
    public function __construct()
    {
        /*
        session_start();
        if (empty($_SESSION['activo'])) {
            header("location: " . base_url);
        }
        */
        parent::__construct();
        
    }
    public function error()
    {
        $this->views->getView($this, "error");
        //echo "sestooy en error";
    }

}