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
				  <td height="45" align="center" bgcolor="#ffffff" colspan="5">
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
				  <td height="45" align="left" bgcolor="#ffffff" colspan="5"><a href="add_news.php"><img src="images/news_icon1.jpg" alt="Pages" width="50" height="46" border="0" align="left" /></a><br />
		          <strong>Add New News </strong></td>
			  </tr>
				<tr>
					<td width="333" height="25" align="center" bgcolor="#4C89D9">Title</td>
				    <td width="208" align="center" bgcolor="#4C89D9">Create Date </td>
				    <td width="181" align="center" bgcolor="#4C89D9">Status</td>
				    <td width="243" colspan="2" align="center" bgcolor="#4C89D9">Action</td>
				</tr>
				<?php
				
					$news_query=query("select `news_id`, `title`, `create_date`, `is_active` from `news` order by `news_id` desc");
					while($result_news=mysql_fetch_array($news_query))
					{
						if($result_news['is_active']==0)
							$status='Active';
						else
							$status='Inactive';
						
						if($color=='#FFFFFF')
							$color='#FFFF99';
						else
							$color='#FFFFFF';
						echo "<tr bgcolor='".$color."'>
								  <td height='25' align='left'  style='overflow:hidden'>".$result_news['title']."</td>
								  <td align='center'>".$result_news['create_date']."</td>
								  <td align='center'>".$status."</td>
								  <td align='center'><a href='edit_news.php?id=".$result_news['news_id']."'><img src='images/edit.png' alt='Edit' border='0' title='Edit' /></a></td>
								  <td align='center'><a href='news_delete.php?id=".$result_news['news_id']."'><img src='images/delete.png' alt='Delete' border='0' title='Delete' /></a></td>
							  </tr>";
					}
			  ?>
			</table>
			
		</div>
		<?php include("footer.dat"); ?>
	</div>
</body>
</html>
