<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

class About extends Page
{

  /**
   * Método responável por retornar (view) da nossa página de sobre
   * @return string
   */
  public static function getAbout()
  {
    $obOrganization = new Organization;

    //view da home
    $content = View::render('pages/about', [
      'name' => $obOrganization->name,
      'description' => $obOrganization->description,
      'site' => $obOrganization->site
    ]);

    //retorna  a view da página
    return parent::getPage('cadastroUsuario', $content);
  }
}
