
<?php
    session_start();
    include '../includes/db.php';
    if(isset($_SESSION['email'])){
        $email = $_SESSION['email'];
        $qry = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $qry);
        $row = mysqli_fetch_assoc($result);
        $u_name = $row['name'];
        $uid = $row['uid'];
        $parts = explode(' ', $u_name);
        $firstName = $parts[0];
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=3.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
</head>
<body>


    <div class="flex">
        <nav class="h-screen bg-red-500 shadow w-60">
        <a href="../index.php" class="font-bold text-3xl mx-10 text-white"><i class="fa fa-car me-3"></i>autoCC</a>
        <div class="mt-4 pl-6 text-lg font-bold">
            <a href="dashboard.php" class="block p-4 hover:bg-white hover:text-black my-2 text-white">Dashboard</a>
            <a href="bookings.php" class="block p-4 hover:bg-white hover:text-black my-2 text-white">Bookings</a>
            <a href="emergency_services.php" class="block p-4 hover:bg-white hover:text-black my-2 text-white">Emergency Services</a>
            <a href="customers.php" class="block p-4 hover:bg-white hover:text-black my-2 text-white">Customers</a>
            <a href="contacts.php" class="block p-4 hover:bg-white hover:text-black my-2 text-white">Contacts</a>
            <a href="logout.php" class="block p-4 hover:bg-white hover:text-black my-2 text-white" onclick="return confirm('Are you sure to log out?')">logout</a>
        </div>
        </nav>
  

        
        <!-- For Content Part  -->
        <div class="p-4 flex-1">
            
        