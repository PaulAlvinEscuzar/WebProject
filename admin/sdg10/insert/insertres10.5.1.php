
<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $LGBT_St = $_POST['numLGBT_Stotal'];
        
        // Delete all existing data from the table
        $deleteQuery = "DELETE FROM `research 10.5.1`";
        $delete = mysqli_query($conn, $deleteQuery);
    
        if (!$delete) {
            die("Delete query failed. " . mysqli_error($conn));
        }
    
        // Insert new data into the table
        $query = "INSERT INTO `research 10.5.1`(`numLGBT_Stotal`) 
            VALUES ('$LGBT_St')";
        $insert = mysqli_query($conn, $query);

        if($insert){
            header("Location:../../../admin/sdg10/formsdg10.php?message=Insert Successful");
        }elseif(!$insert){
            die("Query failed. " . mysqli_error($conn));
        }
    }
else {
    echo "Invalid request method.";
}


?>