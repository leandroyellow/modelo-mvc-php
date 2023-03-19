<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

class Home extends Page
{

  /**
   * Método responável por retornar (view) da nossa home
   * @return string
   */
  public static function getHome()
  {
    $obOrganization = new Organization;

    //view da home
    $content = View::render('pages/home', [
      'name' => $obOrganization->name,
      
    ]);

    //retorna  a view da página
    return parent::getPage('home', $content);
  }
}
