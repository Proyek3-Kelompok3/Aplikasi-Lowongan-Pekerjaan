<?php
session_start();
if (isset($_SESSION)) {
    if (@$_SESSION['sukses_login']==true){
    if (@$_SESSION['id_perusahaan']==null) {
         echo "<script>
    alert('Anda Bukan Perusahaan!');location.href='index.php';
</script>";
}
}
else {
    echo "<script>alert('Anda Harus Login Terlebih Dahulu!');location.href='login_pelamar.php';</script>";
}
}

?>
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
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">

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
                  <a href="logout_perusahaan.php"><button class="navbar-btn nav-button bounceInRight login" data-wow-delay="0.8s">Log Out</button></a>
              </div>
              <ul class="main-nav nav navbar-nav navbar-right">
                <li class="wow fadeInDown" data-wow-delay="0s"><a class="active" href="#">Selamat Datang Perusahaan!</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.3s"><a href="about_us.php">About us</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="contact.php">Contact</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
            <div class="container slider-content">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                        <h2 style="color: black;">Selamat Bergabung di </h2>
                        <h2 style="color: black;">E-Jobfair</h2>

                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
<br>
<br>
<br>
<br>
<br>
        <br>
        <div class="jumbotron">
            <div class="container">
                <form enctype="multipart/form-data" action="upload.php" method="POST">
                  <div class="form-group">
                  <?php
                  include 'koneksi.php';
                  $tampil=mysql_query("select * from lowongan where id_lowongan='".@$_GET[id_lowongan]."'");
                  $data=mysql_fetch_array($tampil);


                  ?>
                  <center><h1>INPUT LOWONGAN</h1></center>
                  <input type="hidden" name="id_lowongan" value="<?php echo $data['id_lowongan'] ?>">
                    <label for="exampleInputEmail1">Posisi</label>
                    <input type="text" name="posisi" class="form-control" id="exampleInputEmail1" value="<?php echo $data['posisi'] ?>" placeholder="Contoh : IT Support,Supervisor, Dll">
                    <label for="exampleInputEmail1">Syarat</label>
                    <textarea name="syarat" class="form-control" id="exampleInputEmail1" placeholder="Syarat Lowongan"><?php echo $data['lowongan'] ?></textarea> 
                    <label for="exampleInputEmail1">Minimal Pendidikan</label>
                    <input type="text" name="pendidikan" class="form-control" id="exampleInputEmail1" value="<?php echo $data['syarat'] ?>" placeholder="Contoh : SMA/SMK/S1 Dll">
                    <h2>
                    </h2>        
    <input type="submit" value="Upload" />
</form>
<style>
td{
border:1px solid black !important;
padding:5px !important;
}
        </style>
        <center>
        <br></br> 
<h1>DAFTAR LOWONGAN</h1>
<br></br>
<table border=2>
<tr>
<td>No</td>
<td>Nama Perusahaan</td>
<td>Posisi</td>
<td>Syarat</td>
<td>Minimal Pendidikan</td>
<td> </td>
<td></td>
<td></td>
</tr>
<?php
$no=0;
include "koneksi.php";

$lowongan=mysql_query("select * from lowongan join perusahaan on lowongan.id_perusahaan=perusahaan.id_perusahaan where lowongan.id_perusahaan='".$_SESSION['id_perusahaan']."'");
while($data=mysql_fetch_array($lowongan)){
    $no++;
    echo '
<tr>
<td>'.$no.'</td>
<td>'.$data['nama'].'</td>
<td>'.$data['posisi'].'</td>
<td>'.$data['lowongan'].'</td>
<td>'.$data['syarat'].'</td>
<td><a href="daftar_cv.php">Liat Pelamar</a></td>
<td><a href="delete.php?id_lowongan='.$data['id_lowongan'].'">Delete</a></td>
<td><a href="mlebu_perusahaan.php?id_lowongan='.$data['id_lowongan'].'">Edit</a></td>
</tr>';
}
?>
</table>
</center> 
</div>
                </form>
            </div>
        </div>
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
