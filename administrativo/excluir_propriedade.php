<?php session_start();  ?>

<?php 
	include("conecta.php");
	// Recebe o 'id' da pessoa via GET
	$id_propriedade = intval($_GET["id"]);
	

	// Chama a função da página 'conecta.php' que exclui 
	ExcluiPropriedade($id_propriedade);
	// Redireciona para a página de lista 
	header("location:lista_propriedades.php");
 ?>