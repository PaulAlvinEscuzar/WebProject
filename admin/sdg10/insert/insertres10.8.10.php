
<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $PPA10810t = $_POST['PPA10810title'];
        $PPA10810sD = $_POST['PPA10810shortDesc'];
        $PPA10810TC = $_POST['ppa10810T_Cost'];
        $PPA10810Fs = $_POST['ppa10810Fsource'];

        $query = "INSERT INTO `research 10.8.10`(`PPA10810title`, `PPA10810shortDesc`, `ppa10810T_Cost`, `ppa10810Fsource`) 
            VALUES ('$PPA10810t','$PPA10810sD','$PPA10810TC','$PPA10810Fs')";
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