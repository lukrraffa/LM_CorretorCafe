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
                    <h2>Lista de produtores</h2>
                   

                </div>
            </div>
            <!-- /. ROW  -->
            <hr />



            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Lista de produtores
                        </div>



                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">


                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Identificador</th>
                                            <th>Cpf/Cnpj</th>
                                            <th>Endereço</th>
                                            <th>Número</th>
                                            <th>Complemento</th>
                                            <th>Cidade</th>
                                            <th>Estado</th>
                                            <th>País</th>
                                            <!-- <th>Tel. Fixo</th> -->
                                            <th>Tel. Celular</th>
                                            <!--  <th>E-mail</th>
                                            <th>Data de nascimento</th> 
                                            <th>Observação</th> -->
                                            <th> </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php include("conecta.php");

                                        // Atribui os registros da tabela no vetor
                                        $vetprodutores = RetornaProdutorCafe();

                                        //para cada linha ficar com uma cor
                                        $cor = 1;

                                        // Verifica se existe registros na tabela retornada
                                        if ($vetprodutores != null) {
                                            // Existe pelo menos um registro (pessoa na tabela do BD)
                                            foreach ($vetprodutores as $produtor) {
                                                if ($cor == 1) {

                                                    //  <form action="excluir_cliente.php" method="GET">
                                                    echo ' 
                                            <tr class="odd gradeX">
                                            <td>' . $produtor['nome'] . '</td>
                                            <td class="center">' . $produtor['identificador'] . '</td>
                                            <td class="center">' . $produtor['cpf_cnpj'] . '</td>
                                            <td class="center">' . $produtor['endereco'] . '</td>
                                            <td class="center">' . $produtor['numero'] . '</td>
                                            <td class="center">' . $produtor['complemento'] . '</td>
                                            <td class="center">' . $produtor['cidade'] . '</td>
                                            <td class="center">' . $produtor['estado'] . '</td>
                                            <td class="center">' . $produtor['pais'] . '</td>
                                            <!-- <td class="center">' . $produtor['telefone_fixo'] . '</td> -->
                                            <td class="center">' . $produtor['telefone_celular'] . '</td>
                                            <!-- <td class="center">' . $produtor['email'] . '</td>
                                            <td class="center">' . $produtor['data_nascimento'] . '</td>
                                            <td class="center">' . $produtor['observacao'] . '</td> -->
                                            <td> <a href="excluir_produtor.php?id=' . $produtor['id_produtor_cafe'] . '" class="btn btn-danger" 
                                            onclick="returnconfirm();" > Excluir </a>
                                            <a href="cad_produtorcafe.php?id=' . $produtor['id_produtor_cafe'] . '" 
                                            class="btn btn-primary">Alterar</a> </td>
                                            </tr>';
                                                    //</form>

                                                    $cor = 2;
                                                } else if ($cor == 2) {
                                                    //<form action="excluirPessoa.php" method="GET">
                                                    echo ' 
                                           <tr class="odd gradeA">
                                           <td>' . $produtor['nome'] . '</td>
                                            <td class="center">' . $produtor['identificador'] . '</td>
                                            <td class="center">' . $produtor['cpf_cnpj'] . '</td>
                                            <td class="center">' . $produtor['endereco'] . '</td>
                                            <td class="center">' . $produtor['numero'] . '</td>
                                            <td class="center">' . $produtor['complemento'] . '</td>
                                            <td class="center">' . $produtor['cidade'] . '</td>
                                            <td class="center">' . $produtor['estado'] . '</td>
                                            <td class="center">' . $produtor['pais'] . '</td>
                                            <!-- <td class="center">' . $produtor['telefone_fixo'] . '</td> -->
                                            <td class="center">' . $produtor['telefone_celular'] . '</td>
                                            <!-- <td class="center">' . $produtor['email'] . '</td>
                                            <td class="center">' . $produtor['data_nascimento'] . '</td>
                                            <td class="center">' . $produtor['observacao'] . '</td> -->
                                            <td> <a href="excluir_produtor.php?id=' . $produtor['id_produtor_cafe'] . '" class="btn btn-danger" 
                                            onclick="returnconfirm();" > Excluir </a>
                                            <a href="cad_produtorcafe.php?id=' . $produtor['id_produtor_cafe'] . '" 
                                            class="btn btn-primary">Alterar</a> </td>
                                        </tr>';
                                                    //</form>

                                                    $cor = 1;
                                                }
                                            }
                                        } else {
                                            echo "<tr><td>
                                Nenhum produtor encontrado!
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