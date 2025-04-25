<?php
class Index{
    private $listaGastos;
    public function __construct() {
        $this->listaGastos = array();
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
}
?>