<?php
$dodawanie = $_POST['liczba1'] + $_POST['liczba2'];
echo $dodawanie;
$odejmowanie = $_POST['liczba1'] - $_POST['liczba2'];
echo $odejmowanie;
$mnozenie = $_POST['liczba1'] * $_POST['liczba2'];
echo $mnozenie;
//$dzielenie = $_POST['liczba1'] / $_POST['liczba2'];

if($_POST['liczba2']==0){
echo 'dzielenie przez zero nie mozliwe';
}
else
{
 $dzielenie= $_POST['liczba1'] / $_POST['liczba2'];
echo $dzielenie;
}


?>
