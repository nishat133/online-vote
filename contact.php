<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Contact Form</title>

<!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link href="css/adlog.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  
  </head>
  <body>
  
	

	<nav class="navbar navbar-dark navbar-expand-lg navbar-light bg-light" style="background-color:#553377!important">
  <a class="navbar-brand" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
     
      <a class="nav-item nav-link active" href="contact.php">Contact</a>
      <a class="nav-item nav-link" href="help.php">Help</a>
      
    </div>
  </div>
</nav>


    <div class="container mt-5">
		<div class="row">
			<div class="col-md-4">
				<h4 class="page-title text-center text-warning">
				Contact information
				</h4>
				
					<div class="table-responsive">
						<table class="table table-condensed">
							<tr>
								<td> <span class="glyphicon glyphicon-home">  </span> <strong> Address : </strong> </td>
								<td>
								<address>
								University of asia pacific </br>
								farmget,Dhaka,Bangladesh.
								
								</address>
							</td>	
							</tr>
							<tr>
								<td> <span class="glyphicon glyphicon-envelope">  </span> <strong> Email : </strong> </td>
								<td>
								<address>
								nishatnawrinuap@gmail.com </br>
								sinhat16201061@uap-bd.edu
								
								</address>
								<tr>
								<td> <span class="glyphicon glyphicon-earphone">  </span> <strong> Phone: </strong> </td>
								<td>
								<address>
								01759955456</br>
								0151-xxxxx
								
								</address>
							</td>	
							</tr>
							<tr>
								<td> <span class="glyphicon glyphicon-globe">  </span> <strong> facebook: </strong> </td>
								<td>
								<address>
								<a href="https://www.facebook.com/nishat.nawrin.1"> www.nishat.com  </a> </br>
								<a href="https://www.facebook.com/sinhat.halo"> www.sinhat.com </a>
								
								</address>
							</td>	
							</tr>
						
					</table>
					</div>
			</div>   <!--contact information-->
			<div class="col-md-6 offset-md-2">
			
			<h4 class="page-title text-center text-warning">
				Contact information
				</h4>
			
			<form action="">
			
			<div class="form-group">
				<label for="Name">Your Name</label>
					<input type="text" class="form-control" id="Name" placeholder=" ">
			</div>
			<div class="form-group">
				<label for="Email">Your Email</label>
					<input type="text" class="form-control" id="Email" placeholder="">
			</div>
			<div class="form-group">
				<label for="Subject">Your Subject</label>
					<input type="text" class="form-control" id="Subject" placeholder="Subject Here">
			</div>
			<div class="form-group">
				<label for="Subject">Your Message</label>
				<textarea class="form-control" rows="3"></textarea>
				</div>
				<div class="form-group">
				<button class="btn btn-info btn-block" type="submit">Send</button>
				</div>
			</form>
			</div>
			<style>
		textarea.form-control
           {
          resize:none;
            }
		</style>
		</div> <!--row fluid-->
	
	</div> <!--contact container-->
	


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>