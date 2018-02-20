<div class="content-page equal-height">
                <div class="content">
                    <div class="container">  
                        <div class="tab-content row-fluid">
                        
                                 <div id="menu2" class="tab-pane fade in active">
                                    <div class="row mt-5 ml-5 mr-10">
                                        <div>
                                            <div class="panel-box">
                                                
                                                
                                                <?php
                                                    echo validation_errors();
                                                    echo form_open('inserir_agendamento/inserir');
                                                    
                                                ?>                           
                                                <h3>Inserir agendamento</h3>
                                                    <?php
                                                        foreach($inserir_agendamento as $agendamento){
                                                    ?>
                                                <h3>Cliente: <?php echo $agendamento->nome_cliente ?></h3>                       <?php
                                                        }
                                                    ?> 
                                                <div class="form-group">
                                                <div class="controls controls-row">
                                                    <div class="span6">
                                                        <label id="especialidade">Especialidade:
                                                            <select name="especialidade" class="span12">
                                                                <option> </option>
                                                                <?php
                                                                    foreach($especialidades as $especialidade){
                                                                ?>
                                                                    <option value="<?php echo $especialidade->id_especialidade?>"><?php echo $especialidade->descricao_especialidade ?>
                                                                    </option>
                                                                <?php
                                                                    }
                                                                ?> 
                                                            </select>
                                                        </label>
                                                    </div>
                                                    <div class="span6">
                                                        <label id="profissional">Profissional:
                                                            <select name="profissional" id="profissional" class="span12">
                                                                <option> </option>
                                                                <?php
                                                                    foreach($profissionais as $profissional){
                                                                ?>
                                                                    <option value="<?php echo $profissional->id_profissional?>"><?php echo $profissional->nome_profissional ?>
                                                                    </option>
                                                                <?php
                                                                    }
                                                                ?> 
                                                            </select>
                                                        </label>
                                                     </div>
                                                 </div>
                                                 <div class="controls controls-row">                                          
                                                        <div class="span3 date inner-addon right-addon" id="datetimepicker1">
                                                              <i class="fa fa-calendar"></i>
                                                              <label id="txt-data-agendamento">Data do agendamento:
                                                                <input type="text" id="txt-data-agendamento" name="txt-data-agendamento" value="" class="span12" />
                                                              </label>
                                                        </div>
                                                        <div class="span3">
                                                              <label id="txt-hora">Hora:
                                                                <input type="text" id="txt-hora" name="txt-hora" value="" class="span12" />
                                                              </label>
                                                        </div>
                                                        <div class="span3">
                                                              <label id="reposicao">Reposição:<br />
                                                                <input type="radio" name="reposicao" value=""/>
                                                                Sim
                                                                <input type="radio" name="reposicao" value=""/>
                                                                Não
                                                              </label>
                                                        </div>
                                                    </div> 
                                                    <div class="controls">
                                                       <div class="span12">
                                                          <label id="txt-observacoes">Observações:
                                                            <textarea id="txt-observacoes" name="txt-observacoes" class="span12"></textarea>
                                                          </label>
                                                       </div>	
                                                    </div>
                                                    </div>
                                                    <button type="button" class="btn btn-default" onclick="history.go(-1)">Voltar</button>
                                                        <button type="submit" class="btn btn-primary">Incluir</button>
                                                    
                                                    
                                                        
                                                    <?php
                                                        echo form_close();       
                                                    ?>
                                                </div>
                                        </div>
                                     </div>
                            </div>
                        </div>
                    </div>
                
                                                        
                        </div>
                    </div>

                    <div id="mask"></div>]]]]]