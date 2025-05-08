<?php
require_once("model/gastosmodel.php");
class gastoscontroller{
    private $gastosModel;
    public function __construct(){
       $gastosModel=new Gasto();
    }
    public static function gastos(){
        $gastosModel=new Gasto();
        $data = $gastosModel->obtenerGastos();
        require_once("view/gastos/vergastos.php");
    }
    public static function nuevo(){
        require_once("view/gastos/nuevo.php");
    }
    public static function guardar(){
        $descripcion=$_REQUEST['descripcion'];
        $monto=$_REQUEST['monto'];
        $idCategoria=$_REQUEST['idcategoria'];
        $fecha=$_REQUEST['fecha'];
        $gastosModel=new Gasto();
        $resultado=$gastosModel->insertarGasto($descripcion,
        $monto,$idCategoria,$fecha);
        header("location:".urlsite.
        "index.php?g=gastos");
    }
    public static function editar(){
        require_once("view/gastos/editar.php");
    }
    public static function eliminar(){
        $id 		= 	$_REQUEST['id'];    	
        $gastosModel=new Gasto();       
		$dato 		=	$gastosModel->eliminarGasto($id);
		header("location:".urlsite. "index.php?g=gastos");
    }
}
?>