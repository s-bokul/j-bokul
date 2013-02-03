<?php
include("log/login.php");
if(!success())
	header("location: login.php");
require_once("db2/dba.php");
db_connect();
$group_name=$_POST['group_name'];


$ins_query=query("INSERT INTO `sms_group` (`group_id`, `group_name`, `create_date`) VALUES (NULL, '$group_name', curdate());");
if($ins_query)
{
	$msg=base64_encode("SMS Group Created Successfully");
	header("location: sms.php?msg=$msg");
}
else
{
	$msg2=base64_encode("SMS Group Not Created");
	header("location: sms.php?msg2=$msg2");
}

?>