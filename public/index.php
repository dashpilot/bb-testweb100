<?php
require("../app/init.php");

$router->get('/', function(){
    echo "Hello world";
});

$router->get('/about', function(){
    echo "This is the about page";
});

$router->run();