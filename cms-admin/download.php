<?php
class download
{
	var $filename;
	function downloadNow()
	{
		$path = $this->filename;
		$file = basename($path);
		header("Cache-Control: ");// leave blank to avoid IE errors
		header("Pragma: ");// leave blank to avoid IE errors
		header("Content-type: application/octet-stream");
		header("Content-Disposition: attachment; filename=\"".$file."\"");
		header("Content-length:".(string)(filesize($path)));
		$fdl=fopen($path,"r");
		fpassthru($fdl);
		fclose($fdl);
	}
}
?>