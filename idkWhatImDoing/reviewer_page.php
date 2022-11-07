<!DOCTYPE html>
<html>
<head>
	<!--<title>Page Title</title> -->
</head>
<body>

	<h1>LOGGERD IN!!</h1>
	<p>reviewer_page.php.</p>
	
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "testDB";

		try {
		  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		  $stmt = $conn->prepare("SELECT paperTitle FROM papers ");
		  $stmt->execute();

		  // set the resulting array to associative
		  //$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		  //foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) 
		  $numOfRows = 0;
		  foreach(($stmt->fetchAll()) as $v)
		  {
			//echo $v["paperTitle"];
			//echo "<br>";
		    $numOfRows++;
			$array1[$numOfRows] = $v["paperTitle"];
			echo $numOfRows, "  ";
			//echo $v["paperTitle"];
			echo "<br>";echo "<br>";
			echo $array1[$numOfRows];
			echo "<br>";echo "<br>";
		  }
		  
		  for ($x = 1; $x <= $numOfRows; $x++)
		  {
			  //$array1["
		  }
		  
		  
		} catch(PDOException $e) {
		  echo "Error: " . $e->getMessage();
		}

	?>
	
	<form method="post" action="paper_page.php">
		Paper list
		<select name="paperTitle">
			<?php
			  $atWhichRowNow = 1;
			  if ($numOfRows >= $atWhichRowNow)
			  {
				echo "$atWhichRowNow";
				$stmt = $conn->prepare("SELECT paperTitle FROM papers WHERE paperTitle='$array1[$atWhichRowNow]'");
				$stmt->execute();
				foreach(($stmt->fetchAll()) as $v){}
			  }
			?>
			<option value="<?php if ($numOfRows >= $atWhichRowNow) echo $v["paperTitle"];?>" checked>
			<?php if ($numOfRows >= $atWhichRowNow) echo $v["paperTitle"];$atWhichRowNow++;?>  2 </option>
			
			<?php
			  if ($numOfRows >= $atWhichRowNow)
			  {
				echo "$atWhichRowNow";
				$stmt = $conn->prepare("SELECT paperTitle FROM papers WHERE paperTitle='$array1[$atWhichRowNow]'");
				$stmt->execute();
				foreach(($stmt->fetchAll()) as $v){}
			  }
			?>
			<option value="<?php if ($numOfRows >= $atWhichRowNow) echo $v["paperTitle"];?>">
			<?php if ($numOfRows >= $atWhichRowNow) echo $v["paperTitle"];$atWhichRowNow++;?>  5 </option>
			
			<?php
			  if ($numOfRows >= $atWhichRowNow)
			  {
				echo "$atWhichRowNow";
				$stmt = $conn->prepare("SELECT paperTitle FROM papers WHERE paperTitle='$array1[$atWhichRowNow]'");
				$stmt->execute();
				foreach(($stmt->fetchAll()) as $v){}
			  }
			?>
			<option value="<?php if ($numOfRows >= $atWhichRowNow) echo $v["paperTitle"];?>">
			<?php if ($numOfRows >= $atWhichRowNow) echo $v["paperTitle"];$atWhichRowNow++;?>  2 </option>
			
			<?php
			  if ($numOfRows >= $atWhichRowNow)
			  {
				echo "$atWhichRowNow";
				$stmt = $conn->prepare("SELECT paperTitle FROM papers WHERE paperTitle='$array1[$atWhichRowNow]'");
				$stmt->execute();
				foreach(($stmt->fetchAll()) as $v){}
			  }
			?>
			<option value="<?php if ($numOfRows >= $atWhichRowNow) echo $v["paperTitle"];?>">
			<?php if ($numOfRows >= $atWhichRowNow) echo $v["paperTitle"];$atWhichRowNow++;?>   3 </option>
			
			<?php
			  if ($numOfRows >= $atWhichRowNow)
			  {
				echo "$atWhichRowNow";
				$stmt = $conn->prepare("SELECT paperTitle FROM papers WHERE paperTitle='$array1[$atWhichRowNow]'");
				$stmt->execute();
				foreach(($stmt->fetchAll()) as $v){}
			  }
			?>
			<option value="<?php if ($numOfRows >= $atWhichRowNow) echo $v["paperTitle"];?>">
			<?php if ($numOfRows >= $atWhichRowNow) echo $v["paperTitle"];$atWhichRowNow++;?></option>
			
			<?php
			  if ($numOfRows >= $atWhichRowNow)
			  {
				echo "$atWhichRowNow";
				$stmt = $conn->prepare("SELECT paperTitle FROM papers WHERE paperTitle='$array1[$atWhichRowNow]'");
				$stmt->execute();
				foreach(($stmt->fetchAll()) as $v){}
			  }
			?>
			<option value="<?php if ($numOfRows >= $atWhichRowNow) echo $v["paperTitle"];?>">
			<?php if ($numOfRows >= $atWhichRowNow) echo $v["paperTitle"];$atWhichRowNow++;?></option>
			
			<?php
			  if ($numOfRows >= $atWhichRowNow)
			  {
				echo "$atWhichRowNow";
				$stmt = $conn->prepare("SELECT paperTitle FROM papers WHERE paperTitle='$array1[$atWhichRowNow]'");
				$stmt->execute();
				foreach(($stmt->fetchAll()) as $v){}
			  }
			?>
			<option value="<?php if ($numOfRows >= $atWhichRowNow) echo $v["paperTitle"];?>">
			<?php if ($numOfRows >= $atWhichRowNow) echo $v["paperTitle"];$atWhichRowNow++;?></option>
		</select> <br/>
		
		<input type="submit" value="Select">
		
	</form>
	
	<?php
		$conn = null;
	?>
	<input type="button" onclick="location.href='login.html';" value="Log out">
</body>
</html>