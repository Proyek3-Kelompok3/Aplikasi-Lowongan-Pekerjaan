<?php ob_start();
include "koneksi.php";
mysql_query("delete from lowongan where id_lowongan='$_GET[id_lowongan]'");
header('location:mlebu_perusahaan.php');
?> 