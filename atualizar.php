<?php
	include("_conexao.php");
	//Pegamos as variáveis do "form" via "post"
	$codigo=$_POST["codigo"];//POST vem de um formulário  /  GET vem de uma url
	$nome=$_POST["nome"];
	$descricao=$_POST["descricao"];
	$valor=$_POST["valor"];
	

	//Mandamos atualizar o registro onde o "id_produto" seja igual ao codigo
	mysql_query("UPDATE tb_produto SET NM_PRODUTO='$nome',DES_PRODUTO='$descricao',VLR_PRODUTO=$valor WHERE ID_PRODUTO=$codigo") or die(mysql_error());

	//Mandamos direcionar para a página de listagem
	
	$mensagem="Produto atualizado com Sucesso!";
	header("location:Edit_Produtos.php?sucesso=$mensagem&id=$codigo");
?>
