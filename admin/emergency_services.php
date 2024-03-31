<?php include 'sidebar.php'; ?>







<?php
    
    $qry3 = "SELECT * FROM emergency_services ORDER BY eid DESC";
    include '../includes/db.php';
    
    $result3 = mysqli_query($conn, $qry3);
    

?>  


<h1 class="text-3xl font-bold">Emergency Services</h1>
    <hr class="my-3 h-1 bg-red-500">
        <!-- <div class="mb-4">
            <a href="addvehicle.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Vehicle</a>
        </div> -->
        <!-- Customer List Table -->    
        <div>
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-red-500">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-white  tracking-wider">
                            EID</th>
                        <th scope="col" 
                            class="px-6 py-3 text-left text-xs font-medium text-white  tracking-wider">
                            Name</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-white  tracking-wider">
                            Email</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-white  tracking-wider">
                            Contact</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-white  tracking-wider">
                            Type</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-white  tracking-wider">
                            Vehicle Name</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-white  tracking-wider">
                            Vehicle Number</th>]
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-white  tracking-wider">
                            Vehicle Model</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-white  tracking-wider">
                            Service Option</th>
                        <!-- <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Vehicle Brand</th> -->
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-white  tracking-wider">
                            Last Service Date</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-white  tracking-wider">
                            Address</th>
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
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row3['eid'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row3['ename'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row3['eemail'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row3['econtact'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row3['etype'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row3['evname'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row3['evnumber'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row3['evmodel'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row3['esoption'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row3['esldate'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row3['eaddress'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row3['estatus'];?></td>

                        <!-- <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <?php if ($row3['sstatus'] != 'Done') { ?>
                                <a href="services.php?confirm_id=<?php echo $row3['sid'];?>" class="text-indigo-600 hover:text-indigo-900 mr-2" onclick="return confirm('Are you sure to mark this service as done?')">Done</a>
                            <?php } ?>
                                <a href="editservice.php?sid=<?php echo $row3['sid'];?>" class="text-indigo-600 hover:text-indigo-900 mr-2">Edit</a>
                                <a href="services.php?delete_id=<?php echo $row3['sid'];?>" class="text-red-600 hover:text-red-900">Delete</a>
                        </td> -->
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="emergency_services.php?approve_eid=<?php echo $row3['eid'];?>" class="text-green-600 hover:text-indigo-900 mr-2" onclick="return confirm('Are you sure to approve?')">Approve</a>
                            <a href="emergency_services.php?decline_eid=<?php echo $row3['eid'];?>" class="text-indigo-600 hover:text-indigo-900 mr-2" onclick="return confirm('Are you sure to decline?')">Decline</a>
                            <a href="emergency_services.php?delete_eid=<?php echo $row3['eid'];?>" class="text-red-600 hover:text-red-900" onclick="return confirm('Are you sure to delete?')">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

<!-- <?php include 'footer.php'; ?> -->
       

<?php
          if (isset($_GET['delete_eid'])) {
            $del_eid = $_GET['delete_eid'];
            $qry3 = "DELETE FROM emergency_services WHERE eid = '$del_eid'";
            $result = mysqli_query($conn, $qry3);
          }
          elseif (isset($_GET['approve_eid'])) {
            $confrim_eid = $_GET['approve_eid'];
            $estatus = "Approved";
            $qry4 = "UPDATE emergency_services SET estatus = '$estatus' WHERE eid = '$confrim_eid'";
            $result2 = mysqli_query($conn, $qry4);
          }
          elseif (isset($_GET['decline_eid'])) {
            $cancel_eid = $_GET['decline_eid'];
            $estatus = "Declined";
            $qry5 = "UPDATE emergency_services SET estatus = '$estatus' WHERE eid = '$cancel_eid'";
            $result3 = mysqli_query($conn, $qry5);
          }
?>
