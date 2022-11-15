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

		
			
		
		$lala = new reviewerProfUpdate();
		$lala->updateProfile();
		
		header("Location: ../boundary/reviewer_profile.php");
		//include '../boundary/reviewer_viewDetailUpdatePaperPage.html';
		
        //echo "<p>Copyright &copy; 1999-" . date("Y") . " W3Schools.com</p>";
		//$conn = null;
        ?>

	</body>
</html>