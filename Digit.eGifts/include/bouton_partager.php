<!--========== BOUTON PARTAGER ==========-->
<button id="partager" onClick="partager()" class="btn_general">Partager</button>
<script type="text/javascript">
	var Title = document.title;
	var URL = document.URL;
	var Referer = URL;
	var URL_Pt1 = "https://twitter.com/intent/tweet?original_referer=";
	var URL_Pt2 = "&text=";
	
	function partager(){
		var URL_Encode = escape('Digit.eGifts | Jeux gratuits à gagner! http://digit-egifts.22web.org/ | Via @Digit_eGifts');
		open(URL_Pt1 + URL + URL_Pt2 + URL_Encode, width=700, height=500);
	};
</script>