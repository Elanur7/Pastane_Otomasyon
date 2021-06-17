<?php 
 
include("pastane_baglan.php");
session_start();
extract($_POST);
 
$uyeadi=$_POST['uyeadi'];
$uyesifre=$_POST['uyesifre'];

if(!$uyeadi){
    echo "Kullanıcı adını giriniz";
}
elseif(!$uyesifre){
    echo "Şifre giriniz";
}
else{
    $sql="SELECT * FROM uyeler WHERE uyeadi='$uyeadi' AND uyesifre='$uyesifre'";
    $cevap=mysqli_query($baglanti,$sql);
    $say=mysqli_num_rows($cevap);

    if($say==1){
        $_SESSION['uyeadi']=$uyeadi;
        echo "Giriş yapıldı";
        header('Location:pastane_girisformu.php');
    }
    else{
        echo "Hatalı giriş";
    }
}
?>