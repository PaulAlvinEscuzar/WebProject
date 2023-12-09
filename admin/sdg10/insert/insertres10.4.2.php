
<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $nIP_Em = $_POST['numIPmem_Emale'];
        $nIP_Ef = $_POST['numIPmem_Efemale'];
        $nIP_Et = $_POST['numIPmem_Etotal'];
        
        // Delete all existing data from the table
        $deleteQuery = "DELETE FROM `research 10.4.2`";
        $delete = mysqli_query($conn, $deleteQuery);
    
        if (!$delete) {
            die("Delete query failed. " . mysqli_error($conn));
        }
    
        // Insert new data into the table
        $query = "INSERT INTO `research 10.4.2`(`numIPmem_Emale`, `numIPmem_Efemale`, `numIPmem_Etotal`) 
            VALUES ('$nIP_Em','$nIP_Ef','$nIP_Et')";
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