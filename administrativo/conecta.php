<?php
// Define a configuração do BD
define("SERVIDOR", "localhost"); // Endereço do Servidor do BD
define("USUARIO", "root"); // Nome do Usuário no BD
define("SENHA", ""); // Senha do Usuário
define("BANCO", "tcc_pos"); // Nome do BD

// Função que define e abre a conexão com o BD
function AbreConexao()
{
	$con = new mysqli(SERVIDOR, USUARIO, SENHA, BANCO); // Cria a conexão com o BD
	return $con; // Retorna a conexão
}

// Função que Retorna os registros da tabela
function RetornaClientes()
{
	$sql = "SELECT * FROM tbl_cliente ORDER BY nome"; // Define o comando SQL (select)
	$conexao = AbreConexao(); // Abre conexão com o BD
	$resultado = $conexao->query($sql); // Executa com comando SQL
	$conexao->close(); // Fecha a conexão com o BD

	// Verifica se a consulta retornou pelo menos um registro
	if (mysqli_num_rows($resultado) > 0) {
		while ($row = mysqli_fetch_array($resultado)) {
			// Atribui cada registro da consulta para o vetor $pessoas[]
			$clientes[] = $row;
		}
		// Retorna o vetor contendo todos os registros da consulta
		return $clientes;
	} else { // Se não retornou registro(s)
		return null;
	}
}


// Função que Retorna um unico registro pelo ID
function RetornaClientePorId($id)
{
	$sql = "SELECT * FROM tbl_cliente WHERE id_cliente = " . $id; // Define o comando SQL (select)
	$conexao = AbreConexao(); // Abre conexão com o BD
	$resultado = $conexao->query($sql); // Executa com comando SQL
	$conexao->close(); // Fecha a conexão com o BD

	// Verifica se a consulta retornou pelo menos um registro
	if (mysqli_num_rows($resultado) > 0) {
		// Atribui o registro da consulta para a variável $pessoa
		$cliente = mysqli_fetch_array($resultado);
		// Retorna a variável contendo o registro da consulta
		return $cliente;
	} else { // Se não retornou registro
		return null;
	}
}

// Função insere pessoa na tabela
function InsereCliente($tipoCliente, $nome, $representante, $identificador, $cpfCnpj, $endereco, $numero, $complemento, $cidade, $estado, $pais, $telefoneFixo, $telefoneCelular, $email, $observacao)
{
	// Define o comando SQL (Insert)
	$sql = "INSERT INTO tbl_cliente(tipo_cliente, nome, representante, identificador, cpf_cnpj, endereco, numero, complemento, cidade, estado, pais, telefone_fixo, telefone_celular, email, observacao) VALUES('" . $tipoCliente . "','" . $nome . "', '" . $representante . "', '" . $identificador . "', '" . $cpfCnpj . "' , '" . $endereco . "', '" . $numero . "', '" . $complemento . "', '" . $cidade . "', '" . $estado . "', '" . $pais . "', '" . $telefoneFixo . "', '" . $telefoneCelular . "', '" . $email . "', '" . $observacao . "')";
	// Abre a conexão com o BD
	$conexao = AbreConexao();
	// Executa com comando SQL
	$conexao->query($sql);
	// Fecha a conexão com o BD
	$conexao->close();
}

// Função atualiza dados da pessoa na tabela
function AlteraCliente($tipoCliente, $nome, $representante, $identificador, $cpfCnpj, $endereco, $numero, $complemento, $cidade, $estado, $pais, $telefoneFixo, $telefoneCelular, $email, $observacao, $id_cliente)
{
	// Define o comando SQL (update)
	$sql  = "UPDATE tbl_cliente SET tipo_cliente = '" . $tipoCliente . "', nome = '" . $nome . "', representante = '" . $representante . "', identificador = '" . $identificador . "', cpf_cnpj = '" . $cpfCnpj . "', endereco = '" . $endereco . "', numero = '" . $numero . "', complemento = '" . $complemento . "', cidade = '" . $cidade . "', estado = '" . $estado . "', pais = '" . $pais . "', telefone_fixo = '" . $telefoneFixo . "', telefone_celular = '" . $telefoneCelular . "', email = '" . $email . "', observacao = '" . $observacao . "' WHERE id_cliente = " . $id_cliente;
	$conexao = AbreConexao(); // Abre conexão
	// Executa o comando SQL
	$conexao->query($sql);
	$conexao->close(); // Fecha a Conexão
}

