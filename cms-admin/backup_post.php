<?php
header('content-type: text/html; charset: utf-8');
require_once("db/dba.php");
$ccyymmdd = date("Y-m-d");
$file_name="backup".$ccyymmdd.".sql";
$file = fopen("backup/backup".$ccyymmdd.".sql","w");
$line_count = create_backup_sql($file);
fclose($file);
//echo "lines written: ".$line_count;
$msg=base64_encode("Backup File Created Successfully");
header("location: backup.php?msg=$msg&f=$ccyymmdd");

function create_backup_sql($file) 
{
	$line_count = 0;
	$db_connection = db_connect();
	//mysql_select_db (db_name()) or exit();
	$tables = mysql_list_tables(db_name());
	$sql_string = NULL;
	while ($table = mysql_fetch_array($tables)) 
	{   
		$table_name = $table[0];
		$sql_string = "\n\nDELETE FROM $table_name";
		$table_query = mysql_query("SELECT * FROM `$table_name`");
		$num_fields = mysql_num_fields($table_query);
		while ($fetch_row = mysql_fetch_array($table_query)) 
		{
			$sql_string .= "\n\nINSERT INTO $table_name VALUES(";
			$first = TRUE;
			for ($field_count=1;$field_count<=$num_fields;$field_count++)
			{
				if (TRUE == $first) 
				{
					$sql_string .= "'".mysql_real_escape_string($fetch_row[($field_count - 1)])."'";
					$first = FALSE;            
				} 
				else 
				{
					$sql_string .= ", '".mysql_real_escape_string($fetch_row[($field_count - 1)])."'";
				}
			}
			$sql_string .= ");";
			if ($sql_string != "")
			{
				$line_count = write_backup_sql($file,$sql_string,$line_count);        
			}
			$sql_string = NULL;
		}    
	}
	return $line_count;
}


function write_backup_sql($file, $string_in, $line_count) 
{ 
	fwrite($file, $string_in);
	return ++$line_count;
}

function db_name() 
{
	return (db_name);
}

/*function db_connect() 
{
	$db_connection = mysql_connect("localhost", "root", "");
	return $db_connection;
} */ 
?>