<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inseriranamnese extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        
        if(!$this->session->userdata('logado')){
            redirect(base_url('login'));
        }
        
        $this->load->model('anamnese_model','modelanamnese');
        $this->load->model('dadosclientes_model','modeldadosclientes');
        $this->load->model('usuarios_model', 'modelusuarios');
        
    }
    
	public function index($id_cliente, $slug=null)
	{
        $this->load->model('usuarios_model', 'modelusuarios');
        $dados['usuarios'] = $this->modelusuarios->listar_usuarios(); 
        if(!$this->session->userdata('logado')){
            redirect(base_url('login'));
        }
        $dados['inseriranamnese'] = $this->modelanamnese->ver_anamnese($id_cliente);
        $dados['dadosclientes'] = $this->modeldadosclientes->dados_clientes($id_cliente);
        $dados['qtvezes'] = $this->modelanamnese->lista_quantas_vezes();
        $dados['usuarios'] = $this->modelusuarios->listar_usuarios();
        $this->load->view('frontend/template/html-header', $dados);
        $this->load->view('frontend/template/topo');
        $this->load->view('frontend/template/aside');
		$this->load->view('frontend/inseriranamnese');
        $this->load->view('frontend/template/ajuda');
        $this->load->view('frontend/template/html-footer');
	}
    
    public function inserir(){
        if(!$this->session->userdata('logado')){
            redirect(base_url('login'));
        }
        $this->load->library('form_validation');
        $this->load->model('anamnese_model','modelanamnese');
        
        //Hábitos diários
        
        $this->form_validation->set_rules('id_cliente', 'ID cliente');
        $this->form_validation->set_rules('nome_cliente', 'Nome');
        $this->form_validation->set_rules('id_profissional', 'ID profissional');
        $this->form_validation->set_rules('nome_profissional', 'Usuário');
        
        $this->form_validation->set_rules('tratamento_estetico', 'Tratamento estético anterior', 'required');
        $this->form_validation->set_rules('tratamento_estetico_qual', 'Qual tratamento estético', 'min_length[3]');

        $this->form_validation->set_rules('lentes_contato', 'Usa lentes de contato', 'required');

        $this->form_validation->set_rules('utiliza_cosmetico', 'Utiliza cosméticos', 'required');
        $this->form_validation->set_rules('utiliza_cosmetico_qual', 'Qual cosmético', 'min_length[3]');

        $this->form_validation->set_rules('exposicao_sol', 'Exposição ao sol', 'required');
        $this->form_validation->set_rules('exposicao_sol_frequencia', 'Frequência da exposição ao sol', 'min_length[3]');

        $this->form_validation->set_rules('usa_protetor_solar', 'Usa Protetor Solar', 'required');
        $this->form_validation->set_rules('usa_protetor_solar_qual', 'Qual Protetor', 'min_length[3]');

        $this->form_validation->set_rules('tabagismo', 'Tabagismo', 'required');
        $this->form_validation->set_rules('quantidade_cigarros_dia', 'Quantidade de cigarros/dia', 'min_length[3]');

        $this->form_validation->set_rules('ingere_bebida_alcoolica', 'Ingere bebida alcoólica', 'required');
        $this->form_validation->set_rules('ingere_bebida_alcoolica_frequencia', 'Frequência', 'min_length[3]');

        $this->form_validation->set_rules('id_qt_vezes', 'Funcionamento intestinal', 'required');

        $this->form_validation->set_rules('qualidade_sono', 'Qualidade do sono', 'required');
        $this->form_validation->set_rules('quantas_horas_sono_noite', 'Quantas horas de sono / noite', 'required|min_length[3]');

        $this->form_validation->set_rules('atividade_fisica', 'Pratica Atividade física', 'required');
        $this->form_validation->set_rules('atividade_fisica_tipo', 'Tipo atividade física', 'min_length[3]');
        $this->form_validation->set_rules('atividade_fisica_frequencia', 'Frequência atividade física ', 'min_length[3]');

        $this->form_validation->set_rules('anticoncepcional', 'Usa anticoncepcional', 'required');
        $this->form_validation->set_rules('anticoncepcional_qual', 'Qual anticoncepcional', 'min_length[3]');

        $this->form_validation->set_rules('data_primeira_menstruacao', 'Data da primeira menstruação', 'min_length[3]');
        $this->form_validation->set_rules('data_ultima_menstruacao', 'Data da última menstruação', 'min_length[3]');

        $this->form_validation->set_rules('gestacoes', 'Gestações', 'required');
        $this->form_validation->set_rules('gestacoes_quantas', 'Quantas gestações');
        $this->form_validation->set_rules('gestacoes_ha_quanto_tempo', 'Há quanto tempo a gestação');

        $this->form_validation->set_rules('lactante', 'Lactante', 'required');

        $this->form_validation->set_rules('observacoes_habitos', 'Observações');

        $this->form_validation->set_rules('principais_queixas', 'Principais queixas');
        //Fim hábitos diários

        //Histórico clínico
        $this->form_validation->set_rules('tratamento_medico_atual', 'Tratamento médico atual', 'required');
        $this->form_validation->set_rules('medicamentos_em_uso', 'Medicamentos em uso', 'min_length[3]');

        $this->form_validation->set_rules('herpes', 'Tem ou já teve Herpes', 'required');

        $this->form_validation->set_rules('alergia', 'Alergias', 'required');
        $this->form_validation->set_rules('alergias_qual', 'Qual alergia', 'min_length[3]');

        $this->form_validation->set_rules('queloides', 'Possui queloides', 'required');

        $this->form_validation->set_rules('doenca_cardiaca', 'Doenças Cardíacas', 'required');
        $this->form_validation->set_rules('doenca_cardiaca_qual', 'Qual doença cardiaca', 'min_length[3]');

        $this->form_validation->set_rules('marca_passo', 'Portador de marca-passo', 'required');

        $this->form_validation->set_rules('hipo_hipertensao_arterial', 'Hipo/Hipertensão arterial', 'required');

        $this->form_validation->set_rules('trombose', 'Dist. Circulatório (trombose)', 'required');
        $this->form_validation->set_rules('trombose_qual', 'Qual trombose', 'min_length[3]');

        $this->form_validation->set_rules('trombose', 'Dist. Circulatório (trombose)', 'required');
        $this->form_validation->set_rules('trombose_qual', 'Qual trombose', 'min_length[3]');

        $this->form_validation->set_rules('usa_anticoagulante', 'Faz uso de anticoagulantes', 'required');
        $this->form_validation->set_rules('usa_anticoagulante_qual', 'Qual anticoagulantes', 'min_length[3]');

        $this->form_validation->set_rules('doenca_auto_imune', 'Doença Auto-imunes', 'required');
        $this->form_validation->set_rules('doenca_auto_imune_qual', 'Qual doença auto-imune', 'min_length[3]');

        $this->form_validation->set_rules('disturbio_renal', 'Distúrbio renal', 'required');
        $this->form_validation->set_rules('disturbio_renal_qual', 'Qual distúrbio renal', 'min_length[3]');

        $this->form_validation->set_rules('disturbio_hormonal', 'Distúrbio hormonal', 'required');
        $this->form_validation->set_rules('disturbio_hormonal_qual', 'Qual distúrbio hormonal', 'min_length[3]');

        $this->form_validation->set_rules('ciclo_menstrual_regular', 'Distúrbio hormonal', 'required');

        $this->form_validation->set_rules('disturbio_gastrointestinal', 'Distúrbio gastrointestinal', 'required');
        $this->form_validation->set_rules('disturbio_gastrointestinal_qual', 'Qual distúrbio gastrointestinal', 'min_length[3]');

        $this->form_validation->set_rules('disturbio_pulmonar_respiratorio', 'Dist. Pulmorar/respiratório', 'required');
        $this->form_validation->set_rules('disturbio_pulmonar_respiratorio_qual', 'Qual dist. pulmorar/respiratório', 'min_length[3]');

        $this->form_validation->set_rules('disturbio_hepatico', 'Distúrbio Hepático', 'required');
        $this->form_validation->set_rules('disturbio_hepatico_qual', 'Qual Distúrbio Hepático', 'min_length[3]');

        $this->form_validation->set_rules('epilepsia_convulsoes', 'Epilepsia/Convulsões', 'required');
        $this->form_validation->set_rules('epilepsia_convulsoes_frequencia', 'Frequência Epilepsia/Convulsões', 'min_length[3]');

        $this->form_validation->set_rules('alteracao_psicologica_psiquiatrica', 'Alt. Psicológicas/Psiquiátricas', 'required');
        $this->form_validation->set_rules('alteracao_psicologica_psiquiatrica_qual', 'Qual Alt. Psicológicas/Psiquiátricas', 'min_length[3]');

        $this->form_validation->set_rules('tem_ou_ja_teve_cancer', 'Tem ou já teve Câncer', 'required');
        $this->form_validation->set_rules('tem_ou_ja_teve_cancer_quando', 'Quando teve câncer', 'min_length[3]');

        $this->form_validation->set_rules('tem_ou_ja_teve_cancer', 'Tem ou já teve Câncer', 'required');
        $this->form_validation->set_rules('tem_ou_ja_teve_cancer_quando', 'Quando teve câncer', 'min_length[3]');

        $this->form_validation->set_rules('diabetes', 'Diabetes', 'required');
        $this->form_validation->set_rules('diabetes_tipo', 'Tipo diabetes', 'min_length[3]');

        $this->form_validation->set_rules('doenca_familia', 'Doenças na família', 'required');
        $this->form_validation->set_rules('doenca_familia_qual', 'Qual doença na família', 'min_length[3]');
        //Fim histórico clínico

        //Tratamento da medicina estética e cirúrgica
        $this->form_validation->set_rules('implante_dentario', 'Implante dentário', 'required');
        $this->form_validation->set_rules('implante_dentario_qual', 'Qual Implante dentário', 'min_length[3]');

        $this->form_validation->set_rules('implante_metalico', 'Implante metálico', 'required');
        $this->form_validation->set_rules('implante_metalico_qual', 'Qual Implante metálico', 'min_length[3]');

        $this->form_validation->set_rules('intrauterino', 'Intrauterino', 'required');
        $this->form_validation->set_rules('intrauterino_qual', 'Qual Intrauterino', 'min_length[3]');

        $this->form_validation->set_rules('tratamento_dermatologico_estetico_anterior', 'Trat. Dermat./Estético antes', 'required');
        $this->form_validation->set_rules('tratamento_dermatologico_estetico_anterior_qual', 'Qual Trat. Dermat./Estético', 'min_length[3]');

        $this->form_validation->set_rules('uso_acido_peeling', 'Já fez/faz uso de ácidos/peelings', 'required');
        $this->form_validation->set_rules('uso_acido_peeling_qual', 'Quais ácidos / peeling', 'min_length[3]');
        $this->form_validation->set_rules('uso_acido_peeling_quando', 'Quando usou ácidos / peeling', 'min_length[3]');

        $this->form_validation->set_rules('cirurgia_plastica_estetica', 'Cirurgia Plástica Estética', 'required');
        $this->form_validation->set_rules('cirurgia_plastica_estetica_qual', 'Qual Cirurgia Plástica Estética', 'min_length[3]');

        $this->form_validation->set_rules('observacoes_tratamento', 'Observações');

        if($this->form_validation->run() == FALSE){
            $this->index();
        }else{
            $id_cliente =                                       $this->input->post('id_cliente');
            $nome_cliente =                                     $this->input->post('nome_cliente');
            $id_profissional =                                  $this->input->post('id_profissional');
            $nome_profissional =                                $this->input->post('nome_profissional');
            $tratamento_estetico =                              $this->input->post('tratamento_estetico');
            $tratamento_estetico_qual =                         $this->input->post('tratamento_estetico_qual');
            $lentes_contato =                                   $this->input->post('lentes_contato');
            $utiliza_cosmetico =                                $this->input->post('utiliza_cosmetico');
            $utiliza_cosmetico_qual =                           $this->input->post('utiliza_cosmetico_qual');
            $exposicao_sol =                                    $this->input->post('exposicao_sol');
            $exposicao_sol_frequencia =                         $this->input->post('exposicao_sol_frequencia');
            $usa_protetor_solar =                               $this->input->post('usa_protetor_solar');
            $usa_protetor_solar_qual =                          $this->input->post('usa_protetor_solar_qual');
            $tabagismo =                                        $this->input->post('tabagismo');
            $quantidade_cigarros_dia =                          $this->input->post('quantidade_cigarros_dia');
            $ingere_bebida_alcoolica =                          $this->input->post('ingere_bebida_alcoolica');
            $ingere_bebida_alcoolica_frequencia =               $this->input->post('ingere_bebida_alcoolica_frequencia');
            $id_qt_vezes =                                      $this->input->post('id_qt_vezes');
            $qualidade_sono =                                   $this->input->post('qualidade_sono');
            $quantas_horas_sono_noite =                         $this->input->post('quantas_horas_sono_noite');
            $atividade_fisica =                                 $this->input->post('atividade_fisica');
            $atividade_fisica_tipo =                            $this->input->post('atividade_fisica_tipo');
            $atividade_fisica_frequencia =                      $this->input->post('atividade_fisica_frequencia');
            $anticoncepcional =                                 $this->input->post('anticoncepcional');
            $anticoncepcional_qual =                            $this->input->post('anticoncepcional_qual'); 
            $data_primeira_menstruacao =                        $this->input->post('data_primeira_menstruacao'); 
            $data_ultima_menstruacao =                          $this->input->post('data_ultima_menstruacao'); 
            $gestacoes =                                        $this->input->post('gestacoes'); 
            $gestacoes_quantas =                                $this->input->post('gestacoes_quantas'); 
            $gestacoes_ha_quanto_tempo =                        $this->input->post('gestacoes_ha_quanto_tempo'); 
            $lactante =                                         $this->input->post('lactante'); 
            $observacoes_habitos =                              $this->input->post('observacoes_habitos'); 
            $principais_queixas =                               $this->input->post('principais_queixas'); 
            $tratamento_medico_atual =                          $this->input->post('tratamento_medico_atual'); 
            $medicamentos_em_uso =                              $this->input->post('medicamentos_em_uso'); 
            $herpes =                                           $this->input->post('herpes'); 
            $alergia =                                          $this->input->post('alergia'); 
            $alergia_qual =                                     $this->input->post('alergia_qual'); 
            $queloides =                                        $this->input->post('queloides'); 
            $doenca_cardiaca =                                  $this->input->post('doenca_cardiaca'); 
            $doencas_cardiacas_quais =                          $this->input->post('doencas_cardiacas_quais'); 
            $marca_passo =                                      $this->input->post('marca_passo'); 
            $hipo_hipertensao_arterial =                        $this->input->post('hipo_hipertensao_arterial'); 
            $trombose =                                         $this->input->post('trombose'); 
            $trombose_qual =                                    $this->input->post('trombose_qual'); 
            $usa_anticoagulante =                               $this->input->post('usa_anticoagulante'); 
            $usa_anticoagulante_qual =                          $this->input->post('usa_anticoagulante_qual'); 
            $doenca_auto_imune =                                $this->input->post('doenca_auto_imune'); 
            $doenca_auto_imune_qual =                           $this->input->post('doenca_auto_imune_qual'); 
            $disturbio_renal =                                  $this->input->post('disturbio_renal'); 
            $disturbio_renal_qual =                             $this->input->post('disturbio_renal_qual'); 
            $disturbio_hormonal =                               $this->input->post('disturbio_hormonal'); 
            $disturbio_hormonal_qual =                          $this->input->post('disturbio_hormonal_qual'); 
            $ciclo_menstrual_regular =                          $this->input->post('ciclo_menstrual_regular'); 
            $disturbio_gastrointestinal =                       $this->input->post('disturbio_gastrointestinal'); 
            $disturbio_gastrointestinal_qual =                  $this->input->post('disturbio_gastrointestinal_qual'); 
            $disturbio_pulmonar_respiratorio =                  $this->input->post('disturbio_pulmonar_respiratorio'); 
            $disturbio_pulmonar_respiratorio_qual =             $this->input->post('disturbio_pulmonar_respiratorio_qual'); 
            $disturbio_hepatico =                               $this->input->post('disturbio_hepatico'); 
            $disturbio_hepatico_qual =                          $this->input->post('disturbio_hepatico_qual'); 
            $epilepsia_convulsoes =                             $this->input->post('epilepsia_convulsoes'); 
            $epilepsia_convulsoes_frequencia =                  $this->input->post('epilepsia_convulsoes_frequencia'); 
            $alteracao_psicologica_psiquiatrica =               $this->input->post('alteracao_psicologica_psiquiatrica');         
            $alteracao_psicologica_psiquiatrica_qual =          $this->input->post('alteracao_psicologica_psiquiatrica_qual'); 
            $tem_ou_ja_teve_cancer =                            $this->input->post('tem_ou_ja_teve_cancer'); 
            $tem_ou_ja_teve_cancer_quando =                     $this->input->post('tem_ou_ja_teve_cancer_quando'); 
            $diabetes =                                         $this->input->post('diabetes'); 
            $diabetes_tipo =                                    $this->input->post('diabetes_tipo'); 
            $doenca_familia =                                   $this->input->post('doenca_familia'); 
            $doenca_familia_qual =                              $this->input->post('doenca_familia_qual'); 
            $implante_dentario =                                $this->input->post('implante_dentario'); 
            $implante_dentario_qual =                           $this->input->post('implante_dentario_qual'); 
            $implante_metalico =                                $this->input->post('implante_metalico'); 
            $implante_metalico_qual =                           $this->input->post('implante_metalico_qual'); 
            $intrauterino =                                     $this->input->post('intrauterino'); 
            $intrauterino_qual =                                $this->input->post('intrauterino_qual'); 
            $tratamento_dermatologico_estetico_anterior =       $this->input->post('tratamento_dermatologico_estetico_anterior'); 
            $tratamento_dermatologico_estetico_anterior_qual =  $this->input->post('tratamento_dermatologico_estetico_anterior_qual'); 
            $uso_acido_peeling =                                $this->input->post('uso_acido_peeling'); 
            $uso_acido_peeling_quando =                         $this->input->post('uso_acido_peeling_quando'); 
            $uso_acido_peeling_qual =                           $this->input->post('uso_acido_peeling_qual'); 
            $cirurgia_plastica_estetica =                       $this->input->post('cirurgia_plastica_estetica'); 
            $cirurgia_plastica_estetica_qual =                  $this->input->post('cirurgia_plastica_estetica_qual'); 
            $observacoes_tratamento =                           $this->input->post('observacoes_tratamento'); 

            if($this->modelanamnese->adicionar($id_cliente,$nome_cliente,$id_profissional,$nome_profissional,$tratamento_estetico,$tratamento_estetico_qual,$lentes_contato,$utiliza_cosmetico,$utiliza_cosmetico_qual,$exposicao_sol,$exposicao_sol_frequencia,$usa_protetor_solar,$usa_protetor_solar_qual,$tabagismo,$quantidade_cigarros_dia,$ingere_bebida_alcoolica,$ingere_bebida_alcoolica_frequencia,$id_qt_vezes,$qualidade_sono,$quantas_horas_sono_noite,$atividade_fisica,$atividade_fisica_tipo,$atividade_fisica_frequencia,$anticoncepcional,$anticoncepcional_qual,$data_primeira_menstruacao,$data_ultima_menstruacao,$gestacoes,$gestacoes_quantas,$gestacoes_ha_quanto_tempo,$lactante,$observacoes_habitos,$principais_queixas,$tratamento_medico_atual,$medicamentos_em_uso,$herpes,$alergia,$alergia_qual,$queloides,$doenca_cardiaca,$doencas_cardiacas_quais,$marca_passo,$hipo_hipertensao_arterial,$trombose,$trombose_qual,$usa_anticoagulante,$usa_anticoagulante_qual,$doenca_auto_imune,$doenca_auto_imune_qual,$disturbio_renal,$disturbio_renal_qual,$disturbio_hormonal,$disturbio_hormonal_qual,$ciclo_menstrual_regular,$disturbio_gastrointestinal,$disturbio_gastrointestinal_qual,$disturbio_pulmonar_respiratorio,$disturbio_pulmonar_respiratorio_qual,$disturbio_hepatico,$disturbio_hepatico_qual,$epilepsia_convulsoes,$epilepsia_convulsoes_frequencia,$alteracao_psicologica_psiquiatrica,$alteracao_psicologica_psiquiatrica_qual,$tem_ou_ja_teve_cancer,$tem_ou_ja_teve_cancer_quando,$diabetes,$diabetes_tipo,$doenca_familia,$doenca_familia_qual,$implante_dentario,$implante_dentario_qual,$implante_metalico,$implante_metalico_qual,$intrauterino,$intrauterino_qual,$tratamento_dermatologico_estetico_anterior,$tratamento_dermatologico_estetico_anterior_qual,$uso_acido_peeling,$uso_acido_peeling_quando,$uso_acido_peeling_qual,$cirurgia_plastica_estetica,$cirurgia_plastica_estetica_qual,$observacoes_tratamento)){
                redirect(base_url('listaranamneses/'.$id_cliente.'/'.limpar($nome_cliente)));
            }else{
                echo "Houve um erro no sistema";
            }
        }
    }
}
