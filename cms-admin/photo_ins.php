<?php
include("log/login.php");
if(!success())
	header("location: login.php");
require_once("db/dba.php");
db_connect();
$chk=0;
$title=$_POST['title'];
$album_id=$_POST['album_id'];
$description=$_POST['description'];
$web_url=$_POST['web_url'];

$rsRecordID=query("SELECT MAX( cast( SUBSTRING(`photo_id`,4 ) AS SIGNED ) ) AS `photo_id` FROM `photos`");
$rowRecordID=mysql_fetch_array($rsRecordID);
$maxid=$rowRecordID['photo_id'];
mysql_free_result($rsRecordID);
$maxid=$maxid+1;
$maxid=((strlen($maxid)<2) ? "0".$maxid : $maxid);
$maxid=((strlen($maxid)<3) ? "0".$maxid : $maxid);
$RecordID="PH-".$maxid;

echo $img=$RecordID;
/////////////////Photo Upload/////////////////////
$fileField=$_FILES['photo']['tmp_name'];
		if (is_uploaded_file($_FILES['photo']['tmp_name'])) 
		{ 
			$file_realname = $_FILES['photo']['name']; 
			if (($pos = strrpos($file_realname, ".")) === FALSE)
			  echo "Error - file doesn't have a dot... weird.";
			else 
			{
			  $extension =substr($file_realname, $pos );
			  $extension=strtolower($extension);
			  //echo $extension; // will echo "jpeg"
			}
			if($extension==".jpeg" || $extension==".jpg" || $extension==".png" || $extension==".gif")
			{
				$copy=copy($_FILES['photo']['tmp_name'], "../upload_big/".trim("$img$extension")); 
				if ($copy) 
				{ 
					// If The Script Was Able To Copy The Image To It's Permanent Location
					//print 'Image uploaded successfully.<br />';   // Was Able To Successfully Upload Image
					//echo "bokul";
					$twidth = "300";   // Maximum Width For Thumbnail Images
					$theight = "235";   // Maximum Height For Thumbnail Images 
					$picture1="$img$extension";
					if($extension==".png")
					 $simg = imagecreatefrompng("../upload_big/".$picture1);   // Make A New Temporary Image To Create The Thumbanil From
					else if($extension==".gif")
						 $simg = imagecreatefromgif("../upload_big/".$picture1);
					else
					  $simg = imagecreatefromjpeg("../upload_big/".$picture1);   // Make A New Temporary Image To Create The Thumbanil From
					
					$currwidth = imagesx($simg);   // Current Image Width
					$currheight = imagesy($simg);   // Current Image Height
					if ($currheight > $currwidth)
                    {   // If Height Is Greater Than Width
					 $zoom = $twidth / $currheight;   // Length Ratio For Width
					 $newheight = $theight;   // Height Is Equal To Max Height
					 $newwidth = $currwidth * $zoom;   // Creates The New Width
					}
                    else
                    {    // Otherwise, Assume Width Is Greater Than Height (Will Produce Same Result If Width Is Equal To Height)
					$zoom = $twidth / $currwidth;   // Length Ratio For Height
					$newwidth = $twidth;   // Width Is Equal To Max Width
					$newheight = $currheight * $zoom;   // Creates The New Height
					}
					$dimg = imagecreate($newwidth, $newheight);   // Make New Image For Thumbnail
					imagetruecolortopalette($simg, false, 256);   // Create New Color Pallete
					$palsize = ImageColorsTotal($simg);
					for ($i = 0; $i < $palsize; $i++) {   // Counting Colors In The Image
					$colors = ImageColorsForIndex($simg, $i);   // Number Of Colors Used
					ImageColorAllocate($dimg, $colors['red'], $colors['green'], $colors['blue']);   // Tell The Server What Colors This Image Will Use
					}
					imagecopyresized($dimg, $simg, 0, 0, 0, 0, $newwidth, $newheight, $currwidth, $currheight);   // Copy Resized Image To The New Image (So We Can Save It)
					imagejpeg($dimg, "../upload_small/" . "$img$extension");   // Saving The Image
					imagedestroy($simg);   // Destroying The Temporary Image
					imagedestroy($dimg);   // Destroying The Other Temporary Image
					//print 'Image thumbnail created successfully.';   // Resize successful
					$chk=1;
				} 
			}
			else
			{
				$msg="<span class='warning'>Please Upload Only Image</span>";
			}
		} 
		else 
		{ 
			$msg="<span class='warning'>No file available or file too big to upload</span>";
		//echo "<b><font color=red>No file uploaded.</font></b><BR>No file available or file too big to upload."; 
		}  
		if(!empty($fileField))	
		$picture="$img$extension";
		else
		$picture="";
//////////////////////////////////////////////////
if($chk==1)
{
	$insert=query("INSERT INTO `photos` (`photo_id`, `album_id`, `title`, `description`, `pic_dir`, `web_url`, `ins_date`) VALUES ('$RecordID', '$album_id', '$title', '$description', '$picture', '$web_url', curdate());");
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
}

?>