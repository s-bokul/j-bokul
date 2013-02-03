<style type="text/css">
<!--
.style1 {
	font-family: "Trebuchet MS", Verdana;
	font-weight: bold;
}
.news_title
{
	font-family:"Trebuchet MS", Verdana;
	font-size:14px;
	color:#000000;
}
-->
</style>
<table cellpadding="0" cellspacing="0" border="0" width="100%">
	<tr align="left">
		<td>
		<table border="0" cellpadding="3" cellspacing="0" class="news">
		  <tr>
			<td height="30" align="center" valign="middle" bgcolor="#8BBD3F"><span class="style1">Latest News </span></td>
		  </tr>
		  <tr>
			<td valign="top">
			<marquee direction="up" scrolldelay="200" onmouseover="stop()" onmouseout="start()">
				<table cellpadding="0" cellspacing="0" border="0" width="100%">
				<?php
					$news_query=query("select `news_id`, `title` from `news` where `is_active`='0' order by `news_id` desc;");
					while($news_result=mysql_fetch_array($news_query))
					{
						echo "<tr><td><a href='index.php?news_id=".$news_result['news_id']."' class='news_title'>".$news_result['title']."</a></td></tr>";
					}
				?>
				</table>
			</marquee>			</td>
		  </tr>
		</table>		</td>
	</tr>
	<tr height="5px">
		<td>		</td>
	</tr>
	<tr align="left">
	  <td>
      	<table border="0" cellpadding="3" cellspacing="0" class="news">
			  <tr>
				<td height="30" align="center" valign="middle" bgcolor="#8BBD3F"><span class="style1">Notice Board</span></td>
			  </tr>
			  <tr>
				<td valign="top">
				
					<table cellpadding="0" cellspacing="0" border="0" width="100%">
					<?php
						$data_query=query("select `rp_id`, `title`, `file` from `data_report` order by `rp_id` desc limit 10;");
						while($data_result=mysql_fetch_array($data_query))
						{
							echo "<tr><td><a href='../data/".$data_result['file']."' class='news_title'>".$data_result['title']."</a></td></tr>";
						}
					?>
					</table>				</td>
			  </tr>
			</table>      </td>
  </tr>
  <tr height="5px">
		<td>		</td>
	</tr>
	<tr align="left">
		<td>
			
			<table border="0" cellpadding="3" cellspacing="0" class="news">
			  <tr>
				<td height="30" align="center" valign="middle" bgcolor="#8BBD3F"><span class="style1">Hit Counter</span></td>
			  </tr>
			  <tr>
				<td valign="top">
				
					<table cellpadding="0" cellspacing="0" border="0" width="100%">
						<tr>
							<td align="center">					
								Visited : 
								<?php
									$filename= "counter.txt" ;
									$fd = fopen ($filename , "r") or die ("Can't open $filename") ;
									$fstring = fread ($fd , filesize ($filename)) ;
									echo "$fstring" ;
									fclose($fd) ;
			
									if(empty($_GET["p_id"]) && empty($_GET["news_id"]))
									{
										$fd = fopen ($filename , "w") or die ("Can't open $filename") ;
										$fcounted = $fstring + 1 ;
										$fout= fwrite ($fd , $fcounted ) ;
										fclose($fd) ;
									}
								?> Times							</td>
						</tr>
					</table>				</td>
			  </tr>
			</table>	  </td>
	</tr>
	<tr>
		<td height="5px">		</td>
	</tr>
	<tr align="left">
	  <td>

      </td>
  </tr>
</table>
