<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastroclientes_model extends CI_Model {
        
	public function __construct(){
        parent::__construct();
    }
    
    public function adicionar($nome,$cpf,$dt_nascimento,$idade,$sexo,$endereco,$cidade,$estado,$cep,$telefoneres,
                              $telefonecom,$celular,$profissao,$email)
    {
        $dados['nome_cliente']= $nome;
        $dados['cpf_cliente']= $cpf;
        $dados['dt_nascimento']= $dt_nascimento;
        $dados['idade']= $idade;
        $dados['id_sexo']= $sexo;
        $dados['endereco']= $endereco;
        $dados['cidade']= $cidade;
        $dados['id_estado']= $estado;
        $dados['cep']= $cep;
        $dados['telefoneres']= $telefoneres;
        $dados['telefonecom']= $telefonecom;
        $dados['celular']= $celular;
        $dados['profissao']= $profissao;
        $dados['email']= $email;
        
        return $this->db->insert('clientes', $dados);
    }
    
    public $id_estado;
    public $estados;
    
    public function lista_estados(){
        $this->db->order_by('estados','ASC');
        return $this->db->get('estados')->result();
    } 
}
