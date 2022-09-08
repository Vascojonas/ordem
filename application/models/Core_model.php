<?php

defined('BASEPATH') OR exit('Permissao nao concedida');



class Core_model extends CI_Model {

    public function getAll($table=null, $condition=null){
        if ($table) {
            if(is_array($condition)){
                $this->db->where($condition);
            }

            return $this->db->get($table)->result();

        } else {
           return false;
        }
        
    }

    public function getById($table=null, $condition){
        if ($table&& is_array($condition)) {
            $this->db->where($condition);
            $this->db->limit(1);

            return $this->db->get($table)->row();
        } else {
            return false;
        }
        
    }


    public function insert($table=null, $data=null, $get_last_id=null){

        if($table&& is_array($data)){
               $this->db->insert($table, $data);
               
               if($get_last_id){
                    $this->session->set_userdata('last_id', $this->db->insert_id());
               }

               if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('sucesso','Dados inseridos com sucesso');
                } else {
                   $this->session->set_flashdata('error','Erro ao inserir dados na base de dados');
                }
               
        }

    }


    public function update($table=0, $data=null, $condition=null){
        if($table && is_array($data) && is_array($condition) ){

            if($this->db->update($table, $data, $condition)){
                $this->session->set_flashdata('sucesso','Dados actualizados com sucesso');
            }else{

                $this->session->set_flashdata('error','Erro ao actualizar os  dados');
            }

        }else{
            return false;
        }
    }


    public function delete($table=null, $condition=null){
       
      $this->db->db_debug=false;
       
        if($table && is_array($condition)){
            $status = $this->db->delete($table, $condition);
            $error = $this->db->error();
 
            if(!$status){
                foreach ($error as $code) {
                    if($code===1451){
                        $this->session->set_flashdata('error','Essse registro nao podera ser excluido porque esta a ser utilizado noutra tabela');
                    }
                }
            }else{
                $this->session->set_flashdata('sucesso','Registro excluido com sucesso');
            }

        }else{
             return false;
        }
    }

}

http://localhost/vasco/ordem/public/vendor/fontawesome-free/css/all.min.css