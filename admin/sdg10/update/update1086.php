<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header10.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {

        $PPA1086t = $_POST['PPA1086title'];
        $PPA1086sD = $_POST['PPA1086shortDesc'];
        $PPA1086TC = $_POST['ppa1086T_Cost'];
        $PPA1086Fs = $_POST['ppa1086Fsource'];

        $update_query = "UPDATE `research 10.8.6` SET PPA1086title = '$PPA1086t', PPA1086shortDesc = '$PPA1086sD', ppa1086T_Cost = '$PPA1086TC', ppa1086Fsource = '$PPA1086Fs' WHERE `10.8.6 ID` = '$id'";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg10/up_delsdg10.php?message=Update Successful");
        } else {
            die("Update query failed. " . mysqli_error($conn));
        }
    }
    
    $sql = "SELECT * FROM `research 10.8.6` WHERE `10.8.6 ID` = '$id'";
    $select = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {

            $PPA1086t = $row['PPA1086title'];
            $PPA1086sD = $row['PPA1086shortDesc'];
            $PPA1086TC = $row['ppa1086T_Cost'];
            $PPA1086Fs = $row['ppa1086Fsource'];

        ?>
        <div class="container">
                <div class="collapse w-100 h-auto p-3" id="research1086" style="display: block ;">
                    <h2 class="text-center pb-5">Support for underrepresented groups (exclude PWDs)</h2>
                    <form action="" method="post">
                    <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Title of the PPA</span>
                            <input type="text" class="form-control" value="<?php echo "$PPA1086t" ?>" name="PPA1086title"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Short description of the PPA</span>
                            <input type="text" class="form-control" value="<?php echo "$PPA1086sD" ?>" name="PPA1086shortDesc"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total cost</span>
                            <input type="text" class="form-control" value="<?php echo "$PPA1086TC" ?>" name="ppa1086T_Cost"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Fund source</span>
                            <input type="text" class="form-control" value="<?php echo "$PPA1086Fs" ?>" name="ppa1086Fsource"
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
    