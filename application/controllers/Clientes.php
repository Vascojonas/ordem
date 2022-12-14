<?php

defined('BASEPATH') OR exit('Permissao nao concedida');



class Clientes extends CI_Controller {

    
    public function __construct (){
        parent::__construct();
        //definir se ha sessao
        if(!$this->ion_auth->logged_in()){
            $this->session->set_flashdata('info', 'Sua sessão expirou! ');
            redirect('login');
        }
    }


    public function index(){
        $data = [
            'titulo'=> 'Clientes cadastrados',
            'styles'=> array(
                'vendor/datatables/dataTables.bootstrap4.min.css',
            ),

            'scripts' =>  array(
                'vendor/datatables/jquery.dataTables.min.js',
                'vendor/datatables/dataTables.bootstrap4.min.js',
                'vendor/datatables/app.js'
            ),
            'clientes'=> $this->core_model->getAll('clientes'),
        ];


        // echo "<pre>";
        //     print_r($data);
        // echo "</pre>";
        // exit();
      

        $this->load->view('layout/header', $data);
		$this->load->view('clientes/index');
		$this->load->view('layout/footer');
    }


    public function edit($cliente_id=null){

        if(!$cliente_id || !$this->core_model->getById('clientes', ['cliente_id'=>$cliente_id])){
            $this->session->set_flashdata('error', 'Cliente não encontrado');
            redirect('clientes');
        }

    
        //                 [cliente_tipo] => 2
        //                 [cliente_nome] => Armando
        //                 [cliente_sobrenome] => Tivane
        //                 [cliente_data_nascimento] => 1997-09-11
        //                 [cliente_cpf_cnpj] => 77.594.645/0001-24
        //                 [cliente_rg_ie] => 
        //                 [cliente_email] => 
        //                 [cliente_telefone] => 
        //                 [cliente_celular] => 
        //                 [cliente_cep] => 
        //                 [cliente_endereco] => 
        //                 [cliente_numero_endereco] => 
        //                 [cliente_bairro] => 
        //                 [cliente_complemento] => 
        //                 [cliente_cidade] => 
        //                 [cliente_estado] => 
        //                 [cliente_ativo] => 0
        //                 [cliente_obs] => 
        //                 [cliente_data_alteracao] => 2022-09-12 09:15:02
        // }


        $this->form_validation->set_rules('cliente_nome', '', 'trim|required|min_length[3]|max_length[45]');
        $this->form_validation->set_rules('cliente_sobrenome', '', 'trim|required|min_length[3]|max_length[150]');
        $this->form_validation->set_rules('cliente_data_nascimento', '', 'required');
        $this->form_validation->set_rules('cliente_cpf_cnpj', '', 'trim|required|exact_length[18]');
        $this->form_validation->set_rules('cliente_rg_ie', '', 'trim|required|max_length[20]');
        $this->form_validation->set_rules('cliente_email', '', 'trim|required|valid_email|max_length[50]');
        $this->form_validation->set_rules('cliente_telefone', '', 'trim|max_length[14]');
        $this->form_validation->set_rules('cliente_celular', '', 'trim|max_length[14]');
        $this->form_validation->set_rules('cliente_cep', '', 'trim|required|exact_length[9]');
        $this->form_validation->set_rules('cliente_endereco', '', 'trim|required|max_length[155]');
        $this->form_validation->set_rules('cliente_numero_endereco', '', 'trim|max_length[20]');
        $this->form_validation->set_rules('cliente_bairro', '', 'trim|required|max_length[45]');
        $this->form_validation->set_rules('cliente_complemento', '', 'trim|max_length[145]');
        $this->form_validation->set_rules('cliente_cidade', '', 'trim|required|max_length[50]');
        $this->form_validation->set_rules('cliente_estado', '', 'trim|required|exact_length[2]');
        $this->form_validation->set_rules('cliente_obs', '', 'trim|max_length[500]');
        

        if($this->form_validation->run()){
            echo "<pre>";
                print_r($this->input->post());
            echo "</pre>";
            exit();
            
        }else{

            //Erro validacao


            $data = [
                'titulo'=> 'Actualizar dados do cliente',
                    
                'scripts' =>  array(
                    'vendor/mask/jquery.mask.min.js',
                    'vendor/mask/app.js'
                ),
                
                'cliente'=> $this->core_model->getById('clientes', ['cliente_id'=>$cliente_id]),
            ];
    
    
            // echo "<pre>";
            //     print_r($data['cliente']);
            // echo "</pre>";
            // exit();
          
    
            $this->load->view('layout/header', $data);
            $this->load->view('clientes/edit');
            $this->load->view('layout/footer');
        }
    }
}