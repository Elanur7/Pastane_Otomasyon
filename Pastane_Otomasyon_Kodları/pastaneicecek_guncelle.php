<?php

include ("pastane_baglan.php");
?>
<?php
extract($_POST);

$icecekıd= $_GET['ıd'];
$sql="UPDATE icecekler SET icecekadi='$icecekadi',icecekfiyati='$icecekfiyati' WHERE icecekıd=".$_GET['ıd'];

 $cevap=mysqli_query($baglanti,$sql);

 if(!$cevap){
   echo "Hatali:" .mysqli_error($baglanti);
}

else{
   echo "<script>alert('İçecek güncelleme başarı ile tamamlandı.')</script>";
   header('Location:iceceklistele.php');
}

?>
