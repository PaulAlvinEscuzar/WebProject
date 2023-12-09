<?php include '../includes/header.php';
require('../includes/db.php');
?>
<script src = "sdg8compute.js" type = "text/javascript" defer></script>
<!-- 
alter table `research8.6.1` add column img varchar(255);
alter table `research8.3.2` add column img varchar(255);
alter table `research8.3.1` add column img varchar(255);
alter table `research8.2.9` add column img varchar(255);
alter table `research8.2.8` add column img varchar(255);
alter table `research8.2.7` add column img varchar(255);
alter table `research8.2.6` add column img varchar(255);
alter table `research8.2.5` add column img varchar(255);
alter table `research8.2.4` add column img varchar(255);
alter table `research8.2.3` add column img varchar(255);
 -->
<div class="container">
    <div class="row-mt-5">
        <div class="container-xl" style="height:400px; background-color:#a31c44;">
            <div class="row justify-content-center">
                <div class="co-md-5 text-center text-md-start text-light ps-5">
                    <h1>
                        <div class="display-5 mt-5 f2-bold text-gray" style="font-family:'Oswald', sans-serif;">Goal
                        </div>
                        <div class="display-5 f2-bold">8</div>
                        <div class="display-3 line-break fw-bold" style="margin-top:80px">Ensure health lives and
                            promote well
                            for all at all ages
                            being</div>
                    </h1>
                </div>
            </div> 
        </div>
        <div class="container-lg bg-secondary justify-content-center  fs-5 pt-2 pb-1">
            <ul class="nav nav-pills " id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active text-light fw-dark" style="letter-spacing :2px;" id="pills-profile-tab"
                        data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab"
                        aria-controls="pills-profile" aria-selected="false">Target</button>
                </li>
            </ul>
        </div>
        <div class="tab-content container-lg justify-content-center" id="pills-tabContent">
            <div class="tab-pane fade show active " id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
<div class="container d-grid" id="research811">

    <div class="d-inline-flex mt-3">
        <div class="border border-dark w-100">
            <div class=" d-inline-flex justify-content-start align-items-center">
                <img src="../img/sdg8.jpg" class="p-4 d-block" width="150" alt="">
                <div class="d-grid ms-5 me-5">
                    <p class="fw-normal">Target</p>
                    <h3 class="fw-bold">8.1.1</h3>
                    <!--Name of in every research-->
                    <h4 class="fw-bolder">Research on economic growth and employment</h4>
                    <p></p>
                </div>
            </div>
            
            <div class="dropdown">

                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                </button>

                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                    <!-- Eto para madisplay yung data sa sdg content-->

                    <?php
                    $sql = "SELECT * FROM `research8.1.1`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                            while ($row = mysqli_fetch_assoc($select)) {
                                    $id = $row['rid'];

                                    $title = $row['title'];
                                    $author = $row['author'];
                                    $year = $row['year'];
                                    $citation = $row['citation'];

                                    ?>
                                    

                                                    <div class="container d-grid mt-3">
                                                        <div class="border border-dark p-3">

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
                                                        </div>
                                                    </div>

                                                    <?php
                            }
                    }
                    ?>

                </ul>
            </div>
        </div>
    </div>
</div>
<img src="" id = "imgevidence" class = "w-50 h-100 d-none" style = "transform:translate(-50%,-50%);left:50%;top:50%;z-index:5;position:fixed" alt="" onclick="imgHide();">

<div class="container d-grid" id="research821">

