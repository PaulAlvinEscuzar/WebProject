
<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $TotalNumInternalStakeholder = $_POST['TotalNumInternalStakeholder'];
        $TotalNumOfVisitorGuest = $_POST['TotalNumOfVisitorGuest'];

        

        $query = "INSERT INTO `research11_3_3` (TotalNumInternalStakeholder, TotalNumOfVisitorGuest ) VALUES('$TotalNumInternalStakeholder', '$TotalNumOfVisitorGuest')";
        $insert = mysqli_query($conn, $query);
        
        if($insert){
            header("Location:../../../admin/sdg11/formsdg11.php?message=Insert Successful");
        }elseif(!$insert){
            die("Query failed. " . mysqli_error($conn));
        }
    }
else {
    echo "Invalid request method.";
}


?>