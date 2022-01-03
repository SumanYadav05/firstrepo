<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Contact</a>
      </li>
    </ul>
   <!--  <span class="navbar-text">
        <a href="home">Logout</a>
    </span> -->
  </div>
</nav>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-3 s1">
            <img src="image/head.jpg" width="290px" height="280px">
        </div>
        <div class="col-md-6 s2">
        <p>CSS stands for Cascading Style Sheets. It is a language designed to specify the overall appearance of webpages as well as the appearance and structure of the text and elements such as images and buttons on webpages and their layout. Styles can be specified with CSS using internal style sheet definitions which are placed right into HTML/XHTML code or in external files.The tutorials in this section included CSS stands for Cascading Style Sheets. The tutorials in this section included CSS stands for Cascading Style Sheets. The tutorials in this section included CSS stands for Cascading Style Sheets. HTML/XHTML code or in external files.
        CSS stands for Cascading Style Sheets.HTML/XHTML code or in external files.
        CSS stands for Cascading Style Sheets.  
        </p> 
        </div>
        <div class="col-md-3 s3">
            <h2>Login</h2>
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" placeholder="Enter Username" id="name" Name="name">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="pwd">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <button type="submit" class="btn btn-primary">Cancel</button>
                <input type="hidden" name="act" value="admin_login">
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9 s2">
            <div class="main">
                <p>CSS stands for Cascading Style Sheets. It is a language designed to specify the overall appearance of webpages as well as the appearance and structure of the text and elements such as images and buttons on webpages and their layout. Styles can be specified with CSS using internal style sheet definitions which are placed right into HTML/XHTML code or in external files.
                </p> 
            </div>
        </div>  
    </div>  
    <div class="container py-5">
        <h2>Other Service</h2>
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <img src="image/img1.jpg" width="266px" height="250px"></img>
            </div>
            <div class="col-sm-4">
                <img src="image/img2.jpg" width="266px" height="250px"></img>
            </div>
            <div class="col-sm-4">   
                <img src="image/img3.jpg" width="266px" height="250px"></img>
            </div>
        </div>
    </div>
</div>
<?php
include('footer.php');
?>

<style>
.s2{
  
    line-height:2em;
    text-align:justify;
}
.s3{
    background:green;
    color:white; 
}
.footer1 {
  position: fixed;
  left: 0;
  bottom: 0;
   width: 100%;
   background-color:blue;
   color: white;
   text-align: center;
   height:50px;
   padding:5px;
}
</style>
</body>
</html>