<div class="d-inline-flex mt-3">
    <div class="border border-dark w-100">
        <div class=" d-inline-flex justify-content-start align-items-center">
            <img src="../img/sdg8.jpg" class="p-4 d-block" width="150" alt="">
            <div class="d-grid ms-5 me-5">
                <p class="fw-normal">Target</p>
                <h3 class="fw-bold">8.2.1</h3>
                <!--Name of in every research-->
                <h4 class="fw-bolder">Employment Practice living wage</h4>
                <p></p>
            </div>
        </div>
        
        <div class="dropdown">

            <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            </button>
            
            <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                <!-- Eto para madisplay yung data sa sdg content-->

                <?php
                $sql = "SELECT * FROM `research8.2.1`";
                $select = mysqli_query($conn, $sql);

                if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                                $id = $row['rid'];

                                $ppa = $row['ppa'];
                                $description = $row['description'];
                                $cost = $row['cost'];
                                $fund = $row['fund'];

                                ?>

                                                <div class="container d-grid mt-3">
                                                    <div class="border border-dark p-3">

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
                                                    </div>
                                                </div>

                                                <?php
                        }
                }
                ?>

            </ul>
        </div>
    </div>
</div>
</div>

<div class="container d-grid" id="research822">

<div class="d-inline-flex mt-3">
    <div class="border border-dark w-100">
        <div class=" d-inline-flex justify-content-start align-items-center">
            <img src="../img/sdg8.jpg" class="p-4 d-block" width="150" alt="">
            <div class="d-grid ms-5 me-5">
                <p class="fw-normal">Target</p>
                <h3 class="fw-bold">8.2.2</h3>
                <!--Name of in every research-->
                <h4 class="fw-bolder">Employee benefits</h4>
                <p></p>
            </div>
        </div>
        
        <div class="dropdown">

            <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            </button>
            
            <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                <!-- Eto para madisplay yung data sa sdg content-->
                <?php
                $sql = "SELECT * FROM `research8.2.2`";
                $select = mysqli_query($conn, $sql);

                if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                                $id = $row['rid'];

                                // //        $ppa = $row[''];
                                // //        $description = $row[''];
                                // //        $cost = $row[''];
                                // //        $fund = $row[''];
                
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
                                

                                                <div class="container d-grid mt-3">
                                                    <div class="border border-dark p-3">

                                                    <!-- <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"></span>
                        <input type="text" class="form-control" value=""
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"></span>
                        <input type="text" class="form-control" value=""
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"></span>
                        <input type="text" class="form-control" value=""
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Number of Citations</span>
                        <input type="text" class="form-control" value=""
                            aria-label="Username" aria-describedby="basic-addon1">
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

                                                    </div>
                                                </div>

                                                <?php
                        }
                }
                ?>

            </ul>
        </div>
    </div>
</div>
</div>

<div class="container d-grid" id="research823">

<div class="d-inline-flex mt-3">
    <div class="border border-dark w-100">
        <div class=" d-inline-flex justify-content-start align-items-center">
            <img src="../img/sdg8.jpg" class="p-4 d-block" width="150" alt="">
            <div class="d-grid ms-5 me-5">
                <p class="fw-normal">Target</p>
                <h3 class="fw-bold">8.2.3</h3>
                <!--Name of in every research-->
                <h4 class="fw-bolder">Employment practice union</h4>
                <p></p>
            </div>
        </div>
        
        <div class="dropdown">

            <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            </button>
            
            <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                <!-- Eto para madisplay yung data sa sdg content-->

                <?php
                $sql = "SELECT * FROM `research8.2.3`";
                $select = mysqli_query($conn, $sql);

                if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                                $id = $row['rid'];

                                //      $ppa = $row[''];
                                //      $description = $row[''];
                                //      $cost = $row[''];
                                //      $fund = $row[''];
                
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
                                $evidenceimg = $row['img'];


                                ?>
                                

                                                <div class="container d-grid mt-3">
                                                    <div class="border border-dark p-3">
                                                    <button type = "button" class = "btn btn-success w-25 float-end my-3" onclick = "viewimg823('<?php echo $evidenceimg ?>')">View Image Evidence</button><br>

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

                                                    </div>
                                                </div>

                                                <?php
                        }
                }
                ?>

            </ul>
        </div>
    </div>
</div>
</div>

<div class="container d-grid" id="research824">

