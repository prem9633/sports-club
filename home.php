<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>




<html>
    <head>
        <title>home page</title>
        <link rel="stylesheet" type="text/css"href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    </head>
    
    <a class="float-right" href="logout.php">LOGOUT</a>
     <h1>  welcome<br><?php  echo $_SESSION['username'];?></h1>
    
</html>