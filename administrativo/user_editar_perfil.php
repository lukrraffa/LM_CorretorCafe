<?php session_start();  ?>

<?php
if (!isset($_GET["id"])) {
    echo "Erro de ID!";
} else {
    $id_usuario = intval($_GET["id"]);
    if ($id_usuario == 0) {
        
        echo "Erro de ID!";
        
    } else {
        //Alteração de registro
        include("conecta.php");
        $usuario = RetornaUsuarioPorId($id_usuario);
        if ($usuario != null) {
            $nome = $usuario["nome"];
            $email = $usuario["email"];
            $dataNasc = $usuario["data_nasc"];
            $login = $usuario["login"];
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
                     <h2>Editar perfil</h2>   
                        
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="painel">
        <form action="user_salvar_usuario.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id_usuario; ?>">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label text-right" for="cNome">Nome</label>
                <div class="col-sm-8">
                    <input class="form-control"  type="text" name="txtNome" id="cNome" value="<?php echo $nome; ?>">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label text-right" for="cEmail">E-mail</label>
                <div class="col-sm-8">
                    <input class="form-control" type="email" name="txtEmail" id="cEmail" value="<?php echo $email; ?>" >
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label text-right" for="cDataNasc">Data de Nascimento</label>
                <div class="col-sm-8">
                    <input class="form-control" type="date" name="txtDataNasc" id="cDataNasc" value="<?php echo $dataNasc; ?>" >
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label text-right" for="cLogin"> Login </label>
                <div class="col-sm-8">
                    <input class="form-control" type="text" name="txtLogin" id="cLogin" value="<?php echo $login; ?>" >
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
