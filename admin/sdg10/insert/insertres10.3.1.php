<?php
include '../../../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nSWDm = $_POST['numSWDmale'];
    $nSWDf = $_POST['numSWDfemale'];
    $nSWDt = $_POST['numSWDtotal'];
    $psD_S = $_POST['psychosocialDis_S'];
    $CID_S = $_POST['CI_Dis_S'];
    $lD_S = $_POST['learningDis_S'];
    $vD_S = $_POST['visualDis_S'];
    $lmD_S = $_POST['locoDis_S'];
    $cD_S = $_POST['commDis_S'];
    $nSWPI = $_POST['numSWPI_S'];

    // Delete all existing data from the table
    $deleteQuery = "DELETE FROM `research 10.3.1`";
    $delete = mysqli_query($conn, $deleteQuery);

    if (!$delete) {
        die("Delete query failed. " . mysqli_error($conn));
    }

    // Insert new data into the table
    $insertQuery = "INSERT INTO `research 10.3.1`(`numSWDmale`, `numSWDfemale`, `numSWDtotal`, 
        `psychosocialDis_S`, `CI_Dis_S`, `learningDis_S`, `visualDis_S`, `locoDis_S`, `commDis_S`, `numSWPI_S`) 
        VALUES ('$nSWDm','$nSWDf','$nSWDt','$psD_S','$CID_S','$lD_S','$vD_S','$lmD_S','$cD_S','$nSWPI')";

    $insert = mysqli_query($conn, $insertQuery);

    if ($insert) {
        header("Location:../../../admin/sdg10/formsdg10.php?message=Insert Successful");
    } elseif (!$insert) {
        die("Insert query failed. " . mysqli_error($conn));
    }
} else {
    echo "Invalid request method.";
}
?>
