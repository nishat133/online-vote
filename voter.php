
  <?php
   include('adsession.php');
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
  <div class="content"> <h1> Voter Information </h1>
  
  </div>
	<div class="page-wrap">
	
    <div class="conatiner">
	<div class="header">
	<img src="image/5.jpg" class="img-responsive" alt="Responsive image" width="100%" >
	
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
      <a class="navbar-brand" href="adlog.php">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
       
        <li class="active"><a href="view_voter.php">  View Voter <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="del_voter.php">  Delete Voter <span class="sr-only">(current)</span></a></li>
   
		<li class="active"><a href="voterup.php"> voter pending <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="votres.php"> Result <span class="sr-only">(current)</span></a></li>
        
        <li class="active"><a href="reset.php"> Reset List <span class="sr-only">(current)</span></a></li>
        
		<li class="active"><a href="logout.php"> Log out <span class="sr-only">(current)</span></a></li>
        
       
      </ul>
      <form class="navbar-form navbar-right" action="search_voter.php" method="POST">
        <div class="form-group">
          <input type="text" class="form-control" name="search_main" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default" name="search">Search</button>
      </form>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
	<div class="row">
				<div class="col-md-6 col-md-offset-2">
					<form action="ladv.php" method="post" enctype="multipart/form-data" >
					  
					  <div class="form-group">
						<label for="Name">Voters Name</label>
						<input type="text" class="form-control" name="voter_name" placeholder="  " required maxlength="30">
					  </div>
					  <div class="form-group">
						<label for="Name">User Name</label>
						<input type="text" class="form-control" name="user_name" placeholder="  " required>
					  </div>
					   <div class="form-group">
						<label for="id">Password</label>
						<input type="password" class="form-control" name="password" placeholder="" required>
					  </div>
					  
					  <div class="form-group">
						<label for="password">voters Id</label>
						<input type="text" class="form-control" name="voter_id" placeholder=" " required>
					  </div>
					  
					  <div class="form-group">
						<label for="Mobile_Number">Mobile Number</label>
						<input type="number" class="form-control" name="mobile" placeholder=" " required>
					  </div>
					  <div class="form-group">
						<label for="DOB">Date Of Birth</label>
						<input type="date" class="form-control" name="dob" placeholder=" " required>
					  </div>
					  <div class="form-group">
						<label for="Gender">Gender</label>
						<input type="radio" name="choice_btn" value="male">Male 
	                   <input type="radio" name="choice_btn" value="female">Female
						
					  </div>
					  <div class="form-group">
						<label for="exampleInputFile">Voter iamge</label>
						<input type="file" name="image"  accept="image/*" required>
						<p class="help-block">Selet Photo </p>
						<input type="reset" value="Reset" > 
						<input type="submit" value="Register" name="submit1" >
						<input type="submit" value="Delete" name="value2" >
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



