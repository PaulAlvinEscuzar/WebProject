<?php
include '../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $no_gardening = $_POST['no_gardening'];
    $gardeningmale = $_POST['gardeningmale'];
    $gardeningfemale = $_POST['gardeningfemale'];
    $no_vertical = $_POST['no_vertical'];
    $verticalmale = $_POST['verticalmale'];
    $verticalfemale = $_POST['verticalfemale'];
    $percent_gardening = $_POST['percent_gardening'];
    $percent_vertical = $_POST['percent_vertical'];
    
    // SQL query to insert data into the database
    $sql = "INSERT INTO `research15.2.1` (no_gardening, gardeningmale, gardeningfemale, no_vertical, verticalmale, verticalfemale, percent_gardening, percent_vertical)
            VALUES ('$no_gardening', '$gardeningmale', '$gardeningfemale', '$no_vertical', '$verticalmale', '$verticalfemale', '$percent_gardening', '$percent_vertical')";
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