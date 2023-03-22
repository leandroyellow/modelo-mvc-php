<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Testimony as EntityTestimony;


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

  /**
   * Método responável por cadastrar um depoimento
   * @param Request $request
   * @return string
   */
  public static function insertTestimony($request){
    //DADOS DO POST
    $postVars = $request->getPostVars();
    
    //NOVA INSTANCIA DE DEPOIMENTO
    $obTestimony = new EntityTestimony;
    if(isset($postVars['nome'],$postVars['mensagem'])){
      $obTestimony->nome = $postVars['nome'];
      $obTestimony->mensagem = $postVars['mensagem'];
      $obTestimony->cadastrar();
    }
    
    return self::getTestimony();
  }
}
