<?php print file_get_contents("http://www.digit-egifts.fr/include/menu.php"); ?>
<html lang="fr" class="noise">
<head>

<title id="title">[ALPHA] Digit.eGifts | Jeux gratuits &agrave; gagner!</title>
<meta name="keywords" content="digit, egifts, cadeau, gifts, gratuit, gratuitement, jeu, jeux, code cadeau, steam, origin,"/>
<!-- === META === -->
<?php include("./include/meta.php"); ?>

<link rel="icon" type="image/x-icon" href="favicon.ico"/>
<?php include("./include/test_user.php"); ?>
<?php include("./include/block_action.php"); ?>
<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>

<h2 id="bienvenue" title="Bienvenue sur Digit.eGifts!" class="Bienvenue">Bienvenue sur Digit.eGifts !</h2>
<h3 id="Intro" class="Intro" style="text-align:center"><strong>Digit.eGifts vous permet de gagner des codes de </strong><strong>jeux gratuitement</strong><strong>, simplement en rentrant votre nom d'utilisateur Twitter et en retweetant un tweet!</strong></h3>

</head>
<body>
	<center><p id="MSG_Instru">Pour participer il te suffit de regarder la publicit&eacute; de 5 secondes, puis de rentrer ton nom d'utilisateur Twitter ainsi que de retweeter le tweet fourni sur la page du concours!</p></center>
	
<br>

		<li><a href="/r/1">Battlefield 3</a></li>
			<!-- === COMPTEUR BATTLEFIELD 3 30/07/2015 === -->
			&rarr; <?php include("./CC/Battlefield_3_30_07_2015/BDD_COMPTEUR.php"); ?>

		<br>
	
		<li>Trackmania 2 Stadium (<span id="termine" style="color:red; font-weight:bold;">CONCOURS TERMIN&Eacute;</span> (<a href="https://twitter.com/xafonyz">@xafonyz</a><span id="gagnant"> est le gagnant !</span>))</li>
			<!-- === COMPTEUR TM2 STADIUM 04/04/2015 === -->
			<?php //include("./include/counter_cc_trackmania2_stadium_04_04_2015.php"); ?>
		
		<br>
		
		<li>Garry's Mod (<span id="termine_1" style="color:red; font-weight:bold;">CONCOURS TERMIN&Eacute;</span> (<a href="https://twitter.com/_Ananasl_">@_Ananasl_</a><span id="gagnant_1"> est la gagnante !</span>))</li>
			<!-- == COMPTEUR GARRY'S MOD 01/05/2015 === -->
			<?php //include("./include/counter_cc_garrysmod_01_05_2015.php"); ?>
		<br>
		<li>Portal 2 (<span id="termine_1" style="color:red; font-weight:bold;">CONCOURS TERMIN&Eacute;</span> (<a href="https://twitter.com/WilgagnonGagnon">@WilgagnonGagnon</a><span id="gagnant_1"> est le gagnant !</span>))</li>
			<!-- == COMPTEUR GARRY'S MOD 01/05/2015 === -->
			<?php //include("./include/counter_cc_garrysmod_01_05_2015.php"); ?>
		<br>
	<center>
		<iframe scrolling="no" frameborder="0" allowtransparency="true" title="Sondages Pixule" width="370" height="365" src="http://www.pixule.com/widget272208020479" data-key="272208020479"></iframe>
		<br>
		<?php include("./include/ad.php"); ?>
	</center>
</body>
<footer>

<?php print file_get_contents("http://digit-egifts.fr/include/footer.php"); ?>

</footer>
</html>