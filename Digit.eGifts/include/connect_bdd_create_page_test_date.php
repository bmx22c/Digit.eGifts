<!-- ========== CONNECT BDD ========== -->
	<?php
		//=========== DEFINE =========//
		ini_set('display_errors','off');
	
		$DB_TABLE = "Test_Date";
		
		define('DB_NAME', 'b7_16066782_create_page');
		define('DB_USER', 'b7_16066782');
		define('DB_PASSWORD','#SECRET');
		define('DB_HOST','sql112.byethost7.com');
	
		//========== CONNECT TO DATABASE ==========//
		$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
		$db_selected = mysql_select_db(DB_NAME, $link);
		
		$titre = $_POST["titre"];
		$form = $_POST["form"];
		$bouton = $_POST["bouton"];
		$compteur = $_POST["compteur"];
		$btn_rt = $_POST["btn_rt"];
		$test = "TEST";
		
		$sql = "INSERT INTO $DB_TABLE (Titre, Form, Bouton, Compteur, Btn_RT) VALUES ('$titre', '$form', '$bouton', '$compteur', '$btn_rt')";
		if($sql){
			// === DEBUG === //
			echo('OK <br>');
			
			echo($titre);
			echo('<br>');
			
			echo($test);
			echo('<br>');
			
			echo($form);
			echo('<br>');
			
			echo($bouton);
			echo('<br>');
			
			echo($btn_rt);
			echo('<br>');
			
			echo($compteur);
		}
		
		if (!$link) {
		
		//========== DEBUG ==========//
		die('Could not connect: ' . mysql_error());
		
	} else {
		
		//========== DEBUG ==========//
		echo('(LINK) Connected to database successfully | ');
	}
	
	
	if (!$db_selected) {
		
		//========== DEBUG ==========//
		die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
		
	}