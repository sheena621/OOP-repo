<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>OOP assignment</title>
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/ui-lightness/jquery-ui-1.8.23.custom.css" />
	<link rel="stylesheet" href="css/blue/style.css" />
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js"></script>	
	<script type="text/javascript" src="js/jquery.tablesorter.js"></script>
	<script type="text/javascript" src="js/jquery.oop.js"></script> 
	<?php  include("class_lib.php"); ?>
</head>
<body>

	<div id="navigation">
		<ul>
	    	<li><a href="#tab_users">Users</a></li>
	       	<li><a href="#tab_sites">Sites</a></li>
			<li><a href="#tab_leads">Leads</a></li>
		</ul>
			
		<div id="tab_users">			
			<?php include('users.php'); ?>
		</div>
		<div id="tab_sites">			
			<?php include('sites.php');	?>			
		</div> 
		<div id="tab_leads">			
			<?php include('leads.php');	?>			
		</div> 
	</div> <!-- end of navigation -->	

</body>
</html>

