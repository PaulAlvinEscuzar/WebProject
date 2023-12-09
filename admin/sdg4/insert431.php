<?php
include '../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $no_freeapgp = $_POST['no_freeapgp'];
    $titleoppa= $_POST['titleoppa'];
    $shortdotppa = $_POST['shortdotppa'];
    $totalcost = $_POST['totalcost'];
    $fundsource= $_POST['fundsource'];
    
    // SQL query to insert data into the database
    $sql = "INSERT INTO `research4.3.1` (no_freeapgp, titleoppa, shortdotppa, totalcost, fundsource)
            VALUES (' $no_freeapgp', '$titleoppa', ' $shortdotppa' , '$totalcost' , ' $fundsource')";
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