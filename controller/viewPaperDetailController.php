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
		<h1>viewPaperDetailController.php</h1>
		


		<?php
		include '../entity/reviewerEntity.php';
		
		if (isset($_POST["paperID"]))
		{
			$_SESSION["paperID"] = $_POST["paperID"];	//session var3, paperID
		}
		if (isset($_POST["paperName"]))
		{
			$_SESSION["paperName"] = $_POST["paperName"];	//session var4, paperName
		}
			if (isset($_POST["authorNames"]))
		{
			$_SESSION["authorNames"] = $_POST["authorNames"];	//session var5, authorNames
		}
		
		$viewPaperDetailObj = new reviewerViewPaperDetail();
		$stmt = $viewPaperDetailObj->viewOthersReviewsAndRatings();
		
		$stmt2 = $viewPaperDetailObj->viewSelfReviewsAndRatings();
		$stmt2->execute([$_SESSION["paperName"], $_SESSION["reviewer_email"]]);
		$selfReview = $stmt->fetch()["bidWinnerReview"];
		$stmt2->execute([$_SESSION["paperName"], $_SESSION["reviewer_email"]]);
		$selfRating = $stmt->fetch()["bidWinnerRating"];
		// $stmt2->execute([$_SESSION["paperName"], $_SESSION["reviewer_email"]]);
		// $selfName = $stmt->fetch()["bidWinnerRating"];
		
		$stmt->execute([$_SESSION["paperName"], $_SESSION["reviewer_email"]]);
		echo "<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;IMPORTANT START HERE";
		foreach(($stmt->fetchAll()) as $v)
		{
			echo "<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
			echo $v["bidWinnerName"] . " " . $v["bidWinnerEmail"] . " " . $v["bidWinnerRating"] . " " . $v["bidWinnerReview"] . " ";
		}
		echo "<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
		echo $_SESSION["reviewer_email"] . " current logged in dude ";
		
		if (isset($_POST["review"]))
		{
			echo "<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;REVIEW HERE !!!!!!!!!!!!";
			echo $_POST["review"];
		}
		if (isset($_POST["rating"]))
		{
			echo "<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;RATING HERE !!!!!!!!!!!!";
			echo $_POST["rating"];
		}
		
		/* try 
		{
			
			echo "<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
			echo $_POST["paperName"];
			
			echo "<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
			if (!isset($_POST["paperName"]))
			{
				echo "<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
				echo "its empty@@@@@@@@@@@@@@@@@@@@@@@@@@@";
				$daPaperName = $_SESSION["paperDetailName"];
				
				if (!isset($_POST['review']))
				{
					
				}
			}
			else if ($_POST["paperName"] != null)
			{
				echo "<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
				echo "its NOT empty@@@@@@@@@@@@@@@@@@@@@@@@@@@";
				$_SESSION["paperDetailName"] = $_POST["paperName"];		//session var2 paperDetailName!
				$daPaperName = $_POST["paperName"];
			}
			//$daPaperName = 'paper1';
			echo "<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
			echo $daPaperName;
			//$stmt = $conn->prepare("SELECT paperName, authorName, review, rating, bidWinner FROM papers WHERE paperName='$daPaperName'");
			//$stmt->execute();
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
        } */
		
		//include '../boundary/reviewer_viewDetailUpdatePaperPage.html';
		
        //echo "<p>Copyright &copy; 1999-" . date("Y") . " W3Schools.com</p>";
		//$conn = null;
        ?>

	</body>
</html>