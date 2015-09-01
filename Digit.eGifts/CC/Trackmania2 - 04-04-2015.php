<?php include("../traduction.php"); ?>
<html>
<head>
<title id="title_trackmania2_18_04_2015">Concours Trackmania&sup2; Stadium</title>
<link rel="stylesheet" href="../styles.css">
<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>

<!-- ========== TEST MOBILE ========== -->
<script type="text/javascript">
var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }};
if( isMobile.any()){
	window.location.href = "/m/CC/Trackmania2_18_04_2015.php";
}

</script>
<!-- ========== FIN TEST MOBILE ========== -->

</head>
<body onLoad="lock()">
	
<script type="text/javascript">
	function lock(){
		document.getElementById('retweet').disabled = true;
	}
</script>

<form action="../Action_BDD/Trackmania2 - 04-04-2015.php" method="POST">
<p>
<u>
<span id="Twitter_user">Nom d'utilisateur Twitter</span>
</u> 
(<span id="DetC" style="color:red">le nom d'utilisateur doit faire entre 2 et 15 caract&egrave;res</span>): <input type="text" name="Username" value="@" class="input"/>
</p>
<span id="MSG_Retweet">Vous devez cliquer sur le bouton "Retweeter" pour pouvoir valider</span><br>
<button id="submit" class="submit" type="submit">Participer au concours pour gagner Trackmania 2 Stadium</button>
</form>


<!-- ========== CONNECT BDD ========== -->
<?php
	//=========== DEFINE =========//
	ini_set('display_errors','off');
	
	$DB_TABLE = "Trackmania2_Stadium_04_04_2015";
		
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
	echo('<p><span id="participants_1">Il y a </span><u><b><span style="color:red">'.$final[0].'</span></b></u><span id="participants_2"> participants.</span></p>');
	
?>
<!-- ========== FIN CONNECT BDD ========== -->

</body>
<footer>
<br><br>
<center>
<!--========== BOUTON RETWEETER ==========-->
<button id="retweet" onClick="retweeter()" class="retweeter">Retweeter</button>
<script type="text/javascript">	
	document.getElementById("submit").disabled = true;
	function retweeter(){
		
		<!-- ========== LOCK / UNLOCK BOUTON ========== -->
		var clique = false;
		if(document.getElementById("retweet")){
			clique = true;
		}
		if(clique = true){
			//document.getElementById("submit").disabled = false;
		}
		<!-- ========== LOCK / UNLOCK BOUTON ========== -->
		
		open('https://twitter.com/intent/retweet?tweet_id=584447385104842753', width=700, height=500);
	};
</script>

<!-- ========== SPOILER INFORMATIONS ========= -->
<div style="margin:20px; margin-top:5px"><div class="quotetitle">
<button type="button" class="informations" onclick="if (this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display != '') { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = '';        this.innerText = 'Informations'; this.value = 'Cacher'; } else { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = 'none'; this.innerText = 'Informations'; this.value = 'Afficher'; }">Informations</button>
</div><div class="quotecontent"><div id="informations_texte" style="display: none;">
Bonjour et bienvenue sur Digit.eGifts!<br>
Le site repose sur la publicit&eacute;, et uniquement sur elle (mon argent fait aussi le travail).<br>
S'il vous pla&icirc;t, veuillez penser &agrave; bien regarder la publicit&eacute; pour que le site puisse vivre.<br>
Il vivra gr&acirc;ce &agrave; vous!<br>
<br><span style='text-decoration: underline'>
LE SITE EST ACTUELLEMENT EN ALPHA!</span>
</div></div></div>
<!-- ========== FIN SPOILER INFORMATIONS ========= -->

</center>
</footer>
</html>
