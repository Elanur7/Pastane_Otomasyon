<?php
$server='localhost';
$user='285005';
$password='123456789';
$database='285005';

$baglanti=mysqli_connect($server,$user,$password,$database);

if(!$baglanti){
    echo "Mysql sunucusu ile baglantı kurulamadı"; 
    echo  "hata" . mysqli_connect_error();
    exit;
}
?>