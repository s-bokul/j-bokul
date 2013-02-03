<?php
include("log/login.php");
if(!success())
	header("location: login.php");
require_once("db/dba.php");

db_connect();

$ids=$_GET['id'];
$photos_query=query("select `pic_dir` from `photos` where `album_id`='$ids';");
while($result_photo=mysql_fetch_array($photos_query))
{
	$status1=unlink("../upload_big/".$result_photo['pic_dir']."");
	$status2=unlink("../upload_small/".$result_photo['pic_dir']."");
}
$del_photos=query("DELETE FROM `photos` WHERE `photos`.`album_id` = '$ids'");

$ins_query=query("DELETE FROM `photo_album` WHERE `photo_album`.`album_id` = '$ids' LIMIT 1");
if($ins_query)
{
	$msg=base64_encode("Album Deleted Successfully");
	header("location: album.php?msg=$msg");
}
else
{
	$msg2=base64_encode("Album Not Deleted");
	header("location: album.php?msg2=$msg2");
}
?>