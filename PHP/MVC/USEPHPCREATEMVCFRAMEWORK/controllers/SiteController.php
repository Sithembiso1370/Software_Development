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

class SiteController extends Controller {


    public  function home(){
        $params = [
            'name' => "Sithembiso"
        ];

        return Application::$app->router->renderView('home',$params);
    }

    public function contact(){
        $params = [
            'response' => 'Fill in all Fealds'
        ];
        return $this->render('contact',$params);
    }

    // Controller Method
    public  function handleContact(Request $request){

        $body = $request->getBody();


        foreach ($body as $key => $value) {
            $params[$key] = $value;
        }

        return $this->render('home',$params);
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


