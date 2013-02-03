<?php
include("log/login.php");
if(!success())
	header("location: login.php");
require_once("db/dba.php");

db_connect();

$ids=$_GET['id'];
$dir=$_GET['dir'];
$al_id=$_GET['al_id'];

$status1=unlink("../upload_big/$dir");
$status2=unlink("../upload_small/$dir");
if($status1 && $status2)
$ins_query=query("DELETE FROM `photos` WHERE `photos`.`photo_id` = '$ids' LIMIT 1");
if($ins_query)
{
	$msg=base64_encode("Photo Deleted Successfully");
	header("location: photos.php?msg=$msg&id=$al_id");
}
else
{
	$msg2=base64_encode("Photo Not Deleted");
	header("location: photos.php?msg2=$msg2&id=$al_id");
}
?>