<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header11.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $TotalCampus = $_POST['TotalCampus'];
                            $AllocBudget = $_POST['AllocBudget'];
                            $CampusExpen = $_POST['CampusExpen'];

        $update_query = "UPDATE `research11_3_8` SET TotalCampus = '$TotalCampus', AllocBudget = '$AllocBudget', CampusExpen = '$CampusExpen' WHERE ID = '$id'";
        $update = mysqli_query($conn,$update_query);

        if($update){
            header("Location:../../../admin/sdg11/up_delsdg11.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research11_3_8` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $id = $row['id'];
            $TotalCampus = $row['TotalCampus'];
                            $AllocBudget = $row['AllocBudget'];
                            $CampusExpen = $row['CampusExpen'];
?>
<div class="collapse w-100 h-auto" id="research1138" style="display: block ;">  
    <h2 class="text-center pb-5">Arts and heritage expenditure</h2>
    <form action="" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total campus expenditure on arts and heritage:</span>
            <input type="text" class="form-control" value="<?php echo "$TotalCampus" ?>" name="TotalCampus"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">% of the total allocated budget for arts and heritage was utilized.</span>
            <input type="text" class="form-control" value="<?php echo "$AllocBudget"?>" name="AllocBudget"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">% of total campus expenditure was allotted to arts and heritage.</span>
            <input type="text" class="form-control" value="<?php echo "$CampusExpen" ?>" name="CampusExpen"
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