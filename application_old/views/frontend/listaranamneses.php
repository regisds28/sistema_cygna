
            
            <div class="content-page equal-height">
                <div class="content">
                    <div class="container">
                            <?php
                                foreach($dadosclientes as $dadocliente){
                            ?>
                            <h2><?php echo $dadocliente->nome_cliente?></h2>
                            
                            <div class="botoes mt-25 mb-20">                                          
                                                                         
                                <a href="<?php echo base_url('inseriranamnese/') . 
                                                    $dadocliente->id_cliente . 
                                                    '/' . 
                                                    limpar($dadocliente->nome_cliente) ?>" class="btn btn-primary">
                                    <i class="fa fa-edit"></i>
                                    Preencher nova ficha
                                </a>
                                <button type="reset" onclick="history.go(-1)" class="btn btn-default">
                                    <i class="fa fa-arrow-left"></i>
                                    Voltar
                                </button>
                                <!--<button class="btn btn-default" type="reset">
                                    <i class="fa fa-clean"></i>
                                    Limpar
                                </button>-->
                            </div>  

                            <ul class="nav nav-tabs">
                                <li><a href="<?php echo 
                                                    base_url('dadosclientes/' . 
                                                    $dadocliente->id_cliente . 
                                                    '/' . 
                                                    limpar($dadocliente->nome_cliente))?>">Dados pessoais</a></li>
                                <li><a href="<?php echo 
                                                    base_url('agendamentos/' . 
                                                    $dadocliente->id_cliente . 
                                                    '/' . 
                                                    limpar($dadocliente->nome_cliente))?>">Agendamentos</a></li>
                                <li class="active"><a href="<?php echo 
                                                    base_url('fichasclinicas/' . 
                                                    $dadocliente->id_cliente . 
                                                    '/' . 
                                                    limpar($dadocliente->nome_cliente))?>">Fichas clínicas</a></li>
                                <li class="disabled"><a href="#">Receituário</a></li>
                                <li class="disabled"><a href="#">Outros</a></li>
                                
                            </ul>
                            <?php
                                }
                            ?>
                            <div class="tab-content row-fluid">
                                <div id="home" class="tab-pane fade in active">
                                    
                                    <div class="span12">
                                        <h2>Fichas de anamnese</h2>
                                        
                        
                                          <div class="tab-pane fade in active">
                                              <div class="row mt-25 ml-1">
                                                <div>
                                                    <div class="panel-box">
                                                        <?php  
                                                            
                                                            $this->table->set_heading("Id","Data de inclusão","Incluído por","Opções");
                                                            foreach($listaranamneses as $listaranamnese){
                                                                $id = $listaranamnese->id_ficha_anamnese;
                                                                $data = $listaranamnese->data;
                                                                $nome_usuario = $listaranamnese->nome_profissional;
                                                                foreach($dadosclientes as $dadocliente){
                                                                    $opcoes = anchor(base_url('visualizaranamnese/'. $dadocliente->id_cliente.'/'. limpar($dadocliente->nome_cliente)).'/'. $listaranamnese->id_ficha_anamnese,'<i data-toggle="tooltip" title="visualizar" class="fa fa-eye"></i>');
                                                                }
                                                                $this->table->add_row($id,$data,$nome_usuario,$opcoes);
                                                            }
                                                            
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
                                </div>
                            </div><!--end tab-content-->
                    </div><!--end container-->
                </div><!--end content-->
            </div><!--end content-page-->
            