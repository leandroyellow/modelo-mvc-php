<?php 

namespace App\Model\Entity;

use App\Db\Database;

class Testimony{
  /**
   * ID do depoimento
   * @var integer
   */
  public $id;

  /**
   * Nome do usuário que fez o depoimento
   * @var string
   */
  public $nome;

  /**
   * Mensagem do depoimento
   * @var string
   */
  public $mensagem;

  /**
   * Data de publicação do depoimento
   * @var string
   */
  public $data;

  public function cadastrar() {
    //DEFINE A DATA
    $this->data = date('Y-m-d H:i:s');

    //INSERE O DEPOIMENTO NO BANCO DE DADOS
    $this->id = (new Database('depoimentos'))->insert([
      'nome' => $this->nome,
      'mensagem' => $this->mensagem,
      'data' => $this->data
    ]);
    
    //SUCESSO
    return true;
  }
}


?>