
<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $PPA1081t = $_POST['PPA1081title'];
        $PPA1081sD = $_POST['PPA1081shortDesc'];
        $PPA1081TC = $_POST['ppa1081T_Cost'];
        $PPA1081Fs = $_POST['ppa1081Fsource'];
        $PPA1081E = $_POST['PPA1081evidence'];

        
        

        $query = "INSERT INTO `research 10.8.1`(`PPA1081title`, `PPA1081shortDesc`, `ppa1081T_Cost`, `ppa1081Fsource`, `PPA1081evidence`,`score`) 
            VALUES ('$PPA1081t','$PPA1081sD','$PPA1081TC','$PPA1081Fs','$PPA1081E','$score')";
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