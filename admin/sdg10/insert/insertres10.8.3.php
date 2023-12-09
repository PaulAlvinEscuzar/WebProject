
<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $RPt = $_POST['RPtitle'];
        $RPsd = $_POST['RPshortDesc'];
        $rpT_C = $_POST['rpT_Cost'];
        $rpFS = $_POST['rpFsource'];

        $query = "INSERT INTO `research 10.8.3`(`RPtitle`, `RPshortDesc`, `rpT_Cost`, `rpFsource`) 
            VALUES ('$RPt','$RPsd','$rpT_C','$rpFS')";
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