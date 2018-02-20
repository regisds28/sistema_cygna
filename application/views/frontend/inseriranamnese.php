<div class="content-page equal-height">
    <div class="content">
        <div class="container">  
            <div class="tab-content row-fluid">                        
                 <div id="menu2" class="tab-pane fade in active">
                    <div class="row mt-5 ml-5 mr-10">
                        <div>
                            <div class="panel-box">


                                <?php
                                    echo validation_errors('<div class="alert alert-danger">','</div>');
                                    echo form_open(base_url('inseriranamnese/inserir'));
                                ?>                           
                                <h3>Cadastrar ficha de anamnese</h3>   
                                <?php
                                    foreach($dadosclientes as $dadocliente){
                                ?>
                                <h3>Cliente: <?php echo $dadocliente->nome_cliente ?></h3>
                                <?php
                                    }       
                                ?>

                                <div class="botoes mt-25 mb-20">                                          
                                                                         
                                    <button class="btn btn-primary">
                                        <i class="fa fa-save"></i>
                                        Salvar
                                    </button>
                                    <button type="reset" onClick="history.go(-1)" class="btn btn-default">
                                        <i class="fa fa-arrow-left"></i>
                                        Voltar
                                    </button>
                                    <button class="btn btn-default" type="reset">
                                        <i class="fa fa-clean"></i>
                                        Limpar
                                    </button>
                                    <?php
                                        foreach($dadosclientes as $dadocliente){
                                    ?>
                                    <input type="hidden" name="id_cliente" id="id_cliente" value="<?php echo $dadocliente->id_cliente ?>" />
                                    <input type="hidden" name="nome_cliente" id="nome_cliente" value="<?php echo $dadocliente->nome_cliente ?>" />
                                    <?php
                                        }
                                    ?>
                                    <input type="hidden" name="nome_profissional" id="nome_profissional" value="<?php echo $this->session->userdata('userlogado')->nome_profissional; ?>" />
                                    <input type="hidden" name="id_profissional" id="id_profissional" value="<?php echo $this->session->userdata('userlogado')->id_profissional; ?>" />
                                </div>  
                                <div class="form-group fichas span12">
                                    
                                    <!--INÍCIO FICHA HÁBITOS DIÁRIOS-->                                    
                                    <h3>Hábitos diários</h3>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Tratamento estético anterior?
                                            </div>
                                            <div class="resposta span3">
                                                <label>
                                                    <input type="radio" name="tratamento_estetico" id="tratamento_estetico" value="Sim">
                                                    Sim
                                                </label>
                                                <label>
                                                    <input type="radio" name="tratamento_estetico" id="tratamento_estetico" value="Não">
                                                    Não
                                                </label>
                                            </div>  
                                            <div class="obs span6">
                                                <input type="text" name="tratamento_estetico_qual" id="tratamento_estetico_qual" placeholder="Qual?">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Usa lentes de contato?
                                            </div>
                                            <div class="resposta span3">
                                                <label>
                                                    <input type="radio" name="lentes_contato" id="usa_lentes_contato" value="Sim">
                                                    Sim
                                                </label>
                                                <label>
                                                    <input type="radio" name="lentes_contato" id="usa_lentes_contato" value="Não">
                                                    Não
                                                </label>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Utiliza cosméticos?
                                            </div>
                                            <div class="resposta span3">
                                                <label>
                                                    <input type="radio" name="utiliza_cosmetico" id="utiliza_cosmetico-cosmetico" value="Sim">
                                                    Sim
                                                </label>
                                                <label>
                                                    <input type="radio" name="utiliza_cosmetico" id="utiliza_cosmetico" value="Não">
                                                    Não
                                                </label>
                                            </div>  
                                            <div class="obs span6">
                                                <input type="text" name="utiliza_cosmetico_qual" id="utiliza_cosmetico_qual" placeholder="Qual?">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Exposição ao sol? 
                                            </div>
                                            <div class="resposta span3">
                                                <label>
                                                    <input type="radio" name="exposicao_sol" id="exposicao_sol" value="Sim">
                                                    Sim
                                                </label>
                                                <label>
                                                    <input type="radio" name="exposicao_sol" id="exposicao_sol" value="Não">
                                                    Não
                                                </label>
                                            </div>  
                                            <div class="obs span6">
                                                <input type="text" name="exposicao_sol_frequencia" id="exposicao_sol_frequencia" placeholder="Frequência">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12"span3>
                                            <div class="pergunta span3">
                                                Usa Protetor Solar? 
                                            </div>
                                            <div class="resposta span3">
                                                <label>
                                                    <input type="radio" name="usa_protetor_solar" id="usa_protetor_solar" value="Sim">
                                                    Sim
                                                </label>
                                                <label>
                                                    <input type="radio" name="usa_protetor_solar" id="usa_protetor_solar" value="Não">
                                                    Não
                                                </label>
                                            </div>  
                                            <div class="obs span6">
                                                <input type="text" name="usa_protetor_solar_qual" id="usa_protetor_solar_qual" placeholder="Qual?">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Tabagismo?
                                            </div>
                                            <div class="resposta span3">
                                                <label>
                                                    <input type="radio" name="tabagismo" id="tabagismo" value="Sim">
                                                    Sim
                                                </label>
                                                <label>
                                                    <input type="radio" name="tabagismo" id="tabagismo" value="Não">
                                                    Não
                                                </label>
                                            </div>  
                                            <div class="obs span6">
                                                <input type="text" name="quantidade_cigarros_dia" id="quantidade_cigarros_dia" placeholder="Quantidade de cigarros/dia">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Ingere bebida alcoólica?
                                            </div>
                                            <div class="resposta span3">
                                                <label>
                                                    <input type="radio" name="ingere_bebida_alcoolica" id="ingere_bebida_alcoolica" value="Sim">
                                                    Sim
                                                </label>
                                                <label>
                                                    <input type="radio" name="ingere_bebida_alcoolica" id="ingere_bebida_alcoolica" value="Não">
                                                    Não
                                                </label>
                                            </div>  
                                            <div class="obs span6">
                                                <input type="text" name="ingere_bebida_alcoolica_frequencia" id="ingere_bebida_alcoolica_frequencia" placeholder="Frequência">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Funcionamento intestinal
                                            </div>
                                            <div class="resposta span3">
                                            </div> 
                                            <div class="obs span6">
                                                <select name="id_qt_vezes" id="id_qt_vezes" class="span12">
                                                    <option> </option>
                                                    <?php
                                                        foreach($qtvezes as $vezes){
                                                    ?>
                                                        <option value="<?php echo $vezes->id_qt_vezes?>"><?php echo $vezes->descricao_quantidade ?>
                                                        </option>
                                                    <?php
                                                        }
                                                    ?> 
                                                </select>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Qualidade do sono
                                            </div>
                                            <div class="resposta span3">
                                                <label>
                                                    <input type="radio" name="qualidade_sono" id="qualidade_sono" value="Boa">
                                                    Boa
                                                </label>
                                                <label>
                                                    <input type="radio" name="qualidade_sono" id="qualidade_sono" value="Regular">
                                                    Regular
                                                </label>
                                                <label>
                                                    <input type="radio" name="qualidade_sono" id="qualidade_sono" value="Péssima">
                                                    Péssima
                                                </label>
                                            </div>  
                                            <div class="obs span6">
                                                <input type="text" name="quantas_horas_sono_noite" id="quantas_horas_sono_noite" placeholder="Quantas horas / noite?">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Pratica Atividade física?
                                            </div>
                                            <div class="resposta span3">
                                                <label>
                                                    <input type="radio" name="atividade_fisica" id="atividade_fisica" value="Sim">
                                                    Sim
                                                </label>
                                                <label>
                                                    <input type="radio" name="atividade_fisica" id="atividade_fisica" value="Não">
                                                    Não
                                                </label>
                                            </div>  
                                            <div class="obs span3">
                                                <input type="text" name="atividade_fisica_tipo" id="atividade_fisica_tipo" placeholder="Tipo">
                                            </div>
                                            <div class="obs span3" style="margin-left: -27px !important;">
                                                <input type="text" name="atividade_fisica_frequencia" id="atividade_fisica_frequencia" placeholder="Frequência">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Usa anticoncepcional?
                                            </div>
                                            <div class="resposta span3">
                                                <label>
                                                    <input type="radio" name="anticoncepcional" id="anticoncepcional" value="Sim">
                                                    Sim
                                                </label>
                                                <label>
                                                    <input type="radio" name="anticoncepcional" id="anticoncepcional" value="Não">
                                                    Não
                                                </label>
                                            </div>  
                                            <div class="obs span6">
                                                <input type="text" name="anticoncepcional_qual" id="anticoncepcional_qual" placeholder="Qual?">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Data da primeira menstruação
                                            </div>
                                            <div class="resposta span3">
                                            </div>  
                                            <div class="obs span6">
                                                <input type="text" name="data_primeira_menstruacao" id="data_primeira_menstruacao" class="txt-data">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Data da última menstruação
                                            </div>
                                            <div class="resposta span3">
                                            </div>  
                                            <div class="obs span6">
                                                <input type="text" name="data_ultima_menstruacao" id="data_ultima_menstruacao" class="txt-data">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Gestações
                                            </div>
                                            <div class="resposta span3">
                                                <label>
                                                    <input type="radio" name="gestacoes" id="gestacoes" value="Sim">
                                                    Sim
                                                </label>
                                                <label>
                                                    <input type="radio" name="gestacoes" id="gestacoes" value="Não">
                                                    Não
                                                </label>
                                            </div>  
                                            <div class="obs span3">
                                                <input type="text" name="gestacoes_quantas" id="gestacoes_quantas" placeholder="Quantas?">
                                            </div>
                                            <div class="obs span3" style="margin-left: -27px !important;">
                                                <input type="text" name="gestacoes_ha_quanto_tempo" id="gestacoes_ha_quanto_tempo" placeholder="Há quanto tempo?">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Lactante?
                                            </div>
                                            <div class="resposta span3">
                                                <label>
                                                    <input type="radio" name="lactante" id="lactante" value="Sim">
                                                    Sim
                                                </label>
                                                <label>
                                                    <input type="radio" name="lactante" id="lactante" value="Não">
                                                    Não
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12" style="height: 60px;">
                                            <div class="pergunta span3">
                                                Observações
                                            </div>
                                            <div class="resposta span3">
                                            </div>
                                            <div class="obs span6">
                                                <textarea name="observacoes_habitos" id="observacoes_habitos"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12" style="height: 60px;">
                                            <div class="pergunta span3">
                                                Principais queixas
                                            </div>
                                            <div class="resposta span3">
                                            </div>
                                            <div class="obs span6">
                                                <textarea name="principais_queixas" id="principais_queixas">
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div><!--FIM FICHA HÁBITOS DIÁRIOS-->
                                <div class="form-group fichas span12">
                                    
                                    <!--INÍCIO FICHA HISTÓRICO CLÍNICO-->
                                    
                                    <h3>Histórico clínico</h3>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Tratamento médico atual?
                                            </div>
                                            <div class="resposta span3">
                                                <label>
                                                    <input type="radio" name="tratamento_medico_atual" id="tratamento_medico_atual" value="Sim">
                                                    Sim
                                                </label>
                                                <label>
                                                    <input type="radio" name="tratamento_medico_atual" id="tratamento_medico_atual" value="Não">
                                                    Não
                                                </label>
                                            </div>  
                                            <div class="obs span6">
                                                <input type="text" name="medicamentos_em_uso" id="medicamentos_em_uso" placeholder="Medicamentos em uso">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Tem ou já teve Herpes?
                                            </div>
                                            <div class="resposta span3">
                                                <label>
                                                    <input type="radio" name="herpes" id="herpes" value="Sim">
                                                    Sim
                                                </label>
                                                <label>
                                                    <input type="radio" name="herpes" id="herpes" value="Não">
                                                    Não
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Alergias?
                                            </div>
                                            <div class="resposta span3">
                                                <label>
                                                    <input type="radio" name="alergia" id="alergia" value="Sim">
                                                    Sim
                                                </label>
                                                <label>
                                                    <input type="radio" name="alergia" id="alergia" value="Não">
                                                    Não
                                                </label>
                                            </div>  
                                            <div class="obs span6">
                                                <input type="text" name="alergia_qual" id="alergia_qual" placeholder="Quais?">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Possui queloides? 
                                            </div>
                                            <div class="resposta span3">
                                                <label>
                                                    <input type="radio" name="queloides" id="queloides" value="Sim">
                                                    Sim
                                                </label>
                                                <label>
                                                    <input type="radio" name="queloides" id="queloides" value="Não">
                                                    Não
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Doenças Cardíacas?
                                            </div>
                                            <div class="resposta span3">
                                                <label>
                                                    <input type="radio" name="doenca_cardiaca" id="doenca_cardiaca" value="Sim">
                                                    Sim
                                                </label>
                                                <label>
                                                    <input type="radio" name="doenca_cardiaca" id="doenca_cardiaca" value="Não">
                                                    Não
                                                </label>
                                            </div>  
                                            <div class="obs span6">
                                                <input type="text" name="doenca_cardiaca_qual" id="doenca_cardiaca_qual" placeholder="Quais?">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Portador de marca-passo?
                                            </div>
                                            <div class="resposta span3">
                                                <label>
                                                    <input type="radio" name="marca_passo" id="marca_passo" value="Sim">
                                                    Sim
                                                </label>
                                                <label>
                                                    <input type="radio" name="marca_passo" id="marca_passo" value="Não">
                                                    Não
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Hipo/Hipertensão arterial?
                                            </div>
                                            <div class="resposta span3">
                                                <label>
                                                    <input type="radio" name="hipo_hipertensao_arterial" id="hipo_hipertensao_arterial" value="Sim">
                                                    Sim
                                                </label>
                                                <label>
                                                    <input type="radio" name="hipo_hipertensao_arterial" id="hipo_hipertensao_arterial" value="Não">
                                                    Não
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Dist. Circulatório (trombose)?
                                            </div>
                                            <div class="resposta span3">
                                                <label>
                                                    <input type="radio" name="trombose" id="trombose" value="Sim">
                                                    Sim
                                                </label>
                                                <label>
                                                    <input type="radio" name="trombose" id="trombose" value="Não">
                                                    Não
                                                </label>
                                            </div>  
                                            <div class="obs span6">
                                                <input type="text" name="trombose_qual" id="trombose_qual" placeholder="Qual?">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Faz uso de anticoagulantes?
                                            </div>
                                            <div class="resposta span3">
                                                <label>
                                                    <input type="radio" name="usa_anticoagulante" id="usa_anticoagulante" value="Sim">
                                                    Sim
                                                </label>
                                                <label>
                                                    <input type="radio" name="usa_anticoagulante" id="usa_anticoagulante" value="Não">
                                                    Não
                                                </label>
                                            </div>  
                                            <div class="obs span6">
                                                <input type="text" name="usa_anticoagulante_qual" id="usa_anticoagulante_qual" placeholder="Quais?">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Doença auto-imune?
                                            </div>
                                            <div class="resposta span3">
                                                <label>
                                                    <input type="radio" name="doenca_auto_imune" id="doenca_auto_imune" value="Sim">
                                                    Sim
                                                </label>
                                                <label>
                                                    <input type="radio" name="doenca_auto_imune" id="doenca_auto_imune" value="Não">
                                                    Não
                                                </label>
                                            </div>  
                                            <div class="obs span6">
                                                <input type="text" name="doenca_auto_imune_qual" id="doenca_auto_imune_qual" placeholder="Qual?">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Distúrbio renal?
                                            </div>
                                            <div class="resposta span3">
                                                <label>
                                                    <input type="radio" name="disturbio_renal" id="disturbio_renal" value="Sim">
                                                    Sim
                                                </label>
                                                <label>
                                                    <input type="radio" name="disturbio_renal" id="disturbio_renal" value="Não">
                                                    Não
                                                </label>
                                            </div>  
                                            <div class="obs span6">
                                                <input type="text" name="disturbio_renal_qual" id="disturbio_renal_qual" placeholder="Qual?">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Distúrbio hormonal? 
                                            </div>
                                            <div class="resposta span3">
                                                <label>
                                                    <input type="radio" name="disturbio_hormonal" id="disturbio_hormonal" value="Sim">
                                                    Sim
                                                </label>
                                                <label>
                                                    <input type="radio" name="disturbio_hormonal" id="disturbio_hormonal" value="Não">
                                                    Não
                                                </label>
                                            </div>  
                                            <div class="obs span6">
                                                <input type="text" name="disturbio_hormonal_qual" id="disturbio_hormonal_qual" placeholder="Qual?">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Ciclo menstrual regular? 
                                            </div>
                                            <div class="resposta span3">
                                                <label>
                                                    <input type="radio" name="ciclo_menstrual_regular" id="ciclo_menstrual_regular" value="Sim">
                                                    Sim
                                                </label>
                                                <label>
                                                    <input type="radio" name="ciclo_menstrual_regular" id="ciclo_menstrual_regular" value="Não">
                                                    Não
                                                </label>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Distúrbio gastrointestinal? 
                                            </div>
                                            <div class="resposta span3">
                                                <label>
                                                    <input type="radio" name="disturbio_gastrointestinal" id="disturbio_gastrointestinal" value="Sim">
                                                    Sim
                                                </label>
                                                <label>
                                                    <input type="radio" name="disturbio_gastrointestinal" id="disturbio_gastrointestinal" value="Não">
                                                    Não
                                                </label>
                                            </div>  
                                            <div class="obs span6">
                                                <input type="text" name="disturbio_gastrointestinal_qual" id="disturbio_gastrointestinal_qual" placeholder="Qual?">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Dist. Pulmorar/respiratório?
                                            </div>
                                            <div class="resposta span3">
                                                <label>
                                                    <input type="radio" name="disturbio_pulmonar_respiratorio" id="disturbio_pulmonar_respiratorio" value="Sim">
                                                    Sim
                                                </label>
                                                <label>
                                                    <input type="radio" name="disturbio_pulmonar_respiratorio" id="disturbio_pulmonar_respiratorio" value="Não">
                                                    Não
                                                </label>
                                            </div>  
                                            <div class="obs span6">
                                                <input type="text" name="disturbio_pulmonar_respiratorio_qual" id="disturbio_pulmonar_respiratorio_qual" placeholder="Qual?">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Distúrbio Hepático?
                                            </div>
                                            <div class="resposta span3">
                                                <label>
                                                    <input type="radio" name="disturbio_hepatico" id="disturbio_hepatico" value="Sim">
                                                    Sim
                                                </label>
                                                <label>
                                                    <input type="radio" name="disturbio_hepatico" id="disturbio_hepatico" value="Não">
                                                    Não
                                                </label>
                                            </div>  
                                            <div class="obs span6">
                                                <input type="text" name="disturbio_hepatico_qual" id="disturbio_hepatico_qual" placeholder="Qual?">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Epilepsia/Convulsões?
                                            </div>
                                            <div class="resposta span3">
                                                <label>
                                                    <input type="radio" name="epilepsia_convulsoes" id="epilepsia_convulsoes" value="Sim">
                                                    Sim
                                                </label>
                                                <label>
                                                    <input type="radio" name="epilepsia_convulsoes" id="epilepsia_convulsoes" value="Não">
                                                    Não
                                                </label>
                                            </div>  
                                            <div class="obs span6">
                                                <input type="text" name="epilepsia_convulsoes_frequencia" id="epilepsia_convulsoes_frequencia" placeholder="Frequência?">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Alt. Psicológicas/Psiquiátricas?
                                            </div>
                                            <div class="resposta span3">
                                                <label>
                                                    <input type="radio" name="alteracao_psicologica_psiquiatrica" id="alteracao_psicologica_psiquiatrica" value="Sim">
                                                    Sim
                                                </label>
                                                <label>
                                                    <input type="radio" name="alteracao_psicologica_psiquiatrica" id="alteracao_psicologica_psiquiatrica" value="Não">
                                                    Não
                                                </label>
                                            </div>  
                                            <div class="obs span6">
                                                <input type="text" name="alteracao_psicologica_psiquiatrica_qual" id="alteracao_psicologica_psiquiatrica_qual" placeholder="Qual?">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Tem ou já teve Câncer?
                                            </div>
                                            <div class="resposta span3">
                                                <label>
                                                    <input type="radio" name="tem_ou_ja_teve_cancer" id="tem_ou_ja_teve_cancer" value="Sim">
                                                    Sim
                                                </label>
                                                <label>
                                                    <input type="radio" name="tem_ou_ja_teve_cancer" id="tem_ou_ja_teve_cancer" value="Não">
                                                    Não
                                                </label>
                                            </div>  
                                            <div class="obs span6">
                                                <input type="text" name="tem_ou_ja_teve_cancer_quando" id="tem_ou_ja_teve_cancer_quando" placeholder="Quando?">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Diabetes
                                            </div>
                                            <div class="resposta span3">
                                                <label>
                                                    <input type="radio" name="diabetes" id="diabetes" value="Sim">
                                                    Sim
                                                </label>
                                                <label>
                                                    <input type="radio" name="diabetes" id="diabetes" value="Não">
                                                    Não
                                                </label>
                                            </div>  
                                            <div class="obs span6">
                                                <input type="text" name="diabetes_tipo" id="diabetes_tipo" placeholder="Tipo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12" style="height: 60px;">
                                            <div class="pergunta span3">
                                                Doenças na família? 
                                            </div>
                                            <div class="resposta span3">
                                                <label>
                                                    <input type="radio" name="doenca_familia" id="doenca_familia" value="Sim">
                                                    Sim
                                                </label>
                                                <label>
                                                    <input type="radio" name="doenca_familia" id="doenca_familia" value="Não">
                                                    Não
                                                </label>
                                            </div>  
                                            <div class="obs span6">
                                                <textarea name="doenca_familia_qual" id="doenca_familia_qual">
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--FIM FICHA HISTÓRICO CLÍNICO-->
                                <div class="form-group fichas span12">
                                    
                                    <!--INÍCIO FICHA Tratamento da medicina estética e cirúrgica-->
                                    
                                    <h3>Tratamento da medicina estética e cirúrgica</h3>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Implante dentário?
                                            </div>
                                            <div class="resposta span3">
                                                <label>
                                                    <input type="radio" name="implante_dentario" id="implante_dentario" value="Sim">
                                                    Sim
                                                </label>
                                                <label>
                                                    <input type="radio" name="implante_dentario" id="implante_dentario" value="Não">
                                                    Não
                                                </label>
                                            </div>  
                                            <div class="obs span6">
                                                <input type="text" name="implante_dentario_qual" id="implante_dentario_qual" placeholder="Qual?">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Implante metálico?
                                            </div>
                                            <div class="resposta span3">
                                                <label>
                                                    <input type="radio" name="implante_metalico" id="implante_metalico" value="Sim">
                                                    Sim
                                                </label>
                                                <label>
                                                    <input type="radio" name="implante_metalico" id="implante_metalico" value="Não">
                                                    Não
                                                </label>
                                            </div>  
                                            <div class="obs span6">
                                                <input type="text" name="implante_metalico_qual" id="implante_metalico_qual" placeholder="Qual?">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Intrauterino?
                                            </div>
                                            <div class="resposta span3">
                                                <label>
                                                    <input type="radio" name="intrauterino" id="intrauterino" value="Sim">
                                                    Sim
                                                </label>
                                                <label>
                                                    <input type="radio" name="intrauterino" id="intrauterino" value="Não">
                                                    Não
                                                </label>
                                            </div>  
                                            <div class="obs span6">
                                                <input type="text" name="intrauterino_qual" id="intrauterino_qual" placeholder="Qual?">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Trat. Dermat./Estético antes?
                                            </div>
                                            <div class="resposta span3">
                                                <label>
                                                    <input type="radio" name="tratamento_dermatologico_estetico_anterior" id="tratamento_dermatologico_estetico_anterior" value="Sim">
                                                    Sim
                                                </label>
                                                <label>
                                                    <input type="radio" name="tratamento_dermatologico_estetico_anterior" id="tratamento_dermatologico_estetico_anterior" value="Não">
                                                    Não
                                                </label>
                                            </div>  
                                            <div class="obs span6">
                                                <input type="text" name="tratamento_dermatologico_estetico_anterior_qual" id="tratamento_dermatologico_estetico_anterior_qual" placeholder="Quais?">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Já fez/faz uso de ácidos/peelings
                                            </div>
                                            <div class="resposta span3">
                                                <label>
                                                    <input type="radio" name="uso_acido_peeling" id="uso_acido_peeling" value="Sim">
                                                    Sim
                                                </label>
                                                <label>
                                                    <input type="radio" name="uso_acido_peeling" id="uso_acido_peeling" value="Não">
                                                    Não
                                                </label>
                                            </div>  
                                            <div class="obs span3">
                                                <input type="text" name="uso_acido_peeling_qual" id="uso_acido_peeling_qual" placeholder="Quais ácidos / peeling?">
                                            </div>
                                            <div class="obs span3" style="margin-left: -27px !important;">
                                                <input type="text" name="uso_acido_peeling_quando" id="uso_acido_peeling_quando" placeholder="Quando?">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Cirurgia Plástica Estética?
                                            </div>
                                            <div class="resposta span3">
                                                <label>
                                                    <input type="radio" name="cirurgia_plastica_estetica" id="cirurgia_plastica_estetica" value="Sim">
                                                    Sim
                                                </label>
                                                <label>
                                                    <input type="radio" name="cirurgia_plastica_estetica" id="cirurgia_plastica_estetica" value="Não">
                                                    Não
                                                </label>
                                            </div>
                                            <div class="obs span6">
                                                <input type="text" name="cirurgia_plastica_estetica_qual" id="cirurgia_plastica_estetica_qual" placeholder="Quais?">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <div class="span12">
                                            <div class="pergunta span3">
                                                Observações
                                            </div>
                                            <div class="resposta span3">
                                            </div>
                                            <div class="obs span6">
                                                <textarea name="observacoes_tratamento" id="observacoes_tratamento">
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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