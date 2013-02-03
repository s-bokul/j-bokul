<?php
include("log/login.php");
if(!success())
	header("location: login.php");
require_once("db/dba.php");
db_connect();




$rsRecordID=query("SELECT MAX( cast( SUBSTRING(`rp_id`,4 ) AS SIGNED ) ) AS `rp_id` FROM `data_report`");
$rowRecordID=mysql_fetch_array($rsRecordID);
$maxid=$rowRecordID['rp_id'];
mysql_free_result($rsRecordID);
$maxid=$maxid+1;
$maxid=((strlen($maxid)<2) ? "0".$maxid : $maxid);
$maxid=((strlen($maxid)<3) ? "0".$maxid : $maxid);
$RecordID="DT-".$maxid;

$title=$_POST['title'];
$img =$RecordID;
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
copy($_FILES['fileField'.$i]['tmp_name'], "../data/".trim("$img$extension")); 
} 
else 
{ 
echo "<b><font color=red>No file uploaded.</font></b><BR>No file available or file too big to upload."; 
}  
if(!empty($fileField))	
$picture="$img$extension";
else
$picture="";

$ins_query=query("INSERT INTO `data_report` (`rp_id`, `title`, `file`, `ins_date`) VALUES ('$RecordID', '$title', '$picture', curdate());");
if($ins_query)
{
	$msg=base64_encode("Data Inserted Successfully");
	header("location: data_report.php?msg=$msg");
}
else
{
	$msg2=base64_encode("Data Not Inserted");
	header("location: data_report.php?msg2=$msg2");
}
?>