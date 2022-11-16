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
		include '../entity/reviewerEntity.php';
		echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;" . $_SESSION["reviewer_email"];
		echo "<br>";
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
			//$emailName = $_SESSION["reviewer_email"];
			/*$stmt = $conn->prepare("SELECT paperName FROM bidWinner WHERE bidWinnerEmail=? ");	//display viewPaperPg
			$stmt->execute([$_SESSION["reviewer_email"]]);
			$stmt2 = $conn->prepare("SELECT paper_ID,author FROM paper WHERE paper_name=? ");
			$stmt3 = $conn->prepare("SELECT account_fullName FROM account WHERE account_email=? ");
			foreach(($stmt->fetchAll()) as $v)
			{
				echo "<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
				echo $v["paperName"];
				$stmt2->execute([$v["paperName"]]);
				echo "<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
				echo $stmt2->fetch()["author"]; 
				
				$stmt2->execute([$v["paperName"]]);
				
				$bidders = explode(",", $stmt2->fetch()["author"]);
				$bidderString = "";
				// foreach ($bidders as $b)
				// {
					// echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
					// $bidderString .= $b . ", ";
					// echo $b . "22222<br>";
				// }
				// echo "end of foreach<br>";
			}
			echo "<br>";
			echo "@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@BREAK OF THE CENTURY";
			echo "<br>";*/
			$viewPaperObj = new reviewerViewPaper();
			$stmt = $viewPaperObj->viewPapers();
			$stmt->execute([$_SESSION["reviewer_email"]]);
			
			$stmt2 = $viewPaperObj->viewPaperID();
			$stmt3 = $viewPaperObj->viewAuthorNames();
			// foreach(($stmt->fetchAll()) as $v)
			// {
				
			// }
			
			
			
			/* $stmt = $conn->prepare("SELECT paperName FROM bidWinner WHERE bidWinnerEmail=? ");	//display viewPaperPg
			$stmt->execute([$_SESSION["reviewer_email"]]);
			$stmt2 = $conn->prepare("SELECT paper_ID,author FROM paper WHERE paper_name=? ");
			$stmt3 = $conn->prepare("SELECT account_fullName FROM account WHERE account_email=? ");
			foreach(($stmt->fetchAll()) as $v)
			{
				// echo "<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
				// echo $v["paperName"];
				
				$paperArray[] = $v["paperName"];
				// $stmt2->execute([$v["paperName"]]);
				// echo "<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
				// echo $stmt2->fetch()["author"];
				$stmt2->execute([$v["paperName"]]);
				
				$idArray[] = $stmt2->fetch()["paper_ID"];
				//$_SESSION["idArray"] = $idArray;	//session var 3, ID array
				$stmt2->execute([$v["paperName"]]);
				
				$authors = explode(",", $stmt2->fetch()["author"]);
				$authorString = "";
				foreach ($authors as $b)
				{
					echo "<br><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
					$stmt3->execute([$b]);
					echo $stmt3->fetch()["account_fullName"];
					echo "  da acc full namee<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
					$stmt3->execute([$b]);
					$name = $stmt3->fetch()["account_fullName"];
					$authorString .= $name . ", ";
					echo $name . "22222<br>";
				}
				echo "end of foreach<br>";
				
				
				echo "<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;author string before substr ";
				echo $authorString;
				$authorString = substr($authorString, 0, -2);
				echo "<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;author string after substr ";
				echo $authorString;
				echo "<br>";
				
				$authorArray[] = $authorString;
			} */			//display viewPaperPg
			
			/* $stmt = $conn->prepare("SELECT account_fullName FROM account WHERE account_email=? ");	//old view paper pg
			$stmt->execute([$_SESSION["reviewer_email"]]);
			echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
			echo $stmt->fetch()["account_fullName"];
			
			$stmt->execute();
			$bidWinner = $stmt->fetch()["account_fullName"];
			$stmt = $conn->prepare("SELECT paperName, authorName FROM papers WHERE bidWinner ='$bidWinner'");	//old view paper pg
			$stmt->execute(); */

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
		
		//include '../boundary/reviewer_viewPaperPage.html';
		
        //echo "<p>Copyright &copy; 1999-" . date("Y") . " W3Schools.com</p>";
		//$conn = null;
        ?>

	</body>
</html>