<?php
	//Linha padrão para resolver erro de conexao.
	error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
	
	$host= "localhost";
	$user= "id16880950_admin";
	$senha= "@EasyMarket1";
	$banco= "id16880950_db_mercado";

//mandamos conectar com a base
$conn = mysql_connect($host,$user,$senha) or die(mysql_error());

//mandamos selecionar a base de dados
mysql_select_db($banco) or die(mysql_error());

?>