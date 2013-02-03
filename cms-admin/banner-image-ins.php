<?php
include("log/login.php");
if(!success())
	header("location: login.php");
require_once("db/dba.php");
db_connect();

$rsRecordID=query("SELECT MAX( cast( SUBSTRING(`id`,4 ) AS SIGNED ) ) AS `id` FROM `banner_image`");
$rowRecordID=mysql_fetch_array($rsRecordID);
$maxid=$rowRecordID['id'];
mysql_free_result($rsRecordID);
$maxid=$maxid+1;
$maxid=((strlen($maxid)<2) ? "0".$maxid : $maxid);
$maxid=((strlen($maxid)<3) ? "0".$maxid : $maxid);
$RecordID="BN-".$maxid;

$img=$RecordID;
/////////////////Photo Upload/////////////////////
$fileField=$_FILES['fileField']['tmp_name'];

if (is_uploaded_file($_FILES['fileField']['tmp_name'])) 
{ 
$file_realname = $_FILES['fileField']['name']; 
if (($pos = strrpos($file_realname, ".")) === FALSE)
  echo "Error - file doesn't have a dot... weird.";
else {
  $extension =substr($file_realname, $pos );
  //echo $extension; // will echo "jpeg"
}
copy($_FILES['fileField'.$i]['tmp_name'], "../bimages/".trim("$img$extension")); 
} 
else 
{ 
	echo "<b><font color=red>No file uploaded.</font></b><BR>No file available or file too big to upload."; 
}  
if(!empty($fileField))	
$picture="$img$extension";
else
$picture="";
//////////////////////////////////////////////////
	$insert=query("INSERT INTO `banner_image` (`id`, `image`, `create_date`) VALUES ('$RecordID', '$picture', curdate());");
	if($insert)
	{
		$msg=base64_encode("Photo Uploaded Successfully");
		header("location: banner-image.php?msg=$msg&id=$album_id");
	}
	else
	{
		$msg2=base64_encode("Photo Not Uploaded");
		header("location: banner-image.php?msg2=$msg2&id=$album_id");
	}

?>