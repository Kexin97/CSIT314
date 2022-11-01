<html>
	<head>
		<title>lallalaaaaaaaaaaaaaaaaaaaaaa</title>
		la &nbsp; la
		<hr/>
	</head>
	<body>
		<h1>lalalala</h1>
		

        <form method="post" action="<?php print $_SERVER['PHP_SELF'];?>">
          Name: <input type="text" name="fname">
          <input type="submit">
        </form>

		<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          // collect value of input field
          $name = $_POST['fname'];
          if (empty($name)) {
            echo "Name is empty";
          } else {
            echo $name;
          }
        }
        ?>

	</body>
</html>