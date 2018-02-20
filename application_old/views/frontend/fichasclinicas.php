
            <?php
                foreach($fichasclinicas as $fichaclinica){

            ?>
            <div class="content-page equal-height">
                <div class="content">
                    <div class="container">
                        <form>
                            <h2><?php echo $fichaclinica->nome_cliente?></h2>
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
                                <li><a href="<?php echo 
                                                    base_url('dadosclientes/' . 
                                                    $fichaclinica->id_cliente . 
                                                    '/' . 
                                                    limpar($fichaclinica->nome_cliente))?>">Dados pessoais</a></li>
                                <li><a href="<?php echo 
                                                    base_url('agendamentos/' . 
                                                    $fichaclinica->id_cliente . 
                                                    '/' . 
                                                    limpar($fichaclinica->nome_cliente))?>">Agendamentos</a></li>
                                <li class="active"><a href="<?php echo 
                                                    base_url('fichasclinicas/' . 
                                                    $fichaclinica->id_cliente . 
                                                    '/' . 
                                                    limpar($fichaclinica->nome_cliente))?>">Fichas clínicas</a></li>
                                <li class="disabled"><a href="#">Receituário</a></li>
                                <li class="disabled"><a href="#">Outros</a></li>
                            </ul>

                            <div class="tab-content row-fluid">
                                <div id="home" class="tab-pane fade in active">
                                    
                                    <div class="span12">
                                        <h2>Fichas clínicas</h2>
                                        
                        
                                          <div class="tab-pane fade in active">
                                              <div class="row mt-25 ml-1">
                                                <div>
                                                    <div class="panel-box">
                                                        <div class="controls">
                                                          <label class="span12">Selecione o tipo de ficha clínica:</label>
                                                          <select id="selecao" class="span4">
                                                            <option selected> </option>
                                                            <option value="<?php echo 
                                                                            base_url('listaranamneses/' . 
                                                                            $fichaclinica->id_cliente . 
                                                                            '/' . 
                                                                            limpar($fichaclinica->nome_cliente))?>">
                                                                Ficha de anamnese
                                                            </option>
                                                            <option value="<?php echo 
                                                                            base_url('listaravaliacaocapilar/' . 
                                                                            $fichaclinica->id_cliente . 
                                                                            '/' . 
                                                                            limpar($fichaclinica->nome_cliente))?>
                                                                            ">
                                                                Ficha de avaliação capilar
                                                            </option>
                                                            <!--<option value="Ficha de avaliação facial" 
                                                                    data-url="<?php echo 
                                                                            base_url('fichaavaliacaofacial/' . 
                                                                            $fichaclinica->id_cliente . 
                                                                            '/' . 
                                                                            limpar($fichaclinica->nome_cliente))?>
                                                                            ">
                                                                Ficha de avaliação facial
                                                            </option>
                                                            <option value="Ficha de avaliação corporal" 
                                                                    data-url="<?php echo 
                                                                            base_url('fichaavaliacaocorporal/' . 
                                                                            $fichaclinica->id_cliente . 
                                                                            '/' . 
                                                                            limpar($fichaclinica->nome_cliente))?>
                                                                            ">
                                                                Ficha de avaliação corporal
                                                            </option>
                                                            <option value="Ficha de recordatório alimentar" 
                                                                    data-url="<?php echo 
                                                                            base_url('ficharecordatorioalimentar/' . 
                                                                            $fichaclinica->id_cliente . 
                                                                            '/' . 
                                                                            limpar($fichaclinica->nome_cliente))?>
                                                                            ">
                                                                Ficha de recordatório alimentar
                                                            </option>-->
                                                          </select> 
                                                      </div> 
                                                    </div>
                                                </div>
                                             </div>
                                          </div>
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

            