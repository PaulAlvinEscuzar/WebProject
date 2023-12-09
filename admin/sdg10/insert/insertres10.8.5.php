
<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $coE = $_POST['comoffExist'];
        
        if (strtolower($coE) == "yes"){
            $score1085 = 3;
        } else {
            $score1085 = 0;
        }

        // Delete all existing data from the table
        $deleteQuery = "DELETE FROM `research 10.8.5`";
        $delete = mysqli_query($conn, $deleteQuery);
    
        if (!$delete) {
            die("Delete query failed. " . mysqli_error($conn));
        }
    
        // Insert new data into the table
        $query = "INSERT INTO `research 10.8.5`(`comoffExist`, `score`) VALUES ('$coE','$score1085')";
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