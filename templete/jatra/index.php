<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title><?php echo title(); ?></title>
    <?php
        echo meta();
    ?>
    <link rel="shortcut icon" href="images/jatra-icon.png"/>
    <link href="<?php echo $path; ?>css/jatra_css.css" type="text/css" rel="stylesheet"/>
    <link href="<?php echo $path; ?>css/bootstrap.css" type="text/css" rel="stylesheet"/>
    <!-- javasript-->
    <script type="text/javascript" src="<?php echo $path; ?>js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="<?php echo $path; ?>js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#left").click(function () {
                //$("#marq").removeAttr("direction");
                $("#marq").attr("direction", "left");
                return 0;
            });

            $("#right").click(function () {
                //$("#marq").removeAttr("direction");
                $("#marq").attr("direction", "right");
                return 0;
            });

            $('.banner-tip').tooltip('toggle');
        });
    </script>

    <style type="text/css">


    </style>


</head>

<body>

<div id="container">
    <div id="page_header">
        <div id="banner"><img src="<?php echo $path; ?>images/top.png" width="1000" height="153"/></div>
        <div class="clear-both"></div>
    </div>
    <div class="clear-both"></div>
    <div id="page_body" align="center">
        <div class="nav">
        <div class="menu">

        <ul>
            <?php
                $main_menu_query = query("select `menu_id`,`menu_name` from `menus` where `parent_menu_id`='0' and `is_active`='1' order by `order` asc;");
                $count = mysql_num_rows($main_menu_query);
                $i = 0;
                while($main_menu_result = mysql_fetch_array($main_menu_query))
                {
                    echo '<li>';
                    echo '<a class="hide" href="index.php?p_id='.$main_menu_result['menu_id'].'">'.$main_menu_result['menu_name'].'</a></td>';
                    $sub_menu_query = query("select `menu_id`,`menu_name` from `menus` where `parent_menu_id`='".$main_menu_result['menu_id']."' and `is_active`='1' order by `order` asc;");
                    $count_result = mysql_num_rows($sub_menu_query);
                    if($count_result > 0) {
                        echo '<ul>';
                    }
                    while($sub_menu_result = mysql_fetch_array($sub_menu_query))
                    {
                        echo '<li><a href="index.php?p_id='.$sub_menu_result['menu_id'].'" title="'.$sub_menu_result['menu_name'].'">'.$sub_menu_result['menu_name'].'</a></li>';
                    }
                    if($count_result > 0) {
                        echo '</ul>';
                    }
                }
            ?>
        <li><a class="hide" href="../menu/index.html">DEMOS</a>

            <ul>
                <li><a href="../menu/zero_dollars.html" title="The zero dollar ads page">zero dollars</a></li>
                <li><a href="../menu/embed.html" title="Wrapping text around images">wrapping text</a></li>
                <li><a href="../menu/form.html" title="Styling forms">styled form</a></li>
                <li><a href="../menu/nodots.html" title="Removing active/focus borders">active focus</a></li>

            </ul>

        </li>

            <!--<li><a class="hide" href="index.html">MENUS</a>

                <ul>
                    <li><a href="spies.html" title="a coded list of spies">spies menu</a></li>
                    <li><a href="vertical.html" title="a horizontal vertical menu">vertical menu</a></li>
                    <li><a href="expand.html" title="an enlarging unordered list">enlarging list</a></li>
                    <li><a href="enlarge.html" title="an unordered list with link images">link images</a></li>
                    <li><a href="cross.html" title="non-rectangular links">non-rectangular</a></li>
                    <li><a href="jigsaw.html" title="jigsaw links">jigsaw links</a></li>
                    <li><a href="circles.html" title="circular links">circular links</a></li>
                </ul>

            </li>

            <li><a class="hide" href="../boxes/index.html">BOXES</a>

                <ul>
                    <li><a href="spies.html" title="a coded list of spies">spies menu</a></li>
                    <li><a href="vertical.html" title="a horizontal vertical menu">vertical menu</a></li>
                    <li><a href="expand.html" title="an enlarging unordered list">enlarging list</a></li>
                    <li><a href="enlarge.html" title="an unordered list with link images">link images</a></li>
                    <li><a href="cross.html" title="non-rectangular links">non-rectangular</a></li>
                    <li><a href="jigsaw.html" title="jigsaw links">jigsaw links</a></li>
                    <li><a href="circles.html" title="circular links">circular links</a></li>
                </ul>

            </li>-->

        </ul>

        </div>
            <!--<table cellpadding="0" cellspacing="0" border="0" width="100%" align="center">
                <tr>
                    <?php
/*                    $main_menu_query = query("select `menu_id`,`menu_name` from `menus` where `parent_menu_id`='0' and `is_active`='1' order by `order` asc;");
                    $count = mysql_num_rows($main_menu_query);
                    $i = 0;
                    while($main_menu_result = mysql_fetch_array($main_menu_query))
                    {
                        echo '<td align="center"><a href="index.php?p_id='.$main_menu_result['menu_id'].'" class="menu">'.$main_menu_result['menu_name'].'</a></td>';
                    }
                    */?>
                    <!--<td align="center"><a href="#" class="menu">asd</a></td>
                    <td align="center"><a href="#" class="menu">asd</a></td>
                    <td align="center"><a href="#" class="menu">asd</a></td>
                    <td align="center"><a href="#" class="menu">asd</a></td>
                    <td align="center"><a href="#" class="menu">asd</a></td>
                    <td align="center"><a href="#" class="menu">asd</a></td>
                </tr>
            </table>-->
        </div>
        <div class="clear-both"></div>
        <?php
        $content = content();
        $menu_name = $content['menu_name'];
        $con = $content['content'];
        $is_gallery = $content['is_gallery'];
        if($is_gallery == 1)
        {
            if(empty($_GET['photo_id']))
                include($path."gallery.php");
            else
                include($path."gallery_details.php");
        }
        if ($menu_name == "Home") {
            ?>
            <table cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <td width="20px" align="left" valign="middle"><a href="javascript:void(0)" id="left" class="arrows">
                        < </a></td>
                    <td>
                        <marquee behavior="scroll" direction="left" onmouseover="stop();" onmouseout="start();"
                                 scrollamount="2" id="marq">
                            <a class="banner-tip" href="#" data-placement="top" data-toggle="tooltip" data-original-title="Tooltip on top" title="Tooltip on top" ><img src="<?php echo $path; ?>images/model/m1.png" width="356" height="500"/></a>
                            <img src="<?php echo $path; ?>images/model/m2.png" width="361" height="500"/>
                            <img src="<?php echo $path; ?>images/model/m3.png" width="563" height="500"/>
                            <img src="<?php echo $path; ?>images/model/m4.png" width="340" height="500"/>
                            <img src="<?php echo $path; ?>images/model/m5.png" width="376" height="500"/>
                            <img src="<?php echo $path; ?>images/model/m6.png" width="373" height="500"/>
                        </marquee>
                    </td>
                    <td width="20px" align="right" valign="middle"><a href="javascript:void(0)" id="right"
                                                                      class="arrows"> > </a></td>
                </tr>
            </table>
            <?php
        }
        ?>
    </div>
    <div id="page_footer">
        <div id="footer"><img src="<?php echo $path; ?>images/down.png" width="1000" height="140"/></div>
    </div>
</div>
</body>
</html>
