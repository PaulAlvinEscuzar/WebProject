
<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $StudWalk = $_POST['StudWalk'];
        $StudBike = $_POST['StudBike'];
        $StudCommute = $_POST['StudCommute'];
        $StudVehicle = $_POST['StudVehicle'];
        $StudCarpools = $_POST['StudCarpools'];
        $StudPopWalk = $_POST['StudPopWalk'];
        $StudPopBike = $_POST['StudPopBike'];
        $StudPopCommute = $_POST['StudPopCommute'];
        $StudPopVehicle = $_POST['StudPopVehicle'];
        $StudPopCarpools = $_POST['StudPopCarpools'];


        $query = "INSERT INTO `research11_3_9` (StudWalk, StudBike, StudCommute, StudVehicle, StudCarpools, StudPopWalk, StudPopBike, StudPopCommute, StudPopVehicle, StudPopCarpools) VALUES('$StudWalk', '$StudBike', '$StudCommute', '$StudVehicle', '$StudCarpools', '$StudPopWalk', '$StudPopBike', '$StudPopCommute', '$StudPopVehicle', '$StudPopCarpools')";
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