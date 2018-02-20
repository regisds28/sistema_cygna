<?php
	include_once 'head.php';
	include_once 'topo.php';
	include_once 'menu.php';
    include_once 'conexao/conexao.php';

    if (isset($_GET["clienteID"])){
        $id_cliente = $_GET["clienteID"];
    }else{
        Header("Location: lista-cliente.php");
    }

    //CONSULTA AGENDAMENTO

    $agenda  = "SELECT data_agendamento, situacao, profissional, especialidade ";
    $agenda .= "FROM clientes c ";
    $agenda .= "INNER JOIN agendamento a ";
    $agenda .= "ON c.{$id_cliente} = a.{$id_cliente} ";

    $lista_agendamento = mysqli_query($conecta, $agenda);
    if(!$lista_agendamento) {
        die("Falha na consulta ao banco");   
    };

    //testar erro
    if(!$lista_agendamento){
        die("Falha no banco de dados.");
    }else{
        $dados_agenda = mysqli_fetch_assoc($lista_agendamento);
        $data_agendamento   =  $dados_agenda["data_agendamento"];
        $situacao           =  $dados_agenda["situacao"];
        $profissional       =  $dados_agenda["profissional"];
        $especialidade      =  $dados_agenda["especialidade"];
    }
    
?>
            

            <div class="content-page  equal-height">
                <div class="content">
                    <div class="container">
                      <h2>Cadastro de cliente: <?php echo $nome_cliente; ?></h2>
                      <h4>Identificador: <?php echo $id_cliente; ?></h4>
                        <?php
                            while($linha = mysqli_fetch_assoc($lista_clientes)) {
                        ?>
                      <ul class="nav nav-tabs">
                          <li><a data-toggle="tab" href="cadastro-cliente.php?clienteID=<?php echo $linha['id_cliente']?>">Dados pessoais</a></li>
                          <li class="active"><a data-toggle="tab">Agendamentos</a></li>
                          <li><a data-toggle="tab" href="#menu2">Fichas clínicas</a></li>
                          <li><a data-toggle="tab" href="#menu3">Receituário</a></li>
                          <li><a data-toggle="tab" href="#menu3">Outros</a></li>
                      </ul>
                    
                      <div class="tab-content row-fluid">
                        
                      	  <div id="menu1" class="tab-pane fade">
                              <div class="row mt-25 ml-25">
                                <div>
                                    <div class="panel-box">

                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Data</th>
                                                        <th>Situação</th>
                                                        <th>Profissional</th>
                                                        <th>Especialidade</th>

                                                        <th>Opções</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>17/12/2017</td>
                                                        <td>Em andamento</td>
                                                        <td>Drauzio Varela</td>
                                                        <td>Nutrição</td>

                                                        <td>
                                                            <a href="#"><i data-toggle="tooltip" title="consultar / editar" class="fa fa-edit"></i></a>                                                            
                                                            <a href="#"><i data-toggle="tooltip" title="histórico" class="fa fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>19/12/2017</td>
                                                        <td>Em Andamento</td>
                                                        <td>Marcia</td>
                                                        <td>Avaliação</td>

                                                        <td>
                                                            <a href="#"><i data-toggle="tooltip" title="consultar / editar" class="fa fa-edit"></i></a>                                                            
                                                            <a href="#"><i data-toggle="tooltip" title="histórico" class="fa fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                            
                                        </div>
                                    </div>
                                    <a class="span2 btn btn-primary" href="#dialog" name="modal" style="float: right; margin: 10px 0 0 18px;">
                                        Agendar
                                        <i class="fa fa-calendar"></i>                                        
                                    </a> 
                                    
                                    <div id="boxes">

                                        <!-- #personalize sua janela modal aqui -->

                                        <div id="dialog" class="window row-fluid">                                            
                                            <h2>Agendamento</h2>
                                            <h2>Cliente: Régis Paiva</h2>
                                            <!-- Botão para fechar a janela tem class="close" -->
                                            <a href="#" class="close">X</a>
                                            
                                        </div>

                                        <!-- Não remova o div#mask, pois ele é necessário para preencher toda a janela -->
                                        <div id="mask"></div>
                                    </div>
                                </div>
                             </div>
                          </div>
                      </div>
                        <?php
                            }
                        ?>
                  </div>
               </div> 
            </div><!--end wrapper-->
<?php
	include 'sidebar.php';
	include 'footer.php';
?>