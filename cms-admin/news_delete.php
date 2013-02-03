<?php
include("log/login.php");
if(!success())
	header("location: login.php");
require_once("db/dba.php");

db_connect();

$ids=$_GET['id'];

$ins_query=query("DELETE FROM `news` WHERE `news`.`news_id` = '$ids' LIMIT 1");
if($ins_query)
{
	$msg=base64_encode("News Deleted Successfully");
	header("location: news.php?msg=$msg");
}
else
{
	$msg2=base64_encode("News Not Deleted");
	header("location: news.php?msg2=$msg2");
}
?>