<?php
class robot{
	public $suara;
	public $berat;
	public $tinggal;
	public $bulu;
	//konstrakter
	public function __costruck(){
	}
	public function set_suara($suara){
		$this -> suara =$suara;
	}
	public function get_suara(){
		return $this -> suara;
	}
	public function set_berat($berat){
		$this -> berat =$berat;
		}
	public function get_berat(){
		return $this -> berat;
	}
	public function set_tinggal($tinggal){
		$this -> tinggal =$tinggal;
	}
	public function get_tinggal(){
		return $this -> tinggal;
	}
	public function set_bulu($bulu){
		$this -> bulu =$bulu;
	}
	public function get_bulu(){
		return $this -> bulu;
	}
	}
	?>