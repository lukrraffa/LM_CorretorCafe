<?php session_start();  ?>

<?php 
	session_start(); 
	 
    include("conecta.php");
	$id_cafe = $_POST["id"];
	$tipoCafe = $_POST["txtTipoCafe"];
	$classificacao = $_POST["txtClassificacao"];
	$precoSaca=$_POST["txtPrecoSaca"];
	$observacao = $_POST["txtObservacao"];
	
	
	
	 // echo "$id_cafe / $tipoCafe / $classificacao / $precoSaca / $observacao";
	 
	 //Verificar se é um novo registro ou atualização
	if ($id_cafe == NULL){ // Novo Cadastro
		InsereCafe($tipoCafe, $classificacao, $precoSaca, $observacao);
	}
	else{ 
		//Atualiza dados de um registro existente
		AlteraCafe($tipoCafe, $classificacao, $precoSaca, $observacao, $id_cafe);
	}
	// Redireciona para a página 'lista_cafe.php'
	header("location:lista_cafe.php");

	
 ?>