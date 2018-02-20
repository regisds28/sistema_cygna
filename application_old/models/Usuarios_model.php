<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {
    
	public function __construct(){
        parent::__construct();
    }
    
    public function listar_usuarios(){
        $this->load->database();
        $this->db->select('id_profissional, nome_profissional');
        $this->db->from('profissional');
        $this->db->order_by('nome_profissional','ASC');
        return $this->db->get()->result();
    }
    
    public function adicionar($nome_profissional,$cpf_profissional,$email,$usuario,$senha){
        $this->load->database();
        $dados['nome_profissional']= $nome_profissional;
        $dados['cpf_profissional']= $cpf_profissional  ;
        $dados['email']= $email;
        $dados['usuario']= $usuario;
        $dados['senha']= $senha;        
        return $this->db->insert('profissional', $dados);
    }
    
    public function alterar($nome_profissional,$cpf_profissional,$email,$usuario,$senha,$id_profissional){
        $this->load->database();
        $dados['nome_profissional']= $nome_profissional;
        $dados['cpf_profissional']= $cpf_profissional  ;
        $dados['email']= $email;
        $dados['usuario']= $usuario;
        $dados['senha']= $senha;
        $this->db->where('id_profissional', $id_profissional);
        return $this->db->update('profissional',$dados);
    }
    
    public function listar_usuario($id_profissional){
        $this->load->database();
        $this->db->select('id_profissional,nome_profissional,cpf_profissional,email,usuario');
        $this->db->from('profissional');
        $this->db->where('md5(id_profissional)', $id_profissional);
        return $this->db->get()->result();
    }
    
    public function excluir($id_profissional){
        $this->db->where('md5(id_profissional)', $id_profissional);
        return $this->db->delete('profissional');
    }
}
