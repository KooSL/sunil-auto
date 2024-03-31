<?php include 'sidebar.php'; ?>






<?php
    $qry = "SELECT * FROM contacts ORDER BY cntid ASC";
    include '../includes/db.php';
    $result = mysqli_query($conn, $qry);
?>  


<h1 class="text-3xl font-bold">Contacts</h1>
    <hr class="my-3 h-1 bg-red-500">

        <!-- <div class="mb-4">
            <a href="addcustomer.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Customer</a>
        </div> -->
        <!-- Customer List Table -->
        <div class="">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-red-500">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-white tracking-wider">
                            S.N</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-white tracking-wider">
                            Name</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-white tracking-wider">
                            Email</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-white tracking-wider">
                            Subject</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-white tracking-wider">
                            Message</th>
                        <!-- <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Vehicle Number</th> -->
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit/Delete</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Sample data, replace with dynamic data from backend -->
                    <?php while($row = mysqli_fetch_assoc($result)){  ?>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row['cntid'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row['cntname'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row['cntemail'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row['cntsub'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row['cntmessage'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="https://mail.google.com/mail/u/0/#inbox?compose=new" class="text-indigo-600 hover:text-indigo-900 mr-2" >Contact</a>
                            <a href="contacts.php?cntid=<?php echo $row['cntid'];?>" class="text-red-600 hover:text-red-900" onclick="return confirm('Are you sure to delete?')">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>


<?php
            if (isset($_GET['cntid'])) {
              $id = $_GET['cntid'];
              $qry2 = "DELETE FROM contacts WHERE cntid = '$id'";
              $result = mysqli_query($conn, $qry2);
          }
            
        ?>


