<?php
include '../../../includes/db.php';

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $sql = "DELETE FROM `research 10.8.9` WHERE `10.8.9 ID` ='$id'";
    $delete = mysqli_query($conn, $sql);

    if ($delete) {
        header("Location:../../../admin/sdg10/up_delsdg10.php?message=Delete Successful");
    } else {
        die("Delete query failed. " . mysqli_error($conn));
    }
}
?>
