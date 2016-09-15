<?php
/*
Author: Dheka
*/
include('koneksi.php');
$id_user			=$_GET['id_user'];
$Nama_Depan			=$_POST['depan'];
$Nama_Belakangan	=$_POST['belakang'];
$Email				=$_POST['email'];



$insert=$_POST['insert'];
$update=$_POST['update'];
$delete=$_GET['delete'];
if (isset($insert)){
	mysql_query ("INSERT INTO user (Nama_Depan,Nama_Belakang,Email) VALUES ('$Depan','$Belakang','$Email')");
}
else if(isset($update)){
	mysql_query("UPDATE user SET Nama_Depan='$Nama_Depan', Nama_Belakangan='$Nama_Belakang', Email='$Email'
	WHERE id_user='$id_user'");
}
else if(isset($delete)){
	mysql_query("DELETE FROM apps_angkot WHERE id_user='$id_user'");
}
header("Location: ../user.php");
?>