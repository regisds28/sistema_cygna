<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inserir_agendamento extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        
        if(!$this->session->userdata('logado')){
            redirect(base_url('login'));
        }
        
        $this->load->model('inserir_agendamento_model','modelinseriragendamento');
        $this->load->model('dadosclientes_model','modeldadosclientes');
        
    }
    
	public function index($id_cliente, $slug=null)
	{
        $this->load->model('usuarios_model', 'modelusuarios');
        $dados['usuarios'] = $this->modelusuarios->listar_usuarios(); 
        $dados['inserir_agendamento'] = $this->modelinseriragendamento->inserir_agendamento($id_cliente);
        $dados['dadosclientes'] = $this->modeldadosclientes->dados_clientes($id_cliente);
        $dados['especialidades'] = $this->modelinseriragendamento->lista_especialidades();
        $dados['profissionais'] = $this->modelinseriragendamento->lista_profissionais();
        $this->load->view('frontend/template/html-header', $dados);
        $this->load->view('frontend/template/topo');
        $this->load->view('frontend/template/aside');
		$this->load->view('frontend/inserir_agendamento');
        $this->load->view('frontend/template/ajuda');
        $this->load->view('frontend/template/html-footer');
	}
    
    public function inserir(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('especialidade', 'Especilidade', 'required|min_length[3]|is_unique[agendamento.id_especialidade]');
        $this->form_validation->set_rules('profissional', 'Profissional', 'required|min_length[3]|is_unique[agendamento.profissional]');
        $this->form_validation->set_rules('txt-data-agendamento', 'Data do agendamento', 'required|min_length[3]|is_unique[agendamento.data_agendamento]');
        $this->form_validation->set_rules('txt-hora-agendamento', 'Hora', 'required|min_length[3]|is_unique[agendamento.hora_agendamento]');
        $this->form_validation->set_rules('reposicao', 'Reposição', 'required|min_length[3]|is_unique[agendamento.reposicao]');
        $this->form_validation->set_rules('txt-observacoes', 'obs_agendamento', 'required|min_length[3]|is_unique[obs_agendamento]');
        
        if($this->form_validation->run() == FALSE){
            'não há dados';
        }else{
             
        }
    }
}
