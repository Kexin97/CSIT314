<?php 
include 'upload.php';
?>

<html>
<head>
</head>
<body>
<div>
<?php if(!empty($statusMsg)){ ?>
	<p class="status"><?php echo $statusMsg;?> </p>
	<?php }?>
	<form action="upload.php" method="post" enctype="multipart/form-data">
    Select Image File to Upload:
    <input type="file" name="file">
    <input type="submit" name="submit" value="Upload">
</form>
</div>
<div>

<?php
// Include the database configuration file
include 'dbConfig.php';

// Get images from the database
$query = $conn->query("SELECT * FROM images ORDER BY uploaded_on DESC");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["file_name"];
?>
    <img src="<?php echo $imageURL; ?>" alt="" />
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?>

</div>
</body>
</html>