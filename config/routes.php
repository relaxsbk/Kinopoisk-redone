<?php

use Kernel\Router\Route;
use src\Controllers\HomeController;
use src\Controllers\MovieController;


return [
        Route::get('/home', [HomeController::class, 'index']),

        Route::get('/movies', [MovieController::class, 'index']),

        Route::get('/test', function () {
            echo 'TEST';
        })
    ];