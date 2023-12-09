<?php
include '../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $totalspecies = $_POST['totalspecies'];
    $titleppa = $_POST['titleppa'];
    $shortdes = $_POST['shortdes'];
    $tcost = $_POST['tcost'];
    $fsource= $_POST['fsource'];

    // SQL query to insert data into the database
    $sql = "INSERT INTO `research15.3.2` (totalspecies, titleppa, shortdes, tcost, fsource)
            VALUES ('$totalspecies', '$titleppa', '$shortdes' , '$tcost' , '$fsource')";
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