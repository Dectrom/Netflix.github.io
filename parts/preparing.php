<?php
define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
?>
<div class="preparing-wrapper">	
	<div class="loader-wrapper">
		<div class="loader">Loading...</div>
	</div>
	<div class="console-msg-wrapper animated pulse infinite">
		<div class="console-msg">Preparing to unlock premium account...</div>
	</div>
	<div class="console-loadbar-wrapper">
		<div id="progressBarConsole" class="console-loadbar animated bounceIn"><div></div></div>
	</div>
</div>
