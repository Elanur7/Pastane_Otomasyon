<?php
//mysql bağlantı
include ("pastane_baglan.php");
?>
<html>
<head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&display=swap');
        *{
            margin:0;
            padding:0;
        }
        body{
            background : url(pastane..jpg);
        }
        .container{
            height:100vh;
            background-size:100% 100%;
        }
        .container .navbar{
            width:100%;
            height:80px;
            background:rgba(22,112,214,0.4);
        }
        .navbar .logo{
            display:inline-block;
            margin-left:50px;
            margin-top:20px;
        }
        .navbar .logo a{
            text-decoration:none;
            font-size:30px;
            font-family:sans-serif;
            color:black;
        }
        .navbar ul{
            float:right;
            margin-right:20px;
        }
        .navbar ul li{
            list-style:none;
            display:inline-block;
            margin:0 8px;
            line-height:80px;
        }
        .navbar ul li a{
            color:black;
            text-decoration:none;
            font-size:20px;
            padding:6px 13px;
            font-family:Roboto;
            transition: .5s;
        }
        .navbar ul li a.active,
        .navbar ul li a:hover{
            background:#ff6e00;
            border-radius:2px;
        }
        .tablo{
            margin-left:500px;
            margin-top:70px;
        }
        .container .center{
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            font-family:sans-serif;
            user-select:none;
        }
        .center h2{
            color:black;
            font-size:50px;
            font-weight:bold;
            width:700px;
            text-align:center;
            margin-left:auto;
            margin-right:auto;
            margin-top:70px;
        }
        .center .buttons{
            margin:35px 280px;
            margin-left:500px;
            
        }

        .buttons button {
            height:50px;
            width:150px;
            font-size:18px;
            font-weight:bold;
            color:#ffb3b3;
            background:rgb(207,96,88);
            border:solid 1px red;
            cursor:pointer;
            outline:none;
            border-radius:25px;
            transition: .5s;
        }
        .buttons button a{
            height:50px;
            width:150px;
            font-size:18px;
            text-decoration:none;
            font-weight:bold;
            color:#ffb3b3;
            outline:none;
            border-radius:25px;
            transition: .5s;
        }
        .buttons button:hover{
            background:#fff;
        }
</style>
</head>
<body>
<div class="cantainer">
        <div class="navbar">
            <div class="logo">
                <a href="#">BAŞARANLAR PASTANESİ</a>
</div>
<ul>
    <li><a href="pastane_girisformu.php">Ana Sayfa</a></li>
    <li><a href="pastalar.php">Pastalar</a></li>
    <li><a href="kekler.php">Kekler</a></li>
    <li><a href="börekler.php">Börekler</a></li>
    <li><a href="#" class="active">Baklavalar</a></li>
    <li><a href="kurabiyeler.php">Kurabiyeler</a></li>
    <li><a href="icecekler.php">İçecekler</a></li>
    </ul>
</div>
<?php
//mysql bağlantı
include ("pastane_baglan.php");
?>
<div class="tablo">
<?php
$sql="SELECT * FROM baklavalar";
$cevap=mysqli_query($baglanti,$sql);
echo '<table border=1 bordercolor=black><tr>
<th>Baklava ID</th>
<th>Baklava Adı</th>
<th>Baklava Fiyatı</th></tr>';

while($satir=mysqli_fetch_array($cevap)){
    echo '<tr>';
    echo '<td>'.$satir['baklavaıd'].'</td>';
    echo '<td>'.$satir['baklavaadi'].'</td>';
    echo '<td>'.$satir['baklavafiyati'].'</td>';
    echo '<td> <a href="pastane_baklavasilme.php?baklavaıd='.$satir['baklavaıd'].'"onclick="return uyari();">Sil</a></td>';
    echo '</tr>';
}
echo '</table><br><br>';
?>
</div>
<div class="center">
    <h2>Yapmak istediğiniz işlem</h2>
    <div class="buttons">
        <button><a href="baklavalistele.php">Baklava Listele</button>
        <button><a href="baklavaekle.php">Baklava Ekleme</button><br><br>
        <button><a href="baklavaguncelle.php">Baklava Güncelle</button>
</div>
</div>
</body>
</html>