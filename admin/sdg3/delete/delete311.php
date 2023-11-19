<?php include '../../../includes/db.php';

if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    $sql = "DELETE FROM `research3.1.1` WHERE ID ='$id'";
    $delete = mysqli_query($conn,$sql);

    if($delete){
        header("Location:../../../admin/sdg3/up_delsdg3.php?message=Delete Successful");
    }
}

?>