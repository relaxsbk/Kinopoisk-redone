<?php

namespace Kernel\Container;

use Kernel\Http\Redirect;
use Kernel\Http\RedirectInterface;
use Kernel\Http\Request;
use Kernel\Http\RequestInterface;
use Kernel\Router\Router;
use Kernel\Router\RouterInterface;
use Kernel\Session\Session;
use Kernel\Session\SessionInterface;
use Kernel\Validator\Validator;
use Kernel\Validator\ValidatorInterface;
use Kernel\View\View;
use Kernel\View\ViewInterface;

class Container
{
    public readonly RequestInterface $request;

    public readonly RouterInterface $router;

    public readonly ViewInterface $view;
    public readonly ValidatorInterface $validator;
    public readonly RedirectInterface $redirect;
    public readonly SessionInterface $session;

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