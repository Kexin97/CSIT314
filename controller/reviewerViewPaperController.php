<!DOCTYPE html>
<?php
/*$cookie_name = "cookie_1";
$cookie_value = "chocolate_cookie";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

session_start();*/
?>
<html>
	<head>
		<title>lallalaaaaaaaaaaaaaaaaaaaaaa</title>
		la &nbsp; la
		<hr/>
	</head>
	<body>
		<h1>ReviewerViewPaperController.php</h1>
		


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
			//echo "Connected successfully";
        } 
		catch(PDOException $e) 
		{
			echo "Connection failed: " . $e->getMessage();
        }
        //echo "<br>";echo "<br>";
		try 
		{
			$stmt = $conn->prepare("SELECT paperTitle FROM papers ");
			$stmt->execute();

			// set the resulting array to associative
			//$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
			//foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) 
			$numOfRows = 0;
			foreach(($stmt->fetchAll()) as $v)
			{
			echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
			echo $v["paperTitle"];
			echo "<br>";
			$array1[$numOfRows] = $v["paperTitle"];
			
			echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
			echo $numOfRows, "  ";
			//echo $v["paperTitle"];
			echo "<br>";echo "<br>";
			echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
			echo $array1[$numOfRows];
			echo "<br>";echo "<br>";
			$numOfRows++;
			}
        } 
		catch(PDOException $e) 
		{
			echo $e->getMessage();
        }
		
		include '../boundary/reviewer_viewPaperPage.html';
		
        //echo "<p>Copyright &copy; 1999-" . date("Y") . " W3Schools.com</p>";

        ?>

	</body>
</html>