<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visualizaranamnese extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        
        if(!$this->session->userdata('logado')){
            redirect(base_url('login'));
        }
        
        $this->load->model('dadosclientes_model','modeldadosclientes');
        $this->load->model('Visualizaranamnese_model','modelvisualizaranamnese');
        $this->load->model('usuarios_model', 'modelusuarios');
    }
    
	public function index($id_cliente,$slug=null,$id_ficha_anamnese)
	{
        if(!$this->session->userdata('logado')){
            redirect(base_url('login'));
        }
        $dados['visualizaranamnese'] = $this->modelvisualizaranamnese->visualizar_anamnese($id_cliente,$id_ficha_anamnese);
        $dados['dadosclientes'] = $this->modeldadosclientes->dados_clientes($id_cliente);
        $dados['qtvezes'] = $this->modelvisualizaranamnese->lista_quantas_vezes();        
        $dados['usuarios'] = $this->modelusuarios->listar_usuarios();
        $this->load->view('frontend/template/html-header', $dados);
        $this->load->view('frontend/template/topo');
        $this->load->view('frontend/template/aside');
		$this->load->view('frontend/visualizaranamnese');
        $this->load->view('frontend/template/ajuda');
        $this->load->view('frontend/template/html-footer');
	}
    
    
}
