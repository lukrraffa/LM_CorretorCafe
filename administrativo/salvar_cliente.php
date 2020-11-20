<?php session_start();  ?>

<?php 
	
	include("conecta.php");

	
    $id_cliente = $_POST["id"];
	$tipoCliente = $_POST["txtTipoCliente"];
	$nome = $_POST["txtNome"];
	$representante=$_POST["txtRepresentante"];
	$identificador = $_POST["txtIdentificador"];
	$cpfCnpj = $_POST["txtCpfCnpj"];
	$endereco = $_POST["txtEndereco"];
	$numero = $_POST["txtNumero"];
	$complemento = $_POST["txtComplemento"];
	$cidade = $_POST["txtCidade"];
	$estado = $_POST["txtEstado"];
	$pais = $_POST["txtPais"];
	$telefoneFixo = $_POST["txtTelefoneFixo"];
	$telefoneCelular = $_POST["txtTelefoneCelular"];
	$email = $_POST["txtEmail"];
	$observacao = $_POST["txtObservacao"];

	

	
	/* !!!!! ======================================================== !!!!! */

	/*
	echo "$tipoCliente / $nome / $representante / $identificador / $cpfCnpj
	 / $endereco / $numero / $complemento / $cidade / $estado / $pais / $telefoneFixo / 
	$telefoneCelular / $email / $observacao";

	*/

	//Verificar se é um novo registro ou atualização
	if ($id_cliente == NULL){ // Novo Cadastro
		InsereCliente($tipoCliente, $nome, $representante, $identificador, $cpfCnpj, $endereco, $numero, $complemento, $cidade, $estado, $pais, $telefoneFixo, $telefoneCelular, $email, $observacao);
	}
	else{ 
		//Atualiza dados de um registro existente
		AlteraCliente($tipoCliente, $nome, $representante, $identificador, $cpfCnpj, $endereco, $numero, $complemento, $cidade, $estado, $pais, $telefoneFixo, $telefoneCelular, $email, $observacao, $id_cliente);
	}
	// Redireciona para a página 'lista_clientes.php'
	header("location:lista_clientes.php");
	
	
 ?>

