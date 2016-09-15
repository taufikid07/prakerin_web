<?php
/*
Author: Dheka
*/
include('koneksi.php');
$id			=$_GET['id_jalan'];
$nama		=$_POST['nama'];
$koordinat	=$_POST['koordinat'];
$keterangan	=$_POST['keteangan'];


$insert=$_POST['insert'];
$update=$_POST['update'];
$delete=$_GET['delete'];
if (isset($insert)){
	mysql_query("INSERT INTO jalan (nama_jalan,koordinat_jalan,keterangan) VALUES ('$nama','$koordinat','$keterangan')");
}
else if(isset($update)){
	mysql_query("UPDATE id_jalan SET nama_jalan='$nama', koordinat_jalan='$koordinat', keterangan='$keterangan',
	WHERE id='$id");
}
else if(isset($delete)){
	mysql_query("DELETE FROM apps_angkot WHERE id_jalan='$id_jalan'");
}
header("Location: ../rute.php");
?>