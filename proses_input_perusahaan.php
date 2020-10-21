<?php
include ('koneksi.php');

 
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$email = $_POST['email'];
$password = $_POST['password'];
$query = mysql_query("insert into perusahaan values( '$nama','$alamat','$telp','$email','$password','')") or die(mysql_error());


		if($query)
		{
			
			echo "<script>alert('Data Berhasil di Tambah!'); window.location = 'login_perusahaan.php?page=perusahaan'</script>";
		}
		else
		{
			echo "<script>alert('Data Gagal di Tambah!'); window.location = 'register_perusahaan.php?page=inputperusahaan'</script>";
				
		}
?>