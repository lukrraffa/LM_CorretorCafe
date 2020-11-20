<?php session_start();  ?>

<?php 
	
	include("conecta.php");

	
    $id_compra = $_POST["id"];
	$produtor = $_POST["txtProdutor"];
	$cafe = $_POST["txtCafe"];
	$situacao = $_POST["txtSituacao"];
	$contratoAssinado = $_POST["txtContratoAssinado"];
	$quantidadeSacas = $_POST["txtQuantidadeSacas"];
	$dataCompra = $_POST["txtDataCompra"];
	$valor = $_POST["txtValor"];
	$observacao = $_POST["txtObservacao"];

	

	
	/* !!!!! ======================================================== !!!!! */

	//Verificar se é um novo registro ou atualização
	if ($id_compra == NULL){ // Novo Cadastro
		InsereCompra($produtor, $cafe, $situacao, $contratoAssinado, $quantidadeSacas, $dataCompra, $valor, $observacao);
	}
	else{ 
		//Atualiza dados de um registro existente
		AlteraCompra($produtor, $cafe, $situacao, $contratoAssinado, $quantidadeSacas, $dataCompra, $valor, $observacao, $id_compra);
	}
	// Redireciona para a página 'controle_compras.php'
	header("location:controle_compras.php");
	
	
 ?>

