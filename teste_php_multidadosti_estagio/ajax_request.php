<?php
require_once 'data_request.class.php';

// Verifica o parâmetro passado na solicitação Ajax
if (isset($_GET['action'])) {
  $dataRequest = new data_request();

  // Executa a função apropriada com base na ação recebida
  if ($_GET['action'] === 'clientes') {
    $data = $dataRequest->dadosClientes();
  } elseif ($_GET['action'] === 'fornecedores') {
    $data = $dataRequest->dadosFornecedores();
  } elseif ($_GET['action'] === 'usuarios') {
    $data = $dataRequest->dadosUsuarios();
  }

  // Retorna os dados como uma resposta JSON
  echo json_encode($data);
}
?>