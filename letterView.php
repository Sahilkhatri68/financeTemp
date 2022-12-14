<?php
include('./conn.php');
// include('./header.php');

    $get="SELECT * FROM letters ";
    $query = mysqli_query($conn, $get);
    $data = mysqli_fetch_assoc($query);



?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="TemplateMo">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet">

  <title>Finance Business - Services</title>
  <link rel="stylesheet" href="./letterView.css">
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-finance-business.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" integrity="sha384-xeJqLiuOvjUBq3iGOjvSQSIlwrpqjSHXpduPd6rQpuiM3f5/ijby8pCsnbu5S81n" crossorigin="anonymous">

 <!-- pdf converter cdn -->
 <script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
 <script src="./pdfConverter.js"></script>
 <!-- pdf converter cdn -->


</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->


  <header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <h2>Finance Business</h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
          aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./all_LettersTable.php">About Us</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="services.html">Our Services</a>
            </li>
            <?php 
              if(isset($_SESSION['loggedin'])==true)
              {
                echo "  <li class='nav-item'>
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

  <!-- Page Content -->
  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Your Approvals </h1>
          <span>We are over 20 years of experience</span>
        </div>
      </div>
    </div>
  </div>

  <!-- main content of page start from here  -->

  <div class="letterdiv">
  <div class="activitybtn">
    <button class="ATbtn"><i class="bi bi-file-earmark-pdf-fill"></i> &nbsp;Pdf &nbsp; </button>
    <button  class="ATbtn"><i class="bi bi-send-fill"></i>  &nbsp; Send   &nbsp; </button>
  </div>

    <div class="letterBox" id="letterbox">
            <div class="leter">
                <h4 style="text-align:center;">Approval letter</h4>
                <hr/>
            <div class="divReturnAddress" id="divReturnAddress">
            Lopes de Almeido, Evanildo<br/>
            <?php  echo $data['address'] ?>, <br/>
            <?php  echo $data['city'] ?> ,<br/>    
            <br/>
            <?php  echo $data['date'] ?>,
        </div>

        <div class="divSubject" style="margin-bottom:10px">
        Subject is  related to : <?php  echo $data['subject'] ?> 
        </div>

        <div class="divContents">
            <p>
                Sehr geehrte Frau Graf,
            </p>

            <p>
            The Vermont Board of Land Surveyors reviewed your request to approve continuing education credits for 40 courses sponsored by PDHcenter.com.

                You will find the committee???s approval and granting credits as requested by you in this approval letter. Additionally, there???s an exception of the ones noted as denied. We are pleased to inform you that your request to increase your credit limit has been approved. The new credit limit is $[Amount]. Additionally, along with this approval letter, you will find an exact copy of our credit terms. This document explains in detail the amount you will be billed every month.


            </p>
        </div>

        <div class="divAdios">
        <?php  echo $data['email'] ?>, <br/>
            <!-- Space for signature. -->
          
            
            <?php  echo $data['zip'] ?>, <br/>
            <?php  echo $data['name'] ?> <br/>
        </div>
            </div>
        </div>
    </div>

  <!-- main content of page end here  -->
  <div>
    <button onclick="generatePdf()">Download</button>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-3 footer-item">
          <h4>Finance Business</h4>
          <p>Vivamus tellus mi. Nulla ne cursus elit,vulputate. Sed ne cursus augue hasellus lacinia sapien vitae.</p>
          <ul class="social-icons">
            <li><a rel="nofollow" href="https://fb.com/templatemo" target="_blank"><i class="fa fa-facebook"></i></a>
            </li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-behance"></i></a></li>
          </ul>
        </div>
        <div class="col-md-3 footer-item">
          <h4>Useful Links</h4>
          <ul class="menu-list">
            <li><a href="#">Vivamus ut tellus mi</a></li>
            <li><a href="#">Nulla nec cursus elit</a></li>
            <li><a href="#">Vulputate sed nec</a></li>
            <li><a href="#">Cursus augue hasellus</a></li>
            <li><a href="#">Lacinia ac sapien</a></li>
          </ul>
        </div>
        <div class="col-md-3 footer-item">
          <h4>Additional Pages</h4>
          <ul class="menu-list">
            <li><a href="#">About Us</a></li>
            <li><a href="#">How We Work</a></li>
            <li><a href="#">Quick Support</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Privacy Policy</a></li>
          </ul>
        </div>
        <div class="col-md-3 footer-item last-item">
          <h4>Contact Us</h4>
          <div class="contact-form">
            <form id="contact footer-contact" action="" method="post">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                  </fieldset>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*"
                      placeholder="E-Mail Address" required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message"
                      required=""></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <div class="sub-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p>Copyright &copy; 2020 Financial Business Co., Ltd.

            - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Additional Scripts -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>
  <script src="assets/js/slick.js"></script>
  <script src="assets/js/accordions.js"></script>

  <script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) {                   //declaring the array outside of the
      if (!cleared[t.id]) {                      // function makes it static and global
        cleared[t.id] = 1;  // you could use true and false, but that's more typing
        t.value = '';         // with more chance of typos
        t.style.color = '#fff';
      }
    }
  </script>

</body>

</html