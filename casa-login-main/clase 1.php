<?php



    $cn=null;
    function obtenerConexion(){
        try{
            $cadena = 'mysql:host=localhost;dbname=administracion';
            $cn = new PDO($cadena,'root','');
            $cn->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
            return $cn;
        }catch(PDOException $ex){
            echo 'Error en la conexion :('.$ex->getMessage();
        }
    }


obtenerConexion();

?>