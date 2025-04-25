<?php
require_once("model/indexmodel.php");
class indexcontroller{
    private $indexmodel;
    public function __construct(){
        $indexmodel = new Index();
    }
    public static function index(){
        $indexmodel=new Index();
        $data = $indexmodel->mostrarUltimosGastos();
        require_once("view/index.php");
    }
    public static function acerca(){
        require_once("view/acercade.php");
    }
}
?>