<?php

echo '

<div style="background-image:url(\'images/grass.png\'); height:88px; width:100%; position:fixed; bottom:0px">
</div>

  
<!-- Included JS Files (Uncompressed) -->
  <!--
  
  <script src="javascripts/modernizr.foundation.js"></script>
  
  <script src="javascripts/jquery.js"></script>
  
  <script src="javascripts/jquery.foundation.mediaQueryToggle.js"></script>
  
  <script src="javascripts/jquery.foundation.reveal.js"></script>
  
  <script src="javascripts/jquery.foundation.orbit.js"></script>
  
  <script src="javascripts/jquery.foundation.navigation.js"></script>
  
  <script src="javascripts/jquery.foundation.buttons.js"></script>
  
  <script src="javascripts/jquery.foundation.tabs.js"></script>
  
  <script src="javascripts/jquery.foundation.forms.js"></script>
  
  <script src="javascripts/jquery.foundation.tooltips.js"></script>
  
  <script src="javascripts/jquery.foundation.accordion.js"></script>
  
  <script src="javascripts/jquery.placeholder.js"></script>
  
  <script src="javascripts/jquery.foundation.alerts.js"></script>
  
  -->
  
  <!-- Included JS Files (Compressed) -->
  <script src="javascripts/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="javascripts/app.js"></script>

<script>
$(document).ready(function(){

	$(".dropdown").hide();

	$(".show_dropdown").each(function(){

		$(this).mouseover(function(){
			$(".dropdown").hide();
			$(this).next().fadeIn(100);
		});

	$(".dropdown").mouseleave(function(){
		$(this).hide();
	});

	});

});
</script>


</body>
</html>
';

?>