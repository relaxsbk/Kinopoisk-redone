<?php

use Kernel\Router\Route;
use src\Controllers\HomeController;
use src\Controllers\MovieController;


return [
        Route::get('/home', [HomeController::class, 'index']),

        Route::get('/movies', [MovieController::class, 'index']),
        Route::get('/admin/movies/add', [MovieController::class, 'add']),
        Route::post('/admin/movies/add', [MovieController::class, 'store']),

        Route::get('/test', function () {
            echo 'TEST';
        })
    ];