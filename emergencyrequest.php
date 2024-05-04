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
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-2.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown"> </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">emergencyrequest</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- 404 Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">


                <div class="col-lg-6">
                    <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Book For Emergency Service</h1>
                        <form action="" method="POST" name="emgbooking" onsubmit="return validateForm()">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;" name="bname" required pattern="[a-zA-Z\s]+" title="Enter only letters and spaces">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <?php if(isset($_SESSION['cemail'])){ ?>
                                        <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;" name="bemail" value="<?php echo $_SESSION['cemail']; ?>" readonly required>
                                    <?php } else{ ?>
                                        <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;" name="bemail" required>
                                    <?php } ?> 
                                </div>

                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Contact Number" style="height: 55px;" name="bcontact" required maxlength="15" minlength="10">
                                </div>



                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;" name="btype" required>
                                        <option value="Emg. Request">Emg. Request</option>
                                    </select>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Vehicle Name" style="height: 55px;" name="bvname" required>
                                </div>                                
                                
                                <div class="col-12 col-sm-6">
                                    <input type="name" class="form-control border-0" placeholder="Vehicle Reg. Number" style="height: 55px;" name="bvnumber" required>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <input type="name" class="form-control border-0" placeholder="Vehicle Model" style="height: 55px;" name="bvmodel" required>
                                </div> 

                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;" name="bsoption" required>
                                        <option value="PickUp">PickUp</option>
                                        <option value="DropOff">DropOff</option>
                                    </select>
                                </div>

                                <div class="col-12 ">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="date"
                                            class="form-control border-0 datetimepicker-input"
                                            placeholder="Last Serviced Date" data-target="#date1" data-toggle="datetimepicker" style="height: 55px;" name="bsldate" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Address Details" name="baddress" required></textarea>
                                </div>

                            

                                <div class="col-12">
                                    <button class="btn btn-secondary w-100 py-3" type="submit" name="submit">Send Request</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->
        

    


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
    <script>
    function validateForm() {
        var date = document.forms["emgbooking"]["bsldate"].value;

        var parts = date.split('-');
        var year = parseInt(parts[0]);
        var month = parseInt(parts[1]);
        var day = parseInt(parts[2]);
        var today = new Date();
        var selectedDate = new Date(year, month - 1, day);
        if (selectedDate < today) {
            alert("Please enter a future date!");
            return false;
        }
            return true;
        }
	</script>

    <!-- Footer Start -->
    <?php 
        include 'includes/footer.php';
    ?>
    <!-- Footer End -->
</body>

</html>

<?php
if(isset($_POST['submit'])){
    $ename = $_POST['bname'];
    $eemail = $_POST['bemail'];
    $econtact = $_POST['bcontact'];
    $etype = $_POST['btype'];
    $evname = $_POST['bvname'];
    $evnumber = $_POST['bvnumber'];
    $evmodel = $_POST['bvmodel'];
    $esoption = $_POST['bsoption'];
    $esldate = $_POST['bsldate'];
    $eaddress = $_POST['baddress'];

        $qry = "INSERT INTO emergency_services (ename, eemail, econtact, etype, evname, evnumber, evmodel, esoption, esldate, eaddress) VALUES ('$ename', '$eemail', '$econtact', '$etype', '$evname', '$evnumber', '$evmodel', '$esoption', '$esldate', '$eaddress')";
        include 'includes/db.php';
        $result1 = mysqli_query($conn, $qry);
        include 'includes/closedb.php';
        if($result1){
            echo "<script>alert('Request Send Successfully');
            window.location.href = 'emergencyrequest.php';
            </script>";
        }else{
            echo "<script>alert('Booking Failed')</script>";
        }
}   

?>

