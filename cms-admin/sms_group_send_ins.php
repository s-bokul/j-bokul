<?php
require_once("db2/dba.php");
db_connect();
$group_id=$_POST['group_id'];
$smsArea=$_POST['smsArea'];


$select_query=query("SELECT `phonenumber` FROM `sms_contacts` where `group_id`='$group_id';");

while($mobile_no_raw=mysql_fetch_array($select_query))
{
	$mobile_no='88'.$mobile_no_raw['phonenumber'];
	$sms_insert_query=query("INSERT INTO `sms_req` (`id`, `sender`, `receiver`, `amount`, `sms`, `lock`, `send`, `success`, `reqlogtime`, `sendlogtime`, `successlogtime`, `transactionid`, `newentry`, `updated`) VALUES (NULL, 'bbghs', '$mobile_no', '1', '$smsArea', '0', '0', '0', CURRENT_TIMESTAMP, NOW(), NOW(), NULL, '0', '1');");
	$sms_insert_query;
}
$select_query2=query("SELECT `phonenumber` FROM `sms_contacts` where `group_id`='$group_id';");
db_close();
$mobile_nos='8801717251417';
while($mobile_no_raw=mysql_fetch_array($select_query2))
{
	$mobile_nos.=',88'.$mobile_no_raw['phonenumber'];
}

$host="121.241.242.114";
$port="8080";
$strUserName="zte-bbghs";
$strPassword="bbghs123";
$strMessageType=0;
$strDlr=1;
$strMobile=$mobile_nos;
$strSender="GovtBBGirls";
$strMessage=$smsArea;

$live_url="http://".$host.":".$port."/bulksms/bulksms?username=".$strUserName."&password=".$strPassword."&type=".$strMessageType."&dlr=".$strDlr."&destination=".$strMobile."&source=".$strSender."&message=".$strMessage."";
//$parse_url=file($live_url);
//echo $parse_url[0];
//echo "<pre>";
//print_r($parse_url);
echo "<iframe src='".$live_url."' width='0' height='0'></iframe>";

$msg=base64_encode("SMS Sending Is In Progress");

echo 'SMS Sending Is In Progress<br /><a href="sms.php?msg='.$msg.'">Back</a>'
//header("location: sms.php?msg=$msg");

?>