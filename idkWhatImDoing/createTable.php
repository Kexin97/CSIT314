<!DOCTYPE html>
<html>
<head>
	<!--<title>Page Title</title> -->
</head>
<body>

	<h1>LOGGERD IN!!</h1>
	<p>gratz.</p>
	
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "testDB";

		try 
		{
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			// sql to create table
			$sql = "CREATE TABLE Papers 
			(
				authorName VARCHAR(30) NOT NULL,
				paperName VARCHAR(30) NOT NULL PRIMARY KEY,
				paperContent VARCHAR(3000) NOT NULL,
				review VARCHAR(500),
				rating int(10)
			)";

			// use exec() because no results are returned
			$conn->exec($sql);
			echo "Table Papers created successfully";
		} 
		catch(PDOException $e) 
		{
			echo $sql . "<br>" . $e->getMessage();
		}

		$conn = null;

	?>
	
</body>
</html>