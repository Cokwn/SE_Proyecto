<?php
date_default_timezone_set("America/Mexico_City");
require_once('conectardb-view.php');
 $query2 = "select * from medicalveneer "; 
 $result = mysql_query($query2); 
 $nombre='date1';
$connect = new mysqli($servername, $username, $password, $dbname);



$nombre = $_POST["date1"];
$telefono=$_POST["date2"];
$turno=$_POST["date3"];
$date=$_POST["date4"];
$date2=$_POST["date5"];
$date3=$_POST["date6"];
$date4=$_POST["date7"];
$date5=$_POST["date8"];
$date6=$_POST["date9"];
$date7=$_POST["date10"];
$date8=$_POST["date11"];


$query="UPDATE medicalveneer Set date1='$nombre',date2='$telefono',date3='$turno',date4='$date',date5='$date2',     date6='$date3',date7='$date4',date8='$date5',date9='$date6',date10='$date7',date11='$date8' where id='1'";

mysqli_query($connect,$query) or die(mysqli_error($connect));
mysqli_close($connect);



print "<script>window.location='./?view=medicalveneer';</script>";


?>