<div class="d-inline-flex mt-3">
    <div class="border border-dark w-100">
        <div class=" d-inline-flex justify-content-start align-items-center">
            <img src="../img/sdg8.jpg" class="p-4 d-block" width="150" alt="">
            <div class="d-grid ms-5 me-5">
                <p class="fw-normal">Target</p>
                <h3 class="fw-bold">8.2.4</h3>
                <!--Name of in every research-->
                <h4 class="fw-bolder">Employment policy on discrimination</h4>
                <p></p>
            </div>
        </div>
        
        <div class="dropdown">

            <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            </button>
            
            <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                <!-- Eto para madisplay yung data sa sdg content-->

                <?php
                $sql = "SELECT * FROM `research8.2.4`";
                $select = mysqli_query($conn, $sql);

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
                                $evidenceimg = $row['img'];

                                ?>
                                

                                                <div class="container d-grid mt-3">
                                                    <div class="border border-dark p-3">
                                                    <button type = "button" class = "btn btn-success w-25 float-end my-3" onclick = "viewimg824('<?php echo $evidenceimg ?>')">View Image Evidence</button><br>

                                                    <div class="input-group mb-3">
                                                                        <span class="input-group-text" id="basic-addon1">Total Policie on discrimination</span>
                                                                        <input type="text" class="form-control" value="<?php echo "$tpolicy" ?>" name="824tpolicy"
                                                                                aria-describedby="basic-addon1">
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                        <span class="input-group-text" id="basic-addon1">Total PPAs</span>
                                                                        <input type="text" class="form-control" value="<?php echo "$tppa" ?>" name="824tppa"
                                                                                aria-describedby="basic-addon1">
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                        <span class="input-group-text" id="basic-addon1">Title of PPA</span>
                                                                        <input type="text" class="form-control" value="<?php echo "$ppa" ?>" name="824ppa"
                                                                                aria-describedby="basic-addon1">
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                        <span class="input-group-text" id="basic-addon1">Descrioption of the PPA</span>
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
                                                    </div>
                                                </div>

                                                <?php
                        }
                }
                ?>

            </ul>
        </div>
    </div>
</div>
</div>

<div class="container d-grid" id="research825">

<div class="d-inline-flex mt-3">
    <div class="border border-dark w-100">
        <div class=" d-inline-flex justify-content-start align-items-center">
            <img src="../img/sdg8.jpg" class="p-4 d-block" width="150" alt="">
            <div class="d-grid ms-5 me-5">
                <p class="fw-normal">Target</p>
                <h3 class="fw-bold">8.2.5</h3>
                <!--Name of in every research-->
                <h4 class="fw-bolder">Employment policy modern slavery</h4>
                <p></p>
            </div>
        </div>
        
        <div class="dropdown">

            <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            </button>
            
            <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                <!-- Eto para madisplay yung data sa sdg content-->

                <?php
                $sql = "SELECT * FROM `research8.2.5`";
                $select = mysqli_query($conn, $sql);

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
                                $evidenceimg = $row['img'];

                                ?>
                                

                                                <div class="container d-grid mt-3">
                                                    <div class="border border-dark p-3">
                                                    <button type = "button" class = "btn btn-success w-25 float-end my-3" onclick = "viewimg825('<?php echo $evidenceimg ?>')">View Image Evidence</button><br>

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
                                                                        <span class="input-group-text" id="basic-addon1"></span>
                                                                        <input type="text" class="form-control" value="<?php echo "$evidence" ?>" name="825evidence"
                                                                                aria-describedby="basic-addon1">
                                                                </div>
                                                    </div>
                                                </div>

                                                <?php
                        }
                }
                ?>

            </ul>
        </div>
    </div>
</div>
</div>

<div class="container d-grid" id="research826">

