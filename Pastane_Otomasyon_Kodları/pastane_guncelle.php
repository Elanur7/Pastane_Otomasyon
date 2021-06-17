<?php

include ("pastane_baglan.php");
?>
<?php
extract($_POST);

$pastaıd= $_GET['ıd'];
$sql="UPDATE pastalar SET pastaadi='$pastaadi',pastafiyati='$pastafiyati' WHERE pastaıd=".$_GET['ıd'];

 $cevap=mysqli_query($baglanti,$sql);

 if(!$cevap){
   echo "Hatali:" .mysqli_error($baglanti);
}

else{
   echo "<script>alert('Pasta güncelleme başarı ile tamamlandı.')</script>";
   header('Location:pastalistele.php');
}

?>
