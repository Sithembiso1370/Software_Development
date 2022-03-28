<?php

/**
 * @author Sithembiso Maphanga
 * @package app\core\middlewares
 * @Date  : 16/02/2022
 */ #Time : 19:18


namespace app\core\middlewares;

use app\core\Application;
use app\core\exception\ForbiddenException;

class AuthMiddleware extends BaseMiddleware {
    
    protected array $actions = [];

    /**
     * AuthMiddleware Constructor
     * @param array $actions
     */
    public function __construct(array $actions = [])
    {
        $this->actions = $actions;
    }

    public function execute()
    {
        if(Application::isGuest()){
            if (empty($this->actions) || in_array(Application::$app->controller->action,$this->actions)) {
                # code...
                throw new ForbiddenException();
            }
        }
    }
}