<?php
    class Mahasiswa_model extends CI_Model {
        public function get_data(){
            $data_mahasiswa = [
                ["nama"=>"Kim Jefry","prodi"=>"MIF"],
                ["nama"=>"Ahmad Kurniawan","prodi"=>"TKK"],
                ["nama"=>"Budi Sudarsono","prodi"=>"TIF"]
            ];
            return $data_mahasiswa;
        }
        public function get_data2(){
            $data_prodi = [
                ["prodi"=>"MIF", "ket"=>"Manajemen Informatika"],
                ["prodi"=>"TKK", "ket"=>"Teknik Komputer"],
                ["prodi"=>"TIF", "ket"=>"Teknik Informatika"]
            ];
            return $data_prodi;
        }
        public function get_data3(){
            $data_angkatan = [
                ["tahun"=>"2016"],
                ["tahun"=>"2017"],
                ["tahun"=>"2018"]
            ];
            return $data_angkatan;
        }
    }
?>