<?php
include("baglanti.php");

$username_err=$email_err=$parola_err=$parolatkr_err="";
if(isset($_POST["kaydet"]))
{
    #kullanıcı adı sorgualama
    if
    (empty($_POST["kullaniciadi"]))
    {
      $username_err="Kullanıcı adı boş olamaz";
    }
    else if(strlen($_POST["kullaniciadi"])<6)
    {
        $username_err="Kullanıcı adı en az 6 karakter olmalı";
    }else{
      $username=$_POST["kullaniciadi"];
    }

#email
    if(empty($_POST["email"])){
        $email_err="Email alanı boş olamaz";
    }
    else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $email_err = "Geçersiz email";
      }
      else{
        $email=$_POST["email"];
      }

#parola
      if(empty($_POST["parola"]))
      {
        $parola_err="Parola bos olamaz";
      }else{
        $parola=password_hash($_POST["parola"], PASSWORD_DEFAULT);
      }

#parolatekrar
if(empty($_POST["parolatkr"])){
    $parolatkr_err="boş geçilemez";
}
else if($_POST["parola"]!= $_POST["parolatkr"]){
    $parolatkr_err="Parolalar eşleşmedi";
}else{
    $parolatkr=$_POST["parolatkr"];
}


if(isset($username) && isset($email) && isset($parola))
    {

    $ekle="INSERT INTO kullanici (kullanici_adi, email, parola) VALUES ('$username','$email','$parola')";

    $calistirekle=mysqli_query($baglanti,$ekle);

    if($calistirekle){
        echo '<div class="alert alert-success" role="alert">
        ----------------------------------------------------------------- Kayıt Başarılı :)
      </div>';
    }else{
        echo '<div class="alert alert-danger" role="alert">
      ------------------------------------------------------------------- Kayıt Başarısız :(
      </div>';
    }
    mysqli_close($baglanti);
    }
}

?>
 
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <style>
      
      #form1{
        margin-top: 10%;
        margin-left: 40%;
      }
      #form2{
        margin-left: 43%;
        width: 90%;
      }
      .kpx_login .kpx_loginOr {
	position: relative;
	font-size: 1.5em;
	color: #aaa;
	margin-top: 1em;
	margin-bottom: 1em;
	padding-top: 0.5em;
	padding-bottom: 0.5em;
}
.kpx_login .kpx_loginOr .kpx_hrOr {
	background-color: #cdcdcd;
	height: 1px;
	margin-top: 0px !important;
	margin-bottom: 0px !important;
}
.kpx_login .kpx_loginOr .kpx_spanOr {
	display: block;
	position: absolute;
	left: 50%;
	top: -0.6em;
	margin-left: -1.5em;
	background-color: white;
	width: 3em;
	text-align: center;
}			

.kpx_login .kpx_loginForm .input-group.i {
	width: 2em;
}
.kpx_login .kpx_loginForm  .help-block {
    color: red;
}

	
@media (min-width: 768px) {
    .kpx_login .kpx_forgotPwd {
        text-align: right;
		margin-top:10px;
 	}
}
      
      body{
    margin:0;
    padding:0;
    font-family:'montserrat';
    background:#e3e9f7;
}


.logo{
    padding:20px;
}

nav ul{
    margin:0;
    padding:0;
    height:100%;
    width:260px;
    position:fixed;
    top:0;
    left:0;
    background-color:#220070;
}

nav ul li{
    list-style:none;
}


nav ul li a{
    display:block;
    font-family:'montserrat';
    text-decoration:none;
    text-transform:uppercase;
    font-size:17px;
    color:#fff;
    position:relative;
    padding:15px 0px 15px 25px;
    /*transition:all 0.5s;*/
}

nav ul li a:before{
    content:'';
    position:absolute;
    top:0;
    right:0;
    height:100%;
    background:#e3e9f7;
    border-radius:40px 0 0 40px;
    z-index:-1;
    /*transition:all 1s;*/
}

#kayitFormu{
                
       border-radius:10px;
        background:#ffffff;
        width:360px;
        margin:auto;
        margin-top:20px;
        padding:15px;
        text-align:center;
    }
 input, button
    {
        border-radius:5px;
        border:none;
        width:300px;
        height:50px;
        margin:20px 0px 20px 0px;
        background:rgba(240,240,240,.5);
        padding-left:15px;
        
        
    }
    
