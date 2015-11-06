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

	$id=$_GET['id'];

        //echo $name.$age.$address.$designation.$salary.$email.$password;
        $sql="DELETE FROM employee WHERE id=$id;";
        //$sql="UPDATE employee SET name = '$name', age='$age',address'$address',designation='$designation',salary='$salary',email='$email',password='$password' WHERE id='$id'";
        $preparestatement=$dbcon->prepare($sql);
        $preparestatement->execute();	
        echo("<script>alert('Successfully Deleted..!!')</script>");
        echo("<script>location.href='admin_dashboard.php'</script>");



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
</body>
</html>
