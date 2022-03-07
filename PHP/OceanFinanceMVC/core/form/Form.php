<?php


namespace app\core\form;

use app\core\Model;

// Entry Script of the Framework 
/**
 * Class : Form
 * @author Sithembiso Maphanga
 * @package app\core\form
 * @Date  : 23/01/2022
 * @LastModifiedDate  : 23/01/2022
 */ #Time : 19:18

class Form
{
    public static function begin($action,$method)
    {
        echo sprintf('<form action="%s"  method="post">',$action,$method);
        return new Form();
    }

    public static function end()
    {
        echo  '</form>';
    }

    public function field(Model $model, $attribute)
    {
        return new Field($model, $attribute);
    }

}