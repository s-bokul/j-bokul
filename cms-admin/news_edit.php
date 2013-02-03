<?php
include("log/login.php");
if(!success())
	header("location: login.php");
require_once("db/dba.php");
require_once("db/function.php");
db_connect();
$ids=real_stg($_POST['ids']);
$title=real_stg($_POST['title']);
$status=real_stg($_POST['status']);
$elm1=real_stg($_POST['elm1']);


$ins_query=query("UPDATE `news` SET `title` = '$title', `content` = '$elm1', `create_date` = curdate(), `is_active` = '$status' WHERE `news`.`news_id` = '$ids' LIMIT 1;");
if($ins_query)
{
	$msg=base64_encode("News Updated Successfully");
	header("location: news.php?msg=$msg");
}
else
{
	$msg2=base64_encode("News Not Updated");
	header("location: news.php?msg2=$msg2");
}
?>