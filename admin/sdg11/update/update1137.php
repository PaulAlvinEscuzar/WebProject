<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header11.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $other_total_Num = $_POST['other_total_Num'];
        $Other_PPA_Title = $_POST['Other_PPA_Title'];
        $other_short_des = $_POST['other_short_des'];
        $other_total_cost = $_POST['other_total_cost'];
        $other_fund_source = $_POST['other_fund_source'];

        $update_query = "UPDATE `research11_3_7` SET other_total_Num = '$other_total_Num', Other_PPA_Title = '$Other_PPA_Title', other_short_des = '$other_short_des', other_total_cost = '$other_total_cost', other_fund_source = '$other_fund_source' WHERE ID = '$id'";
        $update = mysqli_query($conn,$update_query);

        if($update){
            header("Location:../../../admin/sdg11/up_delsdg11.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research11_3_7` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $id = $row['id'];
            $other_total_Num = $row['other_total_Num'];
                            $Other_PPA_Title = $row['Other_PPA_Title'];
                            $other_short_des = $row['other_short_des'];
                            $other_total_cost = $row['other_total_cost'];
                            $other_fund_source = $row['other_fund_source'];
?>
<div class="collapse w-100 h-auto" id="research1137" style="display: block ;">  
    <h2 class="text-center pb-5">Other campus’ support for arts and heritage</h2>
    <form action="" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of other support for arts and heritage:</span>
            <input type="text" class="form-control" value="<?php echo "$other_total_Num" ?>" name="other_total_Num"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Title of PPA:</span>
            <input type="text" class="form-control" value="<?php echo "$Other_PPA_Title"?>" name="Other_PPA_Title"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Short description:</span>
            <input type="text" class="form-control" value="<?php echo "$other_short_des" ?>" name="other_short_des"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total cost:</span>
            <input type="text" class="form-control" value="<?php echo "$other_total_cost"?>" name="other_total_cost"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Fund source:</span>
            <input type="text" class="form-control" value="<?php echo "$other_fund_source" ?>" name="other_fund_source"
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