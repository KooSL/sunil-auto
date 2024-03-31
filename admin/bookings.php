<?php include 'sidebar.php'; ?>







<?php
    
    $qry3 = "SELECT * FROM bookings ORDER BY bid DESC";
    include '../includes/db.php';
    
    $result3 = mysqli_query($conn, $qry3);
    

?>  


<h1 class="text-3xl font-bold">Bookings</h1>
    <hr class="my-3 h-1 bg-red-500">
        <!-- <div class="mb-4">
            <a href="addvehicle.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Vehicle</a>
        </div> -->
        <!-- Customer List Table -->
        <div class="">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-red-500">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-white tracking-wider">
                            BID</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-white   tracking-wider">
                            Name</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-white  tracking-wider">
                            Email</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-white  tracking-wider">
                            Type</th>
                        <!-- <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Vehicle Brand</th> -->
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-white  tracking-wider">
                            Date</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-white  tracking-wider">
                            Description</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-white  tracking-wider">
                            Status</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-white  tracking-wider">
                            Action</th>
                    
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Sample data, replace with dynamic data from backend -->
                    <?php while($row3 = mysqli_fetch_assoc($result3)){  ?>
                        <!-- <?php
                        $vid = $row3['vid'];
                        // $qry = "SELECT * FROM vehicles WHERE vid = '$vid'";
                        // $result = mysqli_query($conn, $qry);
                        // $row = mysqli_fetch_assoc($result)
                        ?> -->



                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row3['bid'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row3['bname'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row3['bemail'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row3['btype'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row3['bdate'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row3['bdescription'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row3['bstatus'];?></td>

                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="bookings.php?approve_bid=<?php echo $row3['bid'];?>" class="text-green-600 hover:text-indigo-900 mr-2" onclick="return confirm('Are you sure to approve?')">Approve</a>
                            <a href="bookings.php?decline_bid=<?php echo $row3['bid'];?>" class="text-indigo-600 hover:text-indigo-900 mr-2" onclick="return confirm('Are you sure to decline?')">Decline</a>
                            <a href="bookings.php?delete_bid=<?php echo $row3['bid'];?>" class="text-red-600 hover:text-red-900" onclick="return confirm('Are you sure to delete?')">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

<!-- <?php include 'footer.php'; ?> -->


<?php
          if (isset($_GET['delete_bid'])) {
            $del_bid = $_GET['delete_bid'];
            $qry3 = "DELETE FROM bookings WHERE bid = '$del_bid'";
            $result = mysqli_query($conn, $qry3);
          }
          elseif (isset($_GET['approve_bid'])) {
            $confrim_bid = $_GET['approve_bid'];
            $bstatus = "Approved";
            $qry4 = "UPDATE bookings SET bstatus = '$bstatus' WHERE bid = '$confrim_bid'";
            $result2 = mysqli_query($conn, $qry4);
          }
          elseif (isset($_GET['decline_bid'])) {
            $cancel_bid = $_GET['decline_bid'];
            $bstatus = "Declined";
            $qry5 = "UPDATE bookings SET bstatus = '$bstatus' WHERE bid = '$cancel_bid'";
            $result3 = mysqli_query($conn, $qry5);
          }
?>      


