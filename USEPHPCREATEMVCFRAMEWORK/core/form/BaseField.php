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
    public function __construct(Model $model, string $attribute)
    {
        // SET THE DAFAULT TYPE
        $this->model = $model;
        $this->attribute = $attribute;
    }
    

    abstract public function renderInput(): string;

    public function __toString()
    {
        return sprintf('
        <div class="form-group">
            <label>%s</label>
            %s
            <div class="invalid-feedback">
                %s
            </div>
        </div>
        ', 
        $this->model->getLabel($this->attribute),
        // $this->attribute, 
        $this->renderInput(),
        $this->model->getFirstError($this->attribute)
        );
    }
}