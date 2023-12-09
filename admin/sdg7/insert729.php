<?php
include '../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $totnum = $_POST['totnum'];
        $percentage = $_POST['percentage'];
       

        $query = "INSERT INTO `research7.5.2`(totnum, percentage) VALUES('{$totnum}', '{$percentage}') ";
        $insert = mysqli_query($conn, $query);

        if($insert){
            header("Location:../../admin/sdg7/formsdg7.php?message=Insert Successful");
        }elseif(!$insert){
            die("Query failed. " . mysqli_error($conn));
        }
    }
else {
    echo "Invalid request method.";
}


?>