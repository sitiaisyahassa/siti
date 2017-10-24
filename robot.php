<center>
<?php
require_once 'index.php';
$robot1 = new robot(' au');
$robot2 = new robot('aung-aung');
$robot1 ->set_suara(' au au');
$robot1 ->set_berat(400);
$robot1 ->set_tinggal('dihutan');

echo "suara robot1 adalah ?....".$robot1-> get_suara().'<br>','dan beratnya'.$robot1->get_berat().'kg','<br>','dan dia tinggal di?'.$robot1->get_tinggal().'<br>';
$robot2->set_suara('aung-aung');
$robot2->set_berat(420);

echo "suara robot2 adalah ?.... ".$robot2->get_suara().'<br>','dan beratnya'.$robot2->get_berat().'kg','<br>';
?></center>
