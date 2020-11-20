<?php session_start();  ?>

<?php 
	
	include("conecta.php");

	
    $id_propriedade = $_POST["id"];
	$nome = $_POST["txtNome"];
	$areaTotal = $_POST["txtAreaTotal"];
	$areaLavoura = $_POST["txtAreaLavoura"];
	$quantPesCafe = $_POST["txtQuantPesCafe"];
	$tipoCafe = $_POST["txtTipoCafe"];
	$terreiro = $_POST["txtTerreiro"];
	$tipoTerreiro = $_POST["txtTipoTerreiro"];
	$quantSecador = $_POST["txtQuantSecador"];
	$tipoSecador = $_POST["txtTipoSecador"];
	$analiseSolo = $_POST["txtAnaliseSolo"];
	$adubacaoSolo = $_POST["txtAdubacaoSolo"];
	$tipoColheita = $_POST["txtTipoColheita"];
	$producaoMediaAnual = $_POST["txtProducaoMediaAnual"];
	$observacao = $_POST["txtObservacao"];

	

	
	/* !!!!! ======================================================== !!!!! */

	//Verificar se é um novo registro ou atualização
	if ($id_propriedade == NULL){ // Novo Cadastro
		InserePropriedade($nome, $areaTotal, $areaLavoura, $quantPesCafe, $tipoCafe, $terreiro, $tipoTerreiro, $quantSecador, $tipoSecador, $analiseSolo, $adubacaoSolo, $tipoColheita, $producaoMediaAnual, $observacao);
	}
	else{ 
		//Atualiza dados de um registro existente
		AlteraPropriedade($nome, $areaTotal, $areaLavoura, $quantPesCafe, $tipoCafe, $terreiro, $tipoTerreiro, $quantSecador, $tipoSecador, $analiseSolo, $adubacaoSolo, $tipoColheita, $producaoMediaAnual, $observacao, $id_propriedade);
	}
	// Redireciona para a página 'lista_propriedades.php'
	header("location:lista_propriedades.php");
	
	
 ?>

