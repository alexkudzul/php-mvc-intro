<?php

/**
 * $classname, clase que se quiere cargar
 * include, Busca las clases en un directorio y hace un include de cada controlador
 * spl, ejecuta la function para buscar toda las clases del directorio que se le indique
 */

function app_autoloader($classname){
    include 'controllers/'.$classname.'.php';
}

spl_autoload_register('app_autoloader');
?>