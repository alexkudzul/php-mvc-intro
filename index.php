<h1>Web con MVC</h1>
<?php

require_once 'autoload.php';
// require_once 'controllers/UserController.php';
// require_once 'controllers/NoteController.php';

if(isset($_GET['controller'])){
    // Concatenar Controller al metodo GET
    $name_controller = $_GET['controller'] . 'Controller';

}else{
    echo "La pagina no se encuentra disponible, ingrese un controller en la url<br>";
    echo "Ejemplo<br>";
    echo "http://php-mvc-intro.test/?controller=Note&action=index<br>";
    echo "http://php-mvc-intro.test/?controller=Note&action=create<br>";
    echo "http://php-mvc-intro.test/?controller=User&action=index<br>";
    echo "http://php-mvc-intro.test/?controller=User&action=create<br>";

    // detiene la ejecuccion si no existe el controlador
    exit();
}

if(class_exists($name_controller)){

    $controller = new $name_controller();
    // Obliga que se inserte dos parametros en la URL
    if (isset($_GET['action']) && method_exists($controller, $_GET['action'])) {
        $action = $_GET['action'];
        $controller->$action();
    } else {
        echo "La pagina no se encuentra disponible, ingrese una action en la url<br>";
        echo "Ejemplo<br>";
        echo "http://php-mvc-intro.test/?controller=Note&action=index<br>";
        echo "http://php-mvc-intro.test/?controller=Note&action=create<br>";
        echo "http://php-mvc-intro.test/?controller=User&action=index<br>";
        echo "http://php-mvc-intro.test/?controller=User&action=create<br>";
    }

}else{
    echo "La pagina no se encuentra disponible, error de controller, la clase no existe<br>";
    echo "Ejemplo<br>";
    echo "http://php-mvc-intro.test/?controller=Note&action=index<br>";
    echo "http://php-mvc-intro.test/?controller=Note&action=create<br>";
    echo "http://php-mvc-intro.test/?controller=User&action=index<br>";
    echo "http://php-mvc-intro.test/?controller=User&action=create<br>";
}

// http://php.test/php-mvc-intro/?controller=User&action=index
// http://php.test/php-mvc-intro/?controller=User&action=create

// http://php.test/php-mvc-intro/?controller=Note&action=index

?>