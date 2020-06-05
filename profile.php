<?php 
include'connect.php';
include 'userlog.php';

$check= $_SESSION['vid'];
if(empty($check)){
	header('Location: user.php');
}

$sql_get_all = "select * from voter where voter_id = '$check'";

$result = $con->query($sql_get_all);

if($result){
	echo 'This Is your profile';
	while($ans = $result->fetch_assoc()){
		
		?>
		
		<div class="container">
				
				<html>
					<body>
					<style>
		table
		{
			width:60%;
			height: auto;
			text-align:center;
			margin-bottom:50px;
			margin-left:200px;
			cellpadding:5px;
		}
		th{
			text-align:center;
			size:20px;
			color:green;
		}
	</style>
	<table border='1' >
						<tr>
						<th> ID </th>
						<th> Voter Name</th>
						<th> User Name</th>
						<th> Password </th>
						<th> Voter ID </th>
						<th> Mobile Number </th>
						<th> Date Of Birth </th>
						<th> Gender </th>
						<th> Image </th>
						
						</tr>
						<tr>
							<td> <?php echo $ans['id']; ?> </td>
						<td> <?php echo $ans['voter_name']; ?> </td>
						<td> <?php echo $ans['user_name']; ?> </td>
						<td> <?php echo $ans['password']; ?> </td>
						<td> <?php echo $ans['voter_id']; ?> </td>
						<td> <?php echo $ans['mobile']; ?> </td>
						
						<td> <?php echo $ans['dob']; ?> </td>
						<td> <?php echo $ans['choice_btn']; ?> </td>
						<td> <img src="<?php echo $ans['image']; ?>" height="200px" width="150px">  </td>
						
						</tr>
					</table>
				</body>
				</html>
				
				</div>
				
				<?php 
	
}
	
}

?>






