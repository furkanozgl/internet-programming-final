<?php
include("baglanti.php");

$username_err=$parola_err="";
if(isset($_POST["giris"]))
{
    #kullanıcı adı sorgualama
    if
    (empty($_POST["kullaniciadi"]))
    {
      $username_err="Kullanıcı adı boş olamaz";
    }
    else{
      $username=$_POST["kullaniciadi"];
    }

#parola
      if(empty($_POST["parola"]))
      {
        $parola_err="Parola bos olamaz";
      }else{
        $parola=$_POST["parola"];
      }


if(isset($username) && isset($parola))
    {

        $secim="SELECT * FROM kullanici WHERE kullanici_adi ='$username'";
        $calistir=mysqli_query($baglanti, $secim);
        $kayitsayisi=mysqli_num_rows($calistir);//0 veya 1

        if($kayitsayisi >0)
        {
            $ilgilikayit = mysqli_fetch_assoc($calistir);
            $haslisifre=$ilgilikayit["parola"];
            if(password_verify($parola,$haslisifre))
            {
                session_start();
                $_SESSION["kullanici_adi"]=$ilgilikayit["kullanici_adi"];
                $_SESSION["email"]=$ilgilikayit["email"];
                header("location: mavibahcem/profile.php");
            }else{
                echo  '<div class="alert alert-danger" role="alert">
                ----------------------------------------------------------------- Şifre Yanlış  :(
              </div>';
            }

        }
        else
        {
            echo  '<div class="alert alert-danger" role="alert">
            ----------------------------------------------------------------- Kullanıcı Adı Yanlış  :(
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
}

nav ul li a:before{
    content:'';
    position:absolute;
    top:0;
    right:1;
    height:100%;
    background:#e3e9f7;
    border-radius:40px 0 40px;
    z-index:-1;
    transition:all 1s;
     z-index:-1;
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
             <!-- weather widget start --><a target="_blank"class="havadrm" href="https://bookeder.com/weather/kutahya-37312"><img 
             src="https://w.bookcdn.com/weather/picture/32_37312_1_21_34495e_250_2c3e50_ffffff_ffffff_1_2071c9_ffffff_0_6.png?scode=28018&domid=765&anc_id=9311" 
                 alt="booked.net"/></a></li><!-- weather widget end -->
        </ul>
    </nav>

    

    <div id="form1" class="row kpx_row-sm-offset-3">
			<div class="col-xs-12 col-sm-6">	
			    <form class="kpx_loginForm" action="giris.php" autocomplete="off" method="POST">
					<div class="input-group">
						<span class="input-group-addon"><span class="fa fa-user"></span></span>
						<input type="text" class="form-control
                        <?php
                    if(!empty($username_err)){
                        echo "is-invalid";
                    }
                ?>
                        " name="username" placeholder="Username">
					</div>
                    <hr />
										
					<div class="input-group">
						<span class="input-group-addon"><span class="fa fa-key"></span></span>
						<input  type="password" class="form-control
                        <?php  if(!empty($parola_err)){
                        echo "is-invalid";
                    }
                ?>
                        " name="password" placeholder="Password">
					</div>
                    
                    <hr />
					<button class="btn btn-lg btn-outline-primary btn-block" name="giris" type="submit"><i class="fa fa-sign-in"></i><a href="profile.php"> Giriş Yap</button>
				</form>
			</div>
    	</div>

            <br>
			<div id="form2" class="col-xs-12 col-sm-3">
				<p class="kpx_forgotPwd">
                <button class="btn btn-lg btn-outline-primary btn-block" type="submit"><i class="fa fa-sign-in"></i><a href="kayit.php"> Kayıt ol!</a></button>
				</p>
			</div>
            <hr>
			<div id="form2" class="col-xs-12 col-sm-3">
				<p class="kpx_forgotPwd">
                <button class="btn btn-lg btn-outline-primary btn-block" type="submit"><i class="fa fa-sign-in"></i><a href="admingrs.php"> Admin Giriş</a></button>
				</p>
			</div>
            

		</div>	    	
	</div>
    
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