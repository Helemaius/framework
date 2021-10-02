<?php

use App\Router;
use App\Controller\HomeController;
use App\Controller\PostController;


Router::get('/', [HomeController::class, 'index']);
Router::post('/', [HomeController::class, 'index']);
Router::post('/upload', [HomeController::class, 'upload']);
Router::get('/about', [HomeController::class, 'about']);
Router::get('/posts', [PostController::class, 'posts']);