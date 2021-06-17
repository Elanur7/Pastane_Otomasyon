<?php
include ("pastane_baglan.php");
?>
<?php
$icecekadi = $_POST['icecekadi'];
$icecekfiyati = $_POST['icecekfiyati'];

if(empty($icecekadi) or empty($icecekfiyati)){
   echo "Boş alan bırakmayınız";
}
else{
 $sql="INSERT INTO icecekler".
 "(icecekadi,icecekfiyati)".
 "VALUES('$icecekadi','$icecekfiyati')";

 $cevap=mysqli_query($baglanti,$sql);

 if(!$cevap){
   echo "Hata:" .mysqli_error($baglanti);
}

else{
   echo "<script>alert('Pasta ekleme işlemi başarı ile tamamlandı.')</script>";
   header('Location:iceceklistele.php');
}
}


?>