<?php
class M_pesanan extends CI_Model{
 
     
    function getLastUrutPesanan(){
        $hasil=$this->db->query("SELECT (nourutjalan) AS urut FROM urutpesanan WHERE idurut=(SELECT MAX(idurut) FROM urutpesanan);");
        $data= $hasil->result();
        $code = $data[0]->urut; //convert as string 
        return $code;
    }

    function insertpesanan($kodepesanan,$kodebarang,$namabarang,$qty,$hj,$total,$user){
    	$hasil=$this->db->query("INSERT INTO surat_pesanan_detail_temp(kodepesanan,kodebarang,namabarang,qty,hargajual,totalharga,username) VALUES('$kodepesanan','$kodebarang','$namabarang',$qty,$hj,$total,'$user')");
        return $hasil;
    }

    function listtemp($kodepesanan){
        $hasil=$this->db->query("SELECT * from surat_pesanan_detail_temp where kodepesanan='$kodepesanan'");
        return $hasil->result();
    }

    function total_harga_temp($kodepesanan){
    	$query = $this->db->query("SELECT SUM(totalharga) AS total FROM surat_pesanan_detail_temp where kodepesanan='$kodepesanan'");
    	return $query->result();	
    }

    function deletetemp($id){
    	$query = $this->db->query("DELETE from surat_pesanan_detail_temp where id=$id");
    	return $query;
    }

    function addsuratpesanan($kodepesanan,$tglpesanan,$kodepel,$totalhj,$kodesales,$username){
    	$sql_query=$this->db->query("call spInsertPesanan('".$kodepesanan."','".$tglpesanan."','".$kodepel."',".$totalhj.",'".$kodesales."','".$username."')");
    	return $sql_query;
    }

    function total_surat_pesanan(){
    	$query = $this->db->query("SELECT COUNT(kodepesanan) AS total FROM surat_pesanan");
    	return $query->result();	
    }

    function total_surat_jalan(){
    	$query = $this->db->query("SELECT COUNT(nomor_surat) AS total FROM surat_jalan");
    	return $query->result();	
    }

    function total_sales(){
    	$query = $this->db->query("SELECT COUNT(kodesales) AS total FROM sales");
    	return $query->result();	
    }
    
}