<?php session_start(); ?>

<?php
if (!isset($_GET["id"])) {
    $id_compra = "";
} else {
    $id_compra = intval($_GET["id"]);
    if ($id_compra == 0) {
        //Novo registro
        $id_compra = "";
        $produtor = "";
        $cafe = "";
        $situacao = "";
        $contratoAssinado = "";
        $quantidadeSacas = "";
        $dataCompra = "";
        $valor = "";
        $observacao = "";
    } else {
        //Alteração de registro
        include("conecta.php");
        $compra = RetornaCompraPorId($id_compra);
        if ($compra != null) {
            $produtor = $compra["produtor"];
            $cafe = $compra["cafe"];
            $situacao = $compra["situacao"];
            $contratoAssinado = $compra["contrato_assinado"];
            $quantidadeSacas = $compra["quantidade_sacas"];
            $dataCompra = $compra["data_compra"];
            $valor = $compra["valor"];
            $observacao = $compra["observacao"];
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
                    <h2>Compra de café</h2>


                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
            <div class="painel">
                <form action="salvar_compra.php" method="POST">

                    <input type="hidden" name="id" value="<?php echo $id_compra; ?>" />

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right" for="cProdutor">Produtor</label>
                        <div class="col-sm-8">
                            <select class="form-control" type="text" name="txtProdutor" id="cProdutor" value="<?php echo $produtor; ?>">
                                <option value="Carla Moreira">Carla Moreira</option>
                                <option value="João Otávio">João Otávio</option>
                                <option value="José Pereira">José Pereira</option>
                                <option value="Maria Silva">Maria Silva</option>

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
                                <option value="Aguardando confirmação">Aguardando confirmação</option>
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
                        <label class="col-sm-2 col-form-label text-right" for="cDataCompra">Data da compra</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="date" name="txtDataCompra" id="cDataCompra" value="<?php echo $dataCompra; ?>">
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