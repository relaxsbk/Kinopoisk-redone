<?php

namespace Kernel\Container;

use Kernel\Http\Redirect;
use Kernel\Http\Request;
use Kernel\Router\Router;
use Kernel\Session\Session;
use Kernel\Validator\Validator;
use Kernel\View\View;

class Container
{
    public readonly Request $request;

    public readonly Router $router;

    public readonly View $view;
    public readonly Validator $validator;
    public readonly Redirect $redirect;
    public readonly Session $session;

    public function __construct()
    {
     $this->registerServices();
    }

    private function registerServices(): void
    {
        $this->request = Request::createFromGlobals();
        $this->validator = new Validator();
        $this->request->setValidator($this->validator);
        $this->redirect = new Redirect();
        $this->session = new Session();
        $this->view = new View($this->session);
        $this->router = new Router($this->view, $this->request, $this->redirect, $this->session);

    }
}