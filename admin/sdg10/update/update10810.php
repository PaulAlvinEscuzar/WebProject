<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header10.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $PPA10810t = $_POST['PPA10810title'];
        $PPA10810sD = $_POST['PPA10810shortDesc'];
        $PPA10810TC = $_POST['ppa10810T_Cost'];
        $PPA10810Fs = $_POST['ppa10810Fsource'];

        $update_query = "UPDATE `research 10.8.10` SET PPA10810title = '$PPA10810t', PPA10810shortDesc = '$PPA10810sD', ppa10810T_Cost = '$PPA10810TC', ppa10810Fsource = '$PPA10810Fs' WHERE `10.8.10 ID` = '$id'";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg10/up_delsdg10.php?message=Update Successful");
        } else {
            die("Update query failed. " . mysqli_error($conn));
        }
    }
    
    $sql = "SELECT * FROM `research 10.8.10` WHERE `10.8.10 ID` = '$id'";
    $select = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {

        $PPA10810t = $row['PPA10810title'];
        $PPA10810sD = $row['PPA10810shortDesc'];
        $PPA10810TC = $row['ppa10810T_Cost'];
        $PPA10810Fs = $row['ppa10810Fsource'];

        ?>
        <div class="container">
                <div class="collapse w-100 h-auto p-3" id="research10810" style="display: block ;">
                    <h2 class="text-center pb-5">Non-discriminatory admissions policy</h2>
                    <form action="" method="post">
                    <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Title of the PPA</span>
                            <input type="text" class="form-control" value="<?php echo "$PPA10810t" ?>" name="PPA10810title"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Short description of the PPA</span>
                            <input type="text" class="form-control" value="<?php echo "$PPA10810sD" ?>" name="PPA10810shortDesc"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total cost</span>
                            <input type="text" class="form-control" value="<?php echo "$PPA10810TC" ?>" name="ppa10810T_Cost"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Fund source</span>
                            <input type="text" class="form-control" value="<?php echo "$PPA10810Fs" ?>" name="ppa10810Fsource"
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
    