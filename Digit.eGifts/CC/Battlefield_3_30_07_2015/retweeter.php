<!--========== BOUTON RETWEETER ==========-->
<button id="retweet" onClick="retweeter()" class="btn_general">Retweeter</button>
<script type="text/javascript">	
	document.getElementById("submit").disabled = true;
	function retweeter(){
		
		<!-- ========== LOCK / UNLOCK BOUTON ========== -->
		var clique = false;
		if(document.getElementById("btn_general")){
			clique = true;
		}
		if(clique = true){
			document.getElementById("submit").disabled = false;
		}
		<!-- ========== LOCK / UNLOCK BOUTON ========== -->
		
		open('https://twitter.com/intent/retweet?tweet_id=633235137279434752', width=700, height=500);
	};
</script>