<?php
require_once 'Models/ModelBase.php';

class Note extends ModelBase
{
    public $user_id;
    public $title;
    public $description;

    public function __construct()
    {
        parent::__construct();
    }
    
    public function getUserId()
    {
        return $this->user_id;
    }
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function save(){

        $sql = "INSERT INTO notes(user_id,title,description,date) 
                    VALUES('{$this->user_id}', '{$this->title}', '{$this->description}', CURDATE())";

        // Ejecuta la consulta
        $save = $this->db->query($sql);

        return $save;
    }
}
