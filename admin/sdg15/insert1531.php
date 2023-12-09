<?php
include '../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $totalend = $_POST['totalend'];
    
    
    // SQL query to insert data into the database
    $sql = "INSERT INTO `research15.3.1` (totalend)
            VALUES ('$totalend')";
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