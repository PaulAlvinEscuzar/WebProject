<?php
include '../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $totnum = $_POST['totnum'];
        $titleo = $_POST['titleo'];
        $shortdess = $_POST['shortdess'];
        $totcostt = $_POST['totcostt'];
        $fundsourcee = $_POST['fundsourcee'];

        $query = "INSERT INTO `research7.2.3`(totnum, titleo, shortdess, totcostt, fundsourcee) VALUES('{$totnum}', '{$titleo}', '{$shortdess}', '{$totcostt}', '{$fundsourcee}') ";
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