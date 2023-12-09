<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header11.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $StudWalk = $_POST['StudWalk'];
        $StudBike = $_POST['StudBike'];
        $StudCommute = $_POST['StudCommute'];
        $StudVehicle = $_POST['StudVehicle'];
        $StudCarpools = $_POST['StudCarpools'];
        $StudPopWalk = $_POST['StudPopWalk'];
        $StudPopBike = $_POST['StudPopBike'];
        $StudPopCommute = $_POST['StudPopCommute'];
        $StudPopVehicle = $_POST['StudPopVehicle'];
        $StudPopCarpools = $_POST['StudPopCarpools'];

        $update_query = "UPDATE `research11_3_9` SET StudWalk = '$StudWalk', StudBike = '$StudBike', StudCommute = '$StudCommute', StudVehicle = '$StudVehicle' , StudCarpools = '$StudCarpools' , StudPopWalk = '$StudPopWalk', StudPopBike = '$StudPopBike', StudPopCommute = '$StudPopCommute', StudPopVehicle = '$StudPopVehicle', StudPopCarpools = '$StudPopCarpools' WHERE ID = '$id'";
        $update = mysqli_query($conn,$update_query);

        if($update){
            header("Location:../../../admin/sdg11/up_delsdg11.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research11_3_9` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $id = $row['id'];
            $StudWalk = $row['StudWalk'];
            $StudBike = $row['StudBike'];
            $StudCommute = $row['StudCommute'];
            $StudVehicle = $row['StudVehicle'];
            $StudCarpools = $row['StudCarpools'];
            $StudPopWalk = $row['StudPopWalk'];
            $StudPopBike = $row['StudPopBike'];
            $StudPopCommute = $row['StudPopCommute'];
            $StudPopVehicle = $row['StudPopVehicle'];
            $StudPopCarpools = $row['StudPopCarpools'];
?>
<div class="collapse w-100 h-auto" id="research1139" style="display: block ;">  
    <h2 class="text-center pb-5">Student commuting practices</h2>
    <form action="" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of students who walk to school</span>
            <input type="text" class="form-control" value="<?php echo "$StudWalk" ?>" name="StudWalk"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of students who use bicycle:</span>
            <input type="text" class="form-control" value="<?php echo "$StudBike"?>" name="StudBike"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of students who commute:</span>
            <input type="text" class="form-control" value="<?php echo "$StudCommute" ?>" name="StudCommute"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of students who use their own vehicle:</span>
            <input type="text" class="form-control" value="<?php echo "$StudVehicle" ?>" name="StudVehicle"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of students who carpools:</span>
            <input type="text" class="form-control" value="<?php echo "$StudCarpools"?>" name="StudCarpools"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of students who carpools:</span>
            <input type="text" class="form-control" value="<?php echo "$StudPopWalk" ?>" name="StudPopWalk"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">% of total student population use bicycle to go to school</span>
            <input type="text" class="form-control" value="<?php echo "$StudPopBike" ?>" name="StudPopBike"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">% of total student population commute to school</span>
            <input type="text" class="form-control" value="<?php echo "$StudPopCommute"?>" name="StudPopCommute"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">%  of total student population use their own vehicle to go to school</span>
            <input type="text" class="form-control" value="<?php echo "$StudPopVehicle" ?>" name="StudPopVehicle"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">%  of the total student population carpools with relatives/friends to go to school.</span>
            <input type="text" class="form-control" value="<?php echo "$StudPopCarpools" ?>" name="StudPopCarpools"
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