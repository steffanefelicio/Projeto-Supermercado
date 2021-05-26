<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar navbar-nav">      
      <a href="inicio.php"><img src="images/logo_menu.png" alt="logo" width="44" height="44"></a>      
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastros <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="CadastrarProdutos.php">Produtos</a></li>                        
          </ul>
        </li>
      </ul>      
      <ul class="nav navbar-nav">        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Listas <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="Listagem.php">Produtos</a></li>                       
          </ul>
        </li>
		</ul>
      <ul class="nav navbar-nav nav navbar-right">
      	<li><a href="#"><?=$_SESSION["usuario"]?></a></li>
      	<li><a href="_sair.php">Sair...</a></li>
	  </ul>	  
    </div>
  </div>
</nav>