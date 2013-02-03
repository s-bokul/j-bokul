<?php
include("log/login.php");
if(!success())
	header("location: login.php");
require_once("db/dba.php");
db_connect();
$album_name=$_POST['album_name'];
$description=$_POST['description'];
$ids=$_POST['ids'];

$ins_query=query("UPDATE `photo_album` SET `album_name` = '$album_name', `description` = '$description', `create_date` = curdate(), `status` = '0' WHERE `photo_album`.`album_id` = '$ids' LIMIT 1;");
if($ins_query)
{
	$msg=base64_encode("Album Updated Successfully");
	header("location: album.php?msg=$msg");
}
else
{
	$msg2=base64_encode("Album Not Updated");
	header("location: album.php?msg2=$msg2");
}

?>