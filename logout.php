<?php
/**
 * Created by PhpStorm.
 * User: rajesh
 * Date: 9/10/15
 * Time: 5:08 PM
 */
session_start();
session_destroy();
echo("<script>alert(\"Loged Out\");</script>");
echo("<script>location.href='index.php'</script>");
?>