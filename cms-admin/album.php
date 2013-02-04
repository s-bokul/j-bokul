<?php
include("log/login.php");
if(!success())
	header("location: login.php");
require_once("db/dba.php");
db_connect();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CMS Login</title>

<link href="css/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
a
{
	color:#0099FF;
	text-decoration:none;
}
a:hover
{
	color:#333333;
}
#minipics
{
	width:900px;
}
div#minipics ul{list-style-type: none;margin:0 15px;padding:0}
div#minipics li{
	float:left;
	width:200px;
	background-color: #FFF;
	margin-top: 10px;
	margin-right: 10px;
	margin-bottom: 10px;
	margin-left: 0;
}
div#minipics li img{display: block;width: 80px;height: 80px;margin:5px 10px;border: 0px}
-->
</style>
<link rel="stylesheet" type="text/css" href="css/niftyCorners.css">
<script type="text/javascript" src="js/nifty.js"></script>
<script type="text/javascript">
window.onload=function(){
if(!NiftyCheck())
    return;
Rounded("div#minipics li","#EEEEEE","#FFF");
}
</script>
</head>

<body>
	<div align="center">
		<?php include("header.php"); ?>
		<div id="page_body" align="left">
		  <table width="978" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="25" align="left" valign="middle"><a href="create_album.php"><img src="images/newalbum-btn.png" alt="Create New Album" width="150" height="42" border="0" /></a></td>
            </tr>
            <tr>
              <td><table width="978" border="0" cellspacing="0" cellpadding="0">
                
                <tr>
                  <td height="30" align="center">
				  <strong>
				  	<?php 
						if(isset($_GET['msg']))
							echo base64_decode($_GET['msg']);
					?>
					<span style="color:#FF3E3E">
						<?php 
						if(isset($_GET['msg2']))
							echo base64_decode($_GET['msg2']);
						?>
					</span>					</strong>				  </td>
                </tr>
                <tr>
                  <td height="25"><strong>Album List</strong> </td>
                </tr>
                <tr>
                  <td><table width="978" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="200" align="center" valign="middle" bgcolor="#EEEEEE">
					  	<div id="minipics">
							<ul>
								<?php
									$album_query=query("select `album_id`, `album_name`, `status` from `photo_album` order by `album_id` asc;");
									$i=0;
									while($result_album=mysql_fetch_array($album_query))
									{
										if($result_album['status']==0)
											$status="Active";
										else
											$status="Inactive";
										echo "<li><strong>Album Name : </strong>".$result_album['album_name']."<img src='images/album_ico.png' alt='Album $i'><br /><strong>Status : </strong>$status<br /><a href='photos.php?id=".$result_album['album_id']."'>Photos</a><br /><a href='del_album.php?id=".$result_album['album_id']."'>Delete Album</a><br /><a href='edit_album.php?id=".$result_album['album_id']."'>Edit Album</a></li>";	
										 ++$i;									
									}
								?>
							</ul>
						</div>
					  </td>
                    </tr>
                  </table></td>
                </tr>
              </table></td>
            </tr>
          </table>
		</div>
		<?php include("footer.dat"); ?>
	</div>
</body>
</html>
