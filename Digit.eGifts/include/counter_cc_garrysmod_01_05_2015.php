<!-- ========== CONNECT BDD ========== -->
	<?php
		//=========== DEFINE =========//
		ini_set('display_errors','off');
	
		$DB_TABLE = "GarrysMod_01_05_2015";
		
		define('DB_NAME', 'b7_16066782_id_user_bdd');
		define('DB_USER', 'b7_16066782');
		define('DB_PASSWORD','#SECRET');
		define('DB_HOST','sql112.byethost7.com');
	
		//========== CONNECT TO DATABASE ==========//
		$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
		$db_selected = mysql_select_db(DB_NAME, $link);
	
		$compter = "SELECT COUNT(Username) FROM $DB_TABLE";
		$resultat = mysql_query($compter);
		$final = mysql_fetch_array($resultat);
		echo('<span id="participants_3">Il y a </span><u><b><span style="color:red">'.$final[0].'</span></b></u><span id="participants_4"> participants.</span><br>');
	
	?>
<!-- ========== FIN CONNECT BDD ========== -->