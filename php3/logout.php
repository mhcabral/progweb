<?php
	
	session_start();
	session_unset();
	echo "<script type='text/javascript'>window.open('\index.php','_self')</script>";

?>