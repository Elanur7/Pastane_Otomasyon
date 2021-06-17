<?php
//mysql bağlantı
include ("pastane_baglan.php");
session_start();

$silinecekID=$_GET['icecekıd'];


$sql="DELETE  FROM icecekler WHERE icecekıd=".$silinecekID;


$cevap=mysqli_query($baglanti,$sql);

   if(!$cevap){
    echo "Hata:" .mysqli_error($baglanti);
  }
   else{
    echo "<script>alert('İçecek silme işlemi başarı ile tamamlandı.')</script>";
    header('Location:iceceklistele.php');
  }
?>