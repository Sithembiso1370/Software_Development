<?php
// URL EXAMPLE : http://localhost:8080/admin/users/add?xx=3&b-4
require_once dirname(__DIR__).'/app/Model.php';

class Admin extends Model {
    public $my_model ;

    public function __construct($model)
    {
        parent::__construct('users');
        $this->my_model = $this->getmodel($model);
    }

    public function users(){
        // echo 'users';
        require_once dirname(__DIR__).'/public/views/main.php';
        
    }

    
}