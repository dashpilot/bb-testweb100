<?php
session_start();

require("lib/Router.php");
$router = new \Bramus\Router\Router();

require("lib/Blade.php");
use Esyede\Blade;
$blade = new Blade();