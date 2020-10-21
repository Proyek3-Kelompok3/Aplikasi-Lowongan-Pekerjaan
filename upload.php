<?php
session_start();
mysql_connect('localhost','root','');
mysql_select_db('work');
  
$posisi = $_POST['posisi'];
$syarat = $_POST['syarat'];
$pendidikan = $_POST['pendidikan'];
$id_lowongan = $_POST['id_lowongan'];
if ($id_lowongan == ''){


$sukses_upload=mysql_query("insert into lowongan values('$_SESSION[id_perusahaan]','','$posisi','$syarat','$pendidikan')");}
else {
$sukses_upload=mysql_query("update lowongan set id_perusahaan= '$_SESSION[id_perusahaan]',posisi='$posisi',lowongan='$syarat',syarat='$pendidikan' where id_lowongan='$id_lowongan'");	
}
if ($sukses_upload){
echo "<script>alert('Lowongan Anda Sudah Terupload!');location.href='mlebu_perusahaan.php';</script>";
}
?>