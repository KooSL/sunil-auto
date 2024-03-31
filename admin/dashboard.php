<?php
    include '../includes/db.php';
    if(isset($_SESSION['aemail'])){
        $email = $_SESSION['email'];
        $qry = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $qry);
        $row = mysqli_fetch_assoc($result);
        $u_name = $row['name'];
        $uid = $row['uid'];
        $parts = explode(' ', $u_name);
        $firstName = $parts[0];
    }

    $qry1= "SELECT * FROM customers";
    $qry2= "SELECT * FROM bookings";
    $qry3= "SELECT * FROM emergency_services";
    $qry4 = "SELECT COUNT(*) AS num_completed FROM bookings";
    $qry5 = "SELECT COUNT(*) AS num_inprogress FROM emergency_services";
    $qry6= "SELECT * FROM contacts";
    // $qry5= "SELECT * FROM contact";
 
    $customers = mysqli_query($conn, $qry1);
    $bookings = mysqli_query($conn, $qry2);
    $emergency_services = mysqli_query($conn, $qry3);
    // $doneservices = mysqli_query($conn, $qry4);
    // $inprogressservices = mysqli_query($conn, $qry5);
    $contacts = mysqli_query($conn, $qry6);
    // $queries = mysqli_query($con, $qry5);

    // if ($doneservices) {
    //     $row1 = mysqli_fetch_assoc($doneservices);
    //     $numCompletedServices = $row1['num_completed'];
    // } else {
    //     $numCompletedServices = 0; 
    // }

    // if ($inprogressservices) {
    //     $row2 = mysqli_fetch_assoc($inprogressservices);
    //     $numInprogressServices = $row2['num_inprogress'];
    // } else {
    //     $numInprogressServices = 0; 
    // }
    
    $rows_count_customers = mysqli_num_rows($customers);
    $rows_count_bookings = mysqli_num_rows($bookings);
    $rows_count_services = mysqli_num_rows($emergency_services);
    // $rows_count_doneservices = mysqli_num_rows($doneservices);
    // $rows_count_inprogressservices = mysqli_num_rows($inprogressservices);
    $rows_count_contact = mysqli_num_rows($contacts);
    // $rows_count_queries = mysqli_num_rows($queries);
?>





<?php include 'sidebar.php'; ?>


            <h1 class="text-3xl font-bold">Dashboard </h1>
            <hr class="my-3 h-1 bg-red-500">

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            
            <div class="bg-red-500 rounded-lg shadow-md p-6">
                <h2 class="text-lg font-semibold mb-4 text-white">Total Customers</h2>
                <p class="text-3xl font-bold text-white"><?php echo $rows_count_customers;?></p>
            </div>
           
            <div class="bg-red-500 rounded-lg shadow-md p-6">
                <h2 class="text-lg font-semibold mb-4 text-white">Total Bookings</h2>
                <p class="text-3xl font-bold text-white"><?php echo $rows_count_bookings;?></p>
            </div>
   
            <div class="bg-red-500 rounded-lg shadow-md p-6">
                <h2 class="text-lg font-semibold mb-4 text-white">Total Emergency Services</h2>
                <p class="text-3xl font-bold text-white"><?php echo $rows_count_services;?></p>
            </div>

            <div class="bg-red-500 rounded-lg shadow-md p-6">
                <h2 class="text-lg font-semibold mb-4 text-white">Contacts</h2>
                <p class="text-3xl font-bold text-white"><?php echo $rows_count_contact; ?></p>
            </div>

        </div>

    </div>

