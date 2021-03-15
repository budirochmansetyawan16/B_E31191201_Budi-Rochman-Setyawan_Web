<?php 
	class Item{
		private $item;

		public function Ukuran($item){
			$ukuran = $this -> item = $item ;
			return "Ukuran : ".$ukuran."<br/>";
		}

		public function Warna($item){
			$warna = $this -> item = $item ;
			return "Warna : ".$warna."<br/>";
		}

		public function Nama($item){
			$Nama = $this -> item = $item;
			return "Nama : ".$Nama."<br/>";
		}
	}

	class Topi extends item{
		private $model='Sport';

		public function modelTopi(){
			$model= $this -> model;
			return "Jenis Topi : ".$model."<br>";
		}
	}

	class Celana extends item{
		private $tipe='Klasik';
		private $model='Jeans';

		public function tipeCelana(){
			$tipe= $this -> tipe;
			return "Tipe Celana : ".$tipe."<br>";
		}

		public function modelCelana(){
			$model= $this -> model;
			return "Model Celana : ".$model."<br>";
		}
	}

	class Baju extends item{
		private $tipe="Kaos";

		public function tipeBaju(){
			$tipe= $this -> tipe;
			return "Jenis Baju : ".$tipe."<br>";
		}
	}

	$Topi = new Topi();
	$Celana = new Celana();
	$Baju = new Baju();

    $topi = $Topi->modelTopi();
    $ukuranTopi = $Topi->Ukuran('10');
    $warnaTopi = $Topi->Warna('Hitam');
    $namaTopi = $Topi->Nama('Nike');

    $tipeCelana = $Celana->tipeCelana();
    $modelCelana = $Celana->modelCelana();
    $ukuranCelana = $Celana->Ukuran('32');
    $warnaCelana = $Celana->Warna('Cream');
    $namaCelana = $Celana->Nama('Nike');

	$baju = $Baju-> tipeBaju();
    $ukuranBaju = $Baju-> Ukuran('L');
    $warnaBaju = $Baju-> Warna('Merah');
	$namaBaju = $Baju-> Nama('Jersey Man United');

    echo "<strong>TOPI</strong> <br/>";
	echo $topi;
	echo $namaTopi;
	echo $warnaTopi;
	echo $ukuranTopi;

    echo "<strong>CELANA</strong> <br/>";
	echo $tipeCelana;
    echo $modelCelana;
	echo $namaCelana;
	echo $warnaCelana;
	echo $ukuranCelana;

	echo "<strong>BAJU</strong> <br/>";
	echo $baju;
	echo $namaBaju;
	echo $warnaBaju;
	echo $ukuranBaju;
 ?>