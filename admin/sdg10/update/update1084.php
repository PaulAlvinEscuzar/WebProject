<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header10.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $PPA1084t = $_POST['PPA1084title'];
        $PPA1084sD = $_POST['PPA1084shortDesc'];
        $PPA1084TC = $_POST['ppa1084T_Cost'];
        $PPA1084Fs = $_POST['ppa1084Fsource'];
        $PPA1084E = $_POST['PPA1084evidence'];

        $update_query = "UPDATE `research 10.8.4` SET PPA1084title = '$PPA1084t', PPA1084shortDesc = '$PPA1084sD', ppa1084T_Cost = '$PPA1084TC', ppa1084Fsource = '$PPA1084Fs', PPA1084evidence = '$PPA1084E' WHERE `10.8.4 ID` = '$id'";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg10/up_delsdg10.php?message=Update Successful");
        } else {
            die("Update query failed. " . mysqli_error($conn));
        }
    }
    
    $sql = "SELECT * FROM `research 10.8.4` WHERE `10.8.4 ID` = '$id'";
    $select = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {

            $PPA1084t = $row['PPA1084title'];
            $PPA1084sD = $row['PPA1084shortDesc'];
            $PPA1084TC = $row['ppa1084T_Cost'];
            $PPA1084Fs = $row['ppa1084Fsource'];
            $PPA1084E = $row['PPA1084evidence'];

        ?>
        <div class="container">
                <div class="collapse w-100 h-auto p-3" id="research1084" style="display: block ;">
                    <h2 class="text-center pb-5">Anti-Discrimination Policies</h2>
                    <form action="" method="post">
                    <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Title of the PPA</span>
                            <input type="text" class="form-control" value="<?php echo "$PPA1084t" ?>" name="PPA1084title"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Short description of the PPA</span>
                            <input type="text" class="form-control" value="<?php echo "$PPA1084sD" ?>" name="PPA1084shortDesc"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total cost</span>
                            <input type="text" class="form-control" value="<?php echo "$PPA1084TC" ?>" name="ppa1084T_Cost"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Fund source</span>
                            <input type="text" class="form-control" value="<?php echo "$PPA1084Fs" ?>" name="ppa1084Fsource"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Evidence</span>
                            <input type="text" class="form-control" value="<?php echo "$PPA1084E" ?>" name="PPA1084evidence"
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
    