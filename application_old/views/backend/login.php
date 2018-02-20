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
    <link rel="shortcut icon" href="<?php echo base_url('assets/frontend/images/logo_desenho.png') ?>" type="image/x-icon" />

    <link href="<?php echo base_url('assets/frontend/bootstrap/css/bootstrap.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/frontend/bootstrap/css/bootstrap-responsive.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/frontend/css/login.css') ?>" rel="stylesheet"/>
  </head>

  <body>
	
    <div id="wrap">
		<div class="container text-center">
			<div class="page-header mt-40">
				<img src="<?php echo base_url('assets/frontend/images/logo.png') ?>"/>
			</div>
			<?php
                echo validation_errors('<div class="alert">','</div>');
                echo form_open(base_url('usuarios/login'));
            ?>
                <fieldset>
                    <div>
                        <input class="input-large" placeholder="Usuário" name="txt-user" type="text" autofocus>
                    </div>
                    <div>
                        <input class="input-large" placeholder="senha" name="txt-senha" type="password" value="">
                    </div>
                    <button class="btn btn-primary">Entrar</button>  	
                </fieldset> 
			<?php
                echo form_close();
            ?>
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

	<script src="<?php echo base_url('assets/frontend/js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/frontend/bootstrap/js/bootstrap.min.js') ?>"></script>

  </body>
</html>
