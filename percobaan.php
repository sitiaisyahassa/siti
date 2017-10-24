<?php
class penjumlahan{
	public $bli1,$bli2;
	function set_nilai ($bilangan1,$bilangan2){
	$this ->bil1 =$bilangan1;
	$this ->bil2 =$bilangan2;
}
function get_nilai(){
	return $this->bil1 + $this->bil2;
}
}
$penjumlahan = new penjumlahan;
$penjumlahan->set_nilai(21,3);
echo "hasil :".$penjumlahan->get_nilai();
?>