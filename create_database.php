<?php 

if ($_POST) {
	
	$database_name = $_POST['database_name'];

	$link = mysql_connect('localhost', 'database_username_here', 'database_password_here');
	if (!$link) {
		die('Could not connect: ' . mysql_error());
	} else {
		print('Connected to database...' . '<br><br>');
	}
	
	//$grant_sql = "GRANT ALL PRIVILEGES ON *.* TO 'root'@'%'";
	
	$sql = 'CREATE DATABASE ' . $database_name;
	if (mysql_query($sql, $link)) {
		print("Database " . $database_name .  " created successfully" . "<br>");
	} else {
		print('Error creating database: ' . mysql_error() . "<br>");
	}
	
	
}

?>

<h1>Create Database</h1>

<div class="row">

	<form method="post" id="create_database_form">
	
		<fieldset class="form-group">
			<label>Database Name</label>
			<input type="text" name="database_name" class="form-control" placeholder="Database Name">
		</fieldset>
		
		<button type="submit" class="btn btn-primary">Submit</button>
	
	</form>

 </div>