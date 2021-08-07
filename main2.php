<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
<title>
</title>
<link rel="stylesheet"href="main2.css">


<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<header class="header">
    <nav class="navbar navbar-style">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle"data-toggle="collapse" data-target="#micon">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    
                    



                </button>
                
                <a href=""><img class="logo"src="sports.jpg"></a>
            </div>
            <div class="collapse navbar-collapse" id="micon">
                <ul class="nav navbar-nav navbar-right">
                
                
                <li><a href="#">Home</a></li>
                <li><a href="#">clubs</a>
                <ul>
                <li><a href="club1.html">cricket and hockey</a></li>
                <li><a href="club2.html">basketball and football</a></li>
                <li><a href="club3.html">badminton and volleyball</a></li>
                
                
                </ul>
                <li><a href="index.html">booking </a>
                </li>
                
                <li><a href="aboutme.html">contact us</a></li>
                <a class="float-right" href="logout.php">LOGOUT</a>
                
                    
                
                
                
                </div>
    </div>
</div>
</nav>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



<div class="container">
    <div class="row">
<div class="col-sm-6">
    <h1 class="heading">sports club</h1>
    <h1>  welcome<br><?php  echo $_SESSION['username'];?></h1>
    

</div>
<div class="col-sm-6">
<br>
<br>
<br>
<br>
<br>
<br>




    <img src="raina.jpg" class="img-responsive">
</div>
</div>
    <br>
<div class="container">
    <div class="row">
<div class="col-sm-6">
    
    
    
    <iframe width="560" height="315" src="https://www.youtube.com/embed/i2yhyaNb4ac" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</div>
<div class="col-sm-6">
    
    
    <iframe width="560" height="315" src="https://www.youtube.com/embed/1YuN3POoNnQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
    </div>
</div>
</header>

    











</body>


</html>