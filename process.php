<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Welcome to Datadriven Website</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,100,900,900italic,400italic,700,300italic,300' rel='stylesheet' type='text/css'>
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<section>
    <nav role="navigation" id="main-navbar" class="navbar navbar-default navbar-fixed-top navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button data-target="#nav-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                    <span class="sr-only">Toggled navbar</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php"><img class="navbar-left" alt="" src="images/logo.png"></a>
            </div>

            <div id="nav-collapse" class="collapse menu navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">Home</a></li>
                    <?php
                    if(isset($_SESSION['rank']) && $_SESSION['rank'] =='admin'){
                        echo "<li><a href=\"admin/index.php\">Dashboard</a></li>";
                    }
                    else{
                        echo" ";
                    }

                    ?>

                    <li><a href="profile.php">profile</a></li>
                    <?php
                    if(isset($_SESSION['user']) && $_SESSION['user'] !=null){
                        echo "<li><a href=\"logout.php\">Logout</a></li>";

                    }else
                    {
                        echo "<li><a href=\"login.php\">login</a></li>
                    <li><a href=\"signup.php\">Register</a></li>";
                    }

                    ?>



                </ul>
            </div>
        </div>
    </nav>
</section>
<?php
error_reporting(0);
session_start();
$_SESSION['email_page2']=$_GET['email'];
/**
 * Created by PhpStorm.
 * User: rajesh
 * Date: 9/30/15
 * Time: 10:40 AM
 */
include('pdo_connection.php');
include('database_config.php');
$db_user =$database_user;
$db_pass =$databse_pass;
$db_name=$database_name;
$dbcon=$connection_object->connection('localhost',$db_user,$db_pass,$db_name);

if(isset($_POST['register']))
{

    $fname=$_POST['first_name'];
    $lname=$_POST['last_name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $crimes=$_POST['crimes'];
    $password=$_POST['password'];
    $dob=$_POST['dob'];
    $picture=$_POST['picture'];
    if(!empty(trim($_POST['name'])) || !empty(trim($_POST['salary'])))
    {
        //echo $name.$age.$address.$designation.$salary.$email.$password;
        $sql="INSERT INTO user(fname, lname, email, address, crimes, password, dob, picture, rank) VALUES ('$fname','$lname', '$email' , '$address','$crimes','$password','$dob', '$picture','$rank')";
        $preparestatement=$dbcon->prepare($sql);
        $preparestatement->execute();
        echo("<script>alert('Successfully saved..!!')</script>");
        echo("<script>location.href='login.php'</script>");

    }
    else
    {

        echo("<script>alert('Sorry.! You put some field empty!')</script>");
        echo("<script>location.href='index.php'</script>");
    }
}
else
{

    echo("<script>alert('something went wrong')</script>");
    echo("<script>location.href='index.php'</script>");
}
?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <small class="text-center">&copy; Copyright: International Mafia Don- 2015.</small>
            </div>
        </div>
    </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>