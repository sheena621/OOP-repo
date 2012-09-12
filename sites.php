<?php
	$site = new sites();
//	$site = new table();
	$site->set_table('sites');
	
	$query = mysql_query("SELECT site_id AS 'Site ID', domain_name, DATE_FORMAT( created_datetime, '%Y-%m-%d' ) AS created_datetime, 
							CONCAT (t1.first_name,' ',t1.last_name) AS 'client name'
							FROM `clients` AS t1
							LEFT JOIN `sites` AS t2 ON t1.client_id = t2.client_id
							GROUP BY site_id
							ORDER BY site_id ASC")
			or die('Query failed: ' . mysql_error());	
	
	echo $site->display_table($query);
	$site->close_database();
?>