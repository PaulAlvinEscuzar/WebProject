<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header10.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $SSt = $_POST['SStitle'];
        $SSsd = $_POST['SSshortDesc'];
        $ssT_C = $_POST['ssT_Cost'];
        $ssFS = $_POST['ssFsource'];

        $update_query = "UPDATE `research 10.8.8` SET SStitle = '$SSt', SSshortDesc = '$SSsd', ssT_Cost = '$ssT_C', ssFsource = '$ssFS' WHERE `10.8.8 ID` = '$id'";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg10/up_delsdg10.php?message=Update Successful");
        } else {
            die("Update query failed. " . mysqli_error($conn));
        }
    }
    
    $sql = "SELECT * FROM `research 10.8.8` WHERE `10.8.8 ID` = '$id'";
    $select = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {

        $SSt = $row['SStitle'];
        $SSsd = $row['SSshortDesc'];
        $ssT_C = $row['ssT_Cost'];
        $ssFS = $row['ssFsource'];

        ?>
        <div class="container">
                <div class="collapse w-100 h-auto p-3" id="research1088" style="display: block ;">
                    <h2 class="text-center pb-5">Disability support services for students and employees</h2>
                    <form action="" method="post">
                    <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Title/Type of support service</span>
                            <input type="text" class="form-control" value="<?php echo "$SSt" ?>" name="SStitle"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Short description</span>
                            <input type="text" class="form-control" value="<?php echo "$SSsd" ?>" name="SSshortDesc"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total cost</span>
                            <input type="text" class="form-control" value="<?php echo "$ssT_C" ?>" name="ssT_Cost"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Fund source</span>
                            <input type="text" class="form-control" value="<?php echo "$ssFS" ?>" name="ssFsource"
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
    