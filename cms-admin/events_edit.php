<?php
include("log/login.php");
if(!success())
	header("location: login.php");
require_once("db/dba.php");
db_connect();
$ids=$_POST['ids'];
$title=$_POST['title'];
$date=$_POST['date'];
$elm1=$_POST['elm1'];
$date=explode("-",$date);
$date=$date[2]."-".$date[1]."-".$date[0];


$ins_query=query("UPDATE `eventcal` SET `eventDate` = '$date', `eventTitle` = '$title', `eventContent` = '$elm1' WHERE `eventcal`.`id` = '$ids' LIMIT 1;");
if($ins_query)
{
	$msg=base64_encode("Events Updated Successfully");
	header("location: events.php?msg=$msg");
}
else
{
	$msg2=base64_encode("Events Not Updated");
	header("location: events.php?msg2=$msg2");
}
?>