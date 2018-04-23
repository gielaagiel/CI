<?php
 
require APPPATH . '/libraries/REST_Controller.php';
 
class dosen extends REST_Controller {
 
    function __construct($config = 'rest') {
        parent::__construct($config);
    }
 
    // show data dosen
    function index_get() {
        $id_dosen = $this->get('id_dosen');
        if ($id_dosen == '') {
            $dosen = $this->db->get('dosen')->result();
        } else {
            $this->db->where('id_dosen', $id_dosen);
            $dosen = $this->db->get('dosen')->result();
        }
        $this->response($dosen, 200);
    }
 
    // insert new data dosen
    function index_post() {
        $data = array(
                    'id_dosen'           => $this->post('id_dosen'),
                    'nama_dosen'         => $this->post('nama_dosen'),
                    'kdmk'               => $this->post('kdmk'));
        $insert = $this->db->insert('dosen', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // update data dosen
    function index_put() {
        $id_dosen = $this->put('id_dosen');
        $data = array(
                    'id_dosen'       => $this->put('id_dosen'),
                    'nama_dosen'      => $this->put('nama_dosen'),
                    'kdmk'     => $this->put('kdmk'));
        $this->db->where('id_dosen', $id_dosen);
        $update = $this->db->update('dosen', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // delete dosen
    function index_delete() {
        $id_dosen = $this->delete('id_dosen');
        $this->db->where('id_dosen', $id_dosen);
        $delete = $this->db->delete('dosen');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
}