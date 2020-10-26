<?php
include ('koneksi.php');

 
$nama = $_POST['nama'];
$ttl = $_POST['ttl'];
$kelamin = $_POST['kelamin'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$password = $_POST['password'];
$query = mysql_query("insert into pelamar values( '$nama','$ttl','$kelamin','$alamat','$email','$password','')") or die(mysql_error());


		if($query)
		{
			
			echo "<script>alert('Data Berhasil di Tambah!'); window.location = 'login_pelamar.php?page=karyawan'</script>";
		}
		else
		{
			echo "<script>alert('Data Gagal di Tambah!'); window.location = 'register_pelamar.php?page=inputkaryawan'</script>";
				
		}
?>