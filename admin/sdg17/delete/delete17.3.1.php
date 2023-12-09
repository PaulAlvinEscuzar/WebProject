<?php 
include '../../../includes/db.php';

if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    $sql = "DELETE FROM `17.3.1` WHERE id ='$id'";
    $delete = mysqli_query($conn,$sql);

    if($delete){
        header("Location:../edit/edit17.3.1.php?message=Delete Successful");
    }
}

?>