<?php
	include("_conexao.php");
	//Pegamos a variável "id" (get)
	$codigo=$_GET["id"];

	//Mandamos selecionar dados do registro cujo o "id_produto" = $codigo
	$sql=mysql_query("SELECT * FROM tb_produto WHERE ID_PRODUTO=$codigo") or die(mysql_error());

	$dados=mysql_fetch_array($sql);

	//Criamos as variáveis para popular os campos od formulário 
	

?>


<!doctype html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="sortcut icon" href="images/logo_menu.png" type="image/png" />;
		<link href="estilo.css" rel="stylesheet"><!--CSS-->	
		
		<title>Edição de Produtos</title>
		
		<!-- Bootstrap core CSS -->
		<link href="content/css/bootstrap.min.css" rel="stylesheet">
		<link href="content/css/bootstrap-theme.min.css" rel="stylesheet">
	</head>

	<body>
		<div class="fundo">
		<div class="container">

		<!-- Inserimos o include do menu -->
				<?php include("_menu.php");?>

			
			<h2>Editar Produto</h2>
				
			
				<fieldset>
					<legend>Informe os dados do Produto: </legend>
					<form name="cadastro" id="cadastro" action="atualizar.php" method="post" onsubmit="return validar();">
					
					<div class="rows">
						<div class="col-sm-6">
							<label for="codigo">Código do produto: </label>
							<input type="text" name="codigo" id="codigo" class="form-control" readonly value="<?=$dados["ID_PRODUTO"]?>"/>
						</div>
						<div style="clear:both;"></div>
					</div>
					
						<div class="rows">
							<div class="col-sm-6">
								<label for="nome">Informe o Nome: </label>
								<input type="text" name="nome" id="nome" class="form-control" value="<?=$dados["NM_PRODUTO"]?>"/>
								
							</div>
								
							<div class="col-sm-6">
								<label for="valor">Valor: </label>
								<input type="text" name="valor" id="valor" class="form-control" value="<?=$dados["VLR_PRODUTO"]?>"/>
							</div>
							<div class="col-sm-12">
								<label for="descricao">Descrição: </label>
								<textarea name="descricao" id="descricao" class="form-control"><?=$dados["DES_PRODUTO"]?></textarea>
							</div>
						</div>
						<div class="rows">
							<div class="col-sm-12" style="text-align:right;padding-top:10px; float:left;">
								<input type="submit" name="atualizar" id="atualizar" value="Atualizar" class="btn btn-primary"/>
								<a href="Listagem.php"><button type="button" class="btn btn-danger">Cancelar</button></a>						
							</div>					
						</div>
					</form>
				</fieldset>
		</div>
		</div>
	</body>
</html>

<!-- Inserimos a CDN do Jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="content/js/bootstrap.min.js"></script>
<script src="content/js/bootbox.min.js"></script>

<script>
	//Iniciamos a biblioteca Jquery
	$(function()
	{
		//As ações acontecem aqui
	
	});
	function validar()
	{
		if ($("#nome").val()=="")
		{
			bootbox.alert("Informe o nome do produto!");
			$("#nome").focus();
			return false;
		}
		if($("#descricao").val()=="")
		{
			bootbox.alert("Informe a descrição!");
			$("#descricao").focus();
			return false;
		}
		if($("#valor").val()=="")
		{
			bootbox.alert("Informe o valor!");
			$("#valor").focus();
			return false;
		}
		//fora dos ifs
		return true;
		bootbox.alert("Sucesso!");
	}
</script>