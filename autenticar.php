<?php

	//Iniciamos o objeto de "session"
	session_start();
	include("_conexao.php");

	//Criamos as variáveis para receber os dados digitados no formulário de login
	$usuario=$_POST["usuario"];
	$senha=$_POST["senha"];

	 //echo '<p>Seu email foi enviado com sucesso.</p> ' ;
	//echo $usuario;



	$sql="SELECT ID_USUARIO, NM_LOGIN FROM tb_usuario WHERE NM_LOGIN='$usuario' AND DES_SENHA='$senha'";

	$registro=mysql_query($sql);

	$cont=mysql_num_rows($registro);

	$dados=mysql_fetch_array($registro);

	//Se o usuario for localizado na base de dados, o método "mysql_num_rows" irá retornar uma linha
	if($cont>0){
		$_SESSION["idusuario"]=$dados["ID_USUARIO"];
		$_SESSION["usuario"]=$dados["NM_LOGIN"];
		
		session_commit();//Mandamos gravar 
		header("location:inicio.php");		
	}
	else{
		header("location:index.php");		
	}

?>