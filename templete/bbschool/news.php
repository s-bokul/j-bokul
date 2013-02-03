<style type="text/css">
<!--
.style1 {
	font-family: "Trebuchet MS", Verdana;
	font-weight: bold;
}
.news
{
	font-family: solaimanLipi, "Trebuchet MS", Verdana;
	font-size:13px;
	width: 95%;
	border: 1px solid #61B7CF;
	padding: 5px;
}
.news_title
{
	font-family:solaimanLipi, "Trebuchet MS", Verdana;
	font-size:14px;
	color:#000000;
}
-->
</style>
<style type="text/css">


/* Add some margin to the page and set a default font and colour */


/* Set the content dimensions */

#content {
  width: 100%;
  padding: 2px;
  margin: 0 auto;
  display: block;
  font-size: 16px;
}

#content h2 {
  line-height: 1.5em;
}


/* Add curved borders to various elements */

#contactForm, .statusMessage, input[type="submit"], input[type="button"] {
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;  
  border-radius: 10px;
}


/* Style for the contact form and status messages */

#contactForm, .statusMessage {
  color: #666;
  background-color: #ebedf2;
  background: -webkit-gradient( linear, left bottom, left top, color-stop(0,#dfe1e5), color-stop(1, #ebedf2) );
  background: -moz-linear-gradient( center bottom, #dfe1e5 0%, #ebedf2 100% );  
  border: 1px solid #aaa;
  -moz-box-shadow: 0 0 1em rgba(0, 0, 0, .5);
  -webkit-box-shadow: 0 0 1em rgba(0, 0, 0, .5);
  box-shadow: 0 0 1em rgba(0, 0, 0, .5);
  opacity: .95;
}


/* The form dimensions */

#contactForm {
  width: 40em;
  height: 33em;
  padding: 0 1.5em 1.5em 1.5em;
  margin: 0 auto;
}


/* Position the form in the middle of the window (if JavaScript is enabled) */

#contactForm.positioned {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin-top: auto;
  margin-bottom: auto;
}


/* Dimensions and position of the status messages */

.statusMessage {
  display: none;
  margin: auto;
  width: 30em;
  height: 2em;
  padding: 1.5em;
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}

.statusMessage p {
  text-align: center;
  margin: 0;
  padding: 0;
}


/* The header at the top of the form */

#contactForm h2 {
	font-size: 2em;
	font-style: italic;
	letter-spacing: .05em;
	margin: 0 0 1em -.75em;
	padding: 1em;
	width: 19.5em;
	color: #aeb6aa; /* http://morguefile.com/archive/display/606433 */
	border-bottom: 1px solid #aaa;
	-moz-border-radius: 10px 10px 0 0;
	-webkit-border-radius: 10px 10px 0 0;
	border-radius: 10px 10px 0 0;
	background-color: #dfe0e5;
	background-repeat: no-repeat;
	background-position: 15em -3em;
}


/* Give form elements consistent margin, padding and line height */

#contactForm ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

#contactForm ul li {
  margin: .9em 0 0 0;
  padding: 0;
}

#contactForm input, #contactForm label {
  line-height: 1em;
}


/* The field labels */

label {
  display: block;
  float: left;
  clear: left;
  text-align: right;
  width: 28%;
  padding: .4em 0 0 0;
  margin: .15em .5em 0 0;
  font-weight: bold;
}


/* The fields */

input, textarea {
  display: block;
  margin: 0;
  padding: .4em;
  width: 67%;
  font-family: "Georgia", serif;
  font-size: 1em;
  border: 1px solid #aaa;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;    
  border-radius: 5px;
  -moz-box-shadow: rgba(0,0,0,.2) 0 1px 4px inset;
  -webkit-box-shadow: rgba(0,0,0,.2) 0 1px 4px inset;
  box-shadow: rgba(0,0,0,.2) 0 1px 4px inset;
  background: #fff;
}

textarea {
  height: 13em;
  line-height: 1.5em;
  resize: none;
}


/* Place a border around focused fields, and hide the inner shadow */

#contactForm *:focus {
  border: 1px solid #66f;
  outline: none;
  box-shadow: none;
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
}


/* Display correctly filled-in fields with a green background */

input:valid, textarea:valid {
  background: #dfd;
}


/* The Send and Cancel buttons */

