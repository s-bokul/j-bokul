<?php
if(!empty($_POST['button']))
{
	if($_POST['button']=='Submit')
	{
		$name=$_POST['name'];
		$brand_name=$_POST['brand_name'];
		$sl_no=$_POST['sl_no'];
		$mobile=$_POST['mobile'];
		$email=$_POST['email'];
		$sl_check_query=query("SELECT * FROM `registered_bikes` where `sl_no`='".$sl_no."';");
		$count=mysql_num_rows($sl_check_query);
		if($count>0)
		{
			$msg = "This SL No already used please try with correct SL No.";
		}
		else
		{
			$ins_query=query("INSERT INTO `lion`.`registered_bikes` (`id`, `name`, `brand`, `sl_no`, `mobile_no`, `email`, `ins_date`) VALUES (NULL, '$name', '$brand_name', '$sl_no', '$mobile', '$email', CURDATE());");
			if($ins_query)
			{
				$message = "Your Bike Registered Successfully";
			}
			else
			{
				$msg = "Bike Registration Failed. Please try again.";
			}
		}
	}
}	
?>
<?php
if(!empty($_POST['button2']))
{
	if($_POST['button2']=='Submit')
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$msg=$_POST['msg'];
		
		$to      = 'info@lioncyclestore.com';
		$subject = 'Mail Form Complain Section';
		$message = $msg;
		$headers = 'From: '.$email.'' . "\r\n" .
			'Reply-To: '.$email.'' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
			
		
		$mail_check = mail($to, $subject, $message, $headers);
	
		if($mail_check)
		{
			$message2 = "Mail Sent Successfully.";
		}
		else
		{
			$msgs2 = "Mail Not Sent.";
		}
	}	
}
?>
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script type="text/javascript" src="<?php echo $path; ?>js/prettify.js"></script>                                   <!-- PRETTIFY -->
<script type="text/javascript" src="<?php echo $path; ?>js/kickstart.js"></script>  
<script>
	$(document).ready(function(){
	  $("#r").click(function(){
		$("#register").toggle();
	  });
	  $("#com").click(function(){
		$("#complain").toggle();
	  });
	});
</script>                                <!-- KICKSTART -->
<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>css/kickstart.css" media="all" />
<style type="text/css">
<!--
.ttl {
	font-size: 16px;
	font-weight: bold;
	text-decoration: none;
	background-color: #FFFFFF;
	color: #333333;
}
-->
</style>
<table width="978" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="left" valign="top" bgcolor="#EDEDED">
       	  <div id="main-body">
                <span style="font-family:'Trebuchet MS', Verdana;font-size:18px;font-weight:bold;"><?php //echo $menu_name; ?></span>
              <div style="float:left;display:block;width:958px;padding:10px;background-color:#FFFFFF">
                <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="40" align="center">&nbsp;</td>
                    <td align="center">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="50%" align="center">
                    	<?php
                                    if(!empty($msg))
                                    {
                                        echo '<div class="notice error">';
                                        echo $msg;
                                        echo '</div>';
                                    }
                                ?>
                              
                              
                                <?php
                                    if(!empty($message))
                                    {
                                        echo '<div class="notice success">';
                                        echo $message;
                                        echo '</div>';
                                    }
                                ?>                    </td>
                    <td width="50%" align="center">
                    	<?php
                                    if(!empty($msgs2))
                                    {
                                        echo '<div class="notice error">';
                                        echo $msgs2;
                                        echo '</div>';
                                    }
                                ?>
                              
                              
                                <?php
                                    if(!empty($message2))
                                    {
                                        echo '<div class="notice success">';
                                        echo $message2;
                                        echo '</div>';
                                    }
                                ?>                    </td>
                  </tr>
                  <tr>
                    <td align="center"><a href="#" class="ttl" id="r">Register Your Bike</a></td>
                    <td align="center" class="ttl"><a href="#" class="ttl" id="com">Submit Your Complain</a></td>
                  </tr>
                  <tr>
                    <td align="center" valign="top">
                    	<form name="form1" method="post" action="">
                          <table width="0" border="0" align="center" cellpadding="0" cellspacing="0" id="register" style="display:none;">
                            <tr>
                              <td height="20" align="center" colspan="2">                                </td>
                            </tr>
                            
                            <tr>
                              <td height="30" align="left">Name</td>
                              <td align="left">:
                                <input name="name" type="text" id="name" size="40"></td>
                            </tr>
                            <tr>
                              <td height="30" align="left">Brand Name</td>
                              <td align="left">:
                                <input name="brand_name" type="text" id="brand_name" size="40"></td>
                            </tr>
                            <tr>
                              <td height="30" align="left">SL No.</td>
                              <td align="left">:
                                <input name="sl_no" type="text" id="sl_no" size="40"></td>
                            </tr>
                            <tr>
                              <td height="30" align="left">Mobile No</td>
                              <td align="left">: 
                              <input name="mobile" type="text" id="mobile" size="40" /></td>
                            </tr>
                            <tr>
                              <td height="30" align="left">Email</td>
                              <td align="left">:
                                <input name="email" type="text" id="email" size="40"></td>
                            </tr>
                            <tr>
                              <td height="15" align="left">&nbsp;</td>
                              <td align="center">&nbsp;</td>
                            </tr>
                            <tr>
                              <td height="40" align="left">&nbsp;</td>
                              <td align="center"><input type="submit" name="button" id="button" value="Submit"></td>
                            </tr>
                            <tr>
                              <td height="50" align="left">&nbsp;</td>
                              <td align="left">&nbsp;</td>
                            </tr>
                          </table>
                        </form>                    </td>
                    <td align="center" valign="top">
                    	<form name="form2" method="post" action="">
                          <table width="55%" border="0" align="center" cellpadding="0" cellspacing="0" id="complain" style="display:none;">
                            <tr>
                              <td height="20" align="center" colspan="2">                                </td>
                            </tr>
                            <tr>
                              <td height="30" align="left">Name</td>
                              <td align="left"><input name="name" type="text" id="name" size="40"></td>
                            </tr>
                            
                            <tr>
                              <td height="30" align="left">Email</td>
                              <td align="left"><input name="email" type="text" id="email" size="40"></td>
                            </tr>
                            <tr>
                              <td height="5" align="left"></td>
                              <td align="left"></td>
                            </tr>
                            <tr>
                              <td height="30" align="left" valign="top">Message</td>
                              <td align="left" valign="top"><textarea name="msg" id="msg" cols="45" rows="5"></textarea></td>
                            </tr>
                            <tr>
                              <td height="15" align="left">&nbsp;</td>
                              <td align="center">&nbsp;</td>
                            </tr>
                            <tr>
                              <td height="40" align="left">&nbsp;</td>
                              <td align="center"><input type="submit" name="button2" id="button2" value="Submit"></td>
                            </tr>
                            <tr>
                              <td height="50" align="left">&nbsp;</td>
                              <td align="left">&nbsp;</td>
                            </tr>
                          </table>
                        </form>                    </td>
                  </tr>
                  <tr>
                    <td height="50" align="center" valign="top">&nbsp;</td>
                    <td align="center" valign="top">&nbsp;</td>
                  </tr>
                </table>
              </div>
          </div></td>
      </tr>
    </table>