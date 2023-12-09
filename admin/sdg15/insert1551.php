<?php
include '../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $no_bio = $_POST['no_bio'];
    $tippa= $_POST['tippa'];
    $sdeppa = $_POST['sdeppa'];
    $totcst = $_POST['totcst'];
    $funs= $_POST['funs'];

    // SQL query to insert data into the database
    $sql = "INSERT INTO `research15.5.1` (no_bio, tippa, sdeppa, totcst, funs)
            VALUES (' $no_bio', '$tippa', ' $sdeppa' , '$totcst' , ' $funs')";
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