<div class="d-inline-flex mt-3">
    <div class="border border-dark w-100">
        <div class=" d-inline-flex justify-content-start align-items-center">
            <img src="../img/sdg8.jpg" class="p-4 d-block" width="150" alt="">
            <div class="d-grid ms-5 me-5">
                <p class="fw-normal">Target</p>
                <h3 class="fw-bold">8.2.6</h3>
                <!--Name of in every research-->
                <h4 class="fw-bolder">Employment practive equivalent rights outsourcing</h4>
                <p></p>
            </div>
        </div>
        
        <div class="dropdown">

            <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            </button>
            
            <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                <!-- Eto para madisplay yung data sa sdg content-->

                <?php
                $sql = "SELECT * FROM `research8.2.6`";
                $select = mysqli_query($conn, $sql);

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
                                $evidenceimg = $row['img'];

                                ?>
                                

                                                <div class="container d-grid mt-3">
                                                    <div class="border border-dark p-3">
                                                    <button type = "button" class = "btn btn-success w-25 float-end my-3" onclick = "viewimg826('<?php echo $evidenceimg ?>')">View Image Evidence</button><br>

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
                              
                                                    </div>
                                                </div>

                                                <?php
                        }
                }
                ?>

            </ul>
        </div>
    </div>
</div>
</div>

<div class="container d-grid" id="research827">

<div class="d-inline-flex mt-3">
    <div class="border border-dark w-100">
        <div class=" d-inline-flex justify-content-start align-items-center">
            <img src="../img/sdg8.jpg" class="p-4 d-block" width="150" alt="">
            <div class="d-grid ms-5 me-5">
                <p class="fw-normal">Target</p>
                <h3 class="fw-bold">8.2.7</h3>
                <!--Name of in every research-->
                <h4 class="fw-bolder">Employment policy pay scale equity</h4>
                <p></p>
            </div>
        </div>
        
        <div class="dropdown">

            <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            </button>
            
            <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                <!-- Eto para madisplay yung data sa sdg content-->

                <?php
                $sql = "SELECT * FROM `research8.2.7`";
                $select = mysqli_query($conn, $sql);

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
                                $evidenceimg = $row['img'];

                                ?>
                                

                                                <div class="container d-grid mt-3">
                                                    <div class="border border-dark p-3">
                                                    <button type = "button" class = "btn btn-success w-25 float-end my-3" onclick = "viewimg827('<?php echo $evidenceimg ?>')">View Image Evidence</button><br>

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
                              
                                                    </div>
                                                </div>

                                                <?php
                        }
                }
                ?>

            </ul>
        </div>
    </div>
</div>
</div>

<div class="container d-grid" id="research828">

<div class="d-inline-flex mt-3">
    <div class="border border-dark w-100">
        <div class=" d-inline-flex justify-content-start align-items-center">
            <img src="../img/sdg8.jpg" class="p-4 d-block" width="150" alt="">
            <div class="d-grid ms-5 me-5">
                <p class="fw-normal">Target</p>
                <h3 class="fw-bold">8.2.8</h3>
                <!--Name of in every research-->
                <h4 class="fw-bolder">Tracking pay scale for gender equity</h4>
                <p></p>
            </div>
        </div>
        
        <div class="dropdown">

            <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            </button>
            
            <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                <!-- Eto para madisplay yung data sa sdg content-->

                <?php
                $sql = "SELECT * FROM `research8.2.8`";
                $select = mysqli_query($conn, $sql);

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
                                $evidenceimg = $row['img'];

                                ?>
                                

                                                <div class="container d-grid mt-3">
                                                    <div class="border border-dark p-3">
                                                    <button type = "button" class = "btn btn-success w-25 float-end my-3" onclick = "viewimg828('<?php echo $evidenceimg ?>')">View Image Evidence</button><br>

                                                    <!-- <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"></span>
                        <input type="text" class="form-control" value=""
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"></span>
                        <input type="text" class="form-control" value=""
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"></span>
                        <input type="text" class="form-control" value=""
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Number of Citations</span>
                        <input type="text" class="form-control" value=""
                            aria-label="Username" aria-describedby="basic-addon1">
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
                                                                        <input type="text" class="form-control" value="<?php echo "$sgMale2" ?>" name="828sgMale2"
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
                                                    </div>
                                                </div>

                                                <?php
                        }
                }
                ?>

            </ul>
        </div>
    </div>
