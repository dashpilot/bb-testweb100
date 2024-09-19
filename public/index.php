<?php
require("../app/init.php");

if(file_exists("../app/modules/cms/Cms.php")){
    include("../app/modules/cms/Cms.php");
}

$router->get('/', function() use($blade){
    $data = [];
    $data['title'] = "Hello world";
    $data['page'] = "home";
    $blade->render("layout/page", $data);
});

$router->get('/about', function() use($blade){
    $data = [];
    $data['title'] = "This is the about page";
    $data['page'] = "about";
    $blade->render("layout/page", $data);
});

$router->get('/contact', function() use($blade){
    $data = [];
    $data['title'] = "Contact Us";
    $data['page'] = "contact";
    $blade->render("layout/page", $data);
});

$router->run();