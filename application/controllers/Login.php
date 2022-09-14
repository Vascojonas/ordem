<?php

use PharIo\Manifest\Email;

defined('BASEPATH') OR exit('Permissao nao concedida');



class Login extends CI_Controller {

    
    public function index(){


        $identity = $this->security->xss_clean($this->input->post('email'));
        $password = $this->security->xss_clean($this->input->post('password'));
        $remember = false; // remember the user
        
        if( $this->ion_auth->login($identity, $password, $remember)){
                redirect('Home');
        }else{
            
            if($this->input->post('email')!==null){
                $this->session->set_flashdata('error', 'Email e (ou) senha inválido(s)');
            }

            $this->load->view('layout/header');
            $this->load->view('login/index');
            $this->load->view('layout/footer');
        }
      
        
    }


    public function logout(){
        $this->ion_auth->logout();
        redirect('Login');
    }
}