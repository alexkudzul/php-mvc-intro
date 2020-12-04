<?php

require_once 'config/database.php';

// Tendra metodos que sean comunes con otros modelos
class ModelBase{

    public $db;

    public function __construct()
    {
        $this->db = DataBase::conexion();
    }
    // Funciones adicionales
    public function getAll($tabla){

        $sql = "SELECT * FROM $tabla ORDER BY id DESC";
        
        // Ejecuta la consulta
        $query = $this->db->query($sql);

        return $query;

    }
}


?>