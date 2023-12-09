<?php
include '../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $no_voctrai = $_POST['no_voctrai'];
    $titleppa= $_POST['titleppa'];
    $shortdesppa = $_POST['shortdesppa'];
    $totalcost = $_POST['totalcost'];
    $fundsource= $_POST['fundsource'];

    // SQL query to insert data into the database
    $sql = "INSERT INTO `research4.3.3` (no_voctrai, titleppa, shortdesppa, totalcost, fundsource)
            VALUES ('$no_voctrai', '$titleppa', ' $shortdesppa', '$totalcost', ' $fundsource')";
    $result = mysqli_query($conn, $sql);

        if($result){
           header("Location:../../admin/sdg4/formsdg4.php?message=Added Successfuly");
        }elseif(!$result){
            die("Query failed. " . mysqli_error($conn));
        }
    }
else {
    echo "Invalid request method.";
}
?>