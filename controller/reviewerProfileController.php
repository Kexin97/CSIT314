<!DOCTYPE html>
<?php
/*$cookie_name = "cookie_1";
$cookie_value = "chocolate_cookie";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
*/
//session_start();
?>
<html>
	<head>
		<!-- <title>lallalaaaaaaaaaaaaaaaaaaaaaa</title>
		la &nbsp; la
		<hr/> -->
	</head>
	<body>
		<!-- <h1>reviewerProfileController.php</h1> -->
		


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
		$viewProfileObj = new reviewerProfView();
		$stmt = $viewProfileObj->viewProfile();
		$stmt2 = $viewProfileObj->viewNumOfReviewsSet();
		//$stmt->execute();
		
		/* try 
		{
			$stmt = $conn->prepare("SELECT account_fullName, account_sex, account_age 
			FROM account WHERE account_email=");
			$stmt2 = $conn->prepare("SELECT maxReviewNumber FROM account_profile WHERE account_email=?");
			//$stmt->execute();

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
        /* } 
		catch(PDOException $e) 
		{
			echo $e->getMessage();
        }  */
		/*if ($_SERVER["REQUEST_METHOD"] == "POST")
		{
			echo "<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
			echo $_POST['email'];
			if (isset($_POST['email']) && ($_POST['email']) != "")
			{
				$currentEmail = $_SESSION["reviewer_email"];
				$newEmail = $_POST['email'];
				$stmt = $conn->prepare("UPDATE account_profile SET account_email='$newEmail'
										WHERE account_email='$currentEmail' ");
				$stmt2 = $conn->prepare("UPDATE account SET account_email='$newEmail'
										WHERE account_email='$currentEmail' ");
				$_SESSION["reviewer_email"] = $_POST['email'];
				//$stmt->execute();
				$stmt2->execute();

				// echo a message to say the UPDATE succeeded
				echo $stmt->rowCount() . " records UPDATED successfully";
			}
			echo "<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
			echo $_POST["password"];
			echo "<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
			echo $_POST["number"];
		}*/
		//include '../boundary/reviewer_viewDetailUpdatePaperPage.html';
		
        //echo "<p>Copyright &copy; 1999-" . date("Y") . " W3Schools.com</p>";
		//$conn = null;
        ?>

	</body>
</html>