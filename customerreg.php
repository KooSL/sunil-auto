<?php
if(isset($_POST['signup'])){
    $cname = $_POST['cname'];
    $cemail = $_POST['cemail'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if($password == $cpassword){
        $password = md5($password);
        $qry = "INSERT INTO customers (cname, cemail, password) VALUES ('$cname', '$cemail', '$password')";
        include 'includes/db.php';
        $result = mysqli_query($conn, $qry);
        include 'includes/closeconnection.php';
        if($result){
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
?>