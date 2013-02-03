<style type="text/css">
.nd
{
	width:510px;
}
</style>
<?php
$news_id=$_GET['news_id'];
$news_query=query("select `title`, `content` from `news` where `news_id`='$news_id';");
$news_result=mysql_fetch_array($news_query);
$news_title=$news_result['title'];
$news_content=$news_result['content'];
?>
<table width="518" border="0" cellspacing="0" cellpadding="0" class="nd">
  <tr>
    <td style="font-family:solaimanLipi, 'Trebuchet MS', Verdana;font-size:16px;font-weight:bold;" width="518"><?php echo $news_title; ?></td>
  </tr>
  <tr>
    <td style="font-family:'Trebuchet MS', Verdana;font-size:12px;"><?php echo $news_content; ?></td>
  </tr>
</table>
