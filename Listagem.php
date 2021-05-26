<!DOCTYPE html>

<!-- Incluimos o arquivo de conexao-->
<?php include("_conexao.php");?>
<!--fim-->

<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="sortcut icon" href="images/logo_menu.png" type="image/png" />;
	<link href="estilo.css" rel="stylesheet"><!--CSS-->
   
    <title>Lista</title>

    <!-- Bootstrap core CSS -->
    <link href="Content/css/bootstrap.min.css" rel="stylesheet">
	<link href="Content/css/bootstrap-theme.min.css" rel="stylesheet">

  </head>
  <body>
	<div class="lista">
	<div class="container">
  
	<!-- Inserimos o include do menu -->
	<?php include("_menu.php");?>
  

	<h2>LISTA DE PRODUTOS</h2>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Produto</th>
					<th>Modelo</th>
					<th>Valor</th>
					<th>Editar</th>
					<th>Deletar</th>
				</tr>
			</thead>
			<tbody>
			
			<?php
				$sql="SELECT * FROM tb_produto";
				$registro=mysql_query($sql);
				$cont=mysql_num_rows($registro);
				
				//mandamos listar todos
				while($linha=mysql_fetch_array($registro)){
			?>
			
			<tr>
				<td><?=$linha["ID_PRODUTO"]?></td>
				<td><?=$linha["NM_PRODUTO"]?></td>
				<td><?=$linha["DES_PRODUTO"]?></td>
				<td><?=$linha["VLR_PRODUTO"]?></td>
			
				<td>
					<a href="Edit_Produtos.php?id=<?=$linha["ID_PRODUTO"]?>">
						<img src="images/editar.png"/>
					</a>
				</td>
					
				<td>
					<a href="deletar.php?id=<?=$linha["ID_PRODUTO"]?>" onclick="return confirm('Deseja deletar esse registro?');"><!--"?" = variável do URL-->
						<img src="images/delete.png"/>
					</a>					
				</td>
			</tr>
				
			<?php
				}
			?>
				
			
			</tbody>
			<tfoot>
				<tr>
					<td colspan="6">Total de Registros: <?php echo($cont)?></td>
				</tr>
			</tfoot>
		</table>
		
		<div class="rows">
			<div class="col-sm-12" style="text-align:right;padding-top:10px;">					
				<a href="inicio.php"><button type="button" class="btn btn-danger">Cancelar</button></a>
			</div>
		</div>
    </div> 
	</div>
  </body>
</html>

<!-- Inserimos os Links do Bootstrap e Jquery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="Content/js/bootstrap.min.js"></script><!--Source ou src = arquivo fonte-->

<!-- Fim! -->
