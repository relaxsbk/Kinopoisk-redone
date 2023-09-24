<?php

namespace src\Controllers;

use Kernel\Controller\Controller;
use Kernel\View\View;

class HomeController extends Controller
{
    public function index(): void
    {
        $view = new View();

        $view->page('home');
    }
}