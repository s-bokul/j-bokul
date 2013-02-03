<?php
ob_start();
session_start();
require_once("../db/dba.php");
$user_name = $_POST['user_name'];
$password = $_POST['password'];
header('Content-type:text/html;charset=UTF-8');
function Random_Number($length) 
{ 
    srand(date("s")); 
    $possible_charactors = "abcdefghijklmnopqrstuvwxyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ"; 
    $string = ""; 
    while(strlen($string)<$length) 
	{ 
        $string .= substr($possible_charactors, rand()%(strlen($possible_charactors)),1); 
    } 
    return($string); 
}  

/* connection with server & database */ 
db_connect();
$user_name = stripslashes($user_name);
$password = stripslashes($password);
$user_name = mysql_real_escape_string($user_name);
$password = mysql_real_escape_string($password);
$result = query("select * from `user` where `user_name`='$user_name' and `password`='$password';");
db_close();
$count=mysql_num_rows($result);
if($count==1)
{
	//$reg_as=mysql_result($result,0,4);
	$number=Random_Number(8);
	//$number=Random_Password(8);
	$number1=Random_Number(8); 
	//$user="bokul";
	$user_name=base64_encode($user_name);
	$user_name=$number.$user_name.$number1;
	session_register("user_name");
	session_register("password");
	session_register("number");
	$_SESSION["suser"]=$user_name;
	$_SESSION["number"]=$number;
	header("Location: ../index.php");
}
else
	{	
?>
	<!--<script language='javascript'>
	alert('Wrong User Name/Password');
	history.go(-1);
	</script>-->
<?php
	$msg="Wrong User Name/Password Try Again";
	$msg=base64_encode($msg);
	header("location: ../login.php?warn=$msg");
}
?>