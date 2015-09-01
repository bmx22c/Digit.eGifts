<!-- ========== CONNECT BDD ========== -->
<?php

	//=========== DEFINE =========//
	ini_set('display_errors','off');
	
	$DB_TABLE = "Battlefield_3_30_07_2015";
		
		define('DB_NAME', 'c34page');
		define('DB_USER', 'c34bmx22c');
		define('DB_PASSWORD','#SECRET');
		define('DB_HOST','127.0.0.1');
	
	//========== CONNECT TO DATABASE ==========//
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	$db_selected = mysql_select_db(DB_NAME, $link);
	
	$nomJeux_r = mysql_query("SELECT nomJeux FROM $DB_TABLE", $link) or die(mysql_error());
	$nomJeux = mysql_fetch_row($nomJeux_r);

	$DATE_r = mysql_query("SELECT JMA FROM $DB_TABLE", $link) or die(mysql_error());
	$DATE = mysql_fetch_row($DATE_r);
	
	//========== CLOSE CONNECTION ==========//
	mysql_close();

?>
<!-- ========== FIN CONNECT BDD ========== -->