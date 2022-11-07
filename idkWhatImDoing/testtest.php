<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
	<!--<title>Page Title</title> -->
</head>
<body>

	<h1>LOGGERD IN!!</h1>
	<p>testtest.php</p>
	
	<?php
	
	echo $_SESSION["favcolor"] = "green" , "  " . $_SESSION["favanimal"] = "cat";
	
	//echo  $cookie_name , " is a " . $_COOKIE[$cookie_name] . $cookie_value , " I SAY!!!";
	
	
	
	/*
		$servername = "localhost";
		$username = "username";
		$password = "password";
		$dbname = "testDB";

		try 
		{
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			// sql to create table
			$sql = "CREATE TABLE Users 
			(
				email VARCHAR(50) PRIMARY KEY,
				password VARCHAR(30) NOT NULL,
				userProfile VARCHAR(30) NOT NULL,
			)";

			// use exec() because no results are returned
			$conn->exec($sql);
			echo "Table Users created successfully";
		} 
		catch(PDOException $e) 
		{
			echo $sql . "<br>" . $e->getMessage();
		}

		$conn = null;*/

	?>
	
</body>
</html>