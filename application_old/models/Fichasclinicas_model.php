<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fichasclinicas_model extends CI_Model {
    
    public $id_cliente;
    public $nome_cliente;
    
	public function __construct(){
        parent::__construct();
    }
    
    public function fichas_clinicas($id_cliente){
        $this->load->database();
        $this->db->select('id_cliente, nome_cliente');
        $this->db->from('clientes');
        $this->db->where('id_cliente = '. $id_cliente);
        return $this->db->get()->result();
    }
    
}
