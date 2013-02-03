<?php
include("log/login.php");
if(!success())
	header("location: login.php");
require_once("db/dba.php");
db_connect();
$chk=0;

/*$rsRecordID=query("SELECT MAX( cast( SUBSTRING(`photo_id`,4 ) AS SIGNED ) ) AS `photo_id` FROM `photos`");
$rowRecordID=mysql_fetch_array($rsRecordID);
$maxid=$rowRecordID['photo_id'];
mysql_free_result($rsRecordID);
$maxid=$maxid+1;
$maxid=((strlen($maxid)<2) ? "0".$maxid : $maxid);
$maxid=((strlen($maxid)<3) ? "0".$maxid : $maxid);
$RecordID="PH-".$maxid;*/

$img='new';
/////////////////Photo Upload/////////////////////
$fileField=$_FILES['photo']['tmp_name'];
if (is_uploaded_file($_FILES['photo']['tmp_name'])) 
	{ 
		$file_realname = $_FILES['photo']['name']; 
		if (($pos = strrpos($file_realname, ".")) === FALSE)
  			echo "Error - file doesn't have a dot... weird.";
		else {
  			$extension =substr($file_realname, $pos );
  			//echo $extension; // will echo "jpeg"
			}
		copy($_FILES['photo'.$i]['tmp_name'], "temp/".trim("$img$extension")); 
	} 
	else 
	{ 
		//echo "<b><font color=red>No file uploaded.</font></b><BR>No file available or file too big to upload."; 
	}
$file='$img$extension';
$zip = new ZipArchive;
if ($zip->open('temp/new.zip') === TRUE) {
    $zip->extractTo('../templete/');
    $zip->close();
    echo 'ok';
} else {
    echo 'failed';
}
//////////////////////////////////////////////////
/*if($chk==1)
{
	$insert=query("INSERT INTO `photos` (`photo_id`, `album_id`, `title`, `description`, `pic_dir`, `ins_date`) VALUES ('$RecordID', '$album_id', '$title', '$description', '$picture', curdate());");
	if($insert)
	{
		$msg=base64_encode("Photo Uploaded Successfully");
		header("location: add_photo.php?msg=$msg&id=$album_id");
	}
	else
	{
		$msg2=base64_encode("Photo Not Uploaded");
		header("location: add_photo.php?msg2=$msg2&id=$album_id");
	}
}
else
{
	$msg2=base64_encode("There Was A Problem To Upload Picture");
	header("location: add_photo.php?msg2=$msg2&id=$album_id");
}*/

?>