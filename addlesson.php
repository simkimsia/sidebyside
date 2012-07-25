<?php 
		
require_once('addlessonintodatabase.php');
	
?>
<html>
	<head>
		<title>
			Add lesson page
		</title>
	</head>
	<body>
	<form action="addlesson.php" method= "post" >
	<h1> Add codes into side by side </h1>
		
			<strong>(Left) Codes:</strong> <br/><textarea name='lefttext' rows=25 cols=50></textarea>
		
		<br/>
		 
			<strong>(Right) Images:</strong> <br/><textarea name='righttext' rows=25 cols=50></textarea>
		
		<p>
			<input type="submit" name="submit"/>
	</form>
	</body>

		
</html>