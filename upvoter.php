<?php

include 'connect.php';
 session_start();
  $vid = $_SESSION['vid'];
  if(!isset($vid)){
	  
    header('location: index.php');
  }


$num = 0;

	if(isset($_GET['num']))
	{
		$num = $_GET['num'];
	}
	

	if(isset($_POST["submit1"]))
{
	
   $v1=rand(1111,9999);
   $v2=rand(1111,9999);
   
   $name = $_POST["voter_name"];
$vid = $_SESSION['vid'];   //$_SESSION[''];
$user = $_POST["user_name"];
$mobile = $_POST["mobile"];
$password = md5(md5($_POST["password"]));
$dob=$_POST["dob"];
$choice_btn=$_POST["choice_btn"];
   $v3=$v1.$v2;
   
   $v3=md5($v3);
   
   
   $fnm=$_FILES["image"]["name"];
   $dst="./voter_image/".$v3.$fnm;
   $dst1="voter_image/".$v3.$fnm;
   move_uploaded_file($_FILES["image"]["tmp_name"],$dst);


	   $sql = "INSERT INTO voter3(voter_name,voter_id,user_name,password,mobile,dob,choice_btn,image) VALUES ('$name','$vid','$user','$password','$mobile','$dob','$choice_btn','$dst1')";
	   $result = $con->query($sql);
	   if($result){
		   //header('Location: updatevoter.php');
		   header( "refresh:5; url=updatevoter.php" );
		   echo 'your request will send...';
	   }
}
   


?>