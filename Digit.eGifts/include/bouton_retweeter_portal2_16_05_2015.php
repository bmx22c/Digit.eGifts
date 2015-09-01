<!--========== BOUTON RETWEETER ==========-->
<button id="retweet" onClick="retweeter()" class="retweeter">Retweeter</button>
<script type="text/javascript">	
	document.getElementById("submit_portal2_16_05_2015").disabled = true;
	function retweeter(){
		
		<!-- ========== LOCK / UNLOCK BOUTON ========== -->
		var clique = false;
		if(document.getElementById("retweet")){
			clique = true;
		}
		if(clique = true){
			document.getElementById("submit_portal2_16_05_2015").disabled = false;
		}
		<!-- ========== LOCK / UNLOCK BOUTON ========== -->
		
		open('https://twitter.com/intent/retweet?tweet_id=594480241785098240', width=700, height=500);
	};
</script>