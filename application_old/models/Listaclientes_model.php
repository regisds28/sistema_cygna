<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listaclientes_model extends CI_Model {
    
    public $id_cliente;
    public $nome_cliente;
    public $telefoneres;
    public $dt_nascimento;
    
	public function __construct(){
        parent::__construct();
    }
    
    public function lista_clientes(){
        $this->load->database();
        $this->db->select('clientes.id_cliente, clientes.nome_cliente, clientes.celular, clientes.dt_nascimento');
        $this->db->from('clientes');
        $this->db->order_by('nome_cliente','ASC');
        return $this->db->get()->result();
    }
    
    public function adicionar($nome,$cpf,$dtnascimento,$idade,$sexo,$endereco,$cidade,$estado,$cep,$telefoneres,
                              $telefonecom,$celular,$profissao,$email,$comoconheceucygna)
    {
        $dados['nome_cliente']= $nome;
        $dados['cpf_cliente']= $cpf;
        $dados['dt_nascimento']= $dtnascimento;
        $dados['idade']= $idade;
        $dados['id_sexo']= $sexo;
        $dados['endereco']= $endereco;
        $dados['cidade']= $cidade;
        $dados['id_estado']= $estado;
        $dados['telefoneres']= $telefoneres;
        $dados['telefonecom']= $telefonecom;
        $dados['celular']= $celular;
        $dados['profissao']= $profissao;
        $dados['email']= $email;
        $dados['id_como_conheceu_cygna']= $comoconheceucygna;
        
        return $this->db->insert('clientes', $dados);
    }
}
