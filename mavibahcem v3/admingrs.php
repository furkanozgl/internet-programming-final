<?php
include("baglanti2.php");

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
      if(empty($_POST["sifre"]))
      {
        $parola_err="Parola bos olamaz";
      }else{
        $parola=$_POST["sifre"];
      }


if(isset($username) && isset($parola))
    {

        $secim="SELECT * FROM admin WHERE admin_adi ='$username'";
        $calistir=mysqli_query($baglanti, $secim);
        $kayitsayisi=mysqli_num_rows($calistir);//0 veya 1

        if($kayitsayisi >0)
        {
            $ilgilikayit = mysqli_fetch_assoc($calistir);
            $haslisifre=$ilgilikayit["sifre"];
            if(password_verify($parola,$haslisifre))
            {
                session_start();
                $_SESSION["admin_adi"]=$ilgilikayit["admin_adi"];
                header("location: mavibahcem/admin.php");
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

<html>
    <head>
</head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<style>


    
#form1{
        margin-top: 10%;
        margin-left: 33%;
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

</style>
<body>

<div id="form1" class="row kpx_row-sm-offset-3">
			<div class="col-xs-12 col-sm-6">	
			    <form class="kpx_loginForm" action="giris.php" autocomplete="off" method="POST">
					<div class="input-group">
						<span class="input-group-addon"><span class="fa fa-user"></span></span>
						<input type="text" class="form-control" name="username" placeholder="Username">
					</div>
                    <hr />
										
					<div class="input-group">
						<span class="input-group-addon"><span class="fa fa-key"></span></span>
						<input  type="password" class="form-control" name="password" placeholder="Password">
					</div>
                    
                    <hr />
					<button class="btn btn-lg btn-outline-primary btn-block" name="giris" type="submit"><i class="fa fa-sign-in"></i><a href="admin.php"> Giriş Yap</button>
                    <hr />
					<button class="btn btn-lg btn-outline-primary btn-block" name="giris" type="submit"><i class="fa fa-sign-in"></i><a href="giris.php"> Geri Dön</button>
				</form>
			</div>
    	</div>
 
    </body>
</html>
        
