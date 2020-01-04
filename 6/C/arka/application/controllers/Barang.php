<?php
defined('BASEPATH') OR exit ('No direct script access allowed');


class Barang extends CI_Controller{

    public function index(){
        $data  = array( 'title' =>  'Management Barang',
                        'isi'   =>  'v_barang');
        $this->load->view('layout/wrapper',$data);
    }


    function __construct(){
        parent::__construct();
        $this->load->model('m_barang');
    }




    function data_barang(){
        $data=$this->m_barang->barang_list();
        echo json_encode($data);
    }

    function get_barang(){
        $kobar=$this->input->get('id');
        $data=$this->m_barang->get_barang_by_kode($kobar);
        echo json_encode($data);
    }

    function simpan_barang(){
        $id_cashier=$this->input->post('id_cashier');
        $name=$this->input->post('name');
        $id_category=$this->input->post('id_category'); 
        $price=$this->input->post('price');
        $data=$this->m_barang->simpan_barang($id_cashier, $name, $id_category, $price);
        echo json_encode($data);
    }

    function update_barang(){
        $kobar=$this->input->post('kobar');
        $nabar=$this->input->post('nabar');
        $harga=$this->input->post('harga');
        $data=$this->m_barang->update_barang($kobar,$nabar,$harga);
        echo json_encode($data);
    }
 
    function hapus_barang(){
        $kobar=$this->input->post('kode');
        $data=$this->m_barang->hapus_barang($kobar);
        echo json_encode($data);
    }
}