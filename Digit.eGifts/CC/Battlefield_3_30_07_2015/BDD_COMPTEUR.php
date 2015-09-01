<!-- ========== CONNECT BDD ========== -->
	<?php
		//=========== DEFINE =========//
		ini_set('display_errors','off');
	
		$DB_TABLE2 = "Battlefield_3_30_07_2015";
		
		define('DB_NAME2', 'c34id_user_bdd');
		define('DB_USER2', 'c34bmx22c');
		define('DB_PASSWORD2','#SECRET');
		define('DB_HOST2','127.0.0.1');
	
		//========== CONNECT TO DATABASE ==========//
		$link2 = mysql_connect(DB_HOST2, DB_USER2, DB_PASSWORD2);
		$db_selected2 = mysql_select_db(DB_NAME2, $link2);
	
		$compter = "SELECT COUNT(Username) FROM $DB_TABLE2";
		$resultat = mysql_query($compter);
		$final = mysql_fetch_array($resultat);
		echo('<span id=>Il y a </span><u><b><span style="color:red">'.$final[0].'</span></b></u><span> participant(s).</span><br>');
	
	?>
<!-- ========== FIN CONNECT BDD ========== -->