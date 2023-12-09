<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header10.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $nSWDm = $_POST['numSWDmale'];
        $nSWDf = $_POST['numSWDfemale'];
        $nSWDt = $_POST['numSWDtotal'];
        $psD_S = $_POST['psychosocialDis_S'];
        $CID_S = $_POST['CI_Dis_S'];
        $lD_S = $_POST['learningDis_S'];
        $vD_S = $_POST['visualDis_S'];
        $lmD_S = $_POST['locoDis_S'];
        $cD_S = $_POST['commDis_S'];
        $nSWPI = $_POST['numSWPI_S'];

        $update_query = "UPDATE `research 10.3.1` SET numSWDmale = '$nSWDm', numSWDfemale = '$nSWDf', numSWDtotal = '$nSWDt', psychosocialDis_S = '$psD_S', CI_Dis_S = '$CID_S', learningDis_S = '$lD_S', visualDis_S = '$vD_S', locoDis_S = '$lmD_S', commDis_S = '$cD_S ', numSWPI_S = '$nSWPI' WHERE `10.3.1 ID` = '$id'";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg10/up_delsdg10.php?message=Update Successful");
        } else {
            die("Update query failed. " . mysqli_error($conn));
        }
    }
    
    $sql = "SELECT * FROM `research 10.3.1` WHERE `10.3.1 ID` = '$id'";
    $select = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {

        $nSWDm = $row['numSWDmale'];
        $nSWDf = $row['numSWDfemale'];
        $nSWDt = $row['numSWDtotal'];
        $psD_S = $row['psychosocialDis_S'];
        $CID_S = $row['CI_Dis_S'];
        $lD_S = $row['learningDis_S'];
        $vD_S = $row['visualDis_S'];
        $lmD_S = $row['locoDis_S'];
        $cD_S = $row['commDis_S'];
        $nSWPI = $row['numSWPI_S'];
        ?>
        <div class="container">
                <div class="collapse w-100 h-auto p-3" id="research1031" style="display: block ;">
                    <h2 class="text-center pb-5">Proportion of students with disabilities</h2>
                    <form action="" method="post">
                    <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male students with disabilities</span>
                            <input type="text" class="form-control" value="<?php echo "$nSWDm" ?>" name="numSWDmale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female students with disabilities</span>
                            <input type="text" class="form-control" value="<?php echo "$nSWDf" ?>" name="numSWDfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of students with disabilities</span>
                            <input type="text" class="form-control" value="<?php echo "$nSWDt" ?>" name="numSWDtotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Psychosocial disability (ex. anxiety, depression)</span>
                            <input type="text" class="form-control" value="<?php echo "$psD_S" ?>" name="psychosocialDis_S"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Disability caused by chronic illness</span>
                            <input type="text" class="form-control" value="<?php echo "$CID_S" ?>" name="CI_Dis_S"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Learning disability</span>
                            <input type="text" class="form-control" value="<?php echo "$lD_S" ?>" name="learningDis_S"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Visual disability</span>
                            <input type="text" class="form-control" value="<?php echo "$vD_S" ?>" name="visualDis_S"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Orthopedic/Locomotor disability</span>
                            <input type="text" class="form-control" value="<?php echo "$lmD_S" ?>" name="locoDis_S"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Communication disability</span>
                            <input type="text" class="form-control" value="<?php echo "$cD_S" ?>" name="commDis_S"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of PWDs students that have PWD ID</span>
                            <input type="text" class="form-control" value="<?php echo "$nSWPI" ?>" name="numSWPI_S"
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
    