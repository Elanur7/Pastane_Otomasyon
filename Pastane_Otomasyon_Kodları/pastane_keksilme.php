<?php
//mysql bağlantı
include ("pastane_baglan.php");
session_start();

$silinecekID=$_GET['kekıd'];


$sql="DELETE  FROM kekler WHERE kekıd=".$silinecekID;


$cevap=mysqli_query($baglanti,$sql);

   if(!$cevap){
    echo "Hata:" .mysqli_error($baglanti);
  }
   else{
    echo "<script>alert('Kek silme işlemi başarı ile tamamlandı.')</script>";
    header('Location:keklistele.php');
  }
?>