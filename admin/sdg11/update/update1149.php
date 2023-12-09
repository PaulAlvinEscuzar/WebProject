<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header11.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $TotalNumPol = $_POST['TotalNumPol'];
        $TotalNumPrac = $_POST['TotalNumPrac'];
        
        
        $update_query = "UPDATE `research11_5_9` SET TotalNumPol = '$TotalNumPol', TotalNumPrac = '$TotalNumPrac' WHERE ID = '$id'";
        $update = mysqli_query($conn,$update_query);

        if($update){
            header("Location:../../../admin/sdg11/up_delsdg11.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research11_5_9` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $id = $row['id'];
            $TotalNumPol = $row['TotalNumPol'];
            $TotalNumPrac = $row['TotalNumPrac'];
?>
<div class="collapse w-100 h-auto" id="research1149" style="display: block ;">  
    <h2 class="text-center pb-5">Local Planning development-new build standards</h2>
    <form action="" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of policies and/or plans in adhering to sustainable standards of new builds:</span>
            <input type="text" class="form-control" value="<?php echo "$TotalNumPol" ?>" name="TotalNumPol"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of campus practices for sustainable standards of new builds:</span>
            <input type="text" class="form-control" value="<?php echo "$TotalNumPrac" ?>" name="TotalNumPrac"
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