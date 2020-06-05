<?php
include 'adlog.php';


?>
<?php include 'connect.php'; ?>
 <?php
		if(isset($_POST['search'])){
			$search = $_POST['search_main'];
			//echo $search;
			$sql_search = "select * from voter where voter_id = '$search'";
			
			$result_get = $con->query($sql_search);
			if($result_get->num_rows){
				
				$voter_info = $result_get->fetch_assoc();
				
				//echo $voter_info['voter_name'];
				
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
							<td> <?php echo $voter_info['id']; ?> </td>
						<td> <?php echo $voter_info['voter_name']; ?> </td>
						<td> <?php echo $voter_info['user_name']; ?> </td>
						<td> <?php echo $voter_info['password']; ?> </td>
						<td> <?php echo $voter_info['voter_id']; ?> </td>
						<td> <?php echo $voter_info['mobile']; ?> </td>
						
						<td> <?php echo $voter_info['dob']; ?> </td>
						<td> <?php echo $voter_info['choice_btn']; ?> </td>
						<td> <img src="<?php echo $voter_info['image']; ?>" height="200px" width="150px">  </td>
						
						</tr>
					</table>
				</body>
				</html>
				</div>
				
				<?php 
				
				
				
				
			}
			else{
				echo " Sorry its not store  ";
				header('referesh:5,location:adlog.php');
			}
			
		}

   ?>