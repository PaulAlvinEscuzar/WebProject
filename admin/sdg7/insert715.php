<?php
include '../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $totnum = $_POST['totnum'];
        $totnumene = $_POST['totnumene'];
        $eneconsump = $_POST['eneconsump'];
        $target = $_POST['target'];
      

        $query = "INSERT INTO `research7.2.4`(totnum, totnumene, eneconsump, target) VALUES('{$totnum}', '{$totnumene}', '{$eneconsump}', '{$target}') ";
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