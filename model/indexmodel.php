<?php
class Index{
    private $listaGastos;
    private $usuarios;
    public function __construct() {
        $this->listaGastos = array();
        $this->usuarios = array();
    }
    public function mostrarUltimosGastos(){
        include_once("conexion.php");
        $cnn=new Conexion();
        $consulta="SELECT * FROM gastos 
        Order by Id DESC LIMIT 5";
        $resultado = $cnn->prepare($consulta);
        $resultado->execute();
        while ($row = $resultado->fetchAll(PDO::FETCH_ASSOC)) {
            $this->listaGastos[]=$row;
        }
        return $this->listaGastos;    
    }
    public function autentificacion($correo,$password){
        include_once("conexion.php");
        $cnn=new Conexion();
        $consulta="SELECT * FROM usuarios 
        where Correo=".$correo." And Password=".$password;
        $resultado = $cnn->prepare($consulta);
        $resultado->execute();
        while ($row = $resultado->fetchAll(PDO::FETCH_ASSOC)) {
            $this->usuarios[]=$row;
        }
        return $this->usuarios;    
    }
}
?>