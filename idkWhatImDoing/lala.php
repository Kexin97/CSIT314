<html>
	<head>
		<title>lallalaaaaaaaaaaaaaaaaaaaaaa</title>
		la &nbsp; la
		<hr/>
		
		
		<style>
		table, th, td 
		{
		  border: 1px solid black;
		  border-collapse: collapse;
		}
		</style>
	</head>
	<body>
		<h1>lala.php</h1>
		

        <!-- <form method="post" action="<?php print $_SERVER['PHP_SELF'];?>">
          Name: <input type="text" name="fname">
          <input type="submit">
        </form -->
		<table>
		<?php 
		
		echo $_COOKIE[$cookie_name] , $_COOKIE[$cookie_name] , $_COOKIE[$cookie_name] , "<br>";
		
		echo '
		 <thead>
		  <tr>
		   
			<th>Company</th>
			<th>Contact</th>
			<th>Country</th>
		  
		  </tr>
		 </thead>
		 <tbody>
		  <tr>
			<td>Alfreds Futterkiste</td>
			<td>Maria Anders</td>
			<td>Germany</td>
		  </tr>
		  <tr>
			<td>Centro comercial Moctezuma</td>
			<td>Francisco Chang</td>
			<td>Mexico</td>
		  </tr> 
		  </tbody>
		  <tbody>
		  <tr>
			<td>Alfreds Futterkiste2</td>
			<td>Maria Anders2</td>
			<td>Germany2</td>
		  </tr>
		  <tr>
			<td>Centro comercial Moctezuma2</td>
			<td>Francisco Chang2</td>
			<td>Mexico2</td>
		  </tr> 
		 </tbody>
		';?>
		</table>

		<?php
        echo "<p>Copyright &copy; 1999-" . date("Y") . " W3Schools.com</p>";
		//phpinfo();
        ?>

	</body>
</html>