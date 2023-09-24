<?php

namespace src\Controllers;

use Kernel\Controller\Controller;
use Kernel\View\View;

class MovieController extends Controller
{
    public function index(): void
    {
        $view = new View();

        $view->page('movies');
    }
}