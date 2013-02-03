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
    <!-- javasript-->
    <script type="text/javascript" src="<?php echo $path; ?>js/jquery-1.7.1.min.js"></script>
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
        });
    </script>


</head>

<body>

<div id="container">
    <div id="page_header">
        <div id="banner"><img src="<?php echo $path; ?>images/Top.png" width="1000" height="153"/></div>
        <div class="clear-both"></div>
    </div>
    <div class="clear-both"></div>
    <div id="page_body" align="center">
        <div class="nav">
            <table cellpadding="0" cellspacing="0" border="0" width="100%" align="center">
                <tr>
                    <?php
                    $main_menu_query=query("select `menu_id`,`menu_name` from `menus` where `parent_menu_id`='0' and `is_active`='1' and `menu_id`!='PG-001' order by `order` asc;");
                    $count = mysql_num_rows($main_menu_query);
                    $i = 0;
                    while($main_menu_result = mysql_fetch_array($main_menu_query))
                    {
                        echo '<td align="center"><a href="index.php?p_id='.$main_menu_result['menu_id'].'" class="menu">'.$main_menu_result['menu_name'].'</a></td>';
                    }
                    ?>
                    <!--<td align="center"><a href="#" class="menu">asd</a></td>
                    <td align="center"><a href="#" class="menu">asd</a></td>
                    <td align="center"><a href="#" class="menu">asd</a></td>
                    <td align="center"><a href="#" class="menu">asd</a></td>
                    <td align="center"><a href="#" class="menu">asd</a></td>
                    <td align="center"><a href="#" class="menu">asd</a></td>-->
                </tr>
            </table>
        </div>
        <div class="clear-both"></div>
        <table cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td width="20px" align="left" valign="middle"><a href="javascript:void(0)" id="left" class="arrows"> < </a></td>
                <td>
                    <marquee behavior="scroll" direction="left" onmouseover="stop();" onmouseout="start();"
                             scrollamount="2" id="marq">
                        <img src="<?php echo $path; ?>images/model/m1.png" width="356" height="500"/>
                        <img src="<?php echo $path; ?>images/model/m2.png" width="361" height="500"/>
                        <img src="<?php echo $path; ?>images/model/m3.png" width="563" height="500"/>
                        <img src="<?php echo $path; ?>images/model/m4.png" width="340" height="500"/>
                        <img src="<?php echo $path; ?>images/model/m5.png" width="376" height="500"/>
                        <img src="<?php echo $path; ?>images/model/m6.png" width="373" height="500"/>
                        <img src="<?php echo $path; ?>images/model/m7.png" width="375" height="500"/>
                        <img src="<?php echo $path; ?>images/model/m8.png" width="379" height="500"/>
                        <img src="<?php echo $path; ?>images/model/m9.png" width="383" height="500"/>
                        <img src="<?php echo $path; ?>images/model/m10.png" width="381" height="500"/>
                        <img src="<?php echo $path; ?>images/products/p1.png" width="750" height="500"/>
                        <img src="<?php echo $path; ?>images/products/p2.png" width="750" height="500"/>
                        <img src="<?php echo $path; ?>images/products/p3.png" width="667" height="500"/>
                        <img src="<?php echo $path; ?>images/products/p4.png" width="736" height="500"/>
                        <img src="<?php echo $path; ?>images/products/p5.png" width="708" height="500"/>
                        <img src="<?php echo $path; ?>images/products/p11.png" width="336" height="500"/>
                        <img src="<?php echo $path; ?>images/products/p7.png" width="376" height="500"/>
                        <img src="<?php echo $path; ?>images/products/p8.png" width="500" height="500"/>
                        <img src="<?php echo $path; ?>images/products/p9.png" width="557" height="500"/>
                        <img src="<?php echo $path; ?>images/products/p10.png" width="318" height="500"/>
                        <img src="<?php echo $path; ?>images/model/m11.png" width="386" height="500"/>
                        <img src="<?php echo $path; ?>images/model/m12.png" width="386" height="500"/>
                        <img src="<?php echo $path; ?>images/model/m13.png" width="373" height="500"/>
                        <img src="<?php echo $path; ?>images/model/m14.png" width="375" height="500"/>
                        <img src="<?php echo $path; ?>images/model/m15.png" width="372" height="500"/>
                        <img src="<?php echo $path; ?>images/model/m16.png" width="371" height="500"/>
                        <img src="<?php echo $path; ?>images/model/m17.png" width="699" height="500"/>
                        <img src="<?php echo $path; ?>images/model/m18.png" width="372" height="500"/>
                        <img src="<?php echo $path; ?>images/model/m19.png" width="371" height="500"/>
                        <img src="<?php echo $path; ?>images/model/m20.png" width="370" height="500"/>
                        <img src="<?php echo $path; ?>images/products/p11.png" width="336" height="500"/>
                        <img src="<?php echo $path; ?>images/products/p12.png" width="752" height="500"/>
                        <img src="<?php echo $path; ?>images/products/p13.png" width="752" height="500"/>
                        <img src="<?php echo $path; ?>images/products/p14.png" width="622" height="500"/>
                        <img src="<?php echo $path; ?>images/products/p15.png" width="301" height="500"/>
                        <img src="<?php echo $path; ?>images/products/p16.png" width="334" height="500"/>
                        <img src="<?php echo $path; ?>images/products/p17.png" width="374" height="500"/>
                        <img src="<?php echo $path; ?>images/products/p18.png" width="663" height="500"/>
                        <img src="<?php echo $path; ?>images/products/p19.png" width="736" height="500"/>
                        <img src="<?php echo $path; ?>images/products/p20.png" width="302" height="500"/>
                    </marquee>
                </td>
                <td width="20px" align="right" valign="middle"><a href="javascript:void(0)" id="right" class="arrows"> > </a></td>
            </tr>
        </table>

    </div>
    <div id="page_footer">
        <div id="footer"><img src="<?php echo $path; ?>images/Down.png" width="1000" height="140"/></div>
    </div>
</div>
</body>
</html>
