<?php
include("log/login.php");
if(!success())
	header("location: login.php");
require_once("db/dba.php");

db_connect();

$ids=$_GET['id'];
$dir=$_GET['dir'];

$status1=unlink("../data/$dir");
if($status1)

$ins_query=query("DELETE FROM `data_report` WHERE `data_report`.`rp_id` = '$ids' LIMIT 1");
if($ins_query)
{
	$msg=base64_encode("Data Deleted Successfully");
	header("location: data_report.php?msg=$msg");
}
else
{
	$msg2=base64_encode("Data Not Deleted");
	header("location: data_report.php?msg2=$msg2");
}
?>