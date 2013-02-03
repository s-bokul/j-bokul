<?php
include("log/login.php");
if(!success())
	header("location: login.php");
require_once("db/dba.php");

db_connect();

$ids=$_GET['id'];

$ins_query=query("DELETE FROM `menus` WHERE `menus`.`menu_id` = '$ids' LIMIT 1");
if($ins_query)
{
	$msg=base64_encode("Page Deleted Successfully");
	header("location: pages.php?msg=$msg");
}
else
{
	$msg2=base64_encode("Page Not Deleted");
	header("location: pages.php?msg2=$msg2");
}
?>