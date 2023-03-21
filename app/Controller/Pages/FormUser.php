<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

class FormUser extends Page
{

  /**
   * Método responável por retornar (view) da nossa página de formulário
   * @return string
   */
  public static function getFormUser()
  {
    $obOrganization = new Organization;

    //VIEW DO FORMUÁRIO
    $content = View::render('pages/cadastroUsuario', [
      'name' => $obOrganization->name,
    ]);

    //RETORNA A VIEW DA PÁGINA
    return parent::getPage('formulário', $content);
  }
}
