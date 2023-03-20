<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

class FormUser extends Page
{

  /**
   * Método responável por retornar (view) da nossa página de sobre
   * @return string
   */
  public static function getFormUser()
  {
    $obOrganization = new Organization;

    //view da home
    $content = View::render('pages/cadastroUsuario', [
      'name' => $obOrganization->name,
    ]);

    //retorna  a view da página
    return parent::getPage('sobre', $content);
  }
}
