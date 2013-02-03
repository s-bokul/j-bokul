<?php
include("log/login.php");
if(!success())
	header("location: login.php");
require_once("db/dba.php");
db_connect();
$ids=$_GET['id'];
$read_query=query("select `news_id`, `title`, `content`, `is_active` from `news` where `news_id`='$ids';");
$result=mysql_fetch_array($read_query);
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
<?php include("../tinymce.php"); ?>
</head>

<body>
	<div align="center">
		<?php include("header.php"); ?>
	  <div id="page_body" align="left">
	    <form id="form1" name="form1" method="post" action="news_edit.php">
	      <table width="978" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="600"><table width="600" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="30" align="left">News Title : 
                    <input name="title" type="text" id="title" value="<?php echo $result['title']; ?>" size="50" />
                  	<input name="ids" type="hidden" id="ids" value="<?php echo $ids; ?>" />
				  </td>
                </tr>
                <tr>
                  <td height="30" align="left"><br />
                    Contant :<br />
                    <br />
				  	<textarea id="elm1" name="elm1" rows="18" cols="80" style="width: 80%">
						<?php echo $result['content']; ?>
					</textarea>
				  </td>
                </tr>
                <tr>
                  <td height="45" align="left">
				  	<input type="image" src="images/submit-btn.png" value="Submit" />
                  	<img src="images/reset-btn.png" onclick="form1.reset()" />
				  </td>
                </tr>
              </table></td>
              <td width="378" align="left" valign="top"><table width="378" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="20" height="30" align="left">&nbsp;</td>
                  <td align="left">Is Published :
                    <select name="status" id="status">
					  <option value="0">Published</option>
					  <option value="1">Not Published</option>					  
                    </select>
				  </td>
                </tr>
                <tr>
                  <td height="30" align="left">&nbsp;</td>
                  <td align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td height="30">&nbsp;</td>
                </tr>
              </table></td>
            </tr>
          </table>
        </form>
      </div>
		<?php include("footer.dat"); ?>
	</div>
</body>
</html>
