<?php
//session_start();
//echo "The value is:".$_SESSION['fname'].$_SESSION['name'];
error_reporting(0);
$id = $_GET['id'];

include('pdo_connection.php');
include('database_config.php');
$db_user =$database_user;
$db_pass =$databse_pass;
$db_name=$database_name;
$dbcon=$connection_object->connection('localhost',$db_user,$db_pass,$db_name);

$sql="SELECT * FROM employee WHERE id='$id'";
$data = $dbcon->query($sql);

$row = $data->fetch(PDO::FETCH_ASSOC);

//print_r($row);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Employee from</title>
    <style>
        .total {
            width: 450px;
            margin: 0 auto;
            background: #ddd;
            padding: 50px;
        }

        input {
            background: #fff;
            padding: 8px;
            width: 100%;
            border: 1px solid #ccc;
            color: #222;
            font-weight: 300;
            margin-bottom:5px;
        }
    </style>
</head>

<body>
<div class="total">
    <form action="update.php" method="post">
	

        <input type="hidden" name="id" value="<?php echo $row['id']?>">
		Name: <br>
        <input type="text" placeholder="Name" name="name" required value="<?php echo $row['name']?>">
		Age: <br>
        <input type="text" placeholder="Age" name="age" required value="<?php echo $row['age']?>">
		Address: <br>
        <input type="text" placeholder="Address" name="address" required value="<?php echo $row['address']?>">
		Designation: <br>
        <input type="text" placeholder="Degignation" name="designation" required value="<?php echo $row['designation']?>">
		Salary: <br>
        <input type="text" placeholder="Sallary" name="salary" value="<?php echo $row['salary']?>">
		Email: <br>
        <input type="email" placeholder="Email" name="email" required value="<?php echo $row['email']?>">
		Password: <br>
        <input type="password" placeholder="Password" name="password" required value="<?php echo $row['password']?>">
        <input type="submit" name="update" value="Update">
    </form>
    <a href="user_data.php" target="_blank" style="text-decoration: none;">Back</a>
</div>
</body>

</html>
