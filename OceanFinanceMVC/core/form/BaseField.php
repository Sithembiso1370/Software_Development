<?php

// Entry Script of the Framework 
/**
 * Class : Form
 * @author Sithembiso Maphanga
 * @package app\core\form
 * @Date  : 23/01/2022
 * @LastModifiedDate  : 23/01/2022
 */ #Time : 19:28

 namespace app\core\form;


 use app\core\Model;

 
abstract class BaseField
{

    public Model $model;
    public string $attribute;
    public string $type;

    /**
     * Field constructor.
     *
     * @param \app\core\Model $model
     * @param string          $attribute
     */
    public function __construct(){

    }
    

    public function __toString()
    {

    }

    abstract public function renderInput();
}