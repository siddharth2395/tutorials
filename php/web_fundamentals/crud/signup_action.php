<?php
// echo exec('whoami');
// phpinfo()
$name=$email=$password="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password = $_POST['password'];
	echo "$name<br />$email<br />$password<br />";
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded.";
	} else {
	    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }
	}
	require('mysqli_connect.php');
	$img = $_FILES['fileToUpload']['name'];
	$q ="INSERT INTO user (name,email,password,img) VALUES('$name','$email',SHA1('$password'),'$img')";
	$result = mysqli_query($dbcon, $q);
	mysqli_close($dbcon);
}

?>
