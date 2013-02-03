<?php
include("log/login.php");
if(!success())
	header("location: login.php");
require_once("db2/dba.php");

db_connect();

$ids=$_GET['id'];

$del_photos=query("DELETE FROM `sms_contacts` WHERE `sms_contacts`.`group_id` = '$ids'");

$ins_query=query("DELETE FROM `sms_group` WHERE `sms_group`.`group_id` = '$ids' LIMIT 1");
if($ins_query)
{
	$msg=base64_encode("Group Deleted Successfully");
	header("location: sms.php?msg=$msg");
}
else
{
	$msg2=base64_encode("Group Not Deleted");
	header("location: sms.php?msg2=$msg2");
}
?>