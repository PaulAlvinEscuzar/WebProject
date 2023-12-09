<?php 
include '../../../includes/db.php';

if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    $sql = "DELETE FROM `17.4.2` WHERE id ='$id'";
    $delete = mysqli_query($conn,$sql);

    if($delete){
        header("Location:../edit/edit17.4.2.php?message=Delete Successful");
    }
}

?>