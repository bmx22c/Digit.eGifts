<?php

	//=========== DEFINE =========//
	ini_set('display_errors','off');
	
	$DB_TABLE3 = "Battlefield_3_30_07_2015";
		
		define('DB_NAME3', 'c34id_user_bdd');
		define('DB_USER3', 'c34bmx22c');
		define('DB_PASSWORD3','#SECRET');
		define('DB_HOST3','127.0.0.1');
	
	$Username = $_POST["Username"];
	// $Pote = $_POST["Pote"];
	$Longueur_User = mb_strlen($Username);
	$Message_popup = "Votre participation \u00e0 \u00e9t\u00e9 enregistr\u00e9e, cependant il reste une \u00e9tape: Vous devez attendre 5 secondes et cliquer sur le lien \"Passez l'annonce\" et (si vous le voulez) tweetez le lien du concours!";
	$URL_Concours = "http://Digit-eGifts.byethost7.com/CC/GMod - Date.php";
	
	
	//========== DEBUG ==========//
	/*
	echo('Database: ' . DB_NAME3 . ' | ');
	echo('Table: ' . DB_TABLE3 . ' | ');
	echo('Longueur username: ' . $Longueur_User. ' | ');
	*/
	
	
	
	//========== CONNECT TO DATABASE ==========//
	$link3 = mysql_connect(DB_HOST3, DB_USER3, DB_PASSWORD3);
	$db_selected3 = mysql_select_db(DB_NAME3, $link3);
	
	if (!$link3) {
		
		//========== DEBUG ==========//
		//die('Could not connect: ' . mysql_error());
		
	} else {
		
		//========== DEBUG ==========//
		//echo('(LINK) Connected to database successfully | ');
	}
	
	
	if (!$db_selected3) {
		
		//========== DEBUG ==========//
		//die('Can\'t use ' . DB_NAME3 . ': ' . mysql_error());
		
	} else {
		
		//========== DEBUG ==========//
		//echo('(DB_SELECTED) Connected to database successfully | ');
	}
	
	
	
	//========== TEST IF USER ALREADY EXIST ==========//
	$query = mysql_query("SELECT * FROM $DB_TABLE3 WHERE Username='$Username'") or die(mysql_error());
	
	//========== DEBUG ==========//
	// echo(mysql_num_rows($query. ' | '));
	
	if (mysql_num_rows($query) != 0) {
		echo('<script type=text/javascript>
				var redirect = confirm("Ce nom d\'utilisateur est d\u00e9j\u00e0 pris!\nMerci d\'en choisir un autre.");
				if(redirect){
					window.location.href = "javascript:history.back()";
				}else{
					window.location.href = "javascript:history.back()";
				}
			</script>');
	} else {
		if (preg_match('#^@#', $Username) && $Longueur_User >= 3 && $Longueur_User <= 16){
			$sql = "INSERT INTO $DB_TABLE3 (Username) VALUES ('$Username')";
			
			//========== DEBUG ==========//
			//echo('Nom d\'utilisateur bon.');
			
			// $year = time() + 31536000;
			// $cookie = setcookie('Digit_eGifts_USERNAME', $_POST["Remember"], $year);
			echo('<script type="text/javascript" charset="utf-8">
					var Message = "Votre participation a bien \u00e9t\u00e9 enregistr\u00e9e!\nMerci de votre participation.\n\nVous pouvez des \u00e0 pr\u00e9sent partager le concours!";
					var confirmation = window.confirm(Message);

					if(confirmation){
						window.location.href = "https://twitter.com/intent/tweet?text=J%27ai+particip%C3%A9+au+concours+de+%40ConcoursD_eG+%C3%A0+l%27adresse+http%3A%2F%2Fwww.digit-egifts.fr%2Fr%2F1+pour+gagner+Battlefield+3%21&related=Digit_eGifts,bmx22c,SecretLeila,Axel451001";
					}else{
						window.location.href = "https://twitter.com/intent/tweet?text=J%27ai+particip%C3%A9+au+concours+de+%40ConcoursD_eG+%C3%A0+l%27adresse+http%3A%2F%2Fwww.digit-egifts.fr%2Fr%2F1+pour+gagner+Battlefield+3%21&related=Digit_eGifts,bmx22c,SecretLeila,Axel451001";
					}
			
				</script>');
			
		} else {
			echo('<script type=text/javascript>
				var redirect = confirm("Merci de laisser le caract\u00e8re \"@\".");
				if(redirect){
					window.location.href = "javascript:history.back()";
				}else{
					window.location.href = "javascript:history.back()";
				}
			</script>');
		};
		
		
		//========== DEBUG ==========//
		if (!mysql_query($sql)) {
			
			//========== DEBUG ==========//
			//die('Error: ' . mysql_error() . ' | ');
			
		} else {
			
			//========== DEBUG ==========//
			//echo('(MYSQL_QUERY) Connected to database successfully');
		};
	}
	
	//========== DEBUG ==========//
	//echo($response . ' | ');
	
	
	
	//========== CLOSE CONNECTION ==========//
	mysql_close();
?>