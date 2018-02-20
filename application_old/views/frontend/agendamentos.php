
            
            <div class="content-page equal-height">
                <div class="content">
                    <div class="container">                       
                            <?php                            
                                
                                foreach($agendamentos as $agendamento){
                                    if(!empty($agendamento)){
                            ?>
                            <h2><?php echo $agendamento->nome_cliente?></h2>
                            
                            <div class="botoes mt-25 mb-20">
                                <a href="<?php echo 
                                                    base_url('inserir_agendamento/' . 
                                                    $agendamento->id_cliente . 
                                                    '/' . 
                                                    limpar($agendamento->nome_cliente))?>" class="btn btn-primary">
                                    <i class="fa fa-calendar"></i>   
                                    Novo agendamento                                     
                                </a>
                            </div>  

                            <ul class="nav nav-tabs">
                                <li><a href="<?php echo 
                                                    base_url('dadosclientes/' . 
                                                    $agendamento->id_cliente . 
                                                    '/' . 
                                                    limpar($agendamento->nome_cliente))?>">Dados pessoais</a></li>
                                <li class="active"><a href="#">Agendamentos</a></li>
                                <li><a href="#">Fichas clínicas</a></li>
                                <li><a href="#">Receituário</a></li>
                                <li><a href="#">Outros</a></li>
                            </ul>   
                            <div class="tab-content row-fluid">
                        
                                 <div id="menu2" class="tab-pane fade in active">
                                    <div class="row mt-25 ml-25">
                                        <div>
                                            <div class="panel-box">
                                                    <?php
                                                            
                                                        $this->table->set_heading("Data", "Situação","Profissional", "Especialidade","Opções");  

                                                        $data = $agendamento->data;
                                                        $situacao = $agendamento->situacao;
                                                        $profissional = $agendamento->profissional;
                                                        $especialidade = $agendamento->descricao_especialidade;
                                                        $opcoes = '<a data-toggle="modal" data-target="#myModal" href="#">
                                                                       <i data-toggle="tooltip" title="consultar / editar" class="fa fa-edit"></i>
                                                                   </a>
                                                                   <a href="#">
                                                                       <i data-toggle="tooltip" title="excluir" class="fa fa-trash"></i>
                                                                   </a>';

                                                        $this->table->add_row($data,$situacao,$profissional,$especialidade, $opcoes);

                                                        $this->table->set_template(array(
                                                           'table_open' => '<table class="table table-striped">' 
                                                        ));
                                                        echo $this->table->generate();  
                                                                                                                   
                                                    ?>                                                    
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                            <?php
                                    }
                                }
                                foreach($dadosclientes as $dadocliente){ 
                                     if(empty($agendamentos)){  
                            ?>
                        
                                    <h2><?php echo $dadocliente->nome_cliente?></h2>
                            
                            <!--<div class="mt-25 mb-20">
                                <a href="<?php echo 
                                                    base_url('inserir_agendamento/' . 
                                                    $dadocliente->id_cliente . 
                                                    '/' . 
                                                    limpar($dadocliente->nome_cliente))?>" class="btn btn-primary">
                                    <i class="fa fa-calendar"></i>   
                                    Novo agendamento                                     
                                </a>
                            </div>  -->

                            <ul class="nav nav-tabs">
                                <li><a href="<?php echo 
                                                    base_url('dadosclientes/' . 
                                                    $dadocliente->id_cliente . 
                                                    '/' . 
                                                    limpar($dadocliente->nome_cliente))?>">Dados pessoais</a></li>
                                <li class="active"><a href="#">Agendamentos</a></li>
                                <li><a href="<?php echo 
                                                    base_url('fichasclinicas/' . 
                                                    $dadocliente->id_cliente . 
                                                    '/' . 
                                                    limpar($dadocliente->nome_cliente))?>">Fichas clínicas</a></li>
                                <li class="disabled"><a href="#">Receituário</a></li>
                                <li class="disabled"><a href="#">Outros</a></li>
                            </ul>   
                            <div class="tab-content row-fluid">
                        
                                 <div id="menu2" class="tab-pane fade in active">
                                    <div class="row mt-25 ml-25">
                                        <div>
                                            <div class="panel-box">
                                                <p>Não há agendamentos</p>
                                            </div>
                                        </div>
                                     </div>
                                </div>
                            </div>
                            <?php                                        
                                    }
                                }
                            ?>
                                                                   
                        </div><!--end container-->
                    </div><!--end content-->
                </div><!--end content-page-->