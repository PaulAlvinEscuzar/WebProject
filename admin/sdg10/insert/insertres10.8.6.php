
<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $PPA1086t = $_POST['PPA1086title'];
        $PPA1086sD = $_POST['PPA1086shortDesc'];
        $PPA1086TC = $_POST['ppa1086T_Cost'];
        $PPA1086Fs = $_POST['ppa1086Fsource'];

        $query = "INSERT INTO `research 10.8.6`(`PPA1086title`, `PPA1086shortDesc`, `ppa1086T_Cost`, `ppa1086Fsource`) 
            VALUES ('$PPA1086t','$PPA1086sD','$PPA1086TC','$PPA1086Fs')";
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