// Função exclui registro da tabela
function ExcluiCliente($id_cliente)
{
	// Define o comando SQL (delete)
	$sql = "DELETE FROM tbl_cliente 
				WHERE id_cliente = " . $id_cliente;
	$conexao = AbreConexao(); // Abre conexão com o BD
	// Executa o comando SQL 
	$conexao->query($sql);
	$conexao->close(); // Fecha a conexão com o BD
}

/* ============================================================================= */

// Função que Retorna os registros da tabela
function RetornaCafe()
{
	$sql = "SELECT * FROM tbl_cafe ORDER BY tipo_cafe"; // Define o comando SQL (select)
	$conexao = AbreConexao(); // Abre conexão com o BD
	$resultado = $conexao->query($sql); // Executa com comando SQL
	$conexao->close(); // Fecha a conexão com o BD

	// Verifica se a consulta retornou pelo menos um registro
	if (mysqli_num_rows($resultado) > 0) {
		while ($row = mysqli_fetch_array($resultado)) {
			// Atribui cada registro da consulta para o vetor $pessoas[]
			$cafe[] = $row;
		}
		// Retorna o vetor contendo todos os registros da consulta
		return $cafe;
	} else { // Se não retornou registro(s)
		return null;
	}
}


// Função que Retorna um unico registro pelo ID
function RetornaCafePorId($id)
{
	$sql = "SELECT * FROM tbl_cafe WHERE id_cafe = " . $id; // Define o comando SQL (select)
	$conexao = AbreConexao(); // Abre conexão com o BD
	$resultado = $conexao->query($sql); // Executa com comando SQL
	$conexao->close(); // Fecha a conexão com o BD

	// Verifica se a consulta retornou pelo menos um registro
	if (mysqli_num_rows($resultado) > 0) {
		// Atribui o registro da consulta para a variável $pessoa
		$cafe = mysqli_fetch_array($resultado);
		// Retorna a variável contendo o registro da consulta
		return $cafe;
	} else { // Se não retornou registro
		return null;
	}
}

// Função insere pessoa na tabela
function InsereCafe($tipoCafe, $classificacao, $precoSaca, $observacao)
{
	// Define o comando SQL (Insert)
	$sql = "INSERT INTO tbl_cafe(tipo_cafe, classificacao, preco_saca, observacao) VALUES('" . $tipoCafe . "','" . $classificacao . "', '" . $precoSaca . "', '" . $observacao . "')";
	// Abre a conexão com o BD
	$conexao = AbreConexao();
	// Executa com comando SQL
	$conexao->query($sql);
	// Fecha a conexão com o BD
	$conexao->close();
}

// Função atualiza dados da pessoa na tabela
function AlteraCafe($tipoCafe, $classificacao, $precoSaca, $observacao, $id_cafe)
{
	// Define o comando SQL (update)
	$sql  = "UPDATE tbl_cafe SET tipo_cafe = '" . $tipoCafe . "', classificacao = '" . $classificacao . "', preco_saca = '" . $precoSaca . "', observacao = '" . $observacao . "' WHERE id_cafe = " . $id_cafe;
	$conexao = AbreConexao(); // Abre conexão
	// Executa o comando SQL
	$conexao->query($sql);
	$conexao->close(); // Fecha a Conexão
}

// Função exclui registro da tabela
function ExcluiCafe($id_cafe)
{
	// Define o comando SQL (delete)
	$sql = "DELETE FROM tbl_cafe 
				WHERE id_cafe = " . $id_cafe;
	$conexao = AbreConexao(); // Abre conexão com o BD
	// Executa o comando SQL 
	$conexao->query($sql);
	$conexao->close(); // Fecha a conexão com o BD
}

/* =============================================================================== */

