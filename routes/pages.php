<?php 
use \App\Http\Response;
use \App\Controller\Pages;

//ROTA HOME
$obRouter->get('/', [
  function() {
    return new Response(200, Pages\Home::getHome());
  }
]);

//ROTA SOBRE
$obRouter->get('/sobre', [
  function() {
    return new Response(200, Pages\About::getAbout());
  }
]);

//ROTA CADASTRO USUÁRIO
$obRouter->get('/cadastroUsuario', [
  function() {
    return new Response(200, Pages\FormUser::getFormUser());
  }
]);

//ROTA CADASTRO DEPOIMENTOS
$obRouter->get('/depoimentos', [
  function() {
    return new Response(200, Pages\Testimony::getTestimony());
  }
]);

//ROTA CADASTRO DEPOIMENTOS (INSERT)
$obRouter->post('/depoimentos', [
  function($request) {
    echo '<pre>';
    echo print_r($request);
    echo '<pre>'; exit;
    return new Response(200, Pages\Testimony::getTestimony());

  }
]);

//ROTA DINÂMICA
$obRouter->get('/pagina/{idPagina}/{acao}', [
  function($idPagina, $acao) {
    return new Response(200, 'Página '.$idPagina .' - '. $acao);
  }
]);


?>