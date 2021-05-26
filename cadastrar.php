<?php
	include("_conexao.php");

	//criamos as variaveis que irao receber
	//os dados do formulario

	$nome=$_POST["nome"];
	$valor=$_POST["valor"];
	$descricao=$_POST["descricao"];



	//mandamos inserir os dados na tabela
	//usando o metodo mysql_query
	mysql_query("INSERT INTO tb_produto(NM_PRODUTO,VLR_PRODUTO,DES_PRODUTO)values('$nome',$valor,'$descricao')") or die(mysql_error());




	//mandamos direcionar  para a lista
	header("location:Listagem.php");

?>