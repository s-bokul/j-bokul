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
				  <td height="45" align="left" bgcolor="#ffffff" colspan="6">
                  <form id="form1" name="form1" method="post" action="registered-bike-search.php">
				    <input type="text" name="s" id="s" />
				    <select name="s_type" id="s_type">
				      <option value="1">SL No.</option>
				      <option value="2" selected="selected">Mobile No.</option>
			        </select>
                    <input type="submit" name="search" id="search" value="Search" />
				  </form>
				  </td>
			  </tr>
				<tr>
					<td width="163" height="25" align="center" bgcolor="#4C89D9">Name</td>
				    <td width="163" align="center" bgcolor="#4C89D9">Brand</td>
				    <td width="125" align="center" bgcolor="#4C89D9">SL No.</td>
				    <td width="188" align="center" bgcolor="#4C89D9">Mobile No</td>
				    <td width="117" align="center" bgcolor="#4C89D9">Email</td>
				    <td colspan="2" align="center" bgcolor="#4C89D9">Date</td>
				</tr>
				<?php
					$search = $_POST['s'];
					$s_type = $_POST['s_type'];
					if($s_type==1)
						$filter = "sl_no";
					else
						$filter = "mobile_no";
					$bike_query=query("select `name`, `brand`, `sl_no`, `mobile_no`, `email`, `ins_date` from `registered_bikes` where $filter='".$search."' order by `id` asc");
					while($bike_raw=mysql_fetch_array($bike_query))
					{						
						if($color=='#FFFFFF')
							$color='#FFFF99';
						else
							$color='#FFFFFF';
						echo "<tr bgcolor='".$color."'>
								  <td height='25' align='left'>".$bike_raw['name']."</td>
								  <td align='left'>".$bike_raw['brand']."</td>
								  <td align='center'>".$bike_raw['sl_no']."</td>
								  <td align='center'>".$bike_raw['mobile_no']."</td>
								  <td align='center'>".$bike_raw['email']."</td>
								  <td align='center'>".$bike_raw['ins_date']."</td>
							  </tr>";
					}
			  ?>
			</table>
			
		</div>
		<?php include("footer.dat"); ?>
	</div>
</body>
</html>
