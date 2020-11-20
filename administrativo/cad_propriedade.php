<?php session_start();?>

<?php
if (!isset($_GET["id"])) {
    $id_propriedade = "";
} else {
    $id_propriedade = intval($_GET["id"]);
    if ($id_propriedade == 0) {
        //Novo registro
        $id_propriedade = "";
        $nome = "";
        $areaTotal = "";
        $areaLavoura = "";
        $quantPesCafe = "";
        $tipoCafe = "";
        $terreiro = "";
        $tipoTerreiro = "";
        $quantSecador = "";
        $tipoSecador = "";
        $analiseSolo = "";
        $adubacaoSolo = "";
        $tipoColheita = "";
        $producaoMediaAnual = "";
        $observacao = "";
    } else {
        //Alteração de registro
        include("conecta.php");
        $propriedade = RetornaPropriedadePorId($id_propriedade);
        if ($propriedade != null) {
            $nome = $propriedade["nome"];
            $areaTotal = $propriedade["area_total"];
            $areaLavoura = $propriedade["area_lavoura"];
            $quantPesCafe = $propriedade["quant_pes_cafe"];
            $tipoCafe = $propriedade["tipo_cafe"];
            $terreiro = $propriedade["terreiro"];
            $tipoTerreiro = $propriedade["tipo_terreiro"];
            $quantSecador = $propriedade["quant_secador"];
            $tipoSecador = $propriedade["tipo_secador"];
            $analiseSolo = $propriedade["analise_solo"];
            $adubacaoSolo = $propriedade["adubacao_solo"];
            $tipoColheita = $propriedade["tipo_colheita"];
            $producaoMediaAnual = $propriedade["producao_media_anual"];
            $observacao = $propriedade["observacao"];
        }
    }
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LM SISTEMAS</title>

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
                    <h2>Cadastro de propriedade</h2>


                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
            <div class="painel">
                <form action="salvar_propriedade.php" method="POST">
                    <input type="hidden" name="id">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right" for="cNome">Nome da propriedade</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="txtNome" id="cNome" placeholder="Digite o nome da propriedade" value="<?php echo $nome; ?>">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right" for="cAreaTotal">Área Total da propriedade em hectares (ha)</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="float" name="txtAreaTotal" id="cAreaTotal" placeholder="Digite a área total da propriedade em hectares (ha)" value="<?php echo $areaTotal; ?>">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right" for="cAreaLavoura">Área da lavoura em hectares (ha) </label>
                        <div class="col-sm-8">
                            <input class="form-control" type="float" name="txtAreaLavoura" id="cAreaLavoura" placeholder="Digite a área da lavoura em hectares (ha)" value="<?php echo $areaLavoura; ?>">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right" for="cQuantPesCafe">Quantidade de pés de café</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="number" name="txtQuantPesCafe" id="cQuantPesCafe" placeholder="Digite a quantidade de pés de café da propriedade" value="<?php echo $quantPesCafe; ?>">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right" for="cTipoCafe">Tipo do café</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="txtTipoCafe" id="cTipoCafe" placeholder="Digite o tipo de café cultivado na propriedade" value="<?php echo $tipoCafe; ?>">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right" for="cTerreiro">Tamanho do terreiro em metros quadrado (m²)</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="txtTerreiro" id="cTerreiro" placeholder="Digite o tamanho do terreiro em metros quadrado (m²) tipo de café cultivado na propriedade" value="<?php echo $terreiro; ?>">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right" for="cTipoTerreiro">Tipo do terreiro</label>
                        <div class="col-sm-8">
                            <select class="form-control" type="text" name="txtTipoTerreiro" id="cTipoTerreiro" value="<?php echo $tipoTerreiro; ?>">
                                <option value="Chão batido">Chão batido</option>
                                <option value="Concretado">Concretado</option>
                                <option value="Revestido">Revestido</option>
                                <option value="Leito suspenso">Leito suspenso</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right" for="cQuantSecador">Quantidade de secadores</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="number" name="txtQuantSecador" id="cQuantSecador" placeholder="Digite a quantidade de secadores" value="<?php echo $quantSecador; ?>">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right" for="cTipoSecador">Tipo dos secadores</label>
                        <div class="col-sm-8">
                            <select class="form-control" type="text" name="txtTipoSecador" id="cTipoSecador" value="<?php echo $tipoSecador; ?>">
                                <option value="Rotativo">Rotativo</option>
                                <option value="Baú-vertical">Baú-vertical</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right" for="cAnaliseSolo">Análise do solo</label>
                        <div class="col-sm-8">
                            <select class="form-control" type="text" name="txtAnaliseSolo" id="cAnaliseSolo" value="<?php echo $analiseSolo; ?>">
                                <option value="Anual">Anual</option>
                                <option value="Bianual">Bianual</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right" for="cAdubacaoSolo">Adubação do solo</label>
                        <div class="col-sm-8">
                            <select class="form-control" type="text" name="txtAdubacaoSolo" id="cAdubacaoSolo" value="<?php echo $adubacaoSolo; ?>">
                                <option value="Própria">Própria</option>
                                <option value="Técnico">Técnico</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right" for="cTipoColheita">Tipo da colheita</label>
                        <div class="col-sm-8">
                            <select class="form-control" type="text" name="txtTipoColheita" id="cTipoColheita" value="<?php echo $tipoColheita; ?>">
                                <option value="Manual no chão">Manual no chão</option>
                                <option value="Manual pano">Manual pano</option>
                                <option value="Mecanizada">Mecanizada</option>
                                <option value="Derriçadeiras manuais chão">Derriçadeiras manuais chão</option>
                                <option value="Derriçadeiras manuais pano">Derriçadeiras manuais pano</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right" for="cProducaoMediaAnual">Produção média anual de sacas beneficiadas</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="number" name="txtProducaoMediaAnual" id="cProducacaoMediaAnual" placeholder="Digite a produção média 
                            anual de sacas beneficiadas" value="<?php echo $producaoMediaAnual; ?>">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right" for="cObservacao">Observação</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="txtObservacao" id="cObservacao" placeholder="Observação" value="<?php echo $observacao; ?>">
                        </div>
                    </div>
                    <br>
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