</div>
</div>

<div class="container d-grid" id="research829">

<div class="d-inline-flex mt-3">
    <div class="border border-dark w-100">
        <div class=" d-inline-flex justify-content-start align-items-center">
            <img src="../img/sdg8.jpg" class="p-4 d-block" width="150" alt="">
            <div class="d-grid ms-5 me-5">
                <p class="fw-normal">Target</p>
                <h3 class="fw-bold">8.2.9</h3>
                <!--Name of in every research-->
                <h4 class="fw-bolder">Employment practice appeal process</h4>
                <p></p>
            </div>
        </div>
        
        <div class="dropdown">

            <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            </button>
            
            <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                <!-- Eto para madisplay yung data sa sdg content-->

                <?php
                $sql = "SELECT * FROM `research8.2.9`";
                $select = mysqli_query($conn, $sql);

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
                                $evidenceimg = $row['img'];

                                ?>
                                

                                                <div class="container d-grid mt-3">
                                                    <div class="border border-dark p-3">
                                                    <button type = "button" class = "btn btn-success w-25 float-end my-3" onclick = "viewimg829('<?php echo $evidenceimg ?>')">View Image Evidence</button><br>

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
                              
                                                    </div>
                                                </div>

                                                <?php
                        }
                }
                ?>

            </ul>
        </div>
    </div>
</div>
</div>

<div class="container d-grid" id="research831">

<div class="d-inline-flex mt-3">
    <div class="border border-dark w-100">
        <div class=" d-inline-flex justify-content-start align-items-center">
            <img src="../img/sdg8.jpg" class="p-4 d-block" width="150" alt="">
            <div class="d-grid ms-5 me-5">
                <p class="fw-normal">Target</p>
                <h3 class="fw-bold">8.3.1</h3>
                <!--Name of in every research-->
                <h4 class="fw-bolder">Employee population</h4>
                <p></p>
            </div>
        </div>
        
        <div class="dropdown">

            <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            </button>
            
            <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                <!-- Eto para madisplay yung data sa sdg content-->

                <?php
                $sql = "SELECT * FROM `research8.3.1`";
                $select = mysqli_query($conn, $sql);

                if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                                $id = $row['rid'];

                                //        $ppa = $row[''];
                                //       $description = $row[''];
                                //       $cost = $row[''];
                                //       $fund = $row[''];
                
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
                                $evidenceimg = $row['img'];

                                ?>
                                

                                                <div class="container d-grid mt-3">
                                                    <div class="border border-dark p-3">
                                                    <button type = "button" class = "btn btn-success w-25 float-end my-3" onclick = "viewimg831('<?php echo $evidenceimg ?>')">View Image Evidence</button><br>

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
                                                    </div>
                                                </div>

                                                <?php
                        }
                }
                ?>

            </ul>
        </div>
    </div>
</div>
</div>

<div class="container d-grid" id="research832">

<div class="d-inline-flex mt-3">
    <div class="border border-dark w-100">
        <div class=" d-inline-flex justify-content-start align-items-center">
            <img src="../img/sdg8.jpg" class="p-4 d-block" width="150" alt="">
            <div class="d-grid ms-5 me-5">
                <p class="fw-normal">Target</p>
                <h3 class="fw-bold">8.3.2</h3>
                <!--Name of in every research-->
                <h4 class="fw-bolder">Campus Expenditure</h4>
                <p></p>
            </div>
        </div>
        
        <div class="dropdown">

            <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            </button>
            
            <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                <!-- Eto para madisplay yung data sa sdg content-->

                <?php
                $sql = "SELECT * FROM `research8.3.2`";
                $select = mysqli_query($conn, $sql);

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
                                $evidence = $row['evidence'];
                                $evidenceimg = $row['img'];

                                ?>
                                

                                                <div class="container d-grid mt-3">
                                                    <div class="border border-dark p-3">
                                                    <button type = "button" class = "btn btn-success w-25 float-end my-3" onclick = "viewimg832('<?php echo $evidenceimg ?>')">View Image Evidence</button><br>

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
                                   <div class="input-group mb-3">
                                                                        <span class="input-group-text" id="basic-addon1">Evidence</span>
                                                                        <input type="text" class="form-control" value="<?php echo "$evidence" ?>" name="832evidence"
                                                                                aria-describedby="basic-addon1">
                                                                </div>
                                                    </div>
                                                </div>

                                                <?php
                        }
                }
                ?>

            </ul>
        </div>
    </div>
