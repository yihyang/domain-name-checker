<?php
	$name =  $_REQUEST["name"];	// To get from GET, POST or COOKIE
	$country_domain = array('com',
													'net',
													'org',
													'biz',
													'info',
													'us'
													'name' 
													'com.my', 
													'my', 
													'com', 
													'org', 
													'sg');	// Add country domain here
?>
<h3>Result</h3>
<table class="table">
	<thead>
		<tr>
			<th>Domain Name</th>
			<th>Available?</th>
		</tr>
	</thead>
	<tbody>
		<?php
			// Loop to perform domain check
			foreach($country_domain as $c) {
				echo "<tr><td>";
				echo $name . '.' . $c;
				echo "</td>";
				echo "<td>";
				if(checkdnsrr($name . '.' . $c, "a")) {
					echo 'NO';
				} else {
					echo 'YES';
				}
				echo "</td></tr>";
			}
		?>
	</tbody>
</table>
