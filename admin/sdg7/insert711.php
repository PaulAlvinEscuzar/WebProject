<?php
include '../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $tno_yale = $_POST['totnumres'];
        $titleores = $_POST['titleores'];
        $author = $_POST['author'];
        $YearoPub = $_POST['YearoPub'];
        $Totnumocit = $_POST['Totnumocit'];

        $query = "INSERT INTO `research7.1.1`(totnumres, titleores, author, YearoPub, Totnumocit) VALUES('{$tno_yale}', '{$titleores}', '{$author}', '{$YearoPub}', '{$Totnumocit}') ";
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