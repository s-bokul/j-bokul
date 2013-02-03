<table width="978" cellpadding="0" cellspacing="0" border="0" align="center">
	<tr>
		<td height="87" align="left" valign="middle">
			<table width="100%" cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td align="left" valign="middle">
						<a href="index.php" style="text-decoration:none;"><img src="<?php echo $path; ?>images/logoa.jpg" alt="Logo" border="0" height="85" align="left" />
                        <span class="header_txt">সরকারি অগ্রগামী বালিকা উচ্চ বিদ্যালয় ও কলেজ, সিলেট</span></a>
                    </td>
                    <td width="278" align="right" valign="top">
						<table width="0px" cellpadding="0" cellspacing="0" border="0">
							<tr height="30px">
                                <td>
                                	<a href="../../" style="text-decoration:none;"><img src="<?php echo $path; ?>images/english.gif" alt="English" border="0" /></a>
                                </td>
							</tr>
					  </table>
				  </td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td>
        <ul  id="dropmenu">
			<?php
				$main_menu_query=query("select `menu_id`,`menu_name` from `menus` where `parent_menu_id`='0' and `is_active`='1' order by `order` asc;");
				while($main_menu_result=mysql_fetch_array($main_menu_query))
				{
					$count=0;
					echo "<li ><a href='index.php?p_id=".$main_menu_result['menu_id']."' title='".$main_menu_result['menu_name']."'>".$main_menu_result['menu_name']."</a>";
					$sub_menu_query=query("select `menu_id`,`menu_name` from `menus` where `parent_menu_id`='".$main_menu_result['menu_id']."' order by `menu_id` asc;");
					$count=mysql_num_rows($sub_menu_query);
					if($count>0)
						echo "<ul>";
					while($sub_menu_result=mysql_fetch_array($sub_menu_query))
					{
						echo "<li class='page_item page-item-26'><a href='index.php?p_id=".$sub_menu_result['menu_id']."' title='".$sub_menu_result['menu_name']."' >".$sub_menu_result['menu_name']."</a></li>";
					}
					if($count>0)
						echo "</ul>";
					echo "</li>";
				}
			?>
			
				<!--<li ><a href="http://www.phpinterviewquestion.com/" title="HOME">Home</a></li>
				<li class="page_item page-item-2"><a href="http://www.phpinterviewquestion.com/about" title="about">About</a>
					<ul>
						<li class="page_item page-item-26"><a href="http://www.phpinterviewquestion.com/about" title="About">About Me</a></li>
						<li class="page_item page-item-17"><a href="http://www.phpinterviewquestion.com/about" title="subpage">About Site</a>
						<ul>
			
							<li class="page_item page-item-23"><a href="http://www.phpinterviewquestion.com/jquery-dropdown-menu-plugin" title="yuiyu"> Plugin </a></li>
						</ul>
						</li>
					</ul>
			</li>
			<li class="page_item page-item-2"><a href="http://www.phpinterviewquestion.com" title="Site Content">Site Content</a>
			<ul><li class="page_item page-item-17"><a href="http://www.phpinterviewquestion.com/about" title="subpage">About Site</a>
			<ul>
				<li class="page_item page-item-26"><a href="http://www.phpinterviewquestion.com" title="PHP">PHP</a><ul><li class="page_item page-item-17"><a href="http://www.phpinterviewquestion.com/about" title="subpage">About Site</a>
			<ul>
				<li class="page_item page-item-26"><a href="http://www.phpinterviewquestion.com" title="PHP">PHP</a><ul>
				<li class="page_item page-item-26"><a href="http://www.phpinterviewquestion.com" title="PHP">PHP</a></li>
				
				
			<li class="page_item page-item-17"><a href="http://www.phpinterviewquestion.com/category/mysql" title="MySQL">MySQL</a><ul>
				<li class="page_item page-item-26"><a href="http://www.phpinterviewquestion.com" title="PHP">PHP</a></li>
				
				
			<li class="page_item page-item-17"><a href="http://www.phpinterviewquestion.com/category/mysql" title="MySQL">MySQL</a></li>
					<li class="page_item page-item-23"><a href="http://www.phpinterviewquestion.com/category/oops" title="OOPS"> OOPS </a></li>
				
			
			</ul></li>
					<li class="page_item page-item-23"><a href="http://www.phpinterviewquestion.com/category/oops" title="OOPS"> OOPS </a></li>
				
			
			</ul></li>
				
				
			<li class="page_item page-item-17"><a href="http://www.phpinterviewquestion.com/category/mysql" title="MySQL">MySQL</a></li>
					<li class="page_item page-item-23"><a href="http://www.phpinterviewquestion.com/category/oops" title="OOPS"> OOPS </a></li>
			</ul>
			</li>
			</ul></li>	
				
			<li class="page_item page-item-17"><a href="http://www.phpinterviewquestion.com/category/mysql" title="MySQL">MySQL</a></li>
			<li class="page_item page-item-23"><a href="http://www.phpinterviewquestion.com/category/oops" title="OOPS"> OOPS </a></li>	
			</ul>
			</li>
			</ul></li>-->
			</ul>

		</td>
	</tr>
</table>