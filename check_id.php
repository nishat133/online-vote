
<?php
  session_start();
  if(!isset($_SESSION['vid'])){
	  echo "<script> alert('Go bck index');</script>";
    header('location: index.php');
  }
  else
  {
	  $id =$_SESSION['vid'];
	   echo "<script> alert('Check_id');</script>";
	   echo $id;
  }
?>


<?php
//include('connect.php');
$con = mysql_connect("localhost", "root", "");
mysql_select_db('online vote',$con);

		
		
		$vid = $_POST['voter_id'];
		
		if($vid = $id){
		
		 $sql = "SELECT voter_id from voter where voter_id = '$vid'";
		$run = mysql_query($sql);
		

			$row = mysql_fetch_array($run);
				//$voted = $row['voted'];
				$voter_id = $row['voter_id'];//exit();
			
			
			if($voter_id!=$vid){
				
			echo("You r not a votter!");	
			}
			
			if($id!=$vid){
				echo ("sorry");
			}
			
			if($voter_id==$vid ){
				
			echo("You already voted and not allow to vote!");	
			}
			
			if($voter_id==$vid ){
			header("location:vote.php?voter_id=$voter_id");
			}
			
		}
		
		

?>