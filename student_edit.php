<?php
session_start();
require 'dbcon.php';
?>
<?php include('message.php');      ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student_login_form</title>
    <style>
        .formfield {
            font-size: 25px;
            width: 90%;
            margin-left:5%
        }

        #sbmt {
            padding: 10px;
            margin-left:5%;
            margin-top: 2%;
        }
        #back {
            padding: 10px;
            margin-left:5%;
            margin-top: 2%;
        }

        
        .container{
            width: 50%;
            margin-left: 25%;
        }
        #name{padding: 10px;
            margin-left:5%;
            margin-top: 1%;

        }
        #email{padding: 10px;
            margin-left:5%;
            margin-top: 1%;

        }
        #addr{padding: 10px;
            margin-left:5%;
            margin-top: 1%;

        }
        #phone{padding: 10px;
            margin-left:5%;
            margin-top: 1%;

        }
        #course{padding: 10px;
            margin-left:5%;
            margin-top: 1%;

        }
        #edit{padding: 10px;
            margin-left:5%;
            margin-top: 1%;

        }
    </style>
</head>
<div class="container">

<body>
    <h1 style="font-size:50px;text-align:center;">Student Edit</h1>
    <!-- <button id="back" name="back"><a href="index.php" >BACK</button> -->
    <div style="background-color:antiquewhite;padding: 15px;">
    <?php 
    // exit('hi');
                            if(isset($_GET['sno'])){
                                $student_id = mysqli_real_escape_string($con,$_GET['sno']);
                                $query = "SELECT * FROM students WHERE sno='$student_id' ";
                                $query_run = mysqli_query($con, $query);

                                if(mysqli_num_rows($query_run) > 0)
                                {

                                    $student = mysqli_fetch_array($query_run);
                                    ?>
        <form action="code.php"  method= "POST">
        <input type="hidden" name="student_id" value = "<?= $student['sno']; ?>">

            <label for="name"   style="margin-left:5%">  Name</label><br>
            <input type="text"  style="margin-left:5%"   class="formfield" id="name" name="name"  value="<?=$student['name'] ;?>" ><br>
            <label for="email"  style="margin-left:5%">  Email</label><br>
            <input type="text"  style="margin-left:5%"   class="formfield"  id="email" name="email" value="<?=$student['email'] ;?>" ><br>
            <label for="addr"  style="margin-left:5%">  Address</label><br>
            <input type="text"  style="margin-left:5%"   class="formfield"  id="addr" name="addr" value="<?=$student['addr'] ;?>" ><br>
            <label for="phone"  style="margin-left:5%">  PhoneNo</label><br>
            <input type="tel"  style="margin-left:5%"   class="formfield" id="phone" name="phone" value="<?=$student['phone'] ;?>" ><br>
            <label for="course"  style="margin-left:5%">  Course</label><br>
            <input type="text"  style="margin-left:5%"   class="formfield" id="course" name="course" value="<?=$student['course'] ;?>" ><br>
            <button  type="edit" name="edit" id ="edit">
                                        Update Student</button>
            
        </form> 
        <?php 
                                }
                                else{
                                    echo"<h4> No Such id Found </h4>";
                                }
                            }
                            ?>
    </div>
</div>


</body>

</html>