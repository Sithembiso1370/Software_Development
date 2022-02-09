<?php
/**
 * User : Sithembiso1370 ...
 * @author Sithembiso Maphanga
 * @package app\core
 * @Date  : 15/12/2021
 */ #Time : 18:38
//  declare(strict_types=1);

//  Call thes NameSpaces
// namespace app\core;
// namespace app\controllers;
// namespace app;




// Get access to the namespaceS CLASS
use app\controllers\SiteController;
use app\controllers\AuthController;
use app\core\Application;



// require_once "./core/Application.php";
require_once __DIR__.'/../vendor/autoload.php';

// load the environment variables
// $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv = Dotenv\Dotenv::createUnsafeImmutable(dirname(__DIR__));
$dotenv->load();


// CREATE A CONFIG OBJECT WITH THE ENVIROMENT VARIABLES
$config = [
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
    ]
];

// Onlaod of the page : I need to Declaire a new instance of a class named Application
// And Pass it the Current Data
$app =  new Application(dirname(__DIR__),$config);


// Registering Routes
// First Routes : Sithe Controller routes
$app->router->get("/", [SiteController::class, 'home']);
$app->router->get("/contact", [SiteController::class, 'contact']);


// Authentication Controller  Routes
$app->router->get("/login", [AuthController::class, 'login']);
$app->router->get("/register", [AuthController::class, 'register']);
$app->router->post("/login", [AuthController::class, 'login']);
$app->router->post("/register", [AuthController::class, 'register']);


// Contact Form Routes
$app->router->post("/contact", [SiteController::class, 'handleContact']);
$app->router->get("/dashboard", [SiteController::class, 'dashboard']);



// My extra Views on top of this framwework
$app->router->get("/lts/ltp_views/1200px", "/layouts/laptopviews/1200px");
$app->router->get("/lts/mb_views/440px", "/layouts/mobileviews/440px");

// tulip site view
$app->router->get("/tulip", [AuthController::class, 'tulip']);

// Need to be able to pass in a user route at some point in the application
// The Run this cycle on URL refresh : Execute View and Model of the App
$app->run();


