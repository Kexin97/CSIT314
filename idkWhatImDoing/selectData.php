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

		try {
		  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $email = $_POST['email'];
		  $password = $_POST['password'];
		  $stmt = $conn->prepare("SELECT email, password, userProfile FROM users WHERE email='$email'");
		  $stmt->execute();

		  // set the resulting array to associative
		  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		  //foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) 
		  foreach(($stmt->fetchAll()) as $v)
		  {
			
			//echo $v["email"], " " . $v["password"];
		    if (($email == $v["email"]) && ($password == $v["password"]))
			{
				echo "match!!";
				header("Location: reviewer_page.php");
			}
			else
			{
				echo "dont match!!";
				header("Location: login.html");
			}
		  }
		  
		} catch(PDOException $e) {
		  echo "Error: " . $e->getMessage();
		}
		$conn = null;

	?>
	
</body>
</html>