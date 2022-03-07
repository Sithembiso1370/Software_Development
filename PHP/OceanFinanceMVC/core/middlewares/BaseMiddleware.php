<?php

/**
 * @author Sithembiso Maphanga
 * @package app\core\middlewares
 * @Date  : 16/02/2022
 */ #Time : 19:18


namespace app\core\middlewares;

abstract class BaseMiddleware {

    abstract public function execute();
}