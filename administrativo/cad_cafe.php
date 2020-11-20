<?php session_start();?>

<?php
if (!isset($_GET["id"])) {
    $id_cafe = "";
} else {
    $id_cafe = intval($_GET["id"]);
    if ($id_cafe == 0) {
        //Novo registro
        $id_cafe = "";
        $tipoCafe = "";
        $classificacao = "";
        $precoSaca = "";
        $observacao = "";
    } else {
        //Alteração de registro
        include("conecta.php");
        $cafe = RetornaCafePorId($id_cafe);
        if ($cafe != null) {
            $tipoCafe = $cafe["tipo_cafe"];
            $classificacao = $cafe["classificacao"];
            $precoSaca = $cafe["preco_saca"];
            $observacao = $cafe["observacao"];
                        
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
            include ("topo_admin.php");
            include ("menu_admin.php");

            ?>
            
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Cadastro de café</h2>   
                        
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="painel">
        <form action="salvar_cafe.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id_cafe; ?>">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label text-right" for="cTipoCafe">Tipo de café</label>
                <div class="col-sm-8">
                    <input class="form-control"  type="text" name="txtTipoCafe" id="cTipoCafe" placeholder="Tipo de café" value="<?php echo $tipoCafe; ?>">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label text-right" for="cClassificacao">Classificação</label>
                <div class="col-sm-8">
                    <input class="form-control" type="text" name="txtClassificacao" id="cClassificacao" placeholder="Classificação" value="<?php echo $classificacao; ?>" >
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label text-right" for="cPrecoSaca">Preço da saca</label>
                <div class="col-sm-8">
                    <input class="form-control" type="float" name="txtPrecoSaca" id="cPrecoSaca" placeholder="Preço da saca em dóllar" value="<?php echo $precoSaca; ?>" >
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label text-right" for="cObservacao">Observação</label>
                <div class="col-sm-8">
                    <input class="form-control" type="text" name="txtObservacao" id="cObservacao" placeholder="Observação" value="<?php echo $observacao; ?>" >
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
