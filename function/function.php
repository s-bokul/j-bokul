<?php
require_once("../cms-admin/db/dba.php");
db_connect();
$path="../templete/jatra/";
function title()
{
	$title_query=query("select `title` from `global_set` limit 1");
	$title_result=mysql_fetch_array($title_query);
	$title=$title_result['title'];
	if(empty($_GET['p_id']))
	{
		$title_query=query("select `menu_name` from `menus` order by `order` limit 1;");
		$title_raw=mysql_fetch_array($title_query);
		$menu_name=$title_raw["menu_name"];
		$title=$menu_name." :: ".$title;
	}
	else if(!empty($_GET['p_id']))
	{
		$p_id=$_GET['p_id'];
		$title_query=query("select `menu_name` from `menus` where `menu_id`='$p_id';");
		$title_raw=mysql_fetch_array($title_query);
		$menu_name=$title_raw["menu_name"];
		$title=$menu_name." :: ".$title;
	}
	if(!empty($_GET['register_bike']))
		$title="Register-Bike"." :: ".$title;
	else if(!empty($_GET['contact_us']))
		$title="Contact Us"." :: ".$title;
	else if(!empty($_GET['news_id']))
		$title="News"." :: ".$title;
	return $title;
}
function meta()
{
	$meta_query=query("select `description`, `keywords`, `copyright`, `author`, `email_m`, `Language`, `Charset` from `global_set` limit 1");
	$meta_result=mysql_fetch_array($meta_query);
	$description=$meta_result['description'];
	$keywords=$meta_result['keywords'];
	$copyright=$meta_result['copyright'];
	$author=$meta_result['author'];
	$email_m=$meta_result['email_m'];
	$Language=$meta_result['Language'];
	$Charset=$meta_result['Charset'];
	$meta="<meta name='description' content='".$description."' />
   		   <meta name='keywords' content='".$keywords."' />
    	   <meta name='copyright' content='".$copyright."' />
    	   <meta name='author' content='".$author."' />
    	   <meta name='email' content='".$email_m."' />
		   <meta name='Language' content='".$Language." '/>
    	   <meta name='Charset' content='".$Charset."' />";
	return $meta;
}
function top_menu()
{
	$top_menu_query=query("select `menu_id`, `menu_name` from `menus` order by `menu_id` asc limit 4;");
	//$top_menu_result=mysql_fetch_array($top_menu_query);
	return $top_menu_query;
}
function main_menu()
{
	
}
function content()
{
	if(!empty($_GET['p_id']))
	{
		$p_id=$_GET['p_id'];
		$content_query=query("select `menu_name`, `content`, `is_gallery` from `menus` where `menu_id`='$p_id';");
		$content_result=mysql_fetch_array($content_query);
	}
	else if(isset($_GET['sub_id']))
	{
		$p_id=$_GET['sub_id'];
		$content_query=query("select `menu_name`, `content`, `is_gallery` from `menus` where `menu_id`='$p_id';");
		$content_result=mysql_fetch_array($content_query);
	}
	else if(empty($_GET['p_id']))
	{
		$content_query=query("select `menu_name`, `content`, `is_gallery` from `menus` order by `order` limit 1;");
		$content_result=mysql_fetch_array($content_query);
	}
	return $content_result;
}
?>