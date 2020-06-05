<?php

include "adlog.php";

function all_blog_info(){
	$db_connect=mysqli_connect('localhost','root','');
		
		if($db_connect){
			//echo "database conneted";
			$db_select=mysqli_select_db($db_connect,'online vote');
		}
		else{
			die('database is not connectedd'.mysqli_error($db_connect));
		}
		
		$sql="SELECT * from adlog";
		if(mysqli_query($db_connect,$sql)){
			
			$query_result=mysqli_query($db_connect,$sql);
			return $query_result; 
		}
		
		else {
			die('query problem'.mysqli_error($db_connect));
		}
	
}
$query_result=all_blog_info();

if(isset($_GET['status'])){
	$admin_id=$_GET['admin_id'];
	
	function delete_form($admin_id){
		$db_connect=mysqli_connect('localhost','root','');
		
		if($db_connect){
			//echo "database conneted";
			$db_select=mysqli_select_db($db_connect,'online vote');
		}
		else{
			die('database is not connectedd'.mysqli_error($db_connect));
		}
		
		$sql="DELETE from adlog where admin_id='$admin_id'";
		if(mysqli_query($db_connect,$sql)){
		header('referesh:1,location:view_admin.php');
			echo "delete successfully ";
		}
		else{
			die('quey error'.mysqli_error($db_connect));
		}
		
	}
	
	delete_form($admin_id);
}

?>
<html>
	<body>
		<style>
		table
		{
			width:60%;
			height: auto;
			text-align:center;
			margin-bottom:50px;
			cellpadding:5px;
		}
		th{
			text-align:center;
			size:20px;
			color:green;
		}
	</style>

			<form>
			<center>
				<table border='1'>
					<tr>
						<th> Admin ID </th>
						<th> User Name</th>
						
						<th> Password </th>
					
						
						<th> Image </th>
						<th> Action </th>
						
						
					</tr>
					<?php  while($blog_info=mysqli_fetch_array($query_result)){ ?>
					<tr>
						<td> <?php echo $blog_info['admin_id']; ?> </td>
						<td> <?php echo $blog_info['username']; ?> </td>
						<td> <?php echo $blog_info['password']; ?> </td>
						
						
						
						<td> <img src="<?php echo $blog_info['image']; ?>" style="width:120px;height:100px;"> </td>
						
									
						
						
						
						
						
						<td><a href="edit_admin.php?admin_id=<?php echo $blog_info['admin_id'];?>" class="btn btn-primary"> EDIT</a>
						<a href="?status=delete&&admin_id=<?php echo $blog_info['admin_id'];?>"class="btn btn-danger"> Delete</a></td>
						
						 
						
					</tr>
					<?php }?>
				</table>
				</center>
			</form>
	</body>
</html>