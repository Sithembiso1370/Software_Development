<?php
/**
 * User : Sithembiso1370 ...
 * @author Sithembiso Maphanga
 * @package app\core
 * @Date  : 15/12/2021
 */ #Time : 18:38


 
namespace app\core;

// require_once "./core/Application.php";
require_once __DIR__.'/../vendor/autoload.php';


// Get access to the namespace
use app\core\Application;
// Get access to the namespace
use app\core\Config;

// Onlaod of the page : I need to Declaire a new instance of a class named Application
$app =  new Application();
// $configs = new Config(); 
// $page_title = $configs->returntitle();
$page_title = $app->returntitle();



// Registering Available Modeles and Views
$app->router->get("/", function(){
    return "Hello World MVC FRAMEWORK";
});

$app->router->get("/contact", 'contact');

$app->router->get("/users", function(){
    return "USERS";
});



// My extra Views on top of this framwework
$app->router->get("/lts/ltp_views/1200px", "/layouts/laptopviews/1200px");
$app->router->get("/lts/mb_views/440px", "/layouts/mobileviews/440px");


// Need to be able to pass in a user route at some point in the application
// The Run this cycle on URL refresh : Execute View and Model of the App
$app->run();


