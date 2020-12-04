<?php

class DataBase{
    /**
     * utf8, configura la codificacion de caracteres, si la DB devulve una tilde o ñ, lo devolvera en formato castellano
     */
    public static function conexion(){

        $conexion = new mysqli("localhost", "root", "", "php_mvc_intro");
        $conexion->query("SET NAMES 'utf8'");

        return $conexion;
    }
}


?>