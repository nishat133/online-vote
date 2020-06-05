<?php
  session_start();
  if(!isset($_SESSION['vid'])){
    header('location: index.php');
  }
?>

<?php
if(isset($_SERVER['HTTP_REFERER'])) {
    
}

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Voter information</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/adlog.css" rel="stylesheet">
	

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	
	.vote{
	margin-top:30px;
	}
	</style>
	
  </head>
  <body>
  <div class="content">
  <h1> <marquee>  You can UPDATE Your informtion here </marquee></h1>
  </div>
	<div class="page-wrap">
	
    <div class="conatiner">
	<div class="header">
	<img src="image/2.jpg" class="img-responsive" alt="Responsive image" width="100%" >
	
	</div>
	</div>
	
	<div class="navigation">
	<!-- starts navigation here-->
	
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="userlog.php">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="canlist.php">  View Candidate List <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="updatevoter.php"> Update profile <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="barcode.php">  Go to Vote <span class="sr-only">(current)</span></a></li>
        
        <li class="active"><a href="logout.php"> Log out <span class="sr-only">(current)</span></a></li>
       
        
      </ul>
        
       
         
          
		  
        
      </ul>
      
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
	<div class="well">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-2">
					<form action="upvoter.php" method="post" enctype="multipart/form-data" >
					  
					  <div class="form-group">
						<label for="Name">Voters Name</label>
						<input type="text" class="form-control" name="voter_name" placeholder="Type Voters Name Here">
					  </div>
					  <div class="form-group">
						<label for="Name">User Name</label>
						<input type="text" class="form-control" name="user_name" placeholder="Type Voters user Name Here">
					  </div>
					   <div class="form-group">
						<label for="id">Password</label>
						<input type="password" class="form-control" name="password" placeholder="Type  password Here">
					  </div>
					  
					  <div class="form-group">
						<!--<label for="password">voters Id</label>
						<input type="text" class="form-control" name="voter_id" placeholder="provide voter id"> -->
						
					  </div>
					  
					  <div class="form-group">
						<label for="password">Mobile Number</label>
						<input type="number" class="form-control" name="mobile" placeholder=" ">
					  </div>
					  <div class="form-group">
						<label for="DOB">Date Of Birth</label>
						<input type="date" class="form-control" name="dob" placeholder=" Example : " required>
					  </div>
					  <div class="form-group">
						<label for="Gender">Gender</label>
						<input type="radio" name="choice_btn" value="male">Male 
	                   <input type="radio" name="choice_btn" value="female">Female
						
					  </div>
					  
					  <div class="form-group">
						<label for="exampleInputFile">Voter iamge</label>
						<input type="file" name="image"  accept="image/*">
						<p class="help-block">Selet Photo </p>
						<input type="reset" value="Reset" > 
						<input type="submit" value="Register" name="submit1" >
						
					  </div>
					</form>
				</div>
			</div>
			
			
		
	
	
		</div>
	</div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>



