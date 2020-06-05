<?php
session_start();
if (!isset($_SESSION['vid'])) {
  header('location: index.php');
}

include_once 'connect.php';
//require 'vote.php';
$res = $con->query("SELECT * from election");
$count = $res->num_rows;

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>User Home Page </title>

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
    <h1> user login page </h1>
  </div>
  <div class="page-wrap">

    <div class="conatiner">
      <div class="header">
        <img src="image/5.jpg" class="img-responsive" alt="Responsive image" width="100%">

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
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">View Election List <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <?php
                  while ($row = $res->fetch_array()) {

                  ?>
                    <li><a href="getCandidates.php?eid=<?php echo $row['candidate_id']; ?>"><?php echo $row['name']; ?></a></li>
                  <?php
                  }
                  ?>
                  <!-- <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Separated link</a></li> -->
                </ul>
              </li>
              <!-- <li class="active"><a href="electionlist.php"> View Election List<span class="sr-only">(current)</span></a></li> -->
              <li class="active"><a href="canlist.php"> View Candidate List <span class="sr-only">(current)</span></a></li>
              <li class="active"><a href="updatevoter.php"> Update profile <span class="sr-only">(current)</span></a></li>
              <li class="active"><a href="barcode.php"> Go to Vote <span class="sr-only">(current)</span></a></li>
              <li class="active"><a href="profile.php"> View Profile <span class="sr-only">(current)</span></a></li>
              <li class="active"><a href="election-result.php"> Result </a></li>

              <li class="active"><a href="logout.php"> Log out <span class="sr-only">(current)</span></a></li>


            </ul>


          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </div>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- <script src="js/bootstrap.min.js"></script> -->
</body>

</html>