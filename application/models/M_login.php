<?php
class M_login extends CI_Model{
 
    function login_process($user,$pass){
        $hasil=$this->db->query("SELECT * from user where username='$user' and password='$pass'");
        $row = $hasil->row();
        return $row;
    }
     
}