<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anamnese_model extends CI_Model {
    
    public $id_cliente;
    public $nome_cliente;
    public $id_profissional;
    public $nome_profissional;
    public $id_ficha_anamnese;
    public $data_inclusao;
    public $tratamento_estetico_qual;
    public $lentes_contato;
    public $utiliza_cosmetico;
    public $utiliza_cosmetico_qual;
    public $exposicao_sol;
    public $exposicao_sol_frequencia;
    public $usa_protetor_solar;
    public $usa_protetor_solar_qual;
    public $tabagismo;
    public $quantidade_cigarros_dia;
    public $ingere_bebida_alcoolica;
    public $ingere_bebida_alcoolica_frequencia;
    public $id_qt_vezes;
    public $qualidade_sono;
    public $quantas_horas_sono_noite;
    public $atividade_fisica;
    public $atividade_fisica_tipo;
    public $atividade_fisica_frequencia;
    public $publicanticoncepcional;
    public $anticoncepcional_qual;
    public $data_primeira_menstruacao;
    public $data_ultima_menstruacao;
    public $gestacoes;
    public $publicgestacoes_quantas;
    public $gestacoes_ha_quanto_tempo;
    public $lactante;
    public $observacoes_habitos;
    public $principais_queixas;
    public $publictratamento_medico_atual;
    public $medicamentos_em_uso;
    public $herpes;
    public $alergia;
    public $alergia_qual;
    public $queloides;
    public $doenca_cardica;
    public $doencas_cardiacas_quais;
    public $marca_passo;
    public $hipo_hipertensao_arterial;
    public $trombose;
    public $trombose_qual;
    public $usa_anticoagulante;
    public $usa_anticoagulante_qual;
    public $doenca_auto_imune;
    public $doenca_auto_imune_qual;
    public $disturbio_renal;
    public $disturbio_renal_qual;
    public $disturbio_hormonal;
    public $disturbio_hormonal_qual;
    public $ciclo_menstrual_regular;
    public $disturbio_gastrointestinal;
    public $disturbio_gastrointestinal_qual;
    public $disturbio_pulmonar_respiratorio;
    public $disturbio_pulmonar_respiratorio_qual;
    public $disturbio_hepatico;
    public $disturbio_hepatico_qual;
    public $epilepsia_convulsoes;
    public $epilepsia_convulsoes_frequencia;
    public $alteracao_psicologica_psiquiatrica;
    public $alteracao_psicologica_psiquiatrica_qual;
    public $tem_ou_ja_teve_cancer;
    public $tem_ou_ja_teve_cancer_quando;
    public $diabetes;
    public $diabetes_tipo;
    public $doenca_familia;
    public $doenca_familia_qual;
    public $implante_dentario;
    public $implante_dentario_qual;
    public $implante_metalico;
    public $implante_metalico_qual;
    public $intrauterino;
    public $intrauterino_qual;
    public $tratamento_dermatologico_estetico_anterior;
    public $tratamento_dermatologico_estetico_anterior_qual;
    public $uso_acido_peeling;
    public $uso_acido_peeling_quando;
    public $uso_acido_peeling_qual;
    public $cirurgia_plastica_estetica;
    public $cirurgia_plastica_estetica_qual;
    public $observacoes_tratamento;
    
	public function __construct(){
        parent::__construct();
    }
    
    public function ver_anamnese($id_cliente){
        $this->load->database();
        //$this->db->select('*, clientes.id_cliente, clientes.nome_cliente');
        $this->db->select('clientes.nome_cliente, clientes.id_cliente, profissional.nome_profissional, id_ficha_anamnese, data_inclusao, id_ficha_anamnese, DATE_FORMAT(data_inclusao, "%d/%m/%Y às %H:%i:%s") as data, tratamento_estetico_qual, lentes_contato, utiliza_cosmetico, utiliza_cosmetico_qual, exposicao_sol, exposicao_sol_frequencia, usa_protetor_solar, usa_protetor_solar_qual, tabagismo, quantidade_cigarros_dia, ingere_bebida_alcoolica, ingere_bebida_alcoolica_frequencia, id_qt_vezes, qualidade_sono, quantas_horas_sono_noite, atividade_fisica, atividade_fisica_tipo, atividade_fisica_frequencia, anticoncepcional, anticoncepcional_qual, data_primeira_menstruacao, data_ultima_menstruacao, gestacoes, gestacoes_quantas, gestacoes_ha_quanto_tempo, lactante, observacoes_habitos, principais_queixas, tratamento_medico_atual, medicamentos_em_uso, herpes, alergia, alergia_qual, queloides, doenca_cardiaca, doencas_cardiacas_quais, marca_passo, hipo_hipertensao_arterial, trombose, trombose_qual, usa_anticoagulante, usa_anticoagulante_qual, doenca_auto_imune, doenca_auto_imune_qual, disturbio_renal, disturbio_renal_qual, disturbio_hormonal, disturbio_hormonal_qual, ciclo_menstrual_regular, disturbio_gastrointestinal, disturbio_gastrointestinal_qual, disturbio_pulmonar_respiratorio, disturbio_pulmonar_respiratorio_qual, disturbio_hepatico, disturbio_hepatico_qual, epilepsia_convulsoes, epilepsia_convulsoes_frequencia, alteracao_psicologica_psiquiatrica, alteracao_psicologica_psiquiatrica_qual, tem_ou_ja_teve_cancer, tem_ou_ja_teve_cancer_quando, diabetes, diabetes_tipo, doenca_familia, doenca_familia_qual, implante_dentario, implante_dentario_qual, implante_metalico, implante_metalico_qual, intrauterino, intrauterino_qual, tratamento_dermatologico_estetico_anterior, tratamento_dermatologico_estetico_anterior_qual, uso_acido_peeling, uso_acido_peeling_quando, uso_acido_peeling_qual, cirurgia_plastica_estetica, cirurgia_plastica_estetica_qual, observacoes_tratamento');
        $this->db->from('ficha_anamnese');
        $this->db->join('clientes', 'ficha_anamnese.id_cliente = clientes.id_cliente');
        $this->db->join('profissional', 'ficha_anamnese.id_profissional = profissional.id_profissional');
        $this->db->where('clientes.id_cliente = '. $id_cliente);
        return $this->db->get()->result();
    }
    
    public function adicionar($id_cliente,$nome_cliente,$id_profissional,$nome_profissional,$tratamento_estetico,$tratamento_estetico_qual,$lentes_contato,$utiliza_cosmetico,$utiliza_cosmetico_qual,$exposicao_sol,$exposicao_sol_frequencia,$usa_protetor_solar,$usa_protetor_solar_qual,$tabagismo,$quantidade_cigarros_dia,$ingere_bebida_alcoolica,$ingere_bebida_alcoolica_frequencia,$id_qt_vezes,$qualidade_sono,$quantas_horas_sono_noite,$atividade_fisica,$atividade_fisica_tipo,$atividade_fisica_frequencia,$anticoncepcional,$anticoncepcional_qual,$data_primeira_menstruacao,$data_ultima_menstruacao,$gestacoes,$gestacoes_quantas,$gestacoes_ha_quanto_tempo,$lactante,$observacoes_habitos,$principais_queixas,$tratamento_medico_atual,$medicamentos_em_uso,$herpes,$alergia,$alergia_qual,$queloides,$doenca_cardiaca,$doencas_cardiacas_quais,$marca_passo,$hipo_hipertensao_arterial,$trombose,$trombose_qual,$usa_anticoagulante,$usa_anticoagulante_qual,$doenca_auto_imune,$doenca_auto_imune_qual,$disturbio_renal,$disturbio_renal_qual,$disturbio_hormonal,$disturbio_hormonal_qual,$ciclo_menstrual_regular,$disturbio_gastrointestinal,$disturbio_gastrointestinal_qual,$disturbio_pulmonar_respiratorio,$disturbio_pulmonar_respiratorio_qual,$disturbio_hepatico,$disturbio_hepatico_qual,$epilepsia_convulsoes, $epilepsia_convulsoes_frequencia, $alteracao_psicologica_psiquiatrica, $alteracao_psicologica_psiquiatrica_qual, $tem_ou_ja_teve_cancer, $tem_ou_ja_teve_cancer_quando,$diabetes, $diabetes_tipo,$doenca_familia,$doenca_familia_qual,$implante_dentario,$implante_dentario_qual,$implante_metalico,$implante_metalico_qual,$intrauterino,$intrauterino_qual,$tratamento_dermatologico_estetico_anterior,$tratamento_dermatologico_estetico_anterior_qual,$uso_acido_peeling,$uso_acido_peeling_quando,$uso_acido_peeling_qual,$cirurgia_plastica_estetica,$cirurgia_plastica_estetica_qual,$observacoes_tratamento, $id_cliente){
        
        $dados['id_cliente']=                                       $id_cliente;
        $dados['id_profissional']=                                  $id_profissional;
        //$dados['nome_cliente']=                                     $nome_cliente;
        $dados['tratamento_estetico']=                              $tratamento_estetico;
        $dados['tratamento_estetico_qual']=                         $tratamento_estetico_qual;
        $dados['lentes_contato']=                                   $lentes_contato;
        $dados['utiliza_cosmetico']=                                $utiliza_cosmetico;
        $dados['utiliza_cosmetico_qual']=                           $utiliza_cosmetico_qual;
        $dados['exposicao_sol']=                                    $exposicao_sol;
        $dados['usa_protetor_solar']=                               $usa_protetor_solar;
        $dados['usa_protetor_solar_qual']=                          $usa_protetor_solar_qual;
        $dados['tabagismo']=                                        $tabagismo;
        $dados['ingere_bebida_alcoolica']=                          $ingere_bebida_alcoolica;
        $dados['ingere_bebida_alcoolica_frequencia']=               $ingere_bebida_alcoolica_frequencia;
        $dados['id_qt_vezes']=                                      $id_qt_vezes;
        $dados['qualidade_sono']=                                   $qualidade_sono;
        $dados['quantas_horas_sono_noite']=                         $quantas_horas_sono_noite;
        $dados['atividade_fisica']=                                 $atividade_fisica;
        $dados['atividade_fisica_tipo']=                            $atividade_fisica_tipo;
        $dados['atividade_fisica_frequencia']=                      $atividade_fisica_frequencia;
        $dados['anticoncepcional']=                                 $anticoncepcional;
        $dados['anticoncepcional_qual']=                            $anticoncepcional_qual;
        $dados['data_primeira_menstruacao']=                        $data_primeira_menstruacao;
        $dados['data_ultima_menstruacao']=                          $data_ultima_menstruacao;
        $dados['gestacoes']=                                        $gestacoes;
        $dados['gestacoes_quantas']=                                $gestacoes_quantas;
        $dados['gestacoes_ha_quanto_tempo']=                        $gestacoes_ha_quanto_tempo;
        $dados['lactante']=                                         $lactante;
        $dados['observacoes_habitos']=                              $observacoes_habitos;
        $dados['principais_queixas']=                               $principais_queixas;

        $dados['tratamento_medico_atual']=                          $tratamento_medico_atual;
        $dados['medicamentos_em_uso']=                              $medicamentos_em_uso;
        $dados['herpes']=                                           $herpes;
        $dados['alergia']=                                          $alergia;
        $dados['alergia_qual']=                                     $alergia_qual;
        $dados['queloides']=                                        $queloides;
        $dados['doenca_cardiaca']=                                  $doenca_cardiaca;
        $dados['doencas_cardiacas_quais']=                          $doencas_cardiacas_quais;
        $dados['marca_passo']=                                      $marca_passo;
        $dados['hipo_hipertensao_arterial']=                        $hipo_hipertensao_arterial;
        $dados['trombose']=                                         $trombose;
        $dados['trombose_qual']=                                    $trombose_qual;
        $dados['usa_anticoagulante']=                               $usa_anticoagulante;
        $dados['usa_anticoagulante_qual']=                          $usa_anticoagulante_qual;
        $dados['doenca_auto_imune']=                                $doenca_auto_imune;
        $dados['doenca_auto_imune_qual']=                           $doenca_auto_imune_qual;
        $dados['disturbio_renal']=                                  $disturbio_renal;
        $dados['disturbio_renal_qual']=                             $disturbio_renal_qual;
        $dados['disturbio_hormonal']=                               $disturbio_hormonal;
        $dados['disturbio_hormonal_qual']=                          $disturbio_hormonal_qual;
        $dados['ciclo_menstrual_regular']=                          $ciclo_menstrual_regular;
        $dados['disturbio_gastrointestinal']=                       $disturbio_gastrointestinal;
        $dados['disturbio_gastrointestinal_qual']=                  $disturbio_gastrointestinal_qual;
        $dados['disturbio_pulmonar_respiratorio']=                  $disturbio_pulmonar_respiratorio;
        $dados['disturbio_pulmonar_respiratorio_qual']=             $disturbio_pulmonar_respiratorio_qual;
        $dados['disturbio_hepatico_qual']=                          $disturbio_hepatico_qual;
        $dados['epilepsia_convulsoes']=                             $epilepsia_convulsoes;
        $dados['epilepsia_convulsoes_frequencia']=                  $epilepsia_convulsoes_frequencia;
        $dados['alteracao_psicologica_psiquiatrica']=               $alteracao_psicologica_psiquiatrica;
        $dados['alteracao_psicologica_psiquiatrica_qual']=          $alteracao_psicologica_psiquiatrica_qual;
        $dados['tem_ou_ja_teve_cancer']=                            $tem_ou_ja_teve_cancer;
        $dados['tem_ou_ja_teve_cancer_quando']=                     $tem_ou_ja_teve_cancer_quando;
        $dados['diabetes']=                                         $diabetes;
        $dados['diabetes_tipo']=                                    $diabetes_tipo;
        $dados['doenca_familia']=                                   $doenca_familia;
        $dados['doenca_familia_qual']=                              $doenca_familia_qual;

        $dados['implante_dentario']=                                $implante_dentario;
        $dados['implante_dentario_qual']=                           $implante_dentario_qual;
        $dados['implante_metalico']=                                $implante_metalico;
        $dados['implante_metalico_qual']=                           $implante_metalico_qual;
        $dados['intrauterino']=                                     $intrauterino;
        $dados['intrauterino_qual']=                                $intrauterino_qual;
        $dados['tratamento_dermatologico_estetico_anterior']=       $tratamento_dermatologico_estetico_anterior;
        $dados['tratamento_dermatologico_estetico_anterior_qual']=  $tratamento_dermatologico_estetico_anterior_qual;
        $dados['uso_acido_peeling']=                                $uso_acido_peeling;
        $dados['uso_acido_peeling_quando']=                         $uso_acido_peeling_quando;
        $dados['uso_acido_peeling_qual']=                           $uso_acido_peeling_qual;
        $dados['cirurgia_plastica_estetica']=                       $cirurgia_plastica_estetica;
        $dados['cirurgia_plastica_estetica_qual']=                  $cirurgia_plastica_estetica_qual;
        $dados['observacoes_tratamento']=                           $observacoes_tratamento;
        $dados['id_cliente']=                                       $id_cliente;
        
        return $this->db->insert('ficha_anamnese', $dados);
    }
    
    public $descricao_quantidade;
    
    public function lista_quantas_vezes(){
        $this->db->order_by('id_qt_vezes','ASC');
        return $this->db->get('quantas_vezes')->result();
    }
}
