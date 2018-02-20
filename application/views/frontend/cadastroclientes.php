            <div class="content-page  equal-height">
                
                            <div class="content">
                                <div class="container">
                                    <?php
                                        echo validation_errors('<div class="alert alert-danger">','</div>');
                                        echo form_open(base_url('cadastroclientes/inserir'));
                                    ?>

                                      <div class="tab-content row-fluid">
                                          <div id="home" class="tab-pane fade in active">
                                              
                                              <!--<div class="span3">
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
                                              </div>-->
                                              <div class="span12">
                                                  <h2><?php echo $titulo ?></h2>
                                                  
                                                  <div class="botoes mt-25 mb-20 text-left">
                                                      <button type="submit" class="btn btn-primary">
                                                        <i class="fa fa-save"></i>
                                                        Salvar
                                                      </button>
                                                      <button type="reset" onclick="history.go(-1)" class="btn btn-default">
                                                          <i class="fa fa-arrow-left"></i>
                                                          Voltar
                                                      </button>
                                                      <button type="reset" class="btn btn-default">
                                                          <i class="fa fa-clean"></i>
                                                          Limpar
                                                      </button>
                                                  </div> 
                                                  <div class="controls">
                                                      <label for="txt-nome-cliente">Nome:</label>
                                                      <input type="text" name="txt-nome-cliente" id="txt-nome-cliente" value="<?php echo set_value('txt-nome-cliente')?>" class="span12"/>
                                                  </div> 
                                                  <div class="controls controls-row">                                          
                                                      <div class="span3">
                                                          <label for="txt-dt-nascimento">Data de nascimento:
                                                            <input type="text" name="txt-dt-nascimento" id="txt-dt-nascimento" value="<?php echo set_value('txt-dt-nascimento')?>" class="span12 txt-data" maxlength="10"/>
                                                          </label>
                                                      </div>
                                                      <div class="span3">
                                                          <label for="txt-cpf-cliente">CPF:
                                                            <input type="text" name="txt-cpf-cliente" id="txt-cpf-cliente" value="<?php echo set_value('txt-cpf-cliente')?>" class="span12 txt-cpf" maxlength="14"/>
                                                          </label>
                                                      </div>
                                                      <div class="span1">
                                                          <label for="txt-idade">Idade:
                                                            <input type="text" name="txt-idade" id="txt-idade" value="<?php echo set_value('txt-idade')?>" class="span12" maxlength="3"/>
                                                          </label>
                                                      </div>
                                                      <div class="span5">
                                                          <label for="txt-sexo">Sexo:
                                                              <select name="txt-sexo" id="txt-sexo" class="span12">
                                                                  <option> </option>
                                                                  <option value="1">Masculino</option>
                                                                  <option value="2">Feminino</option>
                                                              </select>                                                  
                                                          </label>
                                                      </div>
                                                  </div> 
                                                  <div class="controls">
                                                      <label for="txt-endereco">Endereço:</label>
                                                      <input type="text" name="txt-endereco" id="txt-endereco" value="<?php echo set_value('txt-endereco')?>" class="span12"/>
                                                  </div>
                                                  <div class="controls controls-row">
                                                      <div class="span5">
                                                          <label for="txt-cidade">Cidade:
                                                            <input type="text" name="txt-cidade" id="txt-cidade" value="<?php echo set_value('txt-cidade')?>" class="span12"/>
                                                          </label>
                                                      </div>
                                                      <div class="span2">
                                                          <label for="txt-estado">Estado:
                                                              <select class="span12" name="txt-estado" id="txt-estado" value="<?php echo set_value('txt-estado')?>">
">
                                                                  <option value=""></option>
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
                                                          <label for="txt-cep">CEP:
                                                              <input type="text" name="txt-cep" id="txt-cep" value="<?php echo set_value('txt-cep')?>" class="span12 txt-cep" maxlength="9"/>
                                                          </label>
                                                      </div>
                                                  </div>
                                                  <div class="controls controls-row">
                                                      <div class="span4">
                                                          <label for="txt-telefone-res">Telefone Residencial:
                                                              <input type="text" name="txt-telefone-res" id="txt-telefone-res" value="<?php echo set_value('txt-telefone-res')?>" class="span12 txt-telefone"/>
                                                          </label>
                                                      </div>
                                                      <div class="span4">
                                                          <label for="txt-telefone-com">Telefone Comercial:
                                                              <input type="text" name="txt-telefone-com" id="txt-telefone-com" value="<?php echo set_value('txt-telefone-com')?>" class="span12 txt-telefone"/>
                                                          </label>
                                                      </div>
                                                      <div class="span4">
                                                          <label for="txt-celular">Celular:
                                                              <input type="text" name="txt-celular" id="txt-celular" value="<?php echo set_value('txt-celular')?>" class="span12 txt-celular"/>
                                                          </label>
                                                      </div>  

                                                  </div>
                                                  <div class="controls controls-row">
                                                      <div class="span6">
                                                          <label for="txt-profissao">Profissão:
                                                              <input type="text" name="txt-profissao" id="txt-profissao" value="<?php echo set_value('txt-profissao')?>" class="span12"/>
                                                          </label>
                                                      </div>
                                                      <div class="span6">
                                                          <label for="txt-email">Email:
                                                              <input type="text" name="txt-email" id="txt-email" value="<?php echo set_value('txt-email')?>" class="span12"/>
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
                                      </div>
                                    <?php
                                        echo form_close();
                                    ?>
                                </div>
                </div>
</div>