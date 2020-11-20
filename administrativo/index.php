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
            include ("topo_admin.php");
            include ("menu_admin.php");

            ?>

           
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>ÁREA ADMINISTRATIVA</h2> 
                       <?php 
                      // Verifica se existe uma sessão de login
                      if (isset($_SESSION["login"]))
                      {
                      // Atribui a sessão para uma variável
                      $usuarioLogado = $_SESSION["login"];

                      echo ' <h5>Bem vindo '.$usuarioLogado.'!</h5>';
                      }

                      else 
                      {
                         echo '<h5>Bem vindo corretor!</h5>';
                      }


                      ?>
        
                       
                    </div>

                   
                </div>              
                 <!-- /. ROW  -->
                  <hr />
<div class="container">
<div class="row">
     
      <a href="https://mercadocotacao.com/dolar-hoje/" id="r_USD" title="Cotação do Dólar Americano Hoje" name="mercado_cotacao">Dólar Hoje</a><script async src="https://mercadocotacao.com/money/mercadocotacao.js"></script>


<div align="100px">
       <!-- Widgets Produtos Cepea - www.cepea.esalq.com.br/br/widget.aspx -->
<script type="text/javascript" src="https://www.cepea.esalq.usp.br/br/widgetproduto.js.php?fonte=arial&tamanho=26&largura=1020px&corfundo=32cd32&cortexto=333333&corlinha=f2f2f2&id_indicador%5B%5D=23&id_indicador%5B%5D=24"></script>


                           
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
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
