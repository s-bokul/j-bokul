<?php
require_once("db_con.php");

$DB = "";
function db_connect()
	{
	global $DB;
	/* connect to server */
	$DB=mysql_connect(host,user,pass);
	if(!$DB)
		{
		echo ("
		<script language='javascript'>
		alert('Warning : Fail to connect server!');
		</script>
		\n");
		exit;
		}
	/* function for database connection */
	$DB_sel=mysql_select_db(db_name,$DB);	
	if(!$DB_sel)
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
function query($statement)
	{
		mysql_query('SET CHARACTER SET utf8');
		mysql_query("SET SESSION collation_connection ='utf8_general_ci'");
		global $DB;
		$result = mysql_query($statement,$DB);
		return $result;
	}
	
/* function for database disconnect */
function db_close()
	{
		global $DB;
		mysql_close($DB);
	}
?>