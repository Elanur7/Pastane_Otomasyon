<?php
//mysql bağlantı
include ("pastane_baglan.php");
session_start();

$silinecekID=$_GET['kurabiyeıd'];


$sql="DELETE  FROM kurabiyeler WHERE kurabiyeıd=".$silinecekID;


$cevap=mysqli_query($baglanti,$sql);

   if(!$cevap){
    echo "Hata:" .mysqli_error($baglanti);
  }
   else{
    echo "<script>alert('Kurabiye silme işlemi başarı ile tamamlandı.')</script>";
    header('Location:kurabiyelistele.php');
  }
?>