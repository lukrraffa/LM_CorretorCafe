<?php

session_start(); 

include("conecta.php");


if ($_POST["id"] != NULL) {

	$id_usuario = $_POST["id"];
	$nome = $_POST["txtNome"];
	$email = $_POST["txtEmail"];
	$dataNasc = $_POST["txtDataNasc"];
	$login = $_POST["txtLogin"];  

	//Atualiza dados de um registro existente
	AlteraUsuario($nome, $email, $dataNasc, $login, $id_usuario);

	// Redireciona para a página 'index.html'
    header("location:user_perfil.php");



} else {

	$id_usuario = "";
	$nome = $_POST["txtNome"];
	$email = $_POST["txtEmail"];
	$dataNasc = $_POST["txtDataNasc"];
	$login = $_POST["txtLogin"];
	$senha = $_POST["txtSenha"];

	//Novo cadastro
	InsereUsuario($nome, $email, $dataNasc, $login, $senha);

	// Redireciona para a página 'index.html'
    header("location:../paginaInicial/index.html");

}


?>

