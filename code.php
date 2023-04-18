
<?php
//exit('hi');
session_start();
require 'dbcon.php';


$nameErr = $emailErr = $addrErr = $phoneErr = $courseErr = "";
$name = $email = $addr = $phone = $course = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //echo"hi";
    //print_r($_SERVER["REQUEST_METHOD"]);
//exit();
    if (isset($_POST['sbmt'])) {
        if (empty($_POST["name"])) {
            $nameErr = "Name field is required";
        } else {
            $name = test_input($_POST["name"]);
        }
        if (empty($_POST["email"])) {
            $emailErr = "Email field is required";
        } else {
            $email = test_input($_POST["email"]);
        }
        if (empty($_POST["addr"])) {
            $addrErr = "Address field is required";
        } else {
            $addr = test_input($_POST["addr"]);
        }
        if (empty($_POST["phone"])) {
            $phoneErr = "Phone field is required";
        } else {
            $phone = test_input($_POST["phone"]);
        }
        if (empty($_POST["course"])) {
            $courseErr = "course field is required";
        } else {
            $course = test_input($_POST["course"]);
        }

      
    
    
        if (
            !empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["addr"])
            && !empty($_POST["phone"]) && !empty($_POST["course"])
        ) { 
            $query = "INSERT INTO students(name,email,addr,phone,course) 
        VALUES ('$name','$email','$addr',$phone,'$course')";
        
        
 //print_r($_SESSION['error']);
 //exit;
     
        $query_run = mysqli_query($con, $query);
        if ($query_run) {
            $_SESSION['message'] = "Student Data Created Successfully";
            header("Location: index.php");
            exit(0);
        }}
        
         else {
            $_SESSION['message'] = "Student Data Not Created ";
            header("Location: index.php");
            exit(0);
        
    }
        }
    }
    
    

    

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
        
  






















if (isset($_GET['sno'])) {
    $student_id = mysqli_real_escape_string($con, $_GET['sno']);
    $query = "DELETE FROM students WHERE sno='$student_id' ";
    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
}


























if (isset($_POST['edit'])) {
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $addr = mysqli_real_escape_string($con, $_POST['addr']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $course = mysqli_real_escape_string($con, $_POST['course']);
    $query = "UPDATE students SET name='$name', email= '$email',addr='$addr', phone= $phone ,course= '$course' 
                 WHERE sno='$student_id' ";
    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
}






















if (isset($_POST['sbmt'])) {

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $addr = mysqli_real_escape_string($con, $_POST['addr']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $course = mysqli_real_escape_string($con, $_POST['course']);

    $query = "INSERT INTO students(name,email,addr,phone,course) 
    VALUES ('$name','$email','$addr',$phone,'$course')";

    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['message'] = "Student Created Successfully";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not Created Successfully";
        header("Location: index.php");
        exit(0);
    }
     //print_r($_SESSION);
}

?>