input[type="submit"], input[type="button"] {
  float: right;
  margin: 2em 1em 0 1em;
  width: 10em;
  padding: .5em;
  border: 1px solid #666;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;  
  border-radius: 10px;
  -moz-box-shadow: 0 0 .5em rgba(0, 0, 0, .8);
  -webkit-box-shadow: 0 0 .5em rgba(0, 0, 0, .8);
  box-shadow: 0 0 .5em rgba(0, 0, 0, .8);
  color: #fff;
  background: #0a0;
  font-size: 1em;
  line-height: 1em;
  font-weight: bold;
  opacity: .7;
  -webkit-appearance: none;
  -moz-transition: opacity .5s;
  -webkit-transition: opacity .5s;
  -o-transition: opacity .5s;
  transition: opacity .5s;
}

input[type="submit"]:hover,
input[type="submit"]:active,
input[type="button"]:hover,
input[type="button"]:active {
  cursor: pointer;
  opacity: 1;
}

input[type="submit"]:active, input[type="button"]:active {
  color: #333;
  background: #eee;
  -moz-box-shadow: 0 0 .5em rgba(0, 0, 0, .8) inset;
  -webkit-box-shadow: 0 0 .5em rgba(0, 0, 0, .8) inset;
  box-shadow: 0 0 .5em rgba(0, 0, 0, .8) inset;
}

input[type="button"] {
  background: #f33;
}


/* Header/footer boxes */

.wideBox {
  clear: both;
  text-align: center;
  margin: 70px;
  padding: 10px;
  background: #ebedf2;
  border: 1px solid #333;
}

.wideBox h1 {
  font-weight: bold;
  margin: 20px;
  color: #666;
  font-size: 1.5em;
}

.statusMessage1 {  display: none;
  margin: auto;
  width: 30em;
  height: 2em;
  padding: 1.5em;
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}
.statusMessage1 {  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;  
  border-radius: 10px;
}
.statusMessage1 {  color: #666;
  background-color: #ebedf2;
  background: -webkit-gradient( linear, left bottom, left top, color-stop(0,#dfe1e5), color-stop(1, #ebedf2) );
  background: -moz-linear-gradient( center bottom, #dfe1e5 0%, #ebedf2 100% );  
  border: 1px solid #aaa;
  -moz-box-shadow: 0 0 1em rgba(0, 0, 0, .5);
  -webkit-box-shadow: 0 0 1em rgba(0, 0, 0, .5);
  box-shadow: 0 0 1em rgba(0, 0, 0, .5);
  opacity: .95;
}
</style>

<!-- Some IE7 hacks and workarounds -->

<!--[if lt IE 8]>
<style>

/* IE7 needs the fields to be floated as well as the labels */

input, textarea {
  float: right;
}

#formButtons {
  clear: both;
}

/*
  IE7 needs an ickier approach to vertical/horizontal centring with fixed positioning.
  The negative margins are half the element's width/height.
*/

#contactForm.positioned, .statusMessage {
  left: 50%;
  top: 50%;
}

#contactForm.positioned {
  margin-left: -20em;
  margin-top: -16.5em;
}

.statusMessage {
  margin-left: -15em;
  margin-top: -1em;
}

</style>
<![endif]-->

<script type="text/javascript">

var messageDelay = 2000;  // How long to display status messages (in milliseconds)

// Init the form once the document is ready
$( init );


// Initialize the form

function init() {

  // Hide the form initially.
  // Make submitForm() the form's submit handler.
  // Position the form so it sits in the centre of the browser window.
  $('#contactForm').hide().submit( submitForm ).addClass( 'positioned' );

  // When the "Send us an email" link is clicked:
  // 1. Fade the content out
  // 2. Display the form
  // 3. Move focus to the first field
  // 4. Prevent the link being followed

  $('a[href="#contactForm"]').click( function() {
    $('#content').fadeTo( 'slow', .2 );
    $('#contactForm').fadeIn( 'slow', function() {
      $('#senderName').focus();
    } )

    return false;
  } );
  
  // When the "Cancel" button is clicked, close the form
  $('#cancel').click( function() { 
    $('#contactForm').fadeOut();
    $('#content').fadeTo( 'slow', 1 );
  } );  

  // When the "Escape" key is pressed, close the form
  $('#contactForm').keydown( function( event ) {
    if ( event.which == 27 ) {
      $('#contactForm').fadeOut();
      $('#content').fadeTo( 'slow', 1 );
    }
  } );

}


// Submit the form via Ajax

