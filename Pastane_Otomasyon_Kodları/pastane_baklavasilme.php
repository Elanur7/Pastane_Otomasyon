<?php
include ("pastane_baglan.php");
session_start();

$silinecekID=$_GET['baklavaıd'];


$sql="DELETE  FROM baklavalar WHERE baklavaıd=".$silinecekID;


$cevap=mysqli_query($baglanti,$sql);

   if(!$cevap){
    echo "Hata:" .mysqli_error($baglanti);
  }
   else{
    echo "<script>alert('Baklava silme işlemi başarı ile tamamlandı.')</script>";
    header('Location:baklavalistele.php');
  }
?>