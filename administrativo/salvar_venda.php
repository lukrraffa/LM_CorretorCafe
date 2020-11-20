<?php session_start();  ?>

<?php 
	
	include("conecta.php");

	
    $id_venda = $_POST["id"];
	$cliente = $_POST["txtCliente"];
	$cafe = $_POST["txtCafe"];
	$situacao = $_POST["txtSituacao"];
	$contratoAssinado = $_POST["txtContratoAssinado"];
	$quantidadeSacas = $_POST["txtQuantidadeSacas"];
	$dataVenda = $_POST["txtDataVenda"];
	$dataRetirada = $_POST["txtDataRetirada"];
	$valor = $_POST["txtValor"];
	$enderecoRetirada = $_POST["txtEnderecoRetirada"];
	$numeroRetirada = $_POST["txtNumeroRetirada"];
	$complementoRetirada = $_POST["txtComplementoRetirada"];
	$bairroRetirada = $_POST["txtBairroRetirada"];
	$cidadeRetirada = $_POST["txtCidadeRetirada"];
	$estadoRetirada = $_POST["txtEstadoRetirada"];
	$observacao = $_POST["txtObservacao"];

	

	
	/* !!!!! ======================================================== !!!!! */

	//Verificar se é um novo registro ou atualização
	if ($id_venda == NULL){ // Novo Cadastro
		InsereVenda($cliente, $cafe, $situacao, $contratoAssinado, $quantidadeSacas, $dataVenda, $dataRetirada, $valor, $enderecoRetirada, $numeroRetirada, $complementoRetirada, $bairroRetirada, $cidadeRetirada, $estadoRetirada, $observacao);
	}
	else{ 
		//Atualiza dados de um registro existente
		AlteraVenda($cliente, $cafe, $situacao, $contratoAssinado, $quantidadeSacas, $dataVenda, $dataRetirada, $valor, $enderecoRetirada, $numeroRetirada, $complementoRetirada, $bairroRetirada, $cidadeRetirada, $estadoRetirada, $observacao, $id_venda);
	}
	// Redireciona para a página 'controle_vendas.php'
	header("location:controle_vendas.php");
	
	
 ?>

