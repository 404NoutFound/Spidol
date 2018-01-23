<?php

class AlatTulis{
	
	var $warna="hitam";
	var $pemilik="badrus";
	
	function Menulis(){
		return $this->pemilik." menggunakan spidol warna ".$this->warna." untuk menulis <br/>";
	}
	function Menggambar(){
		return $this->pemilik." menggunakan spidol warna ".$this->warna." untuk menggambar <br/>";
	}
	
	function BukaSpidol(){
		return $this->pemilik." sedang membuka spidol <br/>";
	}
	
	function TutupSpidol(){
		return $this->pemilik." sedang membuka spidol <br/>";
	}
}

$obj_spidol = new AlatTulis();

echo $obj_spidol->BukaSpidol();
echo $obj_spidol->Menulis();
echo $obj_spidol->Menggambar();
echo $obj_spidol->TutupSpidol();

?>