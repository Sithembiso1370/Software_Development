<?php

/**
 * User : Sithembiso Maphanga
 * Class : User Model
 * Date : 16-02-2022
 */

namespace app\core;
use app\core\DbModel;

 /**
  * @author Sithembiso Maphanga
  * @package app\core
  */

  abstract class FormModel extends DbModel{

    abstract public function getDisplayName(): string;
  }