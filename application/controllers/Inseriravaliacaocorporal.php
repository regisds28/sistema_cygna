<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inseriravaliacaocorporal extends CI_Controller {
        
    public function __construct(){
        parent::__construct();
        
        if(!$this->session->userdata('logado')){
            redirect(base_url('login'));
        }
        
        $this->load->model('avaliacaocorporal_model','modelavaliacaocorporal');
        $this->load->model('dadosclientes_model','modeldadosclientes');
        $this->load->model('usuarios_model', 'modelusuarios');
        
    }
    
	public function index($id_cliente)
	{
        $this->load->model('usuarios_model', 'modelusuarios');  
        $dados['usuarios'] = $this->modelusuarios->listar_usuarios();
        if(!$this->session->userdata('logado')){
            redirect(base_url('login'));
        }     
        $this->load->model('avaliacaocorporal_model','modelavaliacaocorporal');
        $dados['inseriravaliacaocorporal'] = $this->modelavaliacaocorporal->visualizar_avaliacaocorporal($id_cliente);
        $this->load->model('dadosclientes_model','modeldadosclientes');
        $dados['dadosclientes'] = $this->modeldadosclientes->dados_clientes($id_cliente);        
        $this->load->view('frontend/template/html-header', $dados);
        $this->load->view('frontend/template/topo');
        $this->load->view('frontend/template/aside');
		$this->load->view('frontend/inseriravaliacaocorporal');
        $this->load->view('frontend/template/ajuda');
        $this->load->view('frontend/template/html-footer');
	}
    
    public function inserir(){
        if(!$this->session->userdata('logado')){
            redirect(base_url('login'));
        }
        $this->load->library('form_validation');
        $this->load->model('avaliacaocorporal_model','modelavaliacaocorporal');
        
        $this->form_validation->set_rules('id_cliente', 'ID cliente');
        $this->form_validation->set_rules('nome_cliente', 'Nome');
        $this->form_validation->set_rules('id_profissional', 'ID profissional');
        $this->form_validation->set_rules('nome_profissional', 'Usuário');
        
        $this->form_validation->set_rules('tratamento_corporal_anterior', 'Tratamento corporal anterior', 'required');
        $this->form_validation->set_rules('tratamento_corporal_anterior_quais', 'Qual tratamento corporal', 'min_length[3]');

        $this->form_validation->set_rules('resultado_skinup', 'Resultado skinup', 'required');

        $this->form_validation->set_rules('oleosidade_colo', 'oleosidade colo', 'required');
        $this->form_validation->set_rules('oleosidade_braco', 'oleosidade braço', 'required');
        $this->form_validation->set_rules('oleosidade_coxa', 'oleosidade coxa', 'required');
        
        $this->form_validation->set_rules('umidade_colo', 'umidade colo', 'required');
        $this->form_validation->set_rules('umidade_braco', 'umidade braço', 'required');
        $this->form_validation->set_rules('umidade_coxa', 'umidade coxa', 'required');
        
        $this->form_validation->set_rules('elasticidade_colo', 'elasticidade colo', 'required');
        $this->form_validation->set_rules('elasticidade_braco', 'elasticidade braço', 'required');
        $this->form_validation->set_rules('elasticidade_coxa', 'elasticidade coxa', 'required');
        
        $this->form_validation->set_rules('estado_cutaneo', 'estado cutâneo', 'required');
        $this->form_validation->set_rules('textura', 'textura', 'required');
        $this->form_validation->set_rules('lesoes_pele', 'lesões na pele', 'required');
        $this->form_validation->set_rules('lesoes_pele_outro', 'outras lesões', 'min_length[3]');        
        $this->form_validation->set_rules('cicatriz', 'cicatriz', 'required');
        $this->form_validation->set_rules('cicatriz_localizacao', 'cicatriz localização');
        
        $this->form_validation->set_rules('tipo_hldg', 'tipo Hidrolipodistrofia Ginóide (HLDG)', 'required');
        $this->form_validation->set_rules('grau_hldg', 'grau Hidrolipodistrofia Ginóide (HLDG)', 'required');
        $this->form_validation->set_rules('hldg_celluvision_estagio', 'Resultado do Celluvision (estágios)', 'required');
        $this->form_validation->set_rules('local_hldg', 'local Hidrolipodistrofia Ginóide (HLDG)', 'min_length[3]', 'required');
        $this->form_validation->set_rules('coloracao_hldg', 'coloração Hidrolipodistrofia Ginóide (HLDG)', 'min_length[3]');        
        $this->form_validation->set_rules('temperatura_hldg', 'temperatura Hidrolipodistrofia Ginóide (HLDG)', 'required');
        $this->form_validation->set_rules('presenca_dor_palpacao', 'Presença de dor à palpação:', 'required');
        $this->form_validation->set_rules('observacoes_hldg', 'observações Hidrolipodistrofia Ginóide (HLDG)', 'min_length[3]');
        
        $this->form_validation->set_rules('edema_teste_cacifo', 'Teste do cacifo', 'required');
        $this->form_validation->set_rules('sensacao_peso_cansaco_mmii', 'Sensação de Peso/ Cansaço em MMII', 'required');        
        $this->form_validation->set_rules('observacoes_edema', 'Observações edema', 'min_length[3]');

        $this->form_validation->set_rules('lipodistrofia_gordura', 'gordura Lipodistrofia', 'required');
        $this->form_validation->set_rules('lipodistrofia_distribuicao_gordura', 'lipodistrofia distribuição da gordura', 'required');
        $this->form_validation->set_rules('lipodistrofia_localizacao', 'localização lipodistrofia');

        $this->form_validation->set_rules('flacidez_tissular', 'flacidez tissular', 'required');
        $this->form_validation->set_rules('flacidez_tissular_localizacao', 'local flacidez tissular');
        $this->form_validation->set_rules('flacidez_muscular', 'flacidez muscular', 'required');
        $this->form_validation->set_rules('flacidez_muscular_local', 'local flacidez muscular');
        
        $this->form_validation->set_rules('estria_cor', 'cor da estria', 'required');
        $this->form_validation->set_rules('estria_largura', 'largura da estria', 'required');
        $this->form_validation->set_rules('estria_tipo', 'tipo de estria', 'required');
        $this->form_validation->set_rules('estria_quantidade', 'Quantidade', 'required');
        $this->form_validation->set_rules('estria_regiao', 'região da estria', 'required');
        
        $this->form_validation->set_rules('microvasos_tipo', 'tipo microvasos', 'required');
        $this->form_validation->set_rules('doenca_controlada_diabeticos', '(Se Diabético) Os exames estão em dia e a doença controlada?');
        $this->form_validation->set_rules('microvasos_historico_familiar', 'Histórico familiar de microvasos?', 'required');
        $this->form_validation->set_rules('febre_recentemente', 'Teve febre recentemente?', 'required');
        $this->form_validation->set_rules('febre_recentemente_quando', 'quando Teve febre?', 'min_length[3]');
        $this->form_validation->set_rules('tempo_pe_sentado', 'Fica muito tempo em pé ou sentado?', 'required');
        $this->form_validation->set_rules('tempo_pe_sentado_frequencia', 'Frequência');
        
        $this->form_validation->set_rules('pratica_exercicios_atividades_alto_impacto', 'Pratica exercícios físicos / atividades de alto impacto que podem provocar traumas?', 'required');
        $this->form_validation->set_rules('sobrepeso', 'sobrepeso', 'required');
        $this->form_validation->set_rules('obesidade', 'obesidade', 'required');
        $this->form_validation->set_rules('proximo_fontes_calor', 'Fica exposto a fontes de calor?', 'required');
        
        $this->form_validation->set_rules('alteracao_postural_ombros', 'alteração postural: ombros');
        $this->form_validation->set_rules('alteracao_postural_coluna', 'alteração postural: coluna');
        $this->form_validation->set_rules('hernia_pontos_dor', 'Hérnia ou pontos de dor?');
        $this->form_validation->set_rules('hernia_pontos_dor_onde', 'Onde?', 'required');
        $this->form_validation->set_rules('observacoes_alteracao_postural', 'observações alteração postural', 'required');
         
        $this->form_validation->set_rules('antropometria_biotipo', 'biotipo antropometria', 'required');
        $this->form_validation->set_rules('estatura', 'estatura', 'required');
        $this->form_validation->set_rules('peso_atual', 'peso atual', 'required');
        $this->form_validation->set_rules('imc', 'imc', 'required');
        $this->form_validation->set_rules('peso_desejado', 'peso desejado', 'required');
        $this->form_validation->set_rules('classificacao', 'classificação', 'required');
        $this->form_validation->set_rules('observacoes_antropometria', 'observações antropometria');
        
        $this->form_validation->set_rules('pgc', 'Percentual de gordura corporal', 'required');
        $this->form_validation->set_rules('massa_magra', 'massa magra', 'required');
        $this->form_validation->set_rules('peso_massa_gordura', 'Peso massa gordura', 'required');
        $this->form_validation->set_rules('percentual_agua_corporal', 'Percentual de água corporal', 'required');
        $this->form_validation->set_rules('relacao_cintura_quadril', 'Relação Cintura/ Quadril', 'required');
        $this->form_validation->set_rules('tmb', 'TMB', 'required');

        $this->form_validation->set_rules('observacoes_gerais', 'observações gerais');
        $this->form_validation->set_rules('tratamento_proposto', 'tratamento proposto');
        $this->form_validation->set_rules('observacoes_tratamento', 'observações tratamento');
        
        $this->form_validation->set_rules('braco_d', 'Braço D', 'required');
        $this->form_validation->set_rules('braco_e', 'Braço E', 'required');
        $this->form_validation->set_rules('abd_superior', 'abd superior', 'required');
        $this->form_validation->set_rules('cintura', 'cintura', 'required');
        $this->form_validation->set_rules('abd_inferior', 'abd inferior', 'required');
        $this->form_validation->set_rules('quadril', 'quadril', 'required');
        $this->form_validation->set_rules('coxa_sup_d', 'coxa superior D', 'required');
        $this->form_validation->set_rules('coxa_sup_e', 'coxa superior E', 'required');
        $this->form_validation->set_rules('coxa_inf_d', 'coxa inferior D', 'required');
        $this->form_validation->set_rules('coxa_inf_d', 'coxa inferior D', 'required');
        $this->form_validation->set_rules('ombro', 'ombro', 'required');
        $this->form_validation->set_rules('panturrilha', 'panturrilha', 'required');
        
        $this->form_validation->set_rules('coxa_m', 'coxa (M)', 'required');    
        $this->form_validation->set_rules('triceps_biceps', 'triceps / biceps', 'required');
        $this->form_validation->set_rules('peitoral', 'peitoral', 'required');
        $this->form_validation->set_rules('subs_axilar_media', 'subs axilar media', 'required');
        $this->form_validation->set_rules('abd_vertical', 'abd vertical', 'required');
        $this->form_validation->set_rules('abd_horizontal', 'abd horizontal', 'required');
        $this->form_validation->set_rules('supra_iliaca', 'supra iliaca', 'required');
        $this->form_validation->set_rules('paturrilha_pregas', 'paturrilha pregas', 'required');

        if($this->form_validation->run() == FALSE){
            $this->index();
        }else{
            $id_cliente =                                       $this->input->post('id_cliente');
            $nome_cliente =                                     $this->input->post('nome_cliente');
            $id_profissional =                                  $this->input->post('id_profissional');
            $nome_profissional =                                $this->input->post('nome_profissional');
            $tratamento_corporal_anterior =                     $this->input->post('tratamento_corporal_anterior');
            $tratamento_corporal_anterior_quais =               $this->input->post('tratamento_corporal_anterior_quais');
            $resultado_skinup =                                 $this->input->post('resultado_skinup');
            $oleosidade_colo =                                  $this->input->post('oleosidade_colo');
            $oleosidade_braco =                                 $this->input->post('oleosidade_braco');
            $oleosidade_coxa =                                  $this->input->post('oleosidade_coxa');
            $umidade_colo =                                     $this->input->post('umidade_colo');
            $umidade_braco =                                    $this->input->post('umidade_braco');
            $umidade_coxa =                                     $this->input->post('umidade_coxa');
            $elasticidade_colo =                                $this->input->post('elasticidade_colo');
            $elasticidade_braco =                               $this->input->post('elasticidade_braco');
            $elasticidade_coxa =                                $this->input->post('elasticidade_coxa');
            $estado_cutaneo =                                   $this->input->post('estado_cutaneo');
            $textura =                                          $this->input->post('textura');
            $lesoes_pele =                                      $this->input->post('lesoes_pele');
            $lesoes_pele_outro =                                $this->input->post('lesoes_pele_outro');
            $cicatriz =                                         $this->input->post('cicatriz');
            $cicatriz_localizacao =                             $this->input->post('cicatriz_localizacao');
            $tipo_hldg =                                        $this->input->post('tipo_hldg');
            $grau_hldg =                                        $this->input->post('grau_hldg');
            $hldg_celluvision_estagio =                         $this->input->post('hldg_celluvision_estagio');
            $local_hldg =                                       $this->input->post('local_hldg');
            $coloracao_hldg =                                   $this->input->post('coloracao_hldg');
            $temperatura_hldg =                                 $this->input->post('temperatura_hldg');
            $presenca_dor_palpacao =                            $this->input->post('presenca_dor_palpacao');
            $edema_teste_cacifo =                               $this->input->post('edema_teste_cacifo');
            $sensacao_peso_cansaco_mmii =                       $this->input->post('sensacao_peso_cansaco_mmii');
            $observacoes_edema =                                $this->input->post('observacoes_edema');
            $lipodistrofia_gordura =                            $this->input->post('lipodistrofia_gordura');
            $lipodistrofia_distribuicao_gordura =               $this->input->post('lipodistrofia_distribuicao_gordura');
            $lipodistrofia_localizacao =                        $this->input->post('lipodistrofia_localizacao');
            $observacoes_lipodistrofia =                        $this->input->post('observacoes_lipodistrofia');
            $flacidez_tissular =                                $this->input->post('flacidez_tissular');
            $flacidez_tissular_localizacao =                    $this->input->post('flacidez_tissular_localizacao');
            $flacidez_muscular =                                $this->input->post('flacidez_muscular');
            $flacidez_muscular_localizacao =                    $this->input->post('flacidez_muscular_localizacao');
            $estria_cor =                                       $this->input->post('estria_cor');
            $estria_largura =                                   $this->input->post('estria_largura');
            $estria_tipo =                                      $this->input->post('estria_tipo');
            $estria_regiao =                                    $this->input->post('estria_regiao');
            $microvasos_tipo =                                  $this->input->post('microvasos_regiao');
            $doenca_controlada_diabeticos =                     $this->input->post('doenca_controlada_diabeticos');
            $microvasos_historico_familiar =                    $this->input->post('microvasos_historico_familiar');
            $febre_recentemente =                               $this->input->post('febre_recentemente');
            $febre_recentemente_quando =                        $this->input->post('febre_recentemente_quando');
            $tempo_pe_sentado =                                 $this->input->post('tempo_pe_sentado');
            $tempo_pe_sentado_frequencia =                      $this->input->post('tempo_pe_sentado_frequencia');
            $pratica_exercicios_atividades_alto_impacto =       $this->input->post('pratica_exercicios_atividades_alto_impacto');
            $sobrepeso =                                        $this->input->post('sobrepeso');
            $obesidade =                                        $this->input->post('obesidade');
            $proximo_fontes_calor =                             $this->input->post('proximo_fontes_calor');
            $alteracao_postural_ombros =                        $this->input->post('alteracao_postural_ombros');
            $alteracao_postural_coluna =                        $this->input->post('alteracao_postural_coluna');
            $hernia_pontos_dor =                                $this->input->post('hernia_pontos_dor');
            $hernia_pontos_dor_onde =                           $this->input->post('hernia_pontos_dor_onde');
            $observacoes_alteracao_postural =                   $this->input->post('observacoes_alteracao_postural');
            $antropometria_biotipo =                            $this->input->post('antropometria_biotipo');
            $estatura =                                         $this->input->post('estatura');
            $peso_atual =                                       $this->input->post('peso_atual');
            $imc =                                              $this->input->post('imc');
            $peso_desejado =                                    $this->input->post('peso_desejado');
            $classificacao =                                    $this->input->post('classificacao');
            $observacoes_antropometria =                        $this->input->post('observacoes_antropometria');
            $pgc =                                              $this->input->post('pgc');
            $massa_magra =                                      $this->input->post('massa_magra');
            $peso_massa_gordura =                               $this->input->post('peso_massa_gordura');
            $percentual_agua_corporal =                         $this->input->post('percentual_agua_corporal');
            $relacao_cintura_quadril =                          $this->input->post('relacao_cintura_quadril');
            $tmb =                                              $this->input->post('tmb');
            $observacoes_gerais =                               $this->input->post('observacoes_gerais');
            $tratamento_proposto =                              $this->input->post('tratamento_proposto');
            $observacoes_tratamento =                           $this->input->post('observacoes_tratamento');
            $braco_d =                                          $this->input->post('braco_d');
            $braco_e =                                          $this->input->post('braco_e');
            $abd_superior =                                     $this->input->post('abd_superior');
            $cintura =                                          $this->input->post('cintura');
            $quadril =                                          $this->input->post('quadril');
            $coxa_sup_d =                                       $this->input->post('coxa_sup_d');
            $coxa_sup_e =                                       $this->input->post('coxa_sup_e');
            $coxa_inf_d =                                       $this->input->post('coxa_inf_d');
            $coxa_inf_e =                                       $this->input->post('coxa_inf_e');
            $ombro =                                            $this->input->post('ombro');
            $panturrilha =                                      $this->input->post('panturrilha');
            $coxa_m =                                           $this->input->post('coxa_m');
            $triceps_biceps =                                   $this->input->post('triceps_biceps');
            $peitoral =                                         $this->input->post('peitoral');
            $subs_axilar_media =                                $this->input->post('subs_axilar_media');
            $abd_vertical =                                     $this->input->post('abd_vertical');
            $abd_horizontal =                                   $this->input->post('abd_horizontal');
            $supra_iliaca =                                     $this->input->post('supra_iliaca');
            $paturrilha_pregas =                                $this->input->post('paturrilha_pregas');

            if($this->modelavaliacaocorporal->adicionar($id_cliente,$nome_cliente,$id_profissional,$nome_profissional,$tratamento_corporal_anterior,$tratamento_corporal_anterior_quais,$resultado_skinup,$oleosidade_colo,$oleosidade_braco,$oleosidade_coxa,$umidade_colo,$umidade_braco,$umidade_coxa,$elasticidade_colo,$elasticidade_braco,$elasticidade_coxa,$estado_cutaneo,$textura,$lesoes_pele,$lesoes_pele_outro,$cicatriz,$cicatriz_localizacao,$tipo_hldg,$grau_hldg,$hldg_celluvision_estagio,$local_hldg,$coloracao_hldg,$temperatura_hldg,$presenca_dor_palpacao,$edema_teste_cacifo,$sensacao_peso_cansaco_mmii,$observacoes_edema,$lipodistrofia_gordura,$lipodistrofia_distribuicao_gordura,$lipodistrofia_localizacao,$observacoes_lipodistrofia,$flacidez_tissular,$flacidez_tissular_localizacao,$flacidez_muscular,$flacidez_muscular_localizacao,$estria_cor,$estria_largura,$estria_tipo,$estria_regiao,$microvasos_tipo,$doenca_controlada_diabeticos,$microvasos_historico_familiar,$febre_recentemente,$febre_recentemente_quando,$tempo_pe_sentado,$tempo_pe_sentado_frequencia,$pratica_exercicios_atividades_alto_impacto,$sobrepeso,$obesidade,$proximo_fontes_calor,$alteracao_postural_ombros,$alteracao_postural_coluna,$hernia_pontos_dor,$hernia_pontos_dor_onde,$observacoes_alteracao_postural,$antropometria_biotipo,$estatura,$peso_atual,$imc,$peso_desejado,$classificacao,$observacoes_antropometria,$pgc,$massa_magra,$peso_massa_gordura,$percentual_agua_corporal,$relacao_cintura_quadril,$tmb,$observacoes_gerais,$tratamento_proposto,$observacoes_tratamento,$braco_d,$braco_e,$abd_superior,$cintura,$quadril,$coxa_sup_d,$coxa_sup_e,$coxa_inf_d,$coxa_inf_e,$ombro,$panturrilha,$coxa_m,$triceps_biceps,$peitoral,$subs_axilar_media,$abd_vertical,$abd_horizontal,$supra_iliaca,$paturrilha_pregas)){
                redirect(base_url('listaravaliacaocorporal/'.$id_cliente.'/'.limpar($nome_cliente)));
            }else{
                echo "Houve um erro no sistema";
            }
        }
    }
}
