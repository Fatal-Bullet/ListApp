<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';
// Clear
function clear($input) {
	global $connect;
	// sql
	$var = mysqli_escape_string($connect, $input);
	// xss
	$var = htmlspecialchars($var);
	return $var;
}



if(isset($_POST['btn-cadastrar'])):
	$nome = clear($_POST['nome']);
	$endereco = clear($_POST['endereco']);
	$email = clear($_POST['email']);
	$contato = clear($_POST['contato']);

	$sql = "INSERT INTO clientes (nome, endereco, email, contato) VALUES ('$nome', '$endereco', '$email', '$contato')";



	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../index.php');
	endif;
endif;