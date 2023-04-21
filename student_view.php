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
<?php
//exit('hi');
if(isset($_GET['submit'])){
//exit('hi');
$search = mysqli_real_escape_string($con,$_GET['search']);
$query = "SELECT * FROM students WHERE sno=$search
 OR email LIKE '$search' OR addr LIKE '$search'
 OR phone LIKE $search OR course LIKE '$course'";
$query_run = mysqli_query($con, $query);
if(mysqli_num_rows($query_run) > 0){
    foreach($query_run as $student){
        

echo "<p><h3>".$student['name']."</p>";
 }
}
}
?>




    <div class="container">
    <form action="" method="GET">
<input id="search" name="search" type="text" placeholder="Type here">
<input id="submit" type="submit" value="Search">

</form>
        <table style="width:100%">
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