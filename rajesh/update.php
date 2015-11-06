<?php
/**
 * Created by PhpStorm.
 * User: rajesh
 * Date: 9/30/15
 * Time: 10:40 AM
 */
  error_reporting(0);
include('pdo_connection.php');
include('database_config.php');
$db_user =$database_user;
$db_pass =$databse_pass;
$db_name=$database_name;
$dbcon=$connection_object->connection('localhost',$db_user,$db_pass,$db_name);

if(isset($_POST['update']))
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $age=$_POST['age'];
    $address=$_POST['address'];
    $designation=$_POST['designation'];
    $salary=$_POST['salary'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    //$error = false;
    if(!empty(trim($_POST['name'])) || !empty(trim($_POST['salary'])))
	
    {
        //echo $name.$age.$address.$designation.$salary.$email.$password;
        $sql="UPDATE employee SET name = '$name', age=$age,address='$address',designation='$designation',salary=$salary,email='$email',password='$password' WHERE id=$id;";
        //$sql="UPDATE employee SET name = '$name', age='$age',address'$address',designation='$designation',salary='$salary',email='$email',password='$password' WHERE id='$id'";
        $preparestatement=$dbcon->prepare($sql);
        $preparestatement->execute();	
        echo("<script>alert('Successfully update..!!')</script>");
        echo("<script>location.href='user_data.php'</script>");

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


//$id=$_GET['id'];
//$name=$_GET['name'];
//$age=$_GET['age'];
//$address=$_GET['address'];
//$designation=$_GET['designation'];
//$salary=$_GET['salary'];
//$email=$_GET['email'];
//$password=$_GET['password'];
//echo $name.$age.$address.$designation.$salary.$email.$password;

?>
<html>
<head>

</head>
<body>
<a href="page3.php"><input type="button" value="Page3"></a>
</body>
</html>
