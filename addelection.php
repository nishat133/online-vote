<?php
include("connect.php");
 

//$id = $_POST["id"];
$name = $_POST["name"];
$candidate_id=$_POST["candidate_id"];
//$votes = $_POST["votes"];
$fnm=$_FILES["image"]["name"];
   $dst="./elec_image/".$fnm;
   $dst1="elec_image/".$fnm;
   move_uploaded_file($_FILES["image"]["tmp_name"],$dst);

echo $name;

					
					
$sql = "INSERT INTO election (name,candidate_id,image) VALUES ('$name','$candidate_id','$dst1')";

if ($con->query($sql) === TRUE) {
    echo "Successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$con->close();

?>