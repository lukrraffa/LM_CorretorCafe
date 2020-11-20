<?php session_start(); ?>

<?php
if (!isset($_GET["id"])) {
    $id_venda = "";
} else {
    $id_venda = intval($_GET["id"]);
    if ($id_venda == 0) {
        //Novo registro
        $id_venda = "";
        $cliente = "";
        $cafe = "";
        $situacao = "";
        $contratoAssinado = "";
        $quantidadeSacas = "";
        $dataVenda = "";
        $dataRetirada = "";
        $valor = "";
        $enderecoRetirada = "";
        $numeroRetirada = "";
        $complementoRetirada = "";
        $bairroRetirada = "";
        $cidadeRetirada = "";
        $estadoRetirada = "";
        $observacao = "";
    } else {
        //Alteração de registro
        include("conecta.php");
        $venda = RetornaVendaPorId($id_venda);
        if ($venda != null) {
            $cliente = $venda["cliente"];
            $cafe = $venda["cafe"];
            $situacao = $venda["situacao"];
            $contratoAssinado = $venda["contrato_assinado"];
            $quantidadeSacas = $venda["quantidade_sacas"];
            $dataVenda = $venda["data_venda"];
            $dataRetirada = $venda["data_retirada"];
            $valor = $venda["valor"];
            $dataVenda = $venda["data_venda"];
            $valor = $venda["valor"];
            $enderecoRetirada = $venda["endereco_retirada"];
            $numeroRetirada = $venda["numero_retirada"];
            $complementoRetirada = $venda["complemento_retirada"];
            $bairroRetirada = $venda["bairro_retirada"];
            $cidadeRetirada = $venda["cidade_retirada"];
            $estadoRetirada = $venda["estado_retirada"];
            $observacao = $venda["observacao"];
        }
    }
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LM Sistemas</title>

</head>

<body>

    <?php
    include("topo_admin.php");
    include("menu_admin.php");

    ?>

    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Venda de café</h2>


                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
            <div class="painel">
                <form action="salvar_venda.php" method="POST">

                    <input type="hidden" name="id" value="<?php echo $id_venda; ?>" />

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right" for="cCliente">Cliente</label>
                        <div class="col-sm-8">
                            <select class="form-control" type="text" name="txtCliente" id="cCliente" value="<?php echo $cliente; ?>">
                                <option value="Armazens Bom Sucesso">Armazens Bom sucesso</option>
                                <option value="Dona Tereza">Dona Tereza</option>
                                <option value="Ribeiro Exportadora">Ribeiro exportadora</option>
                                <option value="Utam">Utam</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right" for="cCafe">Café</label>
                        <div class="col-sm-8">
                            <select class="form-control" type="text" name="txtCafe" id="cCafe" value="<?php echo $cafe; ?>">
                                <option value="Arabica">Arabica</option>
                                <option value="Kopi Luwak">Kopi Luwak</option>
                                <option value="Robusta">Robusta</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right" for="cSituacao">Situação</label>
                        <div class="col-sm-8">
                            <select class="form-control" type="text" name="txtSituacao" id="cSituacao" value="<?php echo $situacao; ?>">
                                <option value="Finalizada">Finalizada</option>
                                <option value="Em andamento">Em andamento</option>
                                <option value="Cancelada">Cancelada</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right" for="cContratoAssinado">Contrato Assinado</label>
                        <div class="col-sm-8">
                            <select class="form-control" type="text" name="txtContratoAssinado" id="cContratoAssinado" value="<?php echo $contratoAssinado; ?>">
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
                            </select>
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right" for="cQuantidadeSacas">Quantidade de sacas</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="number" name="txtQuantidadeSacas" id="cQuantidadeSacas" value="<?php echo $quantidadeSacas; ?>">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right" for="cDataVenda">Data da venda</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="date" name="txtDataVenda" id="cDataVenda" value="<?php echo $dataVenda; ?>">
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right" for="cDataRetirada">Data da retirada</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="date" name="txtDataRetirada" id="cDataRetirada" value="<?php echo $dataRetirada; ?>">
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right" for="cValor">Valor</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="float" name="txtValor" id="cValor" value="<?php echo $valor; ?>">
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right" for="cEnderecoRetirada">Endereço da retirada</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="txtEnderecoRetirada" id="cEnderecoRetirada" value="<?php echo $enderecoRetirada; ?>">
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right" for="cNumeroRetirada">Número do endereço da retirada</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="number" name="txtNumeroRetirada" id="cNumeroRetirada" value="<?php echo $numeroRetirada; ?>">
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right" for="cComplementoRetirada">Complemento da retirada</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="txtComplementoRetirada" id="cComplementoRetirada" value="<?php echo $complementoRetirada; ?>">
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right" for="cBairroRetirada">Bairro da retirada</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="txtBairroRetirada" id="cBairroRetirada" value="<?php echo $bairroRetirada; ?>">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right" for="cCidadeRetirada">Cidade da retirada</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="txtCidadeRetirada" id="cCidadeRetirada" value="<?php echo $cidadeRetirada; ?>">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right" for="cEstadoRetirada">Estado da retirada</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="txtEstadoRetirada" id="cEstadoRetirada" value="<?php echo $estadoRetirada; ?>">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right" for="cObservacao">Observação</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="txtObservacao" id="cObservacao" value="<?php echo $observacao; ?>">
                        </div>
                    </div>
                    <br>

                    <!--
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label text-right">Foto:</label>
                        <div class="col-sm-6">
                            TAG para UPLOAD de Arquivos 
                            <input type="file" name="txtFoto" class="form-control">
                        </div>
                    </div>
                    <br>

                    -->



                    <div class="text-center">
                        <input type="submit" class="btn btn-primary" value="Salvar" onclick="alert('Dados salvos com sucesso!');">
                        <a href="index.php" class="btn btn-warning">Cancelar</a>
                    </div>
                </form>
            </div>
            <!-- /. ROW  -->

            <!-- /. ROW  -->
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>

</html>