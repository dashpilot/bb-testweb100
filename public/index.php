<?php
require("../app/init.php");

$router->get('/', function() use($blade){
    $data = [];
    $data['title'] = "Hello world";
    $blade->render("layout/page", $data);
});

$router->get('/about', function() use($blade){
    $data = [];
    $data['title'] = "This is the about page";
    $blade->render("layout/page", $data);
});

$router->get('/contact', function() use($blade){
    $data = [];
    $data['title'] = "Contact Us";
    $blade->render("layout/page", $data);
});

$router->run();