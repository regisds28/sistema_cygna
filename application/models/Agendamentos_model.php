<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agendamentos_model extends CI_Model {
    
    public $id_cliente;
    public $id_especialidade;
    public $nome_cliente;
    public $profissional;
    public $descricao_especialidade;
    public $data_agendamento;
    public $situacao;
    
	public function __construct(){
        parent::__construct();
    }
    
    public function agendamentos($id_cliente){
        $this->load->database();
        $this->db->select('clientes.id_cliente, clientes.nome_cliente, agendamento.profissional, agendamento.id_especialidade, especialidade.descricao_especialidade, DATE_FORMAT(data_agendamento, "%d/%m/%Y") as data, agendamento.situacao');
        $this->db->from('agendamento');
        $this->db->join('clientes', 'agendamento.id_cliente = clientes.id_cliente');
        $this->db->join('especialidade', 'agendamento.id_especialidade = especialidade.id_especialidade');
        $this->db->where('clientes.id_cliente = '. $id_cliente);
        return $this->db->get()->result();
    }
    
    public function lista_especialidades(){
        $this->db->order_by('id_especialidade','ASC');
        return $this->db->get('especialidade')->result();
    }
}
