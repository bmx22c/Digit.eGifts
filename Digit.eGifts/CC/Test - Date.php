<?php include("../include/menu.php"); ?>
<html>
<head>
<title id="title_trackmania2_18_04_2015">Concours Garry's Mod</title>
<link rel="stylesheet" href="../styles.css">
<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>

<!-- === TEST MOBILE === -->
<?php include("../include/test_mobile.php"); ?>

</head>
<body>

<form action="../Action_BDD/GarrysMod - 01_05_2015.php" method="POST">
<p>
<u>
<span id="Twitter_user">Nom d'utilisateur Twitter</span>
</u> 
(<span id="DetC" style="color:red">le nom d'utilisateur doit faire entre 2 et 15 caract&egrave;res</span>): <input type="text" name="Username" value="@" class="input"/>
</p>
<span id="MSG_Retweet">Vous devez cliquer sur le bouton "Retweeter" pour pouvoir valider</span><br>
<button id="submit" class="submit" type="submit">Participer au concours pour gagner Garry's Mod</button>
</form>


<!-- == COMPTEUR GARRY'S MOD 01/05/2015 === -->
<?php include("../include/counter_cc_garrysmod_01_05_2015.php"); ?>

</body>
<footer>
<br><br>
<center>
<!-- === BOUTON RETWEETER === -->
<?php include("../include/bouton_retweeter.php"); ?>

<!-- === BOUTON INFORMATIONS === -->
<?php include("../include/bouton_informations.php"); ?>

</center>
</footer>
</html>
