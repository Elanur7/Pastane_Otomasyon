<?php

include ("pastane_baglan.php");
?>
<?php
extract($_POST);

$baklavaıd= $_GET['ıd'];
$sql="UPDATE baklavalar SET baklavaadi='$baklavaadi',baklavafiyati='$baklavafiyati' WHERE baklavaıd=".$_GET['ıd'];

 $cevap=mysqli_query($baglanti,$sql);

 if(!$cevap){
   echo "Hatali:" .mysqli_error($baglanti);
}

else{
   echo "<script>alert('Baklava güncelleme başarı ile tamamlandı.')</script>";
   header('Location:baklavalistele.php');
}

?>