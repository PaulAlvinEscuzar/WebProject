<?php include '../includes/header.php';
include '../includes/db.php'; ?>
<div class="container">
    <div class="row-mt-5">
        <div class="container-xl" style="height:400px; background-color:#3CAF48;">
            <div class="row justify-content-center">
                <div class="co-md-5 text-center text-md-start text-light ps-5">
                    <h1>
                        <div class="display-5 mt-5 f2-bold text-gray" style="font-family:'Oswald', sans-serif;">Goal
                        </div>
                        <div class="display-5 f2-bold">15</div>
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
                <div class="container d-grid" id="research311">

                    <!--Start of the sdg content-->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <!--Image Src iibahin-->
                                <img src="../img/sdg15.jpg" class="p-4 d-block" width="150" alt="">

                                <div class="d-grid ms-5 me-5">

                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">15.1.1</h3>
                                    <!--Name of in every research-->
                                    <h4 class="fw-bolder">Research on land ecosystems</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">

                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score_1511">Score:</h3>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research15.1.1`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_1511 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Research on land ecosystems:
                                        <?php echo $totalRecord_1511 ?></h3>
                                    <?php
                                    $json_data_res1511 = json_encode($totalRecord_1511);
                                    $query1511 = "SELECT * FROM `research15.1.1`";
                                    $select1511 = mysqli_query($conn, $query1511);

                                    if (mysqli_num_rows($select1511) > 0) {
                                        while ($row = mysqli_fetch_assoc($select1511)) {
                                            $no_reslandeco = $row['no_reslandeco'];
                                            $title = $row['title'];
                                            $author = $row['author'];
                                            $yearpub = $row['year_pub'];
                                            $no_citations = $row['no_citations'];
                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of research on land ecosystems</span>
                                            <input type="text" class="form-control" value="<?php echo "$no_reslandeco"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>

                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Title</span>
                                            <input type="text" class="form-control" value="<?php echo "$title"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Author</span>
                                            <input type="text" class="form-control" value="<?php echo "$author"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Year Publication</span>
                                            <input type="text" class="form-control" value="<?php echo "$yearpub"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Number of Citations</span>
                                            <input type="text" class="form-control" value="<?php echo "$no_citations"?>"
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

                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <!--Image Src iibahin-->
                                <img src="../img/sdg15.jpg" class="p-4 d-block" width="150" alt="">

                                <div class="d-grid ms-5 me-5">
                                    
                                    <h3 class="fw-bold">15.2.1</h3>
                                    <h4 class="fw-bolder">Measures that promote sustainable land practices:</h4>
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">15.2.1.1</h3>
                                    <!--Name of in every research-->
                                    <h4 class="fw-bolder">Students</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">

                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score_1521">Score:</h3>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research15.2.1`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_1521 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Measures that promote sustainable land practices:
                                        <?php echo $totalRecord_1521 ?></h3>
                                    <?php
                                    $json_data_res1521 = json_encode($totalRecord_1521);
                                    $query1521 = "SELECT * FROM `research15.2.1`";
                                    $select1521 = mysqli_query($conn, $query1521);

                                    if (mysqli_num_rows($select1521) > 0) {
                                        while ($row = mysqli_fetch_assoc($select1521)) {
                                            $no_gardening = $row['no_gardening'];
                                            $gardeningmale = $row['gardeningmale'];
                                            $gardeningfemale = $row['gardeningfemale'];
                                            $no_vertical = $row['no_vertical'];
                                            $verticalmale = $row['verticalmale'];
                                            $verticalfemale = $row['verticalfemale'];
                                            $percent_gardening = $row['percent_gardening'];
                                            $percent_vertical = $row['percent_vertical'];
                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of students with available space at home for gardening:</span>
                                            <input type="text" class="form-control" value="<?php echo "$no_gardening"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                                <span class="input-group-text" id="basic-addon1">Male</span>
                                            <input type="text" class="form-control" value="<?php echo "$gardeningmale"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                                <span class="input-group-text" id="basic-addon1">Female</span>
                                            <input type="text" class="form-control" value="<?php echo "$gardeningfemale"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of students with available space at home for vertical gardening:</span>
                                            <input type="text" class="form-control" value="<?php echo "$no_vertical"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                                <span class="input-group-text" id="basic-addon1">Male</span>
                                            <input type="text" class="form-control" value="<?php echo "$verticalmale"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                                <span class="input-group-text" id="basic-addon1">Female</span>
                                            <input type="text" class="form-control" value="<?php echo "$verticalfemale"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Percent of the student population has available space at home for gardening.</span>
                                            <input type="text" class="form-control" value="<?php echo "$percent_gardening"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Percent of the student population has available space at home for vertical gardening.</span>
                                            <input type="text" class="form-control" value="<?php echo "$percent_vertical"?>"
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

                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <!--Image Src iibahin-->
                                <img src="../img/sdg15.jpg" class="p-4 d-block" width="150" alt="">

                                <div class="d-grid ms-5 me-5">
                                    
                                    <h3 class="fw-bold">15.2.1.2</h3>
                                    <h4 class="fw-bolder">Measures that promote sustainable land practices</h4>
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">15.2.1.2</h3>
                                    <!--Name of in every research-->
                                    <h4 class="fw-bolder">Employees</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">

                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score_15212">Score:</h3>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research15.2.1.2`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_15212 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Measures that promote sustainable land practices:
                                        <?php echo $totalRecord_15212 ?></h3>
                                    <?php
                                    $json_data_res15212 = json_encode($totalRecord_15212);
                                    $query15212 = "SELECT * FROM `research15.2.1.2`";
                                    $select15212 = mysqli_query($conn, $query15212);

                                    if (mysqli_num_rows($select15212) > 0) {
                                        while ($row = mysqli_fetch_assoc($select15212)) {
                                            $employees_gardening = $row['employees_gardening'];
                                            $employeegmale = $row['employeegmale'];
                                            $employeegfemale = $row['employeegfemale'];
                                            $employee_vertical = $row['employee_vertical'];
                                            $employeevmale = $row['employeevmale'];
                                            $employeevfemale = $row['employeevfemale'];
                                            $percente_gardening = $row['percente_gardening'];
                                            $percentv_vertical = $row['percentv_vertical'];
                                            $no_susland = $row['no_susland'];
                                            $ppa = $row['ppa'];
                                            $shortd = $row['shortd'];
                                            $totalc = $row['totalc'];
                                            $FundSource = $row['FundSource'];
                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of employees with available space at home for gardening:</span>
                                            <input type="text" class="form-control" value="<?php echo "$employees_gardening"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                                <span class="input-group-text" id="basic-addon1">Male</span>
                                            <input type="text" class="form-control" value="<?php echo "$employeegmale"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                                <span class="input-group-text" id="basic-addon1">Female</span>
                                            <input type="text" class="form-control" value="<?php echo "$employeegfemale"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of employees with available space at home for vertical gardening:</span>
                                            <input type="text" class="form-control" value="<?php echo "$employee_vertical"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                                <span class="input-group-text" id="basic-addon1">Male</span>
                                            <input type="text" class="form-control" value="<?php echo "$employeevmale"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                                <span class="input-group-text" id="basic-addon1">Female</span>
                                            <input type="text" class="form-control" value="<?php echo "$employeevfemale"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Percent of the employee population has available space at home for gardening.</span>
                                            <input type="text" class="form-control" value="<?php echo "$percente_gardening"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Percent of the employee population has available space at home for vertical gardening.</span>
                                            <input type="text" class="form-control" value="<?php echo "$percentv_vertical"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of sustainable land practices implemented:</span>
                                            <input type="text" class="form-control" value="<?php echo "$no_susland"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Title of the PPA:</span>
                                            <input type="text" class="form-control" value="<?php echo "$ppa"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Short Description:</span>
                                            <input type="text" class="form-control" value="<?php echo "$shortd"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total Cost:</span>
                                            <input type="text" class="form-control" value="<?php echo "$totalc"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Fund Source:</span>
                                            <input type="text" class="form-control" value="<?php echo "$FundSource"?>"
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

                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <!--Image Src iibahin-->
                                <img src="../img/sdg15.jpg" class="p-4 d-block" width="150" alt="">

                                <div class="d-grid ms-5 me-5">
                                    
                                    <h3 class="fw-bold">15.3.1</h3>
                                    <h4 class="fw-bolder">Number of endangered flora/fauna in the campus</h4>
                                    <p class="fw-normal">Target</p>
                                    <!--Name of in every research-->
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">

                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score_1531">Score:</h3>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research15.3.1`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_1531 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Number of endangered flora/fauna in the campus:
                                        <?php echo $totalRecord_1531 ?></h3>
                                    <?php
                                    $json_data_res1531 = json_encode($totalRecord_1531);
                                    $query1531 = "SELECT * FROM `research15.3.1`";
                                    $select1531 = mysqli_query($conn, $query1531);

                                    if (mysqli_num_rows($select1531) > 0) {
                                        while ($row = mysqli_fetch_assoc($select1531)) {
                                            $totalend = $row['totalend'];
                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of endangered flora/fauna in the campus:</span>
                                            <input type="text" class="form-control" value="<?php echo "$totalend"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    </ul>
                                    <?php
                                        }
                                    }
                                    ?>
                                

                            </div>
                        </div>
                    </div>

                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <!--Image Src iibahin-->
                                <img src="../img/sdg15.jpg" class="p-4 d-block" width="150" alt="">

                                <div class="d-grid ms-5 me-5">
                                    
                                    <h3 class="fw-bold">15.3.2</h3>
                                    <h4 class="fw-bolder">Measures to conserve the endangered species</h4>
                                    <p class="fw-normal">Target</p>
                                    <!--Name of in every research-->
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">

                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score_1532">Score:</h3>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research15.3.2`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_1532 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Measures to conserve the endangered species:
                                        <?php echo $totalRecord_1532 ?></h3>
                                    <?php
                                    $json_data_res1532 = json_encode($totalRecord_1532);
                                    $query1532 = "SELECT * FROM `research15.3.2`";
                                    $select1532 = mysqli_query($conn, $query1532);

                                    if (mysqli_num_rows($select1532) > 0) {
                                        while ($row = mysqli_fetch_assoc($select1532)) {
                                            $totalspecies = $row['totalspecies'];
                                            $titleppa = $row['titleppa'];
                                            $shortdes = $row['shortdes'];
                                            $tcost = $row['tcost'];
                                            $fsource= $row['fsource'];
                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of conservation measures for endangered species:</span>
                                            <input type="text" class="form-control" value="<?php echo "$totalspecies"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Title of PPA:</span>
                                            <input type="text" class="form-control" value="<?php echo "$titleppa"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Short description:</span>
                                            <input type="text" class="form-control" value="<?php echo "$shortdes"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total cost:</span>
                                            <input type="text" class="form-control" value="<?php echo "$tcost"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">    
                                                </div>    
                                                <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Fund source:</span>
                                            <input type="text" class="form-control" value="<?php echo "$fsource"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">    
                                                </div>    
                                    </div>
                                    </ul>
                                    <?php
                                        }
                                    }
                                    ?>
                                

                            </div>
                        </div>
                    </div>

                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <!--Image Src iibahin-->
                                <img src="../img/sdg15.jpg" class="p-4 d-block" width="150" alt="">

                                <div class="d-grid ms-5 me-5">
                                    
                                    <h3 class="fw-bold">15.4.1</h3>
                                    <h4 class="fw-bolder">Measures to conserve the endangered species</h4>
                                    <p class="fw-normal">Target</p>
                                    <!--Name of in every research-->
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">

                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score_1541">Score:</h3>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research15.4.1`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_1541 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Measures to conserve the endangered species:
                                        <?php echo $totalRecord_1541 ?></h3>
                                    <?php
                                    $json_data_res1541 = json_encode($totalRecord_1541);
                                    $query1541 = "SELECT * FROM `research15.4.1`";
                                    $select1541 = mysqli_query($conn, $query1541    );

                                    if (mysqli_num_rows($select1541) > 0) {
                                        while ($row = mysqli_fetch_assoc($select1541)) {
                                            $totalcampus = $row['totalcampus'];
                                            $tppa = $row['tppa'];
                                            $shortds = $row['shortds'];
                                            $totcost = $row['totcost'];
                                            $funds= $row['funds'];
                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of events organized/supported by the campus:</span>
                                            <input type="text" class="form-control" value="<?php echo "$totalcampus"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Title of PPA:</span>
                                            <input type="text" class="form-control" value="<?php echo "$tppa"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Short description:</span>
                                            <input type="text" class="form-control" value="<?php echo "$shortds"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total cost:</span>
                                            <input type="text" class="form-control" value="<?php echo "$totcost"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">    
                                                </div>    
                                                <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Fund source:</span>
                                            <input type="text" class="form-control" value="<?php echo "$funds"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">    
                                                </div>    
                                    </div>
                                        </div>
                                    </div>
                                    </ul>
                                    <?php
                                        }
                                    }
                                    ?>
                            </div>
                        </div>           
                    </div>

                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <!--Image Src iibahin-->
                                <img src="../img/sdg15.jpg" class="p-4 d-block" width="150" alt="">

                                <div class="d-grid ms-5 me-5">
                                    
                                    <h3 class="fw-bold">15.4.2</h3>
                                    <h4 class="fw-bolder">Sustainably farmed food on campus</h4>
                                    <p class="fw-normal">Target</p>
                                    <!--Name of in every research-->
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">

                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score_1542">Score:</h3>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research15.4.2`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_1542 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Sustainably farmed food on campus:
                                        <?php echo $totalRecord_1542 ?></h3>
                                    <?php
                                    $json_data_res1542 = json_encode($totalRecord_1542);
                                    $query1542 = "SELECT * FROM `research15.4.2`";
                                    $select1542 = mysqli_query($conn, $query1542    );

                                    if (mysqli_num_rows($select1542) > 0) {
                                        while ($row = mysqli_fetch_assoc($select1542)) {
                                            $no_susfarmed = $row['no_susfarmed'];
                                            $no_ppaimplemented= $row['no_ppaimplemented'];
                                            $titotppa = $row['titotppa'];
                                            $sdotppa = $row['sdotppa'];
                                            $tocost= $row['tocost'];
                                            $funsource= $row['funsource'];
                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of policies ensuring that food on campus is sustainably farmed:</span>
                                            <input type="text" class="form-control" value="<?php echo "$no_susfarmed"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of PPAs implemented in accordance to the policy:</span>
                                            <input type="text" class="form-control" value="<?php echo "$no_ppaimplemented"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Title of the PPA:</span>
                                            <input type="text" class="form-control" value="<?php echo "$titotppa"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Short description of the PPA:</span>
                                            <input type="text" class="form-control" value="<?php echo "$sdotppa"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">    
                                                </div>    
                                                <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total cost:</span>
                                            <input type="text" class="form-control" value="<?php echo "$tocost"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">    
                                                </div> 
                                                <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Fund source:</span>
                                            <input type="text" class="form-control" value="<?php echo "$funsource"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">    
                                                </div>      
                                    </div>
                                        </div>
                                    </div>
                                    </ul>
                                    <?php
                                        }
                                    }
                                    ?>
            </div>
                        </div>           
                    </div>

<div class="d-inline-flex mt-3">
    <div class="border border-dark w-100">
        <div class=" d-inline-flex justify-content-start align-items-center">
            <!-- Image Src iibahin -->
            <img src="../img/sdg15.jpg" class="p-4 d-block" width="150" alt="">
            <div class="d-grid ms-5 me-5">
                <h3 class="fw-bold">15.4.3</h3>
                <h4 class="fw-bolder">Maintain and extend current ecosystems’ biodiversity</h4>
                <p class="fw-normal">Target</p>
                <!-- Name of in every research -->
            </div>
        </div>
        <div class="dropdown">
            <button class="btn btn-light dropdown-toggle float-end w-100" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></button>
            <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                <!-- Eto para madisplay yung data sa sdg content -->
                <h3 class="text-start ms-3" id="score_1543">Score:</h3>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research15.4.3`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_1543 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Maintain and extend current ecosystems’ biodiversity:
                                        <?php echo $totalRecord_1543 ?></h3>
                                    <?php
                                    $json_data_res1543 = json_encode($totalRecord_1543);
                $query1543 = "SELECT * FROM `research15.4.3`";
                $select1543 = mysqli_query($conn, $query1543);

                if (mysqli_num_rows($select1543) > 0) {
                    while ($row = mysqli_fetch_assoc($select1543)) {
                        $no_maecebio = $row['no_maecebio'];
                        $ppatit = $row['ppatit'];
                        $shortdotppa = $row['shortdotppa'];
                        $costtotal = $row['costtotal'];
                        $sourcefund = $row['sourcefund'];
                ?>
                             <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of campus initiatives to maintain and extend current ecosystem biodiversity:</span>
                                            <input type="text" class="form-control" value="<?php echo "$no_maecebio"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Title of the PPA:</span>
                                            <input type="text" class="form-control" value="<?php echo "$ppatit"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Short Description of the PPA:</span>
                                            <input type="text" class="form-control" value="<?php echo "$shortdotppa"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total Cost::</span>
                                            <input type="text" class="form-control" value="<?php echo "$costtotal"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">    
                                        </div>    
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Fund Source:</span>
                                            <input type="text" class="form-control" value="<?php echo "$sourcefund"?>"
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
<div class="d-inline-flex mt-3">
    <div class="border border-dark w-100">
        <div class=" d-inline-flex justify-content-start align-items-center">
            <!-- Image Src iibahin -->
            <img src="../img/sdg15.jpg" class="p-4 d-block" width="150" alt="">
            <div class="d-grid ms-5 me-5">
                <h3 class="fw-bold">15.5.1</h3>
                <h4 class="fw-bolder">Biodiversity in the community</h4>
                <p class="fw-normal">Target</p>
                <!-- Name of in every research -->
            </div>
        </div>
        <div class="dropdown">
            <button class="btn btn-light dropdown-toggle float-end w-100" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></button>
            <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                <!-- Eto para madisplay yung data sa sdg content -->
                <h3 class="text-start ms-3" id="score_1551">Score:</h3>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research15.5.1`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_1551 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Biodiversity in the community:
                                        <?php echo $totalRecord_1551 ?></h3>
                                    <?php
                                    $json_data_res1551 = json_encode($totalRecord_1551);
                $query1551 = "SELECT * FROM `research15.5.1`";
                $select1551 = mysqli_query($conn, $query1551);

                if (mysqli_num_rows($select1551) > 0) {
                    while ($row = mysqli_fetch_assoc($select1551)) {
                        $no_bio = $row['no_bio'];
                        $tippa = $row['tippa'];
                        $sdeppa = $row['sdeppa'];
                        $totcst = $row['totcst'];
                        $funs = $row['funs'];
                ?>
                             <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of extension PPAs that sustain the biodiversity of the community:</span>
                                            <input type="text" class="form-control" value="<?php echo "$no_bio"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Title of the PPA:</span>
                                            <input type="text" class="form-control" value="<?php echo "$tippa"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Short Description of the PPA:</span>
                                            <input type="text" class="form-control" value="<?php echo "$sdeppa"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total Cost::</span>
                                            <input type="text" class="form-control" value="<?php echo "$totcst"?>"
                                                aria-label="Username" aria-describedby="basic-addon1">    
                                        </div>    
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Fund Source:</span>
                                            <input type="text" class="form-control" value="<?php echo "$funs"?>"
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


                    </div>
    </div>
</div>
</div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    var scorebox1511 = document.getElementById("score_1511");
    var x = <?php echo $json_data_res1511 ?>;
    var scopusWeight = 25; 
    var otherPeerReviewedWeight = 10; 


    var xValue = x; 
    var yScopus = 25; 
    var yOtherPeerReviewed = 10; 

    
    var scoreScopus = Math.min(xValue * yScopus, scopusWeight);
    var scoreOtherPeerReviewed = Math.min(xValue * yOtherPeerReviewed, otherPeerReviewedWeight);

    
    var totalScore = scoreScopus + scoreOtherPeerReviewed;

    
    scorebox1511.textContent = 'Score: ' + totalScore.toFixed(2);

});

document.addEventListener('DOMContentLoaded', function () {
    var scorebox1521 = document.getElementById("score_1521"); 
    var x = <?php echo $json_data_res1521 ?>;
    var y = 2;

    var implementedPractices = x; 
    var maxPoints = 15; 

    var totalScore = (implementedPractices * y) <= maxPoints ? (implementedPractices * y) + '' : maxPoints + '(' + maxPoints/y + ')(' + y + ')';

    scorebox1521.textContent = 'Score: ' + totalScore;
});




document.addEventListener('DOMContentLoaded', function () {
    var scorebox15212 = document.getElementById("score_15212");
    var x = <?php echo $json_data_res15212 ?>;
    
    var scopusWeight = 25; 
    var otherPeerReviewedWeight = 10; 
    
    var xValue = x;
    var yScopus = 25; 
    var yOtherPeerReviewed = 10; 


    var scoreScopus = (xValue / 2) * yScopus;
    var scoreOtherPeerReviewed = (xValue / 2) * yOtherPeerReviewed;


    scoreScopus = Math.min(scoreScopus, scopusWeight);
    scoreOtherPeerReviewed = Math.min(scoreOtherPeerReviewed, otherPeerReviewedWeight);

    var totalScore = scoreScopus + scoreOtherPeerReviewed;


    scorebox15212.textContent = 'Score:   ' + totalScore.toFixed(2);
});

document.addEventListener('DOMContentLoaded', function () {
    var scorebox1531 = document.getElementById("score_1531");
    var x = <?php echo $json_data_res1531 ?>;
    
    var xValue = x;


    var yConservationMeasures = 25; 
    var yOther = 10; 

   
    var scoreConservation = (xValue / 2) * yConservationMeasures;
    var scoreOther = (xValue / 2) * yOther;


    scoreConservation = Math.min(scoreConservation, yConservationMeasures);
    scoreOther = Math.min(scoreOther, yOther);

    var totalScore = scoreConservation + scoreOther;

    scorebox1531.textContent = 'Score:' + totalScore.toFixed(2) + '';
});

document.addEventListener('DOMContentLoaded', function () {
    var scorebox1532 = document.getElementById("score_1532"); 
    var x = <?php echo $json_data_res1532 ?>; 

    var xValue = x;

   
    var yScopus = 25; 
    var yOtherPeerReviewed = 10; 


    var scoreScopus = (xValue / 2) * yScopus;
    var scoreOtherPeerReviewed = (xValue / 2) * yOtherPeerReviewed;

 
    scoreScopus = Math.min(scoreScopus, yScopus);
    scoreOtherPeerReviewed = Math.min(scoreOtherPeerReviewed, yOtherPeerReviewed);

    var totalScore = scoreScopus + scoreOtherPeerReviewed;

  
    scorebox1532.textContent = 'Score: ' + totalScore.toFixed(2) + '';
});


document.addEventListener('DOMContentLoaded', function () {
    var scorebox1541 = document.getElementById("score_1541");
    var x = <?php echo $json_data_res1541 ?>;

    var xValue = x;

   
    var yMaxScore = 15; 

  
    var totalScore = (xValue / 2) * yMaxScore;


    totalScore = Math.min(totalScore, yMaxScore);

    scorebox1541.textContent = 'Score: ' + totalScore.toFixed(2) + '';
});

document.addEventListener('DOMContentLoaded', function () {
    var scorebox1543 = document.getElementById("score_1543"); 
    var x = <?php echo $json_data_res1543 ?>; 
    var y = 2; 

    var implementedPractices = x; 

    var maxPoints = 15; 

    var totalScore = (implementedPractices * y) <= maxPoints ? implementedPractices * y : maxPoints;

    scorebox1543.textContent = 'Score:  ' + totalScore;
});

document.addEventListener('DOMContentLoaded', function () {
    var scorebox1551 = document.getElementById("score_1551"); 
    var x = <?php echo $json_data_res1521 ?>; 
    var y = 10; 

    var totalScore = x * y;

    scorebox1551.textContent = 'Score: ' + totalScore;
});

</script>