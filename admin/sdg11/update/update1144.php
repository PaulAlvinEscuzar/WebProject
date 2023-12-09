<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header11.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $num_work_arr = $_POST['num_work_arr'];
        $num_work_remotely = $_POST['num_work_remotely'];
        $num_working_week = $_POST['num_working_week'];
        $num_working_arr = $_POST['num_working_arr'];
        
        $update_query = "UPDATE `research11_4_4` SET num_work_arr = '$num_work_arr', num_work_remotely = '$num_work_remotely', num_working_week = '$num_working_week', num_working_arr = '$num_working_arr' WHERE ID = '$id'";
        $update = mysqli_query($conn,$update_query);

        if($update){
            header("Location:../../../admin/sdg11/up_delsdg11.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research11_4_4` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $id = $row['id'];
            $num_work_arr = $row['num_work_arr'];
            $num_work_remotely = $row['num_work_remotely'];
            $num_working_week = $row['num_working_week'];
            $num_working_arr = $row['num_working_arr'];
?>
<div class="collapse w-100 h-auto" id="research1144" style="display: block ;">  
    <h2 class="text-center pb-5">Proportion of employees that practice remote working</h2>
    <form action="" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of employees that practice flexible work arrangements:</span>
            <input type="text" class="form-control" value="<?php echo "$num_work_arr" ?>" name="num_work_arr"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number or employees that work remotely:</span>
            <input type="text" class="form-control" value="<?php echo "$num_work_remotely"?>" name="num_work_remotely"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of employees that practice condensed working week</span>
            <input type="text" class="form-control" value="<?php echo "$num_working_week" ?>" name="num_working_week"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">% of the employee population practice sustainable working arrangements:</span>
            <input type="text" class="form-control" value="<?php echo "$num_working_arr" ?>" name="num_working_arr"
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