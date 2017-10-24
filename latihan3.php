<?php
require_once 'index2.php';

$nama = new biodata();
$tempat_lahir = new biodata();
$kelas = new biodata();
$statuss = new biodata();

$nama ->set_nama(' rima widianti');
$tempat_lahir ->set_tempat_lahir('bandung');
$kelas ->set_kelas('xiii');
$statuss ->set_statuss('mahasiswi');

echo "nama saya adalah ?....".$nama-> get_nama().'<br>','tempat_lahir saya?....'.$tempat_lahir->get_tempat_lahir().'<br>','kelas ?....'.$kelas->get_kelas().'<br>','statuss saya?....'.$statuss->get_statuss().'<br>';



$nama ->set_nama(' siti aisyah');
$tempat_lahir ->set_tempat_lahir('garut');
$kelas ->set_kelas('xi');
$statuss ->set_statuss('pelajar');

echo "nama saya adalah ?....".$nama-> get_nama().'<br>','tempat_lahir saya ?....'.$tempat_lahir->get_tempat_lahir().'<br>','kelas ?....'.$kelas->get_kelas().'<br>','statuss saya?....'.$statuss->get_statuss().'<br>';



$nama ->set_nama(' rizki mardiansyah');
$tempat_lahir ->set_tempat_lahir('garut');
$kelas ->set_kelas('1');
$statuss ->set_statuss('pelajar');

echo "nama saya adalah ?....".$nama-> get_nama().'<br>','tempat_lahir saya?....'.$tempat_lahir->get_tempat_lahir().'<br>','kelas ?....'.$kelas->get_kelas().'<br>','statuss saya?....'.$statuss->get_statuss().'<br>';



$nama ->set_nama(' rian hidayat');
$tempat_lahir ->set_tempat_lahir('garut');
$kelas ->set_kelas('x');
$statuss ->set_statuss('pelajar');

echo "nama saya adalah ?....".$nama-> get_nama().'<br>','tempat_lahir saya?....'.$tempat_lahir->get_tempat_lahir().'<br>','kelas ?....'.$kelas->get_kelas().'<br>','statuss saya?....'.$statuss->get_statuss().'<br>';



$nama ->set_nama(' aji apriansyah');
$tempat_lahir ->set_tempat_lahir('garut');
$kelas ->set_kelas('xi');
$statuss ->set_statuss('pelajar');

echo "nama saya adalah ?....".$nama-> get_nama().'<br>','tempat_lahir saya?....'.$tempat_lahir->get_tempat_lahir().'<br>','kelas ?....'.$kelas->get_kelas().'<br>','statuss saya?....'.$statuss->get_statuss().'<br>';
?>