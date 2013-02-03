<?php
if(!empty($_POST['button']))
{
	if($_POST['button']=='Submit')
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$msg=$_POST['msg'];
		
		$to      = 'info@lioncyclestore.com';
		$subject = 'Mail Form Contact Us Section';
		$message = $msg;
		$headers = 'From: '.$email.'' . "\r\n" .
			'Reply-To: '.$email.'' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
			
		
		$mail_check = mail($to, $subject, $message, $headers);
	
		if($mail_check)
		{
			$message = "Mail Sent Successfully.";
		}
		else
		{
			$msgs = "Mail Not Sent.";
		}
	}
}	
?>
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script type="text/javascript" src="<?php echo $path; ?>js/prettify.js"></script>                                   <!-- PRETTIFY -->
<script type="text/javascript" src="<?php echo $path; ?>js/kickstart.js"></script>                                  <!-- KICKSTART -->
<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>css/kickstart.css" media="all" /> 
<table width="978" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="left" valign="top" bgcolor="#ffffff">
       	  <div id="main-body">
                <span style="font-family:'Trebuchet MS', Verdana;font-size:18px;font-weight:bold;"><?php //echo $menu_name; ?></span>
              <div style="float:left;display:block;width:690px;padding:10px;background-color:#FFFFFF">
                <form name="form1" method="post" action="">
                  <table width="0" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="80" align="center" colspan="2">
                      	<!--<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=ABQIAAAAszh3LiNMwb_eOEk3EM6eeRQnXu8aY5GZwZmDRZgiFJbTjd-AExR3_Z0zcDtWDsAc7f9zIITCvK_gRA" type="text/javascript"></script>

						<script type="text/javascript">
                        var userLocation = "28/1 BANGSHAL ROAD, Dhaka, Bangladesh";//'Dhaka City College, Dhaka, Bangladesh';
                    
                        if (GBrowserIsCompatible()) {
                           var geocoder = new GClientGeocoder();
                           geocoder.getLocations(userLocation, function (locations) {         
                              if (locations.Placemark) {
                                 var north = locations.Placemark[0].ExtendedData.LatLonBox.north;
                                 var south = locations.Placemark[0].ExtendedData.LatLonBox.south;
                                 var east  = locations.Placemark[0].ExtendedData.LatLonBox.east;
                                 var west  = locations.Placemark[0].ExtendedData.LatLonBox.west;
                    
                                 var bounds = new GLatLngBounds(new GLatLng(south, west), 
                                                                new GLatLng(north, east));
                    
                                 var map = new GMap2(document.getElementById("map_canvas"));
                                 //map.setMapType(G_SATELLITE_MAP);
                    
                                 map.setCenter(bounds.getCenter(), map.getBoundsZoomLevel(bounds));
                                 map.addOverlay(new GMarker(bounds.getCenter()));
                              }
                           });
                        }
                         /* if (GBrowserIsCompatible()) {
                            var map = new GMap2(document.getElementById("map_canvas"));
                            //map.setMapType(G_SATELLITE_MAP);
                            map.setCenter(new GLatLng(23.43, 90.26), 9);
                            map.setUIToDefault();
                          }*/
                    
                        </script>-->
                        <!--<div id="map_canvas" style="width: 400px; height: 300px; margin:10px;"></div>-->
                        <!--<img src="<?php echo $path; ?>images/lionmap.jpg" width="582" height="375" />-->
                        <iframe width="582" height="375" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=208305839785681723532.0004c2d4f442f560a013b&amp;ie=UTF8&amp;ll=23.717794,90.406295&amp;spn=0.003251,0.005944&amp;t=m&amp;output=embed"></iframe>
                        </td>
                    </tr>
                    <tr>
                      <td height="30" align="center" colspan="2">
                      
                      	<?php
							if(!empty($msgs))
							{
								echo '<div class="notice error">';
								echo $msgs;
								echo '</div>';
							}
						?>
                      
                      
                        <?php
							if(!empty($message))
							{
								echo '<div class="notice success">';
								echo $message;
								echo '</div>';
							}
						?>                      </td>
                    </tr>
                    <tr>
                      <td height="30" align="left">Name</td>
                      <td align="left"><input name="name" type="text" id="name" size="40"></td>
                    </tr>
                    
                    <tr>
                      <td height="30" align="left">Email</td>
                      <td align="left"><input name="email" type="text" id="email" size="40"></td>
                    </tr>
                    <tr>
                      <td height="5" align="left"></td>
                      <td align="left"></td>
                    </tr>
                    <tr>
                      <td height="30" align="left" valign="top">Message</td>
                      <td align="left" valign="top"><textarea name="msg" id="msg" cols="45" rows="5"></textarea></td>
                    </tr>
                    <tr>
                      <td height="15" align="left">&nbsp;</td>
                      <td align="center">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="40" align="left">&nbsp;</td>
                      <td align="center"><input type="submit" name="button" id="button" value="Submit"></td>
                    </tr>
                    <tr>
                      <td height="50" align="left">&nbsp;</td>
                      <td align="left">&nbsp;</td>
                    </tr>
                  </table>
                </form>
              </div>
                <div style="float:right;display:block;width:220px;margin:20px;background-color:#FFFFFF">
                    <table cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td>
                                <span style="font-family:'Trebuchet MS', Verdana;font-size:18px;font-weight:bold;">Address</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                A.R.A Center 2nd Floor Shop no: S4-5, Road no: 7, Dhanmondi, 1204</td>
                      </tr>
                    </table>
                </div>
          </div>                 
            </td>
      </tr>
    </table>