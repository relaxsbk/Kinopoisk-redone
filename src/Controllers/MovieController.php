<?php

namespace src\Controllers;

use Kernel\Controller\Controller;
use Kernel\Validator\Validator;
use Kernel\View\View;

class MovieController extends Controller
{
    public function index(): void
    {
        $view = new View($this->session());

        $view->page('movies');
    }

    public function add(): void
    {
        $view = new View($this->session());

        $view->page('/admin/movies/add');
    }

    public function store()
    {
       $validation = $this->request()->validate([
           'name' => ['required', 'min:3', 'max:50']
       ]);

       if (!$validation) {
           foreach ($this->request()->errors() as $field => $errors) {
               $this->session()->set($field, $errors);
           }

           $this->redirect('/admin/movies/add');

       }
       die('Validation passed');
    }
}