<div id="leads_container">
	<div id="filter_container">
		<form action="process_filter.php" action="get" id="filter_form">
			<h6>Filter:</h6>
			<select name="filter_client" id="filter_client" title="Filter by client">
			<?php
				$clients = new table();
				$clients->set_table('clients');
				$query = mysql_query("SELECT CONCAT(first_name,' ',last_name) AS name FROM $clients->table_name");
				echo $clients->fill_select($query);
				$clients->close_database();
			?>
			</select>	
			OR
			<select name="filter_site" id="filter_site" title="Filter by site">
			<?php
				$sites = new table();
				$sites->set_table('sites');
				$query = mysql_query("SELECT domain_name FROM $sites->table_name");
				echo $sites->fill_select($query);
				$sites->close_database();
			?>
			</select>	
		</form>		
		
		<form action="process_dates.php" action="get" id="date_form">					
			FROM:<input type="text" name="search_from_date" class="search_date" class="search_date" title="Search FROM date in MM/DD/YYYY format"></input>
			TO:<input type="text" name="search_to_date" class="search_date" title="Search TO date in MM/DD/YYYY format"></input>		
			<input type="hidden" value="search_date"/>				 
			<input type="submit" value="Search" id="submit_search_date"/>
		</form>
	</div><!-- end of filter container -->
	
	<div id="results_container">
		<?php include('results.php'); ?>	
	</div> <!-- end of results container -->
</div> <!-- end of leads container -->

