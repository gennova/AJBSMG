<?php
class M_barang extends CI_Model{
 
     
    function barang_list(){
        $hasil=$this->db->query("SELECT * FROM barang");
        return $hasil->result();
    }

    function simpan_barang($kobar,$nabar){
        $hasil=$this->db->query("INSERT INTO barang (kodebarang,namabarang)VALUES('$kobar','$nabar')");
        return $hasil;
    }
 
    function get_barang_by_kode($kobar){
        $hsl=$this->db->query("SELECT * FROM barang WHERE id='$kobar'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                	'barang_id' => $data->id,
                    'barang_kode' => $data->kodebarang,
                    'barang_nama' => $data->namabarang,
                    );
            }
        }
        return $hasil;
    }
 
    function update_barang($kobar,$kobar2,$nabar){
        $hasil=$this->db->query("UPDATE barang SET kodebarang='$kobar2',namabarang='$nabar' WHERE id='$kobar'");
        return $hasil;
    }
 
    function hapus_barang($kobar){
        $hasil=$this->db->query("DELETE FROM barang WHERE id='$kobar'");
        return $hasil;
    }
     
}