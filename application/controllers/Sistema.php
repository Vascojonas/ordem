<?php

defined('BASEPATH') OR exit('Permissao nao concedida');



class Sistema extends CI_Controller {

    
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
            'titulo' => 'Editar informações do sistema',
            'scripts'=> [
                'vendor/mask/jquery.mask.min.js',
                'vendor/mask/app.js'],
            'sistema' =>  $this->core_model->getById('sistema', ['sistema_id' => 1])
        ];

        /* [sistema_id] => 1
        [sistema_razao_social] => System ordem INC
        [sistema_nome_fantasia] => Sistema ordem now
        [sistema_cnpj] => 34.585.377/0001-71
        [sistema_ie] => 
        [sistema_telefone_fixo] => 
        [sistema_telefone_movel] => 
        [sistema_email] => ordemnow@contacto.com.br
        [sistema_site_url] => http://localhost/ordem/usuarios
        [sistema_cep] => 80428-000
        [sistema_endereco] => Rua da programacao 
        [sistema_numero] => 44
        [sistema_cidade] => Curitiba
        [sistema_estado] => PR
        [sistema_txt_ordem_servico] => 
        [sistema_data_alteracao] => 2022-09-09 12:30:21 */

        $this->form_validation->set_rules('sistema_razao_social', 'Razão social', 'required|min_length[10]|max_length[145]');
        $this->form_validation->set_rules('sistema_nome_fantasia', 'Fantasia', 'required|min_length[10]|max_length[145]');
        $this->form_validation->set_rules('sistema_cnpj', 'CNPJ', 'required|exact_length[18]'); //18 caraacteres
        $this->form_validation->set_rules('sistema_ie', 'IE', 'required|max_length[25]');
        $this->form_validation->set_rules('sistema_telefone_fixo', 'Telefone fixo', 'required|max_length[25]');
        $this->form_validation->set_rules('sistema_telefone_movel', 'Telefone movel', 'required|max_length[25]');
        $this->form_validation->set_rules('sistema_email', 'E-mail', 'required|valid_email|max_length[100]');
        $this->form_validation->set_rules('sistema_site_url', 'URL do site', 'required|valid_url|max_length[100]');
        $this->form_validation->set_rules('sistema_cep', 'CEP', 'required|max_length[25]');
        $this->form_validation->set_rules('sistema_endereco', 'Endereço', 'required|max_length[100]');
        $this->form_validation->set_rules('sistema_numero', 'Número', 'max_length[25]');
        $this->form_validation->set_rules('sistema_cidade', 'Cidade', 'required|max_length[45]');
        $this->form_validation->set_rules('sistema_estado', 'UF', 'required|exact_length[2]');
        $this->form_validation->set_rules('sistema_txt_ordem_servico', 'Texto da ordem de serviço e venda', 'max_length[500]');

        if ($this->form_validation->run()) {
            

            $data = elements(
                array(
                    'sistema_razao_social',
                    'sistema_nome_fantasia',
                    'sistema_cnpj',
                    'sistema_ie',
                    'sistema_telefone_fixo',
                    'sistema_telefone_movel',
                    'sistema_email',
                    'sistema_site_url',
                    'sistema_cep',
                    'sistema_endereco',
                    'sistema_numero',
                    'sistema_cidade',
                    'sistema_estado',
                    'sistema_txt_ordem_servico'
                ),$this->input->post()
             );


                
              $data = html_escape($data);  

               $this->core_model->update('sistema', $data, ['sistema_id'=>1]);
               $this->session->set_flashdata('success', 'Dados actualizados com sucesso');
        
                 redirect('sistema');
        } else {
            
            //erro validação
            $this->load->view('layout/header', $data);
            $this->load->view('sistema/index');
            $this->load->view('layout/footer');
        }
        
    }


}