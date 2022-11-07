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
			$lala = "paper6";
			$content = $lala $lala $lala<br> $lala $lala $lala $lala<br> 
						$lala $lala $lala $lala<br> $lala $lala $lala $lala<br>
						$lala $lala $lala<br> $lala $lala $lala $lala<br> 
						$lala $lala $lala $lala<br> $lala $lala $lala $lala<br>
						$lala $lala $lala<br> $lala $lala $lala $lala<br> 
						$lala $lala $lala $lala<br> $lala $lala $lala $lala<br>;
						
			$sql = "INSERT INTO Papers (authorName, paperTitle, paperContent)
			VALUES ('author3', '$lala', '$lala $lala $lala<br> $lala $lala $lala $lala<br> 
						$lala $lala $lala $lala<br> $lala $lala $lala $lala<br>
						$lala $lala $lala<br> $lala $lala $lala $lala<br> 
						$lala $lala $lala $lala<br> $lala $lala $lala $lala<br>
						$lala $lala $lala<br> $lala $lala $lala $lala<br> 
						$lala $lala $lala $lala<br> $lala $lala $lala $lala<br>')";
			// use exec() because no results are returned
			$conn->exec($sql);
			echo "New record inserted successfully";
		} 
		catch(PDOException $e) 
		{
			echo $sql . "<br>" . $e->getMessage();
		}

		$conn = null;

	?>
	
</body>
</html>