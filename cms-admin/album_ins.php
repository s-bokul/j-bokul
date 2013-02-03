<?php
include("log/login.php");
if(!success())
	header("location: login.php");
require_once("db/dba.php");
db_connect();


$parent=$_POST['parent'];
$album_name=$_POST['album_name'];
$description=$_POST['description'];

$rsRecordID=query("SELECT MAX( cast( SUBSTRING(`album_id`,4 ) AS SIGNED ) ) AS `album_id` FROM `photo_album`");
$rowRecordID=mysql_fetch_array($rsRecordID);
$maxid=$rowRecordID['album_id'];
mysql_free_result($rsRecordID);
$maxid=$maxid+1;
$maxid=((strlen($maxid)<2) ? "0".$maxid : $maxid);
$maxid=((strlen($maxid)<3) ? "0".$maxid : $maxid);
$RecordID="AL-".$maxid;


$ins_query=query("INSERT INTO `photo_album` (`album_id`, `album_name`, `menu_id`, `description`, `create_date`, `status`) VALUES ('$RecordID', '$album_name', '$parent', '$description', curdate(), '0');");

if($ins_query)
{
	$msg=base64_encode("Album Created Successfully");
	header("location: album.php?msg=$msg");
}
else
{
	$msg2=base64_encode("Album Not Created");
	header("location: album.php?msg2=$msg2");
}

?>