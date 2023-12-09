<?php
include '../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $totalcampus = $_POST['totalcampus'];
    $tppa = $_POST['tppa'];
    $shortds = $_POST['shortds'];
    $totcost = $_POST['totcost'];
    $funds= $_POST['funds'];

    // SQL query to insert data into the database
    $sql = "INSERT INTO `research15.4.1` (totalcampus, tppa, shortds, totcost, funds)
            VALUES (' $totalcampus', '$tppa', ' $shortds' , '$totcost' , ' $funds')";
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