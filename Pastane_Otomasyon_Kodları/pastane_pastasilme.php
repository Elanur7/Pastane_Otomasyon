<?php
//mysql bağlantı
include ("pastane_baglan.php");
session_start();


$silinecekID=$_GET['pastaıd'];


$sql="DELETE  FROM pastalar WHERE pastaıd=".$silinecekID;


$cevap=mysqli_query($baglanti,$sql);

   if(!$cevap){
    echo "Hata:" .mysqli_error($baglanti);
  }
   else{
    echo "<script>alert('Pasta silme işlemi başarı ile tamamlandı.')</script>";
    header('Location:pastalistele.php');
  }
?>