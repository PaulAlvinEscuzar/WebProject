<?php include '../../../includes/db.php';

if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    $sql = "DELETE FROM `research11_4_6` WHERE ID ='$id'";
    $delete = mysqli_query($conn,$sql);

    if($delete){
        header("Location:../../../admin/sdg11/up_delsdg11.php?message=Delete Successful");
    }
}

?>