// Função que Retorna os registros da tabela
function RetornaProdutorCafe()
{
	$sql = "SELECT * FROM tbl_produtor_cafe ORDER BY nome"; // Define o comando SQL (select)
	$conexao = AbreConexao(); // Abre conexão com o BD
	$resultado = $conexao->query($sql); // Executa com comando SQL
	$conexao->close(); // Fecha a conexão com o BD

	// Verifica se a consulta retornou pelo menos um registro
	if (mysqli_num_rows($resultado) > 0) {
		while ($row = mysqli_fetch_array($resultado)) {
			// Atribui cada registro da consulta para o vetor $pessoas[]
			$produtores[] = $row;
		}
		// Retorna o vetor contendo todos os registros da consulta
		return $produtores;
	} else { // Se não retornou registro(s)
		return null;
	}
}


// Função que Retorna um unico registro pelo ID
function RetornaProdutorCafePorId($id)
{
	$sql = "SELECT * FROM tbl_produtor_cafe WHERE id_produtor_cafe = " . $id; // Define o comando SQL (select)
	$conexao = AbreConexao(); // Abre conexão com o BD
	$resultado = $conexao->query($sql); // Executa com comando SQL
	$conexao->close(); // Fecha a conexão com o BD

	// Verifica se a consulta retornou pelo menos um registro
	if (mysqli_num_rows($resultado) > 0) {
		// Atribui o registro da consulta para a variável $pessoa
		$produtores = mysqli_fetch_array($resultado);
		// Retorna a variável contendo o registro da consulta
		return $produtores;
	} else { // Se não retornou registro
		return null;
	}
}

// Função insere pessoa na tabela
function InsereProdutorCafe($nome, $identificador, $cpfCnpj, $endereco, $numero, $complemento, $cidade, $estado, $pais, $telefoneFixo, $telefoneCelular, $email, $dataNascimento, $observacao)
{
	// Define o comando SQL (Insert)
	$sql = "INSERT INTO tbl_produtor_cafe(nome, identificador, cpf_cnpj, endereco, numero, complemento, cidade, estado, pais, telefone_fixo, telefone_celular, email, data_nascimento, observacao) VALUES('" . $nome . "', '" . $identificador . "', '" . $cpfCnpj . "' , '" . $endereco . "', '" . $numero . "', '" . $complemento . "', '" . $cidade . "', '" . $estado . "', '" . $pais . "', '" . $telefoneFixo . "', '" . $telefoneCelular . "', '" . $email . "','".$dataNascimento."', '" . $observacao . "')";
	// Abre a conexão com o BD
	$conexao = AbreConexao();
	// Executa com comando SQL
	$conexao->query($sql);
	// Fecha a conexão com o BD
	$conexao->close();
}

// Função atualiza dados da pessoa na tabela
function AlteraProdutorCafe($nome, $identificador, $cpfCnpj, $endereco, $numero, $complemento, $cidade, $estado, $pais, $telefoneFixo, $telefoneCelular, $email, $dataNascimento, $observacao, $id_produtor_cafe)
{
	// Define o comando SQL (update)
	$sql  = "UPDATE tbl_produtor_cafe SET nome = '" . $nome . "', identificador = '" . $identificador . "', cpf_cnpj = '" . $cpfCnpj . "', endereco = '" . $endereco . "',complemento = '".$complemento."' , numero = '" . $numero . "', cidade = '" . $cidade . "', estado = '" . $estado . "', pais = '" . $pais . "', telefone_fixo = '" . $telefoneFixo . "', telefone_celular = '" . $telefoneCelular . "', email = '" . $email . "', data_nascimento = '".$dataNascimento."', observacao = '" . $observacao . "' WHERE id_produtor_cafe = " . $id_produtor_cafe;
	$conexao = AbreConexao(); // Abre conexão
	// Executa o comando SQL
	$conexao->query($sql);
	$conexao->close(); // Fecha a Conexão
}

// Função exclui registro da tabela
function ExcluiProdutorCafe($id_produtor_cafe)
{
	// Define o comando SQL (delete)
	$sql = "DELETE FROM tbl_produtor_cafe 
				WHERE id_produtor_cafe = " . $id_produtor_cafe;
	$conexao = AbreConexao(); // Abre conexão com o BD
	// Executa o comando SQL 
	$conexao->query($sql);
	$conexao->close(); // Fecha a conexão com o BD
}

/* =============================================================================== */

