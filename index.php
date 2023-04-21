<?php
session_start();
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
            margin-left: 5%
        }

        #sbmt {
            padding: 10px;
            margin-left: 5%;
            margin-top: 2%;
        }

        #back {
            padding: 10px;
            margin-left: 5%;
            margin-top: 2%;
        }


        .container {
            width: 50%;
            margin-left: 25%;
        }

        #name {
            padding: 10px;
            margin-left: 5%;
            margin-top: 1%;

        }

        #email {
            padding: 10px;
            margin-left: 5%;
            margin-top: 1%;

        }

        #addr {
            padding: 10px;
            margin-left: 5%;
            margin-top: 1%;

        }

        #phone {
            padding: 10px;
            margin-left: 5%;
            margin-top: 1%;

        }

        #course {
            padding: 10px;
            margin-left: 5%;
            margin-top: 1%;

        }

        .formdesign {
            font-size: 25px;
            width: 90%;
            margin-left: 5%
        }
    </style>



</head>

<body>
    <div class="container">
        <h1 style="font-size:50px;text-align:center;">Registration Form</h1>
        <div style="background-color:antiquewhite;padding: 15px;">
            <form name="myForm" action="./code.php" onsubmit="return validate()" method="POST">
            
                <label for="name" style="margin-left:5%">Name</label><br>
                <input type="text" class="formfield" id="name" name="name"><br>
                <b style="padding-left:10%;color:red"><span id="nameError"> </span></b><br>
                <label for="email" style="margin-left:5%"> Email</label><br>
                <input type="email" class="formfield" id="email" name="email"><br>
                <b style="padding-left:10%;color:red"><span id="emailError"> </span></b><br>
                <label for="addr" style="margin-left:5%"> Address</label><br>
                <input type="text" class="formfield" id="addr" name="addr"><br>

                <b style="padding-left:10%;color:red"><span id="addrError"> </span></b><br>
                <label for="phone" style="margin-left:5%"> PhoneNo</label><br>
                <input type="tel" class="formfield" id="phone" name="phone"><br>
                <b style="padding-left:10%;color:red"><span id="phoneError"> </span></b><br>
                <label for="course" style="margin-left:5%"> Course</label><br>
                <input type="text" class="formfield" id="course" name="course"><br>
                <b style="padding-left:10%;color:red"><span id="courseError"> </span></b><br>
                <button type="submit" name="sbmt" id="sbmt"> Submit</button>
                <button id="back" name="back"><a href="student_view.php">BACK</button>
            </form>
        </div>
    </div>
</body>
<script type="text/javascript" src="./index.js?v=<?=filemtime('./index.js') ?>"></script>
</html>