<?php

    class Conexion {
        public function get_conexion(){
            $user = "postgres";
            $pass = "1234";
            $host = "localhost";
            $db = "pedido";
            $conexion =  new PDO("pgsql:host=$host;dbname=$db;",$user,$pass);
            return $conexion; //cadena de conexion
        }
    }

   /* $pruebacon=new Conexion();
    $con = $pruebacon->get_conexion();
    if($con){
        echo "Se conectó exitosamente";
    }else{
        echo "Error";
    }*/

?>