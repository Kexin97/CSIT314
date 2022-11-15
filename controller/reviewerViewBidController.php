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
		<h1>reviewerViewBidController.php</h1>
		


		<?php
		include '../entity/reviewerEntity.php';
		
		/*$servername = "localhost";
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
        }*/
        //echo "<br>";echo "<br>";
		try 
		{
			$stmt = $conn->prepare("SELECT paper_name, paper_ID FROM paper ");
			$stmt->execute();

			// set the resulting array to associative
			//$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
			//foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) 
			//$numOfRows = 0;
			/*foreach(($stmt->fetchAll()) as $v)
			{
				echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
				echo $v["paperName"];
				echo "<br>";
				$array1[$numOfRows] = $v["paperName"];
				
				echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
				echo $numOfRows, "  ";
				//echo $v["paperName"];
				echo "<br>";echo "<br>";
				echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
				echo $array1[$numOfRows];
				echo "<br>";echo "<br>";
				$numOfRows++;
			}*/
			//$stmt = $conn->prepare("SELECT paperName FROM papers WHERE paperName=?");
			//$stmt->execute();
			//echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
			//echo $stmt->fetch()["paperName"];
        } 
		catch(PDOException $e) 
		{
			echo $e->getMessage();
        }
		//include '../boundary/reviewer_viewDetailUpdatePaperPage.html';
		echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
		echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
		echo $_POST["reviewer_addNoPaperReview"];
		
		if (isset($_POST['reviewer_addNoPaperReview']) && ($_POST['reviewer_addNoPaperReview']) != "")
		{
			$currentEmail = $_SESSION["reviewer_email"];
			$reviewer_addNoPaperReview = $_POST['reviewer_addNoPaperReview'];
			$stmt2 = $conn->prepare("UPDATE account_profile SET maxReviewNumber='$reviewer_addNoPaperReview'
									WHERE account_email='$currentEmail' ");
			$stmt2->execute();

			// echo a message to say the UPDATE succeeded
			echo $stmt2->rowCount() . " records UPDATED successfully";
		}
        //echo "<p>Copyright &copy; 1999-" . date("Y") . " W3Schools.com</p>";
		//$conn = null;
        ?>

	</body>
</html>