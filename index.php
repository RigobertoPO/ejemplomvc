<?php
require_once("config.php");
require_once("controller/indexcontroller.php");
if(isset($_GET['i'])):
    $metodo=$_GET['i'];
    if(method_exists('indexcontroller',$metodo)):
        indexcontroller::{$metodo}();
    endif;
else:
    if(isset($_GET['g'])){
        $metodo=$_GET['g'];
        if(method_exists('gastoscontroller',$metodo)){
            gastoscontroller::{$metodo}();
        }else{
            if(isset($_GET['u'])){
                $metodo=$_GET['u'];
                if(method_exists('usuarioscontroller',$metodo)){
                    usuarioscontroller::{$metodo}();
                }
            }else{
                indexcontroller::index();
            }
        }
        
    }

endif;
?>