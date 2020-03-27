<?php
    class User_model extends CI_model{
        function create($formArray)
        {
            $this->db->insert('users',$formArray);//inserting the data into database
            //insert into users (name,email,created at) values( , , ,);
        }
        function all(){
          return $users=  $this->db->get('users')->result_array();//select * from users;
        }
    }

?>