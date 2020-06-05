<?php
include("connect.php");

$name = $_POST["voter_name"];
$id = $_POST["voter_id"];
$user = $_POST["user_name"];
$mobile = $_POST["mobile"];
$password = md5(md5($_POST["password"]));
$dob=$_POST["dob"];
$choice_btn=$_POST["choice_btn"];



		 $v1=rand(1111,9999);
   $v2=rand(1111,9999);
   
   
   $v3=$v1.$v2;
   
   $v3=md5($v3);
   
   
   $fnm=$_FILES["image"]["name"];
   $dst="./voter_image/".$v3.$fnm;
   $dst1="voter_image/".$v3.$fnm;
   move_uploaded_file($_FILES["image"]["tmp_name"],$dst);			
					
$sql = "INSERT INTO voter(voter_name,voter_id,user_name,password,mobile,image,dob,choice_btn) VALUES ('$name','$id','$user','$password','$mobile','$dob','$choice_btn','$dst1')";//exit();

if ($con->query($sql) === TRUE) {
    echo "Successfully";
} else {
    echo "Error: " ;
}

$con->close();

?>

