<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastroclientes extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        
        if(!$this->session->userdata('logado')){
            redirect(base_url('login'));
        }
        
        $this->load->model('cadastroclientes_model','modelcadastroclientes');
        //$this->cadastroclientes = $this->modelcadastroclientes->lista_clientes();
    }
    
	public function index()
	{
        $this->load->model('usuarios_model', 'modelusuarios');
        $dados['usuarios'] = $this->modelusuarios->listar_usuarios(); 
        $dados['titulo'] =  'Cadastrar clientes';
        $dados['listaestados'] = $this->modelcadastroclientes->lista_estados();
        $this->load->view('frontend/template/html-header', $dados);
        $this->load->view('frontend/template/topo');
        $this->load->view('frontend/template/aside');
		$this->load->view('frontend/cadastroclientes');
        $this->load->view('frontend/template/ajuda');
        $this->load->view('frontend/template/html-footer');
	}
    
    public function inserir(){
        if(!$this->session->userdata('logado')){
            redirect(base_url('login'));
        }
        $this->load->model('cadastroclientes_model','modelcadastroclientes');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('txt-nome-cliente', 'Nome do cliente', 'required|min_length[3]');
        $this->form_validation->set_rules('txt-cpf-cliente', 'CPF', 'required|min_length[11]|is_unique[clientes.cpf_cliente]');
        $this->form_validation->set_rules('txt-dt-nascimento', 'Data de nascimento', 'required');
        $this->form_validation->set_rules('txt-idade', 'Idade', 'required');
        $this->form_validation->set_rules('txt-sexo', 'Sexo', 'required');
        $this->form_validation->set_rules('txt-endereco', 'Endereço', 'required|min_length[3]');
        $this->form_validation->set_rules('txt-cidade', 'cidade', 'required|min_length[3]');
        $this->form_validation->set_rules('txt-estado', 'Estado', 'required');
        $this->form_validation->set_rules('txt-cep', 'CEP', 'required|min_length[8]');
        $this->form_validation->set_rules('txt-telefone-res', 'Telefone residencial', 'min_length[3]');
        $this->form_validation->set_rules('txt-telefone-com', 'Telefone comercial', 'min_length[3]');
        $this->form_validation->set_rules('txt-celular', 'Celular', 'required|min_length[3]');
        $this->form_validation->set_rules('txt-profissao', 'Profissão', 'required|min_length[3]');        
        $this->form_validation->set_rules('txt-email', 'Email', 'required|valid_email');
        
        if($this->form_validation->run() == FALSE){
            $this->index();
        }else{
            $nome= $this->input->post('txt-nome-cliente');
            $cpf= $this->input->post('txt-cpf-cliente');
            $dt_nascimento= $this->input->post('txt-dt-nascimento');
            $sexo= $this->input->post('txt-sexo');
            $idade= $this->input->post('txt-idade');
            $endereco= $this->input->post('txt-endereco');
            $cidade= $this->input->post('txt-cidade');
            $estado= $this->input->post('txt-estado');
            $cep= $this->input->post('txt-cep');
            $telefoneres= $this->input->post('txt-telefone-res');
            $telefonecom= $this->input->post('txt-telefone-com'); 
            $celular= $this->input->post('txt-celular');
            $profissao= $this->input->post('txt-profissao');
            $email= $this->input->post('txt-email');
            if($this->modelcadastroclientes->adicionar($nome,$cpf,$dt_nascimento,$idade,$sexo,$endereco,$cidade,$estado,$cep,$telefoneres,
                              $telefonecom,$celular,$profissao,$email)){
                redirect(base_url('listaclientes'));
            }else{
                echo "Houve um erro no sistema";
            }
        }
        
    }
    
    public function excluir($id_cliente){
        if(!$this->session->userdata('logado')){
            redirect(base_url('login'));
        }
        $this->load->model('cadastrocliente_model', 'modelcadastrocliente');
        if($this->modelcadastrocliente->excluir($id_cliente)){
            redirect(base_url('clientes'));
        }else{
            echo "Houve um erro no sistema";
        }
    }
}
