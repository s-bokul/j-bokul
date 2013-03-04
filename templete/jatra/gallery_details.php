<link href="<?php echo $path; ?>css/dcaccordion.css" rel="stylesheet" type="text/css" />
<script type='text/javascript' src='<?php echo $path; ?>js/jquery.cookie.js'></script>
<script type='text/javascript' src='<?php echo $path; ?>js/jquery.hoverIntent.minified.js'></script>
<script type='text/javascript' src='<?php echo $path; ?>js/jquery.dcjqaccordion.2.7.min.js'></script>
<script type="text/javascript">
    $(document).ready(function($){
        $('#accordion-6').dcAccordion({
            eventType: 'click',
            autoClose: false,
            saveState: true,
            disableLink: false,
            showCount: false,
            menuClose: false,
            speed: 'slow'
        });
    });
</script>
<link href="<?php echo $path; ?>css/skins/blue.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.prenext {
	color: #CCCCCC;
	font-size: 24px;
}
-->
</style>
<table width="978" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="left" valign="top">
    <table width="978" border="0" cellspacing="0" cellpadding="0">
      <tr>
          <td width="220" height="5"></td>
          <td width="10" height="5"></td>
          <td width="748"></td>
        <!--<td width="184" height="5"></td>
        <td width="794"></td>-->
      </tr>
      <tr>
        <td align="left" valign="top" style="background-color: rgba(255, 255, 255, 0.4);">
            <div class="blue demo-container">
                <ul class="accordion" id="accordion-6">
                    <?php
                    $p_id = $_GET['p_id'];

                    $p_id_query = query("select `parent_menu_id` from `menus` where `menu_id`='".$p_id."' and `parent_menu_id` != '0';");
                    if(mysql_num_rows($p_id_query) > 0) {
                        $p_id_result = mysql_fetch_array($p_id_query);
                        $p_id = $p_id_result['parent_menu_id'];
                    }

                    $sub_menu_query = query("select `menu_id`,`menu_name` from `menus` where `parent_menu_id`='".$_GET['p_id']."' and `is_active`='1' order by `order` asc;");
                    //$sub_menu_query = query("select `album_id`,`album_name` from `photo_album` where `menu_id`='".$_GET['p_id']."' order by `album_id` asc;");
                    while($result_submenu = mysql_fetch_array($sub_menu_query))
                    {
                        echo '<li>';
                        //echo '<a href="index.php?p_id='.$result_submenu['menu_id'].'" class="sidemenu">'.$result_submenu['menu_name'].'</a>';
                        echo '<a href="javascript:void(0)">'.$result_submenu['menu_name'].'</a>';
                        //echo "select `album_id`,`album_name` from `photo_album` where `menu_id`='".$result_submenu['menu_id']."' order by `album_id` asc;";
                        $sub_album_menu_query = query("select `album_id`,`album_name` from `photo_album` where `menu_id`='".$result_submenu['menu_id']."' order by `album_id` asc;");
                        while($result_album_submenu = mysql_fetch_array($sub_album_menu_query))
                        {
                            echo '<ul>';
                            echo '<li><a href="index.php?p_id='.$_GET['p_id'].'&sub_id='.$result_submenu['menu_id'].'&album_id='.$result_album_submenu['album_id'].'">'.$result_album_submenu["album_name"].'</a></li>';
                            echo '</ul>';
                        }
                        echo '</li>';
                    }
                    ?>
                </ul>
            </div>
        </td>
        <td width="10" style="background-color: rgba(255, 255, 255, 0);"></td>
        <td align="left" valign="top" style="background-color: rgba(255, 255, 255, 0.4);">
        <table width="740" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td></td>
            <td align="center" valign="top" height="5">
            </td>
          </tr>
          <tr>
            <td width="5"></td>
            <td width="735" align="center" valign="top">
            <table width="725" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td align="center" valign="top">
                    <div id="gallerys" align="center" style="height:auto;">
                    	<?php
							$gallery_images_query=query("select `photo_id`, `title`, `description`, `pic_dir`, `web_url` from `photos` where photos.photo_id='".$_GET['photo_id']."'");

							
							$count = mysql_num_rows($gallery_images_query);
							$gallery_images_result=mysql_fetch_array($gallery_images_query);
							$pic_dir=$gallery_images_result['pic_dir'];
							$title=$gallery_images_result['title'];
							$description=$gallery_images_result['description'];
							$web_url=$gallery_images_result['web_url'];
							if($count==0)
							{
								echo '<div style="height:200px;">There are nothing to see in this gallery</div>';
							}
							
							$gallery_images_previous_query=query("select `photo_id`, `title`, `description`, `pic_dir`, `web_url` from `photos` where photos.photo_id < '".$_GET['photo_id']."' and `album_id`='".$_GET['album_id']."' ORDER BY photo_id DESC LIMIT 1");
							
							$gallery_images_previous_result=mysql_fetch_array($gallery_images_previous_query);
							$previous_pic_dir=$gallery_images_previous_result['pic_dir'];
							$previous_title=$gallery_images_previous_result['title'];
							$previous_photo_id=$gallery_images_previous_result['photo_id'];
							
							$gallery_images_next_query=query("select `photo_id`, `title`, `description`, `pic_dir`, `web_url` from `photos` where photos.photo_id > '".$_GET['photo_id']."' and `album_id`='".$_GET['album_id']."' ORDER BY photo_id ASC LIMIT 1");
							
							$gallery_images_next_result=mysql_fetch_array($gallery_images_next_query);
							$next_pic_dir=$gallery_images_next_result['pic_dir'];
							$next_title=$gallery_images_next_result['title'];
							$next_photo_id=$gallery_images_next_result['photo_id'];
						?>
                    </div>                
                </td>
              </tr>
              <tr>
                <td align="center" valign="top">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td align="center">
                                <table width="720" border="0" align="center" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td align="center">
                                            <ul class="thumbnails">
                                                <li class="span4">
                                                    <a href="../upload_big/<?php echo $pic_dir;?>" rel="example1" title="<?php echo $title;?>" class="thumbnail"><img src="../upload_big/<?php echo $pic_dir;?>" alt="<?php echo $title;?>" style="width: 490px; height: 270px;" /></a>
                                                </li>
                                                <li class="span3" style="text-align:left;">
                                                    <span style="font-family:'Trebuchet MS', Verdana;font-size:18px;font-weight:bold;"><?php echo $title; ?></span>
                                                    <?php
                                                        echo $description;
                                                    ?>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table width="720" border="0" align="center" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td align="left" valign="top">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="top">
                                            <span style="font-weight: bold;">Related Products</span>
                                            <marquee>
                                            <?php
                                            $gallery_images_query = query("select `photo_id`, `title`, `pic_dir` from `photos` where photos.album_id='" . $_GET['album_id'] . "'");
                                            while ($gallery_images_result = mysql_fetch_array($gallery_images_query))
                                            {
                                                if (empty($_GET['album_id']))
                                                    $album_id = $gallery_images_result['album_id'];
                                                echo '<div class="thumbnail">
											            <a href="index.php?p_id=' . $_GET['p_id'] . '&album_id=' . $album_id . '&photo_id=' . $gallery_images_result['photo_id'] . '"><img src="../upload_small/' . $gallery_images_result['pic_dir'] . '" style="width: 100px; height: auto;" alt="' . $gallery_images_result['title'] . '" /></a>
											            <h5>' . $gallery_images_result['title'] . '</h5>
											          </div>';
                                            }
                                            ?>
                                            </marquee>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="top">&nbsp;</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table></td>
              </tr>
              <tr>
                <td align="center" height="10">
                </td>
              </tr>
            </table>                
            </td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="5"></td>
  </tr>
</table>