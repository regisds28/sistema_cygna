<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listaclientes extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        
        if(!$this->session->userdata('logado')){
            redirect(base_url('login'));
        }
        
        $this->load->model('listaclientes_model','modellistaclientes');
        $this->listaclientes = $this->modellistaclientes->lista_clientes();
    }
    
	public function index()
	{
        $this->load->model('listaclientes_model','modellistaclientes');
        $this->load->model('usuarios_model', 'modelusuarios');
        $dados['usuarios'] = $this->modelusuarios->listar_usuarios(); 

        $config = array(
            "base_url" => base_url('listaclientes/p'),
            "per_page" => 8,
            "num_links" => 8,
            "uri_segment" => 3,
            "total_rows" => $this->modellistaclientes->CountAll(),
            "full_tag_open" => "<div class='pagination'><ul>",
            "full_tag_close" => "</ul></div>",
            "first_link" => FALSE,
            "last_link" => FALSE,
            "first_tag_open" => "<li>",
            "first_tag_close" => "</li>",
            "prev_link" => "Anterior",
            "prev_tag_open" => "<li class='prev'>",
            "prev_tag_close" => "</li>",
            "next_link" => "Próximo",
            "next_tag_open" => "<li class='next'>",
            "next_tag_close" => "</li>",            
            "last_tag_open" => "<li class='next'>",
            "last_tag_close" => "</li>",
            "cur_tag_open" => "<li class='active'><a href='#'>",
            "cur_tag_close" => "</a></li>",
            "num_tag_open" => "<li>",
            "num_tag_close" => "</li>"
        );

        $this->pagination->initialize($config);

        $dados['pagination'] = $this->pagination->create_links();

        $offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $dados['listaclientes'] = $this->modellistaclientes->lista_clientes('nome_cliente','asc',$config['per_page'],$offset);


        $this->load->view('frontend/template/html-header', $dados);
        $this->load->view('frontend/template/topo');
        $this->load->view('frontend/template/aside');
		$this->load->view('frontend/listaclientes');
        $this->load->view('frontend/template/ajuda');
        $this->load->view('frontend/template/html-footer');
	}
    
    public function inserir(){
        if(!$this->session->userdata('logado')){
            redirect(base_url('login'));
        }
        $this->load->model('listaclientes_model','modellistaclientes');
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
        $this->form_validation->set_rules('txt-como-conheceu', 'Como conheceu a Cygna');
        
        if($this->form_validation->run() == FALSE){
            $this->index();
        }else{
            $nome= $this->input->post('txt-nome-cliente');
            $cpf= $this->input->post('txt-cpf-cliente');
            $dtnascimento= $this->input->post('txt-dt-nascimento');
            $sexo= $this->input->post('txt-sexo');
            $idade= $this->input->post('txt-idade');
            $endereco= $this->input->post('txt-endereco');
            $cidade= $this->input->post('txt-cidade');
            $estado= $this->input->post('txt-estado');
            $cep= $this->input->post('txt-cep');
            $telefoneres= $this->input->post('telefone-res');
            $telefonecom= $this->input->post('telefone-com'); 
            $celular= $this->input->post('txt-celular');
            $profissao= $this->input->post('txt-profissao');
            $email= $this->input->post('txt-email');
            $comoconheceucygna= $this->input->post('txt-como-conheceu'); 
            if($this->modellistaclientes->adicionar($nome,$cpf,$dtnascimento,$idade,$sexo,$endereco,$cidade,$estado,$cep,$telefoneres,
                              $telefonecom,$celular,$profissao,$email,$comoconheceucygna)){
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
