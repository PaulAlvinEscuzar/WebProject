
<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $prct_walks = $_POST['prct_walks'];
        $prct_bicycle = $_POST['prct_bicycle'];
        $prct_commute = $_POST['prct_commute'];
        $prct_vehicle = $_POST['prct_vehicle'];
        $prct_carpools = $_POST['prct_carpools'];

        $query = "INSERT INTO `research11_4_1` (prct_walks, prct_bicycle, prct_commute, prct_vehicle, prct_carpools) VALUES('$prct_walks', '$prct_bicycle', '$prct_commute', '$prct_vehicle', '$prct_carpools')";
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