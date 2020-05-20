<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('M_pelanggan');
        $this->load->database();
    } 

	public function index(){
		$this->load->view('vpelanggan');
	}

    function pelanggans(){
         $data=$this->M_pelanggan->pelanggan_list();
         //echo json_encode($data);
    }    

	function getPelangganByKode(){
        $kodepel=$this->input->get('kode');// post id from javascript
        $data=$this->M_pelanggan->pelanggan_list_kode($kodepel);
        echo json_encode($data);
    }

	
}