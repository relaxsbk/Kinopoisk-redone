<?php

namespace src\Controllers;

use Kernel\Controller\Controller;
use Kernel\Validator\Validator;
use Kernel\View\View;

class MovieController extends Controller
{
    public function index(): void
    {
        $view = new View();

        $view->page('movies');
    }

    public function add(): void
    {
        $view = new View();

        $view->page('/admin/movies/add');
    }

    public function store()
    {
       $validation = $this->request()->validate([
           'name' => ['required', 'min:3', 'max:50']
       ]);

       if (!$validation) {
           $this->redirect('/admin/movies/add');
//           var_dump('Validation failed', $this->request()->errors());
//           die();
       }
       die('Validation passed');
    }
}