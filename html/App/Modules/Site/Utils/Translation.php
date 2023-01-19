<?php

namespace App\Modules\Site\Utils;

class Translation
{
  private $data = array();
  private $file;

  public function __construct($module = '', $lang = '')
  {
    $this->file = PATH_MODULES . $module . DS . 'Translations' . DS . $lang . '.json';
  }

  public function getTranslation()
  {
    if (is_readable($this->file)) {
      $this->data = file_get_contents($this->file);
      $this->data = json_decode($this->data, TRUE);
      return $this->data;
    }
  }



  //
  //END CLASS
}