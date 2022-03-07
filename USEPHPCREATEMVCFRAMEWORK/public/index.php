<?php
/**
 * User : Sithembiso1370 ...
 * @author Sithembiso Maphanga
 * @package app\core
 * @Date  : 15/12/2021
 */ #Time : 18:38
//  declare(strict_types=1);


// Get access to the necessary namespaces

// Get Access to the Namespaces  Controller classes 
use app\controllers\SiteController;
use app\controllers\AuthController;

// Get Access to the Namespaces  Application class
use app\core\Application;



// Get the Autoload file to load all the necessary classes of the environment to this index page
require_once __DIR__.'/../vendor/autoload.php';

// GET the environment variables from my root Directory
$dotenv = Dotenv\Dotenv::createUnsafeImmutable(dirname(__DIR__));
// load the environment variables from my root Directory
$dotenv->load();


// CREATE A CONFIG OBJECT WITH THE ENVIROMENT VARIABLES LOADED ABOVE
$config = [
    //  Configure the user class
    'userClass' => \app\models\User::class,
    // Configure the Environment Variables
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
    ]
];

// Onlaod of the page : I need to Declaire a new instance of a class named Application And Pass it the Current:
// Directory of the Index Page
// Current Configurations Array
$app =  new Application(dirname(__DIR__),$config);


// Registering Routes

// First Routes : Site Controller routes
$app->router->get("/", [SiteController::class, 'index']);
$app->router->get("/contact", [SiteController::class, 'contact']);


// 2nd Routes : Authentication Controller  Routes
$app->router->get("/login", [AuthController::class, 'login']);
$app->router->get("/register", [AuthController::class, 'register']);
$app->router->post("/login", [AuthController::class, 'login']);
$app->router->post("/register", [AuthController::class, 'register']);
$app->router->get("/logout", [AuthController::class, 'logout']);


// Contact Form Routes
$app->router->get("/contact", [SiteController::class, 'contact']);
$app->router->post("/contact", [SiteController::class, 'contact']);
$app->router->get("/dashboard", [SiteController::class, 'dashboard']);

// Protected Routes
$app->router->get("/profile", [AuthController::class, 'profile']);
$app->router->get("/admin", [AuthController::class, 'admin']);



// My extra Views on top of this framwework
$app->router->get("/lts/ltp_views/1200px", "/layouts/laptopviews/1200px");
$app->router->get("/lts/mb_views/440px", "/layouts/mobileviews/440px");

// tulip site view
$app->router->get("/tulip", [AuthController::class, 'tulip']);

// Need to be able to pass in a user route at some point in the application
// The Run this cycle on URL refresh : Execute View and Model of the App
$app->run();


