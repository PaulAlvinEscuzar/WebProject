
<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $PPA1084t = $_POST['PPA1084title'];
        $PPA1084sD = $_POST['PPA1084shortDesc'];
        $PPA1084TC = $_POST['ppa1084T_Cost'];
        $PPA1084Fs = $_POST['ppa1084Fsource'];
        $PPA1084E = $_POST['PPA1084evidence'];

        $query = "INSERT INTO `research 10.8.4`(`PPA1084title`, `PPA1084shortDesc`, `ppa1084T_Cost`, `ppa1084Fsource`, `PPA1084evidence`) 
            VALUES ('$PPA1084t','$PPA1084sD','$PPA1084TC','$PPA1084Fs','$PPA1084E')";
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