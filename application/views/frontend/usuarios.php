<div class="content-page equal-height">
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="span5 ml-30">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2><?php echo 'Adicionar novo ' . $subtitulo ?></h2>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="span5 ml-30">
                                    <?php
                                        echo validation_errors('<div class="alert alert-danger">','</div>');
                                        echo form_open(base_url('usuarios/inserir'));
                                    ?>
                                    <div class="form-group">
                                        <label>Nome usuário</label>
                                        <input type="text" name="txt-nome-profissional" class="form-control span5" value="<?php echo set_value('txt-nome-profissional')?>">
                                    </div>
                                    <div class="form-group">
                                        <label>CPF</label>
                                        <input type="text" name="txt-cpf-profissional" class="form-control span5 txt-cpf" value="<?php echo set_value('txt-cpf-profissional')?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="txt-email" class="form-control span5" value="<?php echo set_value('txt-email')?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Usuario</label>
                                        <input type="text" name="txt-usuario" class="form-control span5" value="<?php echo set_value('txt-usuario')?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Senha</label>
                                        <input type="password" name="txt-senha" class="form-control span5">
                                    </div>
                                    <div class="form-group">
                                        <label>Confirmar senha</label>
                                        <input type="password" name="txt-confirmar-senha" class="form-control span5">
                                    </div>
                                    <div class="botoes mt-25 mb-20">    
                                        <button class="btn btn-primary">
                                            <i class="fa fa-save"></i>
                                            Cadastrar
                                        </button>
                                        <button type="reset" onclick="history.go(-1)" class="btn btn-default">
                                            <i class="fa fa-arrow-left"></i>
                                            Voltar
                                        </button>
                                    </div>
                                    <?php
                                        echo form_close();
                                    ?>
                                </div>
                            </div>
                        </div>

                    </div>            
                </div>
                <div class="span5 ml-30">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2><?php echo 'Alterar ' . $subtitulo . ' existente'?></h2>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="span6 ml-30">
                                    <?php
                                        $this->table->set_heading("Nome","Alterar","Excluir");                                   
                                        foreach($usuarios as $usuario){                
                                            $nomeuser = $usuario->nome_profissional;
                                            $alterar = 
                                                anchor(base_url('usuarios/alterar/'.md5($usuario->id_profissional)), '<i data-toggle="tooltip" title="alterar" class="fa fa-edit">');
                                            $excluir = 
                                                anchor(base_url('usuarios/excluir/'.md5($usuario->id_profissional)), '<i data-toggle="tooltip" title="excluir" class="fa fa-trash">');
                                            
                                            $this->table->add_row($nomeuser,$alterar,$excluir);
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
        </div>
    </div>
</div>