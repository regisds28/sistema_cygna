<!DOCTYPE html>
<html>
    <head>
        <title>Cygna Beauty Clinic</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <link href="css/metisMenu.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
		<link rel="shortcut icon" href="images/logo_desenho.png" type="image/x-icon" />
        <script src="js/modernizr.js"></script>
    </head>
    <body class="fixed-left">
        <div id="wrapper">
            <div class="topbar">
                <div class="topbar-left">
                    <div class="text-center logo">
                        <a href="index.php" class="logo"><img src="images/logo_topo.png" alt=""></a>
                    </div>
                </div>
                <div class="pull-left menu-toggle">
                    <i class="fa fa-bars"></i>
                </div>
                <ul class="nav navbar-nav  top-right-nav hidden-xs">
                    <li>
                        <span id="para2"></span>
                        <span id="para3"></span>
                        <span id="para1"></span>
                    </li>
                    <li class="dropdown profile-link hidden-xs">
                        <div class="clearfix">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.png" alt="" class="pull-left">
                                <span>Régis Paiva <br><em>Webmaster</em></span>                            
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Conta</a></li>
                                <li><a href="#">Editar</a></li>
                                <li><a href="login.php">Sair</a></li>
                            </ul>
                        </div>                        
                    </li>
                    <li class=" hidden-xs"><a href="#" id="sidebar-toggle">Ajuda</i></a></li>
                </ul>
            </div>    
            <div class="side-menu left" id="side-menu">
                <ul class="metismenu clearfix" id="menu">
                    <li class="active">
                    	<a href="lista-cliente.php">
                        	<i class="fa fa-user"></i>  
                            <span>Clientes</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        	<i class="fa fa-heartbeat"></i> 
                            <span>Laudos</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        	<i class="fa fa-calendar"></i> 
                            <span>Agendamentos</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        	<i class="fa fa-edit"></i> 
                            <span>Cadastros</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="#">Profissionais</a></li>
                            <li><a href="#">Serviços</a></li>
                            <li><a href="#">Convênios</a></li>
                            <li><a href="#">Fornecedores</a></li>
                            <li><a href="#">Usuários</a></li>
                            <li><a href="#">Perfis</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                        	<i class="fa fa-pie-chart"></i> 
                            <span>Relatórios</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="#">Clientes</a></li>
                            <li><a href="#">Agendamentos</a></li>
                            <li><a href="#">Mala direta</a></li>
                        </ul>
                    </li>
                </ul>
            </div>	
            
            <div class="content-page  equal-height">
                <div class="content">
                    <div class="container">
                    	<h2>Buscar cliente</h2>
                        <div class="row">
                            <form action="lista-cliente.php" method="get">
								<div class="span6 controls">
                                	<div class="inner-addon right-addon">
                                    	<input type="image" class="fa" src="images/search-16.png" />
                                        <input type="text" name="cliente" class="span6 input-large" />
                                	</div>
                                </div>
                                <div class="span5 controls controls-row">
                                	<button class="span2 btn btn-large btn-primary" type="submit">
                                        <i class="fa fa-plus"></i>
                                        Cadastrar novo
                                    </button>
								</div>
							</form>
                        </div>
                        <div class="row mt-25 ml-25">
                            <div>
                                <div class="panel-box">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>id</th>
                                                    <th>Nome</th>
                                                    <th>Telefone</th>
                                                    <th>Data de nascimento</th>
                                                   
                                                    <th>Opções</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                   
                                                    <td>
														<a href="cadastro-cliente.php">
                                                            <i data-toggle="tooltip" title="consultar / editar" class="fa fa-edit"></i>
                                                        </a>
														<a href="cadastro-agendamento.php"><i data-toggle="tooltip" title="agendamento" class="fa fa-calendar"></i></a>
														<a href="#"><i data-toggle="tooltip" title="ficha clínica" class="fa fa-heartbeat"></i></a>
														<a href="#"><i data-toggle="tooltip" title="receituário" class="fa fa-medkit"></i></a>
														<a href="#"><i data-toggle="tooltip" title="histórico" class="fa fa-pie-chart"></i></a>
													</td>
                                                </tr>                                          
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						<div class="pagination pagination-centered">
						  	<ul>
								<li class="disabled"><a href="#">Prev</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#">Next</a></li>
						  	</ul>
						</div>

                    </div><!--content-->               
                </div><!--content page-->
            </div><!--end wrapper-->
        </div>
        <div class="sidebar">
            <div class='nicescroll'>
                <h4>Quer ajuda?</h4>
                <p>
                    Envie uma mensagem com sua dúvida. 
                </p>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nome">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Assunto">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows='5' placeholder="Mensagem"></textarea>
                    </div>
                    <div class="text-right">
                        <button type="button" class=" btn btn-theme btn-lg">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
       
        <!-- Plugins  -->
        <script src="js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/jquery.slimscroll.js"></script>
        <script src="js/metisMenu.js"></script>
          
        <script src="js/moment.js"></script> 
        <script src="js/core.js"></script>
        <script src="js/mediaquery.js"></script>
        <script src="js/equalize.js"></script>
        <script src="js/bootstrap-datetimepicker.min.js"></script>
        <script src="js/app.js"></script>

    </body>
</html>