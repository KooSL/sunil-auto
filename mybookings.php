<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AutoCare Connect</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


 


    <!-- Navbar Start -->
    <?php 
    include 'includes/header.php';
    ?>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">My Bookings</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">My Bookings</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <?php
    include 'includes/db.php';
    $email = $_SESSION['cemail'];
    $qry3 = "SELECT * FROM bookings WHERE bemail = '$email'";
    $result3 = mysqli_query($conn, $qry3);
    ?> 

<!-- Contact Start -->
<div class="container-xxl py-3">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Service bookings //</h6>
            </div>


        <div class="tables">
            <table class="table">
                <tr class="bg-danger text-white">
                    <th>BID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Type</th>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>

                <?php     
                    if(mysqli_num_rows($result3) == 0){
                        echo '<tr class="text-center"><td colspan="8">No Bookings Found</td></tr>';
                    }
                    else { 
                        while($row3 = mysqli_fetch_assoc($result3)){ 
                    ?>  
                    
                <tr>
                        <td><?php echo $row3['bid'];?></td>
                        <td><?php echo $row3['bname'];?></td>
                        <td><?php echo $row3['bemail'];?></td>
                        <td><?php echo $row3['btype'];?></td>
                        <td><?php echo $row3['bdate'];?></td>
                        <td><?php echo $row3['bdescription'];?></td>
                        <td><?php echo $row3['bstatus'];?></td>

                        <td>
                            <?php if($row3['bstatus'] == "Approved") { ?>
                                <a href="mybookings.php?decline_bid=<?php echo $row3['bid'];?>" class="text-indigo-600 hover:text-indigo-900 mr-2" onclick="return confirm('Are you sure to decline?')">Decline</a>
                            <?php } elseif($row3['bstatus'] == "Declined") { ?>
                                <a href="mybookings.php?approve_bid=<?php echo $row3['bid'];?>" class="text-green-600 hover:text-indigo-900 mr-2" onclick="return confirm('Are you sure to Approve?')">Approve</a>
                            <?php } else { ?>
                                <a href="#" class="text-green-600 hover:text-indigo-900 mr-2">Pending</a>
                            <?php } ?>
                        </td>
                    </tr>
                    <?php } ?>
                <?php } ?>
            </table>
        </div>
    </div>

        <?php
        include 'includes/db.php';
        $qry4 = "SELECT * FROM emergency_services  WHERE eemail = '$email'";
        $result4 = mysqli_query($conn, $qry4);
        ?> 

<!-- Contact Start -->
<div class="container-xxl py-3">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">//Emergency Service bookings //</h6>
            </div>


        <div class="tables">
            <table class="table">
                <tr class="bg-danger text-white">
                    <th>EID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Type</th>
                    <th>Vehicle Name</th>
                    <th>Vehicle Number</th>
                    <th>Vehicle Model</th>
                    <th>Service Option</th>
                    <th>Date</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>

                <?php     
                    if(mysqli_num_rows($result4) == 0){
                        echo '<tr class="text-center"><td colspan="8">No Bookings Found</td></tr>';
                    }
                    else { 
                        while($row4 = mysqli_fetch_assoc($result4)){ 
                    ?> 
                <tr>
                        <td><?php echo $row4['eid'];?></td>
                        <td><?php echo $row4['ename'];?></td>
                        <td><?php echo $row4['eemail'];?></td>
                        <td><?php echo $row4['econtact'];?></td>
                        <td><?php echo $row4['etype'];?></td>
                        <td><?php echo $row4['evname'];?></td>
                        <td><?php echo $row4['evnumber'];?></td>
                        <td><?php echo $row4['evmodel'];?></td>
                        <td><?php echo $row4['esoption'];?></td>
                        <td><?php echo $row4['esldate'];?></td>
                        <td><?php echo $row4['eaddress'];?></td>
                        <td><?php echo $row4['estatus'];?></td>

                        <td>
                            <?php if($row4['estatus'] == "Approved") { ?>
                                <a href="mybookings.php?decline_eid=<?php echo $row4['eid'];?>" class="text-indigo-600 hover:text-indigo-900 mr-2" onclick="return confirm('Are you sure to decline?')">Decline</a>
                            <?php } elseif($row4['estatus'] == "Declined") { ?>
                                <a href="mybookings.php?approve_eid=<?php echo $row4['eid'];?>" class="text-green-600 hover:text-indigo-900 mr-2" onclick="return confirm('Are you sure to Approve?')">Approve</a>
                            <?php } else { ?>
                                <a href="#" class="text-green-600 hover:text-indigo-900 mr-2">Pending</a>
                            <?php } ?>
                        </td>
                    </tr>
                <?php } ?>
                <?php } ?>
            </table>
        </div>
        </div>
    </div>
</div>
</div>
    


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

        <!-- Footer Start -->
        <?php 
    include 'includes/footer.php';
    ?>
    <!-- Footer End -->

</body>

</html>

<?php
if (isset($_GET['decline_bid'])) {
    $cancel_bid = $_GET['decline_bid'];
    $bstatus = "Declined";
    $qry5 = "UPDATE bookings SET bstatus = '$bstatus' WHERE bid = '$cancel_bid'";
    $result3 = mysqli_query($conn, $qry5);

} elseif (isset($_GET['decline_eid'])) {
    $decline_eid = $_GET['decline_eid'];
    $estatus = "Declined";
    $qry6 = "UPDATE emergency_services SET estatus = '$estatus' WHERE eid = '$decline_eid'";
    $result5 = mysqli_query($conn, $qry6);

} elseif (isset($_GET['approve_bid'])) {
    $approve_bid = $_GET['approve_bid'];
    $bstatus = "Approved";
    $qry7 = "UPDATE bookings SET bstatus = '$bstatus' WHERE bid = '$approve_bid'";
    $result7 = mysqli_query($conn, $qry7);

} elseif (isset($_GET['approve_eid'])) {
    $approve_eid = $_GET['approve_eid'];
    $estatus = "Approved";
    $qry8 = "UPDATE emergency_services SET estatus = '$estatus' WHERE eid = '$approve_eid'";
    $result8 = mysqli_query($conn, $qry8);

}
?>

