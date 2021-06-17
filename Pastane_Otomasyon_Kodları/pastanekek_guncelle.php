<?php

include ("pastane_baglan.php");
?>
<?php
extract($_POST);

$kekıd= $_GET['ıd'];
$sql="UPDATE kekler SET kekadi='$kekadi',kekfiyati='$kekfiyati' WHERE kekıd=".$_GET['ıd'];

 $cevap=mysqli_query($baglanti,$sql);

 if(!$cevap){
   echo "Hatali:" .mysqli_error($baglanti);
}

else{
   echo "<script>alert('Kek güncelleme başarı ile tamamlandı.')</script>";
   header('Location:keklistele.php');
}

?>