// Função que Retorna os registros da tabela
function RetornaPropriedade()
{
	$sql = "SELECT * FROM tbl_propriedade ORDER BY nome"; // Define o comando SQL (select)
	$conexao = AbreConexao(); // Abre conexão com o BD
	$resultado = $conexao->query($sql); // Executa com comando SQL
	$conexao->close(); // Fecha a conexão com o BD

	// Verifica se a consulta retornou pelo menos um registro
	if (mysqli_num_rows($resultado) > 0) {
		while ($row = mysqli_fetch_array($resultado)) {
			// Atribui cada registro da consulta para o vetor $pessoas[]
			$propriedades[] = $row;
		}
		// Retorna o vetor contendo todos os registros da consulta
		return $propriedades;
	} else { // Se não retornou registro(s)
		return null;
	}
}


// Função que Retorna um unico registro pelo ID
function RetornaPropriedadePorId($id)
{
	$sql = "SELECT * FROM tbl_propriedade WHERE id_propriedade = " . $id; // Define o comando SQL (select)
	$conexao = AbreConexao(); // Abre conexão com o BD
	$resultado = $conexao->query($sql); // Executa com comando SQL
	$conexao->close(); // Fecha a conexão com o BD

	// Verifica se a consulta retornou pelo menos um registro
	if (mysqli_num_rows($resultado) > 0) {
		// Atribui o registro da consulta para a variável $pessoa
		$propriedades = mysqli_fetch_array($resultado);
		// Retorna a variável contendo o registro da consulta
		return $propriedades;
	} else { // Se não retornou registro
		return null;
	}
}

// Função insere pessoa na tabela
function InserePropriedade($nome, $areaTotal, $areaLavoura, $quantPesCafe, $tipoCafe, $terreiro, $tipoTerreiro, $quantSecador, $tipoSecador, $analiseSolo, $adubacaoSolo, $tipoColheita, $producaoMediaAnual, $observacao)
{
	// Define o comando SQL (Insert)
	$sql = "INSERT INTO tbl_propriedade(nome, area_total, area_lavoura, quant_pes_cafe, tipo_cafe, terreiro, tipo_terreiro, quant_secador, tipo_secador, analise_solo, adubacao_solo, tipo_colheita, producao_media_anual, observacao) VALUES('" . $nome . "', '" . $areaTotal . "', '" . $areaLavoura . "' , '" . $quantPesCafe . "', '" . $tipoCafe . "', '" . $terreiro . "', '" . $tipoTerreiro . "', '" . $quantSecador . "', '" . $tipoSecador . "', '" . $analiseSolo . "', '" . $adubacaoSolo . "', '" . $tipoColheita . "','".$producaoMediaAnual."', '" . $observacao . "')";
	// Abre a conexão com o BD
	$conexao = AbreConexao();
	// Executa com comando SQL
	$conexao->query($sql);
	// Fecha a conexão com o BD
	$conexao->close();
}

// Função atualiza dados da pessoa na tabela
function AlteraPropriedade($nome, $areaTotal, $areaLavoura, $quantPesCafe, $tipoCafe, $terreiro, $tipoTerreiro, $quantSecador, $tipoSecador, $analiseSolo, $adubacaoSolo, $tipoColheita, $producaoMediaAnual, $observacao, $id_propriedade)
{
	// Define o comando SQL (update)
	$sql  = "UPDATE tbl_propriedade SET nome = '" . $nome . "', area_total = '" . $areaTotal . "', area_lavoura = '" . $areaLavoura . "', quant_pes_cafe = '" . $quantPesCafe . "', tipo_cafe = '" . $tipoCafe . "', terreiro = '" . $terreiro . "', tipo_terreiro = '" . $tipoTerreiro . "', quant_secador = '" . $quantSecador . "', tipo_secador = '" . $tipoSecador . "', analise_solo = '" . $analiseSolo . "', adubacao_solo = '" . $adubacaoSolo . "', tipo_colheita = '" . $tipoColheita . "', producao_media_anual = '".$producaoMediaAnual."', observacao = '" . $observacao . "' WHERE id_propriedade = " . $id_propriedade;
	$conexao = AbreConexao(); // Abre conexão
	// Executa o comando SQL
	$conexao->query($sql);
	$conexao->close(); // Fecha a Conexão
}

