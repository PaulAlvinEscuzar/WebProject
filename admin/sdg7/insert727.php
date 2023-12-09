<?php
include '../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $totnum = $_POST['totnum'];
        $title = $_POST['title'];
        $shortdes = $_POST['shortdes'];
        $totcost = $_POST['totcost'];
        $fundsource = $_POST['fundsource'];

        $query = "INSERT INTO `research7.4.5`(totnum, title, shortdes, totcost, fundsource) VALUES('{$totnum}', '{$title}', '{$shortdes}', '{$totcost}', '{$fundsource}') ";
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