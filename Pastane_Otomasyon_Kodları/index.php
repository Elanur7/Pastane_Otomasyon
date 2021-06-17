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
            margin:0 5px;
            margin-top:-50px;
            line-height:80px;
        }
        .navbar ul li a{
            color:black;
            text-decoration:none;
            font-size:20px;
            padding:6px 13px;
            margin:10px;
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
            /*color:#ffb3b3;
            background:rgb(207,96,88);
            border:solid 1px red;
            cursor:pointer;*/
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
<!DOCTYPE html>
<html>
  <body>
  <div class="tablo">
  <form method="post" action="loginn.php">
<table border="1" align="center" >
<tr>
<td colspan="2" align="center">Giriş Yap</td>
</tr>
<tr>
<td>Adınız</td>
<td><input type="text" name="uyeadi"></td>
</tr>
<tr>
<td>Şifreniz</td>
<td><input type="password" name="uyesifre"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="GİRİŞ YAP"></td>
</tr>
</table>
</form></br></br>
</div>
 </body>
</html>
