<?php session_start();  ?>

<?php 
	
	include("conecta.php");

	
    $id_produtor_cafe = $_POST["id"];
	$nome = $_POST["txtNome"];
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
	$dataNascimento = $_POST["txtDataNasc"];
	$observacao = $_POST["txtObservacao"];

	

	
	/* !!!!! ======================================================== !!!!! */

	

	//Verificar se é um novo registro ou atualização
	if ($id_produtor_cafe == NULL){ // Novo Cadastro
		InsereProdutorCafe($nome, $identificador, $cpfCnpj, $endereco, $numero, $complemento, $cidade, $estado, $pais, $telefoneFixo, $telefoneCelular, $email, $dataNascimento, $observacao);
	}
	else{ 
		//Atualiza dados de um registro existente
		AlteraProdutorCafe($nome, $identificador, $cpfCnpj, $endereco, $numero, $complemento, $cidade, $estado, $pais, $telefoneFixo, $telefoneCelular, $email, $dataNascimento, $observacao, $id_produtor_cafe);
	}
	// Redireciona para a página 'lista_produtores.php'
	header("location:lista_produtores.php");
	
	
 ?>