</div>
</div>

<div class="container d-grid" id="research833">

<div class="d-inline-flex mt-3">
    <div class="border border-dark w-100">
        <div class=" d-inline-flex justify-content-start align-items-center">
            <img src="../img/sdg8.jpg" class="p-4 d-block" width="150" alt="">
            <div class="d-grid ms-5 me-5">
                <p class="fw-normal">Target</p>
                <h3 class="fw-bold">8.3.3</h3>
                <!--Name of in every research-->
                <h4 class="fw-bolder">Campus Expenditure per employee'</h4>
                <p></p>
            </div>
        </div>
        
        <div class="dropdown">

            <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            </button>
            
            <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                <!-- Eto para madisplay yung data sa sdg content-->

                <?php
                $sql = "SELECT * FROM `research8.3.3`";
                $select = mysqli_query($conn, $sql);

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
                                

                                                <div class="container d-grid mt-3">
                                                    <div class="border border-dark p-3">

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
                                                    </div>
                                                </div>

                                                <?php
                        }
                }
                ?>

            </ul>
        </div>
    </div>
</div>
</div>

<div class="container d-grid" id="research841">

<div class="d-inline-flex mt-3">
    <div class="border border-dark w-100">
        <div class=" d-inline-flex justify-content-start align-items-center">
            <img src="../img/sdg8.jpg" class="p-4 d-block" width="150" alt="">
            <div class="d-grid ms-5 me-5">
                <p class="fw-normal">Target</p>
                <h3 class="fw-bold">8.4.1</h3>
                <!--Name of in every research-->
                <h4 class="fw-bolder">Proportion of OJT students</h4>
                <p></p>
            </div>
        </div>
        
        <div class="dropdown">

            <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            </button>
            
            <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                <!-- Eto para madisplay yung data sa sdg content-->

                <?php
                $sql = "SELECT * FROM `research8.4.1`";
                $select = mysqli_query($conn, $sql);

                if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                                $id = $row['rid'];

                                //       $ppa = $row[''];
                                //        $description = $row[''];
                                //       $cost = $row[''];
                                //         $fund = $row[''];
                
                                $tinside = $row['tinside'];
                                $tiMale = $row['tiMale'];
                                $tiFemale = $row['tiFemale'];

                                $toutside = $row['toutside'];
                                $toMale = $row['toMale'];
                                $oFemale = $row['toFemale'];

                                $tboth = $row['tboth'];
                                $tbMale = $row['tbMale'];
                                $tbFemale = $row['tbFemale'];

                                $percentage = $row['percentage'];

                                ?>
                                

                                                <div class="container d-grid mt-3">
                                                    <div class="border border-dark p-3">

                                                    <div class="input-group mb-3">
                                                                        <span class="input-group-text" id="basic-addon1">Total number of OJTS inside the campus</span>
                                                                        <input type="text" class="form-control" value="<?php echo "$tinside" ?>" name="841tinside"
                                                                                aria-describedby="basic-addon1">
                                                                                <span class="input-group-text" id="basic-addon1">Male</span>
                                                                        <input type="text" class="form-control" value="<?php echo "$tiMale" ?>" name="841tiMale"
                                                                                aria-describedby="basic-addon1">
                                                                                <span class="input-group-text" id="basic-addon1">Female</span>
                                                                        <input type="text" class="form-control" value="<?php echo "$tiFemale" ?>" name="841$tiFemale"
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
                                                                        <input type="text" class="form-control" value="<?php echo "$toFemale" ?>" name="841$oFemale"
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
                              
                                                    </div>
                                                </div>

                                                <?php
                        }
                }
                ?>

            </ul>
        </div>
    </div>
