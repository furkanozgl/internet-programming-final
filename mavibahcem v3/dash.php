<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      
    
      
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
    transition:all 0.5s;
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
            <li class="logo" > <?php  0 ?></li><hr>
            <li><a href="profile.php"><i class="fa fa-book"></i>&nbsp;  </a></li>
            <li><a href="urunler.php"><i class="fa fa-users"></i>&nbsp;  Ürünler</a></li>
            <li><a href="#"><i class="fa fa-picture-o"></i>&nbsp;  Fotoğraflar</a></li><br><br><br><br><br><br><br>
            <li><a href="cikis.php"><i class="fa fa-home"></i>&nbsp; <?

            ?> Çıkış Yap</a></li>

             <!-- weather widget start --><a target="_blank"class="havadrm" href="https://bookeder.com/weather/kutahya-37312"><img 
             src="https://w.bookcdn.com/weather/picture/32_37312_1_21_34495e_250_2c3e50_ffffff_ffffff_1_2071c9_ffffff_0_6.png?scode=28018&domid=765&anc_id=9311" 
                 alt="booked.net"/></a></li><!-- weather widget end -->
        </ul>
    </nav>
    


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>