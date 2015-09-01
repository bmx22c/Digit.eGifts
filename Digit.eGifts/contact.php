<?php print file_get_contents("http://www.digit-egifts.fr/include/menu.php"); ?>
<html lang="fr">
<head>

<script src='https://www.google.com/recaptcha/api.js'></script>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title id="title">[ALPHA] Digit.eGifts | Jeux gratuits &agrave; gagner!</title>
<meta name="keywords" content="digit, egifts, cadeau, gifts, gratuit, gratuitement, jeu, jeux, code cadeau, steam, origin,"/>
<!-- === META === -->
<?php include("./include/meta.php"); ?>

<link rel="icon" type="image/x-icon" href="favicon.ico"/>
<?php include("./include/test_user.php"); ?>
<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>

<h2 id="bienvenue" title="Bienvenue sur Digit.eGifts!" class="Bienvenue">Formulaire de contact</h2>
<h3 id="Intro" class="Intro" style="text-align:center">Si vous voulez contacter Digti.eGifts, merci d'utiliser le formulaire si dessous.</h3>

</head>
<body>

	<!-- CONTACT FORM STARTS -->
		<form action="send.php" id="contact_form" method="post" name="contact_form">
			<ul>
				<li><label class="contact">NOM / NAME:</label>
				<br>
				<input type="text" name="name" id="name" value="" class="requiredField input"/></li>
				<li><label class="contact">EMAIL:</label>
				<br>
				<input type="text" name="email" id="email" value="" class="requiredField email input"/></li>
				<li><label class="textarea contact">MESSAGE:</label>
				<br>
				<textarea name="message" id="message" class="requiredfield input"></textarea>
				</li>
				<br>
				<div class="g-recaptcha" data-sitekey="6LccVQsTAAAAAAjX8v__vBuDlFhQsgPsqiw3kc15"></div>
				<br>
				<button id="submitted" class="submitted envoyer" name="submitted" type="submit">Envoyer / Send</button>
				<button id="reset" type="reset" class="submitted envoyer">R&eacute;initialiser / Reset</button>
			</ul>
		</form>
	<!-- CONTACT FORM ENDS -->

	<br>

	<?php include("./include/ad.php"); ?>
		
</body>
<footer>

<?php print file_get_contents("http://digit-egifts.fr/include/footer.php"); ?>

</footer>
</html>