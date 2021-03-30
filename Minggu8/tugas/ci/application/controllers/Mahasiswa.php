<?php
    defined('BASEPATH') OR exit ('No direct script access allowed');
    class Mahasiswa extends CI_Controller {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Mahasiswa_model');
        }
        public function index(){
            $data['Mahasiswa']=$this->Mahasiswa_model->get_data();
            $this->load->view('view_mahasiswa',$data);

            $data2['Prodi']=$this->Mahasiswa_model->get_data2();
            $this->load->view('view_prodi',$data2);

            $data3['Angkatan']=$this->Mahasiswa_model->get_data3();
            $this->load->view('view_angkatan',$data3);
        }
        // public function prodi(){
        //     $data2['Prodi']=$this->Mahasiswa_model->get_data2();
        //     $this->load->view('view_prodi',$data2);
        // }
        public function profil(){
            echo "ini adalah method profil pada controller Mahasiswa";
        }
    }
?>