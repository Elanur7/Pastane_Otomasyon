<?php
//mysql bağlantı
include ("pastane_baglan.php");
?>
<?php
$kekadi = $_POST['kekadi'];
$kekfiyati = $_POST['kekfiyati'];

if(empty($kekadi) or empty($kekfiyati)){
   echo "Boş alan bırakmayınız";
}
else{
 $sql="INSERT INTO kekler".
 "(kekadi,kekfiyati)".
 "VALUES('$kekadi','$kekfiyati')";

 $cevap=mysqli_query($baglanti,$sql);
 
 if(!$cevap){
   echo "Hata:" .mysqli_error($baglanti);
}

else{
   echo "<script>alert('Kek ekleme işlemi başarı ile tamamlandı.')</script>";
   header('Location:keklistele.php');
}
}


?>