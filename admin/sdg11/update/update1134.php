<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header11.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $no_school_act = $_POST['no_school_act'];
        $no_event = $_POST['no_event'];

        $update_query = "UPDATE `research11_3_4` SET no_school_act = '$no_school_act', no_event = '$no_event' WHERE ID = '$id'";
        $update = mysqli_query($conn,$update_query);

        if($update){
            header("Location:../../../admin/sdg11/up_delsdg11.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research11_3_4` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $id = $row['id'];
            $no_school_act = $row['no_school_act'];
            $no_event = $row['no_event'];
?>
<div class="collapse w-100 h-auto" id="research1133" style="display: block ;">  
    <h2 class="text-center pb-5">Public access to green spaces</h2>
    <form action="" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of school activities held at campus open/green spaces:</span>
            <input type="text" class="form-control" value="<?php echo "$no_school_act" ?>" name="no_school_act"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of events open to general public held at campus open/green spaces</span>
            <input type="text" class="form-control" value="<?php echo "$no_event"?>" name="no_event"
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