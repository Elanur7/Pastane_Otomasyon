<?php

include ("pastane_baglan.php");
?>
<?php
extract($_POST);

$börekıd= $_GET['ıd'];
$sql="UPDATE börekler SET börekadi='$börekadi',börekfiyati='$börekfiyati' WHERE börekıd=".$_GET['ıd'];

 $cevap=mysqli_query($baglanti,$sql);

 if(!$cevap){
   echo "Hatali:" .mysqli_error($baglanti);
}

else{
   echo "<script>alert('Börek güncelleme başarı ile tamamlandı.')</script>";
   header('Location:böreklistele.php');
}

?>