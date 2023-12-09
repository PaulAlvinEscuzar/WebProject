<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header11.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $campusLand = $_POST['campusLand'];
        $campusBuilding = $_POST['campusBuilding'];
        $campusVegetation = $_POST['campusVegetation'];
        $parkingArea = $_POST['parkingArea'];
        $pedestrianPath = $_POST['pedestrianPath'];
        $campusSettings = $_POST['campusSettings'];

        $update_query = "UPDATE `research11_2_1` SET campusLand = '$campusLand', campusBuilding = '$campusBuilding', campusVegetation = '$campusVegetation', parkingArea = '$parkingArea', pedestrianPath = '$pedestrianPath', campusSettings = '$campusSettings' WHERE ID = '$id'";
        $update = mysqli_query($conn,$update_query);

        if($update){
            header("Location:../../../admin/sdg11/up_delsdg11.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research11_2_1` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $campusLand = $row['campusLand'];
            $campusBuilding = $row['campusBuilding'];
             $campusVegetation = $row['campusVegetation'];
            $parkingArea = $row['parkingArea'];
             $pedestrianPath = $row['pedestrianPath'];
              $campusSettings = $row['campusSettings'];
?>
<div class="collapse w-100 h-auto" id="research1111" style="display: block ;">
    <h2 class="text-center pb-5">Campus land use</h2>
    <form action="" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total campus land area</span>
            <input type="text" class="form-control" value="<?php echo "$campusLand" ?>" name="campusLand"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total campus building area</span>
            <input type="text" class="form-control" value="<?php echo "$campusBuilding"?>" name="campusBuilding"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total area in campus covered in forest vegetation</span>
            <input type="text" class="form-control" value="<?php echo "$campusVegetation" ?>" name="campusVegetation"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total ground parking area</span>
            <input type="text" class="form-control" value="<?php echo "$parkingArea" ?>" name="parkingArea"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of pedestrian paths on campus</span>
            <input type="text" class="form-control" value="<?php echo "$pedestrianPath" ?>" name="pedestrianPath"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Campus Setting</span>
            <input type="text" class="form-control" value="<?php echo "$campusSettings" ?>" name="campusSettings"
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