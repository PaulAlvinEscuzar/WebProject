<?php
include '../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $totnum = $_POST['totnum'];
        $totnumofapproved = $_POST['totnumofapproved'];
        $fuelconsump = $_POST['fuelconsump'];
        $eleconsumppercapita = $_POST['eleconsumppercapita'];
       

        $query = "INSERT INTO `research7.3.2.1`(average, eleconsump, population, eleconsumppercapita) VALUES('{$average}', '{$eleconsump}','{$population}','{$eleconsumppercapita}') ";
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