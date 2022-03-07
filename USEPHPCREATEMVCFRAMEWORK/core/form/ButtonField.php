<?php
// Entry Script of the Framework 
/**
 * Class : Form
 * @author Sithembiso Maphanga
 * @package app\core\form
 * @Date  : 28/02/2022
 * @LastModifiedDate  : 28/02/2022
 */ #Time : 17:38

 namespace app\core\form;


 use app\core\Model;



/**
 * Class TextareaField
 *
 * @author Sithembiso Maphanga
 * @package app\core\form
 */
class ButtonField extends BaseField
{
    public function renderInput():string
    {
        // <button type="submit" class="btn btn-primary">Submit</button>
        return sprintf('<button type="%s"  class="btn btn-primary"></button>',
        $this->attribute
    );
    }
}