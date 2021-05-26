<html>
	<head>
		<link href="estilo.css" rel="stylesheet"><!--CSS-->
		<link href="Content/css/bootstrap.min.css" rel="stylesheet"><!--Link BootStrap-->
		<link rel="sortcut icon" href="images/logo_menu.png" type="image/png" />;
		<meta charset="utf-8"/>
	</head>

	<script href="Content/js/Jquery_Projeto.js"></script>

	<body class="main">
		<div class="login-screen"></div>
			<div class="login-center">
				<div class="container min-height" style="margin-top: 20px;">
					<div class="row">
						<div class="col-xs-4 col-md-offset-8">
							<div class="login" id="card">
								<div class="front signin_form"> 
									<p>Acesse sua conta</p>
									<form class="login-form" action="autenticar.php" method="post">
									 
										<?php
											if(isset($_GET["erro"])){
												include("_erro.php");
											}
										?>    
									 
										<div class="form-group">
											<div class="input-group">
												<input type="email" class="form-control" placeholder="Digite seu email..." required autofocus name="usuario" id="usuario"/>
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-user"></i>
												</span>
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<input type="password" class="form-control" placeholder="Digite sua senha..." required autofocus name="senha" id="senha"/>
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-lock"></i>
												</span>
											</div>
										</div>
										<div class="checkbox">
											<label><input type="checkbox">Lembre-me da proxima vez</label>
										</div>
									  
										<div class="form-group sign-btn">
											<input type="submit" class="btn" value="Acessar">
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>		
	</body>
</html>