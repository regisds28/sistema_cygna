<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listaravaliacaocorporal extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        
        if(!$this->session->userdata('logado')){
            redirect(base_url('login'));
        }
        
        $this->load->model('Listaravaliacaocorporal_model','modellistaravaliacaocorporal');
        $this->load->model('dadosclientes_model','modeldadosclientes');        
        $this->load->model('usuarios_model', 'modelusuarios');        
    }
    
	public function index($id_cliente, $slug=null)
	{
        if(!$this->session->userdata('logado')){
            redirect(base_url('login'));
        }
        $this->load->library('table');
        $dados['listaravaliacaocorporal'] = $this->modellistaravaliacaocorporal->listar_avaliacaocorporal($id_cliente);
        $dados['dadosclientes'] = $this->modeldadosclientes->dados_clientes($id_cliente);
        $dados['usuarios'] = $this->modelusuarios->listar_usuarios(); 
        $this->load->view('frontend/template/html-header', $dados);
        $this->load->view('frontend/template/topo');
        $this->load->view('frontend/template/aside');
		$this->load->view('frontend/listaravaliacaocorporal');
        $this->load->view('frontend/template/ajuda');
        $this->load->view('frontend/template/html-footer');
	}   
    
}
