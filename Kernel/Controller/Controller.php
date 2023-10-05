<?php

namespace Kernel\Controller;

use Kernel\Http\Redirect;
use Kernel\Http\RedirectInterface;
use Kernel\Http\Request;
use Kernel\Http\RequestInterface;
use Kernel\Session\Session;
use Kernel\Session\SessionInterface;
use Kernel\View\View;
use Kernel\View\ViewInterface;

abstract class Controller
{
    private ViewInterface $view;

    private RequestInterface $request;

    private RedirectInterface $redirect;
    private SessionInterface $session;

    public function view(string $name): void
    {
        $this->view->page($name);
    }


    public function setView(ViewInterface $view): void
    {
        $this->view = $view;
    }

    public function request(): RequestInterface
    {
        return $this->request;
    }
    public function setRequest(RequestInterface $request): void
    {
        $this->request = $request;
    }

    public function setRedirect(RedirectInterface $redirect): void
    {
        $this->redirect = $redirect;
    }

    public function redirect(string $url): void
    {
        $this->redirect->to($url);
    }

    public function setSession(SessionInterface $session): void
    {
        $this->session = $session;
    }

    public function session(): SessionInterface
    {
        return $this->session;
    }


}