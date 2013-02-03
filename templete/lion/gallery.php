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
                <td align="left" valign="top">
                	<?php
					if(empty($_GET['album_id']))
						echo '<div style="float:left;display:block;width:690px;">'.$con.'</div>';
					else
					{
						$album_query = query("SELECT `description` FROM `photo_album` where `album_id`='".$_GET['album_id']."';");
						$album_result = mysql_fetch_array($album_query);
						$description = $album_result['description'];
						echo '<div style="float:left;display:block;width:690px;">'.$description.'</div>';
					}
					?>
                </td>
              </tr>
              <tr>
                <td align="center" valign="top" height="300px">
                    <div id="gallerys" align="center" style="height:auto;">
                    	<?php
							if(empty($_GET['album_id']))
							{
								$gallery_images_query=query("select `photo_id`, `photos`.`album_id` as album_id, `title`, `pic_dir` from `photos`, `photo_album` where photo_album.menu_id='".$_GET['p_id']."' and photo_album.album_id=photos.album_id order by photo_id desc limit 0;");
							}
							else
							{
								$gallery_images_query=query("select `photo_id`, `title`, `pic_dir` from `photos` where photos.album_id='".$_GET['album_id']."'");
							$album_id=$_GET['album_id'];
							}
							
							$count = mysql_num_rows($gallery_images_query);
							if($count>0)
							{
								while($gallery_images_result=mysql_fetch_array($gallery_images_query))
								{
									if(empty($_GET['album_id']))
										$album_id=$gallery_images_result['album_id'];
									echo '<li>
											<a href="index.php?p_id='.$_GET['p_id'].'&album_id='.$album_id.'&photo_id='.$gallery_images_result['photo_id'].'"><img src="../upload_small/'.$gallery_images_result['pic_dir'].'" alt="'.$gallery_images_result['title'].'" /></a>
								<a href="index.php?p_id='.$_GET['p_id'].'&album_id='.$album_id.'&photo_id='.$gallery_images_result['photo_id'].'">'.$gallery_images_result['title'].'</a>
							</li>';
								}
							}
							else
							{
								if(!empty($_GET['album_id']))
									echo '<br /><br /><div style="height:200px;">There are nothing to see in this gallery</div>';
							}
						?>
                    </div>                </td>
              </tr>
              <tr>
                <td align="center" height="10">                </td>
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