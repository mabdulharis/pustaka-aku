<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Web extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper('url');

    }

    public function index(){
        $data['judul'] = "Halaman Depan";
        $this->load->view('V_headerojol',$data);
        $this->load->view('v_indexojol',$data);
        $this->load->view('v_footerojol',$data);
    }
    public function about()
 {
 $data['judul'] = "Halaman About";
 $this->load->view('v_headerojol', $data);
 $this->load->view('v_aboutojol', $data);
 $this->load->view('v_footerojol', $data);
 }

}

