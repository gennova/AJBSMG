<?php
class M_pelanggan extends CI_Model{
 
     
    function pelanggan_list(){
        $hasil=$this->db->query("SELECT * FROM pelanggan");
        return $hasil->result();
    }


    function pelanggan_list_kode($kodepel){
        $hsl=$this->db->query("SELECT * FROM pelanggan WHERE id='$kodepel'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                	'id' => $data->id,
                    'kode' => $data->kode,
                    'nama' => $data->nama,
                    'alamat' => $data->alamat,
                    'email' => $data->email,
                    );
            }
        }
        return $hasil;
    }

     
}