<?php

namespace Kernel;

use Kernel\Http\Request;
use Kernel\Router\Router;

class App
{
    public function run(): void
    {
        $router = new Router();
        $request = Request::createFromGlobals();



        $router->dispatch($request->uri(), $request->method());

    }
}