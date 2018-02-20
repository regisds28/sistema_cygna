<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="pragma" content="no-cache">
	<meta name="copyright" content="© 2017 RegisDS" />
    <title> :: Cygna Beauty Clinic :: </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="portuguese" />
    <link rel="shortcut icon" href="images/logo_desenho.png" type="image/x-icon" />

    <link href="css/bootstrap.css" rel="stylesheet"/>
    <link href="css/bootstrap-responsive.css" rel="stylesheet"/>
    <link href="css/login.css" rel="stylesheet"/>
  </head>

  <body>
	
    <div id="wrap">
		<div class="container text-center">
			<div class="page-header mt-40">
				<img src="images/logo.png"/>
			</div>
			<form action="login.php" method="post">
				<div>
					<input type="text" name="usuario" placeholder="Usuário" autocomplete="off" class="input-large"/>
				</div>
				<div>
					<input type="password" name="senha" placeholder="Senha" class="input-large"/>
				</div>
				<button type="submit" class="btn btn-primary">Entrar</button>  	
                 
			</form>
			<div class="row">
				<p>Esqueceu a senha&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Solicitar acesso</p>
				<p class="versao">v.01.01</p>
			</div>
		</div>
		<div id="push"></div>
    </div>
	<div id="footer" class="text-center">
		<div class="container">
			<p class="muted credit">Cygna Beauty Clinic - &copy; 2017 Todos os Direitos Reservados</p>
		</div>
    </div>

	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
