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

/**
 * @author Sithembiso Maphanga
 * @package app\core\form
 */
class InputField extends BaseField
{
    public const TYPE_TEXT = 'text';
    public const TYPE_PASSWORD = 'password';
    public const TYPE_EMAIL = 'Email';
    public const TYPE_TEXTAREA = 'number';
    public const TYPE_FILE = 'file';
    public const TYPE_NUMBER = 'number';
    public const TYPE_PASSWORDCONFIRM = 'password';


    public string $type;
    public Model $model;
    public string $attribute;
    /**
     * I constructor.
     *
     * @param \app\core\Model $model
     * @param string          $attribute
     */
    public function __construct(Model $model, string $attribute)
    {
        // SET THE DAFAULT TYPE
        $this->type = self::TYPE_TEXT;
        parent::__construct($model, $attribute);
    }



    // Change type if its password
    public function passwordI(){
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }

    // Change type if its password
    public function passwordConfirmI(){
        $this->type = self::TYPE_PASSWORDCONFIRM;
        return $this;
    }

    public function fileI(){
        $this->type = self::TYPE_FILE;
        return $this;
    }

    public function renderInput(): string
    {
        return sprintf('<input type="%s"  
        name="%s" 
        value="%s" 
        class="form-control%s">',
    $this->type,
    $this->attribute, 
    $this->model->{$this->attribute},
    $this->model->hasError($this->attribute) ? ' is-invalid' : ''
    );
    }

}