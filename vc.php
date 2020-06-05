<?php

	include_once 'connect.php';
	//require 'vote.php';
	
	
		$res = $con->query("SELECT * from candidates");
		$count = $res->num_rows;
		while($row = $res->fetch_array())
		{
			if($count>0)
			{
				

							
							
							$id = $_POST['textv'];
							
							if($id == $row['id'])
							{
								$vote_count = $row['votes'];
								$vote_count++;
								$sql = "UPDATE `candidates` SET `votes`= $vote_count WHERE id = $id";
		
								$run = mysqli_query($con, $sql);
								
								echo $id;
							}
							
							//echo $id;
							
							
			}
		}
?>