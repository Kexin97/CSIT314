<!DOCTYPE html>
<html>
<head>
	<!--<title>Page Title</title> -->
</head>
<body>

	<h1>login page</h1>
	<p>lalala</p>
	
	 <?php print $_SERVER['PHP_SELF'];?>
	 <?php print $_SERVER["PHP_SELF"];?>
	
	<form method="post" action="<?php print $_SERVER['PHP_SELF'];?>">
		<label for="username">Username:</label><br>
		<input type="text" id="username" name="username" placeholder="Johnny bravo"><br>
		<label for="Password">Password:</label><br>
		<input type="text" id="Password" name="Password" placeholder="qwerty123"><br><br>
		<input type="submit" value="Submit">
	</form>
	
	<?php
		$servername = "localhost";
        $username = "root";
        $password = "";
        
        try {
          $conn = new PDO("mysql:host=$servername;dbname=testdb", $username, $password);
          // set the PDO error mode to exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          echo "Connected successfully";
        } catch(PDOException $e) {
          echo "Connection failed: " . $e->getMessage();
        }
        echo "<br>";echo "<br>";
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			echo $_POST['username'];
		}
	?>
		
</body>
</html>