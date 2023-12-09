<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header11.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $num_of_performances = $_POST['num_of_performances'];
        $num_of_perfomers = $_POST['num_of_perfomers'];
        $num_of_choir_internal = $_POST['num_of_choir_internal'];
        $num_of_choir_external = $_POST['num_of_choir_external'];
        $num_of_theater_internal = $_POST['num_of_theater_internal'];
        $num_of_theater_external = $_POST['num_of_theater_external'];
        $num_of_dance_internal = $_POST['num_of_dance_internal'];
        $num_of_dance_external = $_POST['num_of_dance_external'];
        $num_of_band_internal = $_POST['num_of_band_internal'];
        $num_of_band_external = $_POST['num_of_band_external'];
        $num_of_paintings = $_POST['num_of_paintings'];
        $val_of_paintings = $_POST['val_of_paintings'];

        $update_query = "UPDATE `research11_3_5` SET num_of_performances = '$num_of_performances', num_of_perfomers = '$num_of_perfomers',  num_of_choir_internal = '$num_of_choir_internal', num_of_choir_external = '$num_of_choir_external', num_of_theater_internal = '$num_of_theater_internal', num_of_theater_external = '$num_of_theater_external', num_of_dance_internal = '$num_of_dance_internal', num_of_dance_external = '$num_of_dance_external', num_of_band_internal = '$num_of_band_internal', num_of_band_external = '$num_of_band_external', num_of_paintings = '$num_of_paintings', num_of_band_external = '$num_of_band_external'WHERE ID = '$id'";
        $update = mysqli_query($conn,$update_query);

        if($update){
            header("Location:../../../admin/sdg11/up_delsdg11.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research11_3_5` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $id = $row['id'];
            $num_of_performances = $row['num_of_performances'];
        $num_of_perfomers = $row['num_of_perfomers'];
        $num_of_choir_internal = $row['num_of_choir_internal'];
                            $num_of_choir_external = $row['num_of_choir_external'];
                            $num_of_theater_internal = $row['num_of_theater_internal'];
                            $num_of_theater_external = $row['num_of_theater_external'];
                            $num_of_dance_internal = $row['num_of_dance_internal'];
                            $num_of_dance_external = $row['num_of_dance_external'];
                            $num_of_band_internal = $row['num_of_band_internal'];
                            $num_of_band_external = $row['num_of_band_external'];
                            $num_of_paintings = $row['num_of_paintings'];
                            $val_of_paintings = $row['val_of_paintings'];
?>
<div class="collapse w-100 h-auto" id="research1133" style="display: block ;">  
    <h2 class="text-center pb-5">Arts and Heritage Contribution</h2>
    <form action="" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of performances:</span>
            <input type="text" class="form-control" value="<?php echo "$num_of_performances" ?>" name="num_of_performances"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of performers:</span>
            <input type="text" class="form-control" value="<?php echo "$num_of_perfomers"?>" name="num_of_perfomers"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of campus choir groups performances (with list of events) (Internal)</span>
            <input type="text" class="form-control" value="<?php echo "$num_of_choir_internal" ?>" name="num_of_choir_internal"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of campus choir groups performances (with list of events) (External)</span>
            <input type="text" class="form-control" value="<?php echo "$num_of_choir_external"?>" name="num_of_choir_external"
                aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of campus theater groups performances (with list of events) (Internal)</span>
            <input type="text" class="form-control" value="<?php echo "$num_of_theater_internal" ?>" name="num_of_theater_internal"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of campus theater groups performances (with list of events) (External)</span>
            <input type="text" class="form-control" value="<?php echo "$num_of_theater_external"?>" name="num_of_theater_external"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of campus dance group performances (with list of events) (Internal)</span>
            <input type="text" class="form-control" value="<?php echo "$num_of_dance_internal" ?>" name="num_of_dance_internal"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of campus dance group performances (with list of events) (External)</span>
            <input type="text" class="form-control" value="<?php echo "$num_of_dance_external"?>" name="num_of_dance_external"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of campus band group performances (with list of events) (Internal)</span>
            <input type="text" class="form-control" value="<?php echo "$num_of_band_internal" ?>" name="num_of_band_internal"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of campus band group performances (with list of events) (External)</span>
            <input type="text" class="form-control" value="<?php echo "$num_of_band_external"?>" name="num_of_band_external"
                aria-describedby="basic-addon1">
        </div>


        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total number of donated paintings and sculptures to community museums:</span>
            <input type="text" class="form-control" value="<?php echo "$num_of_paintings" ?>" name="num_of_paintings"
                aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Total amount value of donated paintings and sculptures:</span>
            <input type="text" class="form-control" value="<?php echo "$val_of_paintings"?>" name="val_of_paintings"
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