<?php

namespace app\core\exception;

/**
 * Class NotFoundException
 *
 * @author  Sithembiso Maphanga
 * @package app\core\exception
 */

class ForbiddenException extends \Exception{

    protected $message = "You do not have permission to access this page";
    protected $code = 403;
}