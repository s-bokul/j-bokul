<?
Include_once ("download.php");
$file=$_GET['d'];
$dnld = new download();
$dnld->filename = "backup/backup".$file.".sql";  //keep this file in same directory
$dnld->downloadNow();
?>
