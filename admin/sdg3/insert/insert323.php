<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $respond = $_POST['respond'];
        $no_approved = $_POST['no_approved'];
        $facility = $_POST['facility'];
        $lvlofCommunity = $_POST['lvlofCommunity'];
        $titleEvent = $_POST['titleEvent'];
        $noHours = $_POST['noHours'];
        $noGuest = $_POST['noGuest'];
        $amountFromPaid = $_POST['amountFromPaid'];

        $query = "INSERT INTO `research3.2.3`(respond, no_approved, facility, lvlofCommunity, titleEvent, noHours, noGuest, amountFromPaid) VALUES ('$respond', '$no_approved', '$facility', '$lvlofCommunity', '$titleEvent', '$noHours', '$noGuest', '$amountFromPaid')";
        $insert = mysqli_query($conn, $query);

        if($insert){
            header("Location:../../../admin/sdg3/formsdg3.php?message=Insert Successful");
        }elseif(!$insert){
            die("Query failed. " . mysqli_error($conn));
        }
    }
else {
    echo "Invalid request method.";
}


?>