<?php
include ("pastane_baglan.php");
session_start();

$silinecekID=$_GET['börekıd'];


$sql="DELETE  FROM börekler WHERE börekıd=".$silinecekID;


$cevap=mysqli_query($baglanti,$sql);

   if(!$cevap){
    echo "Hata:" .mysqli_error($baglanti);
  }
   else{
    echo "<script>alert('Börek silme işlemi başarı ile tamamlandı.')</script>";
    header('Location:böreklistele.php');
  }
?>