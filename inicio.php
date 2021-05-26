<?php
    include("_conexao.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="sortcut icon" href="images/logo_menu.png" type="image/png" />;
	<link href="estilo.css" rel="stylesheet"><!--CSS-->
  	   
    <title>Página Inicial</title>
        
        <!-- Bootstrap core CSS -->
		<link href="Content/css/bootstrap.min.css" rel="stylesheet">
		<link href="Content/css/bootstrap-theme.min.css" rel="stylesheet">
  </head>
  <body>
	  <div class="principal">
		<div class="container">
            <?php include("_menu.php");?>
			<div class="saudacao">
				<h2>Bem vindo,</h2>
				<h3><?=$_SESSION["usuario"]?>!</h3>	  
			</div>
		</div>
	  </div>
  </body>
</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="Content/js/bootstrap.min.js"></script>