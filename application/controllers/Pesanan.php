<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('M_barang');
        $this->load->model('M_pesanan');
        $this->load->model('M_pelanggan');
        $this->load->helper('form'); 
        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
    }

	public function index(){
        $data['barang'] = $this->M_barang->barang_list();
        $data['lasturut']= $this->urut();
        $data['pelanggans']= $this->M_pelanggan->pelanggan_list();
		$this->load->view('vpesanan',$data);
	}

    public function urut(){
        $new_code_sp="";//send new code
        $date_today= date('ymd');
        $final_format="";
        //echo $date_today.'<br>';
        $data = $this->M_pesanan->getLastUrutPesanan();
        //echo $data;
        $last = substr($data, 8,12);
        $database_date = substr($data, 2,6);        
        //echo $database_date;
        if(strcmp($database_date, $date_today) !== 0){
        $length = strlen($last);       
        $intdata = intval($last);
        $new = 0+1;
        $newstrcode = strval($new);
        //echo $newstrcode;
        //echo "length ".strlen($newstrcode);        
        $newformat="";
            for($i=strlen($newstrcode);$i<4;$i++){
               $newformat = $newformat."0";
            }      
        $format_send = $newformat.$newstrcode;  
        $final_format = "SP".$date_today.$format_send;
        //echo $final_format;
        }else{
            $length = strlen($last);       
        $intdata = intval($last);
        $new = $intdata+1;
        $newstrcode = strval($new);
        //echo $newstrcode;
        //echo "length ".strlen($newstrcode);        
        $newformat="";
            for($i=strlen($newstrcode);$i<4;$i++){
               $newformat = $newformat."0";
            }      
        $format_send = $newformat.$newstrcode;  
        $final_format = "SP".$date_today.$format_send;
        //echo $final_format;
        }
       
        return $final_format;
    }

    public function urut_json(){
        $new_code_sp="";//send new code
        $date_today= date('ymd');
        $final_format="";
        //echo $date_today.'<br>';
        $data = $this->M_pesanan->getLastUrutPesanan();
        //echo $data;
        $last = substr($data, 8,12);
        $database_date = substr($data, 2,6);        
        //echo $database_date;
        if(strcmp($database_date, $date_today) !== 0){
        $length = strlen($last);       
        $intdata = intval($last);
        $new = 0+1;
        $newstrcode = strval($new);
        //echo $newstrcode;
        //echo "length ".strlen($newstrcode);        
        $newformat="";
            for($i=strlen($newstrcode);$i<4;$i++){
               $newformat = $newformat."0";
            }      
        $format_send = $newformat.$newstrcode;  
        $final_format = "SP".$date_today.$format_send;
        //echo $final_format;
        }else{
            $length = strlen($last);       
        $intdata = intval($last);
        $new = $intdata+1;
        $newstrcode = strval($new);
        //echo $newstrcode;
        //echo "length ".strlen($newstrcode);        
        $newformat="";
            for($i=strlen($newstrcode);$i<4;$i++){
               $newformat = $newformat."0";
            }      
        $format_send = $newformat.$newstrcode;  
        $final_format = "SP".$date_today.$format_send;
        //echo $final_format;
        }
        $pesanan = new \stdClass();
        $pesanan->urut = $final_format;
        $JSON = json_encode($pesanan);
        echo $JSON;
    }

    public function test(){
        $data['barang'] = $this->M_barang->barang_list();
        foreach ($data['barang'] as $key ) {
            echo $key->kodebarang; // manual display
        }
    }

    public function insertPesananTemp(){
        $kodepesanan = $this->input->post('kodepesanan');
        $kodebarang = $this->input->post('kodebarang');
        $namabarang = $this->input->post('namabarang');
        $qty = $this->input->post('qty');
        $hj = $this->input->post('harga');
        $total = $this->input->post('total');
        $user = $this->input->post('username');
        $data= $this->M_pesanan->insertpesanan($kodepesanan,$kodebarang,$namabarang,$qty,$hj,$total,$user);
        echo json_encode($data);
    }

    public function pesanantemp($kodepesanan){
        $data=$this->M_pesanan->listtemp($kodepesanan);        
        //array_push($data, array('totalharga' => $this->get_totalharga_tempByParams($kodepesanan)));
        echo json_encode($data);
    }

    public function hapustemp(){
        $id = $this->input->post('id');
        $data = $this->M_pesanan->deletetemp($id);
        echo json_encode($data);
    }

    function get_totalharga_temp(){
        $total=$this->input->post('kodepesanan');// post id from javascript
        $data =$this->M_pesanan->total_harga_temp($total);
        echo json_encode($data);
    }

    function get_totalharga_tempByParams($kodepesanan){        
        $grandtotal=0;
        $data =$this->M_pesanan->total_harga_temp($kodepesanan);
        foreach ($data as $key) {
            $grandtotal=$key->total;
        }
        return $grandtotal;
    }

    function get_totalharga_temp_json(){   
        $kodepesanan = $this->input->post('kode');     
        $grandtotal=0;
        $data =$this->M_pesanan->total_harga_temp($kodepesanan);        
        echo json_encode($data);
    }

    function addpesanan(){
        $kodepesanan = $this->input->post('kopes');  
        $tglpesanan = $this->input->post('tglpes'); 
        $kodepel = $this->input->post('kodpel');   
        $totalhj = $this->input->post('grandtotal');  
        $kodesales = $this->input->post('kodesales');  
        $username = $this->input->post('username');  
        $data = $this->M_pesanan->addsuratpesanan($kodepesanan,$tglpesanan,$kodepel,$totalhj,$kodesales,$username);
        echo json_encode($data);
    }

    function gettotalpesanan(){
        $data =$this->M_pesanan->total_surat_pesanan();
        echo json_encode($data);
    }

    function gettotaljalan(){
        $data =$this->M_pesanan->total_surat_jalan();
        echo json_encode($data);
    }

    function gettotalsales(){
        $data =$this->M_pesanan->total_sales();
        echo json_encode($data);
    }

    public function send_mail() { 
      // Konfigurasi email
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'admin@ajbsmg.com',  // Email gmail
            'smtp_pass'   => 'Semarang2020!',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from('admin@ajbsmg.com', 'Tendy.com');

        // Email penerima
        $this->email->to('deteksiasmara@gmail.com'); // Ganti dengan email tujuan

        // Lampiran email, isi dengan url/path file
        $this->email->attach('https://masrud.com/content/images/20181215150137-codeigniter-smtp-gmail.png');

        // Subject email
        $this->email->subject('Kirim Email dengan SMTP Gmail CodeIgniter | MasRud.com');

        // Isi email
        $this->email->message("Ini adalah contoh email yang dikirim menggunakan SMTP Gmail pada CodeIgniter.<br><br> Klik <strong><a href='https://masrud.com/post/kirim-email-dengan-smtp-gmail' target='_blank' rel='noopener'>disini</a></strong> untuk melihat tutorialnya.");

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            echo 'Sukses! email berhasil dikirim.';
        } else {
            echo 'Error! email tidak dapat dikirim.';
        }
    }

}