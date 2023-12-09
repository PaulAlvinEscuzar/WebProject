<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header10.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $nRG_Em = $_POST['numReligiousGroup_Emale'];
        $nRG_Ef = $_POST['numReligiousGroup_Efemale'];
        $nRG_Et = $_POST['numReligiousGroup_Etotal'];
        //Aglipayan
        $nA_Em = $_POST['numAglipayan_Emale'];
        $nA_Ef = $_POST['numAglipayan_Efemale'];
        $nA_Et = $_POST['numAglipayan_Etotal'];
        //BornAgain
        $nBA_Em = $_POST['numBornAgain_Emale'];
        $nBA_Ef = $_POST['numBornAgain_Efemale'];
        $nBA_Et = $_POST['numBornAgain_Etotal'];
        //Buddhism
        $nB_Em = $_POST['numBuddhism_Emale'];
        $nB_Ef = $_POST['numBuddhism_Efemale'];
        $nB_Et = $_POST['numBuddhism_Etotal'];
        //Hinduism
        $nH_Em = $_POST['numHinduism_Emale'];
        $nH_Ef = $_POST['numHinduism_Efemale'];
        $nH_Et = $_POST['numHinduism_Etotal'];
        //INC
        $nINC_Em = $_POST['numINC_Emale'];
        $nINC_Ef = $_POST['numINC_Efemale'];
        $nINC_Et = $_POST['numINC_Etotal'];
        //Islam
        $nI_Em = $_POST['numIslam_Emale'];
        $nI_Ef = $_POST['numIslam_Efemale'];
        $nI_Et = $_POST['numIslam_Etotal'];
        //JW
        $nJW_Em = $_POST['numJW_Emale'];
        $nJW_Ef = $_POST['numJW_Efemale'];
        $nJW_Et = $_POST['numJW_Etotal'];
        //LDS
        $nLDS_Em = $_POST['numLDS_Emale'];
        $nLDS_Ef = $_POST['numLDS_Efemale'];
        $nLDS_Et = $_POST['numLDS_Etotal'];
        //Protestant
        $nP_Em = $_POST['numProtestant_Emale'];
        $nP_Ef = $_POST['numProtestant_Efemale'];
        $nP_Et = $_POST['numProtestant_Etotal'];
        //RC
        $nRC_Em = $_POST['numRC_Emale'];
        $nRC_Ef = $_POST['numRC_Efemale'];
        $nRC_Et = $_POST['numRC_Etotal'];
        //SA
        $nSA_Em = $_POST['numSA_Emale'];
        $nSA_Ef = $_POST['numSA_Efemale'];
        $nSA_Et = $_POST['numSA_Etotal'];
        //Others
        $nO_Em = $_POST['numOthers_Emale'];
        $nO_Ef = $_POST['numOthers_Efemale'];
        $nO_Et = $_POST['numOthers_Etotal'];
        //Do not belong to any relegion
        $nNR_Et = $_POST['numNoReligion_Etotal'];

        $update_query = "UPDATE `research 10.6.2` SET numReligiousGroup_Emale = '$nRG_Em',numReligiousGroup_Efemale = '$nRG_Ef',numReligiousGroup_Etotal = '$nRG_Et',numAglipayan_Emale = '$nA_Em',numAglipayan_Efemale = '$nA_Ef',numAglipayan_Etotal = '$nA_Et',numBornAgain_Emale = '$nBA_Em',numBornAgain_Efemale = '$nBA_Ef',numBornAgain_Etotal = '$nBA_Et',numBuddhism_Emale = '$nB_Em',numBuddhism_Efemale = '$nB_Ef',numBuddhism_Etotal = '$nB_Et',numHinduism_Emale = '$nH_Em',numHinduism_Efemale = '$nH_Ef',numHinduism_Etotal = '$nH_Et',numINC_Emale = '$nINC_Em',numINC_Efemale = '$nINC_Ef',numINC_Etotal = '$nINC_Et',numIslam_Emale = '$nI_Em',numIslam_Efemale = '$nI_Ef',numIslam_Etotal = '$nI_Et',numJW_Emale = '$nJW_Em',numJW_Efemale = '$nJW_Ef',numJW_Etotal = '$nJW_Et',numLDS_Emale = '$nLDS_Em',numLDS_Efemale = '$nLDS_Ef',numLDS_Etotal = '$nLDS_Et',numProtestant_Emale = '$nP_Em',numProtestant_Efemale = '$nP_Ef',numProtestant_Etotal = '$nP_Et',numRC_Emale = '$nRC_Em',numRC_Efemale = '$nRC_Ef',numRC_Etotal = '$nRC_Et',numSA_Emale = '$nSA_Em',numSA_Efemale = '$nSA_Ef',numSA_Etotal = '$nSA_Et',numOthers_Emale = '$nO_Em',numOthers_Efemale = '$nO_Ef',numOthers_Etotal = '$nO_Et', numNoReligion_Etotal = '$nNR_Et' WHERE `10.6.2 ID` = '$id'";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg10/up_delsdg10.php?message=Update Successful");
        } else {
            die("Update query failed. " . mysqli_error($conn));
        }
    }
    
    $sql = "SELECT * FROM `research 10.6.2` WHERE `10.6.2 ID` = '$id'";
    $select = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {

            $nRG_Em = $row['numReligiousGroup_Emale'];
            $nRG_Ef = $row['numReligiousGroup_Efemale'];
            $nRG_Et = $row['numReligiousGroup_Etotal'];
            //Aglipayan
            $nA_Em = $row['numAglipayan_Emale'];
            $nA_Ef = $row['numAglipayan_Efemale'];
            $nA_Et = $row['numAglipayan_Etotal'];
            //BornAgain
            $nBA_Em = $row['numBornAgain_Emale'];
            $nBA_Ef = $row['numBornAgain_Efemale'];
            $nBA_Et = $row['numBornAgain_Etotal'];
            //Buddhism
            $nB_Em = $row['numBuddhism_Emale'];
            $nB_Ef = $row['numBuddhism_Efemale'];
            $nB_Et = $row['numBuddhism_Etotal'];
            //Hinduism
            $nH_Em = $row['numHinduism_Emale'];
            $nH_Ef = $row['numHinduism_Efemale'];
            $nH_Et = $row['numHinduism_Etotal'];
            //INC
            $nINC_Em = $row['numINC_Emale'];
            $nINC_Ef = $row['numINC_Efemale'];
            $nINC_Et = $row['numINC_Etotal'];
            //Islam
            $nI_Em = $row['numIslam_Emale'];
            $nI_Ef = $row['numIslam_Efemale'];
            $nI_Et = $row['numIslam_Etotal'];
            //JW
            $nJW_Em = $row['numJW_Emale'];
            $nJW_Ef = $row['numJW_Efemale'];
            $nJW_Et = $row['numJW_Etotal'];
            //LDS
            $nLDS_Em = $row['numLDS_Emale'];
            $nLDS_Ef = $row['numLDS_Efemale'];
            $nLDS_Et = $row['numLDS_Etotal'];
            //Protestant
            $nP_Em = $row['numProtestant_Emale'];
            $nP_Ef = $row['numProtestant_Efemale'];
            $nP_Et = $row['numProtestant_Etotal'];
            //RC
            $nRC_Em = $row['numRC_Emale'];
            $nRC_Ef = $row['numRC_Efemale'];
            $nRC_Et = $row['numRC_Etotal'];
            //SA
            $nSA_Em = $row['numSA_Emale'];
            $nSA_Ef = $row['numSA_Efemale'];
            $nSA_Et = $row['numSA_Etotal'];
            //Others
            $nO_Em = $row['numOthers_Emale'];
            $nO_Ef = $row['numOthers_Efemale'];
            $nO_Et = $row['numOthers_Etotal'];
            //Do not belong to any religion
            $nNR_Et = $row['numNoReligion_Etotal'];
        ?>
        <div class="container">
                <div class="collapse w-100 h-auto p-3" id="research1062" style="display: block ;">
                    <h2 class="text-center pb-5">Proportion of employees based on religion</h2>
                    <form action="" method="post">
                    <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male employees who belongs to religious groups</span>
                            <input type="text" class="form-control" value="<?php echo "$nRG_Em" ?>" name="numReligiousGroup_Emale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female employees who belongs to religious groups</span>
                            <input type="text" class="form-control" value="<?php echo "$nRG_Ef" ?>" name="numReligiousGroup_Efemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female employees who belongs to religious groups</span>
                            <input type="text" class="form-control" value="<?php echo "$nRG_Et" ?>" name="numReligiousGroup_Etotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male employees who belongs to Aglipayan</span>
                            <input type="text" class="form-control" value="<?php echo "$nA_Em" ?>" name="numAglipayan_Emale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female employees who belongs to Aglipayan</span>
                            <input type="text" class="form-control" value="<?php echo "$nA_Ef" ?>" name="numAglipayan_Efemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of employees who belongs to Aglipayan</span>
                            <input type="text" class="form-control" value="<?php echo "$nA_Et" ?>" name="numAglipayan_Etotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male employees who belongs to Born Again</span>
                            <input type="text" class="form-control" value="<?php echo "$nBA_Em" ?>" name="numBornAgain_Emale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female employees who belongs to Born Again</span>
                            <input type="text" class="form-control" value="<?php echo "$nBA_Ef" ?>" name="numBornAgain_Efemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of employees who belongs to Born Again</span>
                            <input type="text" class="form-control" value="<?php echo "$nBA_Et" ?>" name="numBornAgain_Etotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male employees who belongs to Buddhism</span>
                            <input type="text" class="form-control" value="<?php echo "$nB_Em" ?>" name="numBuddhism_Emale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female employees who belongs to Buddhism</span>
                            <input type="text" class="form-control" value="<?php echo "$nB_Ef" ?>" name="numBuddhism_Efemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of employees who belongs to Buddhism</span>
                            <input type="text" class="form-control" value="<?php echo "$nB_Et" ?>" name="numBuddhism_Etotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male employees who belongs to Hinduism</span>
                            <input type="text" class="form-control" value="<?php echo "$nH_Em" ?>" name="numHinduism_Emale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female employees who belongs to Hinduism</span>
                            <input type="text" class="form-control" value="<?php echo "$nH_Ef" ?>" name="numHinduism_Efemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of employees who belongs to Hinduism</span>
                            <input type="text" class="form-control" value="<?php echo "$nH_Et" ?>" name="numHinduism_Etotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male employees who belongs to Iglesia ni Cristo</span>
                            <input type="text" class="form-control" value="<?php echo "$nINC_Em" ?>" name="numINC_Emale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female employees who belongs to Iglesia ni Cristo</span>
                            <input type="text" class="form-control" value="<?php echo "$nINC_Ef" ?>" name="numINC_Efemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of employees who belongs to Iglesia ni Cristo</span>
                            <input type="text" class="form-control" value="<?php echo "$nINC_Et" ?>" name="numINC_Etotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male employees who belongs to Islam</span>
                            <input type="text" class="form-control" value="<?php echo "$nI_Em" ?>" name="numIslam_Emale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female employees who belongs to Islam</span>
                            <input type="text" class="form-control" value="<?php echo "$nI_Ef" ?>" name="numIslam_Efemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of employees who belongs to Islam</span>
                            <input type="text" class="form-control" value="<?php echo "$nI_Et" ?>" name="numIslam_Etotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male employees who belongs to Jehovah's Witnesses</span>
                            <input type="text" class="form-control" value="<?php echo "$nJW_Em" ?>" name="numJW_Emale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female employees who belongs to Jehovah's Witnesses</span>
                            <input type="text" class="form-control" value="<?php echo "$nJW_Ef" ?>" name="numJW_Efemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of employees who belongs to Jehovah's Witnesses</span>
                            <input type="text" class="form-control" value="<?php echo "$nJW_Et" ?>" name="numJW_Etotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <br>
                    <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male employees who belongs to Latter-Day Saints</span>
                            <input type="text" class="form-control" value="<?php echo "$nLDS_Em" ?>" name="numLDS_Emale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female employees who belongs to Latter-Day Saints</span>
                            <input type="text" class="form-control" value="<?php echo "$nLDS_Ef" ?>" name="numLDS_Efemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of employees who belongs to Latter-Day Saints</span>
                            <input type="text" class="form-control" value="<?php echo "$nLDS_Et" ?>" name="numLDS_Etotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male employees who belongs to Protestant</span>
                            <input type="text" class="form-control" value="<?php echo "$nP_Em" ?>" name="numProtestant_Emale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female employees who belongs to Protestant</span>
                            <input type="text" class="form-control" value="<?php echo "$nP_Ef" ?>" name="numProtestant_Efemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of employees who belongs to Protestant</span>
                            <input type="text" class="form-control" value="<?php echo "$nP_Et" ?>" name="numProtestant_Etotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male employees who belongs to Roman Catholic</span>
                            <input type="text" class="form-control" value="<?php echo "$nRC_Em" ?>" name="numRC_Emale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female employees who belongs to Roman Catholic</span>
                            <input type="text" class="form-control" value="<?php echo "$nRC_Ef" ?>" name="numRC_Efemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of employees who belongs to Roman Catholic</span>
                            <input type="text" class="form-control" value="<?php echo "$nRC_Et" ?>" name="numRC_Etotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male employees who belongs to Seventh-day Adventists</span>
                            <input type="text" class="form-control" value="<?php echo "$nSA_Em" ?>" name="numSA_Emale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female employees who belongs to Seventh-day Adventists</span>
                            <input type="text" class="form-control" value="<?php echo "$nSA_Ef" ?>" name="numSA_Efemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of employees who belongs to Seventh-day Adventists</span>
                            <input type="text" class="form-control" value="<?php echo "$nSA_Et" ?>" name="numSA_Etotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male employees who belongs to Others</span>
                            <input type="text" class="form-control" value="<?php echo " $nO_Em" ?>" name="numOthers_Emale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female employees who belongs to Others</span>
                            <input type="text" class="form-control" value="<?php echo "$nO_Ef" ?>" name="numOthers_Efemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of employees who belongs to Others</span>
                            <input type="text" class="form-control" value="<?php echo "$nO_Et" ?>" name="numOthers_Etotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of employees not affiliated with any religious denomination</span>
                            <input type="text" class="form-control" value="<?php echo "$nNR_Et" ?>" name="numNoReligion_Etotal"
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
    
