
<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $nIP_Sm = $_POST['numIPmem_Smale'];
        $nIP_Sf = $_POST['numIPmem_Sfemale'];
        $nIP_St = $_POST['numIPmem_Stotal'];

        // Delete all existing data from the table
        $deleteQuery = "DELETE FROM `research 10.4.1`";
        $delete = mysqli_query($conn, $deleteQuery);
    
        if (!$delete) {
            die("Delete query failed. " . mysqli_error($conn));
        }
    
        // Insert new data into the table
        $query = "INSERT INTO `research 10.4.1`(`numIPmem_Smale`, `numIPmem_Sfemale`, `numIPmem_Stotal`) 
            VALUES ('$nIP_Sm','$nIP_Sf','$nIP_St')";
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