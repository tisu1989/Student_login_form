<?php require 'dbcon.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student view</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <div class="container">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>PhoneNo</th>
                <th>Course</th>
                <th>Action</th>
            </tr>
            <?php
                  $query = "SELECT * FROM students";
                  $query_run = mysqli_query($con,$query);

                  if(mysqli_num_rows($query_run) > 0){
                    foreach($query_run as $student){
                    ?>
            <tr>
                <td>
                    <?= $student['sno']; ?>
                </td>
                <td>
                    <?= $student['name']; ?>
                </td>
                <td>
                    <?= $student['email']; ?>
                </td>
                <td>
                    <?= $student['addr']; ?>
                </td>
                <td>
                    <?= $student['phone']; ?>
                </td>
                <td>
                    <?= $student['course']; ?>
                </td>
                <td>
                <button id="back" name="back"><a href="student_viewdetails.php?sno=<?=$student['sno'];?>" >View</button>
                <button id="back" name="back"><a href="student_edit.php?sno=<?=$student['sno'];?>" >Edit</button>
                <button id="delete" name="delete"><a href="code.php?sno=<?=$student['sno'];?>" >Delete</button>

               
                    
                
                    
            </td>
            </tr>
            <?php

            }
            }
            else{
                echo"<h5> No Record Found </h5>";
            }
            ?>
        </table>

    </div>


</body>

</html>