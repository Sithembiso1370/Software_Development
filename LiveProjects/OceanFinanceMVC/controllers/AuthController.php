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
use app\core\middlewares\AuthMiddleware;
use app\models\User;


class AuthController extends Controller {

    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['profile']));
    }

    public  function login(Request $request, Response $response){
        $loginForm = new LoginForm();

        if ($request->method() === 'post') {
            $loginForm->loadData($request->getBody());
            if ($loginForm->validate() && $loginForm->login()) {
                Application::$app->response->redirect('/');
                // log the user in
                // Application::$app->login()
                return true;
            }
        }
        $this->setLayout('auth');
        return $this->render('login', [
            'model' => $loginForm
        ]);
    }


    public function register(Request $request)
    {
        $registerModel = new User();


        if ($request->method() === 'post') {

            $registerModel->loadData($request->getBody());

            
            if ($registerModel->validate() && $registerModel->save()) {
                Application::$app->session->setFlash('success', 'Thanks for registering');
                Application::$app->response->redirect('/');
                exit;
            }

        }
        $this->setLayout('auth');
        return $this->render('register', [
            'model' => $registerModel
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

    public function profile()
    {
        return $this->render('profile');
    }

    public function logout(Request $request, Response $response)
    {
        Application::$app->logout();
        $response->redirect('/');
    }





}
