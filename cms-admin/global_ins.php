<?php
include("log/login.php");
if(!success())
	header("location: login.php");
require_once("db/dba.php");
db_connect();
if($_POST["Submit"]=="Submit")
{
	$title=$_POST['title'];
	$email=$_POST['email'];
	$description=$_POST['description'];
	$keywords=$_POST['keywords'];
	$copyright=$_POST['copyright'];
	$author=$_POST['author'];
	$email_m=$_POST['email_m'];
	$Language=$_POST['Language'];
	$Charset=$_POST['Charset'];
	
	$update_query=query("UPDATE `global_set` SET `title` = '$title', `email` = '$email', `description` = '$description', `keywords` = '$keywords', `copyright` = '$copyright', `author` = '$author', `email_m` = '$email_m', `Language` = '$Language', `Charset` = '$Charset', `date` = curdate() WHERE `global_set`.`gs_id` = 1 LIMIT 1;");
	
	if($update_query)
	{
		$msg=base64_encode("Settings Updated Successfully");
		header("location: global_settings.php?msg=$msg");
	}
	else
	{
		$msg2=base64_encode("Settings Not Updated");
		header("location: global_settings.php?msg2=$msg2");
	}
}
else
{
	$msg2=base64_encode("Settings Not Updated");
	header("location: global_settings.php?msg2=$msg2");
}
?>