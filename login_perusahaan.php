<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>e-Jobfair</title>
        <meta name="description" content="company is a free job board template">
        <meta name="author" content="Ohidul">
        <meta name="keyword" content="html, css, bootstrap, job-board">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/fontello.css">
        <link rel="stylesheet" href="css/animate.css">        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.transitions.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="responsive.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- Body content -->
		
        <div class="header-connect">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-8 col-xs-8">
                        <div class="header-half header-call">
                        </div>
                    </div>
                  
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-default">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php"><img src="img/logo.jpg" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <div class="button navbar-right">
              </div>
              <ul class="main-nav nav navbar-nav navbar-right">
                <li class="wow fadeInDown" data-wow-delay="0s"><a class="active" href="#">Login</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="index.php">Home</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
<br>
<br>
<br>
<br>
<?php
session_start();
if(!isset($_POST['username'])){$_POST['username']=""; } //jika variabel belum dibuat maka buat dulu.
if(!isset($_POST['password'])){$_POST['password']=""; } //jika variabel belum dibuat maka buat dulu.
if(!isset($_SESSION['sukses_login'])){$_SESSION['sukses_login']=""; } //jika variabel belu      //mulai session, krena kita akan menggunakan session pd file php ini
      
      if(($_SESSION['sukses_login'])==true){
    //apabila session ini sudah ada .. lanjut ke dashboard
       header("Location:mlebu_perusahaan.php");
}
      include "koneksi.php";
      
     
      $username = $_POST['username'];
      $password = $_POST['password'];
      
     
        
        
        // SQL query untuk memeriksa apakah karyawan terdapat di database?
        $query = mysql_query("select * from perusahaan where email='$username' AND password='$password'") or die(mysql_error());//menjalankan perintah query
        $data = mysql_fetch_array($query);//mengambil data dari database
        $rows = mysql_num_rows($query); //menghitung baris
            if ($rows == TRUE) {
                $_SESSION['sukses_login']=true;
                $_SESSION['id_perusahaan']=$data['id_perusahaan'];
                $_SESSION['id_pelamar']=$data['id_pelamar'];
                $_SESSION['nama']=$data['nama'];
                $_SESSION['username']=$username;  //jika cocok, buat session dengan nama sesuai dengan username
                $_SESSION['password']=$password;
                header("location:mlebu_perusahaan.php");     // dan alihkan ke index.php
                } else{
                    if((empty($username)) and (empty($password))){  
                        echo $_SESSION['sukses_login']; 
                    }
                    elseif (!(empty($username)) and !(empty($password))){
                        echo "<script>alert('Masukkan Username dan Password yang benar!'); window.location = 'login_perusahaan.php'</script>";

                    }
                }

            ?>
             <form action="" method="post">
              <div class="form-group">
                <input type="email" class="form-control" name="username" placeholder="Username"><br>
                <input type="password" class="form-control" name="password" placeholder="Password">
                <input type="submit" class="form-control" name="submit" value="Login">
                <center><a href="register_perusahaan.php">Register</a></center>
              </div>
          </form>
          <br>
          <br>
          <br>


<div class="footer-area">
            <div class="container">
                <div class="row footer">
                    <div class="col-md-4">
                        <div class="single-footer">
                            <img src="img/footer-logo.png" alt="" class="wow pulse" data-wow-delay="1s">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-footer">
                            <div class="footer-links">
                                <ul class="list-unstyled">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row footer-copy">
                    <p><span>(C) webstie, All rights reserved</span> 
                    <p></p>
                    <span>Web Maker by <a href="https://www.instagram.com/vadisp/">Vadis Praditya</a></span> | <span> Web Designed by <a href="https://www.instagram.com/ivancrisnanda/">Ivan Crisnanda</a></span> | <span> Excecutive Marketing by <a href="https://www.instagram.com/fitraardina/">Fitra Ardina</a></span> | <span> Administration by <a href="https://www.instagram.com/imeldaanggi/">Imelda Anggi</a></span> </p>
                </div>
            </div>
        </div>
    
    
    
    
    
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/wow.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
