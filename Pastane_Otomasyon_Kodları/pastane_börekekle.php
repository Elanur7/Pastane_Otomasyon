<?php
include ("pastane_baglan.php");
?>
<?php
$börekadi = $_POST['börekadi'];
$börekfiyati = $_POST['börekfiyati'];

if(empty($börekadi) or empty($börekfiyati)){
   echo "Boş alan bırakmayınız";
}
else{
 $sql="INSERT INTO börekler".
 "(börekadi,börekfiyati)".
 "VALUES('$börekadi','$börekfiyati')";

 $cevap=mysqli_query($baglanti,$sql);

 if(!$cevap){
   echo "Hata:" .mysqli_error($baglanti);
}
else{
   echo "<script>alert('Börek ekleme işlemi başarı ile tamamlandı.')</script>";
   header('Location:böreklistele.php');
}
}


?>