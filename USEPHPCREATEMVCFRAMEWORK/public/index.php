<?php
/**
 * User : Sithembiso1370 ...
 * @author Sithembiso Maphanga
 * @package app\core
 * @Date  : 15/12/2021
 */ #Time : 18:38


//  Call thes NameSpaces
namespace app\core;
namespace app\controllers;

// require_once "./core/Application.php";
require_once __DIR__.'/../vendor/autoload.php';


// Get access to the namespaceS CLASS
use app\controllers\SiteController;
use app\core\Application;


// Onlaod of the page : I need to Declaire a new instance of a class named Application
// And Pass it the Current Data
$app =  new Application(dirname(__DIR__));


// Registering Routes
// First Routes
$app->router->get("/", [SiteController::class, 'home']);
$app->router->get("/contact", [SiteController::class, 'contact']);


// Authentication Routes
$app->router->get("/login", [AuthController::class, 'login']);
$app->router->get("/register", [AuthController::class, 'register']);
$app->router->post("/login", [AuthController::class, 'login']);
$app->router->post("/register", [AuthController::class, 'register']);


// Contact Form Route
$app->router->post("/contact", [SiteController::class, 'handleContact']);
$app->router->get("/dashboard", [AuthController::class, 'dashboard']);



// My extra Views on top of this framwework
$app->router->get("/lts/ltp_views/1200px", "/layouts/laptopviews/1200px");
$app->router->get("/lts/mb_views/440px", "/layouts/mobileviews/440px");


// Need to be able to pass in a user route at some point in the application
// The Run this cycle on URL refresh : Execute View and Model of the App
$app->run();







// $app->router->get("/users", function(){
//     return "USERS";
// });



// $app->router->post("/contact",
// function(){
//     call_user_func(SiteController::class,'handleContact');
// }
// );


