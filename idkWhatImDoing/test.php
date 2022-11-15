<!DOCTYPE html>
<?php
$cookie_name = "cookie_1";
$cookie_value = "chocolate_cookie";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

session_start();
?>
<html>
<head>
	<!--<title>Page Title</title> -->
</head>
<body>

	<h1>login page</h1>
	<p>lalala</p>
	
	
	
	<?php
		echo "<h1> HI PHP 
				WORLD</h1>";
        echo "<br>";echo "<br>";
		
		$_SESSION["favcolor"] = "green";
		$_SESSION["favanimal"] = "cat";
		
		//header("Location: testtest.php");
		
		
		$testVar_1 = "testing variable";
		echo "<br>";
		include 'lala.html';		//include is here <<<<<<<<<<<<<<<<<<
		echo "<br>";
		
		echo "<br>";
		lala();
		echo "<br>";
		
		echo $_SERVER['PHP_SELF'];
		$selfServerVar = $_SERVER['PHP_SELF'];
		echo "<br>";
		echo $selfServerVar;
		echo ' <form method="post" action="">
				<label for="username">Username:</label><br>
				<input type="text" id="username" name="username" placeholder="Johnny bravo"><br>
				<label for="Password">Password:</label><br>
				<input type="text" id="Password" name="Password" placeholder="qwerty123"><br><br>
				<input type="submit" value="Submit">
				</form> ';
		
		print "hohoho";
		echo "<br>";
		print_r ($_POST);
		echo "<br>";
		//if ($_POST)
		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			echo $_POST['username'] , " post username here <<<< ";
		}
		
		echo "<br>";
		echo 'lalahaha';
		
				echo '<select name="sl">
					<option value="en" checked>English</option>
					<option value="zh-CN">Chinese</option>
					<option value="ms">Malay</option>
					<option value="ja">Japanese</option>
					<option value="ko">Korean</option>
				</select> <br/>';
		
		function gen_one_to_three() {
			for ($i = 1; $i <= 3; $i++) {
				// Note that $i is preserved between yields.
				yield $i;
			}
		}

		$generator = gen_one_to_three();
		$array1 = [1, 2, 3];
		echo gettype($generator);
		echo "<br>";
		echo gettype($array1);
		echo "<br>";
		var_dump($generator);
		echo "<br>";
		var_dump($array1);
		echo "<br>";
		foreach ($generator as $value) {
			echo "$value" . "\n";
		}
		echo "<br>";
		echo "lala" , "\r\n" , "hoho" , "<br>";
		
		$foo = array(2 => 'a', 'foo' => 'b', 0 => 'c');
		$foo[1] = 'd';
		list($x, $y, $z) = $foo;
		var_dump($foo, $x, $y, $z);
		
		/*$result = $pdo->query("SELECT id, name FROM employees");
		while (list($id, $name) = $result->fetch(PDO::FETCH_NUM)) {
			echo "id: $id, name: $name\n";
		}*/
		
		/*echo "<br>";
		function test_global_ref() {
			global $obj;
			$new = new stdclass;
			$obj = &$new;
		}
		test_global_ref();
		var_dump($obj);
		echo "<br>";*/
		
		/*for($j=0; $j<3; $j++)
		{
			 if($j == 1)
				$a = 4;
		}
		echo "<br>";
		echo $a;
		echo "<br>";*/
		
		echo "<br>";
		class foo {
			var $bar = 'I am bar.';
			var $arr = array('I am A.', 'I am B.', 'I am C.');
			var $r   = 'I am r.';
		}

		$foo = new foo();
		$bar = 'bar';
		$baz = array('foo', 'bar', 'baz', 'quux');
		/*echo $foo->$bar . "\n";
		echo "<br>";
		echo $baz[1];
		echo "<br>";
		echo $foo->{$baz[1]} . "\n";
		echo "<br>";
		echo $foo->bar . "\n";
		echo "<br>";*/

		$start = 'b';
		$end   = 'ar';
		echo $start . $end , " start end <<< ";
		echo "<br>";
		echo $foo->{$start . $end} . "\n";
		echo "<br>";

		$arr = 'arr';
		echo $arr[0];
		echo "<br>";
		echo $foo->{$arr[1]} . "\n";
		echo "<br>";
		
		
		
		$lalavar = 4;	
		if ($lalavar == 3) {
	?>
	<h1>$lalavar is 3</h1>
		<?php } else {?>
	<h1>$lalavar is not 3</h1>
	<?php } ?>
</body>
</html>