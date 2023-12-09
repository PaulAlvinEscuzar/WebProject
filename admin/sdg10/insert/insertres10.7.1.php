
<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $nR_Sm = $_POST['numRefugee_Smale'];
        $nR_Sf = $_POST['numRefugee_Sfemale'];
        $nR_St = $_POST['numRefugee_Stotal'];
        
        // Delete all existing data from the table
        $deleteQuery = "DELETE FROM `research 10.7.1`";
        $delete = mysqli_query($conn, $deleteQuery);
    
        if (!$delete) {
            die("Delete query failed. " . mysqli_error($conn));
        }
    
        // Insert new data into the table
        $query = "INSERT INTO `research 10.7.1`(`numRefugee_Smale`, `numRefugee_Sfemale`, `numRefugee_Stotal`) 
            VALUES ('$nR_Sm','$nR_Sf','$nR_St')";
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