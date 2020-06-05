<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin information</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/adlog.css" rel="stylesheet">
	

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="content">
  <h1> Edit Admin information </h1>
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
      <a class="navbar-brand" href="#">Home</a>
    </div>
       
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="election.php">  Election Informtion <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="voter.php"> voter Inormation<span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="candidate.php">  Candidate Information <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="candidate.php">  Admin Information <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="result.php"> Result <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="logout.php"> Log out <span class="sr-only">(current)</span></a></li>
        
       
         
          
		  
        
      </ul>
      <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
	       
			<div class="row">
			<div class="col-md-8 col-md-offset-2">
			<form class="form-horizontal">
  <div class="form-group">
    <label for="username" class="col-sm-2 control-label">User Name</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="username" placeholder="">
    </div>
  </div>
  <div class="form-group">

    <label for="Password" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="Password" placeholder="Password">
    </div>
  </div>
  </form>
	<form class="form-inline">
    <div class="form-group">
	
    <div class="col-md-2 col-md-offset-2">
      <button type="submit" class="btn btn-primary"> ADD New Admin </button>
    </div>
	</div>
    
	 <div class="form-group">
    <div class="col-md-2 col-md-offset-2">
      <button type="submit" class="btn btn-danger"> Delete Admin </button>
    </div>
    </div>
	 <div class="form-group">
    <div class="col-md-2 col-md-offset-2">
      <button type="submit" class="btn btn-info"> Update Admin </button>

    </div>
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