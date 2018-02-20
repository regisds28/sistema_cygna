<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listaravaliacaocorporal_model extends CI_Model {
    
    public $id_cliente;
    public $nome_cliente;
    public $id_profissional;
    public $nome_profissional;
    public $data;
    public $id_ficha_anamnese;
    
	public function __construct(){
        parent::__construct();
    }
    
    public function listar_avaliacaocorporal($id_cliente){
        $this->load->database();
        $this->db->select('nome_profissional, DATE_FORMAT(data_inclusao, "%d/%m/%Y às %H:%i:%s") as data, ficha_avaliacao_corporal.id_ficha_avaliacao_corporal, clientes.nome_cliente');
        $this->db->from('ficha_avaliacao_corporal');
        $this->db->join('clientes', 'ficha_avaliacao_corporal.id_cliente = clientes.id_cliente');
        $this->db->join('profissional', 'ficha_avaliacao_corporal.id_profissional = profissional.id_profissional');
        $this->db->where('clientes.id_cliente = '. $id_cliente);
        return $this->db->get()->result();
    }
    
}
