<?php include("../../include/menu.php"); ?>
<?php include('BDD_JEUX.php'); ?>
<?php
	$JMA_Slash = str_replace('_', '/', $DATE[0]);
?>

<html>
<head>
<title id="title_<?php print_r($nomJeux[0]); ?>_<?php print_r($DATE[0]); ?>">Concours <?php print_r($nomJeux[0]); ?></title>
<?php include("../../include/test_user.php"); ?>
<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>

</head>
<body>

<form action="BDD_POST.php" method="POST" id="form">
<p>
<u>
<span id="Twitter_user">Nom d'utilisateur Twitter</span>
</u> 
(<span id="DetC" style="color:#A54141">le nom d'utilisateur doit faire entre 2 et 15 caract&egrave;res</span>): <input type="text" name="Username" value="@" class="input"/>
<br>
</p>
<br>
<span id="indice_participation">Vous allez participer au concours pour gagner <u><i><?php print_r($nomJeux[0]); ?></i></u> qui ce finira le <?php echo($JMA_Slash); ?></span>:
<br><br>
<span id="MSG_Retweet">Vous <b>devez</b> cliquer sur le bouton "Retweeter" pour pouvoir valider</span><br>
<button id="submit" class="submit" type="submit">Participer au concours</button>


</form>
<!--
<button onClick="tweet()" class="btn_general">Tweeter</button>
<br><br>
<script type="text/javascript">
function tweet(){
	var texte = "";
	var message = "J'ai participé au concours de @ConcoursD_eG pour gagner Battlefield 3 à l'adresse: http://www.digit-egifts.fr/r/1";
	var URL_texte = encodeURI(texte);
	var URL_message = encodeURI(message);
	var URL_Total = URL_texte + URL_message;
	var debut = "https://twitter.com/intent/tweet?text=";
	var fin = "&related=Digit_eGifts,bmx22c,SecretLeila,Axel451001";
	open(debut + URL_Total + "%0A%0AParticipe toi aussi !" + fin, width=700, height=500);
}
</script>-->

<!-- == COMPTEUR nomJeux J/M/A === -->
<?php include("BDD_COMPTEUR.php"); ?>

<!-- == PUB haha c kom ca ke le sit se remunair == -->
<center>
<?php include("../../include/ad.php"); ?>
</center>

</body>
<footer>
<br><br>
<center>
<!-- === BOUTON RETWEETER === -->
<?php include("retweeter.php"); ?>

<!-- === BOUTON INFORMATIONS === -->
<?php include("../../include/bouton_informations.php"); ?>

</center>
</footer>
</html>
