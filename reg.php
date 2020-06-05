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
                <div class="col-md-6 col-md-offset-2">
                    <form action="ladv.php" method="post" enctype="multipart/form-data">

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
                            <input type="file" name="image" accept="image/*" required>
                            <p class="help-block">Selet Photo </p>
                            <input type="reset" value="Reset">
                            <input type="submit" value="Register" name="submit1">
                            <input type="submit" value="Delete" name="value2">
                        </div>
                    </form>
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
