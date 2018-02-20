<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listaclientes_model extends CI_Model {
    
    var $table = 'clientes';
    
	public function __construct(){
        parent::__construct();
    }
    
    public function lista_clientes($sort='nome_cliente',$order='asc',$limit=null,$offset=null){
        //$this->load->database();
        $this->db->order_by($sort,$order);

        if($limit)
            $this->db->limit($limit,$offset);
        
        $query = $this->db->get($this->table);
        
        if($query->num_rows()>0)
            return $query->result();
        else
            return null;
    }
    
    function CountAll(){
        return $this->db->count_all($this->table);
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
