<?php require 'dbcon.php';
if (isset($_GET['search'])) {
    $student = $_GET['search'];
    $search = mysqli_real_escape_string($con, $_GET['search']);
    $query = "SELECT * FROM
    rgform.students
    WHERE
  (rgform.students.sno LIKE '%$student%') OR
    (rgform.students.name LIKE '%$student%') OR
    (rgform.students.email LIKE '%$student%') OR
    (rgform.students.addr LIKE '%$student%') OR
    (rgform.students.phone LIKE '%$student%') OR
    (rgform.students.course LIKE '%$student%')";

    $query_run = mysqli_query($con, $query);
    if (mysqli_num_rows($query_run) > 0) {
        $student = mysqli_fetch_array($query_run);
        // print_r($student);
        // exit;
    }
}
