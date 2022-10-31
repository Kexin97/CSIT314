<html>
<body>
<form action="" method="GET">
    <input type="submit" value="0" name="mybutton">
    <input type="submit" value="1" name="mybutton">
    <input type="submit" value="2" name="mybutton">
</form>

<?php 
   if (isset($_GET["mybutton"]))
   {
       echo $_GET["mybutton"];
   }
?>
</body>
</html>