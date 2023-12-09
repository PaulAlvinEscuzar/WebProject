
<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $TotalNumPol = $_POST['TotalNumPol'];
        $TotalNumPrac = $_POST['TotalNumPrac'];

        $query = "INSERT INTO `research11_5_9` (TotalNumPol, TotalNumPrac) VALUES ('$TotalNumPol', '$TotalNumPrac')";
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