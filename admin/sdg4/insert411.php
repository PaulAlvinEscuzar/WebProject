<?php
include '../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $tno_yale = $_POST['tno_yale'];
    $titleores= $_POST['titleores'];
    $author = $_POST['author'];
    $YearoPub = $_POST['YearoPub'];
    $funs= $_POST['Totnumocit'];

    // SQL query to insert data into the database
    $sql = "INSERT INTO `research4.1.1` (tno_yale, titleores, author, YearoPub, Totnumocit)
            VALUES (' $tno_yale', '$titleores', ' $author' , '$YearoPub' , ' $Totnumocit')";
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