<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agendamentos extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        
        if(!$this->session->userdata('logado')){
            redirect(base_url('login'));
        }
        
        $this->load->model('agendamentos_model','modelagendamentos');
        $this->load->model('dadosclientes_model','modeldadosclientes');
        
    }
    
	public function index($id_cliente, $slug=null)
	{
        $this->load->library('table');
        $this->load->model('usuarios_model', 'modelusuarios');
        $dados['usuarios'] = $this->modelusuarios->listar_usuarios(); 
        $dados['agendamentos'] = $this->modelagendamentos->agendamentos($id_cliente);
        $dados['dadosclientes'] = $this->modeldadosclientes->dados_clientes($id_cliente);
        $dados['especialidades'] = $this->modelagendamentos->lista_especialidades();
        //$dados['profissionais'] = $this->modelagendamentos->lista_profissionais();
        $this->load->view('frontend/template/html-header', $dados);
        $this->load->view('frontend/template/topo');
        $this->load->view('frontend/template/aside');
		$this->load->view('frontend/agendamentos');
        $this->load->view('frontend/template/ajuda');
        $this->load->view('frontend/template/html-footer');
	}   
    
}