// Função exclui registro da tabela
function ExcluiPropriedade($id_propriedade)
{
	// Define o comando SQL (delete)
	$sql = "DELETE FROM tbl_propriedade 
				WHERE id_propriedade = " . $id_propriedade;
	$conexao = AbreConexao(); // Abre conexão com o BD
	// Executa o comando SQL 
	$conexao->query($sql);
	$conexao->close(); // Fecha a conexão com o BD
}

/* !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! */
/* =============================================================================== */
/* =============================================================================== */
/* =============================================================================== */
/* =============================================================================== */

/* ------------------------------FERRAMENTAS --------------------------------------*/

// Função que Retorna os registros da tabela
function RetornaCompra()
{
	$sql = "SELECT * FROM tbl_compra ORDER BY id_compra"; // Define o comando SQL (select)
	$conexao = AbreConexao(); // Abre conexão com o BD
	$resultado = $conexao->query($sql); // Executa com comando SQL
	$conexao->close(); // Fecha a conexão com o BD

	// Verifica se a consulta retornou pelo menos um registro
	if (mysqli_num_rows($resultado) > 0) {
		while ($row = mysqli_fetch_array($resultado)) {
			// Atribui cada registro da consulta para o vetor $pessoas[]
			$compras[] = $row;
		}
		// Retorna o vetor contendo todos os registros da consulta
		return $compras;
	} else { // Se não retornou registro(s)
		return null;
	}
}


// Função que Retorna um unico registro pelo ID
function RetornaCompraPorId($id)
{
	$sql = "SELECT * FROM tbl_compra WHERE id_compra = " . $id; // Define o comando SQL (select)
	$conexao = AbreConexao(); // Abre conexão com o BD
	$resultado = $conexao->query($sql); // Executa com comando SQL
	$conexao->close(); // Fecha a conexão com o BD

	// Verifica se a consulta retornou pelo menos um registro
	if (mysqli_num_rows($resultado) > 0) {
		// Atribui o registro da consulta para a variável $pessoa
		$compras = mysqli_fetch_array($resultado);
		// Retorna a variável contendo o registro da consulta
		return $compras;
	} else { // Se não retornou registro
		return null;
	}
}

// Função insere compras na tabela
function InsereCompra($produtor, $cafe, $situacao, $contratoAssinado, $quantidadeSacas, $dataCompra, $valor, $observacao)
{
	// Define o comando SQL (Insert)
	$sql = "INSERT INTO tbl_compra(produtor, cafe, situacao, contrato_assinado, quantidade_sacas, data_compra, valor, observacao) VALUES('" . $produtor . "','" . $cafe . "','" .$situacao. "' ,  '" . $contratoAssinado . "' , '" . $quantidadeSacas . "', '" . $dataCompra . "', '" . $valor. "', '" . $observacao . "')";
	// Abre a conexão com o BD
	$conexao = AbreConexao();
	// Executa com comando SQL
	$conexao->query($sql);
	// Fecha a conexão com o BD
	$conexao->close();
}

// Função atualiza dados da pessoa na tabela
function AlteraCompra($produtor, $cafe, $situacao, $contratoAssinado, $quantidadeSacas, $dataCompra, $valor, $observacao, $id_compra)
{
	// Define o comando SQL (update)
	$sql  = "UPDATE tbl_compra SET produtor = '" . $produtor . "', cafe = '" . $cafe . "', situacao = '" . $situacao . "', contrato_assinado = '" . $contratoAssinado . "', quantidade_sacas = '" . $quantidadeSacas . "', data_compra = '" . $dataCompra . "', valor = '" . $valor . "', observacao = '" . $observacao . "' WHERE id_compra = " . $id_compra;
	$conexao = AbreConexao(); // Abre conexão
	// Executa o comando SQL
	$conexao->query($sql);
	$conexao->close(); // Fecha a Conexão
}

// Função exclui registro da tabela
function ExcluiCompra($id_compra)
{
	// Define o comando SQL (delete)
	$sql = "DELETE FROM tbl_compra 
				WHERE id_compra = " . $id_compra;
	$conexao = AbreConexao(); // Abre conexão com o BD
	// Executa o comando SQL 
	$conexao->query($sql);
	$conexao->close(); // Fecha a conexão com o BD
}

