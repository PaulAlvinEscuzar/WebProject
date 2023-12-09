
<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $ASt = $_POST['AStitle'];
        $ASsd = $_POST['ASshortDesc'];
        $asT_C = $_POST['asT_Cost'];
        $asFS = $_POST['asFsource'];

        $query = "INSERT INTO `research 10.8.9`(`AStitle`, `ASshortDesc`, `asT_Cost`, `asFsource`) 
            VALUES ('$ASt','$ASsd','$asT_C','$asFS')";
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