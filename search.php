<?php require 'dbcon.php';?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Search</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>

</form>
        <table style="width:100%">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>PhoneNo</th>
                <th>Course</th>
                <!-- <th>Action</th> -->
                
            </tr>  
            <?php 
            if (isset($_GET['search'])) {
                               $search = mysqli_real_escape_string($con, $_GET['search']);
                               $student = $_GET['search'];

            //     $query = "SELECT * FROM
            //     rgform.students
            //     WHERE
            //   (rgform.students.sno LIKE '%$search%') OR
            //     (rgform.students.name LIKE '%$search%') OR
            //     (rgform.students.email LIKE '%$search%') OR
            //     (rgform.students.addr LIKE '%$search%') OR
            //     (rgform.students.phone LIKE '%$search%') OR
            //     (rgform.students.course LIKE '%$search%')";

                // echo $query;
                // exit; 
            
                $query_run = mysqli_query($con, $query);
                
                if (mysqli_num_rows($query_run) > 0) {
                    foreach($query_run as $student1)
                    // $student1 = mysqli_fetch_array($query_run);
                     // print_r($student1);
//exit;
                
            
?>
            
            <tr>
                <td>
                    <?= $student1['sno']; ?>
                </td>
                <td>
                    <?= $student1['name']; ?>
                </td>
                <td>
                    <?= $student1['email']; ?>
                </td>
                <td>
                    <?= $student1['addr']; ?>
                </td>
                <td>
                    <?= $student1['phone']; ?>
                </td>
                <td>
                    <?= $student1['course']; ?>
                </td>
                
            </tr>
            <?php

            }
        
            
            else{
                echo"<h5> No Record Found </h5>";
            }
        }
            ?>
        </table>
        

    </div>


</body>

</html>