function submitForm() {
  var contactForm = $(this);

  // Are all the fields filled in?

  if ( !$('#senderName').val() || !$('#senderEmail').val() || !$('#message').val() ) {

    // No; display a warning message and return to the form
    $('#incompleteMessage').fadeIn().delay(messageDelay).fadeOut();
    contactForm.fadeOut().delay(messageDelay).fadeIn();

  } else {

    // Yes; submit the form to the PHP script via Ajax

    $('#sendingMessage').fadeIn();
    contactForm.fadeOut();

    $.ajax( {
      url: contactForm.attr( 'action' ) + "?ajax=true",
      type: contactForm.attr( 'method' ),
      data: contactForm.serialize(),
      success: submitFinished
    } );
  }

  // Prevent the default form submission occurring
  return false;
}


// Handle the Ajax response

function submitFinished( response ) {
  response = $.trim( response );
  $('#sendingMessage').fadeOut();

  if ( response == "success" ) {

    // Form submitted successfully:
    // 1. Display the success message
    // 2. Clear the form fields
    // 3. Fade the content back in

    $('#successMessage').fadeIn().delay(messageDelay).fadeOut();
    $('#senderName').val( "" );
    $('#senderEmail').val( "" );
    $('#message').val( "" );

    $('#content').delay(messageDelay+500).fadeTo( 'slow', 1 );

  } else {

    // Form submission failed: Display the failure message,
    // then redisplay the form
    $('#failureMessage').fadeIn().delay(messageDelay).fadeOut();
    $('#contactForm').delay(messageDelay+500).fadeIn();
  }
}

</script>
<table cellpadding="0" cellspacing="0" border="0" width="230">
	<tr align="left">
	  <td><table border="0" cellpadding="3" cellspacing="0" class="news">
        <tr>
          <td height="30" align="center" valign="middle" bgcolor="#61B7CF"><span class="style1">Send Feedback</span></td>
        </tr>
        <tr>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0" width="100%">
              <tr>
                <td><div id="content">
                    <p style="padding-bottom: 5px; font-weight: bold; text-align: center;"><a href="#contactForm">আপনার মতামত দিন</a></p>
                </div>
                    <form id="contactForm" action="processForm.php" method="post">
                      <h2>আপনার মতামত দিন</h2>
                      <ul>
                        <li>
                          <label for="senderName">Your Name</label>
                          <input type="text" name="senderName" id="senderName" placeholder="Please type your name" required="required" maxlength="40" />
                        </li>
                        <li>
                          <label for="senderEmail">Your Email Address</label>
                          <input type="email" name="senderEmail" id="senderEmail" placeholder="Please type your email address" required="required" maxlength="50" />
                        </li>
                        <li>
                          <label for="message" style="padding-top: .5em;">Your Message</label>
                          <textarea name="message" id="message" placeholder="Please type your message" required="required" cols="80" rows="10" maxlength="10000"></textarea>
                        </li>
                      </ul>
                      <div id="formButtons">
                        <input type="submit" id="sendMessage" name="sendMessage" value="Send Email" />
                        <input type="button" id="cancel" name="cancel" value="Cancel" />
                      </div>
                    </form>
                  <div id="sendingMessage" class="statusMessage1">
                    <p>Sending your message. Please wait...</p>
                  </div>
                  <div id="successMessage" class="statusMessage1">
                    <p>Thanks for sending your message! We'll get back to you shortly.</p>
                  </div>
                  <div id="failureMessage" class="statusMessage1">
                    <p>There was a problem sending your message. Please try again.</p>
                  </div>
                  <div id="incompleteMessage" class="statusMessage1">
                    <p>Please complete all the fields in the form before sending.</p>
                  </div></td>
              </tr>
          </table></td>
        </tr>
      </table></td>
  </tr>
	<tr align="left">
	  <td height="5"></td>
  </tr>
	<tr align="left">
		<td>
		<table border="0" cellpadding="3" cellspacing="0" class="news">
		  <tr>
			<td height="30" align="center" valign="middle" bgcolor="#61B7CF"><span class="style1">Latest News </span></td>
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
				<td height="30" align="center" valign="middle" bgcolor="#61B7CF"><span class="style1">Notice Board</span></td>
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
				<td height="30" align="center" valign="middle" bgcolor="#61B7CF"><span class="style1">Hit Counter</span></td>
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
								?> Times                                </td>
						</tr>
					</table>				</td>
			  </tr>
			</table>	  </td>
	</tr>
    
		  <tr>
		    <td valign="top" height="5"></td>
  </tr>
		  <tr>
			<td valign="top">&nbsp;</td>
  </tr>
	<tr>
		<td height="5px">		</td>
	</tr>
	<tr align="left">
	  <td>
		<!-- Place this tag where you want the +1 button to render -->
<g:plusone size="tall"></g:plusone>

<!-- Place this render call where appropriate -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>      </td>
  </tr>
</table>
