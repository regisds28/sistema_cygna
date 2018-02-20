<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fichasclinicas extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        
        if(!$this->session->userdata('logado')){
            redirect(base_url('login'));
        }
        
        $this->load->model('fichasclinicas_model','modelfichasclinicas');
        $this->load->model('usuarios_model', 'modelusuarios');
        //$this->load->model('dadosclientes_model','modeldadosclientes');
        
    }
    
	public function index($id_cliente, $slug=null)
	{
        $this->load->model('usuarios_model', 'modelusuarios');
        $dados['usuarios'] = $this->modelusuarios->listar_usuarios();
        $dados['fichasclinicas'] = $this->modelfichasclinicas->fichas_clinicas($id_cliente);
        //$dados['dadosclientes'] = $this->modeldadosclientes->dados_clientes($id_cliente);
        $this->load->view('frontend/template/html-header', $dados);
        $this->load->view('frontend/template/topo');
        $this->load->view('frontend/template/aside');
		$this->load->view('frontend/fichasclinicas');
        $this->load->view('frontend/template/ajuda');
        $this->load->view('frontend/template/html-footer');
	}   
    
}
