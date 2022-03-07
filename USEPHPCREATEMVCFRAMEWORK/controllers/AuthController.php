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
use app\models\ContactForm;
use app\models\loginModel;
use app\core\middlewares\AuthMiddleware;
use app\models\User;


class AuthController extends Controller {

    // 
    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['profile']));
    }

    public  function login(Request $request, Response $response){
        $loginForm = new LoginForm();

        

        if ($request->method() === 'post') {
            $loginForm->loadData($request->getBody());
            if ($loginForm->validate() && $loginForm->login()) {
                Application::$app->session->setFlash('success', 'Welcome Back '.  Application::$app->session->get('user'));
                Application::$app->response->redirect('/');
                exit;     
            }
        }

        $this->setLayout('auth');
        return $this->render('login', [
            'model' => $loginForm
        ]);
    }




    public function register(Request $request)
    {
        $user = new User();


        if ($request->method() === 'post') {

            $user->loadData($request->getBody());

            
            if ($user->validate() && $user->save()) {
                Application::$app->session->setFlash('success', 'Thanks for registering');
                Application::$app->response->redirect('/');
                exit;
            }

        }
        $this->setLayout('auth');
        return $this->render('register', [
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
        }
        $this->setLayout('auth');
        return $this->render('tulip',[
            'model' => $user
        ]); 

    }

    public function profile()
    {
        $user = new User();
        // var_dump($user);

        // GET SESSION VARIABLES STORED
        $session_vars = Application::$app->user;
        var_dump($session_vars);

        $this->setLayout('auth');
        return $this->render('profile',[
            'model' => $user,
            'session_vars' => $session_vars
        ]); 
    }

    public function admin()
    {
        $user = new User();
        // var_dump($user);

        // GET SESSION VARIABLES STORED
        $session_vars = Application::$app->user;
        var_dump($session_vars);

        $this->setLayout('auth');
        return $this->render('admin',[
            'model' => $session_vars
 
        ]); 
    }


    public function logout()
    {
        Application::$app->session->remove('user');
        return $this->render('index');
    }
}