/* =============================================================================== */

// Função que Retorna os registros da tabela
function RetornaPrevenda()
{
	$sql = "SELECT * FROM tbl_prevenda ORDER BY id_prevenda"; // Define o comando SQL (select)
	$conexao = AbreConexao(); // Abre conexão com o BD
	$resultado = $conexao->query($sql); // Executa com comando SQL
	$conexao->close(); // Fecha a conexão com o BD

	// Verifica se a consulta retornou pelo menos um registro
	if (mysqli_num_rows($resultado) > 0) {
		while ($row = mysqli_fetch_array($resultado)) {
			// Atribui cada registro da consulta para o vetor $pessoas[]
			$prevendas[] = $row;
		}
		// Retorna o vetor contendo todos os registros da consulta
		return $prevendas;
	} else { // Se não retornou registro(s)
		return null;
	}
}


// Função que Retorna um unico registro pelo ID
function RetornaPrevendaPorId($id)
{
	$sql = "SELECT * FROM tbl_prevenda WHERE id_prevenda = " . $id; // Define o comando SQL (select)
	$conexao = AbreConexao(); // Abre conexão com o BD
	$resultado = $conexao->query($sql); // Executa com comando SQL
	$conexao->close(); // Fecha a conexão com o BD

	// Verifica se a consulta retornou pelo menos um registro
	if (mysqli_num_rows($resultado) > 0) {
		// Atribui o registro da consulta para a variável $pessoa
		$prevendas = mysqli_fetch_array($resultado);
		// Retorna a variável contendo o registro da consulta
		return $prevendas;
	} else { // Se não retornou registro
		return null;
	}
}

// Função insere pessoa na tabela
function InserePrevenda($cliente, $cafe, $situacao, $dataPrevenda, $observacao)
{
	// Define o comando SQL (Insert)
	$sql = "INSERT INTO tbl_prevenda(cliente, cafe, situacao, data_prevenda, observacao) VALUES('" . $cliente . "','" . $cafe . "','" .$situacao. "' , '" . $dataPrevenda . "', '" . $observacao . "')";
	// Abre a conexão com o BD
	$conexao = AbreConexao();
	// Executa com comando SQL
	$conexao->query($sql);
	// Fecha a conexão com o BD
	$conexao->close();
}

// Função atualiza dados da pessoa na tabela
function AlteraPrevenda($cliente, $cafe, $situacao, $dataPrevenda, $observacao, $id_prevenda)
{
	// Define o comando SQL (update)
	$sql  = "UPDATE tbl_prevenda SET cliente = '" . $cliente . "', cafe = '" . $cafe . "', situacao = '" . $situacao . "', data_prevenda = '" . $dataPrevenda . "', observacao = '" . $observacao . "' WHERE id_prevenda = " . $id_prevenda;
	$conexao = AbreConexao(); // Abre conexão
	// Executa o comando SQL
	$conexao->query($sql);
	$conexao->close(); // Fecha a Conexão
}

// Função exclui registro da tabela
function ExcluiPrevenda($id_prevenda)
{
	// Define o comando SQL (delete)
	$sql = "DELETE FROM tbl_prevenda 
				WHERE id_prevenda = " . $id_prevenda;
	$conexao = AbreConexao(); // Abre conexão com o BD
	// Executa o comando SQL 
	$conexao->query($sql);
	$conexao->close(); // Fecha a conexão com o BD
}



/* =============================================================================== */

// Função que Retorna os registros da tabela
function RetornaVenda()
{
	$sql = "SELECT * FROM tbl_venda ORDER BY id_venda"; // Define o comando SQL (select)
	$conexao = AbreConexao(); // Abre conexão com o BD
	$resultado = $conexao->query($sql); // Executa com comando SQL
	$conexao->close(); // Fecha a conexão com o BD

	// Verifica se a consulta retornou pelo menos um registro
	if (mysqli_num_rows($resultado) > 0) {
		while ($row = mysqli_fetch_array($resultado)) {
			// Atribui cada registro da consulta para o vetor $pessoas[]
			$vendas[] = $row;
		}
		// Retorna o vetor contendo todos os registros da consulta
		return $vendas;
	} else { // Se não retornou registro(s)
		return null;
	}
}


