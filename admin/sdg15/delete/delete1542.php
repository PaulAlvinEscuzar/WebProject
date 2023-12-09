<?php include '../../../includes/db.php';

if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    $sql = "DELETE FROM `research15.4.2` WHERE ID ='$id'";
    $delete = mysqli_query($conn,$sql);

    if($delete){
        header("Location:../../../admin/sdg15/up_delsdg15.php?message=Delete Successful");
    }
}

?>