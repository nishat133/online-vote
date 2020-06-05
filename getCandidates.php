<?php
session_start();
$vid = $_SESSION['vid'];
if (!isset($vid)) {

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
</head>

<body>
    <div class="content">
        <h1> UAP ASSOCIATION VOTE </h1>
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
                        <a class="navbar-brand" href="userlog.php">Home</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="canlist.php"> View Candidate List <span class="sr-only">(current)</span></a></li>
                            <li class="active"><a href="updatevoter.php"> Update profile <span class="sr-only">(current)</span></a></li>
                            <li class="active"><a href="barcode.php"> Go to Vote <span class="sr-only">(current)</span></a></li>

                            <li class="active"><a href="logout.php"> Log out <span class="sr-only">(current)</span></a></li>


                        </ul>


                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
    </div>
    <!--connection-->





    <?php include 'connect.php'; ?>

    <!--getting the id and can id for update-->

    <?php
    if (isset($_GET['can_id'])) {
        $can_id = $_GET['can_id'];
        $sql_v = "update voter set voted = 1 where voter_id='$vid'";
        $result_v = $con->query($sql_v);
        if ($result_v) {
            $sql_c = "update candidates set votes = votes + 1 where candidate_id = '$can_id'";
            $result_c = $con->query($sql_c);
            if ($result_c) {
                echo "done voting";
                $check = 1;
            }
        }
    }


    ?>
    <!--for the candidaes info and vote button-->
    <?php

    //sql for check to the vote id done or not
    global $check;

    $sql_v_c = "SELECT voted from voter where voter_id='$vid'";
    $result_v_c = $con->query($sql_v_c);
    $row_v_c = $result_v_c->fetch_assoc();
    $voted_chekc = $row_v_c['voted'];
    if ($voted_chekc == 1 && $check == 0) {
        echo "you have alredy voted";
    } else {

    ?>
        <?php
        if ($check != 1) {

        ?>
            <div class="col-md-12">


                <?php

                $eid = $_GET["eid"];
                $sql_can = "SELECT * from candidates WHERE eid='$eid'";

                $can_run = $con->query($sql_can);
                if ($can_run) {
                    while ($row_can = $can_run->fetch_assoc()) {
                ?>

                        <div class="col-sm-3 well col">
                            <div class="col-sm-6">
                                <p><?php echo $row_can['name']; ?></p>
                                <a href="vote.php?can_id=<?php echo $row_can['candidate_id'];  ?>" class="btn btn-primary">Vote</a>
                            </div>
                            <div class="col-sm-4">
                                <img src="<?php echo $row_can['image']; ?>" class="img-responsive">
                            </div>

                        </div>
            <?php }
                }
            } ?>
        <?php } ?>

            </div>
</body>

</html>