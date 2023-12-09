<?php
include '../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $average = $_POST['average'];
        $totalele = $_POST['totalele'];
        $aveusage = $_POST['aveusage'];
        $totalused = $_POST['totalused'];
       

        $query = "INSERT INTO `research7.3.3`(average, totalele, aveusage, totalused) VALUES('{$average}', '{$totalele}','{$aveusage}','{$totalused}') ";
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