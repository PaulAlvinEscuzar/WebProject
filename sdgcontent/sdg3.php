<?php include '../includes/header.php';
include '../includes/db.php'; ?>
<div class="container">
    <div class="row-mt-5">
        <div class="container-xl" style="height:400px; background-color:#4ca146;">
            <div class="row justify-content-center">
                <div class="co-md-5 text-center text-md-start text-light ps-5">
                    <h1>
                        <div class="display-5 mt-5 f2-bold text-gray" style="font-family:'Oswald', sans-serif;">Goal
                        </div>
                        <div class="display-5 f2-bold">3</div>
                        <div class="display-3 line-break fw-bold pt-5">Ensure health lives and
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
                    <button class="nav-link active text-light fw-dark" style="letter-spacing :2px;"
                        id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button"
                        role="tab" aria-controls="pills-profile" aria-selected="true">Target</button>
                </li>
            </ul>
        </div>
        <div class="tab-content container-lg justify-content-center" id="pills-tabContent">
            <div class="tab-pane fade show active " id="pills-profile" role="tabpanel"
                aria-labelledby="pills-profile-tab">
                <div class="container d-grid" id="research311">

                    <!--Research 3.1.1-->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-3.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">3.1.1</h3>
                                    <!--Name of in every research-->
                                    <h4 class="fw-bolder">Research on health and wellbeing</h4>
                                    <p></p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100 bg-light" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score_311">Score:</h3>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research3.1.1`";
                                    $result = mysqli_query($conn, $sql);

                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_311 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Total number of published research on health and
                                        wellbeing: <?php echo $totalRecord_311 ?></h3>
                                    <?php
                                    $json_data_res311 = json_encode($totalRecord_311);
                                    $query311 = "SELECT * FROM `research3.1.1`";
                                    $select311 = mysqli_query($conn, $query311);

                                    if (mysqli_num_rows($select311) > 0) {
                                        while ($row = mysqli_fetch_assoc($select311)) {
                                            $title = $row['title'];
                                            $author = $row['author'];
                                            $yearpub = $row['yearPub'];
                                            $no_clinical = $row['no_clinical'];
                                            $no_citations = $row['no_citation'];
                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-success border-3 p-3">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Title</span>
                                                <input type="text" class="form-control" value="<?php echo "$title" ?>"
                                                    readonly aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Author</span>
                                                <input type="text" class="form-control" value="<?php echo "$author" ?>"
                                                    readonly aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Year Publication</span>
                                                <input type="text" class="form-control" value="<?php echo "$yearpub" ?>"
                                                    readonly aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Number of
                                                    Clinical</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$no_clinical" ?>" readonly
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Number of
                                                    Citations</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$no_citations" ?>" readonly
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

                    <!--Research 3.2.1-->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-3.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">3.2.1</h3>
                                    <h4 class="fw-bolder">Current collaborations with health institutions</h4>
                                    <p>Have current collaborations with local, national, or global health institutions
                                        to improve health and well-being outcomes.</p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100 bg-light" aria-labelledby="dropdownMenuButton1">

                                    <h3 class="text-start ms-3 fw-bold p-3" id="score321">Score:</h3>

                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research3.2.1`";
                                    $result = mysqli_query($conn, $sql);

                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord = $row['total'];
                                    }
                                    $local = "SELECT COUNT(*) AS local FROM `research3.2.1` WHERE categ = 'Local'";
                                    $no_local = mysqli_query($conn, $local);
                                    if (mysqli_num_rows($no_local) > 0) {
                                        $row = $no_local->fetch_assoc();
                                        $local_number = $row['local'];
                                    }
                                    $national = "SELECT COUNT(*) AS national FROM `research3.2.1` WHERE categ = 'National'";
                                    $no_national = mysqli_query($conn, $national);
                                    if (mysqli_num_rows($no_national) > 0) {
                                        $row = $no_national->fetch_assoc();
                                        $national_number = $row['national'];
                                    }
                                    $global = "SELECT COUNT(*) AS global FROM `research3.2.1` WHERE categ = 'Global'";
                                    $no_global = mysqli_query($conn, $global);
                                    if (mysqli_num_rows($no_national) > 0) {
                                        $row = $no_global->fetch_assoc();
                                        $global_number = $row['global'];
                                    }
                                    $json_data_res321_local = json_encode($local_number);
                                    $json_data_res321_national = json_encode($national_number);
                                    $json_data_res321_global = json_encode($global_number);
                                    ?>
                                    <div class="container d-grid bg-success p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of
                                                collaborations with health institutions</span>
                                            <input type="text" class="form-control" value="<?php echo "$totalRecord" ?>"
                                                readonly aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of local
                                                collaborations</span>
                                            <input type="text" class="form-control"
                                                value="<?php echo "$local_number" ?>" readonly
                                                aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of national
                                                collaborations</span>
                                            <input type="text" class="form-control"
                                                value="<?php echo "$national_number" ?>" readonly
                                                aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of global
                                                collaborations</span>
                                            <input type="text" class="form-control"
                                                value="<?php echo "$global_number" ?>" readonly
                                                aria-describedby="basic-addon1">
                                        </div>

                                    </div>
                                    <?php
                                    $query312 = "SELECT * FROM `research3.2.1`";
                                    $select312 = mysqli_query($conn, $query312);

                                    if (mysqli_num_rows($select312) > 0) {
                                        while ($row = mysqli_fetch_assoc($select312)) {
                                            $name_health_institute = $row['name_health_institute'];
                                            $categ = $row['categ'];
                                            $no_year_collab = $row['no_year_collab'];
                                            $title_project = $row['title_project'];
                                            $cost = $row['cost'];
                                            $fund = $row['fund'];
                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-success border-3 p-3">
                                            <h3 class="ms-3">List of collaborations with health institutions</h3>

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Name of health
                                                    institution</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$name_health_institute" ?>" readonly
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Categorized as local,
                                                    national, global</span>
                                                <input type="text" class="form-control" value="<?php echo "$categ" ?>"
                                                    readonly aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Number of years in
                                                    collaboration</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$no_year_collab" ?>" readonly
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Number of years in
                                                    collaboration</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$title_project" ?>" readonly
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Fund source</span>
                                                <input type="text" class="form-control" value="<?php echo "$cost" ?>"
                                                    readonly aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Number of
                                                    Citations</span>
                                                <input type="text" class="form-control" value="<?php echo "$fund" ?>"
                                                    readonly aria-describedby="basic-addon1">
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

                    <!--Research 3.2.2-->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-3.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">3.2.2</h3>
                                    <h4 class="fw-bolder">Health outreach programmes (extension project/activity)</h4>
                                    <p>Deliver outreach programmes and projects in the local community (which can
                                        include student volunteering programmes) to improve or promote health well-being
                                        including hygiene, nutrition, family planning, sports, exercise, aging well, and
                                        other health and well-being related topics.</p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <h3 class="text-start ms-3" id="score322">Score:</h3>
                                    <?php
                                    $program = "SELECT COUNT(*) AS noprog FROM `research3.2.2`";
                                    $no_program = mysqli_query($conn, $program);
                                    if (mysqli_num_rows($no_program) > 0) {
                                        $row = $no_program->fetch_assoc();
                                        $noprog = $row['noprog'];
                                    }

                                    $json_data_res322 = json_encode($noprog);
                                    ?>
                                    <div class="container bg-success p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of health
                                                outreach programmes/activity</span>
                                            <input type="text" class="form-control" value="<?php echo "$noprog" ?>"
                                                readonly aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <?php
                                    $query322 = "SELECT * FROM `research3.2.2`";
                                    $select322 = mysqli_query($conn, $query322);

                                    if (mysqli_num_rows($select322) > 0) {
                                        while ($row = mysqli_fetch_assoc($select322)) {
                                            $title = $row['title'];
                                            $description = $row['description'];
                                            $total = $row['total'];
                                            $fund = $row['fund'];
                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-success border-3 p-3">

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Title of the PPA</span>
                                                <input type="text" class="form-control" value="<?php echo "$title" ?>"
                                                    readonly aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Short description of
                                                    the PPA</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$description" ?>" readonly
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                                <input type="text" class="form-control" value="<?php echo "$total" ?>"
                                                    readonly aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                                <input type="text" class="form-control" value="<?php echo "$fund" ?>"
                                                    readonly aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Fund source</span>
                                                <input type="text" class="form-control" value="<?php echo "$cost" ?>"
                                                    readonly aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Number of
                                                    Citations</span>
                                                <input type="text" class="form-control" value="<?php echo "$fund" ?>"
                                                    readonly aria-describedby="basic-addon1">
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

                    <!--Research 3.2.3-->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-3.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">3.2.3</h3>
                                    <h4 class="fw-bolder">Shared sport facilities</h4>
                                    <p>Shared sports facilities (gymnasium, wellness gym, outdoor field) with the local
                                        community, for instance with local schools or with the general public.</p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <h3 class="text-start ms-3">Score:</h3>
                                    <?php
                                    $query323 = "SELECT * FROM `research3.2.3`";
                                    $select323 = mysqli_query($conn, $query323);
                                    if (mysqli_num_rows($select323) > 0) {
                                        while ($row = mysqli_fetch_assoc($select323)) {
                                            $respond = $row['respond'];
                                            $no_approved = $row['no_approved'];
                                            $facility = $row['facility'];
                                            $lvlofCommunity = $row['lvlofCommunity'];
                                            $titleEvent = $row['titleEvent'];
                                            $noHours = $row['noHours'];
                                            $noGuest = $row['noGuest'];
                                            $amountFromPaid = $row['amountFromPaid'];
                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-success border-3 p-3">

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Does your campus share
                                                    sports facilities to the general public?</span>
                                                <input type="text" class="form-control" value="<?php echo "$respond" ?>"
                                                    readonly aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number of
                                                    approved requests from the community on the use of sport
                                                    facilities</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$no_approved" ?>" readonly
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Facility type</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$facility" ?>" readonly
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Level of Community
                                                    (Local, regional, national)</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$lvlofCommunity" ?>" readonly
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Title of Event/Type of
                                                    Event</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$titleEvent" ?>" readonly
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">No. of hours</span>
                                                <input type="text" class="form-control" value="<?php echo "$noHours" ?>"
                                                    readonly aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number of guests
                                                    benefited from free access</span>
                                                <input type="text" class="form-control" value="<?php echo "$noGuest" ?>"
                                                    readonly aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total amount generated
                                                    from paid access to sport facilities</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$amountFromPaid" ?>" readonly
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

                    <!--Research 3.2.4-->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-3.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">3.2.4</h3>
                                    <h4 class="fw-bolder">Sexual and reproductive health care services for students</h4>
                                    <p>Provide student access to sexual and reproductive health-care services including
                                        information and education services.</p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <h3 class="text-start ms-3" id="score324">Score:</h3>
                                    <?php
                                    $count324 = "SELECT COUNT(*) AS ppa324 FROM `research3.2.4` WHERE title IS NOT NULL ";
                                    $count_324 = mysqli_query($conn, $count324);

                                    if (mysqli_num_rows($count_324) > 0) {
                                        $row = $count_324->fetch_assoc();
                                        $ppa324_number = $row['ppa324'];
                                    }
                                    $json_data_res324 = json_encode($ppa324_number);

                                    $query322 = "SELECT * FROM `research3.2.4`";
                                    $select322 = mysqli_query($conn, $query322);

                                    if (mysqli_num_rows($select322) > 0) {
                                        while ($row = mysqli_fetch_assoc($select322)) {
                                            $sexActive = $row['sexActive'];
                                            $pregnant = $row['pregnant'];
                                            $haveBirth = $row['haveBirth'];
                                            $pregnantLoss = $row['pregnantLoss'];
                                            $impregnated = $row['impregnated'];
                                            $testHIV = $row['testHIV'];
                                            $percentSexActive = $row['percentSexActive'];
                                            $percentfPregnant = $row['percentfPregnant'];
                                            $percentfBirth = $row['percentfBirth'];
                                            $percentfPregLoss = $row['percentfPregLoss'];
                                            $percentmImpreg = $row['percentmImpreg'];
                                            $percenttestHIV = $row['percenttestHIV'];
                                            $nohealthcare = $row['nohealthcare'];
                                            $title = $row['title'];
                                            $description = $row['description'];
                                            $total = $row['total'];
                                            $fund = $row['fund'];

                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-success border-3 p-3">

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number of
                                                    students that are sexually active</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$sexActive" ?>" readonly
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number of
                                                    pregnant students</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$pregnant" ?>" readonly
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number of
                                                    students have already given birth</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$haveBirth" ?>" readonly
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number of
                                                    students with pregnancy loss</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$pregnantLoss" ?>" readonly
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number of
                                                    students who have impregnated someone</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$impregnated" ?>" readonly
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number of
                                                    students that has been tested for HIV/AIDS</span>
                                                <input type="text" class="form-control" value="<?php echo "$testHIV" ?>"
                                                    readonly aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Percent of the
                                                    student’s population is sexually active</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$percentSexActive" ?>" readonly
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Percent of the female
                                                    student’s population is currently pregnant</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$percentfPregnant" ?>" readonly
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Percent of the female
                                                    student’s population have already given birth</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$percentfBirth" ?>" readonly
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Percent of the female
                                                    student’s population have experienced pregnancy loss</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$percentfPregLoss" ?>" readonly
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Percent of the male
                                                    student’s population have impregnated someone</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$percentmImpreg" ?>" readonly
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Percent of the
                                                    male/female student’s population have been tested for
                                                    HIV/AIDS</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$percenttestHIV" ?>" readonly
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number of sexual
                                                    and reproductive health-care services for students</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$nohealthcare" ?>" readonly
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Title of the PPA</span>
                                                <input type="text" class="form-control" value="<?php echo "$title" ?>"
                                                    readonly aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Short description of
                                                    the PPA</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$description" ?>" readonly
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total cost</span>
                                                <input type="text" class="form-control" value="<?php echo "$total" ?>"
                                                    readonly aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Fund source</span>
                                                <input type="text" class="form-control" value="<?php echo "$fund" ?>"
                                                    readonly aria-describedby="basic-addon1">
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

                    <!--Research 3.2.5-->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-3.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">3.2.5</h3>
                                    <h4 class="fw-bolder">Sexual and reproductive health care services for employees
                                    </h4>
                                    <p>Provide student access to sexual and reproductive health-care services including
                                        information and education services.</p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <h3 class="text-start ms-3" id="score325">Score:</h3>
                                    <?php

                                    $count325 = "SELECT COUNT(*) AS ppas325 FROM `research3.2.5` WHERE title IS NOT NULL ";
                                    $count_325 = mysqli_query($conn, $count325);

                                    if (mysqli_num_rows($count_325) > 0) {
                                        $row = $count_325->fetch_assoc();
                                        $ppa325_number = $row['ppas325'];
                                    }
                                    $json_data_res325 = json_encode($ppa325_number);


                                    $query322 = "SELECT * FROM `research3.2.5`";
                                    $select322 = mysqli_query($conn, $query322);

                                    if (mysqli_num_rows($select322) > 0) {
                                        while ($row = mysqli_fetch_assoc($select322)) {
                                            $sexActive = $row['sexActive'];
                                            $pregnant = $row['pregnant'];
                                            $haveBirth = $row['haveBirth'];
                                            $pregnantLoss = $row['pregnantLoss'];
                                            $impregnated = $row['impregnated'];
                                            $testHIV = $row['testHIV'];
                                            $percentSexActive = $row['percentSexActive'];
                                            $percentfPregnant = $row['percentfPregnant'];
                                            $percentfBirth = $row['percentfBirth'];
                                            $percentfPregLoss = $row['percentfPregLoss'];
                                            $percentmImpreg = $row['percentmImpreg'];
                                            $percenttestHIV = $row['percenttestHIV'];
                                            $nohealthcare = $row['nohealthcare'];
                                            $title = $row['title'];
                                            $description = $row['description'];
                                            $total = $row['total'];
                                            $fund = $row['fund'];

                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-success border-3 p-3">

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number of
                                                    employees that are sexually active</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$sexActive" ?>" readonly
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number of
                                                    pregnant employees</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$pregnant" ?>" readonly
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number of
                                                    employees have already given birth</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$haveBirth" ?>" readonly
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number of
                                                    employees with pregnancy loss</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$pregnantLoss" ?>" readonly
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number of
                                                    employees who have impregnated someone</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$impregnated" ?>" readonly
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number of
                                                    employees that has been tested for HIV/AIDS</span>
                                                <input type="text" class="form-control" value="<?php echo "$testHIV" ?>"
                                                    readonly aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Percent of the
                                                    employee's population is sexually active</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$percentSexActive" ?>" readonly
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Percent of the female
                                                    employee's population is currently pregnant</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$percentfPregnant" ?>" readonly
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Percent of the female
                                                    employee's population have already given birth</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$percentfBirth" ?>" readonly
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Percent of the female
                                                    employee's population have experienced pregnancy loss</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$percentfPregLoss" ?>" readonly
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Percent of the male
                                                    employee's population have impregnated someone</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$percentmImpreg" ?>" readonly
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Percent of the
                                                    male/female employee's population have been tested for
                                                    HIV/AIDS</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$percenttestHIV" ?>" readonly
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number of sexual
                                                    and reproductive health-care services for employees</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$nohealthcare" ?>" readonly
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Title of the PPA</span>
                                                <input type="text" class="form-control" value="<?php echo "$title" ?>"
                                                    readonly aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Short description of
                                                    the PPA</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$description" ?>" readonly
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total cost</span>
                                                <input type="text" class="form-control" value="<?php echo "$total" ?>"
                                                    readonly aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Fund source</span>
                                                <input type="text" class="form-control" value="<?php echo "$fund" ?>"
                                                    readonly aria-describedby="basic-addon1">
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

                    <!--Research 3.2.6-->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-3.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">3.2.6</h3>
                                    <h4 class="fw-bolder">Mental health support for students and employees</h4>
                                    <p>Provide students and staff with access to mental health support.</p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100 bg-light" aria-labelledby="dropdownMenuButton1">

                                    <h3 class="text-start ms-3">Score:</h3>
                                    <?php
                                    $query326 = "SELECT * FROM `research3.2.6`";
                                    $select326 = mysqli_query($conn, $query326);

                                    if (mysqli_num_rows($select326) > 0) {
                                        while ($row = mysqli_fetch_assoc($select326)) {
                                            $no_psydis = $row['no_psydis'];
                                            $no_emp_psydis = $row['no_emp_psydis'];
                                            $no_mentalh = $row['no_mentalh'];
                                            $title = $row['title'];
                                            $description = $row['description'];
                                            $total = $row['total'];
                                            $fund = $row['fund'];
                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-success border-3 p-3">
                                            <p class="lead fw-bold">
                                                Statistics
                                            </p>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text"><i class=""></i></span>
                                                <input type="text" class="form-control"
                                                    placeholder="Total number of students with psychiatric disorder"
                                                    readonly name="no_psydis" value="<?php echo "$no_psydis"; ?>">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text"><i class=""></i></span>
                                                <input type="text" class="form-control"
                                                    placeholder="Total number of employees with psychiatric disorder"
                                                    readonly name="no_emp_psydis"
                                                    value="<?php echo "$no_emp_psydis"; ?>">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text"><i class=""></i></span>
                                                <input type="text" class="form-control"
                                                    placeholder="Total number of mental health support for students and employees"
                                                    readonly name="no_mentalh" value="<?php echo "$no_mentalh" ?>">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text"><i class=""></i></span>
                                                <input type="text" class="form-control" placeholder="Title of the PPA"
                                                    readonly name="title" value="<?php echo "$title" ?>">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                                <input type="text" class="form-control"
                                                    placeholder="Short description of the PPA" readonly
                                                    name="description" value="<?php echo "$description" ?>">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text"><i class=""></i></span>
                                                <input type="text" class="form-control" placeholder="Total cost"
                                                    readonly name="total" value="<?php echo "$total" ?>">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text"><i class=""></i></span>
                                                <input type="text" class="form-control" placeholder="Fund source "
                                                    readonly name="fund" value="<?php echo "$fund" ?>">
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
                    <!--Research 3.2.7-->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-3.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">3.2.7</h3>
                                    <h4 class="fw-bolder">Smoke/vape-free policy</h4>
                                    <p>Have a “smoke/vape-free policy”.</p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100 bg-light" aria-labelledby="dropdownMenuButton1">

                                    <h3 class="text-start ms-3">Score:</h3>
                                    <?php
                                    $query326 = "SELECT * FROM `research3.2.7`";
                                    $select326 = mysqli_query($conn, $query326);

                                    if (mysqli_num_rows($select326) > 0) {
                                        while ($row = mysqli_fetch_assoc($select326)) {
                                            $no_policy = $row['no_policy'];
                                            $no_PPAs = $row['no_PPAs'];
                                            $title = $row['title'];
                                            $description = $row['description'];
                                            $total = $row['total'];
                                            $fund = $row['fund'];
                                    ?>
                                    <div class="container d-grid mt-3">

                                        <div class="border border-success border-3 p-3">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text"><i class=""></i></span>
                                                <input type="text" class="form-control"
                                                    placeholder="Total number of students with psychiatric disorder"
                                                    readonly name="no_policy" value="<?php echo "$no_policy"; ?>">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text"><i class=""></i></span>
                                                <input type="text" class="form-control"
                                                    placeholder="Total number of employees with psychiatric disorder"
                                                    readonly name="no_PPAs" value="<?php echo "$no_PPAs"; ?>">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text"><i class=""></i></span>
                                                <input type="text" class="form-control" placeholder="Title of the PPA"
                                                    readonly name="title" value="<?php echo "$title" ?>">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                                <input type="text" class="form-control"
                                                    placeholder="Short description of the PPA" readonly
                                                    name="description" value="<?php echo "$description" ?>">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text"><i class=""></i></span>
                                                <input type="text" class="form-control" placeholder="Total cost"
                                                    readonly name="total" value="<?php echo "$total" ?>">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text"><i class=""></i></span>
                                                <input type="text" class="form-control" placeholder="Fund source "
                                                    readonly name="fund" value="<?php echo "$fund" ?>">
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

<script>
//res311
var scorebox311 = document.getElementById("");
var x = <?php echo $json_data_res311 ?>;
var y = 25;



//res321
var scorebox321 = document.getElementById("score321");
var local = <?php echo $json_data_res321_local ?>;
var national = <?php echo $json_data_res321_national ?>;
var global = <?php echo $json_data_res321_global ?>;
var collaborations = [local, national, global];
var weights = [5, 6, 7];


if (collaborations.length === weights.length) {
    var sum = 0;


    for (var i = 1; i < collaborations.length; i++) {
        sum += collaborations[i] * weights[i];
    }

    if (scorebox321) {
        scorebox321.textContent = "Score: " + sum + " points";
    } else {
        console.log("Element with ID 'score321' not found.");
    }
}

//res322
var scorebox322 = document.getElementById("score322");
var no_PPA_322 = <?php echo $json_data_res322 ?>;

if (no_PPA_322 > 10) {
    scorebox322.textContent = "Score: " + "10" + " points";
} else {
    scorebox322.textContent = "Score: " + no_PPA_322 + " points";
}

//res323

//res324
var scorebox324 = document.getElementById("score324");
var no_PPA_324 = <?php echo $json_data_res324 ?>;

if (no_PPA_324 > 10) {
    scorebox324.textContent = "Score: " + "10" + " points";
} else {
    scorebox324.textContent = "Score: " + no_PPA_324 + " points";
}

//res325
var scorebox325 = document.getElementById("score325");
var no_PPA_325 = <?php echo $json_data_res325 ?>;

if (no_PPA_325 > 10) {
    scorebox325.textContent = "Score: " + "10" + " points";
} else {
    scorebox325.textContent = "Score: " + no_PPA_325 + " points";
}
</script>