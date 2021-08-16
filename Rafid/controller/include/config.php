<?php

session_start();

if (isset($_SESSION['username'])) {
	
	$CURRENT_PAGE $PAGE_TITLE = "";
	switch ($_SERVER['SCRIPT_NAME']) {
		case 'shop':
			// code...
			break;
		
		default:
			// code...
			break;
	}
}

 ?>