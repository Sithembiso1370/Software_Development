<?php
// Entry Script of the Framework 
/**
 * Class : Form
 * @author Sithembiso Maphanga
 * @package app\core\form
 * @Date  : 23/01/2022
 * @LastModifiedDate  : 23/01/2022
 */ #Time : 19:18

namespace app\core\form;


use app\core\Model;

use function PHPSTORM_META\type;

class Field 
{
    public const TYPE_TEXT = 'text';
    public const TYPE_PASSWORD = 'password';
    public const TYPE_PASSWORDCONFIRM = 'password';
    public const TYPE_NUMBER = 'number';
    public const TYPE_FILE = 'file';
    public string $type;
    public Model $model;
    public string $attribute;
    /**
     * Field constructor.
     *
     * @param \app\core\Model $model
     * @param string          $attribute
     */
    public function __construct(Model $model, string $attribute)
    {
        // SET THE DAFAULT TYPE
        $this->type = self::TYPE_TEXT;
        $this->model = $model;
        $this->attribute = $attribute;
    }



    public function __toString()
    {
        return sprintf('
        <div class="form-group">
            <label>%s</label>
            <input type="%s"  name="%s" value="%s" class="form-control%s">
            <div class="invalid-feedback">
                %s
            </div>
        </div>
        ', 
        $this->model->getLabel($this->attribute),
        // $this->attribute, 
        $this->type,
        $this->attribute, 
        $this->model->{$this->attribute},
        $this->model->hasError($this->attribute) ? ' is-invalid' : '',
        $this->model->getFirstError($this->attribute)

        );
    }

    // Change type if its password
    public function passwordField(){
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }

    // Change type if its password
    public function passwordConfirmField(){
        $this->type = self::TYPE_PASSWORDCONFIRM;
        return $this;
    }

    public function fileField(){
        $this->type = self::TYPE_FILE;
        return $this;
    }

}