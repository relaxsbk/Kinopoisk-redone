<?php
    define('APP_PATH', __DIR__);

//    На каждое добавление класс с функционалом, нудно прикрепить.
    require_once APP_PATH . '/Kernel/App.php';
    require_once APP_PATH . '/Kernel/Router/Router.php';
    require_once APP_PATH . '/Kernel/Router/Route.php';
    require_once APP_PATH . '/Kernel/Http/Request.php';


    require_once APP_PATH . '/src/Controllers/HomeController.php';
    require_once APP_PATH . '/src/Controllers/MovieController.php';




use Kernel\App;


$app = new App();
    $app->run();

