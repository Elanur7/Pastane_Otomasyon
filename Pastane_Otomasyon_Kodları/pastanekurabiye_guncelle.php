<?php

include ("pastane_baglan.php");
?>
<?php
extract($_POST);

$kurabiyeıd= $_GET['ıd'];
$sql="UPDATE kurabiyeler SET kurabiyeadi='$kurabiyeadi',kurabiyefiyati='$kurabiyefiyati' WHERE kurabiyeıd=".$_GET['ıd'];

 $cevap=mysqli_query($baglanti,$sql);

 if(!$cevap){
   echo "Hatali:" .mysqli_error($baglanti);
}

else{
   echo "<script>alert('Kurabiye güncelleme başarı ile tamamlandı.')</script>";
   header('Location:kurabiyelistele.php');
}

?>
