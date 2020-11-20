<?php session_start();  ?>
<?php 
	include("conecta.php");
	// Recebe o 'id' da pessoa via GET
	$id_cafe = intval($_GET["id"]);
	

	// Chama a função da página 'conecta.php' que exclui 
	ExcluiCafe($id_cafe);
	// Redireciona para a página de lista 
	header("location:lista_cafe.php");
 ?>