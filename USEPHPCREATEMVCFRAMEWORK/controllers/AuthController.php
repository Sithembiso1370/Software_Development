<?php
/**
 * User : Sithembiso1370 ...
 * Class Authentication Controller
 * @author Sithembiso Maphanga
 * @package app\controllers
 * @Date  : 08/01/2022
 * @Time : 06:13
 */ 

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

use app\models\RegisterModel;

class AuthController extends Controller {




    public  function login(Request $request){
        $params = [];

        if ($request->isPost()) {

            # code...
            // array_push($params,'Handling this submitted data');

            $body = $request->getBody();


            foreach ($body as $key => $value) {
                $params[$key] = $value;
            }

            // Test if data is valid
            if ($params['username'] == '') {
                # code...
                $this->setLayout('auth');
                $params['error'] = 'Please fill in all fields';
                return $this->render('login',$params);
            }
            else {
                # code...
                return $this->render('home',$params);
            }
            
            
        }
        else {
            # code...
            $this->setLayout('auth');
            return $this->render('login',$params);
        }


    }



    protected function cleanData(){
        // Filture ,Sanitize and Clean The Data 
        // Return the Sanitized Data as an array of the same form,type and Structure
    }



    public function register(Request $request){

        $params = [];
        // Create an array to hold errors
        $errors = [];

        if ($request->isPost()) {

            $registerModel = new RegisterModel();

            $firstname = $request->getBody()['firstname'];

            // echo $firstname;


            // Test if data is valid
            if (!$firstname) {
                # code...
                $this->setLayout('auth');
                $errors['firstname'] = 'Please fill in all fields';
                return $this->render('register',$errors);
            }
            else {
                # code...
                return $this->render('home',$params);
            }
            
            
        }
        else {
            # code...
            $this->setLayout('auth');
            return $this->render('register',$params);
        }

    }



    public function handleRegister(){
        $resp = '';
        // Check if the form is filled
        if (isset($_REQUEST['subject']) && isset($_REQUEST['email'])  && isset($_REQUEST['body'])) {
            # code...
            $resp = "ready to save this submitted data";
            foreach ($_REQUEST  as $key => $value) {
                # code...
                $resp .= '<br> '.$key.' => '.$value;
            }

            $params = [
                'response' => $_REQUEST['subject']
            ];
    
            return $this->render('login',$params);
        }
        else {
            $resp = 'Please fill all values';
            $params = [
                'response' => $_REQUEST['subject']
            ];
    
            return $this->render('register',$params);
        }
    }



}
