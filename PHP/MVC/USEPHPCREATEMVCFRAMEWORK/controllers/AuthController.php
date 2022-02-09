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
use app\models\loginModel;
use app\models\User;

class AuthController extends Controller {

    public  function login(Request $request){
        

        $loginModel = new LoginModel();

        // Create an array to hold errors
        $errors = [];
        if ($request->isPost()) {
           
            $loginModel->loadData($request->getBody());


            // Test if data is valid
            if ($loginModel->validate() && $loginModel->login()) {
                # code...
                // SET SESSIONS FOR RETRIEVAL ON OTHER PAGES
                Application::$app->response->redirect('/');  
                return 'success';       
            }

            // echo '<pre>';
            // var_dump($loginModel->errors);
            // echo '</pre>';

        }
        
        $this->setLayout('auth');
        return $this->render('login',[
            'model' => $loginModel
        ]); 


    }


    public function register(Request $request){

        $registerModel = new User();

        if ($request->isPost()) {
           
            $registerModel->loadData($request->getBody());


            // Test if data is valid
            if ($registerModel->validate() && $registerModel->register()) {
                # code...
                Application::$app->response->redirect('/login');  
                return 'success';       
            }

            // echo '<pre>';
            // var_dump($registerModel->errors);
            // echo '</pre>';

        }
        $this->setLayout('auth');
        return $this->render('register',[
            'model' => $registerModel
        ]); 

    }

    public function tulip(Request $request){

        $registerModel = new User();

        if ($request->isPost()) {
           
            $registerModel->loadData($request->getBody());


            // Test if data is valid
            if ($registerModel->validate() && $registerModel->register()) {
                # code...
                Application::$app->response->redirect('/login');  
                return 'success';       
            }

            // echo '<pre>';
            // var_dump($registerModel->errors);
            // echo '</pre>';

        }
        $this->setLayout('auth');
        return $this->render('tulip',[
            'model' => $registerModel
        ]); 

    }


}
