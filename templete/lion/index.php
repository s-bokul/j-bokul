<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo title(); ?></title>
<?php
	echo meta();
?>
<link rel="stylesheet" href="<?php echo $path; ?>main.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo $path; ?>css/style.css" type="text/css" media="all" />
  <script type="text/javascript" src="<?php echo $path; ?>js/jquery-1.4.2.min.js" ></script>
	<script type="text/javascript" src="<?php echo $path; ?>js/roundabout.js"></script>
  <!--<script type="text/javascript" src="<?php echo $path; ?>js/roundabout_shapes.js"></script>-->
  <script type="text/javascript" src="<?php echo $path; ?>js/gallery_init.js"></script>
  <style type="text/css">
<!--
.style1 {
	color: #333333
}
-->
  </style>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center">
    <table width="978" border="0" align="center" cellpadding="0" cellspacing="0" background="<?php echo $path; ?>images/hdbg.png">
      <tr>
        <td width="130" height="130" align="left"><a href="index.php"><img src="<?php echo $path; ?>images/logo.jpg" alt="Lion Cycle Store" width="150" height="130" border="0" /></a></td>
        <td width="848" align="center" valign="middle">
        <table width="0" border="0" align="center" cellpadding="0" cellspacing="0">          
          <tr>
          	<td>
            	<table width="0" cellpadding="0" cellspacing="0" align="center" border="0">
                	<tr>
                    <?php
						$main_menu_query=query("select `menu_id`,`menu_name` from `menus` where `parent_menu_id`='0' and `is_active`='1' and `menu_id`!='PG-001' order by `order` asc;");
						$count = mysql_num_rows($main_menu_query);
						$i = 0;
						while($main_menu_result = mysql_fetch_array($main_menu_query))
						{
							echo '<td><a href="index.php?p_id='.$main_menu_result['menu_id'].'" class="menu">'.$main_menu_result['menu_name'].'</a></td>';
							++$i;
                      		if($i<$count)
								echo '<td style="color:#333333">|</td>';
					  		
						}
					?>
                    	
                      <td style="color:#333333">|</td>
                      <td><a href="index.php?register_bike=Register-Bike" class="menu">Support</a></td>
                      <td style="color:#333333">|</td>
                      <td><a href="index.php?contact_us=contact-us" class="menu">Contact Us</a></td>
                      <!--<td><a href="#" class="menu">Accessories</a></td><td style="color:#FFFFFF">|</td>
                      <td><a href="#" class="menu">Parts</a></td><td style="color:#FFFFFF">|</td>
                      <td><a href="#" class="menu">Support</a></td><td style="color:#FFFFFF">|</td>
                      <td><a href="#" class="menu">Contact Us</a></td>-->
                    </tr>
                </table>                </td>
           </tr>
           <tr>
           	<td height="1" bgcolor="#333333"></td>
           </tr>
        </table>        </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="0" bgcolor="#FFFFFF"></td>
  </tr>
  <?php
  	$content=content();
	$menu_name=$content['menu_name'];
	if($menu_name=='Home' && empty($_GET['news_id']) && empty($_GET['register_bike']) && empty($_GET['contact_us']))
	{
  ?>
  <tr>
    <td height="400" align="center">
    <table width="978" border="0" align="center" cellpadding="0" cellspacing="0" background="<?php echo $path; ?>images/gallerry-bg.gif">
      <tr>
        <td height="400">
        	<!-- #gallery -->
              <section id="gallery">
                <div class="container">
                    <ul id="myRoundabout">
                    <?php
						$banner_query=query("select `image` from `banner_image` order by `id` desc limit 5;");
						while($banner_result = mysql_fetch_array($banner_query))
						{
							echo '<li><img src="../bimages/'.$banner_result['image'].'" alt="Images" /></li>';
						}
					?>
                    <!--<li><img src="<?php echo $path; ?>bimages/s7.jpg" alt=""></li>
                    <li><img src="<?php echo $path; ?>bimages/s6.jpg" alt=""></li>
                    <li><img src="<?php echo $path; ?>bimages/s5.jpg" alt=""></li>
                    <li><img src="<?php echo $path; ?>bimages/s1.jpg" alt=""></li>
                    <li><img src="<?php echo $path; ?>bimages/s4.jpg" alt=""></li>-->
                  </ul>
                </div>
              </section>
              <!-- /#gallery -->        </td>
      </tr>
      <tr>
        <td height="40"></td>
      </tr>
    </table>    </td>
  </tr>
  
  <tr>
    <td align="center" valign="top" height="0" bgcolor="#FFFFFF"></td>
  </tr>
  <?php
  	}
  ?>
  <tr>
    <td align="center" valign="top">
    <table width="978" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="left" valign="top" bgcolor="#EDEDED">
        	<div id="main-body">
            	<?php
					if(isset($_GET['news_id']))
						include($path."news_details.php");
					else if(isset($_GET['register_bike']))
					{
						include($path."register-bike.php");
					}
					else if(isset($_GET['contact_us']))
					{
						include($path."contact-us.php");
					}
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
					
						<?php echo '<div style="float:left;display:block;width:690px;">'.$con.'</div>';?>
                        	<div style="float:right;display:block;width:220px;margin:20px;">
                                <table cellpadding="0" cellspacing="0" width="100%">
                                	<tr>
                                    	<td>
                                        	<span style="font-family:'Trebuchet MS', Verdana;font-size:18px;font-weight:bold;">Latest News</span>                                        </td>
                                    </tr>
                                    <tr>
                                    	<td>
                                        	<marquee direction="up" scrolldelay="200" onmouseover="stop()" onmouseout="start()">
                                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                <?php
                                                    $news_query=query("select `news_id`, `title` from `news` where `is_active`='0' order by `news_id` desc;");
                                                    while($news_result=mysql_fetch_array($news_query))
                                                    {
                                                        echo "<tr><td class='tdblk'><a href='index.php?news_id=".$news_result['news_id']."' class='news_title'>".$news_result['title']."</a></td></tr><tr><td height='5' bgcolor='#FFFFFF'></td></tr>";
                                                    }
                                                ?>
                                                </table>
                                            </marquee>                                        </td>
                                    </tr>
                                </table>
                            </div>
                        <?php
						
						} 
						else
						{
							if(empty($_GET['photo_id']))
								include($path."gallery.php");
							else
								include($path."gallery_details.php");
						}
					}
				?>
            </div>            </td>
      </tr>
    </table></td>
  </tr>
  
  <tr>
    <td align="center">
   	  <table width="978" border="0" cellspacing="0" cellpadding="0" background="<?php echo $path; ?>images/footerbg.png" height="100">
        <tr>
          <td>
          <table width="978" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="420">&nbsp;</td>
              <td width="287">&nbsp;</td>
              <td width="271" align="right"><table width="0" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><a href="https://www.facebook.com/LionCycle" target="_blank"><img src="<?php echo $path; ?>images/facebook1.jpg" alt="Facebook" border="0" longdesc="https://www.facebook.com/LionCycle" /></a></td>
                  </tr>
              </table></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><table width="978" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td align="left" ><span class="style1">© 1995 - 2012 Lion Cycle Corporation. All rights reserved.</span></td>
            </tr>
          </table></td>
        </tr>
      </table>    </td>
  </tr>
  <tr>
    <td align="center" height="10"></td>
  </tr>
</table>
</body>
</html>
