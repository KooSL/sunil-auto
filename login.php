<?php
	session_start();
?>

<!DOCTYPE html>
<head>
	<title>Sign Up Login Form</title>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" href="loginstyle.css">
</head>
<body>

    <!-- Navbar Start -->
    <!-- Navbar End -->

	<div class="container" id="container">
		<div class="form-container sign-up-container">
			<form action="" method="POST">
				<h1>Create Account</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<span>or use your email for registration</span>
				<input type="text" placeholder="Name" name="cname" required/>
				<input type="email" placeholder="Email" name="cemail" required/>
				<input type="password" placeholder="Password" name="password" required/>
				<input type="password" placeholder="Confirm Password" name="cpassword" required/>
				<button type="submit" name="signup">Sign Up</button>
			</form>
		</div>
		<div class="form-container sign-in-container">
			<form action="" method="POST">
				<h1>Log in</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<span>or use your account</span>
				<input type="email" placeholder="Email" name="cemail" />
				<input type="password" placeholder="Password" name="password"/>
				<a href="#">Forgot your password?</a>
				<button type="submit" name="login">Log In</button>
				<a href="admin-login.php">Admin Login</a>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Welcome Back!</h1>
					<p>Login to get connected!</p>
					<button class="ghost" id="signIn">Log In</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>Hello, Friend!</h1>
					<p>Start journey with <b> autoCC </b>!</p>
					<button class="ghost" id="signUp">Sign Up</button>
				</div>
			</div>
		</div>
	</div>

  	<script type="text/javascript" src="login.js"></script>
</body>
</html>

<?php
if(isset($_POST['signup'])){
    $cname = $_POST['cname'];
    $cemail = $_POST['cemail'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if($password == $cpassword){
        $password = md5($password);	
        $qry1 = "INSERT INTO customers (cname, cemail, cpassword) VALUES ('$cname', '$cemail', '$password')";
        include 'includes/db.php';
        $result1 = mysqli_query($conn, $qry1);
        include 'includes/closedb.php';
        if($result1){
            echo "<script>alert('Customer Registered Successfully');
            window.location.href = 'login.php';
            </script>";
        }else{
            echo "<script>alert('Customer Registration Failed')</script>";
        }
    }else{
        echo "<script>alert('Password and Confirm Password do not match')</script>";
    }
}

if(isset($_POST['login']))
{
    $cemail = $_POST['cemail'];
    $password = $_POST['password'];
    $password = md5($password);
    $qry2 = "SELECT * FROM customers WHERE cemail = '$cemail' AND cpassword = '$password'";
    include 'includes/db.php';
    $result2 = mysqli_query($conn, $qry2);
    include 'includes/closedb.php';
    if(mysqli_num_rows($result2) == 1)
    {
        // $row = mysqli_fetch_assoc($result);
        // header('location: admin/dashboard.php');
        $_SESSION['loggedin'] = true;
        $_SESSION['cemail'] = $cemail;
        echo '<script type="text/javascript"> alert("Logged In Successfully!"); window.location.assign("index.php"); </script>';
        exit();
    }
    else
    {
        echo "<script>alert('Invalid Email or Password!');</script>";
    }
}
?>
