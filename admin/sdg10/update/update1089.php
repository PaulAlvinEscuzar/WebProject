<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header10.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $ASt = $_POST['AStitle'];
        $ASsd = $_POST['ASshortDesc'];
        $asT_C = $_POST['asT_Cost'];
        $asFS = $_POST['asFsource'];

        $update_query = "UPDATE `research 10.8.9` SET AStitle = '$ASt', ASshortDesc = '$ASsd', asT_Cost = '$asT_C', asFsource = '$asFS' WHERE `10.8.9 ID` = '$id'";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg10/up_delsdg10.php?message=Update Successful");
        } else {
            die("Update query failed. " . mysqli_error($conn));
        }
    }
    
    $sql = "SELECT * FROM `research 10.8.9` WHERE `10.8.9 ID` = '$id'";
    $select = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {

        $ASt = $row['AStitle'];
        $ASsd = $row['ASshortDesc'];
        $asT_C = $row['asT_Cost'];
        $asFS = $row['asFsource'];

        ?>
        <div class="container">
                <div class="collapse w-100 h-auto p-3" id="research1089" style="display: block ;">
                    <h2 class="text-center pb-5">Disability access scheme</h2>
                    <form action="" method="post">
                    <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Title/Type of access scheme</span>
                            <input type="text" class="form-control" value="<?php echo "$ASt" ?>" name="AStitle"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Short description</span>
                            <input type="text" class="form-control" value="<?php echo "$ASsd" ?>" name="ASshortDesc"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total cost</span>
                            <input type="text" class="form-control" value="<?php echo "$asT_C" ?>" name="asT_Cost"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Fund source</span>
                            <input type="text" class="form-control" value="<?php echo "$asFS" ?>" name="asFsource"
                                aria-describedby="basic-addon1" required>
                        </div>
                        
                        <div class="d-grid">
                            <button type="submit" class="btn mb-3" name="submit" style="background-color: #e01a83; color:white;">Update
                                Research</button>
                                <a href="../../../admin/sdg10/up_delsdg10.php" class="btn btn-danger">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
            <?php

        }
    }
}
    