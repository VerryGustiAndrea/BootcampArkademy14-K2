<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Dasbor extends CI_Controller {

    //index login
    public function index(){
        $data  = array( 'title' =>  'Halaman Dasbor',
                        'isi'   =>  'dasbor_view');
        $this->load->view('layout/wrapper',$data);
    }
}

