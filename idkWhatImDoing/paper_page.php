<!DOCTYPE html>
<html>
<head>
	<!--<title>Page Title</title> -->
</head>
<body>

	<h1>LOGGERD IN!!</h1>
	<p>paper_page.php.</p>
	
	<?php	
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "testDB";

		try {
		  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $lala = $_POST['paperTitle'];
		  echo $_POST['paperTitle'];
		  echo "<br>";echo "<br>";
		  $stmt = $conn->prepare("SELECT paperContent FROM papers WHERE paperTitle='$lala'");
		  $stmt->execute();

		  // set the resulting array to associative
		  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		  //foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) 
		  foreach(($stmt->fetchAll()) as $v)
		  {
			echo $v["paperContent"];
		  }
		  
		} catch(PDOException $e) {
		  echo "Error: " . $e->getMessage();
		}
		$conn = null;

	?>
	
	<input type="button" onclick="location.href='login.html';" value="Log out">
</body>
</html>