
            <?php
                foreach($dadosclientes as $dadocliente){

            ?>
            <div class="content-page equal-height">
                <div class="content">
                    <div class="container">
                        <form>
                            <h2><?php echo $dadocliente->nome_cliente?></h2>
                            <div class="botoes mt-25 mb-20">                                          
                                <button type="reset" onclick="history.go(-1)" class="btn btn-default">
                                                        <i class="fa fa-arrow-left"></i>
                                                        Voltar
                                                      </button>                                         
                                <!--<a href="<?php echo base_url('alterarclientes') ?>" class="btn btn-primary">
                                    <i class="fa fa-undo"></i>
                                    Alterar
                                </a>
                                <button class="btn btn-default" type="reset">
                                    <i class="fa fa-clean"></i>
                                    Limpar
                                </button>-->
                            </div>  

                            <ul class="nav nav-tabs">
                                <li class="active"><a href="<?php echo 
                                                    base_url('dadospessoais/' . 
                                                    $dadocliente->id_cliente . 
                                                    '/' . 
                                                    limpar($dadocliente->nome_cliente))?>">Dados pessoais</a></li>
                                <li><a href="<?php echo 
                                                    base_url('agendamentos/' . 
                                                    $dadocliente->id_cliente . 
                                                    '/' . 
                                                    limpar($dadocliente->nome_cliente))?>">Agendamentos</a></li>
                                <li><a href="<?php echo 
                                                    base_url('fichasclinicas/' . 
                                                    $dadocliente->id_cliente . 
                                                    '/' . 
                                                    limpar($dadocliente->nome_cliente))?>">Fichas clínicas</a></li>
                                <li class="disabled"><a href="#">Receituário</a></li>
                                <li class="disabled"><a href="#">Outros</a></li>
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
                                          <input type="text" value="<?php echo $dadocliente->nome_cliente ?>" class="span12"/>
                                        </div> 
                                        <div class="controls controls-row">                                          
                                          <div class="span3 date inner-addon right-addon" id="datetimepicker1">
                                              <label>Data de nascimento:
                                                <input type="text" value="<?php echo $dadocliente->dt_nascimento ?>" maxlength="10" class="span12" />
                                              </label>
                                          </div>
                                          <div class="span3">
                                              <label>CPF:
                                                <input type="text" value="<?php echo $dadocliente->cpf_cliente ?>" maxlength="14" class="span12" />
                                              </label>
                                          </div>
                                          <div class="span1">
                                              <label>Idade:
                                                <input type="text" value="<?php echo $dadocliente->idade ?>" maxlength="3" class="span12" />
                                              </label>
                                          </div>
                                          <div class="span5">
                                              <label>Sexo:
                                                  <select class="span12">
                                                      <option> <?php echo $dadocliente->descricao_sexo ?></option>
                                                      <option value="">-</option>
                                                      <option>Masculino</option>
                                                      <option>Feminino</option>
                                                  </select>                                                  
                                              </label>
                                          </div>
                                        </div> 
                                        <div class="controls">
                                          <label>Endereço:</label>
                                          <input type="text" value="<?php echo $dadocliente->endereco ?>" class="span12"/>
                                        </div>
                                        <div class="controls controls-row">
                                          <div class="span5">
                                              <label>Cidade:
                                                <input type="text" value="<?php echo $dadocliente->cidade ?>" class="span12"/>
                                              </label>
                                          </div>
                                          <div class="span2">
                                              <label>Estado:
                                                  <select class="span12">
                                                      <option value="<?php echo $dadocliente->id_estado ?>"><?php echo $dadocliente->estados?></option>
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
                                                  <input type="text" value="<?php echo $dadocliente->cep ?>" maxlength="9" class="span12"/>
                                              </label>
                                          </div>
                                        </div>
                                        <div class="controls controls-row">
                                          <div class="span4">
                                              <label>Telefone Residencial:
                                                  <input type="text" value="<?php echo $dadocliente->telefoneres ?>" class="span12"/>
                                              </label>
                                          </div>
                                          <div class="span4">
                                              <label>Telefone Comercial:
                                                  <input type="text" value="<?php echo $dadocliente->telefonecom ?>" class="span12"/>
                                              </label>
                                          </div>
                                          <div class="span4">
                                              <label>Celular:
                                                  <input type="text" value="<?php echo $dadocliente->celular ?>" class="span12"/>
                                              </label>
                                          </div>  

                                        </div>
                                        <div class="controls controls-row">
                                          <div class="span6">
                                              <label>Profissão:
                                                  <input type="text" value="<?php echo $dadocliente->profissao ?>" class="span12"/>
                                              </label>
                                          </div>
                                          <div class="span6">
                                              <label>Email:
                                                  <input type="text" value="<?php echo $dadocliente->email ?>" class="span12"/>
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
                        </form>
                    </div><!--end container-->
                </div><!--end content-->
            </div><!--end content-page-->
            <?php
                }
            ?>

            