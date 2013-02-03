<style type="text/css">
#minipics
{
	width:510px;
}
div#minipics ul{list-style-type: none;margin:0 15px;padding:0}
div#minipics li{
	float:left;
	width:205px;
	margin-top: 10px;
	margin-right: 15px;
	margin-bottom: 10px;
	margin-left: 0;
	background-color: #92CDDE;
}
div#minipics li img{display: block;width: 80px;height: 80px;margin:5px 10px;border: 0px}
</style>
<link rel="stylesheet" type="text/css" href="../cms-admin/css/niftyCorners.css">
<script type="text/javascript" src="../cms-admin/js/nifty.js"></script>
<script type="text/javascript">
window.onload=function(){
if(!NiftyCheck())
    return;
Rounded("div#minipics li","#FFFFFF","#92CDDE");
}
</script>

<script type="text/javascript" src="<?php echo $path; ?>js/jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>css/jquery.lightbox-0.5.css" media="screen" />
<script type="text/javascript">
$(function() {
	$('#gallery a').lightBox();
});
</script>
<table width="518" cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td align="center">
			<?php
				$a_id=$_GET['a_id'];
				if(empty($_GET['a_id']))
				{
			?>
					<div id="minipics">
						<ul>
							<?php
								$p_id=$_GET['p_id'];
								$album_query=query("select `album_id`, `album_name`, `status` from `photo_album` where `status`='0' order by `album_id` asc;");
								$i=0;
								while($result_album=mysql_fetch_array($album_query))
								{
									if($result_album['status']==0)
										$status="Active";
									else
										$status="Inactive";
									echo "<li>অ্যালবামের নাম : ".$result_album['album_name']."<a href='index.php?p_id=".$p_id."&a_id=".$result_album['album_id']."'><img src='../cms-admin/images/album_ico.png' alt='Album $i' border='0'>ছবি সমূহ</a><br /></li>";	
									 ++$i;									
								}
							?>
						</ul>
					</div>
			<?php
				}
				else
				{
			?>
					<div id="minipics">
                    	<div id="gallery">
							<ul>
								<?php
									$photo_query=query("select `photo_id`, `title`, `description`, `pic_dir` from `photos` where `album_id`='".$_GET['a_id']."' order by `photo_id` asc;");
									$i=0;
									while($result_photo=mysql_fetch_array($photo_query))
									{
										echo "<li><strong>Title : </strong>".$result_photo['title']."<a href='../upload_big/".$result_photo['pic_dir']."' title='".$result_photo['title']."'><img src='../upload_small/".$result_photo['pic_dir']."' alt='Album $i'></a><br /></li>";	
										 ++$i;									
									}
								?>
							</ul>
                           </div>
						</div>	
						<?php 
							if($i==0)
								echo "There is no photo in this album"; 
						?>
			<?php
				}
			?>
		</td>
	</tr>
</table>