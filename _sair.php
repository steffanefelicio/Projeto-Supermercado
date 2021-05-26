<?php
	//Criamos o arquivo para destruir sessions
	session_start();
	

	session_unset();//removemos as variáveis de session
	session_destroy();//Destruimos todos os objetos de session

	//Mandamos para a página de login
header("location:index.php");

?>