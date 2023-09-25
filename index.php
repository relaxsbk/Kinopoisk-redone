<?php
    define('APP_PATH', __DIR__);

//    На каждое добавление класс с функционалом, нудно прикрепить.

   //Приложение
    require_once APP_PATH . '/Kernel/App.php';
    //Абстрактные классы
    require_once APP_PATH . '/Kernel/Controller/Controller.php';

    //Все остальные классы в проекте
    require_once APP_PATH . '/Kernel/Router/Router.php';
    require_once APP_PATH . '/Kernel/Router/Route.php';
    require_once APP_PATH . '/Kernel/Http/Request.php';
    require_once APP_PATH . '/Kernel/Container/Container.php';
    require_once APP_PATH . '/Kernel/View/View.php';
    require_once APP_PATH . '/Kernel/Validator/Validator.php';

    //Контроллеры
    require_once APP_PATH . '/src/Controllers/HomeController.php';
    require_once APP_PATH . '/src/Controllers/MovieController.php';




use Kernel\App;


$app = new App();
    $app->run();

