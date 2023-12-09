<?php
include '../../../includes/adminHeadupdate/header8.php';
include '../../../includes/db.php';

if (isset($_GET['research'])) {

        $update = $_GET['update'];
        //echo $update;
        $research = $_GET['research'];
        //echo $research;
        if ($research == '811') {
                if(isset($_POST['btnUpdate'])){
 
                $title = $_POST['811title'];
                $author = $_POST['811author'];
                $year = $_POST['811year'];
                $citation = $_POST['811citation'];
                // $research = (int)$research;
                // echo(gettype($research));
                $query = "UPDATE `research8.1.1` SET title= '{$title}',author= '{$author}',year= '{$year}',citation= '{$citation}'  WHERE `RID` = ".$update."";
                $updateChecker = mysqli_query($conn, $query);
                if ($updateChecker) {
                    header("Location:../up_delsdg8.php?message=Update Successful");
                } else {
                    die("Query failed. " . mysqli_error($conn));
                }
                }


                $outerquery = "SELECT * FROM `research8.1.1` WHERE `RID` = ".$update."";
                $select = mysqli_query($conn,$outerquery);
                if (mysqli_num_rows($select) > 0) {
                while ($row = mysqli_fetch_assoc($select)) {
                        $id = $row['rid'];

                        $title = $row['title'];
                        $author = $row['author'];
                        $year = $row['year'];
                        $citation = $row['citation'];
                ?>
                                <!-- // This div is for research 8.1.1-->
                                <div class="collapse w-100 h-auto p-3" id="research8" style="display: block ;">
                                        <h2 class="text-center pb-5">Research on health and wellbeing</h2>
                                        <form action="" method="post">
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Title of the Research</span>
                                                        <input type="text" class="form-control" value="<?php echo "$title" ?>" name="811title"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Author</span>
                                                        <input type="text" class="form-control" value="<?php echo "$author" ?>" name="811author"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Year of Publication</span>
                                                        <input type="text" class="form-control" value="<?php echo "$year" ?>" name="811year"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of citation</span>
                                                        <input type="text" class="form-control" value="<?php echo "$citation" ?>" name="811citation"
                                                                aria-describedby="basic-addon1">
                                                </div>
                              
                                                 <div class="d-grid">
                                                        <button type="submit" class="btn btn-success mb-3" name="btnUpdate">Update Research</button>
                                                        <a href="../../../admin/sdg8/up_delsdg8.php" class="btn btn-danger">Cancel</a>
                                                </div>
                                        </form>
                                </div>
                        <?php
                }
}
        } elseif ($research == '821') {
                if(isset($_POST['btnUpdate'])){

                $ppa = $_POST['821ppa'];
                $description = $_POST['821description'];
                $cost = $_POST['821cost'];
                $fund = $_POST['821fund'];

                $query = "UPDATE `research8.2.1` SET ppa = '{$ppa}',description = '{$description}',cost = '{$cost}',fund = '{$fund}'  WHERE `RID` = ".$update."";
                $updateChecker = mysqli_query($conn, $query);
                if ($updateChecker) {
                    header("Location:../up_delsdg8.php?message=Update Successful");
                } else {
                    die("Query failed. " . mysqli_error($conn));
                }
                }

                $outerquery = "SELECT * FROM `research8.2.1` WHERE `RID` = ".$update."";
                $select = mysqli_query($conn, $outerquery);
                if (mysqli_num_rows($select) > 0) {
                while ($row = mysqli_fetch_assoc($select)) {
                        $id = $row['rid'];

                        $ppa = $row['ppa'];
                        $description = $row['description'];
                        $cost = $row['cost'];
                        $fund = $row['fund'];
                ?>
                                <!-- html code hereThis div is for research 8.2.1 -->
                                <div class="collapse w-100 h-auto p-3" id="research8" style="display: block ;">
                                        <h2 class="text-center pb-5">Research on health and wellbeing</h2>
                                        <form action="" method="post">
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Title of the PPA</span>
                                                        <input type="text" class="form-control" value="<?php echo "$ppa" ?>" name="821ppa"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Description of the PPA</span>
                                                        <input type="text" class="form-control" value="<?php echo "$description" ?>" name="821description"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                                        <input type="text" class="form-control" value="<?php echo "$cost" ?>" name="821cost"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                                        <input type="text" class="form-control" value="<?php echo "$fund" ?>" name="821fund"
                                                                aria-describedby="basic-addon1">
                                                </div>
                              
                                                 <div class="d-grid">
                                                        <button type="submit" class="btn btn-success mb-3" name="btnUpdate">Update Research</button>
                                                        <a href="../../../admin/sdg8/up_delsdg8.php" class="btn btn-danger">Cancel</a>
                                                </div>
                                        </form>
                                </div>
                        <?php
                }
}
        } elseif ($research == '822') {
                if(isset($_POST['btnUpdate'])){

                // $ppa = $_POST['822ppa'];
                // $description = $_POST['822description'];
                // $cost = $_POST['822cost'];
                // $fund = $_POST['822fund'];

                $gsisTotal = $_POST['822gsisTotal'];
                $gsisMale = $_POST['822gsisMale'];
                $gsisFemale = $_POST['822gsisFemale'];

                $sssTotal = $_POST['822sssTotal'];
                $sssMale = $_POST['822sssMale'];
                $sssFemale = $_POST['822sssFemale'];

                $phTotal = $_POST['822phTotal'];
                $phMale = $_POST['822phMale'];
                $phFemale = $_POST['822phFemale'];

                $piTotal = $_POST['822piTotal'];
                $piMale = $_POST['822piMale'];
                $piFemale = $_POST['822piFemale'];

                $gsispercentage = $_POST['822gsispercentage'];
                $ssspercentage = $_POST['822ssspercentage'];
                $phpercentage = $_POST['822phpercentage'];
                $pipercentage = $_POST['822pipercentage'];

                $query = "UPDATE `research8.2.2` SET gsisTotal = '{$gsisTotal}',gsisMale = '{$gsisMale}',gsisFemale = '{$gsisFemale}',sssTotal = '{$sssTotal}',sssMale = '{$sssMale}',sssFemale = '{$sssFemale}',phTotal = '{$phTotal}',phMale = '{$phMale}',phFemale = '{$phFemale}',piTotal = '{$piTotal}',piMale = '{$piMale}',piFemale = '{$piFemale}',gsispercentage = '{$gsispercentage}',ssspercentage = '{$ssspercentage}',phpercentage = '{$phpercentage}',pipercentage = '{$pipercentage}'  WHERE `RID` = ".$update."";
                $updateChecker = mysqli_query($conn, $query);
                if ($updateChecker) {
                    header("Location:../up_delsdg8.php?message=Update Successful");
                } else {
                    die("Query failed. " . mysqli_error($conn));
                }
                }

                $outerquery = "SELECT * FROM `research8.2.2` WHERE `RID` = ".$update."";
                $select = mysqli_query($conn, $outerquery);
                if (mysqli_num_rows($select) > 0) {
                while ($row = mysqli_fetch_assoc($select)) {
                        $id = $row['rid'];

                //        $ppa = $row[''];
                //        $description = $row[''];
                //        $cost = $row[''];
                //        $fund = $row[''];

                        $gsisTotal = $row['gsisTotal'];
                        $gsisMale = $row['gsisMale'];
                        $gsisFemale = $row['gsisFemale'];

                        $sssTotal = $row['sssTotal'];
                        $sssMale = $row['sssMale'];
                        $sssFemale = $row['sssFemale'];

                        $phTotal = $row['phTotal'];
                        $phMale = $row['phMale'];
                        $phFemale = $row['phFemale'];

                        $piTotal = $row['piTotal'];
                        $piMale = $row['piMale'];
                        $piFemale = $row['piFemale'];

                        $gsispercentage = $row['gsispercentage'];
                        $ssspercentage = $row['ssspercentage'];
                        $phpercentage = $row['phpercentage'];
                        $pipercentage = $row['pipercentage'];
                ?>
                                <!-- html code hereThis div is for research 8.2.2 -->
                                <div class="collapse w-100 h-auto p-3" id="research8" style="display: block ;">
                                        <h2 class="text-center pb-5">Research on health and wellbeing</h2>
                                        <form action="" method="post">
                                                <!-- <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Title</span>
                                        <input type="text" class="form-control" value="<?php //echo "ppa" ?>" name="822ppa"
                                                aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Author</span>
                                        <input type="text" class="form-control" value="<?php //echo "description" ?>" name="822description"
                                                aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Year Publication</span>
                                        <input type="text" class="form-control" value="<?php //echo "cost" ?>" name="822cost"
                                                aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"></span>
                                        <input type="text" class="form-control" value="<?php //echo "fund" ?>" name="822fund"
                                                aria-describedby="basic-addon1">
                                </div> -->

                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total member of GSIS</span>
                                                        <input type="text" class="form-control" value="<?php echo "$gsisTotal" ?>" name="822gsisTotal"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">gsisMale</span>
                                                        <input type="text" class="form-control" value="<?php echo "$gsisMale" ?>" name="822gsisMale"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">gsisFemale</span>
                                                        <input type="text" class="form-control" value="<?php echo "$gsisFemale" ?>" name="822gsisFemale"
                                                                aria-describedby="basic-addon1">
                                                </div>

                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total member of SSS</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sssTotal" ?>" name="822sssTotal"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">sssMale</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sssMale" ?>" name="822sssMale"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">sssFemale</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sssFemale" ?>" name="822sssFemale"
                                                                aria-describedby="basic-addon1">
                                                </div>

                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total member of Philhealth</span>
                                                        <input type="text" class="form-control" value="<?php echo "$phTotal" ?>" name="822phTotal"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">phMale</span>
                                                        <input type="text" class="form-control" value="<?php echo "$phMale" ?>" name="822phMale"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">phFemale</span>
                                                        <input type="text" class="form-control" value="<?php echo "$phFemale" ?>" name="822phFemale"
                                                                aria-describedby="basic-addon1">
                                                </div>

                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total member of Pag-ibig</span>
                                                        <input type="text" class="form-control" value="<?php echo "$piTotal" ?>" name="822piTotal"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">piMale</span>
                                                        <input type="text" class="form-control" value="<?php echo "$piMale" ?>" name="822piMale"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">piFemale</span>
                                                        <input type="text" class="form-control" value="<?php echo "$piFemale" ?>" name="822piFemale"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">GSIS member percentage</span>
                                                        <input type="text" class="form-control" value="<?php echo "$gsispercentage" ?>" name="822gsispercentage"
                                                                aria-describedby="basic-addon1">
                                                </div><div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">SSS member percentage</span>
                                                        <input type="text" class="form-control" value="<?php echo "$ssspercentage" ?>" name="822ssspercentage"
                                                                aria-describedby="basic-addon1">
                                                </div><div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Philhealth member percentage</span>
                                                        <input type="text" class="form-control" value="<?php echo "$phpercentage" ?>" name="822phpercentage"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Pag - Ibig member percentage</span>
                                                        <input type="text" class="form-control" value="<?php echo "$pipercentage" ?>" name="822pipercentage"
                                                                aria-describedby="basic-addon1">
                                                </div>
                              
                                                 <div class="d-grid">
                                                        <button type="submit" class="btn btn-success mb-3" name="btnUpdate">Update Research</button>
                                                        <a href="../../../admin/sdg8/up_delsdg8.php" class="btn btn-danger">Cancel</a>
                                                </div>
                                        </form>
                                </div>
                        <?php
                }
}
        } elseif ($research == '823') {
                if(isset($_POST['btnUpdate'])){

                // $ppa = $_POST['823ppa'];
                 // $description = $_POST['823description'];
                 // $cost = $_POST['823cost'];
                 // $fund = $_POST['823fund'];

                $torg = $_POST['823torg'];

                $tiorg = $_POST['823tiorg'];
                $tiorgMale = $_POST['823tiorgMale'];
                $tiorgFemale = $_POST['823tiorgFemale'];

                $teorg = $_POST['823teorg'];
                $teorgMale = $_POST['823teorgMale'];
                $teorgFemale = $_POST['823teorgFemale'];

                $ipercentage = $_POST['823ipercentage'];
                $epercentage = $_POST['823epercentage'];

                $evidence = $_POST['823evidence'];

                $query = "UPDATE `research8.2.3` SET torg = '{$torg}',tiorg = '{$tiorg}',tiorgMale = '{$tiorgMale}',tiorgFemale = '{$tiorgFemale}',teorg = '{$teorg}',teorgMale = '{$teorgMale}',teorgFemale = '{$teorgFemale}',ipercentage = '{$ipercentage}',epercentage = '{$epercentage}',evidence = '{$evidence}'  WHERE `RID` = ".$update."";
                $updateChecker = mysqli_query($conn, $query);
                if ($updateChecker) {
                    header("Location:../up_delsdg8.php?message=Update Successful");
                } else {
                    die("Query failed. " . mysqli_error($conn));
                }
                }

                $outerquery = "SELECT * FROM `research8.2.3` WHERE `RID` = ".$update."";
                $select = mysqli_query($conn, $outerquery);
                if (mysqli_num_rows($select) > 0) {
                while ($row = mysqli_fetch_assoc($select)) {
                $id = $row['rid'];

                //        $ppa = $row[''];
                //        $description = $row[''];
                //        $cost = $row[''];
                //        $fund = $row[''];

                        $torg = $row['torg'];

                        $tiorg = $row['tiorg'];
                        $tiorgMale = $row['tiorgMale'];
                        $tiorgFemale = $row['tiorgFemale'];

                        $teorg = $row['teorg'];
                        $teorgMale = $row['teorgMale'];
                        $teorgFemale = $row['teorgFemale'];

                        $ipercentage = $row['ipercentage'];
                        $epercentage = $row['epercentage'];

                        $evidence = $row['evidence'];
                ?>
                                <!-- html code here This div is for research 8.2.3-->
                                <div class="collapse w-100 h-auto p-3" id="research8" style="display: block ;">
                                        <h2 class="text-center pb-5">Research on health and wellbeing</h2>
                                        <form action="" method="post">
                                                <!-- <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Title</span>
                                        <input type="text" class="form-control" value="<?php //echo "ppa" ?>" name="823ppa"
                                                aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Author</span>
                                        <input type="text" class="form-control" value="<?php //echo "description" ?>" name="823description"
                                                aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Year Publication</span>
                                        <input type="text" class="form-control" value="<?php //echo "cost" ?>" name="823cost"
                                                aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"></span>
                                        <input type="text" class="form-control" value="<?php //echo "fund" ?>" name="823fund"
                                                aria-describedby="basic-addon1">
                                </div> -->
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total Organization</span>
                                                        <input type="text" class="form-control" value="<?php echo "$torg" ?>" name="823torg"
                                                                aria-describedby="basic-addon1">
                                                </div>

                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total Internal Organization</span>
                                                        <input type="text" class="form-control" value="<?php echo "$tiorg" ?>" name="823tiorg"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Male</span>
                                                        <input type="text" class="form-control" value="<?php echo "$tiorgMale" ?>" name="823tiorgMale"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Female</span>
                                                        <input type="text" class="form-control" value="<?php echo "$tiorgFemale" ?>" name="823tiorgFemale"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total External organization</span>
                                                        <input type="text" class="form-control" value="<?php echo "$teorg" ?>" name="823teorg"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Male</span>
                                                        <input type="text" class="form-control" value="<?php echo "$teorgMale" ?>" name="823teorgMale"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Female</span>
                                                        <input type="text" class="form-control" value="<?php echo "$teorgFemale" ?>" name="823teorgFemale"
                                                                aria-describedby="basic-addon1">
                                                </div>

                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Internal Member percentage</span>
                                                        <input type="text" class="form-control" value="<?php echo "$ipercentage" ?>" name="823ipercentage"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">External member percentage</span>
                                                        <input type="text" class="form-control" value="<?php echo "$epercentage" ?>" name="823epercentage"
                                                                aria-describedby="basic-addon1">
                                                </div>

                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Evidence</span>
                                                        <input type="text" class="form-control" value="<?php echo "$evidence" ?>" name="823evidence"
                                                                aria-describedby="basic-addon1">
                                                </div>
                              
                                                 <div class="d-grid">
                                                        <button type="submit" class="btn btn-success mb-3" name="btnUpdate">Update Research</button>
                                                        <a href="../../../admin/sdg8/up_delsdg8.php" class="btn btn-danger">Cancel</a>
                                                </div>
                                        </form>
                                </div>
                        <?php
                }
}
        } elseif ($research == '824') {
                if(isset($_POST['btnUpdate'])){

                $tpolicy = $_POST['824tpolicy'];
                $tppa = $_POST['824tppa'];

                $ppa = $_POST['824ppa'];
                $description = $_POST['824description'];
                $cost = $_POST['824cost'];
                $fund = $_POST['824fund'];

                $evidence = $_POST['824evidence'];

                $query = "UPDATE `research8.2.4` SET tpolicy = '{$tpolicy}',tppa = '{$tppa}',ppa = '{$ppa}',description = '{$description}',cost = '{$cost}',fund = '{$fund}',evidence = '{$evidence}'  WHERE `RID` = ".$update."";
                $updateChecker = mysqli_query($conn, $query);
                if ($updateChecker) {
                    header("Location:../up_delsdg8.php?message=Update Successful");
                } else {
                    die("Query failed. " . mysqli_error($conn));
                }
                }

                $outerquery = "SELECT * FROM `research8.2.4` WHERE `RID` = ".$update."";
                $select = mysqli_query($conn, $outerquery);
                if (mysqli_num_rows($select) > 0) {
                while ($row = mysqli_fetch_assoc($select)) {
                        $id = $row['rid'];

                        $tpolicy = $row['tpolicy'];
                        $tppa = $row['tppa'];

                        $ppa = $row['ppa'];
                        $description = $row['description'];
                        $cost = $row['cost'];
                        $fund = $row['fund'];

                        $evidence = $row['evidence'];
                ?>
                                <!-- html code here This div is for research 8.2.4-->
                                <div class="collapse w-100 h-auto p-3" id="research8" style="display: block ;">
                                        <h2 class="text-center pb-5">Research on health and wellbeing</h2>
                                        <form action="" method="post">
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total Policies on discrimination</span>
                                                        <input type="text" class="form-control" value="<?php echo "$tpolicy" ?>" name="824tpolicy"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total PPAs</span>
                                                        <input type="text" class="form-control" value="<?php echo "$tppa" ?>" name="824tppa"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Title of the PPA</span>
                                                        <input type="text" class="form-control" value="<?php echo "$ppa" ?>" name="824ppa"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Description of the PPA</span>
                                                        <input type="text" class="form-control" value="<?php echo "$description" ?>" name="824description"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                                        <input type="text" class="form-control" value="<?php echo "$cost" ?>" name="824cost"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                                        <input type="text" class="form-control" value="<?php echo "$fund" ?>" name="824fund"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Evidence</span>
                                                        <input type="text" class="form-control" value="<?php echo "$evidence" ?>" name="824evidence"
                                                                aria-describedby="basic-addon1">
                                                </div>
                              
                                                 <div class="d-grid">
                                                        <button type="submit" class="btn btn-success mb-3" name="btnUpdate">Update Research</button>
                                                        <a href="../../../admin/sdg8/up_delsdg8.php" class="btn btn-danger">Cancel</a>
                                                </div>
                                        </form>
                                </div>
                        <?php
                }
}
        } elseif ($research == '825') {
                if(isset($_POST['btnUpdate'])){

                $temployment = $_POST['825temployment'];
                $tppa = $_POST['825tppa'];

                $ppa = $_POST['825ppa'];
                $description = $_POST['825description'];
                $cost = $_POST['825cost'];
                $fund = $_POST['825fund'];

                $evidence = $_POST['825evidence'];

                $query = "UPDATE `research8.2.5` SET temployment = '{$temployment}',tppa = '{$tppa}',ppa = '{$ppa}',description = '{$description}',cost = '{$cost}',fund = '{$fund}',evidence = '{$evidence}'  WHERE `RID` = ".$update."";
                $updateChecker = mysqli_query($conn, $query);
                if ($updateChecker) {
                    header("Location:../up_delsdg8.php?message=Update Successful");
                } else {
                    die("Query failed. " . mysqli_error($conn));
                }
                }

                $outerquery = "SELECT * FROM `research8.2.5` WHERE `RID` = ".$update."";
                $select = mysqli_query($conn, $outerquery);
                if (mysqli_num_rows($select) > 0) {
                while ($row = mysqli_fetch_assoc($select)) {
                        $id = $row['rid'];

                        $temployment = $row['temployment'];
                        $tppa = $row['tppa'];

                        $ppa = $row['ppa'];
                        $description = $row['description'];
                        $cost = $row['cost'];
                        $fund = $row['fund'];

                        $evidence = $row['evidence'];
                ?>
                                <!-- html code here This div is for research 8.2.5-->
                                <div class="collapse w-100 h-auto p-3" id="research8" style="display: block ;">
                                        <h2 class="text-center pb-5">Research on health and wellbeing</h2>
                                        <form action="" method="post">
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total Employment policy for modern slavery</span>
                                                        <input type="text" class="form-control" value="<?php echo "$temployment" ?>" name="825temployment"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total PPAs</span>
                                                        <input type="text" class="form-control" value="<?php echo "$tppa" ?>" name="825tppa"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Title of the PPA</span>
                                                        <input type="text" class="form-control" value="<?php echo "$ppa" ?>" name="825ppa"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Description of the PPA</span>
                                                        <input type="text" class="form-control" value="<?php echo "$description" ?>" name="825description"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                                        <input type="text" class="form-control" value="<?php echo "$cost" ?>" name="825cost"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                                        <input type="text" class="form-control" value="<?php echo "$fund" ?>" name="825fund"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Evidence</span>
                                                        <input type="text" class="form-control" value="<?php echo "$evidence" ?>" name="825evidence"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                
                              
                                                 <div class="d-grid">
                                                        <button type="submit" class="btn btn-success mb-3" name="btnUpdate">Update Research</button>
                                                        <a href="../../../admin/sdg8/up_delsdg8.php" class="btn btn-danger">Cancel</a>
                                                </div>
                                        </form>
                                </div>
                        <?php
                }
}
        } elseif ($research == '826') {
                if(isset($_POST['btnUpdate'])){

                $tpolicy = $_POST['826tpolicy'];
                $tppa = $_POST['826tppa'];

                $ppa = $_POST['826ppa'];
                $description = $_POST['826description'];
                $cost = $_POST['826cost'];
                $fund = $_POST['826fund'];

                $evidence = $_POST['826evidence'];

                $query = "UPDATE `research8.2.6` SET tpolicy = '{$tpolicy}',tppa = '{$tppa}',ppa = '{$ppa}',description = '{$description}',cost = '{$cost}',fund = '{$fund}',evidence = '{$evidence}'  WHERE `RID` = ".$update."";
                $updateChecker = mysqli_query($conn, $query);
                if ($updateChecker) {
                    header("Location:../up_delsdg8.php?message=Update Successful");
                } else {
                    die("Query failed. " . mysqli_error($conn));
                }
                }

                $outerquery = "SELECT * FROM `research8.2.6` WHERE `RID` = ".$update."";
                $select = mysqli_query($conn, $outerquery);
                if (mysqli_num_rows($select) > 0) {
                while ($row = mysqli_fetch_assoc($select)) {
                        $id = $row['rid'];

                        $tpolicy = $row['tpolicy'];
                        $tppa = $row['tppa'];
                        $ppa = $row['ppa'];
                        $description = $row['description'];
                        $cost = $row['cost'];
                        $fund = $row['fund'];
                        $evidence = $row['evidence'];
                ?>
                                <!-- html code here This div is for research 8.2.6-->
                                <div class="collapse w-100 h-auto p-3" id="research8" style="display: block ;">
                                        <h2 class="text-center pb-5">Research on health and wellbeing</h2>
                                        <form action="" method="post">
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of policies for equivalent rights of workers</span>
                                                        <input type="text" class="form-control" value="<?php echo "$tpolicy" ?>" name="826tpolicy"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of PPAs implemented in accordnce to the policy</span>
                                                        <input type="text" class="form-control" value="<?php echo "$tppa" ?>" name="826tppa"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Title of the PPA</span>
                                                        <input type="text" class="form-control" value="<?php echo "$ppa" ?>" name="826ppa"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Description of the PPA</span>
                                                        <input type="text" class="form-control" value="<?php echo "$description" ?>" name="826description"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                                        <input type="text" class="form-control" value="<?php echo "$cost" ?>" name="826cost"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                                        <input type="text" class="form-control" value="<?php echo "$fund" ?>" name="826fund"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Evidence</span>
                                                        <input type="text" class="form-control" value="<?php echo "$evidence" ?>" name="826evidence"
                                                                aria-describedby="basic-addon1">
                                                </div>
                              
                                                 <div class="d-grid">
                                                        <button type="submit" class="btn btn-success mb-3" name="btnUpdate">Update Research</button>
                                                        <a href="../../../admin/sdg8/up_delsdg8.php" class="btn btn-danger">Cancel</a>
                                                </div>
                                        </form>
                                </div>
                        <?php
                }
}
        } elseif ($research == '827') {
                if(isset($_POST['btnUpdate'])){

                $tpolicy = $_POST['827tpolicy'];
                $tppa = $_POST['827tppa'];

                $ppa = $_POST['827ppa'];
                $description = $_POST['827description'];
                $cost = $_POST['827cost'];
                $fund = $_POST['827fund'];

                $evidence = $_POST['827evidence'];

                $query = "UPDATE `research8.2.7` SET tpolicy ='{$tpolicy}',tppa ='{$tppa}',ppa ='{$ppa}',description ='{$description}',cost ='{$cost}',fund ='{$fund}',evidence ='{$evidence}'  WHERE `RID` = ".$update."";
                $updateChecker = mysqli_query($conn, $query);
                if ($updateChecker) {
                    header("Location:../up_delsdg8.php?message=Update Successful");
                } else {
                    die("Query failed. " . mysqli_error($conn));
                }
                }

                $outerquery = "SELECT * FROM `research8.2.7` WHERE `RID` = ".$update."";
                $select = mysqli_query($conn, $outerquery);
                if (mysqli_num_rows($select) > 0) {
                while ($row = mysqli_fetch_assoc($select)) {
                        $id = $row['rid'];

                        $tpolicy = $row['tpolicy'];
                        $tppa = $row['tppa'];
                        $ppa = $row['ppa'];
                        $description = $row['description'];
                        $cost = $row['cost'];
                        $fund = $row['fund'];
                        $evidence = $row['evidence'];
                ?>
                                <!-- html code here This div is for research 8.2.7-->
                                <div class="collapse w-100 h-auto p-3" id="research8" style="display: block ;">
                                        <h2 class="text-center pb-5">Research on health and wellbeing</h2>
                                        <form action="" method="post">
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of employement policy for pay scale equity</span>
                                                        <input type="text" class="form-control" value="<?php echo "$tpolicy" ?>" name="827tpolicy"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of PPAs implemented in accordance to the policy</span>
                                                        <input type="text" class="form-control" value="<?php echo "$tppa" ?>" name="827tppa"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Title of the PPA</span>
                                                        <input type="text" class="form-control" value="<?php echo "$ppa" ?>" name="827ppa"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Description of the PPA</span>
                                                        <input type="text" class="form-control" value="<?php echo "$description" ?>" name="827description"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                                        <input type="text" class="form-control" value="<?php echo "$cost" ?>" name="827cost"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                                        <input type="text" class="form-control" value="<?php echo "$fund" ?>" name="827fund"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Evidence</span>
                                                        <input type="text" class="form-control" value="<?php echo "$evidence" ?>" name="827evidence"
                                                                aria-describedby="basic-addon1">
                                                </div>
                              
                                                 <div class="d-grid">
                                                        <button type="submit" class="btn btn-success mb-3" name="btnUpdate">Update Research</button>
                                                        <a href="../../../admin/sdg8/up_delsdg8.php" class="btn btn-danger">Cancel</a>
                                                </div>
                                        </form>
                                </div>
                        <?php
                }
}
        } elseif ($research == '828') {
                if(isset($_POST['btnUpdate'])){

                // $ppa = $_POST['828ppa'];
                // $description = $_POST['828description'];
                // $cost = $_POST['828'];
                // $fund = $_POST['828fund'];

                $sg3 = $_POST['828sg3'];
                $sgMale1 = $_POST['828sgMale1'];
                $sgFemale1 = $_POST['828sgFemale1'];

                $sg6 = $_POST['828sg6'];
                $sgMale2 = $_POST['828sgMale2'];
                $sgFemale2 = $_POST['828sgFemale2'];

                $sg11 = $_POST['828sg11'];
                $sgMale3 = $_POST['828sgMale3'];
                $sgFemale3 = $_POST['828sgFemale3'];

                $sg12 = $_POST['828sg12'];
                $sgMale4 = $_POST['828sgMale4'];
                $sgFemale4 = $_POST['828sgFemale4'];

                $sg15 = $_POST['828sg15'];
                $sgMale5 = $_POST['828sgMale5'];
                $sgFemale5 = $_POST['828sgFemale5'];

                $sg16 = $_POST['828sg16'];
                $sgMale6 = $_POST['828sgMale6'];
                $sgFemale6 = $_POST['828sgFemale6'];

                $sg17 = $_POST['828sg17'];
                $sgMale7 = $_POST['828sgMale7'];
                $sgFemale7 = $_POST['828sgFemale7'];

                $sg18 = $_POST['828sg18'];
                $sgMale8 = $_POST['828sgMale8'];
                $sgFemale8 = $_POST['828sgFemale8'];

                $sg20 = $_POST['828sg20'];
                $sgMale9 = $_POST['828sgMale9'];
                $sgFemale9 = $_POST['828sgFemale9'];

                $sg21 = $_POST['828sg21'];
                $sgMale10 = $_POST['828sgMale10'];
                $sgFemale10 = $_POST['828sgFemale10'];

                $sg22 = $_POST['828sg22'];
                $sgMale11 = $_POST['828sgMale11'];
                $sgFemale11 = $_POST['828sgFemale11'];

                $sg23 = $_POST['828sg23'];
                $sgMale12 = $_POST['828sgMale12'];
                $sgFemale12 = $_POST['828sgFemale12'];

                $sg29 = $_POST['828sg29'];
                $sgMale13 = $_POST['828sgMale13'];
                $sgFemale13 = $_POST['828sgFemale13'];

                $evidence = $_POST['828evidence'];

                $query = "UPDATE `research8.2.8` SET sg3 = '{$sg3}',sgMale1 = '{$sgMale1}',sgFemale1 = '{$sgFemale1}',sg6 = '{$sg6}',sgMale2 = '{$sgMale2}',sgFemale2 = '{$sgFemale2}',sg11 = '{$sg11}',sgMale3 = '{$sgMale3}',sgFemale3 = '{$sgFemale3}',sg12 = '{$sg12}',sgMale4 = '{$sgMale4}',sgFemale4 = '{$sgFemale4}',sg15 = '{$sg15}',sgMale5 = '{$sgMale5}',sgFemale5 = '{$sgFemale5}',sg16 = '{$sg16}',sgMale6 = '{$sgMale6}',sgFemale6 = '{$sgFemale6}',sg17 = '{$sg17}',sgMale7 = '{$sgMale7}',sgFemale7 = '{$sgFemale7}',sg18 = '{$sg18}',sgMale8 = '{$sgMale8}',sgFemale8 = '{$sgFemale8}',sg20 = '{$sg20}',sgMale9 = '{$sgMale9}',sgFemale9 = '{$sgFemale9}',sg21 = '{$sg21}',sgMale10 = '{$sgMale10}',sgFemale10 = '{$sgFemale10}',sg22 = '{$sg22}',sgMale11 = '{$sgMale11}',sgFemale11 = '{$sgFemale11}',sg23 = '{$sg23}',sgMale12 = '{$sgMale12}',sgFemale12 = '{$sgFemale12}',sg29 = '{$sg29}',sgMale13 = '{$sgMale13}',sgFemale13 = '{$sgFemale13}',evidence = '{$evidence}'  WHERE `RID` = ".$update."";
                $updateChecker = mysqli_query($conn, $query);
                if ($updateChecker) {
                    header("Location:../up_delsdg8.php?message=Update Successful");
                } else {
                    die("Query failed. " . mysqli_error($conn));
                }
                }

                $outerquery = "SELECT * FROM `research8.2.8` WHERE `RID` = ".$update."";
                $select = mysqli_query($conn, $outerquery);
                if (mysqli_num_rows($select) > 0) {
                while ($row = mysqli_fetch_assoc($select)) {
                        $id = $row['rid'];

                // $ppa = $row[''];
                // $description = $row[''];
                // $cost = $row[''];
                // $fund = $row[''];

                $sg3 = $row['sg3'];
                $sgMale1 = $row['sgMale1'];
                $sgFemale1 = $row['sgFemale1'];

                $sg6 = $row['sg6'];
                $sgMale2 = $row['sgMale2'];
                $sgFemale2 = $row['sgFemale2'];

                $sg11 = $row['sg11'];
                $sgMale3 = $row['sgMale3'];
                $sgFemale3 = $row['sgFemale3'];

                $sg12 = $row['sg12'];
                $sgMale4 = $row['sgMale4'];
                $sgFemale4 = $row['sgFemale4'];

                $sg15 = $row['sg15'];
                $sgMale5 = $row['sgMale5'];
                $sgFemale5 = $row['sgFemale5'];

                $sg16 = $row['sg16'];
                $sgMale6 = $row['sgMale6'];
                $sgFemale6 = $row['sgFemale6'];

                $sg17 = $row['sg17'];
                $sgMale7 = $row['sgMale7'];
                $sgFemale7 = $row['sgFemale7'];

                $sg18 = $row['sg18'];
                $sgMale8 = $row['sgMale8'];
                $sgFemale8 = $row['sgFemale8'];

                $sg20 = $row['sg20'];
                $sgMale9 = $row['sgMale9'];
                $sgFemale9 = $row['sgFemale9'];

                $sg21 = $row['sg21'];
                $sgMale10 = $row['sgMale10'];
                $sgFemale10 = $row['sgFemale10'];

                $sg22 = $row['sg22'];
                $sgMale11 = $row['sgMale11'];
                $sgFemale11 = $row['sgFemale11'];

                $sg23 = $row['sg23'];
                $sgMale12 = $row['sgMale12'];
                $sgFemale12 = $row['sgFemale12'];

                $sg29 = $row['sg29'];
                $sgMale13 = $row['sgMale13'];
                $sgFemale13 = $row['sgFemale13'];

                $evidence = $row['evidence'];
                ?>
                                <!-- html code here This div is for research 8.2.8-->
                                <div class="collapse w-100 h-auto p-3" id="research8" style="display: block ;">
                                        <h2 class="text-center pb-5">Research on health and wellbeing</h2>
                                        <form action="" method="post">
                                                <!-- <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Title</span>
                                        <input type="text" class="form-control" value="<?php //echo "ppa" ?>" name="828ppa"
                                                aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Author</span>
                                        <input type="text" class="form-control" value="<?php //echo "description" ?>" name="828description"
                                                aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Year Publication</span>
                                        <input type="text" class="form-control" value="<?php //echo "cost" ?>" name="828cost"
                                                aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"></span>
                                        <input type="text" class="form-control" value="<?php //echo "fund" ?>" name="828fund"
                                                aria-describedby="basic-addon1">
                                </div> -->

                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Salary Grade 3</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sg3" ?>" name="828sg3"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Male</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sgMale1" ?>" name="828sgMale1"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Female</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sgFemale1" ?>" name="828sgFemale1"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Salary Grade 6</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sg6" ?>" name="828sg6"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Male</span>
                                                        <input type="text" class="form-control" value="<?php echo "s$gMale2" ?>" name="828sgMale2"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Female</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sgFemale2" ?>" name="828sgFemale2"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Salary Grade 11</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sg11" ?>" name="828sg11"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Male</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sgMale3" ?>" name="828sgMale3"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Female</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sgFemale3" ?>" name="828sgFemale3"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Salary Grade 12</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sg12" ?>" name="828sg12"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Male</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sgMale4" ?>" name="828sgMale4"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Female</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sgFemale4" ?>" name="828sgFemale4"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Salary Grade 15</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sg15" ?>" name="828sg15"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Male</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sgMale5" ?>" name="828sgMale5"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Female</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sgFemale5" ?>" name="828sgFemale5"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Salary Grade 16</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sg16" ?>" name="828sg16"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Male</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sgMale6" ?>" name="828sgMale6"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Female</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sgFemale6" ?>" name="828sgFemale6"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Salary Grade 17</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sg17" ?>" name="828sg17"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Male</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sgMale7" ?>" name="828sgMale7"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Female</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sgFemale7" ?>" name="828sgFemale7"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Salary Grade 18</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sg18" ?>" name="828sg18"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Male</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sgMale8" ?>" name="828sgMale8"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Female</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sgFemale8" ?>" name="828sgFemale8"
                                                                aria-describedby="basic-addon1">

                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Salary Grade 20</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sg20" ?>" name="828sg20"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Male</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sgMale9" ?>" name="828sgMale9"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Female</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sgFemale9" ?>" name="828sgFemale9"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Salary Grade 21</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sg21" ?>" name="828sg21"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Male</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sgMale10" ?>" name="828sgMale10"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Female</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sgFemale10" ?>" name="828sgFemale10"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Salary Grade 22</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sg22" ?>" name="828sg22"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Male</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sgMale11" ?>" name="828sgMale11"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Female</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sgFemale11" ?>" name="828sgFemale11"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Salary Grade 23</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sg23" ?>" name="828sg23"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Male</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sgMale12" ?>" name="828sgMale12"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Female</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sgFemale12" ?>" name="828sgFemale12"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Salary Grade 29</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sg29" ?>" name="828sg29"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Male</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sgMale13" ?>" name="828sgMale13"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Female</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sgFemale13" ?>" name="828sgFemale13"
                                                                aria-describedby="basic-addon1">
                                                </div>

                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Evidence</span>
                                                        <input type="text" class="form-control" value="<?php echo "$evidence" ?>" name="828evidence"
                                                                aria-describedby="basic-addon1">
                                                </div>
                              
                                                 <div class="d-grid">
                                                        <button type="submit" class="btn btn-success mb-3" name="btnUpdate">Update Research</button>
                                                        <a href="../../../admin/sdg8/up_delsdg8.php" class="btn btn-danger">Cancel</a>
                                                </div>
                                        </form>
                                </div>
                        <?php
                }
}
        } elseif ($research == '829') {
                if(isset($_POST['btnUpdate'])){

                $temployment = $_POST['829temployment'];
                $tppa = $_POST['829tppa'];

                $ppa = $_POST['829ppa'];
                $description = $_POST['829description'];
                $cost = $_POST['829cost'];
                $fund = $_POST['829fund'];

                $evidence = $_POST['829evidence'];

                $query = "UPDATE `research8.2.9` SET temployment = '{$temployment}',tppa = '{$tppa}',ppa = '{$ppa}',description = '{$description}',cost = '{$cost}',fund = '{$fund}',evidence = '{$evidence}'  WHERE `RID` = ".$update."";
                $updateChecker = mysqli_query($conn, $query);
                if ($updateChecker) {
                    header("Location:../up_delsdg8.php?message=Update Successful");
                } else {
                    die("Query failed. " . mysqli_error($conn));
                }
                }

                $outerquery = "SELECT * FROM `research8.2.9` WHERE `RID` = ".$update."";
                $select = mysqli_query($conn, $outerquery);
                if (mysqli_num_rows($select) > 0) {
                while ($row = mysqli_fetch_assoc($select)) {
                        $id = $row['rid'];

                        $temployment = $row['temployment'];
                        $tppa = $row['tppa'];

                        $ppa = $row['ppa'];
                        $description = $row['description'];
                        $cost = $row['cost'];
                        $fund = $row['fund'];

                        $evidence = $row['evidence'];
                ?>
                                <!-- html code here This div is for research 8.2.9-->
                                <div class="collapse w-100 h-auto p-3" id="research8" style="display: block ;">
                                        <h2 class="text-center pb-5">Research on health and wellbeing</h2>
                                        <form action="" method="post">
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total employment practiceappeal process</span>
                                                        <input type="text" class="form-control" value="<?php echo "$temployment" ?>" name="829temployment"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of PPAs implemented in accordance to the policy</span>
                                                        <input type="text" class="form-control" value="<?php echo "$tppa" ?>" name="829tppa"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Title of the PPA</span>
                                                        <input type="text" class="form-control" value="<?php echo "$ppa" ?>" name="829ppa"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Description of the PPA</span>
                                                        <input type="text" class="form-control" value="<?php echo "$description" ?>" name="829description"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                                        <input type="text" class="form-control" value="<?php echo "$cost" ?>" name="829cost"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                                        <input type="text" class="form-control" value="<?php echo "$fund" ?>" name="829fund"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Evidence</span>
                                                        <input type="text" class="form-control" value="<?php echo "$evidence" ?>" name="829evidence"
                                                                aria-describedby="basic-addon1">
                                                </div>
                              
                                                 <div class="d-grid">
                                                        <button type="submit" class="btn btn-success mb-3" name="btnUpdate">Update Research</button>
                                                        <a href="../../../admin/sdg8/up_delsdg8.php" class="btn btn-danger">Cancel</a>
                                                </div>
                                        </form>
                                </div>
                        <?php
                }
}
        } elseif ($research == '831') {
                if(isset($_POST['btnUpdate'])){

                 // $ppa = $_POST['831ppa'];
                 // $description = $_POST['831description'];
                 // $cost = $_POST['831cost'];
                 // $fund = $_POST['831fund'];

                $temployees = $_POST['831temployees'];
                $tmMale = $_POST['831tmMale'];
                $tmFemale = $_POST['831tmFemale'];

                $tteaching = $_POST['831tteaching'];
                $ttMale = $_POST['831ttMale'];
                $ttFemale = $_POST['831ttFemale'];

                $tnonteaching = $_POST['831tnonteaching'];
                $tntMale = $_POST['831tntMale'];
                $tntFemale = $_POST['831tntFemale'];

                $evidence = $_POST['831evidence'];

                $query = "UPDATE `research8.3.1` SET temployees = '{$temployees}',tmMale = '{$tmMale}',tmFemale = '{$tmFemale}',tteaching = '{$tteaching}',ttMale = '{$ttMale}',ttFemale = '{$ttFemale}',tnonteaching = '{$tnonteaching}',tntMale = '{$tntMale}',tntFemale = '{$tntFemale}',evidence = '{$evidence}'  WHERE `RID` = ".$update."";
                $updateChecker = mysqli_query($conn, $query);
                if ($updateChecker) {
                    header("Location:../up_delsdg8.php?message=Update Successful");
                } else {
                    die("Query failed. " . mysqli_error($conn));
                }
                }

                $outerquery = "SELECT * FROM `research8.3.1` WHERE `RID` = ".$update."";
                $select = mysqli_query($conn, $outerquery);
                if (mysqli_num_rows($select) > 0) {
                while ($row = mysqli_fetch_assoc($select)) {
                        $id = $row['rid'];

                 //         $ppa = $row[''];
                 //         $description = $row[''];
                 //         $cost = $row[''];
                 //         $fund = $row[''];

                        $temployees = $row['temployees'];
                        $tmMale = $row['tmMale'];
                        $tmFemale = $row['tmFemale'];

                        $tteaching = $row['tteaching'];
                        $ttMale = $row['ttMale'];
                        $ttFemale = $row['ttFemale'];

                        $tnonteaching = $row['tnonteaching'];
                        $tntMale = $row['tntMale'];
                        $tntFemale = $row['tntFemale'];

                        $evidence = $row['evidence'];
                ?>
                                <!-- html code here This div is for research 8.3.1-->
                                <div class="collapse w-100 h-auto p-3" id="research8" style="display: block ;">
                                        <h2 class="text-center pb-5">Research on health and wellbeing</h2>
                                        <form action="" method="post">
                                                <!-- <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Title</span>
                                        <input type="text" class="form-control" value="<?php // echo "ppa" ?>" name="831ppa"
                                                aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Author</span>
                                        <input type="text" class="form-control" value="<?php //echo "description" ?>" name="831description"
                                                aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Year Publication</span>
                                        <input type="text" class="form-control" value="<?php //echo "cost" ?>" name="831cost"
                                                aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"></span>
                                        <input type="text" class="form-control" value="<?php //echo "fund" ?>" name="31fund8"
                                                aria-describedby="basic-addon1">
                                </div> -->

                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total Employees</span>
                                                        <input type="text" class="form-control" value="<?php echo "$temployees" ?>" name="831temployees"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Male</span>
                                                        <input type="text" class="form-control" value="<?php echo "$tmMale" ?>" name="831tmMale"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Female</span>
                                                        <input type="text" class="form-control" value="<?php echo "$tmFemale" ?>" name="831tmFemale"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total Teaching Staff</span>
                                                        <input type="text" class="form-control" value="<?php echo "$tteaching" ?>" name="831tteaching"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Male</span>
                                                        <input type="text" class="form-control" value="<?php echo "$ttMale" ?>" name="831ttMale"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Female</span>
                                                        <input type="text" class="form-control" value="<?php echo "$ttFemale" ?>" name="831ttFemale"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total non-teaching</span>
                                                        <input type="text" class="form-control" value="<?php echo "$tnonteaching" ?>" name="831tnonteaching"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Male</span>
                                                        <input type="text" class="form-control" value="<?php echo "$tntMale" ?>" name="831tntMale"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Female</span>
                                                        <input type="text" class="form-control" value="<?php echo "$tntFemale" ?>" name="831tntFemale"
                                                                aria-describedby="basic-addon1">
                                                </div>

                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Evidence</span>
                                                        <input type="text" class="form-control" value="<?php echo "$evidence" ?>" name="831evidence"
                                                                aria-describedby="basic-addon1">
                                                </div>
                              
                                                 <div class="d-grid">
                                                        <button type="submit" class="btn btn-success mb-3" name="btnUpdate">Update Research</button>
                                                        <a href="../../../admin/sdg8/up_delsdg8.php" class="btn btn-danger">Cancel</a>
                                                </div>
                                        </form>
                                </div>
                        <?php
                }
}
        } elseif ($research == '832') {
                if(isset($_POST['btnUpdate'])){

                $tbudget = $_POST['832tbudget'];
                $texpenditure = $_POST['832texpenditure'];
                $pservices = $_POST['832pservices'];
                $mode = $_POST['832mode'];
                $cexpenditure = $_POST['832cexpenditure'];

                 // $ppa = $_POST['832ppa'];
                 // $description = $_POST['832description'];
                 // $cost = $_POST['832cost'];
                 // $fund = $_POST['832fund'];

                $evidence = $_POST['832evidence'];

                $query = "UPDATE `research8.3.2` SET tbudget = '{$tbudget}',texpenditure = '{$texpenditure}',pservices = '{$pservices}',mode = '{$mode}',cexpenditure = '{$cexpenditure}',evidence = '{$evidence}' WHERE `RID` = ".$update."";
                $updateChecker = mysqli_query($conn, $query);
                if ($updateChecker) {
                    header("Location:../up_delsdg8.php?message=Update Successful");
                } else {
                    die("Query failed. " . mysqli_error($conn));
                }        
                }

                $outerquery = "SELECT * FROM `research8.3.2` WHERE `RID` = ".$update."";
                $select = mysqli_query($conn, $outerquery);
                if (mysqli_num_rows($select) > 0) {
                while ($row = mysqli_fetch_assoc($select)) {
                        $id = $row['rid'];

                        $tbudget = $row['tbudget'];
                        $texpenditure = $row['texpenditure'];

                        $pservices = $row['pservices'];
                        $mode = $row['mode'];
                        $cexpenditure = $row['cexpenditure'];

                //         $ppa = $row[''];
                //         $description = $row[''];
                //         $cost = $row[''];
                //         $fund = $row[''];
                        $evidence = $row[''];
                ?>
                                <!-- html code here This div is for research 8.3.2-->
                                <div class="collapse w-100 h-auto p-3" id="research8" style="display: block ;">
                                        <h2 class="text-center pb-5">Research on health and wellbeing</h2>
                                        <form action="" method="post">
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total Approved campus budget</span>
                                                        <input type="text" class="form-control" value="<?php echo "$tbudget" ?>" name="832tbudget"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total campus Expenditure</span>
                                                        <input type="text" class="form-control" value="<?php echo "$texpenditure" ?>" name="832texpenditure"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Personal Services</span>
                                                        <input type="text" class="form-control" value="<?php echo "$pservices" ?>" name="832pservices"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">MODE</span>
                                                        <input type="text" class="form-control" value="<?php echo "$mode" ?>" name="32mode8"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Capital Expenditure</span>
                                                        <input type="text" class="form-control" value="<?php echo "$cexpenditure" ?>" name="832cexpenditure"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <!-- <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"></span>
                                        <input type="text" class="form-control" value="<?php //echo "ppa" ?>" name="832ppa"
                                                aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"></span>
                                        <input type="text" class="form-control" value="<?php //echo "description" ?>" name="832description"
                                                aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"></span>
                                        <input type="text" class="form-control" value="<?php // echo "cost" ?>" name="832cost"
                                                aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"></span>
                                        <input type="text" class="form-control" value="<?php //echo "fund" ?>" name="832fund"
                                                aria-describedby="basic-addon1">
                                </div> -->
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Evidence</span>
                                                        <input type="text" class="form-control" value="<?php echo "$evidence" ?>" name="832evidence"
                                                                aria-describedby="basic-addon1">
                                                </div>
                              
                                                 <div class="d-grid">
                                                        <button type="submit" class="btn btn-success mb-3" name="btnUpdate">Update Research</button>
                                                        <a href="../../../admin/sdg8/up_delsdg8.php" class="btn btn-danger">Cancel</a>
                                                </div>
                                        </form>
                                </div>
                        <?php
                }
}
        } elseif ($research == '833') {
                if(isset($_POST['btnUpdate'])){

                $ppa = $_POST['833ppa'];
                $description = $_POST['833description'];
                $cost = $_POST['833cost'];
                $fund = $_POST['833fund'];

                $cemonth = $_POST['833cemonth'];
                $ceannum = $_POST['833ceannum'];

                $query = "UPDATE `research8.3.3` SET ppa = '{$ppa}',description = '{$description}',cost = '{$cost}',fund = '{$fund}',cemonth = '{$cemonth}',ceannum = '{$ceannum}'  WHERE `RID` = ".$update."";
                $updateChecker = mysqli_query($conn, $query);
                if ($updateChecker) {
                    header("Location:../up_delsdg8.php?message=Update Successful");
                } else {
                    die("Query failed. " . mysqli_error($conn));
                } 
                }

                $outerquery = "SELECT * FROM `research8.3.3` WHERE `RID` = ".$update."";
                $select = mysqli_query($conn, $outerquery);
                if (mysqli_num_rows($select) > 0) {
                while ($row = mysqli_fetch_assoc($select)) {
                        $id = $row['rid'];

                        $ppa = $row['ppa'];
                        $description = $row['description'];
                        $cost = $row['cost'];
                        $fund = $row['fund'];
                        $cemonth = $row['cemonth'];
                        $ceannum = $row['ceannum'];
                ?>
                                <!-- html code here This div is for research 8.3.3-->
                                <div class="collapse w-100 h-auto p-3" id="research8" style="display: block ;">
                                        <h2 class="text-center pb-5">Research on health and wellbeing</h2>
                                        <form action="" method="post">
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Title of the PPA</span>
                                                        <input type="text" class="form-control" value="<?php echo "$ppa" ?>" name="833ppa"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Description of the PPA</span>
                                                        <input type="text" class="form-control" value="<?php echo "$description" ?>" name="833description"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                                        <input type="text" class="form-control" value="<?php echo "$cost" ?>" name="833cost"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                                        <input type="text" class="form-control" value="<?php echo "$fund" ?>" name="833fund"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Campus expenditure per capita(month)</span>
                                                        <input type="text" class="form-control" value="<?php echo "$cemonth" ?>" name="833cemonth"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Campus expenditure per capita(Annum)</span>
                                                        <input type="text" class="form-control" value="<?php echo "$ceannum" ?>" name="833ceannum"
                                                                aria-describedby="basic-addon1">
                                                </div>
                              
                                                 <div class="d-grid">
                                                        <button type="submit" class="btn btn-success mb-3" name="btnUpdate">Update Research</button>
                                                        <a href="../../../admin/sdg8/up_delsdg8.php" class="btn btn-danger">Cancel</a>
                                                </div>
                                        </form>
                                </div>
                        <?php
                }
}
        } elseif ($research == '841') {
                if(isset($_POST['btnUpdate'])){

                // $ppa = $_POST['841ppa'];
                // $description = $_POST['841description'];
                // $cost = $_POST['841cost'];
                // $fund = $_POST['841fund'];

                $tinside = $_POST['841tinside'];
                $tiMale = $_POST['841tiMale'];
                $tiFemale = $_POST['841tiFemale'];

                $toutside = $_POST['841toutside'];
                $toMale = $_POST['841toMale'];
                $toFemale = $_POST['841toFemale'];

                $tboth = $_POST['841tboth'];
                $tbMale = $_POST['841tbMale'];
                $tbFemale = $_POST['841tbFemale'];

                $percentage = $_POST['841percentage'];

                $query = "UPDATE `research8.4.1` SET tinside = '{$tinside}',tiMale = '{$tiMale}',tiFemale = '{$tiFemale}',toutside = '{$toutside}',toMale = '{$toMale}',toFemale = '{$toFemale}',tboth = '{$tboth}',tbMale = '{$tbMale}',tbFemale = '{$tbFemale}',percentage = '{$percentage}' WHERE `RID` = ".$update."";
                $updateChecker = mysqli_query($conn, $query);
                if ($updateChecker) {
                    header("Location:../up_delsdg8.php?message=Update Successful");
                } else {
                    die("Query failed. " . mysqli_error($conn));
                }
                }

                $outerquery = "SELECT * FROM `research8.4.1` WHERE `RID` = ".$update."";
                $select = mysqli_query($conn, $outerquery);
                if (mysqli_num_rows($select) > 0) {
                while ($row = mysqli_fetch_assoc($select)) {
                        $id = $row['rid'];

                 //         $ppa = $row[''];
                 //         $description = $row[''];
                 //         $cost = $row[''];
                 //         $fund = $row[''];

                        $tinside = $row['tinside'];
                        $tiMale = $row['tiMale'];
                        $tiFemale = $row['tiFemale'];

                        $toutside = $row['toutside'];
                        $toMale = $row['toMale'];
                        $toFemale = $row['toFemale'];

                        $tboth = $row['tboth'];
                        $tbMale = $row['tbMale'];
                        $tbFemale = $row['tbFemale'];

                        $percentage = $row['percentage'];
                ?>
                                <!-- html code here This div is for research 8.4.1-->
                                <div class="collapse w-100 h-auto p-3" id="research8" style="display: block ;">
                                        <h2 class="text-center pb-5">Research on health and wellbeing</h2>
                                        <form action="" method="post">
                                                <!-- <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Title</span>
                                        <input type="text" class="form-control" value="<?php //echo "ppa" ?>" name="841ppa"
                                                aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Author</span>
                                        <input type="text" class="form-control" value="<?php //echo "description" ?>" name="841description"
                                                aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Year Publication</span>
                                        <input type="text" class="form-control" value="<?php //echo "cost" ?>" name="841cost"
                                                aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"></span>
                                        <input type="text" class="form-control" value="<?php //echo "fund" ?>" name="841fund"
                                                aria-describedby="basic-addon1">
                                </div> -->

                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of OJTS inside the campus</span>
                                                        <input type="text" class="form-control" value="<?php echo "$tinside" ?>" name="841tinside"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Male</span>
                                                        <input type="text" class="form-control" value="<?php echo "$tiMale" ?>" name="841tiMale"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Female</span>
                                                        <input type="text" class="form-control" value="<?php echo "$tiFemale" ?>" name="841tiFemale"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of OJTS working outside organizations</span>
                                                        <input type="text" class="form-control" value="<?php echo "$toutside" ?>" name="841toutside"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">male</span>
                                                        <input type="text" class="form-control" value="<?php echo "$toMale" ?>" name="841toMale"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Female</span>
                                                        <input type="text" class="form-control" value="<?php echo "$toFemale" ?>" name="841oFemale"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">total OJT working in both inside and outside</span>
                                                        <input type="text" class="form-control" value="<?php echo "$tboth" ?>" name="841tboth"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Male</span>
                                                        <input type="text" class="form-control" value="<?php echo "$tbMale" ?>" name="841tbMale"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Female</span>
                                                        <input type="text" class="form-control" value="<?php echo "$tbFemale" ?>" name="841tbFemale"
                                                                aria-describedby="basic-addon1">
                                                </div>

                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Percentage of the student population with work placements for over a month</span>
                                                        <input type="text" class="form-control" value="<?php echo "$percentage" ?>" name="841percentage"
                                                                aria-describedby="basic-addon1">
                                                </div>
                              
                                                 <div class="d-grid">
                                                        <button type="submit" class="btn btn-success mb-3" name="btnUpdate">Update Research</button>
                                                        <a href="../../../admin/sdg8/up_delsdg8.php" class="btn btn-danger">Cancel</a>
                                                </div>
                                        </form>
                                </div>
                        <?php
                }
}
        } elseif ($research == '851') {
                if(isset($_POST['btnUpdate'])){

                 // $ppa = $_POST['851ppa'];
                 // $description = $_POST['851description'];
                 // $cost = $_POST['851cost'];
                 // $fund = $_POST['851fund'];

                $permanent = $_POST['851permanent'];
                $pMale = $_POST['851pMale'];
                $pFemale = $_POST['851pFemale'];

                $temporary = $_POST['851temporary'];
                $tMale = $_POST['851tMale'];
                $tFemale = $_POST['851tFemale'];

                $casual = $_POST['851casual'];
                $cMale = $_POST['851cMale'];
                $cFemale = $_POST['851cFemale'];

                $joborder = $_POST['851joborder'];
                $joMale = $_POST['851joMale'];
                $joFemale = $_POST['851joFemale'];

                $service = $_POST['851service'];
                $sMale = $_POST['851sMale'];
                $sFemale = $_POST['851sFemale'];


                $tnpemployees = $_POST['851tnpemployees'];
                $tnpeMale = $_POST['851tnpeMale'];
                $tnpeFemale = $_POST['851tnpeFemale'];

                $tnpepercentage = $_POST['851tnpepercentage'];

                $ttstaff = $_POST['851ttstaff'];
                $ttsMale = $_POST['851ttsMale'];
                $ttsFemale = $_POST['851ttsFemale'];

                $tnptspercentage = $_POST['851tnptspercentage'];

                $tntstaff = $_POST['851tntstaff'];
                $tntsMale = $_POST['851tntsMale'];
                $tntsFemale = $_POST['851tntsFemale'];

                $tnpntspercentage = $_POST['851tnpntspercentage'];

                $query = "UPDATE `research8.5.1` SET permanent = '{$permanent}',pMale = '{$pMale}',pFemale = '{$pFemale}',temporary = '{$temporary}',tMale = '{$tMale}',tFemale = '{$tFemale}',casual = '{$casual}',cMale = '{$cMale}',cFemale = '{$cFemale}',joborder = '{$joborder}',joMale = '{$joMale}',joFemale = '{$joFemale}',service = '{$service}',sMale = '{$sMale}',sFemale = '{$sFemale}',tnpemployees = '{$tnpemployees}',tnpeMale = '{$tnpeMale}',tnpeFemale = '{$tnpeFemale}',tnpepercentage = '{$tnpepercentage}',ttstaff = '{$ttstaff}',ttsMale = '{$ttsMale}',ttsFemale = '{$ttsFemale}',tnptspercentage = '{$tnptspercentage}',tntstaff = '{$tntstaff}',tntsMale = '{$tntsMale}',tntsFemale = '{$tntsFemale}',tnpntspercentage = '{$tnpntspercentage}'  WHERE `RID` = ".$update."";
                $updateChecker = mysqli_query($conn, $query);
                if ($updateChecker) {
                    header("Location:../up_delsdg8.php?message=Update Successful");
                } else {
                    die("Query failed. " . mysqli_error($conn));
                }
                }

                $outerquery = "SELECT * FROM `research8.5.1` WHERE `RID` = ".$update."";
                $select = mysqli_query($conn, $outerquery);
                if (mysqli_num_rows($select) > 0) {
                while ($row = mysqli_fetch_assoc($select)) {
                        $id = $row['rid'];

                  //         $ppa = $row[''];
                  //         $description = $row[''];
                  //         $cost = $row[''];
                  //         $fund = $row[''];

                        $permanent = $row['permanent'];
                        $pMale = $row['pMale'];
                        $pFemale = $row['pFemale'];

                        $temporary = $row['temporary'];
                        $tMale = $row['tMale'];
                        $tFemale = $row['tFemale'];

                        $casual = $row['casual'];
                        $cMale = $row['cMale'];
                        $cFemale = $row['cFemale'];

                        $joborder = $row['joborder'];
                        $joMale = $row['joMale'];
                        $joFemale = $row['joFemale'];

                        $service = $row['service'];
                        $sMale = $row['sMale'];
                        $sFemale = $row['sFemale'];

                        $tnpemployees = $row['tnpemployees'];
                        $tnpeMale = $row['tnpeMale'];
                        $tnpeFemale = $row['tnpeFemale'];

                        $tnpepercentage = $row['tnpepercentage'];

                        $ttstaff = $row['ttstaff'];
                        $ttsMale = $row['ttsMale'];
                        $ttsFemale = $row['ttsFemale'];

                        $tnptspercentage = $row['tnptspercentage'];

                        $tntstaff = $row['tntstaff'];
                        $tntsMale = $row['tntsMale'];
                        $tntsFemale = $row['tntsFemale'];

                        $tnpntspercentage = $row['tnpntspercentage'];
                ?>
                                <!-- html code here This div is for research 8.5.1-->
                                <div class="collapse w-100 h-auto p-3" id="research8" style="display: block ;">
                                        <h2 class="text-center pb-5">Research on health and wellbeing</h2>
                                        <form action="" method="post">
                                                <!-- <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Title</span>
                                        <input type="text" class="form-control" value="<?php //echo "ppa" ?>" name="851ppa"
                                                aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Author</span>
                                        <input type="text" class="form-control" value="<?php //echo "description" ?>" name="851description"
                                                aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Year Publication</span>
                                        <input type="text" class="form-control" value="<?php //echo "cost" ?>" name="851cost"
                                                aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"></span>
                                        <input type="text" class="form-control" value="<?php //echo "fund" ?>" name="851fund"
                                                aria-describedby="basic-addon1">
                                </div> -->

                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">permanent</span>
                                                        <input type="text" class="form-control" value="<?php echo "$permanent" ?>" name="851permanent"
                                                                aria-describedby="basic-addon1">
                                                                 <span class="input-group-text" id="basic-addon1">pMale</span>
                                                        <input type="text" class="form-control" value="<?php echo "$pMale" ?>" name="851pMale"
                                                                aria-describedby="basic-addon1">
                                                                 <span class="input-group-text" id="basic-addon1">pFemale</span>
                                                        <input type="text" class="form-control" value="<?php echo "$pFemale" ?>" name="851pFemale"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">temporary</span>
                                                        <input type="text" class="form-control" value="<?php echo "$temporary" ?>" name="851temporary"
                                                                aria-describedby="basic-addon1">
                                                                 <span class="input-group-text" id="basic-addon1">tMale</span>
                                                        <input type="text" class="form-control" value="<?php echo "$tMale" ?>" name="851tMale"
                                                                aria-describedby="basic-addon1">
                                                                 <span class="input-group-text" id="basic-addon1">tFemale</span>
                                                        <input type="text" class="form-control" value="<?php echo "$tFemale" ?>" name="851tFemale"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">casual</span>
                                                        <input type="text" class="form-control" value="<?php echo "$casual" ?>" name="851casual"
                                                                aria-describedby="basic-addon1">
                                                                 <span class="input-group-text" id="basic-addon1">cMale</span>
                                                        <input type="text" class="form-control" value="<?php echo "$cMale" ?>" name="851cMale"
                                                                aria-describedby="basic-addon1">
                                                                 <span class="input-group-text" id="basic-addon1">cFemale</span>
                                                        <input type="text" class="form-control" value="<?php echo "$cFemale" ?>" name="851cFemale"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">joborder</span>
                                                        <input type="text" class="form-control" value="<?php echo "$joborder" ?>" name="851joborder"
                                                                aria-describedby="basic-addon1">
                                                                 <span class="input-group-text" id="basic-addon1">joMale</span>
                                                        <input type="text" class="form-control" value="<?php echo "$joMale" ?>" name="851joMale"
                                                                aria-describedby="basic-addon1">
                                                                 <span class="input-group-text" id="basic-addon1">joFemale</span>
                                                        <input type="text" class="form-control" value="<?php echo "$joFemale" ?>" name="851joFemale"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">service</span>
                                                        <input type="text" class="form-control" value="<?php echo "$service" ?>" name="851service"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">sMale</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sMale" ?>" name="851sMale"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">sFemale</span>
                                                        <input type="text" class="form-control" value="<?php echo "$sFemale" ?>" name="851sFemale"
                                                                aria-describedby="basic-addon1">
                                                </div>

                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of non permananent employees with over 2 years experience</span>
                                                        <input type="text" class="form-control" value="<?php echo "$tnpemployees" ?>" name="851tnpemployees"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Male</span>
                                                        <input type="text" class="form-control" value="<?php echo "$tnpeMale" ?>" name="851tnpeMale"
                                                                aria-describedby="basic-addon1">
                                                                 <span class="input-group-text" id="basic-addon1">Female</span>
                                                        <input type="text" class="form-control" value="<?php echo "$tnpeFemale" ?>" name="851tnpeFemale"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Percentage of the toal non-permanent employee population over 2 years of servoice</span>
                                                        <input type="text" class="form-control" value="<?php echo "$tnpepercentage" ?>" name="851tnpepercentage"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of teaching staff woith over 2 years of service</span>
                                                        <input type="text" class="form-control" value="<?php echo "$ttstaff" ?>" name="851ttstaff"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Male</span>
                                                        <input type="text" class="form-control" value="<?php echo "$ttsMale" ?>" name="851ttsMale"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Female</span>
                                                        <input type="text" class="form-control" value="<?php echo "$ttsFemale" ?>" name="851ttsFemale"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">percentage of the total non-permanent teaching staff population over 2 years of service</span>
                                                        <input type="text" class="form-control" value="<?php echo "$tnptspercentage" ?>" name="851tnptspercentage"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total non-permanent no-n-teaching staff population has over 2 years of service</span>
                                                        <input type="text" class="form-control" value="<?php echo "$tntstaff" ?>" name="851tntstaff"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Male</span>
                                                        <input type="text" class="form-control" value="<?php echo "$tntsMale" ?>" name="851tntsMale"
                                                                aria-describedby="basic-addon1">
                                                                <span class="input-group-text" id="basic-addon1">Female</span>
                                                        <input type="text" class="form-control" value="<?php echo "$tntsFemale" ?>" name="851tntsFemale"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Percentage of the total non-permanent non-teaching staff population has over 2 yeats of service</span>
                                                        <input type="text" class="form-control" value="<?php echo "$tnpntspercentage" ?>" name="851tnpntspercentage"
                                                                aria-describedby="basic-addon1">
                                                </div>
                              
                                                 <div class="d-grid">
                                                        <button type="submit" class="btn btn-success mb-3" name="btnUpdate">Update Research</button>
                                                        <a href="../../../admin/sdg8/up_delsdg8.php" class="btn btn-danger">Cancel</a>
                                                </div>
                                        </form>
                                </div>
                        <?php
                }
}
        } elseif ($research == '861') {
                if(isset($_POST['btnUpdate'])){

                $ppa = $_POST['861ppa'];
                $description = $_POST['861description'];
                $tcost = $_POST['861tcost'];
                $fsource = $_POST['861fsource'];
                $evidence = $_POST['861evidence'];
                $pnreport = $_POST['861pnreport'];

                $query = "UPDATE `research8.6.1` SET ppa = '{$ppa}',description = '{$description}',tcost = '{$tcost}',fsource = '{$fsource}',evidence = '{$evidence}',pnreport = '{$pnreport}'  WHERE `RID` = ".$update."";
                $updateChecker = mysqli_query($conn, $query);
                if ($updateChecker) {
                    header("Location:../up_delsdg8.php?message=Update Successful");
                } else {
                    die("Query failed. " . mysqli_error($conn));
                }
                }

                $outerquery = "SELECT * FROM `research8.6.1` WHERE `RID` = ".$update."";
                $select = mysqli_query($conn, $outerquery);
                if (mysqli_num_rows($select) > 0) {
                while ($row = mysqli_fetch_assoc($select)) {
                        $id = $row['rid'];
                        $ppa = $row['ppa'];
                        $description = $row['description'];
                        $tcost = $row['tcost'];
                        $fsource = $row['fsource'];
                        $evidence = $row['evidence'];
                        $pnreport = $row['pnreport'];
                ?>
                                <!-- html code here This div is for research 8.6.1-->
                                <div class="collapse w-100 h-auto p-3" id="research8" style="display: block ;">
                                        <h2 class="text-center pb-5">Research on health and wellbeing</h2>
                                        <form action="" method="post">
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Title of the PPA</span>
                                                        <input type="text" class="form-control" value="<?php echo "$ppa" ?>" name="861ppa"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Description of the PPA</span>
                                                        <input type="text" class="form-control" value="<?php echo "$description" ?>" name="861description"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                                        <input type="text" class="form-control" value="<?php echo "$tcost" ?>" name="61tcost8"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                                        <input type="text" class="form-control" value="<?php echo "$fsource" ?>" name="861fsource"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Evidence</span>
                                                        <input type="text" class="form-control" value="<?php echo "$evidence" ?>" name="861evidence"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Reports</span>
                                                        <input type="text" class="form-control" value="<?php echo "$pnreport" ?>" name="861pnreport"
                                                                aria-describedby="basic-addon1">
                                                </div>
                              
                                                 <div class="d-grid">
                                                        <button type="submit" class="btn btn-success mb-3" name="btnUpdate">Update Research</button>
                                                        <a href="../../../admin/sdg8/up_delsdg8.php" class="btn btn-danger">Cancel</a>
                                                </div>
                                        </form>
                                </div>
                        <?php
                }
}
        }
}


?>