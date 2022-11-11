<!DOCTYPE html>
<?php
/*$cookie_name = "cookie_1";
$cookie_value = "chocolate_cookie";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

session_start();*/
?>
<html>
	<head>
		<!-- <title>lallalaaaaaaaaaaaaaaaaaaaaaa</title>
		la &nbsp; la
		<hr/> -->
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
			echo "<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
			echo $_POST["paperName"];
			$daPaperName = $_POST["paperName"];
			echo "<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
			echo $daPaperName;
			//$daPaperName = 'paper1';
			echo "<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
			echo $daPaperName;
			$stmt = $conn->prepare("SELECT paperName, authorName, review, rating FROM papers WHERE paperName='$daPaperName'");
			$stmt->execute();
			echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
			//echo $stmt->fetch()["review"];
			if ($stmt->fetch()["review"] == null)
			{
				echo "its nulllll";
				//echo $stmt->fetch()["paperName"];
			}
			//else if ($stmt->fetch()["review"] != null)
			{
				echo "its not nulllll";
				//echo $stmt->fetch()["paperName"];
			}
			//$stmt->execute();
			//echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
			//echo $stmt->fetch()["paperName"];
        } 
		catch(PDOException $e) 
		{
			echo $e->getMessage();
        }
		
		include '../boundary/reviewer_viewDetailUpdatePaperPage.html';
		
        //echo "<p>Copyright &copy; 1999-" . date("Y") . " W3Schools.com</p>";
		$conn = null;
        ?>

	</body>
</html>