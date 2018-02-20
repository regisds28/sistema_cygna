<div class="content-page equal-height">
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="span5">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2><?php echo 'Alterar ' . $subtitulo ?></h2>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="span5">
                                    <?php
                                        echo validation_errors('<div class="alert alert-danger">','</div>');
                                        echo form_open(base_url('usuarios/salvar_alteracoes')); 
                                        foreach($usuarios as $usuario){
                                            
                                    ?>
                                    <div class="form-group">
                                        <label>Nome usuário</label>
                                        <input type="text" name="txt-nome-profissional" class="form-control span5" value="<?php echo $usuario->nome_profissional?>">
                                    </div>
                                    <div class="form-group">
                                        <label>CPF</label>
                                        <input type="text" name="txt-cpf-profissional" class="form-control span5 txt-cpf" value="<?php echo $usuario->cpf_profissional ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="txt-email" class="form-control span5" value="<?php echo $usuario->email?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Usuario</label>
                                        <input type="text" name="txt-usuario" class="form-control span5" value="<?php echo $usuario->usuario?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Senha</label>
                                        <input type="password" name="txt-senha" class="form-control span5">
                                    </div>
                                    <div class="form-group">
                                        <label>Confirmar senha</label>
                                        <input type="password" name="txt-confirmar-senha" class="form-control span5">
                                    </div>
                                    <input type="hidden" name="txt-id-profissional" id="txt-id-profissional" value="<?php echo $usuario->id_profissional ?>">
                                    <div class="botoes mt-25 mb-20">    
                                        <button class="btn btn-primary">
                                            <i class="fa fa-save"></i>
                                            Salvar alterações
                                        </button>
                                        <button type="reset" onclick="history.go(-1)" class="btn btn-default">
                                            <i class="fa fa-arrow-left"></i>
                                            Voltar
                                        </button>
                                    </div>
                                    <?php
                                        }
                                        echo form_close();
                                    ?>
                                </div>
                            </div>
                        </div>

                    </div>            
                </div>
                <div class="span5">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2><?php echo 'Imagem destaque do ' . $subtitulo; ?></h2>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="span6">
                                    
                                </div>
                            </div>
                        </div>

                    </div>            
                </div>
            </div>
        </div>
    </div>
</div>