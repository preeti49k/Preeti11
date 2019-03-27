<?php 
		include 'db_functions.php';
		$_notices = deletedata("notice","id = '1'"); 

		echo "<pre>"; print_r($_notices); echo "</pre>"; exit;	
	?>
Notice