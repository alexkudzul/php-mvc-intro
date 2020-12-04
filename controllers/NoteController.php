<?php

class NoteController
{
    public function index()
    {
        // Modelo
        require_once 'models/note.php';

        // Logica de la accion del controlador
        $note = new Note();
        $notes = $note->getAll('notes');
        // Vista
        require_once 'views/note/index.php';
    }
    public function create()
    {
        // Modelo
        require_once 'models/note.php';

        // Logica de la accion del controlador
        $note = new Note();
        $note->setUserId(1);
        $note->setTitle('Nueva nota');
        $note->setDescription('Nueva nota...');
        $note->save();

        // echo  $note->db->error;
        // die();

        // Vista
        header("Location: index.php?controller=Note&action=index");

    }
    public function delete()
    {

    }
}
