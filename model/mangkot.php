<?php
/*
Author: Dheka
*/
include('koneksi.php');
$id			=$_GET['id'];
$kode		=$_POST['kode'];
$nama		=$_POST['nama'];
$simpul		=$_POST['simpul'];
$harga		=$_POST['harga'];
$jarak		=$_POST['jarak'];
$jml_armana	=$_POST['jml_armana'];
$warna		=$_POST['warna'];
$kategori	=$_POST['kategori'];

$insert=$_POST['insert'];
$update=$_POST['update'];
$delete=$_GET['delete'];
if(isset($insert)){
	mysql_query("INSERT INTO angkutan_umum(kode_angkutan,nama_angkutan,simpul,harga,jarak,jml_armada,warna,kategori) VALUES('$kode','$nama','$simpul','$harga','$jarak','$jml_armada','$warna','$kategori')");
}
else if(isset($update)){
	mysql_query("UPDATE angkutan_umum SET kode_angkutan='$kode', nama_angkutan='$nama', simpul='$simpul', harga='$harga', jarak='$jarak', jml_armada='$jml_armada', warna='$warna', kategori='$kategori'
	WHERE id='$id");
}
else if(isset($delete)){
	mysql_query("DELETE FROM angkutan_umum WHERE id='$id'");
}
header("Location: ../angkutan.php");
?>
