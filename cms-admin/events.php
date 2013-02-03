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
-->
</style>
</head>

<body>
	<div align="center">
		<?php include("header.php"); ?>
		<div id="page_body" align="left">
			<table cellpadding="1" cellspacing="1" border="0" bgcolor="#999999" width="978">
				<tr>
				  <td height="45" align="center" bgcolor="#ffffff" colspan="4">
				    <strong>
				  	<?php 
						if($_GET['msg']) 
							echo base64_decode($_GET['msg']);
					?>
					<span style="color:#FF3E3E">
						<?php 
						if($_GET['msg2']) 
							echo base64_decode($_GET['msg2']);
						?>
					</span>					</strong>				  </td>
			  </tr>
				<tr>
				  <td height="45" align="left" bgcolor="#ffffff" colspan="4"><a href="add_events.php"><img src="images/calendar_icon.jpg" alt="Pages" width="50" height="46" border="0" align="left" /></a><br />
		          <strong>Add New Events </strong></td>
			  </tr>
				<tr>
					<td width="410" height="25" align="center" bgcolor="#4C89D9">Title</td>
				    <td width="303" align="center" bgcolor="#4C89D9">Event Date </td>
				    <td width="255" colspan="2" align="center" bgcolor="#4C89D9">Action</td>
				</tr>
				<?php
				
					$events_query=query("select `id`, `eventTitle`, `eventDate` from `eventcal` order by `eventDate` desc");
					while($result_events=mysql_fetch_array($events_query))
					{						
						if($color=='#FFFFFF')
							$color='#FFFF99';
						else
							$color='#FFFFFF';
						echo "<tr bgcolor='".$color."'>
								  <td height='25' align='left'  style='overflow:hidden'>".$result_events['eventTitle']."</td>
								  <td align='center'>".$result_events['eventDate']."</td>
								  <td align='center'><a href='edit_events.php?id=".$result_events['id']."'><img src='images/edit.png' alt='Edit' border='0' title='Edit' /></a></td>
								  <td align='center'><a href='events_delete.php?id=".$result_events['id']."'><img src='images/delete.png' alt='Delete' border='0' title='Delete' /></a></td>
							  </tr>";
					}
			  ?>
			</table>
			
		</div>
		<?php include("footer.dat"); ?>
	</div>
</body>
</html>
