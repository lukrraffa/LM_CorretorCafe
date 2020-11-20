<?php session_start();  ?>
<?php 
	// Verifica se existe a sessao login
	if (isset($_SESSION["login"])){
		// Remove a sessão login
		session_destroy();
		
		// Redirecionar para a página de login
		header("Location:../paginaInicial/index.html");
	}
	else header("Location:../paginaInicial/index.html");
 ?>