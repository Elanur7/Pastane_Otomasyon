<?php
//mysql bağlantı
include("pastane_baglan.php");
session_start();
extract($_POST);

 $uyeadi = $_POST['uyeadi'];
 $uyesoyadi = $_POST['uyesoyadi'];
 $uyemail = $_POST['uyemail'];
 $uyesifre = $_POST['uyesifre'];

if(empty($uyeadi) or empty($uyesoyadi) or empty($uyemail) or empty($uyesifre)){
    echo "Boş alan bırakmayınız";
}
else{
 
  $sql="INSERT INTO uyeler".
  "(uyeadi,uyesoyadi,uyemail,uyesifre)".
  "VALUES('$uyeadi','$uyesoyadi','$uyemail','$uyesifre')";

  $cevap=mysqli_query($baglanti,$sql);
 
  if(!$cevap){
    echo "Hata:" .mysqli_error($baglanti);
}

else{
    echo "<script>alert('Kayıt olma işlemi başarı ile tamamlandı.')</script>";
    header('Location:index.php');
}
}
?>