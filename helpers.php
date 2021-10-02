<?php 

function view($viewName, $vars=[]){
    extract($vars);

    require __DIR__ . "/views/$viewName.php";
}