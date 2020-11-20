<?php session_start();  ?>
<?php

echo "Login e senha inválidos! Aguarde enquanto é redirecionado para a página inicial!";

header("Refresh: 5;url=../paginaInicial/index.html");


?>