.btn{
        background:#76b852;
        color:white;
    }
h3{
        color:#333;
        text-transform:uppercase;
        font-size:20px;
    }

nav ul li a:hover{
    color:#2b2626;
}

nav ul li a:hover:before{
    width:95%;
}


.wrapper{
    margin-left:260px;
}

.section{
    display:grid;
    place-items:center;
    min-height:100vh;
    text-align:center;
}

.box-area h2{
    text-transform:uppercase;
    font-size:30px;
}

.footer { background:#222222;width:100%; height:269px;float:left;color:white; font-family:arial;}
		.footer #kutu b {font-size:14px;}
		* {margin:0px;padding:0px;}
		.footer_container{width:768px; height:175px; margin:30px auto;}
		ul {list-style-type:none;margin:17px 0;padding:0px;}
		#kutu {width:auto; height:125px; float:left;}
		ul li {float:left;font-family:tahoma; font-size:12px; margin-bottom:8px; clear:left; color:#949798; }
		#kutu:last-child li {float:left;clear:none;margin-right:10px;}
    </style>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title> Mavibahçe</title>
</head>
<body>
    <nav>
        <ul>
            <li class="logo" ><img src="image/Mavibahce.png" width="150px" height="150px"></li>
            <li><a href="mavibahce.html"><i class="fa fa-home"></i>&nbsp;  Anasayfa</a></li>
            <li><a href="giris.php"><i class="fa fa-book"></i>&nbsp;  Giriş Yap</a></li>
        </ul>
    </nav>
    <br><br><br><br>
    <div id="kayitFormu">
            <form action="kayit.php" method="POST">
                <h3>KULLANICI Kayıt Formu</h3>
                <input type="text" class="form-control 
                
                <?php
                    if(!empty($username_err)){
                        echo "is-invalid";
                    }
                ?>
                
                " name="kullaniciadi" placeholder="kullanıcı adı"   /> 
                <div id="validationServer03Feedback" class="invalid-feedback">
      <?php
      echo $username_err;
      ?>
    </div>  
                <br>
                <input type="text" class="form-control
                <?php
                    if(!empty($email_err)){
                        echo "is-invalid";
                    }
                ?>
                
                
                " name="email" placeholder="eposta giriniz" />
                <div id="validationServer03Feedback" class="invalid-feedback">
                <?php
      echo $email_err;
      ?>
    </div>  
                <br>
                <input type="password" class="form-control 
                <?php  if(!empty($parola_err)){
                        echo "is-invalid";
                    }
                ?>
                
                
                " name="parola" placeholder="şifrenizi giriniz" />
                <div id="validationServer03Feedback" class="invalid-feedback">
      <?php
        echo $parola_err;
      ?>
    </div>
                <br>
                <input type="password" class="form-control                
                 <?php    if(!empty($parolatkr_err)){
                        echo "is-invalid";
                    }
                ?>
                " name="parolatkr" placeholder="tekrar şifrenizi giriniz" />
                <div id="validationServer03Feedback" class="invalid-feedback">
      <?php
        echo $parolatkr_err;
      ?>
    </div>
                <br>
                <input class="btn" name="kaydet" type="submit" value="KAYIT OL" />
            </form>
            
        </div>


        <script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
<br><br><br><br><br><br>

    <div class="footer">
		<!--Footer_container-->
		<div class="footer_container">
			<!--kutu-->
			<div id="kutu">
				<b>Sayfalar</b>
				<ul>
					<li>Ana Sayfa</li>
					<li>Giriş yap</li>
					<li>Ürünler</li>
					<li>Fotoğraflar</li>
				</ul>
			</div>
			<!--kutu###-->
			<!--kutu-->
			<div id="kutu" style="margin-left:150px;">
				<b>İletişim</b>
				<ul>
					<li>Furkan Özgül</li>
					<li>Cep: 0 512 345 67 89</li>
					<li>Tel: 0 324 481 48 01</li>
					<li>Mail: mavibahce_1@hotmail.com</li>
				</ul>
			</div>
			<!--kutu###-->
			<!--kutu-->
			<div id="kutu" style="margin-left:150px;">
				<b>Sosyal Medya</b>
				<ul>
					<li><img src="adsiz.png" alt=""></li>
					<li><img src="adsiz.png" alt=""></li>
				</ul>
			</div>
			<!--kutu###-->
		</div>
		<!--Footer_container###-->
	</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>