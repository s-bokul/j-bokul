<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns:fb="http://ogp.me/ns/fb#">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo title(); ?></title>
<?php
	echo meta();
?>
    <link type="text/css" href="<?php echo $path; ?>menu.css" rel="stylesheet" />
    <script type="text/javascript" src="<?php echo $path; ?>jquery.js"></script>
    <script type="text/javascript" src="<?php echo $path; ?>menu.js"></script>
	<script src="<?php echo $path; ?>js/jqFancyTransitions.1.8.min.js" type="text/javascript"></script>
<style type="text/css">
* { margin:0;
    padding:0;
}

#menu {
    top:8px;
    margin:0 auto;
    width:100%;
}
#copyright {
	width:80%;
	font:13px 'Trebuchet MS';
	color:#333333;
	text-indent:20px;
	margin-top: 5px;
	margin-right: auto;
	margin-bottom: 5px;
	margin-left: auto;
	padding-top: 0px;
	padding-right: 0;
	padding-bottom: 0;
	padding-left: 0;
}
#copyright a {
	color:#0033FF;
}
#copyright a:hover {
	color:#333333;
}
.head_txt
{
	font-family:solaimanLipi;
	font-size:30px;
	font-weight:bold;
	color: #333333;
}
.bdr {
	border: 1px solid #61B7CF;
}
.contant
{
	font-family: solaimanLipi;
	font-size: 14px;
	font-weight: normal;
	color: #000000;
	padding-right: 5px;
	padding-left: 5px;
}
.style1 {color: #0033FF}
</style>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center">
    <table width="978" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <td height="80" align="left">
          <table width="978" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="140"><img src="<?php echo $path; ?>images/bblogo.png" alt="Logo" border="0" align="left" /></td>
              <td align="left">
              	<img src="<?php echo $path; ?>images/banner.png" alt="Logo" border="0" align="left" />
              </td>
            </tr>
          </table></td>
      </tr>
      <tr>
        <td background="<?php echo $path; ?>images/menu.png" height="50" valign="top" align="left">
        	<div id="menu">
            	<ul class="menu">
            	<?php
					$main_menu_query=query("select `menu_id`,`menu_name` from `menus` where `parent_menu_id`='0' and `is_active`='1' order by `order` asc;");
					while($main_menu_result=mysql_fetch_array($main_menu_query))
					{
						$count=0;
						$sub_menu_query=query("select `menu_id`,`menu_name` from `menus` where `parent_menu_id`='".$main_menu_result['menu_id']."' order by `menu_id` asc;");
						$count=mysql_num_rows($sub_menu_query);
						if($count>0)
						{
							echo "<li><a href='index.php?p_id=".$main_menu_result['menu_id']."' class='parent' title='".$main_menu_result['menu_name']."'><span>".$main_menu_result['menu_name']."</span></a>";
							echo "<div><ul>";
						}
						else
							echo "<li ><a href='index.php?p_id=".$main_menu_result['menu_id']."' title='".$main_menu_result['menu_name']."'><span>".$main_menu_result['menu_name']."</span></a>";
						while($sub_menu_result=mysql_fetch_array($sub_menu_query))
						{
							echo "<li><a href='index.php?p_id=".$sub_menu_result['menu_id']."' title='".$sub_menu_result['menu_name']."' ><span>".$sub_menu_result['menu_name']."</span></a></li>";
						}
						if($count>0)
							echo "</ul></div>";
						echo "</li>";
					}
				?>
                <!--
                    <li><a href="index.html" class="parent"><span>প্রথম পাতা</span></a>
                        <div><ul>
                            <li><a href="#"><span>Sub Item 1</span></a></li>
                            <li><a href="#"><span>Sub Item 2</span></a></li>
                            <li><a href="#"><span>Sub Item 3</span></a></li>
                        </ul></div>
                    </li>
                    <li><a href="index.html" class="parent"><span>Product Info</span></a>
                        <div>
                            <ul>
                                <li><a href="#"><span>Sub Item 1.1</span></a></li>
                                <li><a href="#"><span>Sub Item 1.2</span></a></li>
                                <li><a href="#"><span>Sub Item 1.3</span></a></li>
                                <li><a href="#"><span>Sub Item 1.4</span></a></li>
                                <li><a href="#"><span>Sub Item 1.5</span></a></li>
                                <li><a href="#"><span>Sub Item 1.6</span></a></li>
                                <li><a href="#"><span>Sub Item 1.7</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#"><span>Help</span></a></li>
                    <li class="last"><a href="#"><span>Contacts</span></a></li>-->
                </ul>
            </div>        </td>
      </tr>
      <tr>
      	<td height="5">
        </td>
      </tr>
      <tr>
        <td height="200" align="left" valign="top" >
        	<table width="978" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="230" valign="top"><?php include($path."news.php"); ?></td>
                <td width="518" align="left" valign="top" class="contant">
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
						}?>                 </td>
                <td width="230" align="right" valign="top"><?php include($path."right.php"); ?></td>
              </tr>
            </table>        </td>
      </tr>
      <tr>
        <td height="5"></td>
      </tr>
      <tr>
        <td class="bdr" align="center"><div id="copyright">Copyright &copy; 2011 <a href="http://apycom.com/"></a>govbbghs.edu.bd<br>
          <a href="http://govbbghs.edu.bd:2095/" target="_blank" >Webmail</a></div></td>
      </tr>
    </table></td>
  </tr>
</table>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-27474249-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>