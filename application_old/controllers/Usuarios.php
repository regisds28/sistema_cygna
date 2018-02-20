<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {
    
    public $id_profissional;
    public $nome_profissional;
    public $cpf_profissional;
    public $email;
    public $usuario;
    public $senha;
    
    public function __construct(){
        parent::__construct();
        
        $this->load->model('usuarios_model', 'modelusuarios');
    }
        
	public function index()
	{
        if(!$this->session->userdata('logado')){
            redirect(base_url('login'));
        }
        
        $this->load->library('table');
        $this->load->model('usuarios_model', 'modelusuarios');
        $dados['usuarios'] = $this->modelusuarios->listar_usuarios(); 
        $dados['titulo'] = 'Lista de usuários';
        $dados['subtitulo'] = 'Usuário';
        $this->load->view('frontend/template/html-header', $dados);
        $this->load->view('frontend/template/topo');
        $this->load->view('frontend/template/aside');
		$this->load->view('frontend/usuarios');
        $this->load->view('frontend/template/ajuda');
        $this->load->view('frontend/template/html-footer');
	}
    
    public function inserir(){
        if(!$this->session->userdata('logado')){
            redirect(base_url('login'));
        }
        $this->load->model('usuarios_model', 'modelusuarios');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('txt-nome-profissional', 'Nome do profissional', 'required|min_length[3]');
        $this->form_validation->set_rules('txt-cpf-profissional', 'CPF', 'required|min_length[11]|is_unique[profissional.cpf_profissional]');
        $this->form_validation->set_rules('txt-email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('txt-usuario', 'Usuário', 'required|min_length[3]');
        $this->form_validation->set_rules('txt-senha', 'Senha', 'required|min_length[3]');
        $this->form_validation->set_rules('txt-confirmar-senha', 'confirmar Senha', 'required|matches[txt-senha]');
        
        if($this->form_validation->run() == FALSE){
            $this->index();
        }else{
            $nome_profissional= $this->input->post('txt-nome-profissional');
            $cpf_profissional= $this->input->post('txt-cpf-profissional');
            $email= $this->input->post('txt-email');
            $usuario= $this->input->post('txt-usuario');
            $senha= $this->input->post('txt-senha'); 
            if($this->modelusuarios->adicionar($nome_profissional,$cpf_profissional,$email,$usuario,$senha)){
                redirect(base_url('usuarios'));
            }else{
                echo "Houve um erro no sistema";
            }
        }
        
    }
    
    public function excluir($id_profissional){
        if(!$this->session->userdata('logado')){
            redirect(base_url('login'));
        }
        $this->load->model('usuarios_model', 'modelusuarios');
        if($this->modelusuarios->excluir($id_profissional)){
            redirect(base_url('usuarios'));
        }else{
            echo "Houve um erro no sistema";
        }
    }
    
    public function alterar($id_profissional){
        if(!$this->session->userdata('logado')){
            redirect(base_url('login'));
        }
        $this->load->model('usuarios_model', 'modelusuarios');
        $dados['usuarios'] = $this->modelusuarios->listar_usuario($id_profissional); 
        $dados['subtitulo'] = 'Usuário';
        $this->load->view('frontend/template/html-header', $dados);
        $this->load->view('frontend/template/topo');
        $this->load->view('frontend/template/aside');
		$this->load->view('frontend/alterarusuario');
        $this->load->view('frontend/template/ajuda');
        $this->load->view('frontend/template/html-footer');
    }
    
    public function salvar_alteracoes($id_profissional){
        if(!$this->session->userdata('logado')){
            redirect(base_url('login'));
        }
        $this->load->model('usuarios_model', 'modelusuarios');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('txt-nome-profissional', 'Nome do profissional', 'required|min_length[3]');
        $this->form_validation->set_rules('txt-cpf-profissional', 'CPF', 'required|is_unique[profissional.cpf_profissional]|min_length[14]');
        $this->form_validation->set_rules('txt-email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('txt-usuario', 'Usuário', 'required|min_length[3]');
        $this->form_validation->set_rules('txt-senha', 'Senha', 'required|min_length[3]');
        $this->form_validation->set_rules('txt-confirmar-senha', 'confirmar Senha', 'required|matches[txt-senha]');
        if($this->form_validation->run() == FALSE){
            $this->index();
        }else{
            $nome_profissional= $this->input->post('txt-nome-profissional');
            $cpf_profissional= $this->input->post('txt-cpf-profissional');
            $email= $this->input->post('txt-email');
            $usuario= $this->input->post('txt-usuario');
            $senha= $this->input->post('txt-senha'); 
            $id_profissional= $this->input->post('txt-id-profissional'); 
            if($this->modelusuarios->alterar($nome_profissional,$cpf_profissional,$email,$usuario,$senha,$id_profissional)){
                redirect(base_url('usuarios'));
            }else{
                echo "Houve um erro no sistema";
            }
        }
    }
    
    public function pag_login(){
        $dados['titulo'] = 'Entrar com login';
		$this->load->view('backend/login',$dados);
    }
    
    public function login(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('txt-user', 'Usuário', 'required|min_length[3]');
        $this->form_validation->set_rules('txt-senha', 'Senha', 'required|min_length[3]');
        
        if($this->form_validation->run() == FALSE){
            $this->pag_login();
        }else{
            $usuario=$this->input->post('txt-user');
            $senha=$this->input->post('txt-senha');            
            $this->db->where('usuario',$usuario);
            $this->db->where('senha',$senha);
            $userlogado = $this->db->get('profissional')->result();
            if(count($userlogado)==1){
                $dadosSessao['userlogado'] = $userlogado[0];
                $dadosSessao['logado'] = TRUE;
                $this->session->set_userdata($dadosSessao);
                redirect(base_url('listaclientes'));
            }else{
                $dadosSessao['userlogado'] = NULL;
                $dadosSessao['logado'] = FALSE;
                $this->session->set_userdata($dadosSessao);
                redirect(base_url('login'));
            }
            
        }
    }
    
    public function logout(){
        $dadosSessao['userlogado'] = NULL;
        $dadosSessao['logado'] = FALSE;
        $this->session->set_userdata($dadosSessao);
        redirect(base_url('login'));
    }
}
