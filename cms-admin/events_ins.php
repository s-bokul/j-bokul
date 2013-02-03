<?php
include("log/login.php");
if(!success())
	header("location: login.php");
require_once("db/dba.php");
db_connect();
$title=$_POST['title'];
$date=$_POST['date'];
$elm1=$_POST['elm1'];
$date=explode("-",$date);
$date=$date[2]."-".$date[1]."-".$date[0];


$rsRecordID=query("SELECT MAX( cast( SUBSTRING(`id`,4 ) AS SIGNED ) ) AS `id` FROM `eventcal`");
$rowRecordID=mysql_fetch_array($rsRecordID);
$maxid=$rowRecordID['id'];
mysql_free_result($rsRecordID);
$maxid=$maxid+1;
$maxid=((strlen($maxid)<2) ? "0".$maxid : $maxid);
$maxid=((strlen($maxid)<3) ? "0".$maxid : $maxid);
$RecordID="EV-".$maxid;

$ins_query=query("INSERT INTO `eventcal` (`id`, `eventDate`, `eventTitle`, `eventContent`) VALUES ('$RecordID', '$date', '$title', '$elm1');");
if($ins_query)
{
	$msg=base64_encode("Events Inserted Successfully");
	header("location: events.php?msg=$msg");
}
else
{
	$msg2=base64_encode("Events Not Inserted");
	header("location: events.php?msg2=$msg2");
}
?>