<?php
include("log/login.php");
if(!success())
	header("location: login.php");
require_once("db2/dba.php");

db_connect();

$g_id=$_GET['id'];
$ids=$_GET['cid'];

$ins_query=query("DELETE FROM `sms_contacts` WHERE `sms_contacts`.`id` = '$ids' LIMIT 1");
if($ins_query)
{
	$msg=base64_encode("Contact Deleted Successfully");
	header("location: sms_group_view_details.php?id=$g_id&msg=$msg");
}
else
{
	$msg2=base64_encode("Contact Not Deleted");
	header("location: sms_group_view_details.php?id=$g_id&msg2=$msg2");
}
?>