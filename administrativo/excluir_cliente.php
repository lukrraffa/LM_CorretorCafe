<?php session_start();  ?>
<?php 
	include("conecta.php");
	// Recebe o 'id' da pessoa via GET
	$id_cliente = intval($_GET["id"]);
	

	// Chama a função da página 'conecta.php' que exclui 
	ExcluiCliente($id_cliente);
	// Redireciona para a página de lista 
	header("location:lista_clientes.php");
 ?>