<?php
	include("_conexao.php");
	//Pegamos a variável do "id" via "get"
	$codigo=$_GET["id"];

	//Mandamos excluir o registro onde o "id_produto" seja igual ao id do get
	mysql_query("DELETE FROM tb_produto WHERE ID_PRODUTO=$codigo") or die(mysql_error());

	//Mandamos direcionar para a página de listagem
	header("location:Listagem.php");
?>