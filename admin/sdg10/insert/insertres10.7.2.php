
<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $nR_Em = $_POST['numRefugee_Emale'];
        $nR_Ef = $_POST['numRefugee_Efemale'];
        $nR_Et = $_POST['numRefugee_Etotal'];
        
        // Delete all existing data from the table
        $deleteQuery = "DELETE FROM `research 10.7.2`";
        $delete = mysqli_query($conn, $deleteQuery);
    
        if (!$delete) {
            die("Delete query failed. " . mysqli_error($conn));
        }
    
        // Insert new data into the table
        $query = "INSERT INTO `research 10.7.2`(`numRefugee_Emale`, `numRefugee_Efemale`, `numRefugee_Etotal`) 
            VALUES ('$nR_Em','$nR_Ef','$nR_Et')";
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