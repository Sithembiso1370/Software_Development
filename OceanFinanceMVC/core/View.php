<?php

namespace app\core;


class View
{
    public string $title = '';

    public function renderView($view, array $params = [])
    {
        $layoutName = Application::$app->layout;
        if (Application::$app->controller) {
            $layoutName = Application::$app->controller->layout;
        }

        /** */
        $body = $this->renderbodyOnly($view,$params);
        $headerContent = $this->renderHeaderOnly($view);
        $footer = $this->renderfooterOnly();


        // Grab the whole Layout before manipulation
        $layoutContent = $this->layoutContent();
        // $viewContent = $this->renderViewOnly($view);
        
        // Repace Content
        $Content = str_replace("{{content}}",$body ,$layoutContent);
        $Content = str_replace("{{nav}}", $headerContent,$Content);

        // Repace Footer
        $Content = str_replace("{{footer}}",$footer,$Content);

        // $Content = str_replace("{{content}}",$viewContent,$layoutContent);


        // ob_start();
        // include_once Application::$ROOT_DIR."/views/layouts/$layoutName.php";
        // $layoutContent = ob_get_clean();
        // return str_replace('{{content}}', $viewContent, $layoutContent);
        /** */
        return $Content;
    }

    public function renderViewOnly($view, array $params)
    {
        foreach ($params as $key => $value) {
            $$key = $value;
        }
        ob_start();
        include_once Application::$ROOT_DIR.'./vendor/views/'.$view.'.php';
        return ob_get_clean();
    }

        // DESIGN Lyout
        // public function renderViewOnly($view){
        //     ob_start();
        //     // INCLUDE THE VIEW
        //     include_once Application::$ROOT_DIR.'./vendor/views/'.$view.'.php';
        //     return ob_get_clean(); 
        // }
    
        public function layoutContent(){
            $layout = Application::$app->layout;
            if (Application::$app->controller) {
                $layout = Application::$app->controller->layout;
            }
            
            ob_start();
            // INCLUDE THE VIEW
            include_once Application::$ROOT_DIR.'./vendor/views/layouts/'.$layout.'.php'; 
            return ob_get_clean(); 
        }
    
        public function renderHeaderOnly($view){
    
            if ($view == '/') {
                # code...
                ob_start();
                // INCLUDE THE VIEW
                include_once Application::$ROOT_DIR.'./vendor/views/layoutComponents/header.php'; 
                return ob_get_clean(); 
            }
            else{
                ob_start();
                // INCLUDE THE VIEW
                include_once Application::$ROOT_DIR.'./vendor/views/layoutComponents/header.php'; 
                return ob_get_clean(); 
            }
        }
    
        public function renderbodyOnly($Content,$params){
            // Iterate over the params
            foreach ($params as $key => $value) {
                # code...
                $$key = $value;
            }
    
            // The include will see the above variables
    
            ob_start();
            // INCLUDE THE VIEW
            include_once Application::$ROOT_DIR.'./vendor/views/'.$Content.'.php'; 
            return ob_get_clean(); 
        }
    
        public function renderfooterOnly(){
            ob_start();
            // INCLUDE THE VIEW
            include_once Application::$ROOT_DIR.'./vendor/views/layoutComponents/footer.php'; 
            return ob_get_clean(); 
        }

        public function renderErrorContent($viewContent){
            $layoutContent = $this->layoutContent();
            // $viewContent = $this->renderViewOnly($view);
            $headerContent = $this->renderHeaderOnly($viewContent);
            $body = $this->rendererror($viewContent);
            $footer = $this->renderfooterOnly();
    
            // Replace Content Tags
            // Replace Header
            $Content = str_replace("{{nav}}", $headerContent,$layoutContent);
            // Repace Content
            $Content = str_replace("{{content}}",$body ,$Content);
            // Repace Footer
            $Content = str_replace("{{footer}}",$footer,$Content);
            // $Content = 
            // return str_replace("{{content}}",$viewContent,$layoutContent);
            return $Content;
        }

        public function rendererror($error){
            ob_start();
            // INCLUDE THE VIEW
            include_once Application::$ROOT_DIR.'./vendor/views/layoutComponents/'.$error.'.php'; 
            return ob_get_clean(); 
        }
}