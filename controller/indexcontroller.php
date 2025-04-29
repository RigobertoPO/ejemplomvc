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
    public static function login(){
        require_once("view/login.php");
    }
    public static function acerca(){
        require_once("view/acercade.php");
    }
    public static function autenticar(){
        $correo=$_REQUEST['correo'];
        $password=$_REQUEST['password'];
        $indexmodel=new Index();
        $resultado=$indexmodel->autentificacion($correo,$password);
        session_start();
        if(isset($resultado)):
            foreach ($resultado as $key => $value){
                foreach ($value as $item ){              
                    $correo=$item['Correo']; 
                    $_SESSION["idUsuario"] = $item['Id']; 
                    $_SESSION["nombreUsuario"] = $item['Nombre'];
                    $_SESSION["correo"] =  $item['Correo'];  
                    $_SESSION["tipoUsuario"] = $item['Tipo'];
                }
            }
        endif;   
        header("location:".urlsite."index.php?i=index");
    }
    public static function cerrarSesion(){	
        session_start();
        if(session_destroy()){
            header("location:".urlsite."index.php?i=index");
        }	       
    }
}
?>