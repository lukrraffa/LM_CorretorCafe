<?php session_start();  ?>
<?php 
	include("conecta.php");
	// Recebe o 'id' da pessoa via GET
	$id_produtor_cafe = intval($_GET["id"]);
	

	// Chama a função da página 'conecta.php' que exclui 
	ExcluiProdutorCafe($id_produtor_cafe);
	// Redireciona para a página de lista 
	header("location:lista_produtores.php");
 ?>