<?php
include '../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $no_maecebio = $_POST['no_maecebio'];
    $ppatit= $_POST['ppatit'];
    $shortdotppa = $_POST['shortdotppa'];
    $costtotal = $_POST['costtotal'];
    $sourcefund= $_POST['sourcefund'];

    // SQL query to insert data into the database
    $sql = "INSERT INTO `research15.4.3` (no_maecebio, ppatit, shortdotppa, costtotal, sourcefund)
            VALUES (' $no_maecebio', '$ppatit', ' $shortdotppa' , '$costtotal' , ' $sourcefund')";
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