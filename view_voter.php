<?php

include "adlog.php";

function all_blog_info()
{
	$db_connect = mysqli_connect('localhost', 'root', '');

	if ($db_connect) {
		//echo "database conneted";
		$db_select = mysqli_select_db($db_connect, 'online vote');
	} else {
		die('database is not connectedd' . mysqli_error($db_connect));
	}

	$sql = "SELECT * from voter";
	if (mysqli_query($db_connect, $sql)) {

		$query_result = mysqli_query($db_connect, $sql);
		return $query_result;
	} else {
		die('query problem' . mysqli_error($db_connect));
	}
}
$query_result = all_blog_info();

if (isset($_GET['status'])) {
	$voter_id = $_GET['voter_id'];

	function delete_form($voter_id)
	{
		$db_connect = mysqli_connect('localhost', 'root', '');

		if ($db_connect) {
			//echo "database conneted";
			$db_select = mysqli_select_db($db_connect, 'online vote');
		} else {
			die('database is not connectedd' . mysqli_error($db_connect));
		}

		$sql = "DELETE from voter where voter_id='$voter_id'";
		if (mysqli_query($db_connect, $sql)) {
			header('referesh:5,location:view_voter.php');
			echo "delete ";
		} else {
			die('quey error' . mysqli_error($db_connect));
		}
	}

	function approveUser($voter_id)
	{
		$db_connect = mysqli_connect('localhost', 'root', '');

		if ($db_connect) {
			//echo "database conneted";
			$db_select = mysqli_select_db($db_connect, 'online vote');
		} else {
			die('database is not connectedd' . mysqli_error($db_connect));
		}

		$sql = "UPDATE voter set status=1 where voter_id='$voter_id'";
		if (mysqli_query($db_connect, $sql)) {
			header('location:view_voter.php');
			echo "User Approved";
		} else {
			die('quey error' . mysqli_error($db_connect));
		}
	}

	if ($_GET['status'] == "delete") {
		delete_form($voter_id);
	}

	if ($_GET['status'] == "approve") {
		approveUser($voter_id);
	}
}

?>
<html>

<body>
	<style>
		table {
			width: 60%;
			height: auto;
			text-align: center;
			margin-bottom: 50px;
			cellpadding: 5px;
		}

		th {
			text-align: center;
			size: 20px;
			color: green;
		}
	</style>

	<form>
		<center>
			<table border='1'>
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
					<th> Status </th>
					<th> Action </th>


				</tr>
				<?php while ($blog_info = mysqli_fetch_array($query_result)) { ?>
					<tr>
						<td> <?php echo $blog_info['id']; ?> </td>
						<td> <?php echo $blog_info['voter_name']; ?> </td>
						<td> <?php echo $blog_info['user_name']; ?> </td>
						<td> <?php echo $blog_info['password']; ?> </td>
						<td> <?php echo $blog_info['voter_id']; ?> </td>
						<td> <?php echo $blog_info['mobile']; ?> </td>
						<td> <?php echo $blog_info['dob']; ?> </td>
						<td>
							<?php if ($blog_info['choice_btn'] == 'male') {
								echo "Male";
							} else {
								echo "Female";
							}
							?>

						</td>
						<td> <img src="<?php echo $blog_info['image']; ?>" style="width:100px;height:100px;"> </td>
						<td>
							<?php
							if ($blog_info['status'] == 0) {
								echo "Pending";
							} else {
								echo "Confirmed";
							}
							?>
						</td>

						<td>
							<a href="edit_voter.php?voter_id=<?php echo $blog_info['voter_id']; ?>" class="btn btn-primary"> EDIT</a>
							<a href="?status=delete&&voter_id=<?php echo $blog_info['voter_id']; ?>" class="btn btn-danger"> Delete</a>
							<?php if ($blog_info['status'] == 0) { ?>
								<a href="?status=approve&voter_id=<?php echo $blog_info['voter_id']; ?>" class="btn btn-success"> Approve</a></td>
							<?php } ?>

					</tr>
				<?php } ?>
			</table>
		</center>
	</form>
</body>

</html>