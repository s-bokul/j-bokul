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
-->
</style>
    <?php include("../tinymce.php"); ?>
<?php /*include("normal_tinymce.php");*/ ?>
</head>

<body>
	<div align="center">
		<?php include("header.php"); ?>
		<div id="page_body" align="left">
		  <table width="978" border="0" cellspacing="0" cellpadding="0">
            
            <tr>
              <td><table width="978" border="0" cellspacing="0" cellpadding="0">
                
                <tr>
                  <td height="30" align="center">
					<?php
						if($_GET['msg'] or $_GET['msg2'])
							echo "<strong>
									<a href='photos.php?id=".$_GET['id']."'>Back To Album </a>
								  </strong>";
						
				  	?>
				  </td>
                </tr>
                <tr>
                  <td height="30" align="center">
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
                  <td height="25">&nbsp;</td>
                </tr>
                <tr>
                    <td>
                        <form action="banner-image-ins.php" method="post" enctype="multipart/form-data" name="form1"
                              id="form1">
                            <table width="978" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="116" height="30" align="left" valign="middle">Upload Picture :</td>
                                    <td width="862" align="left" valign="middle">
                                        <input name="fileField" type="file" id="photo"/>
                                    </td>
                                </tr>

                                <tr>
                                    <td width="116" height="30" align="left" valign="middle">Title :</td>
                                    <td width="862" align="left" valign="middle">
                                        <input type="text" name="title">
                                    </td>
                                </tr>

                                <tr>
                                    <td width="116" height="30" align="left" valign="middle">URL :</td>
                                    <td width="862" align="left" valign="middle">
                                        <input type="text" name="url">
                                    </td>
                                </tr>

                                <tr>
                                    <td height="10" align="left" valign="middle"></td>
                                    <td align="left" valign="middle"></td>
                                </tr>


                                <tr>
                                    <td height="10" align="left" valign="middle" colspan="2"></td>
                                </tr>
                                <tr>
                                    <td height="30" align="left" valign="middle" colspan="2">
                                        <input type="image" src="images/submit-btn.png" value="Submit"/>
                                        <img src="images/reset-btn.png" onclick="form1.reset()"/>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </td>
                </tr>
              </table></td>
            </tr>
          </table>
		</div>
		<?php include("footer.dat"); ?>
	</div>
</body>
</html>
