<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('m_barang');
        $this->load->database();
    } 

	public function index(){
		$this->load->view('vbarang');
	}

    function getAllBarang(){
         $data=$this->m_barang->barang_list();
    }    

	function get_barang(){
        $kobar=$this->input->get('id');// post id from javascript
        $data=$this->m_barang->get_barang_by_kode($kobar);
        echo json_encode($data);
    }

	public function data_barang(){
        $data=$this->m_barang->barang_list();
        echo json_encode($data);
    }

    function simpan_barang(){
        $kobar=$this->input->post('kobar');
        $nabar=$this->input->post('nabar');
        $data=$this->m_barang->simpan_barang($kobar,$nabar);
        echo json_encode($data);
    }
 
    function update_barang(){
        $kobar=$this->input->post('kobar');
        $kobar2=$this->input->post('kobar2');
        $nabar=$this->input->post('nabar');
        $data=$this->m_barang->update_barang($kobar,$kobar2,$nabar);
        echo json_encode($data);
    }
 
    function hapus_barang(){
        $kobar=$this->input->post('kode');
        $data=$this->m_barang->hapus_barang($kobar);
        echo json_encode($data);
    }
}