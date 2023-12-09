<?php include '../../../includes/db.php';

if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    $sql = "DELETE FROM `research4.2.2` WHERE ID ='$id'";
    $delete = mysqli_query($conn,$sql);

    if($delete){
        header("Location:../../../admin/sdg4/up_delsdg4.php?message=Delete Successful");
    }
}

?>