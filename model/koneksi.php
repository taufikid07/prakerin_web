<?php
/*
Author: Dheka
*/
?>

<?php
$connection = mysql_connect('Localhost', 'root' , '');
if (!$connection) {
	die("connection Database Failed" . mysql_error());
}
$select_db = mysql_select_db('apps_angkot');
if (!$select_db){
	die("Database Selection Failed" . mysql_error()) ;
}
?>