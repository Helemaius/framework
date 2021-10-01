<?php
use App\Router;

Router::get('/', function(){
    echo "Home page";
});

Router::get('/about', function(){
    echo "About us";
});