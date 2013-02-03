<style type="text/css">
.nd
{
	width:100%;
	margin:5px;
	padding:5px;
}
</style>
<?php
$news_id=$_GET['news_id'];
$news_query=query("select `title`, `content` from `news` where `news_id`='$news_id';");
$news_result=mysql_fetch_array($news_query);
$news_title=$news_result['title'];
$news_content=$news_result['content'];
?>
<div style="float:left;display:block;width:690px;">
<table border="0" cellspacing="0" cellpadding="0" class="nd">
  <tr>
    <td style="font-family:solaimanLipi, 'Trebuchet MS', Verdana;font-size:16px;font-weight:bold;" width="518"><?php echo $news_title; ?></td>
  </tr>
  <tr>
    <td style="font-family:'Trebuchet MS', Verdana;font-size:12px;"><?php echo $news_content; ?></td>
  </tr>
</table>
</div>
<div style="float:right;display:block;width:220px;margin:20px;">
<table cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td>
            <span style="font-family:'Trebuchet MS', Verdana;font-size:18px;font-weight:bold;">Latest News</span>
        </td>
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
            </marquee>
        </td>
    </tr>
</table>
</div>

