<?php include '../includes/header.php';
include '../includes/db.php'; ?>
<div class="container">
    <div class="row-mt-5">
        <div class="container-xl" style="height:400px; background-color:#C5192E;">
            <div class="row justify-content-center">
                <div class="co-md-5 text-center text-md-start text-light ps-5">
                    <h1>
                        <div class="display-5 mt-5 f2-bold text-gray" style="font-family:'Oswald', sans-serif;">Goal
                        </div>
                        <div class="display-5 f2-bold">4</div>
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
                <li class="nav-item" rolejp="presentation">
                    <button class="nav-link active text-light fw-dark" style="letter-spacing :2px;" id="pills-profile-tab"
                        data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab"
                        aria-controls="pills-profile" aria-selected="false">Target</button>
                </li>
            </ul>
        </div>
        <div class="tab-content container-lg justify-content-center" id="pills-tabContent">
            <div class="tab-pane fade show active " id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="container d-grid" id="research311">

                    <!--Start of the sdg content-->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <!--Image Src iibahin-->
                                <img src="../img/sdg4.jpg" class="p-4 d-block" width="150" alt="">

                                <div class="d-grid ms-5 me-5">

                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">4.1.1</h3>
                                    <!--Name of in every research-->
                                    <h4 class="fw-bolder">Research on early years and lifelong learning education</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">

                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score_411">Score:</h3>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research4.1.1`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_411 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Research on early years and lifelong learning education:
                                        <?php echo $totalRecord_411 ?></h3>
                                    <?php
                                    $json_data_res411 = json_encode($totalRecord_411);
                                    $query411 = "SELECT * FROM `research4.1.1`";
                                    $select411 = mysqli_query($conn, $query411);

                                    if (mysqli_num_rows($select411) > 0) {
                                        while ($row = mysqli_fetch_assoc($select411)) {
                                            $tno_yale = $row['tno_yale'];
                                            $titleores = $row['titleores'];
                                            $author = $row['author'];
                                            $YearoPub = $row['YearoPub'];
                                            $Totnumocit = $row['Totnumocit'];
                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of research on early years and lifelong education</span>
                                            <input type="text" class="form-control" value="<?php echo "$tno_yale"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Title of research</span>
                                            <input type="text" class="form-control" value="<?php echo "$titleores"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Author</span>
                                            <input type="text" class="form-control" value="<?php echo "$author"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Year of publication:</span>
                                            <input type="text" class="form-control" value="<?php echo "$YearoPub"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of citations:</span>
                                            <input type="text" class="form-control" value="<?php echo "$Totnumocit"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
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

                    <!--Start of the sdg content-->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <!--Image Src iibahin-->
                                <img src="../img/sdg4.jpg" class="p-4 d-block" width="150" alt="">

                                <div class="d-grid ms-5 me-5">

                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">4.2.1</h3>
                                    <!--Name of in every research-->
                                    <h4 class="fw-bolder">Proportion of graduates with relevant qualifications in each respective field</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">

                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score_421">Score:</h3>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research4.2.1`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_421 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Proportion of graduates with relevant qualifications in each respective field:
                                        <?php echo $totalRecord_421 ?></h3>
                                    <?php
                                    $json_data_res421 = json_encode($totalRecord_421);
                                    $query421 = "SELECT * FROM `research4.2.1`";
                                    $select421 = mysqli_query($conn, $query421);

                                    if (mysqli_num_rows($select421) > 0) {
                                        while ($row = mysqli_fetch_assoc($select421)) {
                                            $tno_efle = $row['tno_efle'];
                                            $bsie_male= $row['bsie_male'];
                                            $bsie_female= $row['bsie_female'];
                                            $bsp_male= $row['bsp_male'];
                                            $bsp_female= $row['bsp_female'];
                                            $bsme_male= $row['bsme_male'];
                                            $bsme_female= $row['bsme_female'];
                                            $tno_ttle= $row['tno_ttle'];
                                            $bsie_male1= $row['bsie_male1'];
                                            $bsie_female1= $row['bsie_female1'];
                                            $bsp_male1= $row['bsp_male1'];
                                            $bsp_female1= $row['bsp_female1'];
                                            $bsme_male1= $row['bsme_male1'];
                                            $bsme_female1= $row['bsme_female1'];
                                            $tno_gwal= $row['tno_gwal'];
                                            $bsie_male2= $row['bsie_male2'];
                                            $bsie_female2= $row['bsie_female2'];
                                            $bsp_male2= $row['bsp_male2'];
                                            $bsp_female2= $row['bsp_female2'];
                                            $bsme_male2= $row['bsme_male2'];
                                            $bsme_female2= $row['bsme_female2'];
                                            $no_gwftptle= $row['no_gwftptle'];
                                            $Tno_gele= $row['Tno_gele'];
                                            $Ptno_elettle= $row['Ptno_elettle'];
                                            $Pglesatl= $row['Pglesatl'];
                                            $Pglehftp= $row['Pglehftp'];
                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of graduates who are eligible for licensure examination:</span>
                                            <input type="text" class="form-control" value="<?php echo "$tno_efle"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Bachelor of Science Industrial Engineering</span>
                                            <span class="input-group-text" id="basic-addon1">Male</span>
                                            <input type="text" class="form-control" value="<?php echo "$bsie_male"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                                <span class="input-group-text" id="basic-addon1">Female</span>
                                            <input type="text" class="form-control" value="<?php echo "$bsie_female"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Bachelor of Science in Psychology</span>
                                            <span class="input-group-text" id="basic-addon1">Male</span>
                                            <input type="text" class="form-control" value="<?php echo "$bsp_male"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                                <span class="input-group-text" id="basic-addon1">Female</span>
                                            <input type="text" class="form-control" value="<?php echo "$bsp_female"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Bachelor of Science in Management Accounting</span>
                                            <span class="input-group-text" id="basic-addon1">Male</span>
                                            <input type="text" class="form-control" value="<?php echo "$bsme_male"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                                <span class="input-group-text" id="basic-addon1">Female</span>
                                            <input type="text" class="form-control" value="<?php echo "$bsme_female"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of graduates who take the licensure examination:</span>
                                            <input type="text" class="form-control" value="<?php echo "$tno_ttle"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Bachelor of Science Industrial Engineering</span>
                                            <span class="input-group-text" id="basic-addon1">Male</span>
                                            <input type="text" class="form-control" value="<?php echo "$bsie_male1"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                                <span class="input-group-text" id="basic-addon1">Female</span>
                                            <input type="text" class="form-control" value="<?php echo "$bsie_female1"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Bachelor of Science in Psychology</span>
                                            <span class="input-group-text" id="basic-addon1">Male</span>
                                            <input type="text" class="form-control" value="<?php echo "$bsp_male1"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                                <span class="input-group-text" id="basic-addon1">Female</span>
                                            <input type="text" class="form-control" value="<?php echo "$bsp_female1"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Bachelor of Science in Management Accounting</span>
                                            <span class="input-group-text" id="basic-addon1">Male</span>
                                            <input type="text" class="form-control" value="<?php echo "$bsme_male1"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                                <span class="input-group-text" id="basic-addon1">Female</span>
                                            <input type="text" class="form-control" value="<?php echo "$bsme_female1"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of graduates who acquired license:</span>
                                            <input type="text" class="form-control" value="<?php echo "$tno_gwal"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Bachelor of Science Industrial Engineering</span>
                                            <span class="input-group-text" id="basic-addon1">Male</span>
                                            <input type="text" class="form-control" value="<?php echo "$bsie_male2"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                                <span class="input-group-text" id="basic-addon1">Female</span>
                                            <input type="text" class="form-control" value="<?php echo "$bsie_female2"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Bachelor of Science in Psychology</span>
                                            <span class="input-group-text" id="basic-addon1">Male</span>
                                            <input type="text" class="form-control" value="<?php echo "$bsp_male2"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                                <span class="input-group-text" id="basic-addon1">Female</span>
                                            <input type="text" class="form-control" value="<?php echo "$bsp_female2"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Bachelor of Science in Management Accounting</span>
                                            <span class="input-group-text" id="basic-addon1">Male</span>
                                            <input type="text" class="form-control" value="<?php echo "$bsme_male2"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                                <span class="input-group-text" id="basic-addon1">Female</span>
                                            <input type="text" class="form-control" value="<?php echo "$bsme_female2"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of graduates who failed to pass the licensure examination:</span>
                                            <input type="text" class="form-control" value="<?php echo "$no_gwftptle"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Percent of the total number of graduates are eligible for licensure examination.</span>
                                            <input type="text" class="form-control" value="<?php echo "$Tno_gele"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Percent of the total number of graduates who are eligible for licensure examination took the licensure examination.</span>
                                            <input type="text" class="form-control" value="<?php echo "$Ptno_elettle"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Percent of the graduates who took the licensure examination have successfully acquired their license.</span>
                                            <input type="text" class="form-control" value="<?php echo "$Pglesatl"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">of graduates who took the licensure examination have failed to pass.</span>
                                            <input type="text" class="form-control" value="<?php echo "$Pglehftp"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
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
                    
                    <!--Start of the sdg content-->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <!--Image Src iibahin-->
                                <img src="../img/sdg4.jpg" class="p-4 d-block" width="150" alt="">

                                <div class="d-grid ms-5 me-5">

                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">4.2.2</h3>
                                    <!--Name of in every research-->
                                    <h4 class="fw-bolder">Proportion of graduates with teaching qualifications to teach at primary level</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">

                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score_422">Score:</h3>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research4.2.2`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_422 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Proportion of graduates with teaching qualifications to teach at primary level:
                                        <?php echo $totalRecord_422 ?></h3>
                                    <?php
                                    $json_data_res422 = json_encode($totalRecord_422);
                                    $query422 = "SELECT * FROM `research4.2.2`";
                                    $select422 = mysqli_query($conn, $query422);

                                    if (mysqli_num_rows($select422) > 0) {
                                        while ($row = mysqli_fetch_assoc($select422)) {
                                            $no_letpassers = $row['no_letpassers'];
                                            $no_bsedletpassers = $row['no_bsedletpassers'];
                                            $no_beedletpassers = $row['no_beedletpassers'];
                                            $no_bpedletpassers = $row['no_bpedletpassers'];
                                            $no_btledletpassers = $row['no_btledletpassers'];
                                            $percentg_lhtqttapl = $row['percentg_lhtqttapl'];
                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of LET passers:</span>
                                            <input type="text" class="form-control" value="<?php echo "$no_letpassers"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of BSED LET passers:</span>
                                            <input type="text" class="form-control" value="<?php echo "$no_bsedletpassers"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of BEED LET passers:</span>
                                            <input type="text" class="form-control" value="<?php echo "$no_beedletpassers"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of BPED LET passers:</span>
                                            <input type="text" class="form-control" value="<?php echo "$no_bpedletpassers"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of BTLED LET passers:</span>
                                            <input type="text" class="form-control" value="<?php echo "$no_btledletpassers"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Percent of graduates who acquired a license have teaching qualifications to teach at primary level.</span>
                                            <input type="text" class="form-control" value="<?php echo "$percentg_lhtqttapl"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
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

                    <!--Start of the sdg content-->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <!--Image Src iibahin-->
                                <img src="../img/sdg4.jpg" class="p-4 d-block" width="150" alt="">

                                <div class="d-grid ms-5 me-5">

                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">4.3.1</h3>
                                    <!--Name of in every research-->
                                    <h4 class="fw-bolder">Public resources (lifelong learning)</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">

                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score_431">Score:</h3>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research4.3.1`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_431 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Public resources (lifelong learning):
                                        <?php echo $totalRecord_431 ?></h3>
                                    <?php
                                    $json_data_res431 = json_encode($totalRecord_431);
                                    $query431 = "SELECT * FROM `research4.3.1`";
                                    $select431 = mysqli_query($conn, $query431);

                                    if (mysqli_num_rows($select431) > 0) {
                                        while ($row = mysqli_fetch_assoc($select431)) {
                                            $no_freeapgp = $row['no_freeapgp'];
                                            $titleoppa = $row['titleoppa'];
                                            $shortdotppa = $row['shortdotppa'];
                                            $totalcost = $row['totalcost'];
                                            $fundsource = $row['fundsource'];
                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of free access provided to the general public:</span>
                                            <input type="text" class="form-control" value="<?php echo "$no_freeapgp"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Title of the PPA:</span>
                                            <input type="text" class="form-control" value="<?php echo "$titleoppa"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Short description of the PPA:</span>
                                            <input type="text" class="form-control" value="<?php echo "$shortdotppa"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total cost:</span>
                                            <input type="text" class="form-control" value="<?php echo "$totalcost"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Fund source:</span>
                                            <input type="text" class="form-control" value="<?php echo "$fundsource"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
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

                    <!--Start of the sdg content-->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <!--Image Src iibahin-->
                                <img src="../img/sdg4.jpg" class="p-4 d-block" width="150" alt="">

                                <div class="d-grid ms-5 me-5">

                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">4.3.2</h3>
                                    <!--Name of in every research-->
                                    <h4 class="fw-bolder">Public events (lifelong learning)</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">

                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score_432">Score:</h3>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research4.3.2`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_432 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Public events (lifelong learning):
                                        <?php echo $totalRecord_432 ?></h3>
                                    <?php
                                    $json_data_res432 = json_encode($totalRecord_432);
                                    $query432 = "SELECT * FROM `research4.3.2`";
                                    $select432 = mysqli_query($conn, $query432);

                                    if (mysqli_num_rows($select432) > 0) {
                                        while ($row = mysqli_fetch_assoc($select432)) {
                                            $no_univottgp = $row['no_univottgp'];
                                            $titleppa = $row['titleppa'];
                                            $shortdesppa = $row['shortdesppa'];
                                            $totalcost = $row['totalcost'];
                                            $fundsource = $row['fundsource'];
                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of educational events hosted at the university that are open to the general public:</span>
                                            <input type="text" class="form-control" value="<?php echo "$no_univottgp"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Title of the PPA:</span>
                                            <input type="text" class="form-control" value="<?php echo "$titleppa"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Short description of the PPA:</span>
                                            <input type="text" class="form-control" value="<?php echo "$shortdesppa"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total cost:</span>
                                            <input type="text" class="form-control" value="<?php echo "$totalcost"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Fund source:</span>
                                            <input type="text" class="form-control" value="<?php echo "$fundsource"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
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

                    <!--Start of the sdg content-->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <!--Image Src iibahin-->
                                <img src="../img/sdg4.jpg" class="p-4 d-block" width="150" alt="">

                                <div class="d-grid ms-5 me-5">

                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">4.3.3</h3>
                                    <!--Name of in every research-->
                                    <h4 class="fw-bolder">Vocational training events</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">

                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score_433">Score:</h3>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research4.3.3`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_433 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Vocational training events:
                                        <?php echo $totalRecord_433 ?></h3>
                                    <?php
                                    $json_data_res433 = json_encode($totalRecord_433);
                                    $query433 = "SELECT * FROM `research4.3.3`";
                                    $select433 = mysqli_query($conn, $query433);

                                    if (mysqli_num_rows($select433) > 0) {
                                        while ($row = mysqli_fetch_assoc($select433)) {
                                            $no_voctrai = $row['no_voctrai'];
                                            $titleppa = $row['titleppa'];
                                            $shortdesppa = $row['shortdesppa'];
                                            $totalcost = $row['totalcost'];
                                            $fundsource = $row['fundsource'];
                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of vocational training events hosted at the university that are open to the general public:</span>
                                            <input type="text" class="form-control" value="<?php echo "$no_voctrai"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Title of the PPA:</span>
                                            <input type="text" class="form-control" value="<?php echo "$titleppa"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Short description of the PPA:</span>
                                            <input type="text" class="form-control" value="<?php echo "$shortdesppa"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total cost:</span>
                                            <input type="text" class="form-control" value="<?php echo "$totalcost"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Fund source:</span>
                                            <input type="text" class="form-control" value="<?php echo "$fundsource"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
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

                    <!--Start of the sdg content-->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <!--Image Src iibahin-->
                                <img src="../img/sdg4.jpg" class="p-4 d-block" width="150" alt="">

                                <div class="d-grid ms-5 me-5">

                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">4.3.4</h3>
                                    <!--Name of in every research-->
                                    <h4 class="fw-bolder">Education outreach activities beyond campus (extension activities)</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">

                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score_434">Score:</h3>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research4.3.4`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_434 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Education outreach activities beyond campus (extension activities):
                                        <?php echo $totalRecord_434 ?></h3>
                                    <?php
                                    $json_data_res434 = json_encode($totalRecord_434);
                                    $query434 = "SELECT * FROM `research4.3.4`";
                                    $select434 = mysqli_query($conn, $query434);

                                    if (mysqli_num_rows($select434) > 0) {
                                        while ($row = mysqli_fetch_assoc($select434)) {
                                            $no_edoutact = $row['no_edoutact'];
                                            $titleppa = $row['titleppa'];
                                            $shortdesppa = $row['shortdesppa'];
                                            $totalcost = $row['totalcost'];
                                            $fundsource = $row['fundsource'];
                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of education outreach activities beyond campus:</span>
                                            <input type="text" class="form-control" value="<?php echo "$no_edoutact"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Title of the PPA:</span>
                                            <input type="text" class="form-control" value="<?php echo "$titleppa"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Short description of the PPA:</span>
                                            <input type="text" class="form-control" value="<?php echo "$shortdesppa"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total cost:</span>
                                            <input type="text" class="form-control" value="<?php echo "$totalcost"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Fund source:</span>
                                            <input type="text" class="form-control" value="<?php echo "$fundsource"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
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

                    <!--Start of the sdg content-->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <!--Image Src iibahin-->
                                <img src="../img/sdg4.jpg" class="p-4 d-block" width="150" alt="">

                                <div class="d-grid ms-5 me-5">

                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">4.3.5</h3>
                                    <!--Name of in every research-->
                                    <h4 class="fw-bolder">Lifelong learning access policy</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">

                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score_435">Score:</h3>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research4.3.5`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_435 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Lifelong learning access policy:
                                        <?php echo $totalRecord_435 ?></h3>
                                    <?php
                                    $json_data_res435 = json_encode($totalRecord_435);
                                    $query435 = "SELECT * FROM `research4.3.5`";
                                    $select435 = mysqli_query($conn, $query435);

                                    if (mysqli_num_rows($select435) > 0) {
                                        while ($row = mysqli_fetch_assoc($select435)) {
                                            $no_stud = $row['no_stud'];
                                            $percofstudpop = $row['percofstudpop'];
                                            $totnumlearnap = $row['totnumlearnap'];
                                            $totnumofppaimap = $row['totnumofppaimap'];
                                            $titleppa = $row['titleppa'];
                                            $shortdesppa = $row['shortdesppa'];
                                            $totalcost = $row['totalcost'];
                                            $fundsource = $row['fundsource'];
                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of students who are 50 years old and above:</span>
                                            <input type="text" class="form-control" value="<?php echo "$no_stud"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Percent of the student population aged 50 years old and above.</span>
                                            <input type="text" class="form-control" value="<?php echo "$percofstudpop"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of learning access policy:</span>
                                            <input type="text" class="form-control" value="<?php echo "$totnumlearnap"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of PPAs implemented in accordance to the policy:</span>
                                            <input type="text" class="form-control" value="<?php echo "$totnumofppaimap"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Title of the PPA:</span>
                                            <input type="text" class="form-control" value="<?php echo "$titleppa"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Short description of the PPA:</span>
                                            <input type="text" class="form-control" value="<?php echo "$shortdesppa"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total cost:</span>
                                            <input type="text" class="form-control" value="<?php echo "$totalcost"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Fund source:</span>
                                            <input type="text" class="form-control" value="<?php echo "$fundsource"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
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

                    <!--Start of the sdg content-->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <!--Image Src iibahin-->
                                <img src="../img/sdg4.jpg" class="p-4 d-block" width="150" alt="">

                                <div class="d-grid ms-5 me-5">

                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">4.4.1</h3>
                                    <!--Name of in every research-->
                                    <h4 class="fw-bolder">Proportion of first-generation students</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">

                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score_441">Score:</h3>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research4.4.1`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_441 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Proportion of first-generation students:
                                        <?php echo $totalRecord_441 ?></h3>
                                    <?php
                                    $json_data_res441 = json_encode($totalRecord_441);
                                    $query441 = "SELECT * FROM `research4.4.1`";
                                    $select441 = mysqli_query($conn, $query441);

                                    if (mysqli_num_rows($select441) > 0) {
                                        while ($row = mysqli_fetch_assoc($select441)) {
                                            $totnofgens = $row['totnofgens'];
                                            $totnumfys = $row['totnumfys'];
                                            $totnumfgsfyl = $row['totnumfgsfyl'];
                                            $pstudpfgs = $row['pstudpfgs'];
                                            $pfysfgs = $row['pfysfgs'];
                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of first-generation students:</span>
                                            <input type="text" class="form-control" value="<?php echo "$totnofgens"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of first year students:</span>
                                            <input type="text" class="form-control" value="<?php echo "$totnumfys"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of first-generation students in first year level:</span>
                                            <input type="text" class="form-control" value="<?php echo "$totnumfgsfyl"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Percent of the student population are first-generation students.</span>
                                            <input type="text" class="form-control" value="<?php echo "$pstudpfgs"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Percent of first year students are first-generation students.</span>
                                            <input type="text" class="form-control" value="<?php echo "$pfysfgs"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
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
<script>
    document.addEventListener('DOMContentLoaded', function () {
    var scorebox411 = document.getElementById("score_411");
    var x = <?php echo $json_data_res411 ?>;
    
    var scopusWeight = 25;
    var otherPeerReviewedWeight = 10;
    
    var xValue = x;
    var yScopus = 25; 
    var yOtherPeerReviewed = 10; 
    
    var scoreScopus = xValue * yScopus;
    var scoreOtherPeerReviewed = xValue * yOtherPeerReviewed;
    
    scoreScopus = Math.min(scoreScopus, scopusWeight);
    scoreOtherPeerReviewed = Math.min(scoreOtherPeerReviewed, otherPeerReviewedWeight);

    var totalScore = scoreScopus + scoreOtherPeerReviewed;

    scorebox411.textContent = 'Score: ' + totalScore.toFixed(2);
});

document.addEventListener('DOMContentLoaded', function () {
    var scorebox421 = document.getElementById("score_421");
    var x = <?php echo $json_data_res421 ?>;
    var totalPoints = 0;

    var weightCampusCTE = 20;
    var weightNationalPassing = 5;

    
    var xValue = x; 
    var yValue = y; 
    
    var points = (xValue / yValue) * 25; 

    var isCampusCTE = true; 

    if (isCampusCTE) {
        totalPoints += Math.min(weightCampusCTE, 20);
    } else {
        var passingRate = 0; 

        if (passingRate >= nationalPassingRate) {
            totalPoints += weightNationalPassing;
        } else {
            totalPoints += 0;
        }
    }

    scorebox421.textContent = 'Score: ' + totalPoints.toFixed(2);
});

document.addEventListener('DOMContentLoaded', function () {
    var scorebox431 = document.getElementById("score_431");
    var x = <?php echo $json_data_res431 ?>;
    var totalPoints = 0;

    
    var pointWeight = 5;

    var xValue = x; 
    
    var points = (xValue / 2) * pointWeight; 

    totalPoints += points;

    scorebox431.textContent = 'Score: ' + totalPoints.toFixed(2);
});

document.addEventListener('DOMContentLoaded', function () {
    var scorebox432 = document.getElementById("score_432");
    var x = <?php echo $json_data_res432 ?>;
    var totalPoints = 0;

    var weight = 5;

    var xValue = x; 

    var points = (xValue / 2) * weight; 

    totalPoints += Math.min(points, weight); 

    scorebox432.textContent = 'Score: ' + totalPoints.toFixed(2);
});

document.addEventListener('DOMContentLoaded', function () {
    var scorebox433 = document.getElementById("score_433");
    var x = <?php echo $json_data_res433 ?>;
    var totalPoints = 0;

    var weightVocationalTraining = 5;

    var xValue = x; 
    var points = xValue * weightVocationalTraining; 

    scorebox433.textContent = 'Score: ' + points.toFixed(2);
});

document.addEventListener('DOMContentLoaded', function () {
    var scorebox434 = document.getElementById("score_434");
    var x = <?php echo $json_data_res434 ?>;
    var totalPoints = 0;

    var weightOutreach = 5;

    var xValue = x; 
    
    var points = (xValue / 2) * weightOutreach;

    totalPoints += Math.min(points, weightOutreach);

    scorebox434.textContent = 'Score: ' + totalPoints.toFixed(2);
});

document.addEventListener('DOMContentLoaded', function () {
    var scorebox435 = document.getElementById("score_435");
    var x = <?php echo $json_data_res435 ?>;
    var y = <?php echo $json_data_res435 ?>;
    var totalPoints = 0;

    var weightOnePolicy = 1;
    var weightTwoPPAs = 4;

    var pointsPolicies = x * weightOnePolicy; 
    var pointsPPAs = (y / 2) * weightTwoPPAs; 

    totalPoints += pointsPolicies + pointsPPAs;

    scorebox435.textContent = 'Score: ' + totalPoints.toFixed(2);
});

document.addEventListener('DOMContentLoaded', function () {
    var scorebox441 = document.getElementById("score_441");
    var x = <?php echo $json_data_res441 ?>;
    var totalPoints = 0;

    var xValue = x; 
    
    var points = (xValue / 10) * 25; 

    totalPoints += Math.min(points, 25); 

    scorebox441.textContent = 'Score: ' + totalPoints.toFixed(2);
});

</script>  