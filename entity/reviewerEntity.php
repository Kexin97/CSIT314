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
		<h1>ReviewerEntity.php</h1>
		


		<?php
		class reviewerViewPaperDetail extends DBconn	//reviewerViewPaperDetail @@@@@@@@@@@@@
		{
			function __construct(){}
			
			function viewOthersReviewsAndRatings()
			{
				$stmt = $this->conn()->prepare("SELECT bidWinnerName, bidWinnerEmail, bidWinnerRating, bidWinnerReview
				FROM bidWinner 
				WHERE bidWinnerRating IS NOT NULL AND paperName=? AND bidWinnerEmail !=?");
				return $stmt;
			}
			
			function viewSelfReviewsAndRatings()
			{
				$stmt = $this->conn()->prepare("SELECT bidWinnerName, bidWinnerEmail, bidWinnerRating, bidWinnerReview
				FROM bidWinner 
				WHERE paperName=? AND bidWinnerEmail=?");
				return $stmt;
			}
			
			function addOrUpdateRating()
			{
				$stmt = $this->conn()->prepare("UPDATE bidwinner SET bidWinnerRating=?
				WHERE paperName=? AND bidWinnerEmail=?");
				return $stmt;
			}
			
			function addOrUpdateReview()
			{
				$stmt = $this->conn()->prepare("UPDATE bidwinner SET bidWinnerReview=?
				WHERE paperName=? AND bidWinnerEmail=?");
				return $stmt;
			}
		}
		
		class reviewerViewPaper extends DBconn	//reviewerViewPaper @@@@@@@@@@@@@
		{
			function __construct(){}
			
			function viewPapers()
			{
				$stmt = $this->conn()->prepare("SELECT paperName FROM bidWinner WHERE bidWinnerEmail=?");
				return $stmt;
			}
			
			function viewPaperID()
			{
				$stmt = $this->conn()->prepare("SELECT paper_ID,author FROM paper WHERE paper_name=?");
				return $stmt;
			}
			
			function viewAuthorNames()
			{
				$stmt = $this->conn()->prepare("SELECT account_fullName FROM account WHERE account_email=?");
				return $stmt;
			}
			
			function emailToNameConvertor($paperName)
			{
				global $stmt2;
				global $stmt3;
				
				$stmt2->execute([$paperName]);
				
				$authors = explode(",", $stmt2->fetch()["author"]);
				$authorString = "";
				foreach ($authors as $b)
				{
					$stmt3->execute([$b]);
					$name = $stmt3->fetch()["account_fullName"];
					$authorString .= $name . ", ";
				}

				$authorString = substr($authorString, 0, -2);

				return $authorString;
			}
		}
		
		class reviewerViewBid extends DBconn	//reviewerViewBid @@@@@@@@@@@@@
		{
			function __construct(){}
			
			function viewPapers()
			{
				$stmt = $this->conn()->prepare("SELECT paper_name, paper_ID FROM paper ");
				return $stmt;
				$stmt->execute();
				// foreach(($stmt->fetchAll()) as $v)
				// {
					// echo $v["paper_name"];
				// }
			}
			
			function viewReviewerBid()
			{
				$stmt = $this->conn()->prepare("SELECT count(*) FROM papersbid WHERE paperName=?");
				return $stmt;
			}
			
			function checkIfBidded()
			{
				$stmt = $this->conn()->prepare("SELECT account_email FROM papersbid WHERE paperName=?");
				return $stmt;
			}
			
			function setNumOfReviews()
			{
				$currentEmail = $_SESSION["reviewer_email"];
				$reviewer_addNoPaperReview = $_POST['reviewer_addNoPaperReview'];
				$stmt2 = $this->conn()->prepare("UPDATE account_profile SET maxReviewNumber='$reviewer_addNoPaperReview'
										WHERE account_email='$currentEmail' ");
				$stmt2->execute();

				// echo a message to say the UPDATE succeeded
				echo $stmt2->rowCount() . " records UPDATED successfully";
			}
			
			function addBid()
			{
				$stmt = $this->conn()->
				prepare("INSERT INTO papersbid (paperName, reviewerName, account_email)
					VALUES (?, ?, ?)");
				return $stmt;
				
				/* $sql = "INSERT INTO papersbid (paperName, reviewerName, account_email)
				VALUES ('author23', '$lala', '')";
				// use exec() because no results are returned
				$conn->exec($sql); */
				echo "New record inserted successfully";
			}
			
			function delBid()
			{
				$stmt = $this->conn()->prepare("DELETE FROM papersbid WHERE paperName=? AND account_email=?");
				return $stmt;
			}
		}
		
		class reviewerProfView extends DBconn	//reviewerProfView @@@@@@@@@@@@@
		{
			protected $accountEmail;
			
			function __construct()
			{
				$this->accountEmail = $_SESSION["reviewer_email"];
			}
			
			function viewProfile()
			{
				$stmt = $this->conn()->prepare("SELECT account_fullName, account_sex, account_age, account_contact 
						FROM account WHERE account_email=?");
				return $stmt;
			}
			
			function viewNumOfReviewsSet()
			{
				//$stmt = $this->conn()->prepare("SELECT maxReviewNumber 
				//		FROM account_profile WHERE account_email='$accountEmail'");
				$stmt = $this->conn()->prepare("SELECT maxReviewNumber 
						FROM account_profile WHERE account_email=?");
				return $stmt;
			}
		}
		
		class reviewerProfUpdate	//removed stuff @@@@@@@@@@@@@
		{
			function __construct(){}
			
			function updateProfile()
			{
				global $conn;
				
				if ($_SERVER["REQUEST_METHOD"] == "POST")
				{
					echo "<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
					echo $_POST['email'];
					
					//updateProfile();
					$currentEmail = $_SESSION["reviewer_email"];
					if (isset($_POST['email']) && ($_POST['email']) != "")
					{
						$newEmail = $_POST['email'];
						$stmt = $conn->prepare("UPDATE account_profile SET account_email='$newEmail'
												WHERE account_email='$currentEmail' ");
						$stmt2 = $conn->prepare("UPDATE account SET account_email='$newEmail'
												WHERE account_email='$currentEmail' ");
						$_SESSION["reviewer_email"] = $_POST['email'];
						$stmt->execute();
						$stmt2->execute();

						// echo a message to say the UPDATE succeeded
						echo $stmt->rowCount() . " records UPDATED successfully";
						$currentEmail = $_POST['email'];
					}
					if (isset($_POST['number']) && ($_POST['number']) != "")
					{
						$newNumber = $_POST['number'];
						$stmt2 = $conn->prepare("UPDATE account SET account_contact='$newNumber'
												WHERE account_email='$currentEmail' ");
						$stmt2->execute();

						// echo a message to say the UPDATE succeeded
						echo $stmt2->rowCount() . " records UPDATED successfully";
					}
					if (isset($_POST['password']) && ($_POST['password']) != "")
					{
						$newPassword = $_POST['password'];
						$stmt2 = $conn->prepare("UPDATE account SET account_password='$newPassword'
												WHERE account_email='$currentEmail' ");
						$stmt2->execute();

						// echo a message to say the UPDATE succeeded
						echo $stmt2->rowCount() . " records UPDATED successfully";
					}
					echo "<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
					echo $_POST["password"];
					echo "<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
					echo $_POST["number"];
				}
			}
		}
		
		class DBconn
		{
			function __construct(){}

			function conn()
			{
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "314_project";

				try 
				{
					$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
					// set the PDO error mode to exception
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					//echo "Connected successfully";
					return $conn;
				} 
				catch(PDOException $e) 
				{
					echo "Connection failed: " . $e->getMessage();
				}
			}
		}
		
		/* $servername = "localhost";		// CONNECTIONNNNNNNNNNNNNNNNNNN
		$username = "root";
		$password = "";
		$dbname = "314_project";

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
        }  */
		
        //echo "<br>";echo "<br>";
		
		/*try 
		{
			$stmt = $conn->prepare("SELECT paperName, authorName FROM papers ");
			$stmt->execute();

			// set the resulting array to associative
			//$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
			//foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) 
			$numOfRows = 0;
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
        /*} 
		catch(PDOException $e) 
		{
			echo $e->getMessage();
        }*/
		
		//include '../boundary/reviewer_viewPaperPage.html';
		
        //echo "<p>Copyright &copy; 1999-" . date("Y") . " W3Schools.com</p>";
		//$conn = null;
        ?>

	</body>
</html>