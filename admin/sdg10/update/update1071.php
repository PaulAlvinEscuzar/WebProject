<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header10.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $nR_Sm = $_POST['numRefugee_Smale'];
        $nR_Sf = $_POST['numRefugee_Sfemale'];
        $nR_St = $_POST['numRefugee_Stotal'];

        $update_query = "UPDATE `research 10.7.1` SET numRefugee_Smale = '$nR_Sm', numRefugee_Sfemale = '$nR_Sf', numRefugee_Stotal = '$nR_St' WHERE `10.7.1 ID` = '$id'";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg10/up_delsdg10.php?message=Update Successful");
        } else {
            die("Update query failed. " . mysqli_error($conn));
        }
    }
    
    $sql = "SELECT * FROM `research 10.7.1` WHERE `10.7.1 ID` = '$id'";
    $select = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {

        $nR_Sm = $row['numRefugee_Smale'];
        $nR_Sf = $row['numRefugee_Sfemale'];
        $nR_St = $row['numRefugee_Stotal'];

        ?>
        <div class="container">
                <div class="collapse w-100 h-auto p-3" id="research1072" style="display: block ;">
                    <h2 class="text-center pb-5">Proportion of refugee student</h2>
                    <form action="" method="post">
                    <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male refugee student</span>
                            <input type="text" class="form-control" value="<?php echo "$nR_Sm" ?>" name="numRefugee_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female refugee student</span>
                            <input type="text" class="form-control" value="<?php echo "$nR_Sf" ?>" name="numRefugee_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of refugee student</span>
                            <input type="text" class="form-control" value="<?php echo "$nR_St" ?>" name="numRefugee_Stotal"
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
    