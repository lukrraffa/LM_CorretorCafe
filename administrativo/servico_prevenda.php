<?php session_start(); ?>

<?php
if (!isset($_GET["id"])) {
    $id_prevenda = "";
} else {
    $id_prevenda = intval($_GET["id"]);
    if ($id_prevenda == 0) {
        //Novo registro
        $id_prevenda = "";
        $cliente = "";
        $cafe = "";
        $situacao = "";
        $dataPrevenda = "";
        $observacao = "";
    } else {
        //Alteração de registro
        include("conecta.php");
        $prevenda = RetornaPrevendaPorId($id_prevenda);
        if ($prevenda != null) {
            $cliente = $prevenda["cliente"];
            $cafe = $prevenda["cafe"];
            $situacao = $prevenda["situacao"];
            $dataPrevenda = $prevenda["data_prevenda"];
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
                    <h2>Pré-venda</h2>


                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
            <div class="painel">
                <form action="salvar_prevenda.php" method="POST">

                    <input type="hidden" name="id" value="<?php echo $id_prevenda; ?>" />

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
                                <option value="Amostra enviada - Aguardando confirmação">Amostra enviada - Aguardando confirmação</option>
                                <option value="Aprovada">Aprovada</option>
                                <option value="Reprovado">Reprovado</option>
                                <option value="Cancelada">Cancelada</option>
                            </select>
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right" for="cDataPrevenda">Data da pré-venda</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="date" name="txtDataPrevenda" id="cDataPrevenda" value="<?php echo $dataPrevenda; ?>">
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