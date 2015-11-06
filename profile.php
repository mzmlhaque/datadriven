<?php
if(isset($_SESSION['user']) && $_SESSION['user'] !=null){
    require_once('person.php');
}else
{
    echo "<script>alert(\"You are not allowed to see this Please log in first\")</script>";
    echo("<script>location.href='login.php'</script>");
}
?>
