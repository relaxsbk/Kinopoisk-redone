<?php
    define('APP_PATH', __DIR__);

//    На каждое добавление класс с функционалом, нудно прикрепить.
    require_once APP_PATH . '/src/App.php';
    require_once APP_PATH . '/src/Router/Router.php';
    require_once APP_PATH . '/src/Router/Route.php';

    require_once APP_PATH . '/src/Controllers/HomeController.php';
    require_once APP_PATH . '/src/Controllers/MovieController.php';

    require_once APP_PATH . '/src/Http/Request.php';



    use src\App;


    $app = new App();
    $app->run();

