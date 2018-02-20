<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visualizaravaliacaocorporal extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        
        if(!$this->session->userdata('logado')){
            redirect(base_url('login'));
        }
        
        $this->load->model('dadosclientes_model','modeldadosclientes');
        $this->load->model('visualizaravaliacaocorporal_model','modelvisualizaravaliacaocorporal');
        $this->load->model('usuarios_model', 'modelusuarios');
    }
    
	public function index($id_cliente,$slug=null,$id_ficha_avaliacao_corporal)
	{
        if(!$this->session->userdata('logado')){
            redirect(base_url('login'));
        }
        $dados['visualizaravaliacaocorporal'] = $this->modelvisualizaravaliacaocorporal->visualizar_avaliacaocorporal($id_cliente,$id_ficha_avaliacao_corporal);
        $dados['dadosclientes'] = $this->modeldadosclientes->dados_clientes($id_cliente);       
        $dados['usuarios'] = $this->modelusuarios->listar_usuarios();
        $this->load->view('frontend/template/html-header', $dados);
        $this->load->view('frontend/template/topo');
        $this->load->view('frontend/template/aside');
		$this->load->view('frontend/visualizaravaliacaocorporal');
        $this->load->view('frontend/template/ajuda');
        $this->load->view('frontend/template/html-footer');
	}
    
    
}
