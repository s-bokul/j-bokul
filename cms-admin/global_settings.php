<?php
include("log/login.php");
if(!success())
	header("location: login.php");
require_once("db/dba.php");
db_connect();
$global_set_query=query("select `title`, `email`, `description`, `keywords`, `copyright`, `author`, `email_m`, `Language`, `Charset` from `global_set` where `gs_id`=1 limit 1;");
$result_global=mysql_fetch_array($global_set_query);
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
		<div id="page_body" align="center">
		  <form id="form1" name="form1" method="post" action="global_ins.php">
		    <table width="978" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="30" align="center" colspan="2">
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
                <td width="148" height="30" align="left"><strong>Global Settings</strong></td>
                <td width="830" align="left">&nbsp;</td>
              </tr>
              <tr>
                <td height="30" align="left">Site Title :                </td>
                <td align="left"><input name="title" type="text" id="title" size="30" value="<?php echo $result_global['title']; ?>" /></td>
              </tr>
              <tr>
                <td height="30" align="left">E-Mail Address :                </td>
                <td align="left"><input name="email" type="text" id="email" size="30" value="<?php echo $result_global['email']; ?>" /> 
                  (<strong>ie</strong> Contact Email Address) </td>
              </tr>
              <tr>
                <td height="30" align="left"><strong>Meta Properties </strong></td>
                <td align="left">&nbsp;</td>
              </tr>
              <tr>
                <td height="30" align="left" valign="top">Description :                  </td>
                <td align="left" valign="top"><textarea type="text" name="description" rows="6" cols="40" onkeypress="return maxarea(this,255)" id="userinput_description"  style="width:340px;"><?php echo $result_global['description']; ?></textarea>
                <br />
                Use no more than <b>255 characters</b></td>
              </tr>
              <tr>
                <td height="30" align="left" valign="top">&nbsp;</td>
                <td align="left">&nbsp;</td>
              </tr>
              <tr>
                <td height="30" align="left" valign="top">Keywords : </td>
                <td align="left"><input type="text" name="keywords" size="54" maxlength="255" id="keywords"  style="width:340px;" value="<?php echo $result_global['keywords'];  ?>">
                <br>Use no more than 12 unique <a href="http://www.keyworddiscovery.com/"  target="_blank"> search terms</a> separated by a comma and space. To identify what search terms to target use the <a href="http://www.keyworddiscovery.com/"  target="_blank">keyword research</a> tool.<br><br></td>
              </tr>
              <tr>
                <td height="30" align="left">Copyright : </td>
                <td align="left"><input type="text" name="copyright" size="25" value="<?php echo $result_global['copyright']; ?>">
                  &nbsp;&nbsp;(<b>ie:</b> Copyright YourCompany - 2010)</td>
              </tr>
              <tr>
                <td height="30" align="left">Author : </td>
                <td align="left"><input type="text" id="author" name="author" size="25" value="<?php echo $result_global['author']; ?>">
                  &nbsp;&nbsp;(<b>ie:</b> Your Name/Company)</td>
              </tr>
              <tr>
                <td height="30" align="left">Email : </td>
                <td align="left"><input type="text" id="email_m" name="email_m" size="25" value="<?php echo $result_global['email_m']; ?>">
                &nbsp;&nbsp;(<b>ie:</b> suppport@yoursite.com)</td>
              </tr>
              <tr>
                <td height="30" align="left">Language : </td>
                <td align="left">
					<select name="Language">
  						<option value=""></option>
  						<option value="BG">Bulgarian</option>
  						<option value="CS">Czech</option>
  						<option value="DA">Danish</option>
  						<option value="DE">German</option>
  						<option value="EL">Greek</option>

  						<option value="EN" selected="selected">English</option>
  						<option value="EN-GB">English-Great Britain</option>
  						<option value="EN-US">English-United States</option>
  						<option value="ES">Spanish</option>
  						<option value="ES-ES">Spanish-Spain</option>
  						<option value="FI">Finnish</option>

  						<option value="HR">Croatian</option>
  						<option value="IT">Italian</option>
  						<option value="FR">French</option>
  						<option value="FR-CA">French-Quebec</option>
  						<option value="FR-FR">French-France</option>
  						<option value="IT">Italian</option>

  						<option value="JA">Japanese</option>
  						<option value="KO">Korean</option>
  						<option value="NL">Dutch</option>
  						<option value="NO">Norwegian</option>
  						<option value="PL">Polish</option>
  						<option value="PT">Portuguese</option>

  						<option value="RU">Russian</option>
  						<option value="SV">Swedish</option>
  						<option value="ZH">Chinese</option>
  					</select>				</td>
              </tr>
              <tr>
                <td height="30" align="left">Charset : </td>
                <td align="left">
					  					<select name="Charset">
  						<option value=""></option>
  						<OPTION>GB2312</OPTION>
  						<OPTION>US-ASCII</OPTION>
  						<OPTION>ISO-8859-1</OPTION>
  						<OPTION>ISO-8859-2</OPTION>
  						<OPTION>ISO-8859-3</OPTION>

  						<OPTION>ISO-8859-4</OPTION>
  						<OPTION>ISO-8859-5</OPTION>
  						<OPTION>ISO-8859-6</OPTION>
  						<OPTION>ISO-8859-7</OPTION>
  						<OPTION>ISO-8859-8</OPTION>
  						<OPTION>ISO-8859-9</OPTION>

  						<OPTION>ISO-2022-JP</OPTION>
  						<OPTION>ISO-2022-JP-2</OPTION>
  						<OPTION>ISO-2022-KR</OPTION>
  						<OPTION>SHIFT_JIS</OPTION>
  						<OPTION>EUC-KR</OPTION>
  						<OPTION>BIG5</OPTION>

  						<OPTION>KOI8-R</OPTION>
  						<OPTION>KSC_5601</OPTION>
  						<OPTION>HZ-GB-2312</OPTION>
  						<OPTION>JIS_X0208</OPTION>
  						<OPTION selected="selected">UTF-8</OPTION>
  						<OPTION>other</OPTION>
  					</SELECT>				</td>
              </tr>
              <tr>
                <td height="30" align="left">&nbsp;</td>
                <td align="left">
					<input name="Submit" type="image" id="Submit" value="Submit" src="images/submit-btn.png" />
                  	<img src="images/reset-btn.png" onclick="form1.reset()" />				</td>
              </tr>
            </table>
          </form>
	    </div>
		<?php include("footer.dat"); ?>
	</div>
</body>
</html>
