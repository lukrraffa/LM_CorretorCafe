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
                    <h2>Controle de compras</h2>

                </div>
            </div>
            <!-- /. ROW  -->
            <hr />



            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Controle de compras
                        </div>



                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">


                                    <thead>
                                        <tr>
                                            <th>Número da compra</th>
                                            <th>Produtor</th>
                                            <th>Café</th>
                                            <th>Situação</th>
                                            <th>Contrato Assinado</th>
                                            <th>Quant. de sacas</th>
                                            <th>Data da compra</th>
                                            <th>Valor</th>
                                            <!-- <th>Observação</th> -->
                                            <th> </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php include("conecta.php");

                                        // Atribui os registros da tabela no vetor
                                        $vetcompras = RetornaCompra();

                                        //para cada linha ficar com uma cor
                                        $cor = 1;

                                        // Verifica se existe registros na tabela retornada
                                        if ($vetcompras != null) {
                                            // Existe pelo menos um registro (pessoa na tabela do BD)
                                            foreach ($vetcompras as $compra) {
                                                if ($cor == 1) {

                                                    //  <form action="excluir_cliente.php" method="GET">
                                                    echo ' 
                                            <tr class="odd gradeX">
                                            <td>' . $compra['id_compra'] . '</td>
                                            <td class="center">' . $compra['produtor'] . '</td>
                                            <td class="center">' . $compra['cafe'] . '</td>
                                            <td class="center">' . $compra['situacao'] . '</td>
                                            <td class="center">' . $compra['contrato_assinado'] . '</td>
                                            <td class="center">' . $compra['quantidade_sacas'] . '</td>
                                            <td class="center">' . $compra['data_compra'] . '</td>
                                            <td class="center">' . $compra['valor'] . '</td>
                                            <!-- <td class="center">' . $compra['observacao'] . '</td> -->
                                            <td> <a href="servico_compra.php?id=' . $compra['id_compra'] . '" 
                                            class="btn btn-primary">Alterar</a> </td>
                                            </tr>';
                                                    //</form>

                                                    $cor = 2;
                                                } else if ($cor == 2) {
                                                    //<form action="excluirPessoa.php" method="GET">
                                                    echo ' 
                                           <tr class="odd gradeA">
                                           <td>' . $compra['id_compra'] . '</td>
                                            <td class="center">' . $compra['produtor'] . '</td>
                                            <td class="center">' . $compra['cafe'] . '</td>
                                            <td class="center">' . $compra['situacao'] . '</td>
                                            <td class="center">' . $compra['contrato_assinado'] . '</td>
                                            <td class="center">' . $compra['quantidade_sacas'] . '</td>
                                            <td class="center">' . $compra['data_compra'] . '</td>
                                            <td class="center">' . $compra['valor'] . '</td>
                                            <!-- <td class="center">' . $compra['observacao'] . '</td> -->
                                            <td> <a href="servico_compra.php?id=' . $compra['id_compra'] . '" 
                                            class="btn btn-primary">Alterar</a> </td>
                                        </tr>';
                                                    //</form>

                                                    $cor = 1;
                                                }
                                            }
                                        } else {
                                            echo "<tr><td>
                                Nenhuma compra encontrada!
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