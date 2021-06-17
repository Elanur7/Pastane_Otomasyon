<?php
//mysql bağlantı
include ("pastane_baglan.php");
?>
<?php
$kurabiyeadi = $_POST['kurabiyeadi'];
$kurabiyefiyati = $_POST['kurabiyefiyati'];

if(empty($kurabiyeadi) or empty($kurabiyefiyati)){
   echo "Boş alan bırakmayınız";
}
else{
 $sql="INSERT INTO kurabiyeler".
 "(kurabiyeadi,kurabiyefiyati)".
 "VALUES('$kurabiyeadi','$kurabiyefiyati')";

 $cevap=mysqli_query($baglanti,$sql);

 if(!$cevap){
   echo "Hata:" .mysqli_error($baglanti);
}
else{
   echo "<script>alert('Kurabiye ekleme işlemi başarı ile tamamlandı.')</script>";
   header('Location:kurabiyelistele.php');
}
}


?>