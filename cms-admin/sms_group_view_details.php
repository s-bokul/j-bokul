<?php
include("log/login.php");
if(!success())
	header("location: login.php");
require_once("db2/dba.php");
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
				  <td height="45" align="center" bgcolor="#ffffff" colspan="7">
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
					</span>
					</strong>
				  </td>
			  </tr>
				<tr>
				  <td height="45" align="left" bgcolor="#ffffff" colspan="7">
                  <?php
				  	$group_id=$_GET["id"];
				  ?>
                  <a href="sms_contact_add.php?group_id=<?php echo $group_id;?>"><img src="images/buddy.png" alt="Pages" width="50" height="45" border="0" align="left" /></a><br />
			        <strong>Add New Contacts</strong></td>
			  </tr>
				<tr>
					<td height="25" align="center" bgcolor="#4C89D9">SL</td>
			      	<td align="center" bgcolor="#4C89D9">Name</td>
                    <td align="center" bgcolor="#4C89D9">Phone Number</td>
				    <td align="center" bgcolor="#4C89D9">Create Date </td>
				    <td align="center" bgcolor="#4C89D9">Action</td>
				</tr>
				<?php
					$sms_group_query=query("select `id`, `group_id`, `name`, `phonenumber`, `create_date` from `sms_contacts` where `group_id`='$group_id' order by `id` asc");
					$i=1;
					while($result_sms_group=mysql_fetch_array($sms_group_query))
					{						
						if($color=='#FFFFFF')
							$color='#FFFF99';
						else
							$color='#FFFFFF';
						echo "<tr bgcolor='".$color."'>
								  <td height='25' align='center'>".$i."</td>
								  <td align='left'>".$result_sms_group['name']."</td>
								  <td align='center'>".$result_sms_group['phonenumber']."</td>
								  <td align='center'>".$result_sms_group['create_date']."</td>
								  <td align='center'><a href='sms_contact_delete.php?id=".$group_id."&cid=".$result_sms_group['id']."'><img src='images/delete.png' alt='Delete' border='0' title='Delete' /></a></td>
							  </tr>";
						++$i;
					}
			  ?>
			</table>
			
		</div>
		<?php include("footer.dat"); ?>
	</div>
</body>
</html>
