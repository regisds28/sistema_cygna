<div class="content-page equal-height">
    <div class="content">
        <div class="container">  
            <div class="tab-content row-fluid">                        
                 <div id="menu2" class="tab-pane fade in active">
                    <div class="row mt-5 ml-5 mr-10">
                        <div>
                            <div class="panel-box" id="imprimir">
                                                      
                                <h3>Ficha de anamnese</h3>   
                                <?php
                                    foreach($visualizaranamnese as $veranamnese){
                                ?>
                                <h3>Cliente: <?php echo $veranamnese->nome_cliente ?></h3>
                                <h4>Cadastrada no dia <?php echo $veranamnese->data ?></h4>

                                
                                <div class="table-responsive">  
                                    <!--INÍCIO FICHA HÁBITOS DIÁRIOS-->     
                                    <h3>Hábitos diários</h3>
                                    <hr />
                                    <table class="table" style="text-align:left; font-family:'Open Sans', sans-serif ;">
                                        <thead>
                                            <tr>
                                                <th>Questionário</th>
                                                <th>Respostas</th>
                                                <th>Observações</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tratamento estético anterior?</td>
                                                <td><?php echo $veranamnese->tratamento_estetico ?></td>
                                                <td><?php echo $veranamnese->tratamento_estetico_qual ?></td>
                                            </tr> 
                                            <tr>
                                                <td>Usa lentes de contato?</td>
                                                <td><?php echo $veranamnese->lentes_contato ?></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Utiliza cosméticos?</td>
                                                <td><?php echo $veranamnese->utiliza_cosmetico ?></td>
                                                <td><?php echo $veranamnese->utiliza_cosmetico_qual ?></td>
                                            </tr>
                                            <tr>
                                                <td>Exposição ao sol? </td>
                                                <td><?php echo $veranamnese->exposicao_sol ?></td>
                                                <td><?php echo $veranamnese->exposicao_sol_frequencia ?></td>
                                            </tr> 
                                            <tr>
                                                <td>Usa Protetor Solar? </td>
                                                <td><?php echo $veranamnese->usa_protetor_solar ?></td>
                                                <td><?php echo $veranamnese->usa_protetor_solar_qual ?></td>
                                            </tr>
                                            <tr>
                                                <td>Tabagismo?</td>
                                                <td><?php echo $veranamnese->tabagismo ?></td>
                                                <td><?php echo $veranamnese->quantidade_cigarros_dia ?></td>
                                            </tr>
                                            <tr>
                                                <td>Ingere bebida alcoólica?</td>
                                                <td><?php echo $veranamnese->ingere_bebida_alcoolica ?></td>
                                                <td><?php echo $veranamnese->ingere_bebida_alcoolica_frequencia ?></td>
                                            </tr> 
                                            <tr>
                                                <td>Funcionamento intestinal </td>
                                                <td></td>
                                                <td><?php echo $veranamnese->descricao_quantidade ?></td>
                                            </tr>
                                            <tr>
                                                <td>Tabagismo?</td>
                                                <td><?php echo $veranamnese->tabagismo ?></td>
                                                <td><?php echo $veranamnese->quantidade_cigarros_dia ?></td>
                                            </tr>
                                            <tr>
                                                <td>Qualidade do sono</td>
                                                <td><?php echo $veranamnese->qualidade_sono ?></td>
                                                <td><?php echo $veranamnese->quantas_horas_sono_noite ?></td>
                                            </tr>
                                            <tr>
                                                <td>Pratica Atividade física?</td>
                                                <td><?php echo $veranamnese->atividade_fisica ?></td>
                                                <td>
                                                    <?php echo $veranamnese->atividade_fisica_tipo ?> / 
                                                    <?php echo $veranamnese->atividade_fisica_frequencia ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Usa anticoncepcional?</td>
                                                <td><?php echo $veranamnese->anticoncepcional ?></td>
                                                <td><?php echo $veranamnese->anticoncepcional_qual ?></td>
                                            </tr>
                                            <tr>
                                                <td>Data da primeira menstruação</td>
                                                <td></td>
                                                <td><?php echo $veranamnese->data_primeira_menstruacao ?></td>
                                            </tr>
                                            <tr>
                                                <td>Data da última menstruação</td>
                                                <td></td>
                                                <td><?php echo $veranamnese->data_ultima_menstruacao ?></td>
                                            </tr>
                                            <tr>
                                                <td>Gestações</td>
                                                <td><?php echo $veranamnese->gestacoes ?></td>
                                                <td>
                                                    <?php echo $veranamnese->gestacoes_quantas ?> / 
                                                    <?php echo $veranamnese->gestacoes_ha_quanto_tempo ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Lactante</td>
                                                <td><?php echo $veranamnese->lactante ?></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Observações</td>
                                                <td></td>
                                                <td><?php echo $veranamnese->observacoes_habitos ?></td>
                                            </tr>
                                            <tr>
                                                <td>Principais queixas</td>
                                                <td></td>
                                                <td><?php echo $veranamnese->principais_queixas ?></td>
                                            </tr>
                                            <!--FIM FICHA HÁBITOS DIÁRIOS-->
                                            <!--INÍCIO FICHA HISTÓRICO CLÍNICO-->                                        
                                            <tr>                                                
                                                <td><h3>Histórico clínico</h3></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Tratamento médico atual?</td>
                                                <td><?php echo $veranamnese->tratamento_medico_atual ?></td>
                                                <td><?php echo $veranamnese->medicamentos_em_uso ?></td>
                                            </tr> 
                                            <tr>
                                                <td>Tem ou já teve Herpes?</td>
                                                <td><?php echo $veranamnese->herpes ?></td>
                                                <td></td>
                                            </tr> 
                                            <tr>
                                                <td>Alergias?</td>
                                                <td><?php echo $veranamnese->alergia ?></td>
                                                <td><?php echo $veranamnese->alergia_qual ?></td>
                                            </tr> 
                                            <tr>
                                                <td>Possui queloides?</td>
                                                <td><?php echo $veranamnese->queloides ?></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Doenças Cardíacas?</td>
                                                <td><?php echo $veranamnese->doenca_cardiaca ?></td>
                                                <td><?php echo $veranamnese->doencas_cardiacas_quais ?></td>
                                            </tr> 
                                            <tr>
                                                <td>Portador de marca-passo?</td>
                                                <td><?php echo $veranamnese->marca_passo ?></td>
                                                <td></td>
                                            </tr> 
                                            <tr>
                                                <td> Hipo/Hipertensão arterial?</td>
                                                <td><?php echo $veranamnese->hipo_hipertensao_arterial ?></td>
                                                <td></td>
                                            </tr> 
                                            <tr>
                                                <td>Distúrbio Circulatório (trombose)?</td>
                                                <td><?php echo $veranamnese->trombose ?></td>
                                                <td><?php echo $veranamnese->trombose_qual ?></td>
                                            </tr>
                                            <tr>
                                                <td>Faz uso de anticoagulantes?</td>
                                                <td><?php echo $veranamnese->usa_anticoagulante ?></td>
                                                <td><?php echo $veranamnese->usa_anticoagulante_qual ?></td>
                                            </tr> 
                                            <tr>
                                                <td>Doença auto-imune?</td>
                                                <td><?php echo $veranamnese->doenca_auto_imune ?></td>
                                                <td><?php echo $veranamnese->doenca_auto_imune_qual ?></td>
                                            </tr> 
                                            <tr>
                                                <td>Distúrbio renal?</td>
                                                <td><?php echo $veranamnese->disturbio_renal ?></td>
                                                <td><?php echo $veranamnese->disturbio_renal_qual ?></td>
                                            </tr> 
                                            <tr>
                                                <td>Distúrbio hormonal?</td>
                                                <td><?php echo $veranamnese->disturbio_hormonal ?></td>
                                                <td><?php echo $veranamnese->disturbio_hormonal_qual ?></td>
                                            </tr>
                                            <tr>
                                                <td>Ciclo menstrual regular? </td>
                                                <td><?php echo $veranamnese->ciclo_menstrual_regular ?></td>
                                                <td></td>
                                            </tr> 
                                            <tr>
                                                <td>Distúrbio gastrointestinal?</td>
                                                <td><?php echo $veranamnese->disturbio_gastrointestinal ?></td>
                                                <td><?php echo $veranamnese->disturbio_gastrointestinal_qual ?></td>
                                            </tr> 
                                            <tr>
                                                <td>Distúrbio Pulmorar/respiratório</td>
                                                <td><?php echo $veranamnese->disturbio_pulmonar_respiratorio ?></td>
                                                <td><?php echo $veranamnese->disturbio_pulmonar_respiratorio_qual ?></td>
                                            </tr>
                                            <tr>
                                                <td>Distúrbio Hepático?</td>
                                                <td><?php echo $veranamnese->disturbio_hepatico ?></td>
                                                <td><?php echo $veranamnese->disturbio_hepatico_qual ?></td>
                                            </tr> 
                                            <tr>
                                                <td>Epilepsia/Convulsões?</td>
                                                <td><?php echo $veranamnese->epilepsia_convulsoes ?></td>
                                                <td><?php echo $veranamnese->epilepsia_convulsoes_frequencia ?></td>
                                            </tr> 
                                            <tr>
                                                <td>Alterações Psicológicas/Psiquiátricas?</td>
                                                <td><?php echo $veranamnese->alteracao_psicologica_psiquiatrica ?></td>
                                                <td><?php echo $veranamnese->alteracao_psicologica_psiquiatrica_qual ?></td>
                                            </tr>
                                            <tr>
                                                <td>Tem ou já teve Câncer?</td>
                                                <td><?php echo $veranamnese->tem_ou_ja_teve_cancer ?></td>
                                                <td><?php echo $veranamnese->tem_ou_ja_teve_cancer_quando ?></td>
                                            </tr> 
                                            <tr>
                                                <td>Diabetes?</td>
                                                <td><?php echo $veranamnese->diabetes ?></td>
                                                <td><?php echo $veranamnese->diabetes_tipo ?></td>
                                            </tr> 
                                            <tr>
                                                <td>Doenças na família?</td>
                                                <td><?php echo $veranamnese->doenca_familia ?></td>
                                                <td><?php echo $veranamnese->doenca_familia_qual ?></td>
                                            </tr>                                            
                                            <!--FIM FICHA HISTÓRICO CLÍNICO-->
                                            <!--INÍCIO FICHA TRATAMENTO DA MEDICINA ESTÁTICA E CIRÚRGICA--> 
                                            <tr>
                                                <td><h3>Tratamento da medicina estética e cirúrgica</h3></td>
                                                <td></td>
                                                <td></td>
                                            </tr> 
                                            <tr>
                                                <td>Implante dentário?</td>
                                                <td><?php echo $veranamnese->implante_dentario ?></td>
                                                <td><?php echo $veranamnese->implante_dentario_qual ?></td>
                                            </tr> 
                                            <tr>
                                                <td>Implante metálico?</td>
                                                <td><?php echo $veranamnese->implante_metalico ?></td>
                                                <td><?php echo $veranamnese->implante_metalico_qual ?></td>
                                            </tr>
                                            <tr>
                                                <td>Intrauterino?</td>
                                                <td><?php echo $veranamnese->intrauterino ?></td>
                                                <td><?php echo $veranamnese->intrauterino_qual ?></td>
                                            </tr> 
                                            <tr>
                                                <td>Tratamento Dermatológico/Estético antes?</td>
                                                <td><?php echo $veranamnese->tratamento_dermatologico_estetico_anterior ?></td>
                                                <td><?php echo $veranamnese->tratamento_dermatologico_estetico_anterior_qual ?></td>
                                            </tr>
                                            <tr>
                                                <td>Já fez/faz uso de ácidos/peelings</td>
                                                <td><?php echo $veranamnese->uso_acido_peeling ?></td>
                                                <td>
                                                    <?php echo $veranamnese->uso_acido_peeling_qual ?> /
                                                    <?php echo $veranamnese->uso_acido_peeling_quando ?>
                                                </td>
                                            </tr> 
                                            <tr>
                                                <td>Cirurgia Plástica Estética?</td>
                                                <td><?php echo $veranamnese->cirurgia_plastica_estetica ?></td>
                                                <td><?php echo $veranamnese->cirurgia_plastica_estetica_qual ?></td>
                                            </tr>
                                            <tr>
                                                <td>Observações</td>
                                                <td></td>
                                                <td><?php echo $veranamnese->observacoes_tratamento ?></td>
                                            </tr>
                                        </tbody>
                                    </table>                                    
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>                 
            </div>
        </div>
    </div>
</div>
<div class="botoes mt-25 mb-20">                                          
    <button type="button" id="btn-print" class="btn btn-default">
        <i class="fa fa-print"></i>
        Imprimir
    </button>
    <button type="reset" onclick="history.go(-1)" class="btn btn-default">
        <i class="fa fa-arrow-left"></i>
        Voltar
    </button>

</div>
<script>        
    document.getElementById('btn-print').onclick = function() {
        var conteudo = document.getElementById('imprimir').innerHTML,
            tela_impressao = window.open('about:blank');
        tela_impressao.document.write(conteudo);
        tela_impressao.window.print();
        tela_impressao.window.close();
    };
</script>