
<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $SSt = $_POST['SStitle'];
        $SSsd = $_POST['SSshortDesc'];
        $ssT_C = $_POST['ssT_Cost'];
        $ssFS = $_POST['ssFsource'];

        $query = "INSERT INTO `research 10.8.8`(`SStitle`, `SSshortDesc`, `ssT_Cost`, `ssFsource`) 
            VALUES ('$SSt','$SSsd','$ssT_C','$ssFS')";
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