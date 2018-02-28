<?php
session_start();
?>

<?php
extract($_POST);
$localname=$_SESSION["username"];

$target_dir = "uploads/";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
//echo"$imageFileType";
// Check if image file is a actual image or fake image

 if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["tmp_name"]). " has been uploaded.";
		echo "for username: $localname";
    } else {
	echo "Sorry, there was an error uploading your file.";}
	
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    
	if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } 
	
	else {
		
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
?>