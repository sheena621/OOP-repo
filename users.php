<?php
//	$user = new table();
	$user = new clients();
	$user->set_table('clients');
	
	$query = mysql_query("SELECT client_id AS 'Client ID', first_name AS 'First Name', last_name AS 'Last Name', 
								 email AS 'Email', DATE_FORMAT(joined_datetime,'%Y-%m-%d')  AS 'Joined Date' FROM clients")
			 or die('Query failed: ' . mysql_error());	
	
	echo $user->display_table($query);
	$user->close_database();
?>