<!DOCTYPE html>
<?php
/*$cookie_name = "cookie_1";
$cookie_value = "chocolate_cookie";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
*/
session_start();
?>
<html>
	<head>
		<!-- <title>lallalaaaaaaaaaaaaaaaaaaaaaa</title>
		la &nbsp; la
		<hr/> -->
	</head>
	<body>
		<h1>ProfileUpdateController.php</h1>
		


		<?php
		include '../entity/reviewerEntity.php';

		$viewBidObj = new reviewerViewBid();
		
		$stmt4 = $viewBidObj->addBid();
		if (isset($_POST['addBid']))
		{//the if checks  if num of papers set is empty
			//$viewBidObj->setNumOfReviews();
			echo "<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
			echo "add bid is set";
			$stmt4->execute([$_POST['addBid'], $_SESSION["reviewer_name"], $_SESSION["reviewer_email"]]);
			
			$stmt6 = $viewBidObj->setPaperStatus();
			$stmt6->execute([($_POST['addBid'])]);
			$_POST['addBid'] = NULL;
			echo "<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
			echo $_POST['addBid'];
		}
		
		$stmt5 = $viewBidObj->delBid();
		if (isset($_POST['delBid']))
		{//the if checks  if num of papers set is empty
			//$viewBidObj->setNumOfReviews();
			echo "<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
			echo "Delete bid is set";
			$stmt5->execute([$_POST['delBid'], $_SESSION["reviewer_email"]]);
			$_POST['delBid'] = null;
		}
		// $lala = new reviewerProfUpdate();
		// $lala->updateProfile();
		
		header("Location: ../boundary/reviewer_viewBid.php");
		//include '../boundary/reviewer_viewDetailUpdatePaperPage.html';
		
        //echo "<p>Copyright &copy; 1999-" . date("Y") . " W3Schools.com</p>";
		//$conn = null;
        ?>

	</body>
</html>