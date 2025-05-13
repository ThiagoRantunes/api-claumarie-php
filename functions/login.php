<?php



$response = file_get_contents("php://input");
$data = json_decode($response, true);

$nome = $data->nomeLogin;
$email = $data->emailLogin;
$senha = $data->senhaLogin;
$acesso = $data->acessoLogin;




?>