<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header4.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $tno_efle = $_POST['tno_efle'];
        $bsie_male= $_POST['bsie_male'];
        $bsie_female= $_POST['bsie_female'];
        $bsp_male= $_POST['bsp_male'];
        $bsp_female= $_POST['bsp_female'];
        $bsme_male= $_POST['bsme_male'];
        $bsme_female= $_POST['bsme_female'];
        $tno_ttle= $_POST['tno_ttle'];
        $bsie_male1= $_POST['bsie_male1'];
        $bsie_female1= $_POST['bsie_female1'];
        $bsp_male1= $_POST['bsp_male1'];
        $bsp_female1= $_POST['bsp_female1'];
        $bsme_male1= $_POST['bsme_male1'];
        $bsme_female1= $_POST['bsme_female1'];
        $tno_gwal= $_POST['tno_gwal'];
        $bsie_male2= $_POST['bsie_male2'];
        $bsie_female2= $_POST['bsie_female2'];
        $bsp_male2= $_POST['bsp_male2'];
        $bsp_female2= $_POST['bsp_female2'];
        $bsme_male2= $_POST['bsme_male2'];
        $bsme_female2= $_POST['bsme_female2'];
        $no_gwftptle= $_POST['no_gwftptle'];
        $Tno_gele= $_POST['Tno_gele'];
        $Ptno_elettle= $_POST['Ptno_elettle'];
        $Pglesatl= $_POST['Pglesatl'];
        $Pglehftp= $_POST['Pglehftp'];

        $update_query = "UPDATE `research4.2.1`
        SET 
        tno_efle = '$tno_efle',
        bsie_male = '$bsie_male',
        bsie_female = '$bsie_female',
        bsp_male = '$bsp_male',
        bsp_female = '$bsp_female',
        bsme_male = '$bsme_male',
        bsme_female = '$bsme_female',
        tno_ttle = '$tno_ttle',
        bsie_male1 = '$bsie_male1',
        bsie_female1 = '$bsie_female1',
        bsp_male1 = '$bsp_male1',
        bsp_female1 = '$bsp_female1',
        bsme_male1 = '$bsme_male1',
        bsme_female1 = '$bsme_female1',
        tno_gwal = '$tno_gwal',
        bsie_male2 = '$bsie_male2',
        bsie_female2 = '$bsie_female2',
        bsp_male2 = '$bsp_male2',
        bsp_female2 = '$bsp_female2',
        bsme_male2 = '$bsme_male2',
        bsme_female2 = '$bsme_female2',
        no_gwftptle = '$no_gwftptle',
        Tno_gele = '$Tno_gele',
        Ptno_elettle = '$Ptno_elettle',
        Pglesatl = '$Pglesatl',
        Pglehftp = '$Pglehftp'
        WHERE 
           ID = '$id'";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg4/up_delsdg4.php?message=Update Successful");
        }
    }
    $query421 = "SELECT * FROM `research4.2.1` WHERE ID = '$id'"; 
    $select421 = mysqli_query($conn, $query421);

    if (mysqli_num_rows($select421) > 0) {
        while ($row = mysqli_fetch_assoc($select421)) {
            $tno_efle = $row['tno_efle'];
            $bsie_male = $row['bsie_male'];
            $bsie_female = $row['bsie_female'];
            $bsp_male = $row['bsp_male'];
            $bsp_female = $row['bsp_female'];
            $bsme_male = $row['bsme_male'];
            $bsme_female = $row['bsme_female'];
            $tno_ttle = $row['tno_ttle'];
            $bsie_male1 = $row['bsie_male1'];
            $bsie_female1 = $row['bsie_female1'];
            $bsp_male1 = $row['bsp_male1'];
            $bsp_female1 = $row['bsp_female1'];
            $bsme_male1 = $row['bsme_male1'];
            $bsme_female1 = $row['bsme_female1'];
            $tno_gwal = $row['tno_gwal'];
            $bsie_male2 = $row['bsie_male2'];
            $bsie_female2 = $row['bsie_female2'];
            $bsp_male2 = $row['bsp_male2'];
            $bsp_female2 = $row['bsp_female2'];
            $bsme_male2 = $row['bsme_male2'];
            $bsme_female2 = $row['bsme_female2'];
            $no_gwftptle = $row['no_gwftptle'];
            $Tno_gele = $row['Tno_gele'];
            $Ptno_elettle = $row['Ptno_elettle'];
            $Pglesatl = $row['Pglesatl'];
            $Pglehftp = $row['Pglehftp'];
    ?>

                    <div class="collapse w-100 h-auto" id="research421" style="display: block ;">
                        <h2 class="text-center pb-5">Proportion of graduates with relevant qualifications in each respective field</h2>
                        <form action="" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Total number of graduates who are eligible for licensure examination:</span>
                                <input type="text" class="form-control" value="<?php echo "$tno_efle" ?>" name="tno_efle">
                            </div>
                            <div class="input-group mb-3">    
                                <span class="input-group-text"><i class=""></i>Bachelor of Science Industrial Engineering</span>
                                <input type="text" class="form-control" value="<?php echo "$bsie_male" ?>" name="bsie_male">
                                <span class="input-group-text"><i class=""></i>Bachelor of Science Industrial Engineering</span>
                                <input type="text" class="form-control" value="<?php echo "$bsie_female" ?>" name="bsie_female">
                            </div>
                            <div class="input-group mb-3">    
                                <span class="input-group-text"><i class=""></i>Bachelor of Science in Psychology</span>
                                <input type="text" class="form-control" value="<?php echo "$bsp_male" ?>" name="bsp_male">
                                <span class="input-group-text"><i class=""></i>Bachelor of Science in Psychology</span>
                                <input type="text" class="form-control"  value="<?php echo "$bsp_female" ?>" name="bsp_female">
                            </div>
                            <div class="input-group mb-3">    
                                <span class="input-group-text"><i class=""></i>Bachelor of Science in Management Accounting</span>
                                <input type="text" class="form-control" value="<?php echo "$bsme_male" ?>" name="bsme_male">
                                <span class="input-group-text"><i class=""></i>Bachelor of Science in Management Accounting</span>
                                <input type="text" class="form-control" value="<?php echo "$bsme_female" ?>" name="bsme_female">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Total number of graduates who take the licensure examination:</span>
                                <input type="text" class="form-control" value="<?php echo "$tno_ttle" ?>" name="tno_ttle">
                            </div>
                            <div class="input-group mb-3">    
                                <span class="input-group-text"><i class=""></i>Bachelor of Science Industrial Engineering</span>
                                <input type="text" class="form-control" value="<?php echo "$bsie_female1" ?>" name="bsie_male1">
                                <span class="input-group-text"><i class=""></i>Bachelor of Science Industrial Engineering</span>
                                <input type="text" class="form-control" value="<?php echo "$bsie_female1" ?>" name="bsie_female1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Bachelor of Science in Psychology</span>
                                <input type="text" class="form-control" value="<?php echo "$bsp_male1" ?>" name="bsp_male1">
                                <span class="input-group-text"><i class=""></i>Bachelor of Science in Psychology</span>
                                <input type="text" class="form-control" value="<?php echo "$bsp_female1" ?>" name="bsp_female1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Bachelor of Science in Management Accounting</span>
                                <input type="text" class="form-control" value="<?php echo "$bsme_male1" ?>" name="bsme_male1">
                                <span class="input-group-text"><i class=""></i>Bachelor of Science in Management Accounting</span>
                                <input type="text" class="form-control" value="<?php echo "$bsme_female1" ?>" name="bsme_female1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Total number of graduates who acquired license:</span>
                                <input type="text" class="form-control" value="<?php echo "$tno_gwal" ?>" name="tno_gwal">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Bachelor of Science Industrial Engineering</span>
                                <input type="text" class="form-control" value="<?php echo "$bsie_male2" ?>" name="bsie_male2">
                                <span class="input-group-text"><i class=""></i>Bachelor of Science Industrial Engineering</span>
                                <input type="text" class="form-control" value="<?php echo "$bsie_female2" ?>" name="bsie_female2">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Bachelor of Science in Psychology</span>
                                <input type="text" class="form-control" value="<?php echo "$bsp_male2" ?>" name="bsp_male2">
                                <span class="input-group-text"><i class=""></i>Bachelor of Science in Psychology</span>
                                <input type="text" class="form-control" value="<?php echo "$bsp_female2" ?>" name="bsp_female2">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Bachelor of Science in Management Accounting</span>
                                <input type="text" class="form-control" value="<?php echo "$bsme_male2" ?>" name="bsme_male2">
                                <span class="input-group-text"><i class=""></i>Bachelor of Science in Management Accounting</span>
                                <input type="text" class="form-control" value="<?php echo "$bsme_female2" ?>" name="bsme_female2">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Total number of graduates who failed to pass the licensure examination:</span>
                                <input type="text" class="form-control"  value="<?php echo "$no_gwftptle" ?>" name="no_gwftptle">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i>Percent of the total number of graduates are eligible for licensure examination.</span>
                                <input type="text" class="form-control"  value="<?php echo "$Tno_gele" ?>" name="Tno_gele">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i>Percent of the total number of graduates who are eligible for licensure examination took the licensure examination.</span>
                                <input type="text" class="form-control"  value="<?php echo "$Ptno_elettle" ?>" name="Ptno_elettle">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i>Percent of the graduates who took the licensure examination have successfully acquired their license.</span>
                                <input type="text" class="form-control" value="<?php echo "$Pglesatl" ?>" name="Pglesatl">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i>Percent of graduates who took the licensure examination have failed to pass.</span>
                                <input type="text" class="form-control" value="<?php echo "$Pglehftp" ?>" name="Pglehftp">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Update
                                    Research</button>
                                    <a href="../../../admin/sdg4/up_delsdg4.php" class="btn btn-danger">Cancel</a>
                            </div>
                        </form>
                    </div>

<?php
        }
    }
}


?>