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
use app\core\Response;
use app\models\LoginForm;
use app\models\loginModel;
use app\models\User;

class AuthController extends Controller {

    public  function login(Request $request, Response $response){
        

        $loginForm = new LoginForm();

        // Create an array to hold errors
        $errors = [];
        if ($request->isPost()) {
           
            $loginForm->loadData($request->getBody());


            // echo '<pre>';
            // var_dump($loginForm->email);
            // echo '<pre>';
            // Test if data is valid
            if ($loginForm->validate() && $loginForm->login()) {
                # code...
                // SET SESSIONS FOR RETRIEVAL ON OTHER PAGES
                Application::$app->session->setFlash('login','Welcome Back !!');
                Application::$app->response->redirect('/');  
                exit;       
            }
        }
        
        $this->setLayout('auth');
        return $this->render('login',[
            'model' => $loginForm
        ]); 


    }


    public function register(Request $request){

        $user = new User();

        if ($request->isPost()) {
           
            $user->loadData($request->getBody());


            // Test if data is valid
            if ($user->validate() && $user->save()) {
                # code...
                Application::$app->session->setFlash('success','Thanks for registering');
                Application::$app->response->redirect('/');  
                exit;     

            }

            // echo '<pre>';
            // var_dump($registerModel->errors);
            // echo '</pre>';

        }
        $this->setLayout('auth');
        return $this->render('register',[
            'model' => $user
        ]); 

    }

    public function tulip(Request $request){

        $user = new User();

        if ($request->isPost()) {
           
            $user->loadData($request->getBody());


            // Test if data is valid
            if ($user->validate() && $user->save()) {
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
            'model' => $user
        ]); 

    }


}
