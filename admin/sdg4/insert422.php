<?php
include '../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $no_letpassers = $_POST['no_letpassers'];
    $no_bsedletpassers= $_POST['no_bsedletpassers'];
    $no_beedletpassers = $_POST['no_beedletpassers'];
    $no_bpedletpassers = $_POST['no_bpedletpassers'];
    $no_btledletpassers= $_POST['no_btledletpassers'];
    $percentg_lhtqttapl= $_POST['percentg_lhtqttapl'];

    // SQL query to insert data into the database
    $sql = "INSERT INTO `research4.2.2` (no_letpassers, no_bsedletpassers, no_beedletpassers, no_bpedletpassers, no_btledletpassers, percentg_lhtqttapl)
            VALUES ('$no_letpassers', '$no_bsedletpassers', ' $no_beedletpassers', '$no_bpedletpassers', ' $no_btledletpassers', '$percentg_lhtqttapl')";
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