<?php
include_once 'connect.php';
include "adlog.php";

?>
<?php
	if(isset($_GET['val'])){
		$val_id = $_GET['val'];
		
		$sql_n = "select * from voter3 where voter_id ='$val_id'";
			$res_n = $con->query($sql_n);
			$row_n = $res_n->fetch_assoc();
			
			$voter_name = $row_n['voter_name'];
			$user_name = $row_n['user_name'];
			$password = $row_n['password'];
			$mobile = $row_n['mobile'];
			$dob = $row_n['dob'];
			$choice_btn = $row_n['choice_btn'];
			
			$image = $row_n['image'];
			
			

		
		
		$sql = "UPDATE  voter set voter_name='$voter_name',user_name='$user_name',password='$password',mobile='$mobile',dob='$dob',choice_btn='$choice_btn',image='$image' where voter_id='$val_id'";
		$result = $con->query($sql);
		if($result){
			$sql_del  = "delete from voter3 where voter_id='$val_id'";
			$res_del = $con->query($sql_del);
		}
		
		else{
			echo "no";
		}
	}


 ?>

<center>
<table border='1' style="margin-bottom:10%" >
	<tr>
		<th>SL</th>
		<th>Voter Name</th>
		<th> User Name </th>
		<th> password </th>
		<th> Voter Id </th>
		<th> Mobile Number </th>
		<th> Image </th>
		<th colspan="2"> Confirmation </th>
	</tr>
<?php
		$SL = 0;
		
	//require 'vote.php';
		$res = $con->query("SELECT * from voter3 ");
		$count = $res->num_rows;
		
		$cm = 0;
		
		while($row = $res->fetch_array())
		{
			
				
							
							
							
							//echo "$row['name']";
							//echo "Name : ".$row['name']."  "."Vote_Amount : ".$row['votes']."<br>" ;
							$SL++;
							
							
							?>
							
							
								<tr>
									
									<td><?php echo $row['id'] ?></td>
									<td><?php echo $row['voter_name']  ?></td>
									<td><?php echo $row['user_name']  ?></td>
									<td><?php echo $row['password']  ?></td>
									<td><?php echo $row['voter_id']  ?></td>
									<td><?php echo $row['mobile']  ?></td>
									<!--<td><?php echo $row['image'] ?></td>-->
									<td><img src="<?php echo $row['image'] ?>" style="width:100px;height:100px;"></td>
									<td><a href="voterup.php?val=<?php echo $row['voter_id']; ?>" class="btn btn-success">Confirm</a>
									<a href="" class="btn btn-danger">delete</a></td>
									
									
								</tr>
								
							
							
							<?php
							
							
			
		}
		
		
		
		
		
?>
</table>


</center>
