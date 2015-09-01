<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<!-- ========== TEST USER ========== -->
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
if(isMobile.any()){
	document.writeln('<link rel="stylesheet" href="http://digit-egifts.fr/styles_m.css">');
    console.log('mobile');
}else{
	document.writeln('<link rel="stylesheet" href="http://digit-egifts.fr/styles.css">');
    console.log('pc');
}

// ========== FIN TEST USER ========== //
</script>