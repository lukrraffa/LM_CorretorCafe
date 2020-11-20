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
                    <h2>Lista de cafés</h2>
                    

                </div>
            </div>
            <!-- /. ROW  -->
            <hr />



            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Lista de cafés
                        </div>



                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">

                                    <thead>
                                        <tr>
                                            <th>Tipo do café</th>
                                            <th>Classificação</th>
                                            <th>Preço da saca</th>
                                            <th>Observação</th>
                                            <th> </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php include("conecta.php");

                                        // Atribui os registros da tabela no vetor
                                        $vetcafes = RetornaCafe();

                                        //para cada linha ficar com uma cor
                                        $cor = 1;

                                        // Verifica se existe registros na tabela retornada
                                        if ($vetcafes != null) {
                                            // Existe pelo menos um registro (pessoa na tabela do BD)
                                            foreach ($vetcafes as $cafe) {
                                                if ($cor == 1) {

                                                    //  <form action="excluir_cliente.php" method="GET">
                                                    echo ' 
                                            <tr class="odd gradeX">
                                            <td>' . $cafe['tipo_cafe'] . '</td>
                                            <td>' . $cafe['classificacao'] . '</td>
                                            <td>' . $cafe['preco_saca'] . '</td>
                                            <td class="center">' . $cafe['observacao'] . '</td>
                                            <td> <a href="excluir_cafe.php?id=' . $cafe['id_cafe'] . '" class="btn btn-danger" 
                                            onclick="returnconfirm();" > Excluir </a>
                                            <a href="cad_cafe.php?id=' . $cafe['id_cafe'] . '" 
                                            class="btn btn-primary">Alterar</a> </td>
                                            </tr>';
                                                    //</form>

                                                    $cor = 2;
                                                } else if ($cor == 2) {
                                                    //<form action="excluirPessoa.php" method="GET">
                                                    echo ' 
                                           <tr class="odd gradeA">
                                           <td>' . $cafe['tipo_cafe'] . '</td>
                                            <td>' . $cafe['classificacao'] . '</td>
                                            <td>' . $cafe['preco_saca'] . '</td>
                                            <td class="center">' . $cafe['observacao'] . '</td>
                                            <td> <a href="excluir_cafe.php?id=' . $cafe['id_cafe'] . '" class="btn btn-danger" 
                                            onclick="returnconfirm();" > Excluir </a>
                                            <a href="cad_cafe.php?id=' . $cafe['id_cafe'] . '" 
                                            class="btn btn-primary">Alterar</a> </td>
                                        </tr>';
                                                    //</form>

                                                    $cor = 1;
                                                }
                                            }
                                        } else {
                                            echo "<tr><td>
                                Nenhum café encontrado!
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