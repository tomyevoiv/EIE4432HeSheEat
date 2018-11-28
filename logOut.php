<?php
	setcookie('userName', '', time() - (86400 * 30), '/');
	
	echo "<script type='text/javascript'>alert('You are logged out, see you next time');</script>";
	echo"<script type='text/javascript'>setTimeout('', 10000);</script>";
	echo "<script type='text/javascript'>window.location.replace(\"index.php\");</script>";

?>