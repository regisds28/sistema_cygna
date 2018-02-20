
            
            <div class="content-page equal-height">
                <div class="content">
                    <div class="container">
                            
                            <?php
                            
                                echo validation_errors('<div class="alert alert-danger">','</div>');
                                echo form_open(base_url('alterarclientes/salvar_alteracoes'));
                                foreach($alterarclientes as $alterarcliente){

                            ?>
                            
                            <h2><?php echo $alterarcliente->nome_cliente?></h2>
                            <div class="botoes mt-25 mb-20">                                          
                                <button class="btn btn-primary">
                                    <i class="fa fa-save"></i>
                                    Salvar alterações
                                </button> 
                            </div>  

                            <ul class="nav nav-tabs">
                                <li class="active"><a href="<?php echo 
                                                    base_url('dadospessoais/' . 
                                                    $alterarcliente->id_cliente . 
                                                    '/' . 
                                                    limpar($alterarcliente->nome_cliente))?>">Dados pessoais</a></li>
                                <li class="disabled"><a href="<?php echo 
                                                    base_url('agendamentos/' . 
                                                    $alterarcliente->id_cliente . 
                                                    '/' . 
                                                    limpar($alterarcliente->nome_cliente))?>">Agendamentos</a></li>
                                <li><a href="<?php echo 
                                                    base_url('fichasclinicas/' . 
                                                    $alterarcliente->id_cliente . 
                                                    '/' . 
                                                    limpar($alterarcliente->nome_cliente))?>">Fichas clínicas</a></li>
                                <li><a href="<?php echo 
                                                    base_url('receituario/' . 
                                                    $alterarcliente->id_cliente . 
                                                    '/' . 
                                                    limpar($alterarocliente->nome_cliente))?>">Receituário</a></li>
                                <li><a href="<?php echo 
                                                    base_url('outros/' . 
                                                    $alterarcliente->id_cliente . 
                                                    '/' . 
                                                    limpar($alterarcliente->nome_cliente))?>">Outros</a></li>
                            </ul>

                            <div class="tab-content row-fluid">
                                <div id="home" class="tab-pane fade in active">
                                    <!--<div class="span3">
                                      <div>
                                          <img src=""/>                   
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
                                    </div>-->
                                    <div class="span12">
                                        <div class="controls">
                                          <label>Nome:</label>
                                          <input type="text" value="<?php echo $alterarcliente->nome_cliente ?>" class="span12"/>
                                        </div> 
                                        <div class="controls controls-row">                                          
                                          <div class="span3 date inner-addon right-addon" id="datetimepicker1">
                                              <i class="fa fa-calendar"></i>
                                              <label>Data de nascimento:
                                                <input type="text" value="<?php echo $alterarcliente->data ?>" class="span12" />
                                              </label>
                                          </div>
                                          <div class="span3">
                                              <label>CPF:
                                                <input type="text" value="<?php echo $alterarcliente->cpf_cliente ?>" class="span12" />
                                              </label>
                                          </div>
                                          <div class="span1">
                                              <label>Idade:
                                                <input type="text" value="<?php echo $alterarcliente->idade ?>" class="span12" />
                                              </label>
                                          </div>
                                          <div class="span5">
                                              <label>Sexo:
                                                  <select class="span12">
                                                      <option> <?php echo $alterarcliente->descricao_sexo ?></option>
                                                      <option value="">-</option>
                                                      <option>Masculino</option>
                                                      <option>Feminino</option>
                                                  </select>                                                  
                                              </label>
                                          </div>
                                        </div> 
                                        <div class="controls">
                                          <label>Endereço:</label>
                                          <input type="text" value="<?php echo $alterarcliente->endereco ?>" class="span12"/>
                                        </div>
                                        <div class="controls controls-row">
                                          <div class="span5">
                                              <label>Cidade:
                                                <input type="text" value="<?php echo $alterarcliente->cidade ?>" class="span12"/>
                                              </label>
                                          </div>
                                          <div class="span2">
                                              <label>Estado:
                                                  <select class="span12">
                                                      <option value="<?php echo $alterarcliente->id_estado ?>"><?php echo $alterarcliente->estados?></option>
                                                      <option value="">-</option>
                                                    <?php
                                                        foreach($listaestados as $listaestado){
                                                    ?>
                                                        <option value="<?php echo $listaestado->id_estado ?>"><?php echo $listaestado->estados ?></option>
                                                    <?php
                                                        }
                                                    ?>                                                    
                                                  </select>
                                              </label>
                                          </div>
                                          <div class="span5">
                                              <label>CEP:
                                                  <input type="text" value="<?php echo $alterarcliente->cep ?>" class="span12"/>
                                              </label>
                                          </div>
                                        </div>
                                        <div class="controls controls-row">
                                          <div class="span4">
                                              <label>Telefone Residencial:
                                                  <input type="text" value="<?php echo $alterarcliente->telefoneres ?>" class="span12"/>
                                              </label>
                                          </div>
                                          <div class="span4">
                                              <label>Telefone Comercial:
                                                  <input type="text" value="<?php echo $alterarcliente->telefonecom ?>" class="span12"/>
                                              </label>
                                          </div>
                                          <div class="span4">
                                              <label>Celular:
                                                  <input type="text" value="<?php echo $alterarcliente->celular ?>" class="span12"/>
                                              </label>
                                          </div>  

                                        </div>
                                        <div class="controls controls-row">
                                          <div class="span6">
                                              <label>Profissão:
                                                  <input type="text" value="<?php echo $alterarcliente->profissao ?>" class="span12"/>
                                              </label>
                                          </div>
                                          <div class="span6">
                                              <label>Email:
                                                  <input type="text" value="<?php echo $alterarcliente->email ?>" class="span12"/>
                                              </label>
                                          </div>
                                        </div>
                                        <!--<div class="controls">
                                          <h4>Como conheceu a Cygna?</h4>
                                          <label class="checkbox inline">
                                              <input type="checkbox" id="inlineCheckbox1" value="option1"> Amigos
                                          </label>
                                          <label class="checkbox inline">
                                              <input type="checkbox" id="inlineCheckbox2" value="option2"> Lord Perfumaria
                                          </label>
                                          <label class="checkbox inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="option3"> Propaganda
                                          </label>
                                          <label class="checkbox inline">
                                              <input type="checkbox" id="inlineCheckbox1" value="option1"> Redes sociais
                                          </label>
                                          <label class="checkbox inline">
                                              <input type="checkbox" id="inlineCheckbox2" value="option2"> Site
                                          </label>
                                          <label class="checkbox inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="option3"> Outros
                                          </label>
                                        </div>-->
                                    </div>
                                </div>
                            </div><!--end tab-content-->
                        <?php
                                }
                            echo form_close();
                        ?>
                    </div><!--end container-->
                </div><!--end content-->
            </div><!--end content-page-->

            