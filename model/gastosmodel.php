<?php
class Gasto{
    private $listaGastos;
    public function __construct()
    {
        $this->listaGastos=array();
    }
    //CREATE
    public function insertarGasto($descripcion,$monto,$idcategoria,$fecha){
        include_once("conexion.php");
        $cnn=new Conexion();
        $consulta="INSERT INTO gastos(Descripcion,Monto,
        IdCategoria,FechaRegistro,Activo)VALUES('$descripcion','$monto',
        '$idcategoria','$fecha',1)";
        $resultado=$cnn->prepare($consulta);
        $resultado->execute();
        if($resultado){
            return true;
        }
        else{
            return false;
        }
    }
    //READ
    public function obtenerGastos(){
        include_once("conexion.php");
        $cnn=new Conexion();
        $consulta="SELECT * FROM gastos";
        $resultado = $cnn->prepare($consulta);
        $resultado->execute();
        while ($row = $resultado->fetchAll(PDO::FETCH_ASSOC)) {
            $this->listaGastos[]=$row;
        }
        return $this->listaGastos;    
    }
    //UPDATE
    public function modificarGasto($id,$descripcion,$monto,$idcategoria,$fecha){
        include_once("conexion.php");
        $cnn=new Conexion();
        $consulta="UPDATE gastos SET Descripcion='$descripcion' where Id='$id'";
        $resultado=$cnn->prepare($consulta);
        $resultado->execute();
        if($resultado){
            return true;
        }
        else{
            return false;
        }
    }
    //DELETE
    public function eliminarGasto($id){
        include_once("conexion.php");
        $cnn=new Conexion();
        $consulta="DELETE FROM gastos where Id='$id'";
        $resultado=$cnn->prepare($consulta);
        $resultado->execute();
        if($resultado){
            return true;
        }
        else{
            return false;
        }
    }
}
?>