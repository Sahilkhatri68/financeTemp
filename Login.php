<?php
session_start();

require('./conn.php');
// login code 
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $select = "SELECT * FROM users WHERE email='$email' && password='$password'";
    $query = mysqli_query($conn, $select);
    $data = mysqli_fetch_assoc($query);

    if (isset($data)) {
        $_SESSION['email'] = $data['email'];


        header("location:./index.php");
    } else {
        echo '<script>alert("Wrong Data")</script>';
    }
}


// signup code 

if (isset($_POST['signup'])) {
	$email = $_POST['email'];
	$sql="SELECT * from users where (email='$email');";

      $res=mysqli_query($conn,$sql);

      if (mysqli_num_rows($res) > 0) {
        
        $row = mysqli_fetch_assoc($res);
        if($email==isset($row['email']))
        {
			 
            	echo "<script>alert('Email already exists')</script>";
        }
		
		}
else{
	
//do your insert code here or do something (run your code)
$name = $_POST['name'];
$email = $_POST['email'];	
$password = $_POST['password'];
$cpsw = $_POST['cpsw'];
$referenceID= strtoupper(bin2hex( random_bytes(4)));

if ($password == $cpsw) {
$insert = "INSERT INTO users(name,email,password,referenceId) VALUES('$name','$email','$password','$referenceID')";

$check = mysqli_query($conn, $insert);
header("<script>alert('User registerd successfuly')</script>");
} else {
echo "<script>alert('User registerd Error')</script>";
}
}
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./login.css">
</head>
<body>
<div id="container" class="container">
		<!-- FORM SECTION -->
		<div class="row">
			<!-- SIGN UP -->
			<div class="col align-items-center flex-col sign-up">
				<div class="form-wrapper align-items-center">
					<form class="form sign-up" method="POST">
						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input type="text" name="name"  autocomplete="off" placeholder="Name" Required>
						</div>
						<div class="input-group">
							<i class='bx bx-mail-send'></i>
							<input type="email" name="email" autocomplete="off" placeholder="Email" Required>
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" name="password" autocomplete="off" placeholder="Password" Required>
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" name="cpsw" placeholder="Confirm password" autocomplete="off" Required>
						</div>
						<button name="signup" type="submit">
							Sign up
						</button>
						<p>
							<span>
								Already have an account?
							</span>
							<b onclick="toggle()" class="pointer">
								Sign in here
							</b>
						</p>
                    </form>
				</div>
			
			</div>
			<!-- END SIGN UP -->
			<!-- SIGN IN -->
			<div class="col align-items-center flex-col sign-in">
				<div class="form-wrapper align-items-center">
					<form class="form sign-in" method="POST">
						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input type="text" autocomplete="off" name="email" placeholder="Email" Required>
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" autocomplete="off" name="password"  placeholder="Password" Required>
						</div>
						<button type="submit" name="login">
							Login
						</button>
						<p>
							<b>
								Forgot password?
							</b>
						</p>
						<p>
							<span>
								Don't have an account?
							</span>
							<b onclick="toggle()" class="pointer">
								Sign up here
							</b>
						</p>
                    </form>
				</div>
				<div class="form-wrapper">
		
				</div>
			</div>
			<!-- END SIGN IN -->
		</div>
		<!-- END FORM SECTION -->
		<!-- CONTENT SECTION -->
		<div class="row content-row">
			<!-- SIGN IN CONTENT -->
			<div class="col align-items-center flex-col">
				<div class="text sign-in">
					<h2>
						Welcome
					</h2>
	
				</div>
				<div class="img sign-in">
		
				</div>
			</div>
			<!-- END SIGN IN CONTENT -->
			<!-- SIGN UP CONTENT -->
			<div class="col align-items-center flex-col">
				<div class="img sign-up">
				
				</div>
				<div class="text sign-up">
					<h2>
						Join with us
					</h2>
	
				</div>
			</div>
			<!-- END SIGN UP CONTENT -->
		</div>
		<!-- END CONTENT SECTION -->
	</div>
</body>
<script src="./login.js"></script>
</html>