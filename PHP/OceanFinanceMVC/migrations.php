<?php
/**
 * User : Sithembiso1370 ...
 * @author Sithembiso Maphanga
 * @package app\core
 * @Date  : 15/12/2021
 */ #Time : 18:38
//  declare(strict_types=1);



// Get access to the namespaceS CLASS
use app\controllers\SiteController;
use app\controllers\AuthController;
use app\core\Application;



// require_once "./core/Application.php";
require_once __DIR__.'/vendor/autoload.php';

// load the environment variables
// $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();



$config = [
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
    ]
];
// Onlaod of the page : I need to Declaire a new instance of a class named Application
// And Pass it the Current Data
$app =  new Application(__DIR__,$config);




$app->db->applyMigrations();