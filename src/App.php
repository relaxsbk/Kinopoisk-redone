<?php

namespace src;

use src\Router\Router;
use src\Http\Request;

class App
{
    public function run(): void
    {
        $router = new Router();
        $request = Request::createFromGlobals();



        $router->dispatch($request->uri(), $request->method());

    }
}