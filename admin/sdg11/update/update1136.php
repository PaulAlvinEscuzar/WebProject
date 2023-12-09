<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header11.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $num_of_projects = $_POST['num_of_projects'];
                            $title_of_projects = $_POST['title_of_projects'];
                            $short_des = $_POST['short_des'];
                            $total_cost = $_POST['total_cost'];
                            $fund_source = $_POST['fund_source'];

        $update_query = "UPDATE `research11_3_6` SET num_of_projects = '$num_of_projects', title_of_projects = '$title_of_projects', short_des = '$short_des', total_cost = '$total_cost', fund_source = '$fund_source' WHERE ID = '$id'";
        $update = mysqli_query($conn,$update_query);

        if($update){
            header("Location:../../../admin/sdg11/up_delsdg11.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research11_3_6` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $id = $row['id'];
            $num_of_projects = $row['num_of_projects'];
                            $title_of_projects = $row['title_of_projects'];
                            $short_des = $row['short_des'];
                            $total_cost = $row['total_cost'];
                            $fund_source = $row['fund_source'];
?>
<div class="collapse w-100 h-auto" id="research1136" style="display: block ;">  
    <h2 class="text-center pb-5">Record and preserve cultural heritage</h2>
    <form action="" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of projects intended to preserve cultural heritage:</span>
            <input type="text" class="form-control" value="<?php echo "$num_of_projects" ?>" name="num_of_projects"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Title of project:</span>
            <input type="text" class="form-control" value="<?php echo "$title_of_projects"?>" name="title_of_projects"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Short description:</span>
            <input type="text" class="form-control" value="<?php echo "$short_des" ?>" name="short_des"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total cost:</span>
            <input type="text" class="form-control" value="<?php echo "$total_cost"?>" name="total_cost"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Fund source:</span>
            <input type="text" class="form-control" value="<?php echo "$fund_source" ?>" name="fund_source"
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