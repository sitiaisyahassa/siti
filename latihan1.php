<center>
<?php
class bilangan{
public $bli1,$bli2;
	function set_penjumlahan($bilangan1,$bilangan2){
	$this ->bil1 =$bilangan1;
	$this ->bil2 =$bilangan2;
	echo "perhitungan nilai 21 dan 3 :".'<br>';
}
function set_pengurangan($bilangan1,$bilangan2){
	$this ->bil1 =$bilangan1;
	$this ->bil2 =$bilangan2;
}
function set_pembagian($bilangan1,$bilangan2){
	$this ->bil1 =$bilangan1;
	$this ->bil2 =$bilangan2;
}
function set_perkalian($bilangan1,$bilangan2){
	$this ->bil1 =$bilangan1;
	$this ->bil2 =$bilangan2;
}
function get_penjumlahan(){
	return $this->bil1 + $this->bil2;
}
function get_pengurangan(){
	return $this->bil1 - $this->bil2;
}
function get_pembagian(){
	return $this->bil1 / $this->bil2;
}
function get_perkalian(){
	return $this->bil1 * $this->bil2;
}
}

$penjumlahan1 = new bilangan;
$penjumlahan1->set_penjumlahan(21,3);
echo "hasilpenjumlahan :".$penjumlahan1->get_penjumlahan().'<br>';
$pengurangan1 = new bilangan;
$pengurangan1->set_pengurangan(21,3);
echo "hasilpengurangan :".$pengurangan1->get_pengurangan().'<br>';
$pembagian1 = new bilangan;
$pembagian1->set_pembagian(21,3);
echo "hasilpembagian :".$pembagian1->get_pembagian().'<br>';
$perkalian1 = new bilangan;
$perkalian1->set_perkalian(21,3);
echo "hasilperkalian :".$perkalian1->get_perkalian().'<br>';
?>
</center>