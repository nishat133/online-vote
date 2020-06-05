<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   <title>Voting application</title>

   <!-- fonts -->
   <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">

   <!-- Bootstrap -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">



   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

   <!-- starts navigation here-->



   <nav class="navbar navbar-dark navbar-expand-lg navbar-light bg-light" style="background-color:#553377!important">
      <a class="navbar-brand" href="index.php">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-brand" id="navbar-brand">
         <div class="navbar-nav">

            <a class="navbar-brand" href="contact.php">Contact</a>
            <a class="navbar-brand" href="help.php">Help</a>
            <a class="navbar-brand" href="reg.php">Registration</a>

         </div>
      </div>
   </nav>

   <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img src="image/nishat.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
               <img src="image/2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
               <img src="image/3.jpg" class="d-block w-100" alt="...">
            </div>
         </div>
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
         </a>
      </div>

      <div class="content">
         <div class="row">
            <div class="col-md-12 col-md-offset-2">


               <?php
               $link = mysqli_connect("localhost", "root", "");
               mysqli_select_db($link, "online vote");
               // include "adlog.php";
               ?>

               <?php
               if (isset($_POST["submit1"])) {
                  $v1 = rand(1111, 9999);
                  $v2 = rand(1111, 9999);

                  $name = $_POST["voter_name"];
                  $id = $_POST["voter_id"];
                  $user = $_POST["user_name"];
                  $mobile = $_POST["mobile"];
                  $password = md5(md5($_POST["password"]));
                  $dob = $_POST["dob"];
                  $choice_btn = $_POST["choice_btn"];
                  $v3 = $v1 . $v2;

                  $v3 = md5($v3);


                  $fnm = $_FILES["image"]["name"];
                  $dst = "./voter_image/" . $v3 . $fnm;
                  $dst1 = "voter_image/" . $v3 . $fnm;
                  move_uploaded_file($_FILES["image"]["tmp_name"], $dst);


                  if (mysqli_query($link, "INSERT INTO voter(voter_name,voter_id,user_name,password,mobile,dob,choice_btn,image,status) VALUES ('$name','$id','$user','$password','$mobile','$dob','$choice_btn','$dst1',0)")) {
                     header("refresh:5; url=index.php");

                     echo '<div class="col-md-4 ar1">
              <h2> Successfully you added  a voter which voter ID is ' . $id . ' !!!!!</h2>
              <br>
            </div>';
                  } else {
                     header("refresh:5; url=index.php");
                     echo '<div class="col-md-4 ar1">
              <h2> Please  check u r information again !!!</h2>
              <br>
            </div>';
                  }
               }
               if (isset($_POST["value2"])) {
                  $id = $_POST["voter_id"];
                  if (mysqli_query($link, "delete from voter where voter_id ='$id'")) {
                     header("refresh:5; url=adlog.php");
                     echo "You successfully Removed this voter $id";
                  } else {
                     header("refresh:5; url=adlog.php");
                     echo "we can not find this Voter id You may check again or correct Voter Id";
                  }
               }

               ?>
            </div>
         </div>
      </div>
   </div>
   <footer>
      <div class="container-fluid">
         <p class="text-center"> VOTING SYSTEM <a href="#" Class="text-danger"> NISHAT & SINHAT </a> </p>

      </div>
   </footer>

   </div>

   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>