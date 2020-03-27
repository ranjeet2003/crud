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
        function getUser($userId){
            $this->db->where('user_id',$userId);
            return $user= $this->db->get('users')->row_array();//select *from user where user_id=

        }
        function updateUser($userId,$formArray){
            $this->db->where('user_id',$userId);
            $this->db->update('users',$formArray);//update users set name==
        }
    }

?>