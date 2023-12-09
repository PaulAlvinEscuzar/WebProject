<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header10.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        //Low Income family Student Applicant
        $nLIFa_Sm = $_POST['numLIFapplicant_Smale'];
        $nLIFa_Sf = $_POST['numLIFapplicant_Sfemale'];
        $nLIFa_St = $_POST['numLIFapplicant_Stotal'];
        //LGBTQA+ Student Applicant
        $nLGBTa_Sm = $_POST['numLGBTapplicant_Smale'];
        $nLGBTa_Sf = $_POST['numLGBTapplicant_Sfemale'];
        $nLGBTa_St = $_POST['numLGBTapplicant_Stotal'];
        //Refugee Student Applicant
        $nRa_Sm = $_POST['numRefugeeApplicant_Smale'];
        $nRa_Sf = $_POST['numRefugeeApplicant_Sfemale'];
        $nRa_St = $_POST['numRefugeeApplicant_Stotal'];
        //Disable Student Applicant
        $nDa_Sm = $_POST['numDisApplicant_Smale'];
        $nDa_Sf = $_POST['numDisApplicant_Sfemale'];
        $nDa_St = $_POST['numDisApplicant_Stotal'];
        //Child of Solo Parent Student Applicant
        $nCoSPa_Sm = $_POST['numCoSPapplicant_Smale'];
        $nCoSPa_Sf = $_POST['numCoSPapplicant_Sfemale'];
        $nCoSPa_St = $_POST['numCoSPapplicant_Stotal'];
        //Indigenous People Student Applicant
        $nIPa_Sm = $_POST['numIPapplicant_Smale'];
        $nIPa_Sf = $_POST['numIPapplicant_Sfemale'];
        $nIPa_St = $_POST['numIPapplicant_Stotal'];

        //Low Income family Applicant
        $nLIFa_Jm = $_POST['numLIFapplicant_Jmale'];
        $nLIFa_Jf = $_POST['numLIFapplicant_Jfemale'];
        $nLIFa_Jt = $_POST['numLIFapplicant_Jtotal'];
        //LGBTQA+ Applicant
        $nLGBTa_Jm = $_POST['numLGBTapplicant_Jmale'];
        $nLGBTa_Jf = $_POST['numLGBTapplicant_Jfemale'];
        $nLGBTa_Jt = $_POST['numLGBTapplicant_Jtotal'];
        //Refugee Applicant
        $nRa_Jm = $_POST['numRefugeeApplicant_Jmale'];
        $nRa_Jf = $_POST['numRefugeeApplicant_Jfemale'];
        $nRa_Jt = $_POST['numRefugeeApplicant_Jtotal'];
        //Disable Applicant
        $nDa_Jm = $_POST['numDisApplicant_Jmale'];
        $nDa_Jf = $_POST['numDisApplicant_Jfemale'];
        $nDa_Jt = $_POST['numDisApplicant_Jtotal'];
        //Child of Solo Parent Applicant
        $nCoSPa_Jm = $_POST['numCoSPapplicant_Jmale'];
        $nCoSPa_Jf = $_POST['numCoSPapplicant_Jfemale'];
        $nCoSPa_Jt = $_POST['numCoSPapplicant_Jtotal'];
        //Indigenous People Applicant
        $nIPa_Jm = $_POST['numIPapplicant_Jmale'];
        $nIPa_Jf = $_POST['numIPapplicant_Jfemale'];
        $nIPa_Jt = $_POST['numIPapplicant_Jtotal'];


        $update_query = "UPDATE `research 10.8.2` SET numLIFapplicant_Smale = '$nLIFa_Sm',numLIFapplicant_Sfemale = '$nLIFa_Sf',numLIFapplicant_Stotal = '$nLIFa_St',numLGBTapplicant_Smale = '$nLGBTa_Sm',numLGBTapplicant_Sfemale = '$nLGBTa_Sf',numLGBTapplicant_Stotal = '$nLGBTa_St',numRefugeeApplicant_Smale = '$nRa_Sm',numRefugeeApplicant_Sfemale = '$nRa_Sf',numRefugeeApplicant_Stotal = '$nRa_St',numDisApplicant_Smale = '$nDa_Sm',numDisApplicant_Sfemale = '$nDa_Sf',numDisApplicant_Stotal = '$nDa_St',numCoSPapplicant_Smale = '$nCoSPa_Sm',numCoSPapplicant_Sfemale = '$nCoSPa_Sf',numCoSPapplicant_Stotal = '$nCoSPa_St',numIPapplicant_Smale = '$nIPa_Sm',numIPapplicant_Sfemale = '$nIPa_Sf',numIPapplicant_Stotal = '$nIPa_St',numLIFapplicant_Jmale = '$nLIFa_Jm',numLIFapplicant_Jfemale = '$nLIFa_Jf',numLIFapplicant_Jtotal = '$nLIFa_Jt',numLGBTapplicant_Jmale = '$nLGBTa_Jm',numLGBTapplicant_Jfemale = '$nLGBTa_Jf',numLGBTapplicant_Jtotal = '$nLGBTa_Jt',numRefugeeApplicant_Jmale = '$nRa_Jm',numRefugeeApplicant_Jfemale = '$nRa_Jf',numRefugeeApplicant_Jtotal = '$nRa_Jt',numDisApplicant_Jmale = '$nDa_Jm',numDisApplicant_Jfemale = '$nDa_Jf',numDisApplicant_Jtotal = '$nDa_Jt',numCoSPapplicant_Jmale = '$nCoSPa_Jm',numCoSPapplicant_Jfemale = '$nCoSPa_Jf',numCoSPapplicant_Jtotal = '$nCoSPa_Jt',numIPapplicant_Jmale = '$nIPa_Jm',numIPapplicant_Jfemale = '$nIPa_Jf',numIPapplicant_Jtotal = '$nIPa_Jt' WHERE `10.8.2 ID` = '$id'";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg10/up_delsdg10.php?message=Update Successful");
        } else {
            die("Update query failed. " . mysqli_error($conn));
        }
    }
    
    $sql = "SELECT * FROM `research 10.8.2` WHERE `10.8.2 ID` = '$id'";
    $select = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {

         //Low Income family Student Applicant
         $nLIFa_Sm = $row['numLIFapplicant_Smale'];
         $nLIFa_Sf = $row['numLIFapplicant_Sfemale'];
         $nLIFa_St = $row['numLIFapplicant_Stotal'];
         //LGBTQA+ Student Applicant
         $nLGBTa_Sm = $row['numLGBTapplicant_Smale'];
         $nLGBTa_Sf = $row['numLGBTapplicant_Sfemale'];
         $nLGBTa_St = $row['numLGBTapplicant_Stotal'];
         //Refugee Student Applicant
         $nRa_Sm = $row['numRefugeeApplicant_Smale'];
         $nRa_Sf = $row['numRefugeeApplicant_Sfemale'];
         $nRa_St = $row['numRefugeeApplicant_Stotal'];
         //Disable Student Applicant
         $nDa_Sm = $row['numDisApplicant_Smale'];
         $nDa_Sf = $row['numDisApplicant_Sfemale'];
         $nDa_St = $row['numDisApplicant_Stotal'];
         //Child of Solo Parent Student Applicant
         $nCoSPa_Sm = $row['numCoSPapplicant_Smale'];
         $nCoSPa_Sf = $row['numCoSPapplicant_Sfemale'];
         $nCoSPa_St = $row['numCoSPapplicant_Stotal'];
         //Indigenous People Student Applicant
         $nIPa_Sm = $row['numIPapplicant_Smale'];
         $nIPa_Sf = $row['numIPapplicant_Sfemale'];
         $nIPa_St = $row['numIPapplicant_Stotal'];
         //Low Income family Applicant
         $nLIFa_Jm = $row['numLIFapplicant_Jmale'];
         $nLIFa_Jf = $row['numLIFapplicant_Jfemale'];
         $nLIFa_Jt = $row['numLIFapplicant_Jtotal'];
         //LGBTQA+ Applicant
         $nLGBTa_Jm = $row['numLGBTapplicant_Jmale'];
         $nLGBTa_Jf = $row['numLGBTapplicant_Jfemale'];
         $nLGBTa_Jt = $row['numLGBTapplicant_Jtotal'];
         //Refugee Applicant
         $nRa_Jm = $row['numRefugeeApplicant_Jmale'];
         $nRa_Jf = $row['numRefugeeApplicant_Jfemale'];
         $nRa_Jt = $row['numRefugeeApplicant_Jtotal'];
         //Disable Applicant
         $nDa_Jm = $row['numDisApplicant_Jmale'];
         $nDa_Jf = $row['numDisApplicant_Jfemale'];
         $nDa_Jt = $row['numDisApplicant_Jtotal'];
         //Child of Solo Parent Applicant
         $nCoSPa_Jm = $row['numCoSPapplicant_Jmale'];
         $nCoSPa_Jf = $row['numCoSPapplicant_Jfemale'];
         $nCoSPa_Jt = $row['numCoSPapplicant_Jtotal'];
         //Indigenous People Applicant
         $nIPa_Jm = $row['numIPapplicant_Jmale'];
         $nIPa_Jf = $row['numIPapplicant_Jfemale'];
         $nIPa_Jt = $row['numIPapplicant_Jtotal'];

        ?>
        <div class="container">
                <div class="collapse w-100 h-auto p-3" id="research1082" style="display: block ;">
                    <h2 class="text-center pb-5">Access to university underrepresented groups applicant</h2>
                    <form action="" method="post">
                    <h3 class="text-center">Student applicants tracking</h3>
                    
                    <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male student applicants who belong to low-income families</span>
                            <input type="text" class="form-control" value="<?php echo "$nLIFa_Sm" ?>" name="numLIFapplicant_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female student applicants who belong to low-income families</span>
                            <input type="text" class="form-control" value="<?php echo "$nLIFa_Sf" ?>" name="numLIFapplicant_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of student applicants who belong to low-income families</span>
                            <input type="text" class="form-control" value="<?php echo "$nLIFa_St" ?>" name="numLIFapplicant_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>

                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male student applicants who belong to LGBTQIA+ group</span>
                            <input type="text" class="form-control" value="<?php echo "$nLGBTa_Sm" ?>" name="numLGBTapplicant_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female student applicants who belong to LGBTQIA+ group</span>
                            <input type="text" class="form-control" value="<?php echo "$nLGBTa_Sf" ?>" name="numLGBTapplicant_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of student applicants who belong to LGBTQIA+ group</span>
                            <input type="text" class="form-control" value="<?php echo "$nLGBTa_St" ?>" name="numLGBTapplicant_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>

                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male student applicants who are refugee</span>
                            <input type="text" class="form-control" value="<?php echo "$nRa_Sm" ?>" name="numRefugeeApplicant_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female student applicants who are refugee</span>
                            <input type="text" class="form-control" value="<?php echo "$nRa_Sf" ?>" name="numRefugeeApplicant_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of student applicants who are refugee</span>
                            <input type="text" class="form-control" value="<?php echo "$nRa_St" ?>" name="numRefugeeApplicant_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>

                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male student applicants who are disabled</span>
                            <input type="text" class="form-control" value="<?php echo "$nDa_Sm" ?>" name="numDisApplicant_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female student applicants who are disabled</span>
                            <input type="text" class="form-control" value="<?php echo "$nDa_Sf" ?>" name="numDisApplicant_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of student applicants who are disabled</span>
                            <input type="text" class="form-control" value="<?php echo "$nDa_St" ?>" name="numDisApplicant_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>

                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male student applicants are child of solo parent</span>
                            <input type="text" class="form-control" value="<?php echo "$nCoSPa_Sm" ?>" name="numCoSPapplicant_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female student applicants are child of solo parent</span>
                            <input type="text" class="form-control" value="<?php echo "$nCoSPa_Sf" ?>" name="numCoSPapplicant_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of student applicants are child of solo parent</span>
                            <input type="text" class="form-control" value="<?php echo "$nCoSPa_St" ?>" name="numCoSPapplicant_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>

                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male student applicants are member of IPs</span>
                            <input type="text" class="form-control" value="<?php echo "$nIPa_Sm" ?>" name="numIPapplicant_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female student applicants are member of IPs</span>
                            <input type="text" class="form-control" value="<?php echo "$nIPa_Sf" ?>" name="numIPapplicant_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of student applicants are member of IPs</span>
                            <input type="text" class="form-control" value="<?php echo "$nIPa_St" ?>" name="numIPapplicant_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>

                        <h3 class="text-center">Job applicants tracking</h3>
                        
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male job applicants who belong to low-income families</span>
                            <input type="text" class="form-control" value="<?php echo "$nLIFa_Jm" ?>" name="numLIFapplicant_Jmale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female job applicants who belong to low-income families</span>
                            <input type="text" class="form-control" value="<?php echo "$nLIFa_Jf" ?>" name="numLIFapplicant_Jfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of job applicants who belong to low-income families</span>
                            <input type="text" class="form-control" value="<?php echo "$nLIFa_Jt" ?>" name="numLIFapplicant_Jtotal"
                                aria-describedby="basic-addon1" required>
                        </div>

                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male job applicants who belong to LGBTQIA+ group</span>
                            <input type="text" class="form-control" value="<?php echo "$nLGBTa_Jm" ?>" name="numLGBTapplicant_Jmale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female job applicants who belong to LGBTQIA+ group</span>
                            <input type="text" class="form-control" value="<?php echo "$nLGBTa_Jf" ?>" name="numLGBTapplicant_Jfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of job applicants who belong to LGBTQIA+ group</span>
                            <input type="text" class="form-control" value="<?php echo "$nLGBTa_Jt" ?>" name="numLGBTapplicant_Jtotal"
                                aria-describedby="basic-addon1" required>
                        </div> 

                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male job applicants who are refugee</span>
                            <input type="text" class="form-control" value="<?php echo "$nRa_Jm" ?>" name="numRefugeeApplicant_Jmale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female job applicants who are refugee</span>
                            <input type="text" class="form-control" value="<?php echo "$nRa_Jf" ?>" name="numRefugeeApplicant_Jfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of job applicants who are refugee</span>
                            <input type="text" class="form-control" value="<?php echo "$nRa_Jt" ?>" name="numRefugeeApplicant_Jtotal"
                                aria-describedby="basic-addon1" required>
                        </div>

                        <br> 
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male job applicants who are disabled</span>
                            <input type="text" class="form-control" value="<?php echo "$nDa_Jm" ?>" name="numDisApplicant_Jmale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female job applicants who are disabled</span>
                            <input type="text" class="form-control" value="<?php echo "$nDa_Jf" ?>" name="numDisApplicant_Jfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of job applicants who are disabled</span>
                            <input type="text" class="form-control" value="<?php echo "$nDa_Jt" ?>" name="numDisApplicant_Jtotal"
                                aria-describedby="basic-addon1" required>
                        </div>

                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male job applicants are child of solo parent</span>
                            <input type="text" class="form-control" value="<?php echo "$nCoSPa_Jm" ?>" name="numCoSPapplicant_Jmale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female job applicants are child of solo parent</span>
                            <input type="text" class="form-control" value="<?php echo "$nCoSPa_Jf" ?>" name="numCoSPapplicant_Jfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of job applicants are child of solo parent</span>
                            <input type="text" class="form-control" value="<?php echo "$nCoSPa_Jt" ?>" name="numCoSPapplicant_Jtotal"
                                aria-describedby="basic-addon1" required>
                        </div>

                        <br> 
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male job applicants are member of IPs</span>
                            <input type="text" class="form-control" value="<?php echo "$nIPa_Jm" ?>" name="numIPapplicant_Jmale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female job applicants are member of IPs</span>
                            <input type="text" class="form-control" value="<?php echo "$nIPa_Jf" ?>" name="numIPapplicant_Jfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of job applicants are member of IPs</span>
                            <input type="text" class="form-control" value="<?php echo "$nIPa_Jt" ?>" name="numIPapplicant_Jtotal"
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
    