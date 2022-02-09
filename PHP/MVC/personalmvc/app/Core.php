<?php
// URL EXAMPLE : http://localhost:8080/admin/users/add?xx=3&b-4


/**
* e.g : 
* admin - The controller
* users - The View
* add - The Method Applied
* xx=3&b-4 - The parameters passed
 */

require_once dirname(__DIR__).'/app/Request.php';
/**
 * NAME : SITHEMBISO Maphanga
 */

class Core extends Request {

    public function __construct()
    {

        parent::__construct();
        // IF the url is empty
        if ($this->retURL() === "/") {
            # code...
            require_once dirname(__DIR__).'/public/views/main.php';
        }
        else{
            // Controller
            // echo $this->getURLARRAY()[1];
            

            $classame =  ucfirst($this->getURLARRAY()[1]);
            require_once dirname(__DIR__).'/app/'.$this->getURLARRAY()[1].'.php';
            $controller = new $classame($this->getURLARRAY()[2]);
            // $controller->users();

            // echo '<br>';
            // Method
            // echo $this->getURLARRAY()[2];
            $my_method = $this->getURLARRAY()[2];
            $controller->$my_method();
            // echo '<br>';

            // Action plus action parameters
            // echo strpos($this->getURLARRAY()[3],'?');
            // echo $this->getURLARRAY()[3];
            // echo substr($this->getURLARRAY()[3],0,strpos($this->getURLARRAY()[3],'?'));
            echo '<br>';
            // the action parameters
            // echo substr($this->getURLARRAY()[3],strpos($this->getURLARRAY()[3],'?')+1);
            echo '<br>';
        }
    }

    // Call the constructor of the Request
    public function getURLARRAY(){
        return explode("/",$this->retURL());
    }


}

new Core();