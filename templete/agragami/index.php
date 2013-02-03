<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo title(); ?></title>
<?php
	echo meta();
?>
<link REL="SHORTCUT ICON" HREF="<?php echo $path; ?>images/logo.gif">
<link type="image/x-icon" href="<?php echo $path; ?>images/logo.gif" rel="shortcut icon"/>
<link href="<?php echo $path; ?>css/menu_style.css"  rel="stylesheet" type="text/css"  />
<script src="<?php echo $path; ?>js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo $path; ?>js/drop-down-menu.js" type="text/javascript"></script>
<script src="<?php echo $path; ?>js/jqFancyTransitions.1.8.min.js" type="text/javascript"></script>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	font-family:solaimanLipi;
}
-->
</style></head>
<body>
<table class="wrap" cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td class="header" valign="top" align="center">
			<?php include($path."header.php"); ?>		
		</td>
	</tr>
	<tr>
		<td valign="top" align="center">
			<table cellpadding="0" cellspacing="0" border="0" width="978">
				<tr>
					<td height="5">
					</td>
				</tr>
				<tr>
					<td height="150">
				    	<!--<img src="<?php echo $path; ?>images/1.jpg" width="978" height="150" />-->				
						<div id='slideshowHolder'>
							 <img src="<?php echo $path; ?>images/doyel.png" width="978" height="150" />
							 <img src="<?php echo $path; ?>images/academic.png" width="978" height="150" />
                             <img src="<?php echo $path; ?>images/students.png" width="978" height="150" />
						 </div>
						<script>
						$('#slideshowHolder').jqFancyTransitions({ effect: 'zipper', width: 978, height: 150, direction: 'random', delay: 10000, strips: 50 });
						</script>	
					</td>
				</tr>
				<tr>
					<td height="5">
					</td>
				</tr>	
			</table>
		</td>
	</tr>
	<tr>
		<td height="400" valign="top">
			<table width="978" cellpadding="0" cellspacing="0" border="0" align="center">
				<tr>
                	<td width="278" valign="top" align="right">
						<?php include($path."news.php"); ?>
					</td>
					<td valign="top" width="700" align="left" class="content">					
						<?php
						if(isset($_GET['news_id']))
							include($path."news_details.php");
						else
						{
							$content=content();
							$menu_name=$content['menu_name'];
							$con=$content['content'];						
							$is_gallery=$content['is_gallery'];
							if($is_gallery==0)
							{
						?>
								<span style="font-family:'Trebuchet MS', Verdana;font-size:18px;font-weight:bold;"><?php //echo $menu_name; ?></span>
						
							<?php echo $con;
							} 
							else
								include($path."gallery.php");
						}?>
					</td>
					
				</tr>
			</table>
		
		</td>
	</tr>
    <tr>
		<td height="5" align="center"></td>
    </tr>
    <tr>
		<td bgcolor="#FF0000" height="1" align="center"></td>
    </tr>
	<tr>
		<td bgcolor="#007D3F" height="60" align="center" class="footer"><?php include($path."footer.php"); ?></td>
    </tr>
</table>

</body>
</html>