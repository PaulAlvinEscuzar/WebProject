<?php
include '../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $no_susfarmed = $_POST['no_susfarmed'];
    $no_ppaimplemented= $_POST['no_ppaimplemented'];
    $titotppa = $_POST['titotppa'];
    $sdotppa = $_POST['sdotppa'];
    $tocost= $_POST['tocost'];
    $funsource= $_POST['funsource'];

    // SQL query to insert data into the database
    $sql = "INSERT INTO `research15.4.2` (no_susfarmed, no_ppaimplemented, titotppa, sdotppa, tocost, funsource)
            VALUES (' $no_susfarmed', '$no_ppaimplemented', ' $titotppa' , '$sdotppa' , ' $tocost', '$funsource')";
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