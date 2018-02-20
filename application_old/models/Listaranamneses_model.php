<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listaranamneses_model extends CI_Model {
    
    public $id_cliente;
    public $nome_cliente;
    public $id_profissional;
    public $nome_profissional;
    public $data;
    public $id_ficha_anamnese;
    
	public function __construct(){
        parent::__construct();
    }
    
    public function listar_anamneses($id_cliente){
        $this->load->database();
        $this->db->select('nome_profissional, DATE_FORMAT(data_inclusao, "%d/%m/%Y às %H:%i:%s") as data, ficha_anamnese.id_ficha_anamnese, clientes.nome_cliente');
        $this->db->from('ficha_anamnese');
        $this->db->join('clientes', 'ficha_anamnese.id_cliente = clientes.id_cliente');
        $this->db->join('profissional', 'ficha_anamnese.id_profissional = profissional.id_profissional');
        $this->db->where('clientes.id_cliente = '. $id_cliente);
        return $this->db->get()->result();
    }
    
}
