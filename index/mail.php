<?php
$name=$_POST["name"];
$email=$_POST["email"];
$text=$_POST["text"];
$to      = 'info@sssbangladesh.com';
$subject = 'Feedback';
$message = $text;
$headers = 'From: $email' . "\r\n" .
    'Reply-To: info@sssbangladesh.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>
<script language='javascript'>
alert('Message Send Successfully');
history.go(-1);
</script>

