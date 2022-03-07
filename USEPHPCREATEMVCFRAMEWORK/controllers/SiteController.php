<?php
/**
 * User : Sithembiso1370 ...
 * Class Site Controller
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
use app\models\ContactForm;
use app\models\User;

class SiteController extends Controller {


    public  function index(){
        $params = [
            'name' => "Sithembiso"
        ];

        return Application::$app->view->renderView('index',$params);
    }

    public function contact(Request $request, Response $response){
            $contactForm = new ContactForm();   
            // $user = contactForm::findOne(['email' => $this->email]);
    
            if ($request->method() === 'post') {
                $contactForm->loadData($request->getBody());
                if ($contactForm->validate() && $contactForm->send()) {
                    Application::$app->session->setFlash('success', 'Form Sent');
                    return $response->redirect('/contact');
                }
            }

            return $this->render('contact', [
                'model' => $contactForm
            ]);
    }

    // Controller Method
    public  function handleContact(Request $request){

        $body = $request->getBody();


        foreach ($body as $key => $value) {
            $params[$key] = $value;
        }

        return $this->render('index',$params);
    }



    public function dashboard(){
        $params = [
            'title' => "Dashboard"
        ];

        return $this->render('dashboard',$params);
    }

    public function tulip(){
        $params = [
            'title' => "tulip"
        ];

        return $this->render('tulip',$params);
    }


    
}


