<!DOCTYPE html>
<html>
	<head>
		<title>Domain Name Checker</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="Demo project">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
		<style type="text/css"></style>
	</head>
	<body>
		<div class="container">
			<h2>Domain Name Checker</h2>
			<p>Input the name that you would like to search:</p>
			<input type="text" id="input-name" class="form-control">
			<br>
			<input type="button" name="" value="Search" id="button-check" class="btn btn-primary form-control" >
			<br>
			<br>
			<div id="result"></div>
		</div>
	</body>
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('#button-check').click(function(event) {
				$('#result').html("<p>Checking...</p>");
				$.ajax({
					url: 'domain-check.php',
					type: "POST",
					data: {name: $('#input-name').val()},
					success: function(result) {
						$('#result').html(result);
					}
				});
			});
		});
	</script>
</html>