<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header10.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $nRG_Sm = $_POST['numReligiousGroup_Smale'];
        $nRG_Sf = $_POST['numReligiousGroup_Sfemale'];
        $nRG_St = $_POST['numReligiousGroup_Stotal'];
        //Aglipayan
        $nA_Sm = $_POST['numAglipayan_Smale'];
        $nA_Sf = $_POST['numAglipayan_Sfemale'];
        $nA_St = $_POST['numAglipayan_Stotal'];
        //BornAgain
        $nBA_Sm = $_POST['numBornAgain_Smale'];
        $nBA_Sf = $_POST['numBornAgain_Sfemale'];
        $nBA_St = $_POST['numBornAgain_Stotal'];
        //Buddhism
        $nB_Sm = $_POST['numBuddhism_Smale'];
        $nB_Sf = $_POST['numBuddhism_Sfemale'];
        $nB_St = $_POST['numBuddhism_Stotal'];
        //Hinduism
        $nH_Sm = $_POST['numHinduism_Smale'];
        $nH_Sf = $_POST['numHinduism_Sfemale'];
        $nH_St = $_POST['numHinduism_Stotal'];
        //INC
        $nINC_Sm = $_POST['numINC_Smale'];
        $nINC_Sf = $_POST['numINC_Sfemale'];
        $nINC_St = $_POST['numINC_Stotal'];
        //Islam
        $nI_Sm = $_POST['numIslam_Smale'];
        $nI_Sf = $_POST['numIslam_Sfemale'];
        $nI_St = $_POST['numIslam_Stotal'];
        //JW
        $nJW_Sm = $_POST['numJW_Smale'];
        $nJW_Sf = $_POST['numJW_Sfemale'];
        $nJW_St = $_POST['numJW_Stotal'];
        //LDS
        $nLDS_Sm = $_POST['numLDS_Smale'];
        $nLDS_Sf = $_POST['numLDS_Sfemale'];
        $nLDS_St = $_POST['numLDS_Stotal'];
        //Protestant
        $nP_Sm = $_POST['numProtestant_Smale'];
        $nP_Sf = $_POST['numProtestant_Sfemale'];
        $nP_St = $_POST['numProtestant_Stotal'];
        //RC
        $nRC_Sm = $_POST['numRC_Smale'];
        $nRC_Sf = $_POST['numRC_Sfemale'];
        $nRC_St = $_POST['numRC_Stotal'];
        //SA
        $nSA_Sm = $_POST['numSA_Smale'];
        $nSA_Sf = $_POST['numSA_Sfemale'];
        $nSA_St = $_POST['numSA_Stotal'];
        //Others
        $nO_Sm = $_POST['numOthers_Smale'];
        $nO_Sf = $_POST['numOthers_Sfemale'];
        $nO_St = $_POST['numOthers_Stotal'];
        //Do not belong to any relegion
        $nNR_St = $_POST['numNoReligion_Stotal'];

        $update_query = "UPDATE `research 10.6.1` SET numReligiousGroup_Smale = '$nRG_Sm',numReligiousGroup_Sfemale = '$nRG_Sf',numReligiousGroup_Stotal = '$nRG_St',numAglipayan_Smale = '$nA_Sm',numAglipayan_Sfemale = '$nA_Sf',numAglipayan_Stotal = '$nA_St',numBornAgain_Smale = '$nBA_Sm',numBornAgain_Sfemale = '$nBA_Sf',numBornAgain_Stotal = '$nBA_St',numBuddhism_Smale = '$nB_Sm',numBuddhism_Sfemale = '$nB_Sf',numBuddhism_Stotal = '$nB_St',numHinduism_Smale = '$nH_Sm',numHinduism_Sfemale = '$nH_Sf',numHinduism_Stotal = '$nH_St',numINC_Smale = '$nINC_Sm',numINC_Sfemale = '$nINC_Sf',numINC_Stotal = '$nINC_St',numIslam_Smale = '$nI_Sm',numIslam_Sfemale = '$nI_Sf',numIslam_Stotal = '$nI_St',numJW_Smale = '$nJW_Sm',numJW_Sfemale = '$nJW_Sf',numJW_Stotal = '$nJW_St',numLDS_Smale = '$nLDS_Sm',numLDS_Sfemale = '$nLDS_Sf',numLDS_Stotal = '$nLDS_St',numProtestant_Smale = '$nP_Sm',numProtestant_Sfemale = '$nP_Sf',numProtestant_Stotal = '$nP_St',numRC_Smale = '$nRC_Sm',numRC_Sfemale = '$nRC_Sf',numRC_Stotal = '$nRC_St',numSA_Smale = '$nSA_Sm',numSA_Sfemale = '$nSA_Sf',numSA_Stotal = '$nSA_St',numOthers_Smale = '$nO_Sm',numOthers_Sfemale = '$nO_Sf',numOthers_Stotal = '$nO_St', numNoReligion_Stotal = '$nNR_St' WHERE `10.6.1 ID` = '$id'";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg10/up_delsdg10.php?message=Update Successful");
        } else {
            die("Update query failed. " . mysqli_error($conn));
        }
    }
    
    $sql = "SELECT * FROM `research 10.6.1` WHERE `10.6.1 ID` = '$id'";
    $select = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {

            $nRG_Sm = $row['numReligiousGroup_Smale'];
            $nRG_Sf = $row['numReligiousGroup_Sfemale'];
            $nRG_St = $row['numReligiousGroup_Stotal'];
            //Aglipayan
            $nA_Sm = $row['numAglipayan_Smale'];
            $nA_Sf = $row['numAglipayan_Sfemale'];
            $nA_St = $row['numAglipayan_Stotal'];
            //BornAgain
            $nBA_Sm = $row['numBornAgain_Smale'];
            $nBA_Sf = $row['numBornAgain_Sfemale'];
            $nBA_St = $row['numBornAgain_Stotal'];
            //Buddhism
            $nB_Sm = $row['numBuddhism_Smale'];
            $nB_Sf = $row['numBuddhism_Sfemale'];
            $nB_St = $row['numBuddhism_Stotal'];
            //Hinduism
            $nH_Sm = $row['numHinduism_Smale'];
            $nH_Sf = $row['numHinduism_Sfemale'];
            $nH_St = $row['numHinduism_Stotal'];
            //INC
            $nINC_Sm = $row['numINC_Smale'];
            $nINC_Sf = $row['numINC_Sfemale'];
            $nINC_St = $row['numINC_Stotal'];
            //Islam
            $nI_Sm = $row['numIslam_Smale'];
            $nI_Sf = $row['numIslam_Sfemale'];
            $nI_St = $row['numIslam_Stotal'];
            //JW
            $nJW_Sm = $row['numJW_Smale'];
            $nJW_Sf = $row['numJW_Sfemale'];
            $nJW_St = $row['numJW_Stotal'];
            //LDS
            $nLDS_Sm = $row['numLDS_Smale'];
            $nLDS_Sf = $row['numLDS_Sfemale'];
            $nLDS_St = $row['numLDS_Stotal'];
            //Protestant
            $nP_Sm = $row['numProtestant_Smale'];
            $nP_Sf = $row['numProtestant_Sfemale'];
            $nP_St = $row['numProtestant_Stotal'];
            //RC
            $nRC_Sm = $row['numRC_Smale'];
            $nRC_Sf = $row['numRC_Sfemale'];
            $nRC_St = $row['numRC_Stotal'];
            //SA
            $nSA_Sm = $row['numSA_Smale'];
            $nSA_Sf = $row['numSA_Sfemale'];
            $nSA_St = $row['numSA_Stotal'];
            //Others
            $nO_Sm = $row['numOthers_Smale'];
            $nO_Sf = $row['numOthers_Sfemale'];
            $nO_St = $row['numOthers_Stotal'];
            //Do not belong to any relegion
            $nNR_St = $row['numNoReligion_Stotal'];
        ?>
        <div class="container">
                <div class="collapse w-100 h-auto p-3" id="research1061" style="display: block ;">
                    <h2 class="text-center pb-5">Proportion of students based on religion</h2>
                    <form action="" method="post">
                    <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male students who belongs to religious groups</span>
                            <input type="text" class="form-control" value="<?php echo "$nRG_Sm" ?>" name="numReligiousGroup_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female students who belongs to religious groups</span>
                            <input type="text" class="form-control" value="<?php echo "$nRG_Sf" ?>" name="numReligiousGroup_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of students who belongs to religious groups</span>
                            <input type="text" class="form-control" value="<?php echo "$nRG_St" ?>" name="numReligiousGroup_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male students who belongs to Aglipayan</span>
                            <input type="text" class="form-control" value="<?php echo "$nA_Sm" ?>" name="numAglipayan_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female students who belongs to Aglipayan</span>
                            <input type="text" class="form-control" value="<?php echo "$nA_Sf" ?>" name="numAglipayan_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of students who belongs to Aglipayan</span>
                            <input type="text" class="form-control" value="<?php echo "$nA_St" ?>" name="numAglipayan_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male students who belongs to Born Again</span>
                            <input type="text" class="form-control" value="<?php echo "$nBA_Sm" ?>" name="numBornAgain_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female students who belongs to Born Again</span>
                            <input type="text" class="form-control" value="<?php echo "$nBA_Sf" ?>" name="numBornAgain_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of students who belongs to Born Again</span>
                            <input type="text" class="form-control" value="<?php echo "$nBA_St" ?>" name="numBornAgain_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male students who belongs to Buddhism</span>
                            <input type="text" class="form-control" value="<?php echo "$nB_Sm" ?>" name="numBuddhism_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female students who belongs to Buddhism</span>
                            <input type="text" class="form-control" value="<?php echo "$nB_Sf" ?>" name="numBuddhism_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of students who belongs to Buddhism</span>
                            <input type="text" class="form-control" value="<?php echo "$nB_St" ?>" name="numBuddhism_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male students who belongs to Hinduism</span>
                            <input type="text" class="form-control" value="<?php echo "$nH_Sm" ?>" name="numHinduism_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female students who belongs to Hinduism</span>
                            <input type="text" class="form-control" value="<?php echo "$nH_Sf" ?>" name="numHinduism_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of students who belongs to Hinduism</span>
                            <input type="text" class="form-control" value="<?php echo "$nH_St" ?>" name="numHinduism_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male students who belongs to Iglesia ni Cristo</span>
                            <input type="text" class="form-control" value="<?php echo "$nINC_Sm" ?>" name="numINC_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female students who belongs to Iglesia ni Cristo</span>
                            <input type="text" class="form-control" value="<?php echo "$nINC_Sf" ?>" name="numINC_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of students who belongs to Iglesia ni Cristo</span>
                            <input type="text" class="form-control" value="<?php echo "$nINC_St" ?>" name="numINC_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male students who belongs to Islam</span>
                            <input type="text" class="form-control" value="<?php echo "$nI_Sm" ?>" name="numIslam_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female students who belongs to Islam</span>
                            <input type="text" class="form-control" value="<?php echo "$nI_Sf" ?>" name="numIslam_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of students who belongs to Islam</span>
                            <input type="text" class="form-control" value="<?php echo "$nI_St" ?>" name="numIslam_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male students who belongs to Jehovah's Witnesses</span>
                            <input type="text" class="form-control" value="<?php echo "$nJW_Sm" ?>" name="numJW_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female students who belongs to Jehovah's Witnesses</span>
                            <input type="text" class="form-control" value="<?php echo "$nJW_Sf" ?>" name="numJW_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of students who belongs to Jehovah's Witnesses</span>
                            <input type="text" class="form-control" value="<?php echo "$nJW_St" ?>" name="numJW_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male students who belongs to Latter-Day Saints</span>
                            <input type="text" class="form-control" value="<?php echo "$nLDS_Sm" ?>" name="numLDS_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female students who belongs to Latter-Day Saints</span>
                            <input type="text" class="form-control" value="<?php echo "$nLDS_Sf" ?>" name="numLDS_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of students who belongs to Latter-Day Saints</span>
                            <input type="text" class="form-control" value="<?php echo "$nLDS_St" ?>" name="numLDS_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male students who belongs to Protestant</span>
                            <input type="text" class="form-control" value="<?php echo "$nP_Sm" ?>" name="numProtestant_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female students who belongs to Protestant</span>
                            <input type="text" class="form-control" value="<?php echo "$nP_Sf" ?>" name="numProtestant_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of students who belongs to Protestant</span>
                            <input type="text" class="form-control" value="<?php echo "$nP_St" ?>" name="numProtestant_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male students who belongs to Roman Catholic</span>
                            <input type="text" class="form-control" value="<?php echo "$nRC_Sm" ?>" name="numRC_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female students who belongs to Roman Catholic</span>
                            <input type="text" class="form-control" value="<?php echo "$nRC_Sf" ?>" name="numRC_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of students who belongs to Roman Catholic</span>
                            <input type="text" class="form-control" value="<?php echo "$nRC_St" ?>" name="numRC_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male students who belongs to Seventh-day Adventists</span>
                            <input type="text" class="form-control" value="<?php echo "$nSA_Sm" ?>" name="numSA_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female students who belongs to Seventh-day Adventists</span>
                            <input type="text" class="form-control" value="<?php echo "$nSA_Sf" ?>" name="numSA_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of students who belongs to Seventh-day Adventists</span>
                            <input type="text" class="form-control" value="<?php echo "$nSA_St" ?>" name="numSA_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male students who belongs to Others</span>
                            <input type="text" class="form-control" value="<?php echo " $nO_Sm" ?>" name="numOthers_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female students who belongs to Others</span>
                            <input type="text" class="form-control" value="<?php echo "$nO_Sf" ?>" name="numOthers_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of students who belongs to Others</span>
                            <input type="text" class="form-control" value="<?php echo "$nO_St" ?>" name="numOthers_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of students not affiliated with any religious denomination</span>
                            <input type="text" class="form-control" value="<?php echo "$nNR_St" ?>" name="numNoReligion_Stotal"
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
    
