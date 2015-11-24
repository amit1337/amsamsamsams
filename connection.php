<?php
	global $db;
	include_once('core.php'); 
	
	include_once('mysql.php'); 
	
	$db = new ezSQL_mysql('','','','localhost');

	define("document_root",$_SERVER['DOCUMENT_ROOT'].'/vehicles/',TRUE);

define("site_root",'http://localhost/vehicles/',TRUE);
	

	
	
?>
