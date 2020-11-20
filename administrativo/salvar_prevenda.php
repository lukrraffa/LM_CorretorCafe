<?php session_start();  ?>

<?php 
	
	include("conecta.php");

	
    $id_prevenda = $_POST["id"];
	$cliente = $_POST["txtCliente"];
	$cafe = $_POST["txtCafe"];
	$situacao = $_POST["txtSituacao"];
	$dataPrevenda = $_POST["txtDataPrevenda"];
	$observacao = $_POST["txtObservacao"];

	

	
	/* !!!!! ======================================================== !!!!! */

	//Verificar se é um novo registro ou atualização
	if ($id_prevenda == NULL){ // Novo Cadastro
		InserePrevenda($cliente, $cafe, $situacao, $dataPrevenda, $observacao);
	}
	else{ 
		//Atualiza dados de um registro existente
		AlteraPrevenda($cliente, $cafe, $situacao, $dataPrevenda, $observacao, $id_prevenda);
	}
	// Redireciona para a página 'controle_prevendas.php'
	header("location:controle_prevendas.php");
	
	
 ?>

