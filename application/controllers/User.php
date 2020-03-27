<?php
    class User extends CI_controller{


        function create(){
            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('email','Email','required|valid_email');
            if($this->form_validation->run()== false){
                 $this->load->view('create');
            }else{
                //save data to database;
                $formArray= array();
            }
        }
    }
?>