<?php

class AppModel {

    // CREATE A PRIVATE VARIABLE TO HOLD THE URL ROOT
    private $urlroot;

    // Cant access the constructor of this function
    public function __construct()
    {
        // SET THE VALUE OF THE URL ROOT
        $this->urlroot = dirname(__DIR__);

        // START THE APP MODEL
        require $this->urlroot."../App/Core/App.php";

        // Instantiate the app
        new App;
    }
}

// Instantiate the App model
new AppModel();