</div>
</div>

<div class="container d-grid" id="research851">

<div class="d-inline-flex mt-3">
    <div class="border border-dark w-100">
        <div class=" d-inline-flex justify-content-start align-items-center">
            <img src="../img/sdg8.jpg" class="p-4 d-block" width="150" alt="">
            <div class="d-grid ms-5 me-5">
                <p class="fw-normal">Target</p>
                <h3 class="fw-bold">8.5.1</h3>
                <!--Name of in every research-->
                <h4 class="fw-bolder">Proportion of employees with secure contracts</h4>
                <p></p>
            </div>
        </div>
        
        <div class="dropdown">

            <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            </button>
            
            <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                <!-- Eto para madisplay yung data sa sdg content-->

                <?php
                $sql = "SELECT * FROM `research8.5.1`";
                $select = mysqli_query($conn, $sql);

                if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                                $id = $row['rid'];

                                //        $ppa = $row[''];
                                //        $description = $row[''];
                                //        $cost = $row[''];
                                //        $fund = $row[''];
                
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
                                $sMale = $row['sMaleint'];
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
                                $evidence = $row['evidence'];
                                ?>
                                

                                                <div class="container d-grid mt-3">
                                                    <div class="border border-dark p-3">

                                                    <div class="input-group mb-3">
                                                                        <span class="input-group-text" id="basic-addon1">permanent</span>
                                                                        <input type="text" class="form-control" value="<?php echo "$permanent" ?>" name="851permanent"
                                                                                aria-describedby="basic-addon1">
                                                                                 <span class="input-group-text" id="basic-addon1"pMale>pMale</span>
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
                    
                                                    </div>
                                                </div>

                                                <?php
                        }
                }
                ?>

            </ul>
        </div>
    </div>
</div>
</div>

<div class="container d-grid" id="research861">

<div class="d-inline-flex mt-3">
    <div class="border border-dark w-100">
        <div class=" d-inline-flex justify-content-start align-items-center">
            <img src="../img/sdg8.jpg" class="p-4 d-block" width="150" alt="">
            <div class="d-grid ms-5 me-5">
                <p class="fw-normal">Target</p>
                <h3 class="fw-bold">8.6.1</h3>
                <!--Name of in every research-->
                <h4 class="fw-bolder">Community employment</h4>
                <p></p>
            </div>
        </div>
        
        <div class="dropdown">

            <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            </button>
            
            <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                <!-- Eto para madisplay yung data sa sdg content-->

                <?php
                $sql = "SELECT * FROM `research8.6.1`";
                $select = mysqli_query($conn, $sql);

                if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                                $id = $row['rid'];
                                $ppa = $row['ppa'];
                                $description = $row['description'];
                                $tcost = $row['tcost'];
                                $fsource = $row['fsource'];
                                $evidence = $row['evidence'];
                                $pnreport = $row['pnreport'];
                                $evidenceimg = $row['img'];

                                ?>
                                

                                                <div class="container d-grid mt-3">
                                                    <div class="border border-dark p-3">
                                                        <button type = "button" class = "btn btn-success w-25 float-end my-3" onclick = "viewimg861('<?php echo $evidenceimg ?>')">View Image Evidence</button><br>
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
                                                                        <input type="text" class="form-control" value="<?php echo "$tcost" ?>" name="861tcost"
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
                              
                                                    </div>
                                                </div>

                                                <?php
                        }
                }
                ?>

            </ul>
        </div>
    </div>
</div>
</div>

            </div>
        </div>
    </div>
</div>
</div>
</div>