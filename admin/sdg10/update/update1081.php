<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header10.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $PPA1081t = $_POST['PPA1081title'];
        $PPA1081sD = $_POST['PPA1081shortDesc'];
        $PPA1081TC = $_POST['ppa1081T_Cost'];
        $PPA1081Fs = $_POST['ppa1081Fsource'];
        $PPA1081E = $_POST['PPA1081evidence'];

        $update_query = "UPDATE `research 10.8.1` SET PPA1081title = '$PPA1081t', PPA1081shortDesc = '$PPA1081sD', ppa1081T_Cost = '$PPA1081TC', ppa1081Fsource = '$PPA1081Fs', PPA1081evidence = '$PPA1081E' WHERE `10.8.1 ID` = '$id'";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg10/up_delsdg10.php?message=Update Successful");
        } else {
            die("Update query failed. " . mysqli_error($conn));
        }
    }
    
    $sql = "SELECT * FROM `research 10.8.1` WHERE `10.8.1 ID` = '$id'";
    $select = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {

        $PPA1081t = $row['PPA1081title'];
        $PPA1081sD = $row['PPA1081shortDesc'];
        $PPA1081TC = $row['ppa1081T_Cost'];
        $PPA1081Fs = $row['ppa1081Fsource'];
        $PPA1081E = $row['PPA1081evidence'];

        ?>
        <div class="container">
                <div class="collapse w-100 h-auto p-3" id="research1081" style="display: block ;">
                    <h2 class="text-center pb-5">Non-discriminatory admissions policy</h2>
                    <form action="" method="post">
                    <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Title of the PPA</span>
                            <input type="text" class="form-control" value="<?php echo "$PPA1081t" ?>" name="PPA1081title"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Short description of the PPA</span>
                            <input type="text" class="form-control" value="<?php echo "$PPA1081sD" ?>" name="PPA1081shortDesc"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total cost</span>
                            <input type="text" class="form-control" value="<?php echo "$PPA1081TC" ?>" name="ppa1081T_Cost"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Fund source</span>
                            <input type="text" class="form-control" value="<?php echo "$PPA1081Fs" ?>" name="ppa1081Fsource"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Evidence</span>
                            <input type="text" class="form-control" value="<?php echo "$PPA1081E" ?>" name="PPA1081evidence"
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
    