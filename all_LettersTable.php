<?php
 require('./conn.php');


 $select= "SELECT * FROM letters";
 $query = mysqli_query($conn, $select);
 $data = mysqli_fetch_assoc($query);
// print_r($data) 
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
<link rel="stylesheet" href="./all_lettersTable.css">
  <title>Finance Business - Services</title>
  <link rel="stylesheet" href="./services.css">
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" integrity="sha384-xeJqLiuOvjUBq3iGOjvSQSIlwrpqjSHXpduPd6rQpuiM3f5/ijby8pCsnbu5S81n" crossorigin="anonymous">
<script src="./all_letterTable.js"></script>
  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-finance-business.css">
  <link rel="stylesheet" href="assets/css/owl.css">
   

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
            <li class="nav-item active">
              <a class="nav-link" href="./about.php">About Us</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="./services.php">Our Services</a>
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
          <h1>All Letters</h1>
          <span>We are over 20 years of experience</span>
        </div>
      </div>
    </div>
  </div>

 <!-- letters table view starts from here  -->
      <div>
        <div class="outerTable">
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

  <table id="myTable">
  <tr class="header">
    <th>Name</th>
    <th>Reference ID</th>
    <th>Subject</th>
    <th>Email</th>
    <th>Date</th>
    <th>View</th>
    <th>Send</th>
     

  </tr>
  <?php while($data=mysqli_fetch_array($query)) { ?>
  <tr>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['referenceID']; ?></td>
    <td><?php echo $data['subject']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['date']; ?></td>
    <td style="text-align:center;"><a href="#"> <i class="bi bi-eye-fill"></i> </a></td>
    <td>send</td>
    
  </tr>
  <?php
  }
  ?>
  
</table>

         </div>      

      </div>
 <!-- letters table view end  here  -->
  


  <div class="single-services">
    <div class="container">
      <div class="row" id="tabs">
        <div class="col-md-4">
          <ul>
            <li><a href='#tabs-1'>Market Analysis <i class="fa fa-angle-right"></i></a></li>
            <li><a href='#tabs-2'>Financial Data <i class="fa fa-angle-right"></i></a></li>
            <li><a href='#tabs-3'>Accounting Service <i class="fa fa-angle-right"></i></a></li>
            <li><a href='#tabs-4'>Overall Evaluation <i class="fa fa-angle-right"></i></a></li>
          </ul>
        </div>
        <div class="col-md-8">
          <section class='tabs-content'>
            <article id='tabs-1'>
              <img src="assets/images/single_service_01.jpg" alt="">
              <h4>Market Analysis</h4>
              <p>Vivamus sed feugiat elit. Pellentesque pretium, massa at placerat vehicula, neque turpis pulvinar
                tortor, eget convallis lorem odio non tortor. Donec massa est, fermentum sit amet felis ac, maximus
                luctus elit. Vivamus aliquet, dolor id imperdiet imperdiet, dui diam aliquet dui, a euismod metus enim
                ac velit. Vivamus eu tristique odio, vel tristique quam.
                <br><br>Proin eu molestie risus. Etiam suscipit pretium odio, at consectetur nisi. Sed ut dolor in augue
                cursus ultrices. Vivamus mauris turpis, auctor vel facilisis in, tincidunt vel diam. Sed vitae
                scelerisque orci. Nunc non magna orci. Aliquam commodo mauris ante.
              </p>
            </article>
            <article id='tabs-2'>
              <img src="assets/images/single_service_02.jpg" alt="">
              <h4>Financial Data</h4>
              <p>Sed ut dolor in augue cursus ultrices. Vivamus mauris turpis, auctor vel facilisis in, tincidunt vel
                diam. Sed vitae scelerisque orci. Nunc non magna orci. Aliquam commodo mauris ante, quis posuere nibh
                vestibulum sit amet
                <br><br>Pellentesque pretium, massa at placerat vehicula, neque turpis pulvinar tortor, eget convallis
                lorem odio non tortor. Donec massa est, fermentum sit amet felis ac, maximus luctus elit. Vivamus
                aliquet, dolor id imperdiet imperdiet, dui diam aliquet dui, a euismod metus enim ac velit. Vivamus eu
                tristique odio, vel tristique quam.
              </p>
            </article>
            <article id='tabs-3'>
              <img src="assets/images/single_service_03.jpg" alt="">
              <h4>Accounting Service</h4>
              <p>Mauris lobortis quam id dictum dignissim. Donec pellentesque erat dolor, cursus dapibus turpis
                hendrerit quis. Suspendisse at suscipit arcu. Nulla sed erat lectus. Nulla facilisi. In sit amet neque
                sapien. Donec scelerisque mi at gravida efficitur. Nunc lacinia a est eu malesuada. Curabitur eleifend
                elit sapien, sed pulvinar orci luctus eget.
                <br><br>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc
                vel ultrices nulla, ac tincidunt eros. Aenean quis tellus velit. Praesent pretium justo non auctor
                condimentum.
              </p>
            </article>
            <article id='tabs-4'>
              <img src="assets/images/single_service_04.jpg" alt="">
              <h4>Overall Evaluation</h4>
              <p>Integer vehicula sapien quis dolor efficitur, eget molestie eros tempus. Curabitur sollicitudin, tortor
                at suscipit volutpat, nisi arcu aliquet dui, vitae semper sem turpis quis libero. Quisque vulputate
                lacinia nisl ac lobortis. Ut ultricies maximus turpis, in sollicitudin ligula posuere vel.
                <br><br>Donec finibus maximus neque, vitae egestas quam imperdiet nec. Proin nec mauris eu tortor
                consectetur tristique. Etiam suscipit ante a odio consequat, in ornare lacus suscipit. Cras ac libero
                massa. Quisque rhoncus velit feugiat vulputate mollis. Donec nisl eros, malesuada sed nisi id,
                condimentum condimentum quam.
              </p>
            </article>
          </section>
        </div>
      </div>
    </div>
  </div>

  <!-- table sart -->

  <!-- table end-->

  <div class="partners">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="owl-partners owl-carousel">
            <div class="partner-item">
              <img src="assets/images/client-01.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Footer Starts Here -->
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

</html>