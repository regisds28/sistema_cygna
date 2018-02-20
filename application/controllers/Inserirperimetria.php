<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inserirperimetria extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        
        if(!$this->session->userdata('logado')){
            redirect(base_url('login'));
        }
        
        $this->load->model('perimetria_model','modelperimetria');
        $this->load->model('dadosclientes_model','modeldadosclientes');
        $this->load->model('usuarios_model', 'modelusuarios');
        
    }
    
	public function index($id_cliente,$slug=null)
	{
        if(!$this->session->userdata('logado')){
            redirect(base_url('login'));
        }
        $this->load->model('usuarios_model', 'modelusuarios');
        //$dados['usuarios'] = $this->modelusuarios->listar_usuarios();         
        $dados['inserirperimetria'] = $this->modelperimetria->visualizar_perimetria($id_cliente);
        $dados['dadosclientes'] = $this->modeldadosclientes->dados_clientes($id_cliente);
        $dados['usuarios'] = $this->modelusuarios->listar_usuarios();
        $this->load->view('frontend/template/html-header', $dados);
        $this->load->view('frontend/template/topo');
        $this->load->view('frontend/template/aside');
		$this->load->view('frontend/inserirperimetria');
        $this->load->view('frontend/template/ajuda');
        $this->load->view('frontend/template/html-footer');
	}
    
    public function inserir(){
        if(!$this->session->userdata('logado')){
            redirect(base_url('login'));
        }
        $this->load->library('form_validation');
        $this->load->model('perimetria_model','modelperimetria');
        
        $this->form_validation->set_rules('id_cliente', 'ID cliente');
        $this->form_validation->set_rules('nome_cliente', 'Nome');
        $this->form_validation->set_rules('id_profissional', 'ID profissional');
        $this->form_validation->set_rules('nome_profissional', 'Usuário');
        
        $this->form_validation->set_rules('braco_d', 'Braço D');
        $this->form_validation->set_rules('braco_e', 'Braço E');
        $this->form_validation->set_rules('abd_superior', 'abd superior');
        $this->form_validation->set_rules('cintura', 'cintura');
        $this->form_validation->set_rules('abd_inferior', 'abd inferior');
        $this->form_validation->set_rules('quadril', 'quadril');
        $this->form_validation->set_rules('coxa_sup_d', 'coxa superior D');
        $this->form_validation->set_rules('coxa_sup_e', 'coxa superior E');
        $this->form_validation->set_rules('coxa_inf_d', 'coxa inferior D');
        $this->form_validation->set_rules('coxa_inf_d', 'coxa inferior D');
        $this->form_validation->set_rules('ombro', 'ombro');
        $this->form_validation->set_rules('panturrilha', 'panturrilha');

        if($this->form_validation->run() == FALSE){
            $this->index();
        }else{
            $id_cliente =                                       $this->input->post('id_cliente');
            $nome_cliente =                                     $this->input->post('nome_cliente');
            $id_profissional =                                  $this->input->post('id_profissional');
            $nome_profissional =                                $this->input->post('nome_profissional');
            
            $braco_d =                                          $this->input->post('braco_d');
            $braco_e =                                          $this->input->post('braco_e');
            $abd_superior =                                     $this->input->post('abd_superior');
            $cintura =                                          $this->input->post('cintura');
            $quadril =                                          $this->input->post('quadril');
            $coxa_sup_d =                                       $this->input->post('coxa_sup_d');
            $coxa_sup_e =                                       $this->input->post('coxa_sup_e');
            $coxa_inf_d =                                       $this->input->post('coxa_inf_d');
            $coxa_inf_e =                                       $this->input->post('coxa_inf_e');
            $ombro =                                            $this->input->post('ombro');
            $panturrilha =                                      $this->input->post('panturrilha');
            

            if($this->modelperimetria->adicionar($id_cliente,$nome_cliente,$id_profissional,$id_ficha_perimetria,$nome_profissional,$braco_d,$braco_e,$abd_superior,$cintura,$quadril,$coxa_sup_d,$coxa_sup_e,$coxa_inf_d,$coxa_inf_e,$ombro,$panturrilha)){
                redirect(base_url('listarperimetria/'.$id_cliente.'/'.limpar($nome_cliente)));
            }else{
                echo "Houve um erro no sistema";
            }
        }
    }
}
