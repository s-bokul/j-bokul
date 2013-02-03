<?php
$news_id=$_GET['news_id'];
$news_query=query("select `title`, `content` from `news` where `news_id`='$news_id';");
$news_result=mysql_fetch_array($news_query);
$news_title=$news_result['title'];
$news_content=$news_result['content'];
?>
<table width="100%" border="0" cellspacing="0" cellpadding="3">
  <tr>
    <td style="font-family:'Trebuchet MS', Verdana;font-size:16px;font-weight:bold;"><?php echo $news_title; ?></td>
  </tr>
  <tr>
    <td style="font-family:'Trebuchet MS', Verdana;font-size:12px;"><?php echo $news_content; ?></td>
  </tr>
</table>
