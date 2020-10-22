<?php
session_start();
if (!isset($_POST['username'])) {
    $_POST['username'] = "";
} //jika variabel belum dibuat maka buat dulu.
if (!isset($_POST['password'])) {
    $_POST['password'] = "";
} //jika variabel belum dibuat maka buat dulu.
if (!isset($_SESSION['sukses_login'])) {
    $_SESSION['sukses_login'] = "";
} //jika variabel belu      //mulai session, krena kita akan menggunakan session pd file php ini

if (($_SESSION['sukses_login']) == true) {
    //apabila session ini sudah ada .. lanjut ke dashboard
    header("Location:mlebu_admin.php");
}
include "koneksi.php";


$username = $_POST['username'];
$password = $_POST['password'];




// SQL query untuk memeriksa apakah karyawan terdapat di database?
$query = mysql_query("select * from admin where username='$username' AND password='$password'") or die(mysql_error()); //menjalankan perintah query
$data = mysql_fetch_array($query); //mengambil data dari database
$rows = mysql_num_rows($query); //menghitung baris
if ($rows == TRUE) {
    $_SESSION['sukses_login'] = true;
    $_SESSION['id_admin'] = $data['id_pelamar'];
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['username'] = $username;  //jika cocok, buat session dengan nama sesuai dengan username
    $_SESSION['password'] = $password;
    header("location:mlebu_admin.php");     // dan alihkan ke index.php
} else {
    if ((empty($username)) and (empty($password))) {
        echo $_SESSION['sukses_login'];
    } elseif (!(empty($username)) and !(empty($password))) {
        echo "<script>alert('Masukkan Username dan Password yang benar!'); window.location = 'login_admin.php'</script>";
    }
}

?>
<form action="" method="post">
    <div class="form-group">
        <input type="username" class="form-control" name="username" placeholder="Username"><br>
        <input type="password" class="form-control" name="password" placeholder="Password">
        <input type="submit" class="form-control" name="submit" value="Login">
    </div>
</form>