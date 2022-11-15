<html>
	<head>
		<title>lallalaaaaaaaaaaaaaaaaaaaaaa</title>
		la &nbsp; la
		<hr/>
		
		
		<style>
		table, th, td 
		{
		  border: 1px solid black;
		  border-collapse: collapse;
		}
		</style>
	</head>
	<body>
		<h1>lala.php</h1>
		

        <!-- <form method="post" action="<?php print $_SERVER['PHP_SELF'];?>">
          Name: <input type="text" name="fname">
          <input type="submit">
        </form -->
		<table>
		<?php 
		
		echo $_COOKIE[$cookie_name] , $_COOKIE[$cookie_name] , $_COOKIE[$cookie_name] , "<br>";
		
		echo '
		 <thead>
		  <tr>
		   
			<th>Company</th>
			<th>Contact</th>
			<th>Country</th>
		  
		  </tr>
		 </thead>
		 <tbody>
		  <tr>
			<td>Alfreds Futterkiste</td>
			<td>Maria Anders</td>
			<td>Germany</td>
		  </tr>
		  <tr>
			<td>Centro comercial Moctezuma</td>
			<td>Francisco Chang</td>
			<td>Mexico</td>
		  </tr> 
		  </tbody>
		  <tbody>
		  <tr>
			<td>Alfreds Futterkiste2</td>
			<td>Maria Anders2</td>
			<td>Germany2</td>
		  </tr>
		  <tr>
			<td>Centro comercial Moctezuma2</td>
			<td>Francisco Chang2</td>
			<td>Mexico2</td>
		  </tr> 
		 </tbody>
		';?>
		</table>

		<?php
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "testDB";

		try {
		  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  //$email = $_POST['email'];
		  //$password = $_POST['password'];
		  $rating = $_POST['rating'];
		  echo $_POST['rating'] , "@@@@@@@@@@@@@@@@";
		  echo "<br>";
		  $review = $_POST['review'];
		  echo $_POST['review'] , "@@@@@@@@@@@@@@@@";
		  echo "<br>";
		  $fname = $_POST['fname'];
		  echo $_POST['fname'] , "@@@@@@@@@@@@@@@@";
		  echo "<br>";
		  $lname = $_POST['lname'];
		  echo $_POST['lname'] , "@@@@@@@@@@@@@@@@";
		  echo "<br>";
		  
		  
		  
		  //$lalaName = "person2";
		  /*$stmt = $conn->prepare("SELECT email, password, userProfile FROM users WHERE email=?");
		  $personVar = "person2";
		  //$stmt->execute([$_POST['fname']]);
		  $stmt->execute([$personVar]);*/
		  
		  $personVar = $_POST['fname'];
		  $personVar = "person2";
		  $stmt = $conn->prepare("SELECT email, password, userProfile FROM users WHERE email='$personVar'");
		  //$stmt->execute([$_POST['fname']]);
		  $stmt->execute();
		  
		  echo $stmt->fetch()["password"] , "  password column here << ";
		  
		  echo "<br>";
		  $bidders = array("reviewer1", "reviewer2");
		  foreach ($bidders as $b)
		  {
			  $bidderString .= $b . ",";
			  echo $b . "11111<br>";
		  }
		  echo $bidderString;
		  echo "<br>";
		  $bidderString = substr($bidderString, 0, -1);
		  echo $bidderString;
		  echo "<br>";
		  $bidders = explode(",", $bidderString);
		  foreach ($bidders as $b)
		  {
			  $bidderString .= $b . ", ";
			  echo $b . "22222<br>";
		  }
		  //$stmt = $conn->prepare("UPDATE papers SET bidders='$bidders'
									//WHERE paperName='paper1' ");
									
		  $array[] = 5;
		  $array[] = 5;
		  $array[] = 3;
		  foreach ($array as $a)
		  {
			  echo $a;
		  }
		  // set the resulting array to associative
		  //$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		  //foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) 
		  //foreach(($stmt->fetchAll()) as $v)
		  //$v = $stmt->fetch();
		  //echo $v["password"];
		  //echo $stmt->fetch()["password"] , "  password column here << ";
		  
		} catch(PDOException $e) {
		  echo "Error: " . $e->getMessage();
		}
		
		function lala()
		{
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "testDB";

		
			  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			$stmt = $conn->prepare("SELECT email, password, userProfile FROM users WHERE email='$personVar'");
			echo "hohoho@@@@@@@@@@@@@@@@@@@@";
		}
		
		
		//$conn = null;
		
        echo "<p>Copyright &copy; 1999-" . date("Y") . " W3Schools.com</p>";
		//phpinfo();
		echo '<form method="post" action="lala.php">
          Name: <input type="text" name="selfPost">
          <input type="submit">
        </form> ';
		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			echo $_POST['selfPost'] , " self post here <<<< ";
		}
        ?>

	</body>
</html>