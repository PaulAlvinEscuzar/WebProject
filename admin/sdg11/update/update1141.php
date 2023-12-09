<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header11.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $prct_walks = $_POST['prct_walks'];
        $prct_bicycle = $_POST['prct_bicycle'];
        $prct_commute = $_POST['prct_commute'];
        $prct_vehicle = $_POST['prct_vehicle'];
        $prct_carpools = $_POST['prct_carpools'];

        $update_query = "UPDATE `research11_4_1` SET prct_walks = '$prct_walks', prct_bicycle = '$prct_bicycle', prct_commute = '$prct_commute', prct_vehicle = '$prct_vehicle' , prct_carpools = '$prct_carpools' WHERE ID = '$id'";
        $update = mysqli_query($conn,$update_query);

        if($update){
            header("Location:../../../admin/sdg11/up_delsdg11.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research11_4_1` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $id = $row['id'];
            $prct_walks = $row['prct_walks'];
            $prct_bicycle = $row['prct_bicycle'];
            $prct_commute = $row['prct_commute'];
            $prct_vehicle = $row['prct_vehicle'];
            $prct_carpools = $row['prct_carpools'];
?>
<div class="collapse w-100 h-auto" id="research1141" style="display: block ;">  
    <h2 class="text-center pb-5">Campus Population commuting practices</h2>
    <form action="" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">% total campus population walks to school</span>
            <input type="text" class="form-control" value="<?php echo "$prct_walks" ?>" name="prct_walks"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">% total campus population use bicycle to go to school</span>
            <input type="text" class="form-control" value="<?php echo "$prct_bicycle"?>" name="prct_bicycle"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">% total campus population commute to school</span>
            <input type="text" class="form-control" value="<?php echo "$prct_commute" ?>" name="prct_commute"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">% total campus population use their own vehicle to go to school</span>
            <input type="text" class="form-control" value="<?php echo "$prct_vehicle" ?>" name="prct_vehicle"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">% total campus population carpools with relatives/friends to go to school</span>
            <input type="text" class="form-control" value="<?php echo "$prct_carpools"?>" name="prct_carpools"
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