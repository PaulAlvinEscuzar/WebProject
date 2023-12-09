
<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $TotalCampus = $_POST['TotalCampus'];
        $AllocBudget = $_POST['AllocBudget'];
        $CampusExpen = $_POST['CampusExpen'];

        $query = "INSERT INTO `research11_3_8` (TotalCampus, AllocBudget, CampusExpen) VALUES('$TotalCampus', '$AllocBudget', '$CampusExpen')";
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