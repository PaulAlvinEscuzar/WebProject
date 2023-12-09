<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header11.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $num_of_collab = $_POST['num_of_collab'];
        
        $update_query = "UPDATE `research11_5_8` SET num_of_collab = '$num_of_collab 'WHERE ID = '$id'";
        $update = mysqli_query($conn,$update_query);

        if($update){
            header("Location:../../../admin/sdg11/up_delsdg11.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research11_5_8` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $id = $row['id'];
            $num_of_collab = $row['num_of_collab'];
?>
<div class="collapse w-100 h-auto" id="research1148" style="display: block ;">  
    <h2 class="text-center pb-5">Local authority collaboration regarding planning and development</h2>
    <form action="" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of collaborations with local authority for the affordable housing for employees and students:</span>
            <input type="text" class="form-control" value="<?php echo "$num_of_collab" ?>" name="num_of_collab"
                aria-describedby="basic-addon1">
        </div>

                <div class="d-grid">
            <button type="submit" class="btn btn-success mb-3" name="submit">Update Research</button>
            <a href="../../../admin/sdg11/up_delsdg11.php" class="btn btn-danger">Cancel</a>
        </div>
    </form>
</div>

<?php
        }
    }
}


?>