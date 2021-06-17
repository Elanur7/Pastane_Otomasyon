<?php
//mysql bağlantı
include ("pastane_baglan.php");
?>
<?php
$baklavaadi = $_POST['baklavaadi'];
$baklavafiyati = $_POST['baklavafiyati'];

if(empty($baklavaadi) or empty($baklavafiyati)){
   echo "Boş alan bırakmayınız";
}
else{
 $sql="INSERT INTO baklavalar".
 "(baklavaadi,baklavafiyati)".
 "VALUES('$baklavaadi','$baklavafiyati')";

 $cevap=mysqli_query($baglanti,$sql);
 
 if(!$cevap){
   echo "Hata:" .mysqli_error($baglanti);
}

else{
   echo "<script>alert('Baklava ekleme işlemi başarı ile tamamlandı.')</script>";
   header('Location:baklavalistele.php');
}
}


?>