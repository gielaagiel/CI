<?php
 
require APPPATH . '/libraries/REST_Controller.php';
 
class krs extends REST_Controller {
 
    function __construct($config = 'rest') {
        parent::__construct($config);
    }
 
    // show data krs
    function index_get() {
        $kd_krs = $this->get('kd_krs');
        if ($kd_krs == '') {
            $krs = $this->db->get('krs')->result();
        } else {
            $this->db->where('kd_krs', $kd_krs);
            $krs = $this->db->get('krs')->result();
        }
        $this->response($krs, 200);
    }
 
    // insert new data to krs
    function index_post() {
        $data = array(
                    'kd_krs'           => $this->post('kd_krs'),
                    'nim'          => $this->post('nim'),
                    'sks'         => $this->post('sks'));
        $insert = $this->db->insert('krs', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // update data krs
    function index_put() {
        $kd_krs = $this->put('kd_krs');
        $data = array(
                    'kd_krs'       => $this->put('kd_krs'),
                    'nim'      => $this->put('nim'),
                    'sks'     => $this->put('sks'));
        $this->db->where('kd_krs', $kd_krs);
        $update = $this->db->update('krs', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // delete krs
    function index_delete() {
        $kd_krs = $this->delete('kd_krs');
        $this->db->where('kd_krs', $kd_krs);
        $delete = $this->db->delete('krs');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
}