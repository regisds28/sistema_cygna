<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alterarclientes_model extends CI_Model {
    
    public $id_cliente;
    public $nome_cliente;
    public $telefoneres;
    public $dt_nascimento;
    
	public function __construct(){
        parent::__construct();
    }
    
    public function listar_clientes($id_cliente){
        $this->load->database();
        $this->db->select('sexo.descricao_sexo, estados.id_estado, estados.estados, clientes.id_cliente, clientes.nome_cliente, clientes.cpf_cliente, DATE_FORMAT(dt_nascimento, "%d/%m/%Y") as data, clientes.idade, clientes.id_sexo, clientes.endereco, clientes.cidade, clientes.cep, clientes.telefoneres, clientes.telefonecom, clientes.celular, clientes.email, clientes.profissao');
        $this->db->from('clientes');
        $this->db->join('sexo', 'clientes.id_sexo = sexo.id_sexo');
        $this->db->join('estados', 'clientes.id_estado = estados.id_estado');
        //$this->db->on('clientes.id_sexo = sexo.id_sexo');
        $this->db->where('md5(clientes.id_cliente) = '.$id_cliente);
        return $this->db->get()->result();
    }
    
    public $id_estado;
    public $estados;
    
    public function lista_estados(){
        $this->db->order_by('estados','ASC');
        return $this->db->get('estados')->result();
    } 
    
}
