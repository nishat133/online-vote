<?php
  session_start();
  if(!isset($_SESSION['vid'])){
    header('location: index.php');
  }
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> Candidate List</title>

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
		table
		{
			width:60%;
			height: auto;
			text-align:center;
			margin-bottom:100px;
		}
		th{
			text-align:center;
		}
	</style>
  </head>
  <body>
  <div class="content"><h1> Candidate list </h1>
  
  </div>
	<div class="page-wrap">
	
    <div class="conatiner">
	<div class="header">
	<img src="image/nishat1.jpg" class="img-responsive" alt="Responsive image" width="100%" >
	
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
        <li class="active"><a href="canlist.php">  View Candidate List <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="updatevoter.php"> Update profile <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="barcode.php">  Go to Vote <span class="sr-only">(current)</span></a></li>
        
        <li class="active"><a href="logout.php"> Log out <span class="sr-only">(current)</span></a></li>
       
        
      </ul>
      
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
</div>

<div>
<center>
<table border='1' >
	<tr>
		<th>SL</th>
		<th>Candidte Id</th>
		<th>Name</th>
		
	</tr>
<tr>
		<th>1</th>
		<th> 110 </th>
		<th> Rafi Rahman </th>
		
	</tr>

<?php
    $SL = 0;
    include_once 'connect.php';
  //require 'vote.php';
    $res = $con->query("SELECT * from candidates order by votes desc");
    $count = $res->num_rows;
    
    while($row = $res->fetch_array())
    {
      if($count>0)
      { 
              
              
              //echo "$row['name']";
              //echo "Name : ".$row['name']."  "."Vote_Amount : ".$row['votes']."<br>" ;
              $SL++;
              
              ?>
              
              
                <tr>
                  <td><?php  echo  $SL ?></td>
                  <td><?php echo $row['candidate_id'] ?></td>
                  <td><?php echo $row['name']  ?></td>
                  
                </tr>
              
              
              <?php
              
              
      }
    }
    
    //include 'res.php';
    
?>


</table>
</center>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>