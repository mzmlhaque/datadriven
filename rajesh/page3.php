<?php
/**
 * Created by PhpStorm.
 * User: rajesh
 * Date: 10/25/15
 * Time: 11:01 AM
 */
  error_reporting(0);
session_start();
$email=$_SESSION['email_page2'];
echo $email;
?>