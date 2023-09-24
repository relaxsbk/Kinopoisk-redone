<?php

namespace Kernel;

use Kernel\Container\Container;
use Kernel\Http\Request;
use Kernel\Router\Router;

class App
{
    private Container $container;

    public function __construct()
    {
        $this->container = new Container();
    }

    public function run(): void
    {
//        $router = new Router();
//        $request = Request::createFromGlobals();



        $this->container
            ->router
            ->dispatch(
                $this->container->request->uri(),
                $this->container->request->method()
            );

    }
}