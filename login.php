<?php
error_reporting(0);
session_start();
include('pdo_connection.php');
include('database_config.php');
$db_user =$database_user;
$db_pass =$databse_pass;
$db_name=$database_name;
$dbcon=$connection_object->connection('localhost',$db_user,$db_pass,$db_name);
if(isset($_POST['login']))
{
$Email=$_POST['useremail'];
$Pass=$_POST['password'];
$sql="SELECT * FROM user WHERE email='$Email' AND password='$Pass'";
$data = $dbcon->query($sql);
$row = $data->fetch(PDO::FETCH_ASSOC);
trim($dbid = $row['id']);
trim($dbuser = $row['email']);
trim($dbpass = $row['password']);
trim($dbrank  = $row['rank']);
trim($dbfname  = $row['fname']);
trim($dblname  = $row['lname']);
trim($dbaddress  = $row['address']);
trim($dbdob  = $row['dob']);
trim($dbdob  = $row['dob']);
trim($dbpicture  = $row['picture']);
trim($dbcrimes  = $row['crimes']);
if ($dbpass != "" && $dbuser != "")
{
session_start();
$_SESSION['id'] = $dbid;
$_SESSION['user'] = $dbuser;
$_SESSION['rank'] = $dbrank;
$_SESSION['fname'] = $dbfname;
$_SESSION['lname'] = $dblname;
$_SESSION['address'] = $dbaddress;
$_SESSION['crimes'] = $dbcrimes;
$_SESSION['dob'] = $dbdob;
$_SESSION['picture'] = $dbpicture;

echo("<script>location.href='index.php'</script>");
}
else {
$string = ' Sorry! Try again.\n Username or Password is Wrong.';
echo "<script>alert(\"$string\")</script>";
echo("<script>location.href='login.php'</script>");
}
}
?>
<?php

$html = <<<login_template
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sign in</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="#" class="active" id="login-form-link">Login</a>
                            </div>

                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="login-form" action="" method="post" role="form" style="display: block;">
                                    <div class="form-group">
                                        <input type="text" name="useremail" id="username" tabindex="1" class="form-control" placeholder="User email" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group text-center">
                                        <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                        <label for="remember"> Remember Me</label>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="login" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-center">
                                                    <a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
    <script>
        $(function() {

            $('#login-form-link').click(function(e) {
                $("#login-form").delay(100).fadeIn(100);
                $("#register-form").fadeOut(100);
                $('#register-form-link').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });
            $('#register-form-link').click(function(e) {
                $("#register-form").delay(100).fadeIn(100);
                $("#login-form").fadeOut(100);
                $('#login-form-link').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });

        });

    </script>
</body>
</html>
login_template;

?>
<?php
    if(isset($_SESSION['user']) && $_SESSION['user'] !=null){
        echo "<script>alert(\"You are logged in\")</script>";
        echo("<script>location.href='index.php'</script>");

    }else
    {
        echo $html;

    }

?>
