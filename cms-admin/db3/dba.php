<?php
require_once("db_con.php");

$DB2 = "";
function db_connect2()
	{
	global $DB2;
	/* connect to server */
	$DB2=mysql_connect(host2,user2,pass2);
	if(!$DB2)
		{
		echo ("
		<script language='javascript'>
		alert('Warning : Fail to connect server!');
		</script>
		\n");
		exit;
		}
	/* function for database connection */
	$DB_sel2=mysql_select_db(db_name2,$DB2);	
	if(!$DB_sel2)
		{
		echo ("
		<script language='javascript'>
		alert('Warning : Fail to connect database!');
		</script>
		\n");
		exit;
		}
	}
	
/* function for query */
function query2($statement)
	{
		mysql_query('SET CHARACTER SET utf8');
		mysql_query("SET SESSION collation_connection ='utf8_general_ci'");
		global $DB2;
		$result = mysql_query($statement,$DB2);
		return $result;
	}
	
/* function for database disconnect */
function db_close2()
	{
		global $DB2;
		mysql_close($DB2);
	}
?>