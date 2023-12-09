<?php
include '../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $employees_gardening = $_POST['employees_gardening'];
    $employeegmale = $_POST['employeegmale'];
    $employeegfemale = $_POST['employeegfemale'];
    $employee_vertical = $_POST['employee_vertical'];
    $employeevmale = $_POST['employeevmale'];
    $employeevfemale = $_POST['employeevfemale'];
    $percente_gardening = $_POST['percente_gardening'];
    $percentv_vertical = $_POST['percentv_vertical'];
    $no_susland = $_POST['no_susland'];
    $ppa = $_POST['ppa'];
    $shortd = $_POST['shortd'];
    $totalc = $_POST['totalc'];
    $FundSource = $_POST['FundSource'];
    
    // SQL query to insert data into the database
    $sql = "INSERT INTO `research15.2.1.2` (employees_gardening, employeegmale, employeegfemale, employee_vertical, employeevmale, employeevfemale, percente_gardening, percentv_vertical, no_susland, ppa, shortd, totalc, FundSource)
            VALUES ('$employees_gardening', '$employeegmale', '$employeegfemale', '$employee_vertical', '$employeevmale', '$employeevfemale', '$percente_gardening', '$percentv_vertical', '$no_susland','$ppa', '$shortd', '$totalc', '$FundSource')";
    $result = mysqli_query($conn, $sql);

        if($result){
           header("Location:../../admin/sdg15/formsdg15.php?message=Added Successfuly");
        }elseif(!$result){
            die("Query failed. " . mysqli_error($conn));
        }
    }
else {
    echo "Invalid request method.";
}
?>