<?php
include("log/login.php");
if (!success())
    header("location: login.php");
require_once("db/dba.php");
db_connect();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>CMS Login</title>

    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <style type="text/css">
        <!--
        body, td, th {
            font-family: Verdana, Arial, Helvetica, sans-serif;
            font-size: 12px;
        }

        body {
            margin-left: 0px;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
        }

        a {
            color: #0099FF;
            text-decoration: none;
        }

        a:hover {
            color: #333333;
        }

        #minipics {
            width: 900px;
        }

        div#minipics ul {
            list-style-type: none;
            margin: 0 15px;
            padding: 0
        }

        div#minipics li {
            float: left;
            width: 200px;
            background-color: #FFF;
            margin-top: 10px;
            margin-right: 10px;
            margin-bottom: 10px;
            margin-left: 0;
        }

        div#minipics li img {
            display: block;
            width: 80px;
            height: 80px;
            margin: 5px 10px;
            border: 0px
        }

        -->
    </style>
    <link rel="stylesheet" type="text/css" href="css/niftyCorners.css">
    <script type="text/javascript" src="js/nifty.js"></script>
    <script type="text/javascript">
        window.onload = function () {
            if (!NiftyCheck())
                return;
            Rounded("div#minipics li", "#EEEEEE", "#FFF");
        }
    </script>
</head>

<body>
<div align="center">
    <?php include("header.php"); ?>
    <div id="page_body" align="left">
        <table width="978" border="0" cellspacing="0" cellpadding="0">

            <tr>
                <td>
                    <table width="978" border="0" cellspacing="0" cellpadding="0">

                        <tr>
                            <td height="30" align="left">
                                <a href="add_photo.php?id=<?php echo $_GET['id']; ?>">
                                    <img src="images/photo_add_btn.png" alt="Add New Photo" width="150" height="42"
                                         border="0"/>
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <td height="30" align="center">
                                <strong>
                                    <?php
                                    if (isset($_GET['msg']))
                                        echo base64_decode($_GET['msg']);
                                    ?>
                                    <span style="color:#FF3E3E">
						<?php
                                        if (isset($_GET['msg2']))
                                            echo base64_decode($_GET['msg2']);
                                        ?>
					</span> </strong></td>
                        </tr>
                        <tr>
                            <td height="25"><strong>Photos</strong></td>
                        </tr>
                        <tr>
                            <td>
                                <table width="978" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td height="200" align="center" valign="middle" bgcolor="#EEEEEE">
                                            <div id="minipics">
                                                <ul>
                                                    <?php
                                                    $photo_query = query("select `photo_id`, `title`, `description`, `pic_dir` from `photos` where `album_id`='" . $_GET['id'] . "' order by `photo_id` asc;");
                                                    $i = 0;
                                                    while ($result_photo = mysql_fetch_array($photo_query)) {
                                                        echo "<li><strong>Title : </strong>" . $result_photo['title'] . "<img src='../upload_small/" . $result_photo['pic_dir'] . "' alt='Album $i'><br /><a href='del_photo.php?id=" . $result_photo['photo_id'] . "&dir=" . $result_photo['pic_dir'] . "&al_id=" . $_GET['id'] . "'>Delete Photo</a></li>";
                                                        ++$i;
                                                    }
                                                    ?>
                                                </ul>
                                            </div>
                                            <?php
                                            if ($i == 0)
                                                echo "There is no photo in this album";
                                            ?>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
    <?php include("footer.dat"); ?>
</div>
</body>
</html>
