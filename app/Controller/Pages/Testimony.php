<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

class Testimony extends Page
{

  /**
   * Método responável por retornar (view) da nossa home
   * @return string
   */
  public static function getTestimony()
  {
    

    //view da home
    $content = View::render('pages/testimonies', [
      
      
    ]);

    //retorna  a view da página
    return parent::getPage('depoimentos', $content);
  }
}
