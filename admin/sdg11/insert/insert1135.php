
<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $num_of_performances = $_POST['num_of_performances'];
        $num_of_perfomers = $_POST['num_of_perfomers'];

        $num_of_choir_internal = $_POST['num_of_choir_internal'];
        $num_of_choir_external = $_POST['num_of_choir_external'];

        $num_of_theater_internal = $_POST['num_of_theater_internal'];
        $num_of_theater_external = $_POST['num_of_theater_external'];

        $num_of_dance_internal = $_POST['num_of_dance_internal'];
        $num_of_dance_external = $_POST['num_of_dance_external'];

        $num_of_band_internal = $_POST['num_of_band_internal'];
        $num_of_band_external = $_POST['num_of_band_external'];

        $num_of_paintings = $_POST['num_of_paintings'];
        $val_of_paintings = $_POST['val_of_paintings'];

        

        $query = "INSERT INTO `research11_3_5` (num_of_performances, num_of_perfomers, num_of_choir_internal, num_of_choir_external, num_of_theater_internal, num_of_theater_external, num_of_dance_internal, num_of_dance_external, num_of_band_internal, num_of_band_external, num_of_paintings, val_of_paintings) VALUES ('$num_of_performances', '$num_of_perfomers', '$num_of_choir_internal', '$num_of_choir_external', '$num_of_theater_internal', '$num_of_theater_external', '$num_of_dance_internal', '$num_of_dance_external', '$num_of_band_internal', '$num_of_band_external', '$num_of_paintings', '$val_of_paintings')";
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