// Função que Retorna um unico registro pelo ID
function RetornaVendaPorId($id)
{
	$sql = "SELECT * FROM tbl_venda WHERE id_venda = " . $id; // Define o comando SQL (select)
	$conexao = AbreConexao(); // Abre conexão com o BD
	$resultado = $conexao->query($sql); // Executa com comando SQL
	$conexao->close(); // Fecha a conexão com o BD

	// Verifica se a consulta retornou pelo menos um registro
	if (mysqli_num_rows($resultado) > 0) {
		// Atribui o registro da consulta para a variável $pessoa
		$vendas = mysqli_fetch_array($resultado);
		// Retorna a variável contendo o registro da consulta
		return $vendas;
	} else { // Se não retornou registro
		return null;
	}
}

// Função insere pessoa na tabela
function InsereVenda($cliente, $cafe, $situacao, $contratoAssinado, $quantidadeSacas, $dataVenda, $dataRetirada, $valor, $enderecoRetirada, $numeroRetirada, $complementoRetirada, $bairroRetirada, $cidadeRetirada, $estadoRetirada, $observacao)
{
	// Define o comando SQL (Insert)
	$sql = "INSERT INTO tbl_venda(cliente, cafe, situacao, contrato_assinado, quantidade_sacas, data_venda, data_retirada, valor, endereco_retirada, numero_retirada, complemento_retirada, bairro_retirada, cidade_retirada, estado_retirada, observacao) VALUES('" . $cliente . "','" . $cafe . "','" .$situacao. "' ,  '" . $contratoAssinado . "' , '" . $quantidadeSacas . "', '" . $dataVenda . "','" .$dataRetirada . "', '" .$valor."' , '" . $enderecoRetirada. "', '" .$numeroRetirada. "' , '" .$complementoRetirada. "', '" .$bairroRetirada. "', '" .$cidadeRetirada. "', '" .$estadoRetirada. "',  '" . $observacao . "')";
	// Abre a conexão com o BD
	$conexao = AbreConexao();
	// Executa com comando SQL
	$conexao->query($sql);
	// Fecha a conexão com o BD
	$conexao->close();
}

// Função atualiza dados da pessoa na tabela
function AlteraVenda($cliente, $cafe, $situacao, $contratoAssinado, $quantidadeSacas, $dataVenda, $dataRetirada, $valor, $enderecoRetirada, $numeroRetirada, $complementoRetirada, $bairroRetirada, $cidadeRetirada, $estadoRetirada, $observacao, $id_venda)
{
	// Define o comando SQL (update)
	$sql  = "UPDATE tbl_venda SET cliente = '" . $cliente . "', cafe = '" . $cafe . "', situacao = '" . $situacao . "', contrato_assinado = '" . $contratoAssinado . "', quantidade_sacas = '" . $quantidadeSacas . "', data_venda = '" . $dataVenda . "', data_retirada = '" .$dataRetirada. "' , valor = '" . $valor . "', endereco_retirada = '" .$enderecoRetirada. "' , numero_retirada = '" .$numeroRetirada. "', complemento_retirada = '" .$complementoRetirada. "', bairro_retirada = '" .$bairroRetirada. "' , cidade_retirada = '" .$cidadeRetirada. "' , estado_retirada = '" .$estadoRetirada. "' , observacao = '" . $observacao . "' WHERE id_venda = " . $id_venda;
	$conexao = AbreConexao(); // Abre conexão
	// Executa o comando SQL
	$conexao->query($sql);
	$conexao->close(); // Fecha a Conexão
}

// Função exclui registro da tabela
function ExcluiVenda($id_venda)
{
	// Define o comando SQL (delete)
	$sql = "DELETE FROM tbl_venda
				WHERE id_venda = " . $id_venda;
	$conexao = AbreConexao(); // Abre conexão com o BD
	// Executa o comando SQL 
	$conexao->query($sql);
	$conexao->close(); // Fecha a conexão com o BD
}





/* =============================================================================== */
/* =============================================================================== */
/* =============================================================================== */
/* !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! */

