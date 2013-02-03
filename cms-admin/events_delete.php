<?php
include("log/login.php");
if(!success())
	header("location: login.php");
require_once("db/dba.php");

db_connect();

$ids=$_GET['id'];

$ins_query=query("DELETE FROM `eventcal` WHERE `eventcal`.`id` = '$ids' LIMIT 1");
if($ins_query)
{
	$msg=base64_encode("Event Deleted Successfully");
	header("location: events.php?msg=$msg");
}
else
{
	$msg2=base64_encode("Event Not Deleted");
	header("location: events.php?msg2=$msg2");
}
?>