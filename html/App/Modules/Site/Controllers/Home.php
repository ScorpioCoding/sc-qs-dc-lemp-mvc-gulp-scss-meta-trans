<?php

namespace App\Modules\Site\Controllers;

use App\Core\Controller;
use App\Core\View;

use App\Modules\Site\Utils\Meta;
use App\Modules\Site\Utils\Translation;


/**
 *  Home
 */
class Home extends Controller
{
  protected function before()
  {
  }

  public function indexAction($args = array())
  {
    //MetaData
    $meta = array();
    $meta = (new Meta($args))->getMeta();
    // Translation
    $trans = array();
    $trans = (new Translation($args['module'], $args['lang']))->getTranslation();
    // Extra data
    $data = array();



    /*
    * render the view
    * @params array 	$args
    * @params array 	$meta
    * @params array 	$trans
    * @params array 	$data
    */
    View::render($args, $meta, $trans, $data);
  }

  protected function after()
  {
  }

  //END-Class
}
