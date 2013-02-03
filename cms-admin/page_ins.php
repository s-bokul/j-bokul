<?php
include("log/login.php");
if(!success())
	header("location: login.php");
require_once("db/dba.php");
require_once("db/function.php");
db_connect();
$menu_name=real_stg($_POST['menu_name']);
$parent=real_stg($_POST['parent']);
$elm1=real_stg($_POST['elm1']);
$order=real_stg($_POST['order']);
$is_gallery=real_stg($_POST['is_gallery']);

$rsRecordID=query("SELECT MAX( cast( SUBSTRING(`menu_id`,4 ) AS SIGNED ) ) AS `id` FROM `menus`");
$rowRecordID=mysql_fetch_array($rsRecordID);
$maxid=$rowRecordID['id'];
mysql_free_result($rsRecordID);
$maxid=$maxid+1;
$maxid=((strlen($maxid)<2) ? "0".$maxid : $maxid);
$maxid=((strlen($maxid)<3) ? "0".$maxid : $maxid);
$RecordID="PG-".$maxid;

$ins_query=query("INSERT INTO `menus` (`menu_id`, `menu_name`, `content`, `parent_menu_id`, `create_date`, `is_active`, `is_gallery`, `order`) VALUES ('$RecordID', '$menu_name', '$elm1', '$parent', curdate(), '1', '$is_gallery', '$order');");
if($ins_query)
{
	$msg=base64_encode("Page Created Successfully");
	header("location: pages.php?msg=$msg");
}
else
{
	$msg2=base64_encode("Page Not Created");
	header("location: pages.php?msg2=$msg2");
}
?>