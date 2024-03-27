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

	<div class="container2" id="container">
		<div class="form-container2 sign-in-container2">
			<form action="" method="POST">
				<h1>Admin Log in</h1>
				<input type="email" placeholder="Email" name="aemail" required/>
				<input type="password" placeholder="Password" name="apassword" required/>
				<button type="submit" name="login">Log In</button>
				<a href="login.php">Cancel</a>
			</form>
		</div>
	</div>

  	<script type="text/javascript" src="login.js"></script>
</body>
</html>

<?php

if(isset($_POST['login']))
{
    $aemail = $_POST['aemail'];
    $apassword = $_POST['apassword'];

    $qry = "SELECT * FROM admin WHERE aemail = '$aemail' AND apassword = '$apassword'";
    include 'includes/db.php';
    $result2 = mysqli_query($conn, $qry);
    include 'includes/closedb.php';
    if(mysqli_num_rows($result2) == 1)
    {
        // $row = mysqli_fetch_assoc($result);
        // header('location: admin/dashboard.php');
        $_SESSION['loggedin'] = true;
        $_SESSION['aemail'] = $aemail;
        echo '<script type="text/javascript"> alert("Logged In Successfully!"); window.location.assign("admin/dashboard.php"); </script>';
        exit();
    }
    else
    {
        echo "<script>alert('Invalid Email or Password!');</script>";
    }
}
?>
