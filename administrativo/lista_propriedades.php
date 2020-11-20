<?php session_start();?>

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
                    <h2>Lista de propriedades</h2>
                    

                </div>
            </div>
            <!-- /. ROW  -->
            <hr />



            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Lista de propriedades
                        </div>



                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">

                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Área total</th>
                                            <th>Área lavoura</th>
                                            <th>Quantidade de pés de café</th>
                                            <th>Tipo de café</th>
                                            <th>Terreiro</th>
                                            <th>Tipo de terreiro</th>
                                            <th>Quant. secadores</th>
                                            <th>Tipo de secadores</th>
                                            <th>Análise de solo</th>
                                            <th>Adubação do solo</th>
                                            <!--<th>Tipo de colheita</th>
                                            <th>Produção média anual</th>
                                            <th>Observação</th> -->
                                            <th> </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php include("conecta.php");

                                        // Atribui os registros da tabela no vetor
                                        $vetpropriedades = RetornaPropriedade();

                                        //para cada linha ficar com uma cor
                                        $cor = 1;

                                        // Verifica se existe registros na tabela retornada
                                        if ($vetpropriedades != null) {
                                            // Existe pelo menos um registro (pessoa na tabela do BD)
                                            foreach ($vetpropriedades as $propriedade) {
                                                if ($cor == 1) {

                                                    //  <form action="excluir_cliente.php" method="GET">
                                                    echo ' 
                                            <tr class="odd gradeX">
                                            <td>' . $propriedade['nome'] . '</td>
                                            <td class="center">' . $propriedade['area_total'] . '</td>
                                            <td class="center">' . $propriedade['area_lavoura'] . '</td>
                                            <td class="center">' . $propriedade['quant_pes_cafe'] . '</td>
                                            <td class="center">' . $propriedade['tipo_cafe'] . '</td>
                                            <td class="center">' . $propriedade['terreiro'] . '</td>
                                            <td class="center">' . $propriedade['tipo_terreiro'] . '</td> 
                                            <td class="center">' . $propriedade['quant_secador'] . '</td>
                                            <td class="center">' . $propriedade['tipo_secador'] . '</td>
                                            <td class="center">' . $propriedade['analise_solo'] . '</td>
                                            <td class="center">' . $propriedade['adubacao_solo'] . '</td>
                                            <!-- <td class="center">' . $propriedade['tipo_colheita'] . '</td>
                                            <td class="center">' . $propriedade['producao_media_anual'] . '</td>
                                            <td class="center">' . $propriedade['observacao'] . '</td> -->
                                            <td> <a href="excluir_propriedade.php?id=' . $propriedade['id_propriedade'] . '" class="btn btn-danger" 
                                            onclick="returnconfirm();" > Excluir </a>
                                            <a href="cad_propriedade.php?id=' . $propriedade['id_propriedade'] . '" 
                                            class="btn btn-primary">Alterar</a> </td>
                                            </tr>';
                                                    //</form>

                                                    $cor = 2;
                                                } else if ($cor == 2) {
                                                    //<form action="excluirPessoa.php" method="GET">
                                                    echo ' 
                                           <tr class="odd gradeA">
                                           <td>' . $propriedade['nome'] . '</td>
                                            <td class="center">' . $propriedade['area_total'] . '</td>
                                            <td class="center">' . $propriedade['area_lavoura'] . '</td>
                                            <td class="center">' . $propriedade['quant_pes_cafe'] . '</td>
                                            <td class="center">' . $propriedade['tipo_cafe'] . '</td>
                                            <td class="center">' . $propriedade['terreiro'] . '</td>
                                            <td class="center">' . $propriedade['tipo_terreiro'] . '</td>
                                            <td class="center">' . $propriedade['quant_secador'] . '</td>
                                            <td class="center">' . $propriedade['tipo_secador'] . '</td>
                                            <td class="center">' . $propriedade['analise_solo'] . '</td>
                                            <td class="center">' . $propriedade['adubacao_solo'] . '</td>
                                            <!-- <td class="center">' . $propriedade['tipo_colheita'] . '</td>
                                            <td class="center">' . $propriedade['producao_media_anual'] . '</td>
                                            <td class="center">' . $propriedade['observacao'] . '</td> -->
                                            <td> <a href="excluir_propriedade.php?id=' . $propriedade['id_propriedade'] . '" class="btn btn-danger" 
                                            onclick="returnconfirm();" > Excluir </a>
                                            <a href="cad_propriedade.php?id=' . $propriedade['id_propriedade'] . '" 
                                            class="btn btn-primary">Alterar</a> </td>
                                        </tr>';
                                                    //</form>

                                                    $cor = 1;
                                                }
                                            }
                                        } else {
                                            echo "<tr><td>
                                Nenhuma propriedade encontrada!
                                </td></tr>";
                                        }
                                        ?>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>

            </div>
            <!-- /. ROW  -->
</div>
            <!-- /. ROW  -->

            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTables-example').dataTable();
        });
    </script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>

</html>