<?php
Class krs extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="http://localhost/uts/rest_server/index.php";
    }
    
    // menampilkan data krs
    function index(){
        $data['krs'] = json_decode($this->curl->simple_get($this->API.'/krs'));
        $this->load->view('krs/list',$data);
    }
    
    // insert data krs
    function create(){
        if(isset($_POST['submit'])){
            $data = array(
                'kd_krs'       =>  $this->input->post('kd_krs'),
                'nim'      =>  $this->input->post('nim'),
                'sks'     =>  $this->input->post('sks'));
            $insert =  $this->curl->simple_post($this->API.'/krs', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('krs');
        }else{
            $data['sks'] = json_decode($this->curl->simple_get($this->API.'/sks'));
            $this->load->view('krs/create',$data);
        }
    }
    
    // edit data krs
    function edit(){
        if(isset($_POST['submit'])){
            $data = array(
                'kd_krs'       =>  $this->input->post('kd_krs'),
                'nim'      =>  $this->input->post('nim'),
                'sks'     =>  $this->input->post('sks'));
            $update =  $this->curl->simple_put($this->API.'/krs', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('krs');
        }else{
            $data['sks'] = json_decode($this->curl->simple_get($this->API.'/sks'));
            $params = array('kd_krs'=>  $this->uri->segment(3));
            $data['krs'] = json_decode($this->curl->simple_get($this->API.'/krs',$params));
            $this->load->view('krs/edit',$data);
        }
    }
    
    // delete data krs
    function delete($kd_krs){
        if(empty($kd_krs)){
            redirect('krs');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/krs', array('kd_krs'=>$kd_krs), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('krs');
        }
    }
}