// Função que Retorna os registros da tabela
function RetornaUsuario()
{
	$sql = "SELECT * FROM tbl_usuario ORDER BY id_usuario"; // Define o comando SQL (select)
	$conexao = AbreConexao(); // Abre conexão com o BD
	$resultado = $conexao->query($sql); // Executa com comando SQL
	$conexao->close(); // Fecha a conexão com o BD

	// Verifica se a consulta retornou pelo menos um registro
	if (mysqli_num_rows($resultado) > 0) {
		while ($row = mysqli_fetch_array($resultado)) {
			// Atribui cada registro da consulta para o vetor $pessoas[]
			$usuarios[] = $row;
		}
		// Retorna o vetor contendo todos os registros da consulta
		return $usuarios;
	} else { // Se não retornou registro(s)
		return null;
	}
}


// Função que Retorna um unico registro pelo ID
function RetornaUsuarioPorId($id)
{
	$sql = "SELECT * FROM tbl_usuario WHERE id_usuario = " . $id; // Define o comando SQL (select)
	$conexao = AbreConexao(); // Abre conexão com o BD
	$resultado = $conexao->query($sql); // Executa com comando SQL
	$conexao->close(); // Fecha a conexão com o BD

	// Verifica se a consulta retornou pelo menos um registro
	if (mysqli_num_rows($resultado) > 0) {
		// Atribui o registro da consulta para a variável $pessoa
		$usuarios = mysqli_fetch_array($resultado);
		// Retorna a variável contendo o registro da consulta
		return $usuarios;
	} else { // Se não retornou registro
		return null;
	}
}

// Função insere pessoa na tabela
function InsereUsuario($nome, $email, $dataNasc, $login, $senha)
{
	// Define o comando SQL (Insert)
	$sql = "INSERT INTO tbl_usuario(nome, email, data_nasc, login, senha) VALUES('" . $nome . "','" . $email . "','" .$dataNasc. "' ,  '" . $login . "' , '" . $senha . "')";
	// Abre a conexão com o BD
	$conexao = AbreConexao();
	// Executa com comando SQL
	$conexao->query($sql);
	// Fecha a conexão com o BD
	$conexao->close();
}

// Função atualiza dados
function AlteraUsuario($nome, $email, $dataNasc, $login, $id_usuario)
{
	// Define o comando SQL (update)
	$sql  = "UPDATE tbl_usuario SET nome = '" . $nome . "', email = '" . $email ."', data_nasc = '" .$dataNasc. "', login = '" .$login. "' WHERE id_usuario = " .$id_usuario;
	$conexao = AbreConexao(); // Abre conexão
	// Executa o comando SQL
	$conexao->query($sql);
	$conexao->close(); // Fecha a Conexão
}

// Função exclui registro da tabela
function ExcluiUsuario($id_usuario)
{
	// Define o comando SQL (delete)
	$sql = "DELETE FROM tbl_usuario
				WHERE id_usuario = " . $id_usuario;
	$conexao = AbreConexao(); // Abre conexão com o BD
	// Executa o comando SQL 
	$conexao->query($sql);
	$conexao->close(); // Fecha a conexão com o BD
}


	function ComparaLogin($login, $senha)
	{
		$sql = "SELECT * from tbl_usuario where login = '$login' and senha = '$senha'";
		$conexao = AbreConexao();
		$resultado = $conexao->query($sql); 
		$conexao->close();

	if (mysqli_num_rows($resultado) > 0){
			// Atribui o registro da consulta para a variável $pessoa
			$pessoa = mysqli_fetch_array($resultado);
			// Retorna a variável contendo o registro da consulta
			return $pessoa;
		}else{ // Se não retornou registro
			return null;
		}
	}



		/*
	// Função que altera a foto de um registro
	function AlteraFoto($foto, $idpessoa){
		// Define o comando SQL (update)
		$sql = "UPDATE tbpessoa SET 
				foto = '".$foto."' WHERE idpessoa = ". $idpessoa;
		$conexao = AbreConexao();  // Abre conexão com o BD
		$conexao->query($sql); // Executa o comando SQL
		$conexao->close(); // Fecha a conexão com o BD
	}
	*/
