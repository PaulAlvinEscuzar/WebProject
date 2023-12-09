<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header10.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $nEWDm = $_POST['numEWDmale'];
        $nEWDf = $_POST['numEWDfemale'];
        $nEWDt = $_POST['numEWDtotal'];
        $psD_E = $_POST['psychiatricDis_E'];
        $CID_E = $_POST['CI_Dis_E'];
        $lD_E = $_POST['learningDis_E'];
        $vD_E = $_POST['visualDis_E'];
        $lmD_E = $_POST['locoDis_E'];
        $cD_E = $_POST['commDis_E'];
        $con_E = $_POST['congenital_E'];
        $nEWPI = $_POST['numEWPI'];

        $update_query = "UPDATE `research 10.3.2` SET numEWDmale = '$nEWDm', numEWDfemale = '$nEWDf', numEWDtotal = '$nEWDt', psychiatricDis_E = '$psD_E', CI_Dis_E = '$CID_E', learningDis_E = '$lD_E', visualDis_E = '$vD_E', locoDis_E = '$lmD_E', commDis_E = '$cD_E ', congenital_E = '$con_E', numEWPI = '$nEWPI' WHERE `10.3.2 ID` = '$id'";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg10/up_delsdg10.php?message=Update Successful");
        } else {
            die("Update query failed. " . mysqli_error($conn));
        }
    }
    
    $sql = "SELECT * FROM `research 10.3.2` WHERE `10.3.2 ID` = '$id'";
    $select = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {

        $nEWDm = $row['numEWDmale'];
        $nEWDf = $row['numEWDfemale'];
        $nEWDt = $row['numEWDtotal'];
        $psD_E = $row['psychiatricDis_E'];
        $CID_E = $row['CI_Dis_E'];
        $lD_E = $row['learningDis_E'];
        $vD_E = $row['visualDis_E'];
        $lmD_E = $row['locoDis_E'];
        $cD_E = $row['commDis_E'];
        $con_E = $row['congenital_E'];
        $nEWPI = $row['numEWPI'];

        ?>
        <div class="container">
                <div class="collapse w-100 h-auto p-3" id="research1032" style="display: block ;">
                    <h2 class="text-center pb-5">Proportion of employees with disabilities</h2>
                    <form action="" method="post">
                    <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male employees with disabilities</span>
                            <input type="text" class="form-control" value="<?php echo "$nEWDm" ?>" name="numEWDmale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female employees with disabilities</span>
                            <input type="text" class="form-control" value="<?php echo "$nEWDf" ?>" name="numEWDfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of employees with disabilities</span>
                            <input type="text" class="form-control" value="<?php echo "$nEWDt" ?>" name="numEWDtotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Psychiatric disorder</span>
                            <input type="text" class="form-control" value="<?php echo "$psD_E" ?>" name="psychiatricDis_E"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Disability caused by chronic illness</span>
                            <input type="text" class="form-control" value="<?php echo "$CID_E" ?>" name="CI_Dis_E"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Learning disability</span>
                            <input type="text" class="form-control" value="<?php echo "$lD_E" ?>" name="learningDis_E"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Visual disability</span>
                            <input type="text" class="form-control" value="<?php echo "$vD_E" ?>" name="visualDis_E"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Orthopedic/Locomotor disability</span>
                            <input type="text" class="form-control" value="<?php echo "$lmD_E" ?>" name="locoDis_E"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Communication disability</span>
                            <input type="text" class="form-control" value="<?php echo "$cD_E" ?>" name="commDis_E"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Congenital</span>
                            <input type="text" class="form-control" value="<?php echo "$con_E" ?>" name="congenital_E"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of PWDs employees that have PWD ID</span>
                            <input type="text" class="form-control" value="<?php echo "$nEWPI" ?>" name="numEWPI"
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
    