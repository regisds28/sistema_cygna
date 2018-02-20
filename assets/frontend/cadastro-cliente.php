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
                      <h2>Cadastro de cliente:</h2>
                      <h4>Identificador:</h4>
                        
                      <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="cadastro-agendamento.php">Dados pessoais</a></li>
                          <li><a data-toggle="tab" href="#menu1">Agendamentos</a></li>
                          <li><a data-toggle="tab" href="#menu2">Fichas clínicas</a></li>
                          <li><a data-toggle="tab" href="#menu3">Receituário</a></li>
                          <li><a data-toggle="tab" href="#menu3">Outros</a></li>
                      </ul>
                    
                      <div class="tab-content row-fluid">
                          <div id="home" class="tab-pane fade in active">
                              <div class="span3">
                                  <div>
                                      <img src="images/blank-avatar.png"/>                   
                                  </div> 
                                  <div class="controls controls-row mt-5">
                                      <button class="btn" type="submit">
                                          <i class="fa fa-folder"></i>
                                          Editar
                                      </button>
                                      <button class="btn" type="submit">
                                          <i class="fa fa-close"></i>
                                          Remover
                                      </button>
                                  </div>
                              </div>
                              <div class="span9">
                                  <form>
                                      <div class="controls">
                                          <label>Nome:</label>
                                          <input type="text" placeholder="Nome" value="" class="span12"/>
                                      </div> 
                                      <div class="controls controls-row">                                          
                                          <div class="span3 date inner-addon right-addon" id="datetimepicker1">
                                              <i class="fa fa-calendar"></i>
                                              <label>Data de nascimento:
                                                <input type="text" placeholder="Data Nasc." value="" class="span12" />
                                              </label>
                                          </div>
                                          <div class="span3">
                                              <label>CPF:
                                                <input type="text" placeholder="CPF" value="" class="span12" />
                                              </label>
                                          </div>
                                          <div class="span1">
                                              <label>Idade:
                                                <input type="text" placeholder="Idade" value="" class="span12" />
                                              </label>
                                          </div>
                                          <div class="span5">
                                              <label>Sexo:
                                                  <select class="span12">
                                                      <option> </option>
                                                      <option>Masculino</option>
                                                      <option>Feminino</option>
                                                  </select>                                                  
                                              </label>
                                          </div>
                                      </div> 
                                      <div class="controls">
                                          <label>Endereço:</label>
                                          <input type="text" value="" class="span12"/>
                                      </div>
                                      <div class="controls controls-row">
                                          <div class="span5">
                                              <label>Cidade:
                                                <input type="text" value="" class="span12"/>
                                              </label>
                                          </div>
                                          <div class="span2">
                                              <label>Estado:
                                                  <select class="span12">
                                                    <option value=""></option>
                                                    <option value="AC">AC</option>
                                                    <option value="AL">AL</option>
                                                    <option value="AM">AM</option>
                                                    <option value="AP">AP</option>
                                                    <option value="BA">BA</option>
                                                    <option value="CE">CE</option>
                                                    <option value="DF">DF</option>
                                                    <option value="ES">ES</option>
                                                    <option value="GO">GO</option>
                                                    <option value="MA">MA</option>
                                                    <option value="MG">MG</option>
                                                    <option value="MS">MS</option>
                                                    <option value="MT">MT</option>
                                                    <option value="PA">PA</option>
                                                    <option value="PB">PB</option>
                                                    <option value="PE">PE</option>
                                                    <option value="PI">PI</option>
                                                    <option value="PR">PR</option>
                                                    <option value="RJ">RJ</option>
                                                    <option value="RN">RN</option>
                                                    <option value="RO">RO</option>
                                                    <option value="RR">RR</option>
                                                    <option value="RS">RS</option>
                                                    <option value="SC">SC</option>
                                                    <option value="SE">SE</option>
                                                    <option value="SP">SP</option>
                                                    <option value="TO">TO</option>
                                                  </select>
                                              </label>
                                          </div>
                                          <div class="span5">
                                              <label>CEP:
                                                  <input type="text" value="" class="span12"/>
                                              </label>
                                          </div>
                                      </div>
                                      <div class="controls controls-row">
                                          <div class="span4">
                                              <label>Telefone Residencial:
                                                  <input type="text" value="" class="span12"/>
                                              </label>
                                          </div>
                                          <div class="span4">
                                              <label>Telefone Comercial:
                                                  <input type="text" value="" class="span12"/>
                                              </label>
                                          </div>
                                          <div class="span4">
                                              <label>Celular:
                                                  <input type="text" value="" class="span12"/>
                                              </label>
                                          </div>  
                                          
                                      </div>
                                      <div class="controls controls-row">
                                          <div class="span6">
                                              <label>Profissão:
                                                  <input type="text" value="" class="span12"/>
                                              </label>
                                          </div>
                                          <div class="span6">
                                              <label>Email:
                                                  <input type="text" value="" class="span12"/>
                                              </label>
                                          </div>
                                      </div>
                                      <div class="controls">
                                          <div class="span12">
                                              <label>Como conheceu a Cygna?
                                                  <select class="span12">
                                                      <option>Selecione</option>
                                                      <option>Amigos</option>
                                                      <option>Lord Perfumaria</option>
                                                      <option>Propaganda</option>
                                                      <option>Redes sociais</option>
                                                      <option>Site</option>
                                                      <option>Outros</option>
                                                  </select>                                                  
                                              </label>
                                          </div>
                                      </div>
                                      <div>                                          
                                	      <button class="span2 btn btn-primary" type="submit" style="float: right; margin: 10px 0 0 18px;">
                                              <i class="fa fa-save"></i>
                                              Salvar
                                          </button>                                          
                                          <button class="span2 btn btn-primary" type="submit" style="float: right; margin: 10px 0 0 18px;">
                                              <i class="fa fa-print"></i>
                                              Imprimir
                                          </button>
                                          <button class="span2 btn btn-default" type="reset" style="float: right; margin: 10px 0 0 0;">
                                              <i class="fa fa-clean"></i>
                                              Limpar
                                          </button>
								       </div>
                                  </form>
                              </div>
                      	  </div>
                      	  
                      </div>
                  </div>
               </div>
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