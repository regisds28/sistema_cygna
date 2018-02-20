            <div class="content-page  equal-height">
                <div class="content">
                    <div class="container">
                    	<h2>Buscar cliente</h2>
                        <div class="row">
                            <form action="lista-cliente.php" method="get">
								<div class="span6 controls">
                                	<div class="span12">
                                        <input type="text" name="busca" id="busca" class="span6 input-large" />
                                        <input type="submit" name="pesquisar" id="pesquisar" class="btn btn-primary" value="Pesquisar"/>
                                	</div>
                                </div>
							</form>
                        </div>
                        <div class="botoes mt-25 mb-20">
                            <a href="<?php echo base_url('cadastroclientes') ?>" class="btn btn-primary mt-4" >
                                <i class="fa fa-plus"></i>
                                Cadastrar novo
                            </a>
                        </div>
                        <div class="row mt-25 ml-25">
                            <div>
                                <div class="panel-box">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>id</th>
                                                    <th>Nome</th>
                                                    <th>Telefone</th>
                                                    <th>Data de nascimento</th>
                                                   
                                                    <th>Opções</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($listaclientes as $listacliente){
                                                ?>
                                                <tr>
                                                    <td><?php echo $listacliente->id_cliente ?></td>
                                                    <td><?php echo $listacliente->nome_cliente ?></td>
                                                    <td><?php echo $listacliente->celular ?></td>
                                                    <td><?php echo $listacliente->dt_nascimento ?></td>
                                                    <td>
														<a href="<?php echo 
                                                            base_url('dadosclientes/' . 
                                                                     $listacliente->id_cliente . 
                                                                     '/' . 
                                                                     limpar($listacliente->nome_cliente))?>">
                                                            <i data-toggle="tooltip" title="consultar" class="fa fa-edit"></i>
                                                        </a>
														<!--<a href=""><i data-toggle="tooltip" title="agendamento" class="fa fa-calendar"></i></a>-->
														<a href="<?php echo 
                                                            base_url('fichasclinicas/' . 
                                                                     $listacliente->id_cliente . 
                                                                     '/' . 
                                                                     limpar($listacliente->nome_cliente))?>"><i data-toggle="tooltip" title="ficha clínica" class="fa fa-heartbeat"></i></a>
														<a href="#"><i data-toggle="tooltip" title="receituário" class="fa fa-medkit"></i></a>
														<a href="#"><i data-toggle="tooltip" title="histórico" class="fa fa-pie-chart"></i></a>
													</td>
                                                </tr> 
                                                <?php
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                        <?php echo $pagination;?>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						<!--<div class="pagination pagination-centered">
						  	<ul>
								<li class="disabled"><a href="#">Prev</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#">Next</a></li>
						  	</ul>
						</div>-->

                    </div><!--content-->               
                </div><!--content page-->
            </div>
            
            