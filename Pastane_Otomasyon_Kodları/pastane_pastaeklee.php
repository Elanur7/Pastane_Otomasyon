<?php
//mysql bağlantı
include ("pastane_baglan.php");
?>
<?php
$pastaadi = $_POST['pastaadi'];
$pastafiyati = $_POST['pastafiyati'];

if(empty($pastaadi) or empty($pastafiyati)){
   echo "Boş alan bırakmayınız";
}
else{
 $sql="INSERT INTO pastalar".
 "(pastaadi,pastafiyati)".
 "VALUES('$pastaadi','$pastafiyati')";

 $cevap=mysqli_query($baglanti,$sql);

 if(!$cevap){
   echo "Hata:" .mysqli_error($baglanti);
}
else{
   echo "<script>alert('Pasta ekleme işlemi başarı ile tamamlandı.')</script>";
   header('Location:pastalistele.php');
}
}


?>