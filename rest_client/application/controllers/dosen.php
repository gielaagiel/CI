<?php
Class dosen extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="http://localhost/uts/rest_server/index.php";
    }
    
    // menampilkan data dosen
    function index(){
        $data['dosen'] = json_decode($this->curl->simple_get($this->API.'/dosen'));
        $this->load->view('dosen/list',$data);
    }
    
    // insert data dosen
    function create(){
        if(isset($_POST['submit'])){
            $data = array(
                'id_dosen'       =>  $this->input->post('id_dosen'),
                'nama_dosen'      =>  $this->input->post('nama_dosen'),
                'kdmk'     =>  $this->input->post('kdmk'));
            $insert =  $this->curl->simple_post($this->API.'/dosen', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('dosen');
        }else{
            $data['kdmk'] = json_decode($this->curl->simple_get($this->API.'/kdmk'));
            $this->load->view('dosen/create',$data);
        }
    }
    
    // edit data dosen
    function edit(){
        if(isset($_POST['submit'])){
            $data = array(
                'id_dosen'       =>  $this->input->post('id_dosen'),
                'nama_dosen'      =>  $this->input->post('nama_dosen'),
                'kdmk'     =>  $this->input->post('kdmk'));
            $update =  $this->curl->simple_put($this->API.'/dosen', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('dosen');
        }else{
            $data['kdmk'] = json_decode($this->curl->simple_get($this->API.'/kdmk'));
            $params = array('id_dosen'=>  $this->uri->segment(3));
            $data['dosen'] = json_decode($this->curl->simple_get($this->API.'/dosen',$params));
            $this->load->view('dosen/edit',$data);
        }
    }
    
    // delete data dosen
    function delete($id_dosen){
        if(empty($id_dosen)){
            redirect('dosen');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/dosen', array('id_dosen'=>$id_dosen), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('dosen');
        }
    }
}