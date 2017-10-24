<?php
class robot{
	public $suara;
	public $berat;
	
	public function set_suara($suara){
		$this ->suara =$suara;
	}
	public function set_berat($barat){
		$this ->berat =$barat;
	}
	public function get_suara(){
		return $this ->suara;
		}
	public function get_berat(){
		return $this ->berat;
		}
	}
		$robot = new robot;
		$robot -> set_suara(' au au');
		echo "suara" .$robot-> get_suara();
		$robot = new robot;
		$robot -> set_berat(420);
		echo "berat" .$robot-> get_berat();
	?>