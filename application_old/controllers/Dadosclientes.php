<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dadosclientes extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        
        if(!$this->session->userdata('logado')){
            redirect(base_url('login'));
        }
        
        $this->load->model('dadosclientes_model','modeldadosclientes');
    }
    
	public function index($id_cliente, $slug=null)
	{
        if(!$this->session->userdata('logado')){
            redirect(base_url('login'));
        }
        $this->load->model('usuarios_model', 'modelusuarios');
        $dados['usuarios'] = $this->modelusuarios->listar_usuarios(); 
        $dados['dadosclientes'] = $this->modeldadosclientes->dados_clientes($id_cliente);
        $dados['listaestados'] = $this->modeldadosclientes->lista_estados();
        $this->load->view('frontend/template/html-header', $dados);
        $this->load->view('frontend/template/topo');
        $this->load->view('frontend/template/aside');
		$this->load->view('frontend/dadosclientes');
        $this->load->view('frontend/template/ajuda');
        $this->load->view('frontend/template/html-footer');
	}
    
    
}
