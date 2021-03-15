<?php

class Makanan {
	
	public $nama;
	public $jumlah;
	public $harga;
    public $totalharga;
	public $status;
	
	public $model;
	
	public function getNama(){
		return "Nama Makanan  : " . $this -> nama;
	}
	
	public function getJumlah(){
		return "Jumlah : ".$this -> jumlah;
	}
	
    public function getHarga(){
		return "Harga : ".$this -> harga;
	}

    public function getTotalharga(){
        return "Total Harga : ". $this->harga * $this->jumlah;
    }

	public function getStatus(){
		if ($this -> harga != null )$status = "Sudah Bayar";
		else $status = 'Belum Bayar';
		return "$status";
	}
	
}

$nasigoreng = new Makanan();

$nasigoreng -> nama = 'Nasi Goreng';
$nasigoreng -> jumlah = 3;
$nasigoreng -> harga = 5000;

echo $nasigoreng -> getNama();
echo "<br/>";
echo $nasigoreng -> getJumlah();
echo "<br/>";
echo $nasigoreng -> getHarga();
echo "<br/>";
echo $nasigoreng -> getTotalharga();
echo "<br/>";
echo "Status : ".$nasigoreng -> getStatus();

?>