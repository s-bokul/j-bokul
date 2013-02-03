<?php
include("log/login.php");
if(!success())
	header("location: login.php");
require_once("db/dba.php");
require_once("db/function.php");
db_connect();

$ids=real_stg($_POST['ids']);
$menu_name=real_stg($_POST['menu_name']);
$parent=real_stg($_POST['parent']);
$elm1=real_stg($_POST['elm1']);
$order=real_stg($_POST['order']);
$status=real_stg($_POST['status']);


$ins_query=query("UPDATE `menus` SET `menu_name` = '$menu_name', `content` = '$elm1', `parent_menu_id` = '$parent', `is_active` = '$status', `order` = '$order' WHERE `menus`.`menu_id` = '$ids' LIMIT 1;");
if($ins_query)
{
	$msg=base64_encode("Page Edited Successfully");
	header("location: pages.php?msg=$msg");
}
else
{
	$msg2=base64_encode("Page Not Edited");
	header("location: pages.php?msg2=$msg2");
}
?>