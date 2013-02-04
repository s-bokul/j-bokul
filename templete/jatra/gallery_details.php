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
        <td width="184" height="5"></td>
        <td width="794"></td>
      </tr>
      <tr>
        <td align="left" valign="top" bgcolor="#464646">
        <table width="184" border="0" cellspacing="0" cellpadding="0">
        	<?php
				$sub_menu_query=query("select `album_id`,`album_name` from `photo_album` where `menu_id`='".$_GET['p_id']."' order by `album_id` asc;");
				while($result_submenu = mysql_fetch_array($sub_menu_query))
				{
					echo '<tr>
							<td><a href="index.php?p_id='.$_GET['p_id'].'&album_id='.$result_submenu['album_id'].'" class="sidemenu">'.$result_submenu['album_name'].'</a></td>
						  </tr>
						  <tr>
							<td height="5"></td>
						  </tr>';
				}
			?>
        </table>
        </td>
        <td align="left" valign="top">
        <table width="790" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td></td>
            <td align="center" valign="top" bgcolor="#FFFFFF" height="5">
            </td>
          </tr>
          <tr>
            <td width="5"></td>
            <td width="785" align="center" valign="top" bgcolor="#FFFFFF">
            <table width="775" border="0" align="center" cellpadding="0" cellspacing="0">
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
                <td align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td align="center"><table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="140" align="left" valign="top"><table width="135" border="0" align="left" cellpadding="0" cellspacing="0">
                          <tr>
                            <td height="50" align="center"><span class="prenext">Previous</span></td>
                          </tr>
                          <tr>
                            <td height="180" align="center" valign="middle">
                            <?php
							
                            echo '<a href="index.php?p_id='.$_GET['p_id'].'&album_id='.$_GET['album_id'].'&photo_id='.$gallery_images_previous_result['photo_id'].'"><img src="'.$path.'/images/previous.png" alt="'.$previous_title.'" width="64" height="64" /></a>';
							?>                            
                            <br />
                            <?php
								echo $previous_title;
							?>
                            </td>
                          </tr>
                          <tr>
                            <td height="50">
                            
                            </td>
                          </tr>
                        </table></td>
                        <td width="490"><img src="../upload_big/<?php echo $pic_dir;?>" alt="<?php echo $title;?>" width="490" height="auto" /></td>
                        <td width="140" align="right" valign="top">
                        <table width="135" border="0" align="right" cellpadding="0" cellspacing="0">
                          <tr>
                            <td height="50" align="center"><span class="prenext">Next</span></td>
                          </tr>
                          <tr>
                            <td height="180" align="center" valign="middle"><?php
							
                            echo '<a href="index.php?p_id='.$_GET['p_id'].'&album_id='.$_GET['album_id'].'&photo_id='.$gallery_images_next_result['photo_id'].'"><img src="'.$path.'/images/next.png" alt="'.$next_title.'" width="64" height="64" /></a>';
							?>
                              <br />  
                              <?php
								echo $next_title;
							?>                          
                            </td>
                          </tr>
                          <tr>
                            <td height="50">
							
                            </td>
                          </tr>
                        </table></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td>
                    <table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td align="left" valign="top">&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="left" valign="top">
                        	<span style="font-family:'Trebuchet MS', Verdana;font-size:18px;font-weight:bold;"><?php echo $title; ?></span>
                        	<?php
								echo $description;
							?>                        </td>
                      </tr>
                      <tr>
                        <td align="left" valign="top">&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="left" valign="top">
                        	<?php
							if(!empty($web_url))
							{
							?>
                                <iframe src="<?php echo $web_url; ?>" frameborder="0" width="100%" height="500px">                                </iframe>
                            <?php
							}
							?>                        </td>
                      </tr>
                    </table></td>
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