<?php
include("log/login.php");
if(!success())
	header("location: login.php");
require_once("db/dba.php");
require_once("db/function.php");
db_connect();
$title=real_stg($_POST['title']);
$status=real_stg($_POST['status']);
$elm1=real_stg($_POST['elm1']);

$rsRecordID=query("SELECT MAX( cast( SUBSTRING(`news_id`,4 ) AS SIGNED ) ) AS `news_id` FROM `news`");
$rowRecordID=mysql_fetch_array($rsRecordID);
$maxid=$rowRecordID['news_id'];
mysql_free_result($rsRecordID);
$maxid=$maxid+1;
$maxid=((strlen($maxid)<2) ? "0".$maxid : $maxid);
$maxid=((strlen($maxid)<3) ? "0".$maxid : $maxid);
$RecordID="NW-".$maxid;

$ins_query=query("INSERT INTO `news` (`news_id`, `title`, `content`, `create_date`, `is_active`) VALUES ('$RecordID', '$title', '$elm1', curdate(), '$status');");
if($ins_query)
{
	$msg=base64_encode("News Inserted Successfully");
	header("location: news.php?msg=$msg");
}
else
{
	$msg2=base64_encode("News Not Inserted");
	header("location: news.php?msg2=$msg2");
}
?>