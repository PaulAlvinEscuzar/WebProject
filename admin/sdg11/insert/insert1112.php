
<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $campusLand = $_POST['campusLand'];
        $campusBuilding = $_POST['campusBuilding'];
        $campusVegetation = $_POST['campusVegetation'];
        $parkingArea = $_POST['parkingArea'];
        $pedestrianPath = $_POST['pedestrianPath'];
        $campusSettings = $_POST['campusSettings'];

        $query = "INSERT INTO `research11_2_1`(campusLand, campusBuilding, campusVegetation, parkingArea, pedestrianPath, campusSettings) VALUES('{$campusLand}', '{$campusBuilding}', '{$campusVegetation}', '{$parkingArea}', '{$pedestrianPath}', '{$campusSettings}')";
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