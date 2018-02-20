<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visualizaranamnese_model extends CI_Model {
    
    public $id_cliente;
    public $nome_cliente;
    public $id_profissional;
    public $nome_profissional;
    public $id_ficha_anamnese;
    public $data_inclusao;
    public $tratamento_estetico;
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
    
    public function visualizar_anamnese($id_cliente,$id_ficha_anamnese){
        $this->load->database();
        //$this->db->select('*, clientes.id_cliente, clientes.nome_cliente');
        $this->db->select('clientes.nome_cliente, clientes.id_cliente, profissional.nome_profissional, id_ficha_anamnese, data_inclusao, id_ficha_anamnese, DATE_FORMAT(data_inclusao, "%d/%m/%Y às %H:%i:%s") as data, tratamento_estetico, tratamento_estetico_qual, lentes_contato, utiliza_cosmetico, utiliza_cosmetico_qual, exposicao_sol, exposicao_sol_frequencia, usa_protetor_solar, usa_protetor_solar_qual, tabagismo, quantidade_cigarros_dia, ingere_bebida_alcoolica, ingere_bebida_alcoolica_frequencia, descricao_quantidade, qualidade_sono, quantas_horas_sono_noite, atividade_fisica, atividade_fisica_tipo, atividade_fisica_frequencia, anticoncepcional, anticoncepcional_qual, data_primeira_menstruacao, data_ultima_menstruacao, gestacoes, gestacoes_quantas, gestacoes_ha_quanto_tempo, lactante, observacoes_habitos, principais_queixas, tratamento_medico_atual, medicamentos_em_uso, herpes, alergia, alergia_qual, queloides, doenca_cardiaca, doencas_cardiacas_quais, marca_passo, hipo_hipertensao_arterial, trombose, trombose_qual, usa_anticoagulante, usa_anticoagulante_qual, doenca_auto_imune, doenca_auto_imune_qual, disturbio_renal, disturbio_renal_qual, disturbio_hormonal, disturbio_hormonal_qual, ciclo_menstrual_regular, disturbio_gastrointestinal, disturbio_gastrointestinal_qual, disturbio_pulmonar_respiratorio, disturbio_pulmonar_respiratorio_qual, disturbio_hepatico, disturbio_hepatico_qual, epilepsia_convulsoes, epilepsia_convulsoes_frequencia, alteracao_psicologica_psiquiatrica, alteracao_psicologica_psiquiatrica_qual, tem_ou_ja_teve_cancer, tem_ou_ja_teve_cancer_quando, diabetes, diabetes_tipo, doenca_familia, doenca_familia_qual, implante_dentario, implante_dentario_qual, implante_metalico, implante_metalico_qual, intrauterino, intrauterino_qual, tratamento_dermatologico_estetico_anterior, tratamento_dermatologico_estetico_anterior_qual, uso_acido_peeling, uso_acido_peeling_quando, uso_acido_peeling_qual, cirurgia_plastica_estetica, cirurgia_plastica_estetica_qual, observacoes_tratamento');
        $this->db->from('ficha_anamnese');
        $this->db->join('clientes', 'ficha_anamnese.id_cliente = clientes.id_cliente');
        $this->db->join('profissional', 'ficha_anamnese.id_profissional = profissional.id_profissional');
        $this->db->join('quantas_vezes', 'ficha_anamnese.id_qt_vezes = quantas_vezes.id_qt_vezes');
        $this->db->where('clientes.id_cliente = '. $id_cliente);
        $this->db->where('ficha_anamnese.id_ficha_anamnese ='. $id_ficha_anamnese);
        return $this->db->get()->result();
    }
    
    public $descricao_quantidade;
    
    public function lista_quantas_vezes(){
        $this->db->order_by('id_qt_vezes','ASC');
        return $this->db->get('quantas_vezes')->result();
    }
}
