<?php
define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
?>
<div class="human-verification-wrapper">
	<h3>Human Verification</h3>
	<p>You are almost done! Click on the Verify Now button below to complete human verification.</p>
	<div class="verification-premium-info-wrapper">	
		<div class="verification-premium-label">Unlocking premium for:</div>
		<div class="verification-premium-info animated bounceIn animation-delay-200">
			<div class="verification-premium-info-label">Email Address:</div>
			<div class="verification-premium-info-email-value"></div>
		</div>
	</div>
	<i class="fas fa-spinner fa-spin"></i>
	<div id="h-v-time-left-wrapper" class="h-v-time-left-wrapper">
		<span>Time Left:</span>
		<span id="human_verification_timer_time"></span>
	</div>
	<div class="verification-button-wrapper animated bounceIn animation-delay-1000">
		<a id="verification-button" class="ntflx-btn animated pulse infinite" onclick="showLocker('f320c350-ae26-11ee-8a4e-97d56f251b1b')"><span>Verify Now</span></a>
	</div>
</div>
