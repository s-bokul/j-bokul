<?php 
session_start();
function success()
{
if(!isset($_SESSION["suser"]) && !isset($_SESSION["number"]))
{
	return false;
}
else
{	
	return true;
}
/* if($_SESSION["suser"]){
	return true;
} */

}
?>