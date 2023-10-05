<?php

namespace Kernel\Router;

use Kernel\Controller\Controller;
use Kernel\Http\Redirect;
use Kernel\Http\RedirectInterface;
use Kernel\Http\Request;
use Kernel\Http\RequestInterface;
use Kernel\Session\Session;
use Kernel\Session\SessionInterface;
use Kernel\View\View;
use Kernel\View\ViewInterface;

class Router implements RouterInterface
{
    private array $routes = [
        'GET' => [],
        'POST' => [],
    ];

    public function __construct(
        private  ViewInterface $view,
        private  RequestInterface $request,
        private RedirectInterface $redirect,
        private SessionInterface $session
    )
    {
        $this->initRoutes();
    }


    public function dispatch(string $uri, string $method): void
    {
        $route = $this->findRoute($uri, $method);

        if (!$route) {
           $this->notFound();
        }

        if (is_array($route->getAction())) {
            [$controller, $action] = $route->getAction();

            /** @var Controller $controller*/
            $controller = new $controller();

            call_user_func([$controller, 'setView'], $this->view);
            call_user_func([$controller, 'setRequest'], $this->request);
            call_user_func([$controller, 'setRedirect'], $this->redirect);
            call_user_func([$controller, 'setSession'], $this->session);

            call_user_func([$controller, $action]);
        } else {
            call_user_func($route->getAction());
        }

    }

    private function notFound(): void
    {
        echo '404 | Not Found';
        exit;
    }

    private function findRoute(string $uri, string $method): Route|false
    {
        if (!isset($this->routes[$method][$uri])) {
            return false;
        }

        return $this->routes[$method][$uri];
    }


    private function initRoutes(): void
    {
        $routes = $this->getRoutes();

        foreach ($routes as $route) {
            $this->routes[$route->getMethod()][$route->getUri()] = $route;
        }
    }

    /**
    * @return Route[]
    */
    public function getRoutes(): array
    {
        return require_once APP_PATH . '/config/routes.php';
    }
}