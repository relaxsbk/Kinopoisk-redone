<?php
    define('APP_PATH', __DIR__);

//    На каждое добавление класс с функционалом, нужно прикрепить.

   //Приложение
    require_once APP_PATH . '/Kernel/App.php';

    //Абстрактные классы
    require_once APP_PATH . '/Kernel/Controller/Controller.php';

    //Интерфейсы
    require_once APP_PATH . '/Kernel/Router/RouterInterface.php';
    require_once APP_PATH . '/Kernel/Http/RequestInterface.php';
    require_once APP_PATH . '/Kernel/Http/RedirectInterface.php';
    require_once APP_PATH . '/Kernel/View/ViewInterface.php';
    require_once APP_PATH . '/Kernel/Validator/ValidatorInterface.php';
    require_once APP_PATH . '/Kernel/Session/SessionInterface.php';




    //Все остальные классы в проекте
    require_once APP_PATH . '/Kernel/Router/Router.php';
    require_once APP_PATH . '/Kernel/Router/Route.php';
    require_once APP_PATH . '/Kernel/Http/Request.php';
    require_once APP_PATH . '/Kernel/Http/Redirect.php';
    require_once APP_PATH . '/Kernel/Container/Container.php';
    require_once APP_PATH . '/Kernel/View/View.php';
    require_once APP_PATH . '/Kernel/Validator/Validator.php';
    require_once APP_PATH . '/Kernel/Session/Session.php';



    //Контроллеры
    require_once APP_PATH . '/src/Controllers/HomeController.php';
    require_once APP_PATH . '/src/Controllers/MovieController.php';




use Kernel\App;


$app = new App();
    $app->run();

