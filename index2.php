<?php
class biodata{
	public $nama;
	public $tempat_lahir;
	public $kelas;
	public $statuss;
	//konstrakter
	public function __costruck(){
	}


	public function set_nama($nama){
		$this -> nama =$nama;
	}
	public function get_nama(){
		return $this -> nama;
	}
	public function set_tempatlahir($tempatlahir){
		$this -> tempatlahir =$tempatlahir;
		}
	public function get_tempatlahir(){
		return $this -> tempatlahir;
	}
	public function set_kelas($kelas){
		$this -> kelas =$kelas;
	}
	public function get_kelas(){
		return $this -> kelas;
	}
	public function set_statuss($statuss){
		$this -> statuss =$statuss;
	}
	public function get_statuss(){
		return $this -> statuss;
	}
	}
	?>