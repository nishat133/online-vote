<?php
include("connect.php");
 


$username = $_POST["username"];
$password = $_POST["password"];

$fnm=$_FILES["image"]["name"];
   $dst="./ad_image/".$fnm;
   $dst1="ad_image/".$fnm;
   move_uploaded_file($_FILES["image"]["tmp_name"],$dst);

echo $username;

					
					
$sql = "INSERT INTO adlog (username,password,image) VALUES ('$username','$password','$dst1')";

if ($con->query($sql) === TRUE) {
    echo "Successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$con->close();

?>