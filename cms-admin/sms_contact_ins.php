<?php
include("log/login.php");
if(!success())
	header("location: login.php");
require_once("db2/dba.php");
db_connect();

$group_id=$_POST['group_id'];
$name=$_POST['name'];
$mb_number=$_POST['mb_number'];


$ins_query=query("INSERT INTO `sms_contacts` (`id`, `group_id`, `name`, `phonenumber`, `create_date`) VALUES (NULL, '$group_id', '$name', '$mb_number', curdate());");
if($ins_query)
{
	$msg=base64_encode("SMS Contact Added Successfully");
	header("location: sms_group_view_details.php?id=$group_id&msg=$msg");
}
else
{
	$msg2=base64_encode("SMS SMS Contact Not Created");
	header("location: sms_group_view_details.php?id=$group_id&msg2=$msg2");
}

?>