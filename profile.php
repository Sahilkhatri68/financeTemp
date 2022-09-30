 <?php
 include('./header.php');

 session_start();
    if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
        $select = "SELECT  * from users WHERE email='$email'  ";
        $query = mysqli_query($conn, $select);
        $data = mysqli_fetch_assoc($query);
    } else {
        header("location:./Login.php");
    }
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./profile.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" integrity="sha384-xeJqLiuOvjUBq3iGOjvSQSIlwrpqjSHXpduPd6rQpuiM3f5/ijby8pCsnbu5S81n" crossorigin="anonymous">
 </head>
 <body>
  <!-- Page Content -->
  <div class="page-heading header-text" style="background:none !important;  padding:0px !important;">
     
  </div>

    <div>
        <div class="profilebg"></div> 
         <div class="midcont">
            <div class="leftimg"><img class="userimg" src="./assets/images/person.webp"></img></div>
            <div class="rightitem">
                <div class="rightitemscont"><h1 style="font-weight:600; margin-top:22px;"><?php echo $data['name']; ?> </h1><div class="dots"> <a href="./logout.php" ><i class="bi bi-power" style="cursor:pointer; height:20px;width: 20px;font-size:20px;font-weight:500;"></i></a> </div>  </div>
              <div>  <p>Advisor and consultant </p></div>
              
                <div class="addressitems">
                    <div class=""  style="margin:10px; color:#897c7c"><i class="bi bi-geo-alt-fill"></i> &nbsp;Saint-West Coast Russia</div>
                    <div class=""  style="margin:10px; color:#897c7c"><i class="bi bi-facebook"></i></i> &nbsp;User64</div>
                    <div class=""  style="margin:10px; color:#897c7c" ><i class="bi bi-linkedin"></i> &nbsp;UserDev90</div>
                    <div class=""  style="margin:10px; color:#897c7c"><i class="bi bi-twitter"></i> &nbsp;User390020</div>
                </div>
            </div>
        </div>
        <div class="bottomdiv">
                <div class="leftbottom">  
                    <div class="phonediv">
                        <div><i class="bi bi-telephone-fill" style="color:#897c7c;"></i></div> 
                        <div style="margin-left:20px; color:#897c7c;"> +71 38294892848</div>
                    </div>
              
                    <div class="phonediv">
                        <div><i class="bi bi-telephone-fill" style="color:#897c7c;"></i></div>
                        <div style=" margin-left:20px;color:#897c7c;"> +71 38294892848</div>
                    </div>
                    <div class="phonediv">
                        <div><i class="bi bi-envelope"></i></div>
                        <div style=" margin-left:20px;color:#78cdd0;"><?php echo $data['email']; ?></div>
                    </div>
                    <div class="phonediv">
                        <div><h6>Reference_Id</h6> </div>
                        <div style=" margin-left:20px;color:#283dd0; font-weight:600;"><?php echo $data['referenceId']; ?></div>
                    </div>
                    <div class="buttondiv">
                        <button type="button" class="btn btn-primary">Documents</button>
                    </div>

                </div>
                <div class="rightbottom">
                <table>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Date</th>
      <th scope="col">Download</th>
      <th scope="col">View</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-label="id">1</td>
      <td data-label="type">Visa - 3412</td>
      <td data-label="Date">04/01/2016</td>
      <td data-label="download"><button class="dwnbtn"><i class="bi bi-download"></i> &nbsp;Download&nbsp;</button></td>
      <td data-label="edit"><button class="viewbtn"><i class="bi bi-eye-fill"></i></button></td>
      <td data-label="edit"><button class="editbtn"><i class="bi bi-pencil-square"></i></button></td>
      <td data-label="delete"><button class="delbtn"><i class="bi bi-trash3-fill"></i></button></td>
    </tr>
    <tr>
      <td data-label="id">2</td>
      <td data-label="type">Visa - 3412</td>
      <td data-label="Date">04/01/2016</td>
      <td data-label="download"><button class="dwnbtn"><i class="bi bi-download"></i> &nbsp;Download&nbsp;</button></td>
      <td data-label="edit"><button class="viewbtn"><i class="bi bi-eye-fill"></i></button></td>
      <td data-label="edit"><button class="editbtn"><i class="bi bi-pencil-square"></i></button></td>
      <td data-label="delete"><button class="delbtn"><i class="bi bi-trash3-fill"></i></button></td>
    </tr>
    <tr>
      <td data-label="id">3</td>
      <td data-label="type">Visa - 3412</td>
      <td data-label="Date">04/01/2016</td>
      <td data-label="download"><button class="dwnbtn"><i class="bi bi-download"></i> &nbsp;Download&nbsp;</button></td>
      <td data-label="edit"><button class="viewbtn"><i class="bi bi-eye-fill"></i></button></td>
      <td data-label="edit"><button class="editbtn"><i class="bi bi-pencil-square"></i></button></td>
      <td data-label="delete"><button class="delbtn"><i class="bi bi-trash3-fill"></i></button></td>
    </tr>
    <tr>
      <td data-label="id">4</td>
      <td data-label="type">Visa - 3412</td>
      <td data-label="Date">04/01/2016</td>
      <td data-label="download"><button class="dwnbtn"><i class="bi bi-download"></i> &nbsp;Download&nbsp;</button></td>
      <td data-label="edit"><button class="viewbtn"><i class="bi bi-eye-fill"></i></button></td>
      <td data-label="edit"><button class="editbtn"><i class="bi bi-pencil-square"></i></button></td>
      <td data-label="delete"><button class="delbtn"><i class="bi bi-trash3-fill"></i></button></td>
    </tr>
     
     
  </tbody>
</table>
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
              <li><a rel="nofollow" href="https://fb.com/templatemo" target="_blank"><i class="fa fa-facebook"></i></a></li>
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
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
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

 </body>
 </html>