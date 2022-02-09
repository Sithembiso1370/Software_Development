<?php
    //Database params
    define('DB_HOST', 'localhost'); //Add your db host
    define('DB_USER', 'root'); // Add your DB root
    define('DB_PASS', ''); //Add your DB pass
    define('DB_NAME', 'mvcframework'); //Add your DB Name

    //APPROOT
    define('APPROOT', dirname(dirname(__FILE__)));
    // echo APPROOT;

    //URLROOT (Dynamic links)
    define('URLROOT', 'http://localhost/mvcframework');
    echo URLROOT;

    //Sitename
    define('SITENAME', 'MVC Framework');
