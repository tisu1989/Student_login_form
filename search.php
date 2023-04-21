<?php require 'dbcon.php'; ?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
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
        <h1>Search Details</h1>
        <table style = "width:100%">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>PhoneNo</th>
                <th>Course</th>
                <?php
                             
                             //exit('hi');
                             if(isset($_GET['submit'])){
                             //exit('hi');
                             $search = mysqli_real_escape_string($con,$_GET['search']);
                             $query = "SELECT * FROM students WHERE sno=$search
                              OR email LIKE '$search' OR addr LIKE '$search'
                              OR phone LIKE $search OR course LIKE '$search'";
                             $query_run = mysqli_query($con, $query);
                             if(mysqli_num_rows($query_run) > 0){
                                $student = mysqli_fetch_array($query_run);
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