<?php

IF (isset($_POST['dimensao'])){
	$dimensao=$_POST['dimensao'];
}
else {
	$dimensao=0;
}
IF (isset($_POST['inicio'])){
	$inicio=$_POST['inicio'];
}
else {
	$inicio=0;
}
IF (isset($_POST['fim'])){
	$fim=$_POST['fim'];
}
else {
	$fim=0;
}
IF (isset($_POST['valores'])){
	$valores=$_POST['valores'];
}
else {
	$valores=0;
}

$soma = 0;
$mult = 1;
$media = 0;

$array = array();
for ($i=0; $i < $dimensao; $i++) {
	$array[$i]=rand(1,$dimensao);
	echo $array[$i]. ' ';
}


for ($i=0; $i < $dimensao; $i++) {
	$soma = $soma + $array[$i];
	$mult = $mult * $array[$i];
	$media = $soma / $dimensao;
}
echo "<br>";	
echo "<br>";
echo "A soma dos valores é: " .$soma;
echo "<br>";
echo "<br>";
echo "O produto dos valores é: " .$mult;
echo "<br>";
echo "<br>";
echo "A média dos valores é: " .$media;














?>