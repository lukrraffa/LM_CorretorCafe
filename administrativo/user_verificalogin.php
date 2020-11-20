<?php session_start();?>

<?php


include("conecta.php");



// Verifica se login e senha foram passados via POST
if (
	isset($_POST["txtLogin"]) and
	isset($_POST["txtSenha"])
) {
	$login = $_POST["txtLogin"];
	$senha = $_POST["txtSenha"];

	$pessoa = ComparaLogin($login, $senha);

	if ($pessoa != null) {
		$_SESSION["login"] = $pessoa['login'];
		header("Location:index.php");
	} else { // Login e/ou senha inválidos
		// Redireciona para a página 'errologin.php'

		header("Location:errologin.php");
	}
} else { // Login e/ou senha inválidos
	// Redireciona para a página 'errologin.php'
	header("Location:errologin.php");
}
