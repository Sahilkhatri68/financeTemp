<?php
include('./conn.php')



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>   
     <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

<title>Finance Business HTML5 Template</title>

<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Additional CSS Files -->
<link rel="stylesheet" href="assets/css/fontawesome.css">
<link rel="stylesheet" href="assets/css/templatemo-finance-business.css">
<link rel="stylesheet" href="assets/css/owl.css">

</head>
<body>
       

<header class="anotherHeader" >
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>Finance Business</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#top">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item"> 
                <a class="nav-link" href="./all_LettersTable.php">About Us</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link" href="./services.php">Our Services</a>
              </li>                          
              <?php 
              if(!(isset($_SESSION['loggedin'])==true))
              {
                echo "<li class='nav-item'>
                <a class='nav-link' href='./profile.php'>Profile</a>
              </li>";
              }   
              else{
                echo "<li class='nav-item'>
                <a class='nav-link' href='./Login.php'>Login</a>
              </li>";
              }      
              ?>    
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>   
     
</body>
</html>