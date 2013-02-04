<link href="<?php echo $path; ?>css/dcaccordion.css" rel="stylesheet" type="text/css" />
<script type='text/javascript' src='<?php echo $path; ?>js/jquery.cookie.js'></script>
<script type='text/javascript' src='<?php echo $path; ?>js/jquery.hoverIntent.minified.js'></script>
<script type='text/javascript' src='<?php echo $path; ?>js/jquery.dcjqaccordion.2.7.min.js'></script>
<script type="text/javascript">
    $(document).ready(function($){
        $('#accordion-6').dcAccordion({
            eventType: 'hover',
            autoClose: false,
            saveState: false,
            disableLink: false,
            showCount: false,
            menuClose: true,
            speed: 'slow'
        });
    });
</script>
<link href="<?php echo $path; ?>css/skins/blue.css" rel="stylesheet" type="text/css" />
<table width="978" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="left" valign="top">
    <table width="978" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="184" height="5"></td>
        <td width="794"></td>
      </tr>
      <tr>
        <td align="left" valign="top" style="background-color: rgba(255, 255, 255, 0.4);">
            <div class="blue demo-container">
                <ul class="accordion" id="accordion-6">
                    <?php
                    $sub_menu_query = query("select `album_id`,`album_name` from `photo_album` where `menu_id`='".$_GET['p_id']."' order by `album_id` asc;");
                    while($result_submenu = mysql_fetch_array($sub_menu_query))
                    {
                        echo '<li><a href="index.php?p_id='.$_GET['p_id'].'&album_id='.$result_submenu['album_id'].'" class="sidemenu">'.$result_submenu['album_name'].'</a></li>';
                    }
                    ?>
                    <li><a href="#">Home</a>
                        <ul>
                            <li><a href="#">Page 1</a></li>
                            <li><a href="#">Page 2</a></li>
                            <li><a href="#">Page 3</a></li>
                            <li><a href="#">Page 4</a></li>

                        </ul>
                    </li>
                    <li><a href="#">Products</a>
                        <ul>
                            <li><a href="#">Mobile Phones &#038; Accessories</a>
                                <ul>
                                    <li><a href="#">Product 1</a>
                                        <ul>
                                            <li><a href="#">Part A</a>

                                            </li>
                                            <li><a href="#">Part B</a></li>
                                            <li><a href="#">Part C</a></li>
                                            <li><a href="#">Part D</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Product 2</a>
                                        <ul>
                                            <li><a href="#">Part A</a></li>
                                            <li><a href="#">Part B</a></li>
                                            <li><a href="#">Part C</a></li>
                                            <li><a href="#">Part D</a></li>
                                        </ul>

                                    </li>
                                    <li><a href="#">Product 3</a>
                                        <ul>
                                            <li><a href="#">Part A</a></li>
                                            <li><a href="#">Part B</a></li>
                                            <li><a href="#">Part C</a></li>
                                            <li><a href="#">Part D</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Desktop</a>
                                <ul>
                                    <li><a href="#">Product 4</a></li>
                                    <li><a href="#">Product 5</a></li>
                                    <li><a href="#">Product 6</a></li>
                                    <li><a href="#">Product 7</a></li>
                                    <li><a href="#">Product 8</a></li>
                                    <li><a href="#">Product 9</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Laptop</a>
                                <ul>
                                    <li><a href="#">Product 10</a></li>
                                    <li><a href="#">Product 11</a>
                                        <ul>
                                            <li><a href="#">Part E</a></li>
                                            <li><a href="#">Part F</a></li>
                                            <li><a href="#">Part G</a></li>
                                            <li><a href="#">Part H</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Product 12</a></li>
                                    <li><a href="#">Product 13</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Accessories</a>
                                <ul>
                                    <li><a href="#">Product 14</a></li>
                                    <li><a href="#">Product 15</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Software</a>
                                <ul>
                                    <li><a href="#">Product 16</a></li>
                                    <li><a href="#">Product 17</a></li>
                                    <li><a href="#">Product 18</a></li>
                                    <li><a href="#">Product 19</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">About Us</a>
                        <ul>
                            <li><a href="#">About Page 1</a></li>
                            <li><a href="#">About Page 2</a></li>

                        </ul>
                    </li>
                    <li><a href="#">Services</a>
                        <ul>
                            <li><a href="#">Service 1</a>
                                <ul>
                                    <li><a href="#">Service Detail A</a></li>
                                    <li><a href="#">Service Detail B</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Service 2</a>
                                <ul>
                                    <li><a href="#">Service Detail C</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Service 3</a>
                                <ul>
                                    <li><a href="#">Service Detail D</a></li>
                                    <li><a href="#">Service Detail E</a></li>
                                    <li><a href="#">Service Detail F</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Service 4</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Contact us</a></li>
                </ul>
            </div>
        <table width="184" border="0" cellspacing="0" cellpadding="0">
        	<?php
				$sub_menu_query = query("select `album_id`,`album_name` from `photo_album` where `menu_id`='".$_GET['p_id']."' order by `album_id` asc;");
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
        <td align="left" valign="top" style="background-color: rgba(255, 255, 255, 0.4);">
        <table width="790" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td></td>
            <td align="center" valign="top" height="5">
            </td>
          </tr>
          <tr>
            <td width="5"></td>
            <td width="785" align="center" valign="top">
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