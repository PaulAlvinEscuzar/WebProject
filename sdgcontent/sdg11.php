<?php include '../includes/header.php';
include '../includes/db.php'; ?>
<div class="container">
    <div class="row-mt-5">
        <div class="container-xl" style="height:400px; background-color:#FD9D24;">
            <div class="row justify-content-center">
                <div class="co-md-5 text-center text-md-start text-light ps-5">
                    <h1>
                        <div class="display-5 mt-5 f2-bold text-gray" style="font-family:'Oswald', sans-serif;">Goal
                        </div>
                        <div class="display-5 f2-bold">11</div>
                        <div class="display-3 line-break fw-bold" style="margin-top:80px">Sustainable Cities and Communities
                        </div>
                    </h1>
                </div>
            </div>
        </div>
        <div class="container-lg bg-dark justify-content-center  fs-5 pt-2 pb-1">
            <ul class="nav nav-pills " id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                    <button class="nav-link active text-light fw-dark" style="letter-spacing :2px;"
                        id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button"
                        role="tab" aria-controls="pills-profile" aria-selected="true">Target</button>
                </li>
            </ul>
        </div>
        <div class="tab-content container-lg justify-content-center" id="pills-tabContent">
            <div class="tab-pane fade show active " id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="container d-grid" id="research311">


              <!-- research 11.1.1 -->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-11.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">11.1.1</h3>
                                    <!--Name of in every research-->
                                    <h4 class="fw-bolder">Research on Sustainable Cities and Communities</h4>
                                    <p></p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score_1111">Score:</h3>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research11.1.1`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_1111 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Research on Sustainable Cities and Communities: 
                                        <?php echo $totalRecord_1111 ?></h3>
                                    <?php
                                    $json_data_res1111 = json_encode($totalRecord_1111);

                                    $query1111 = "SELECT * FROM `research11.1.1`";
                                    $select1111 = mysqli_query($conn, $query1111);

                                    if (mysqli_num_rows($select1111) > 0) {
                                        while ($row = mysqli_fetch_assoc($select1111)) {
                                            $title = $row['title'];
                                            $author = $row['author'];
                                            $year_pub = $row['year_pub'];
                                            $no_citations = $row['no_citations'];
                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Title</span>
                                            <input type="text" class="form-control" value="<?php echo "$title"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Author</span>
                                            <input type="text" class="form-control" value="<?php echo "$author"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Year Publication</span>
                                            <input type="text" class="form-control" value="<?php echo "$year_pub"?>"
                                            readonly    aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Number of Citations</span>
                                            <input type="text" class="form-control" value="<?php echo "$no_citations"?>"
                                            readonly   aria-label="Username" aria-describedby="basic-addon1">
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
                <!-- research 11.1.2 -->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-11.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">11.2.1</h3>
                                    <h4 class="fw-bolder">Campus land use</h4>
                                    <p>Land use for existing buildings, facilities, other infrastructure within the jurisdiction of the campus including spaces, open and recreational spaces (in sqm)</p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research11_2_1`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_1112 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Research on Campus land use: 
                                        <?php echo $totalRecord_1112 ?></h3>
                                    <?php
                                    $json_data_res1112 = json_encode($totalRecord_1112);

                                    

                                    $query1112 = "SELECT * FROM `research11_2_1`";
                                    $select1112 = mysqli_query($conn, $query1112);

                                    if (mysqli_num_rows($select1112) > 0) {
                                        while ($row = mysqli_fetch_assoc($select1112)) {
                                            $campusLand = $row['campusLand'];
                                            $campusBuilding = $row['campusBuilding'];
                                            $campusVegetation = $row['campusVegetation'];
                                            $parkingArea = $row['parkingArea'];
                                            $pedestrianPath = $row['pedestrianPath'];
                                            $campusSettings = $row['campusSettings'];

                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total campus land area</span> 
                                            <input type="text" class="form-control" value="<?php echo "$campusLand"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total campus building area</span>
                                            <input type="text" class="form-control" value="<?php echo "$campusBuilding"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total area in campus covered in forest vegetation</span>
                                            <input type="text" class="form-control" value="<?php echo "$campusVegetation"?>"
                                            readonly    aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total ground parking area</span>
                                            <input type="text" class="form-control" value="<?php echo "$parkingArea"?>"
                                            readonly   aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of pedestrian paths on campus</span>
                                            <input type="text" class="form-control" value="<?php echo "$pedestrianPath"?>"
                                            readonly   aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Campus setting</span>
                                            <input type="text" class="form-control" value="<?php echo "$campusSettings"?>"
                                            readonly   aria-label="Username" aria-describedby="basic-addon1">
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

                <!-- research 11.3.1 -->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-11.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">11.3.1</h3>
                                    <h4 class="fw-bolder">Public Access to Building</h4>
                                    <p>Provide public access to buildings and/or monuments or natural heritage landscapes of cultural significance.</p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research11_3_1`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_1113 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Research on Public Access to Building: 
                                        <?php echo $totalRecord_1113 ?></h3>
                                    <?php
                                    $json_data_res1113 = json_encode($totalRecord_1113);
                                    $query1113 = "SELECT * FROM `research11_3_1`";
                                    $select1113 = mysqli_query($conn, $query1113);

                                    if (mysqli_num_rows($select1113) > 0) {
                                        while ($row = mysqli_fetch_assoc($select1113)) {
                                            $TotalNumBuild = $row['TotalNumBuild'];
                                            $TotalNumVisitor = $row['TotalNumVisitor'];

                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total campus land area</span> 
                                            <input type="text" class="form-control" value="<?php echo "$TotalNumBuild"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total campus building area</span>
                                            <input type="text" class="form-control" value="<?php echo "$TotalNumVisitor"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
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

                    <!-- research 11.3.2 -->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-11.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">11.3.2</h3>
                                    <h4 class="fw-bolder">Public access to libraries</h4>
                                    <p>Provide public access to libraries including books and publications</p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score_1132">Score:</h3>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research11_3_2`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_1132 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Research on Public access to libraries: 
                                        <?php echo $totalRecord_1132 ?></h3>
                                    <?php
                                    $json_data_res1132 = json_encode($totalRecord_1132);
                                    $query311 = "SELECT * FROM `research11_3_2`";
                                    $select311 = mysqli_query($conn, $query311);

                                    if (mysqli_num_rows($select311) > 0) {
                                        while ($row = mysqli_fetch_assoc($select311)) {
                                            $TotalNumInternal = $row['TotalNumInternal'];
                                            $TotalNumOfVisitor = $row['TotalNumOfVisitor'];
                                            $TotalNumOfBooks = $row['TotalNumOfBooks'];
                                            $TotalNumBorrowedGuest = $row['TotalNumBorrowedGuest'];

                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of internal stakeholders visiting the campus library (per month):</span> 
                                            <input type="text" class="form-control" value="<?php echo "$TotalNumInternal"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of visitors/guests visiting the campus library (per month):</span>
                                            <input type="text" class="form-control" value="<?php echo "$TotalNumOfVisitor"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of books/publications borrowed by internal stakeholders (per month):</span>
                                            <input type="text" class="form-control" value="<?php echo "$TotalNumOfBooks"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of books/publications borrowed by guests (per month):</span>
                                            <input type="text" class="form-control" value="<?php echo "$TotalNumBorrowedGuest"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
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

                    <!-- research 11.3.3 -->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-11.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">11.3.3</h3>
                                    <h4 class="fw-bolder">Public access to museums</h4>
                                    <p>Provide public access to museums, exhibition spaces or galleries, or works of art and artifacts.</p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score_1133">Score:</h3>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research11_3_3`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_1133 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Research on Public access to Museums: 
                                        <?php echo $totalRecord_1133 ?></h3>
                                    <?php
                                    $json_data_res1133 = json_encode($totalRecord_1133);
                                    $query1133 = "SELECT * FROM `research11_3_3`";
                                    $select1133 = mysqli_query($conn, $query1133);

                                    if (mysqli_num_rows($select1133) > 0) {
                                        while ($row = mysqli_fetch_assoc($select1133)) {
                                            $TotalNumInternalStakeholder = $row['TotalNumInternalStakeholder'];
                                            $TotalNumOfVisitorGuest = $row['TotalNumOfVisitorGuest'];

                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of internal stakeholders visiting the campus museum (per year)</span> 
                                            <input type="text" class="form-control" value="<?php echo "$TotalNumInternalStakeholder"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of visitors/guests visiting the campus museum (per year):</span>
                                            <input type="text" class="form-control" value="<?php echo "$TotalNumOfVisitorGuest"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
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

                    <!-- research 11.3.4 -->
                        <div class="d-inline-flex mt-3">
                            <div class="border border-dark w-100">
                                <div class=" d-inline-flex justify-content-start align-items-center">
                                    <img src="../includes/img/goal-11.png" class="p-4 d-block" width="150" alt="">
                                    <div class="d-grid ms-5 me-5">
                                        <p class="fw-normal">Target</p>
                                        <h3 class="fw-bold">11.3.4</h3>
                                        <h4 class="fw-bolder">Public access to green spaces</h4>
                                        <p>Provide free public access to open spaces and green spaces.</p>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                        id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    </button>
                                    <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                        <!-- Eto para madisplay yung data sa sdg content-->
                                        <h3 class="text-start ms-3" id="score1134">Score:</h3>
                                        <?php
                                        $sql = "SELECT COUNT(*) AS total FROM `research11_3_4`";
                                        $result = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            $row = $result->fetch_assoc();
                                            $totalRecord_1134 = $row['total'];
                                        }
                                        ?>
                                        <h3 class="text-start ms-3">Research on Public access to green spaces: 
                                            <?php echo $totalRecord_1134 ?></h3>
                                        <?php
                                        $json_data_res1134 = json_encode($totalRecord_1134);

                                        $query1134 = "SELECT * FROM `research11_3_4`";
                                        $select1134 = mysqli_query($conn, $query1134);

                                        if (mysqli_num_rows($select1134) > 0) {
                                            while ($row = mysqli_fetch_assoc($select1134)) {
                                                $no_school_act = $row['no_school_act'];
                                                $no_event = $row['no_event'];

                                        ?>
                                        <div class="container d-grid mt-3">
                                            <div class="border border-dark p-3">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number of school activities held at campus open/green spaces:</span> 
                                                <input type="text" class="form-control" value="<?php echo "$no_school_act"?>"
                                                    readonly aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number of events open to general public held at campus open/green spaces:</span>
                                                <input type="text" class="form-control" value="<?php echo "$no_event"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
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

                    <!-- research 11.3.5 -->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-11.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">11.3.5</h3>
                                    <h4 class="fw-bolder">Arts and heritage contribution</h4>
                                    <p>Contribute to local arts, in terms of number of annual performances of campus choir, theater groups, orchestras etc. either ad-hoc or as part of ongoing programme</p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score1135">Score:</h3>
                                        <?php
                                        $sql = "SELECT COUNT(*) AS total FROM `research11_3_5`";
                                        $result = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            $row = $result->fetch_assoc();
                                            $totalRecord_1135 = $row['total'];
                                        }
                                        ?>
                                        <h3 class="text-start ms-3">Research on Arts and heritage contribution: 
                                            <?php echo $totalRecord_1135 ?></h3>
                                        <?php
                                        $json_data_res1135 = json_encode($totalRecord_1135);

                                    $query1135 = "SELECT * FROM `research11_3_5`";
                                    $select1135 = mysqli_query($conn, $query1135);

                                    if (mysqli_num_rows($select1135) > 0) {
                                        while ($row = mysqli_fetch_assoc($select1135)) {
                                            $num_of_performances = $row['num_of_performances'];
                                            $num_of_perfomers = $row['num_of_perfomers'];
                                            $num_of_choir_internal = $row['num_of_choir_internal'];
                                            $num_of_choir_external = $row['num_of_choir_external'];
                                            $num_of_theater_internal = $row['num_of_theater_internal'];
                                            $num_of_theater_external = $row['num_of_theater_external'];
                                            $num_of_dance_internal = $row['num_of_dance_internal'];
                                            $num_of_dance_external = $row['num_of_dance_external'];
                                            $num_of_band_internal = $row['num_of_band_internal'];
                                            $num_of_band_external = $row['num_of_band_external'];
                                            $num_of_paintings = $row['num_of_paintings'];
                                            $val_of_paintings = $row['val_of_paintings'];

                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of performances:</span> 
                                            <input type="text" class="form-control" value="<?php echo "$num_of_performances"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of performers:</span>
                                            <input type="text" class="form-control" value="<?php echo "$num_of_perfomers"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                        <span class="input-group-text"><i class=""></i>Total number of campus choir performances (with list of events)</span>
                                            <span class="input-group-text" id="basic-addon1">Internal</span> 
                                            <input type="text" class="form-control" value="<?php echo "$num_of_choir_internal"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                                <span class="input-group-text" id="basic-addon1">External</span> 
                                            <input type="text" class="form-control" value="<?php echo "$num_of_choir_internal"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        
                                        <div class="input-group mb-3">
                                        <span class="input-group-text"><i class=""></i>Total number of campus theater groups performances (with list of events)</span>
                                            <span class="input-group-text" id="basic-addon1">Internal</span> 
                                            <input type="text" class="form-control" value="<?php echo "$num_of_theater_internal"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                                <span class="input-group-text" id="basic-addon1">External</span> 
                                            <input type="text" class="form-control" value="<?php echo "$num_of_theater_external"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>

                                        <div class="input-group mb-3">
                                        <span class="input-group-text"><i class=""></i>Total number of campus dance group performances (with list of events)</span>
                                            <span class="input-group-text" id="basic-addon1">Internal</span> 
                                            <input type="text" class="form-control" value="<?php echo "$num_of_dance_internal"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                                <span class="input-group-text" id="basic-addon1">External</span> 
                                            <input type="text" class="form-control" value="<?php echo "$num_of_dance_external"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>

                                        <div class="input-group mb-3">
                                        <span class="input-group-text"><i class=""></i>Total number of campus band group performances (with list of events)</span>
                                            <span class="input-group-text" id="basic-addon1">Internal</span> 
                                            <input type="text" class="form-control" value="<?php echo "$num_of_band_internal"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                                <span class="input-group-text" id="basic-addon1">External</span> 
                                            <input type="text" class="form-control" value="<?php echo "$num_of_band_external"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>

                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of donated paintings and sculptures to community museums:</span> 
                                            <input type="text" class="form-control" value="<?php echo "$num_of_paintings"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total amount value of donated paintings and sculptures:</span>
                                            <input type="text" class="form-control" value="<?php echo "$val_of_paintings"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
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

                    <!-- research 11.3.6 -->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-11.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">11.3.6</h3>
                                    <h4 class="fw-bolder">Record and preserve cultural heritage</h4>
                                    <p>Deliver projects to record and preserve intangible cultural heritage such as local folklore, traditions, language, and knowledge. This can include the heritage of displaced communities.</p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score1136">Score:</h3>
                                        <?php
                                        $sql = "SELECT COUNT(*) AS total FROM `research11_3_6`";
                                        $result = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            $row = $result->fetch_assoc();
                                            $totalRecord_1136 = $row['total'];
                                        }
                                        ?>
                                        <h3 class="text-start ms-3">Research on Record and preserve cultural heritage: 
                                            <?php echo $totalRecord_1136 ?></h3>
                                        <?php
                                        $json_data_res1136 = json_encode($totalRecord_1136);

                                    $query1136 = "SELECT * FROM `research11_3_6`";
                                    $select1136 = mysqli_query($conn, $query1136);

                                    if (mysqli_num_rows($select1136) > 0) {
                                        while ($row = mysqli_fetch_assoc($select1136)) {
                                            $num_of_projects = $row['num_of_projects'];
                                            $title_of_projects = $row['title_of_projects'];
                                            $short_des = $row['short_des'];
                                            $total_cost = $row['total_cost'];
                                            $fund_source = $row['fund_source'];

                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of projects intended to preserve cultural heritage:</span> 
                                            <input type="text" class="form-control" value="<?php echo "$num_of_projects"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Title of project:</span>
                                            <input type="text" class="form-control" value="<?php echo "$title_of_projects"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Short description:</span>
                                            <input type="text" class="form-control" value="<?php echo "$short_des"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total cost:</span>
                                            <input type="text" class="form-control" value="<?php echo "$total_cost"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Fund source:</span>
                                            <input type="text" class="form-control" value="<?php echo "$fund_source"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
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

                    <!-- research 11.3.7 -->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-11.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">11.3.7</h3>
                                    <h4 class="fw-bolder">Other campus’ support for arts and heritage</h4>
                                    <p>Provide additional support to promote arts and heritage</p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score1137">Score:</h3>
                                        <?php
                                        $sql = "SELECT COUNT(*) AS total FROM `research11_3_7`";
                                        $result = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            $row = $result->fetch_assoc();
                                            $totalRecord_1137 = $row['total'];
                                        }
                                        ?>
                                        <h3 class="text-start ms-3">Research on Other campus’ support for arts and heritage: 
                                            <?php echo $totalRecord_1137 ?></h3>
                                        <?php
                                        $json_data_res1137 = json_encode($totalRecord_1137);

                                    $query1137 = "SELECT * FROM `research11_3_7`";
                                    $select1137 = mysqli_query($conn, $query1137);

                                    if (mysqli_num_rows($select1137) > 0) {
                                        while ($row = mysqli_fetch_assoc($select1137)) {
                                            $other_total_Num = $row['other_total_Num'];
                                            $Other_PPA_Title = $row['Other_PPA_Title'];
                                            $other_short_des = $row['other_short_des'];
                                            $other_total_cost = $row['other_total_cost'];
                                            $other_fund_source = $row['other_fund_source'];

                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of other support for arts and heritage:</span> 
                                            <input type="text" class="form-control" value="<?php echo "$other_total_Num"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Title of PPA:</span> 
                                            <input type="text" class="form-control" value="<?php echo "$Other_PPA_Title"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Short Description:</span>
                                            <input type="text" class="form-control" value="<?php echo "$other_short_des"?>"
                                            readonly aria-label="Username" aria-describedby="basic-short_des">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total cost:</span>
                                            <input type="text" class="form-control" value="<?php echo "$other_total_cost"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Fund source:</span>
                                            <input type="text" class="form-control" value="<?php echo "$other_fund_source"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
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

                    <!-- research 11.4.1 -->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-11.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">11.4.1</h3>
                                    <h4 class="fw-bolder">Arts and heritage expenditure</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score1138">Score:</h3>
                                        <?php
                                        $sql = "SELECT COUNT(*) AS total FROM `research11_3_8`";
                                        $result = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            $row = $result->fetch_assoc();
                                            $totalRecord_1138 = $row['total'];
                                        }
                                        ?>
                                        <h3 class="text-start ms-3">Research on Arts and heritage expenditure: 
                                            <?php echo $totalRecord_1138 ?></h3>
                                        <?php
                                        $json_data_res1138 = json_encode($totalRecord_1138);

                                    $query1138 = "SELECT * FROM `research11_3_8`";
                                    $select1138 = mysqli_query($conn, $query1138);

                                    if (mysqli_num_rows($select1138) > 0) {
                                        while ($row = mysqli_fetch_assoc($select1138)) {
                                            $TotalCampus = $row['TotalCampus'];
                                            $AllocBudget = $row['AllocBudget'];
                                            $CampusExpen = $row['CampusExpen'];
 

                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total campus expenditure on arts and heritage:</span> 
                                            <input type="text" class="form-control" value="<?php echo "$TotalCampus"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">% of the total allocated budget for arts and heritage was utilized.</span> 
                                            <input type="text" class="form-control" value="<?php echo "$AllocBudget"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">% of total campus expenditure was allotted to arts and heritage.</span>
                                            <input type="text" class="form-control" value="<?php echo "$CampusExpen"?>"
                                            readonly aria-label="Username" aria-describedby="basic-short_des">
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

                    <!-- research 11.5.1 -->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-11.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">11.5.1</h3>
                                    <h4 class="fw-bolder">Sustainable practices targets</h4>
                                    <p>Measure and set targets for more sustainable commuting</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
   
                    <!-- research 11.5.1.1 -->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-11.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">11.5.1.1</h3>
                                    <h4 class="fw-bolder">Student commuting practices</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research11_3_9`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_1139 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Research on Student commuting practices: 
                                        <?php echo $totalRecord_1139 ?></h3>
                                    <?php
                                    $json_data_res1139 = json_encode($totalRecord_1139);
                                    $query1139 = "SELECT * FROM `research11_3_9`";
                                    $select1139 = mysqli_query($conn, $query1139);

                                    if (mysqli_num_rows($select1139) > 0) {
                                        while ($row = mysqli_fetch_assoc($select1139)) {
                                            $StudWalk = $row['StudWalk'];
                                            $StudBike = $row['StudBike'];
                                            $StudCommute = $row['StudCommute'];
                                            $StudVehicle = $row['StudVehicle'];
                                            $StudCarpools = $row['StudCarpools'];
                                            $StudPopWalk = $row['StudPopWalk'];
                                            $StudPopBike = $row['StudPopBike'];
                                            $StudPopCommute = $row['StudPopCommute'];
                                            $StudPopVehicle = $row['StudPopVehicle'];
                                            $StudPopCarpools = $row['StudPopCarpools'];
 

                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of students who walk to school:</span> 
                                            <input type="text" class="form-control" value="<?php echo "$StudWalk"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of students who use bicycle:</span> 
                                            <input type="text" class="form-control" value="<?php echo "$StudBike"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of students who commute:</span>
                                            <input type="text" class="form-control" value="<?php echo "$StudCommute"?>"
                                            readonly aria-label="Username" aria-describedby="basic-short_des">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of students who use their own vehicle:</span> 
                                            <input type="text" class="form-control" value="<?php echo "$StudVehicle"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of students who carpools:</span> 
                                            <input type="text" class="form-control" value="<?php echo "$StudCarpools"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">% of total student population walks to school</span>
                                            <input type="text" class="form-control" value="<?php echo "$StudPopWalk"?>"
                                            readonly aria-label="Username" aria-describedby="basic-short_des">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">% of total student population use bicycle to go to school</span> 
                                            <input type="text" class="form-control" value="<?php echo "$StudPopBike"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">% of total student population commute to school</span> 
                                            <input type="text" class="form-control" value="<?php echo "$StudPopCommute"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">% of total student population use their own vehicle to go to school</span>
                                            <input type="text" class="form-control" value="<?php echo "$StudPopVehicle"?>"
                                            readonly aria-label="Username" aria-describedby="basic-short_des">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">% of the total student population carpools with relatives/friends to go to school.</span>
                                            <input type="text" class="form-control" value="<?php echo "$StudPopCarpools"?>"
                                            readonly aria-label="Username" aria-describedby="basic-short_des">
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

                    <!-- research 11.5.1.2 -->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-11.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">11.5.1.2</h3>
                                    <h4 class="fw-bolder">Employee commuting practices</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research11_4_0`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_1140 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Research on Employee commuting practices: 
                                        <?php echo $totalRecord_1140 ?></h3>
                                    <?php
                                    $json_data_res1140 = json_encode($totalRecord_1140);
                                    $query1140 = "SELECT * FROM `research11_4_0`";
                                    $select1140 = mysqli_query($conn, $query1140);

                                    if (mysqli_num_rows($select1140) > 0) {
                                        while ($row = mysqli_fetch_assoc($select1140)) {
                                            $emp_walk = $row['emp_walk'];
                                            $emp_bicycle = $row['emp_bicycle'];
                                            $emp_commute = $row['emp_commute'];
                                            $emp_vehicle = $row['emp_vehicle'];
                                            $emp_carpools = $row['emp_carpools'];
                                            $prct_walks = $row['prct_walks'];
                                            $prct_bicycle = $row['prct_bicycle'];
                                            $prct_commute = $row['prct_commute'];
                                            $prct_vehicle = $row['prct_vehicle'];
                                            $prct_carpools = $row['prct_carpools'];
 

                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of employee who walk to school:</span> 
                                            <input type="text" class="form-control" value="<?php echo "$emp_walk"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of employee who use bicycle:</span> 
                                            <input type="text" class="form-control" value="<?php echo "$emp_bicycle"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of employee who commute:</span>
                                            <input type="text" class="form-control" value="<?php echo "$emp_commute"?>"
                                            readonly aria-label="Username" aria-describedby="basic-short_des">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of employee who use their own vehicle:</span> 
                                            <input type="text" class="form-control" value="<?php echo "$emp_vehicle"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of employee who carpools:</span> 
                                            <input type="text" class="form-control" value="<?php echo "$emp_carpools"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">% of total employee population walks to school</span>
                                            <input type="text" class="form-control" value="<?php echo "$prct_walks"?>"
                                            readonly aria-label="Username" aria-describedby="basic-short_des">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">% of total employee population use bicycle to go to school</span> 
                                            <input type="text" class="form-control" value="<?php echo "$prct_bicycle"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">% of total employee population commute to school</span> 
                                            <input type="text" class="form-control" value="<?php echo "$prct_commute"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">% of total employee population use their own vehicle to go to school</span>
                                            <input type="text" class="form-control" value="<?php echo "$prct_vehicle"?>"
                                            readonly aria-label="Username" aria-describedby="basic-short_des">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">% of the total employee population carpools with relatives/friends to go to school.</span>
                                            <input type="text" class="form-control" value="<?php echo "$prct_carpools"?>"
                                            readonly aria-label="Username" aria-describedby="basic-short_des">
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

                    <!-- research 11.5.1.3 -->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-11.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">11.5.1.3</h3>
                                    <h4 class="fw-bolder">Campus population commuting practices</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research11_4_1`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_1141 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Research on Campus population commuting practices: 
                                        <?php echo $totalRecord_1141 ?></h3>
                                    <?php
                                    $json_data_res1141 = json_encode($totalRecord_1141);
                                    $query1140 = "SELECT * FROM `research11_4_1`";
                                    $select1140 = mysqli_query($conn, $query1140);

                                    if (mysqli_num_rows($select1140) > 0) {
                                        while ($row = mysqli_fetch_assoc($select1140)) {
                                            $prct_walks = $row['prct_walks'];
                                            $prct_bicycle = $row['prct_bicycle'];
                                            $prct_commute = $row['prct_commute'];
                                            $prct_vehicle = $row['prct_vehicle'];
                                            $prct_carpools = $row['prct_carpools'];
 

                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">% total campus population walks to school: </span> 
                                            <input type="text" class="form-control" value="<?php echo "$prct_walks"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">% total campus population use bicycle to go to school:</span> 
                                            <input type="text" class="form-control" value="<?php echo "$prct_bicycle"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">% total campus population commute to school:</span>
                                            <input type="text" class="form-control" value="<?php echo "$prct_commute"?>"
                                            readonly aria-label="Username" aria-describedby="basic-short_des">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">% total campus population use their own vehicle to go to school:</span> 
                                            <input type="text" class="form-control" value="<?php echo "$prct_vehicle"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">% total campus population carpools with relatives/friends to go to school:</span> 
                                            <input type="text" class="form-control" value="<?php echo "$prct_carpools"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
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

                    <!-- research 11.5.2 -->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-11.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">11.5.2</h3>
                                    <h4 class="fw-bolder">Promote sustainable commuting</h4>
                                    <p>Undertake actions to promote more sustainable commuting</p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score1142">Score:</h3>
                                        <?php
                                        $sql = "SELECT COUNT(*) AS total FROM `research11_4_2`";
                                        $result = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            $row = $result->fetch_assoc();
                                            $totalRecord_1142 = $row['total'];
                                        }
                                        ?>
                                        <h3 class="text-start ms-3">Research on Promote sustainable commuting: 
                                            <?php echo $totalRecord_1142 ?></h3>
                                        <?php
                                        $json_data_res1142 = json_encode($totalRecord_1142);
                                        
                                    $query1142 = "SELECT * FROM `research11_4_2`";
                                    $select1142 = mysqli_query($conn, $query1142);

                                    if (mysqli_num_rows($select1142) > 0) {
                                        while ($row = mysqli_fetch_assoc($select1142)) {
                                            $num_ppa = $row['num_ppa'];
                                            $t_ppa = $row['t_ppa'];
                                            $short_des = $row['short_des'];
                                            $total_cost = $row['total_cost'];
                                            $fund_src = $row['fund_src'];

                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of PPAs that promotes sustainable commuting:</span> 
                                            <input type="text" class="form-control" value="<?php echo "$num_ppa"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Title of project:</span>
                                            <input type="text" class="form-control" value="<?php echo "$t_ppa"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Short description:</span>
                                            <input type="text" class="form-control" value="<?php echo "$short_des"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total cost:</span>
                                            <input type="text" class="form-control" value="<?php echo "$total_cost"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Fund source:</span>
                                            <input type="text" class="form-control" value="<?php echo "$fund_src"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
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

                    <!-- research 11.5.3 -->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-11.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">11.5.3</h3>
                                    <h4 class="fw-bolder">Allow remote working</h4>
                                    <p>Promote or allow telecommuting or remote working for employees as a matter of policy or standard practice, or offer a condensed working week to reduce employee commuting.</p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score1143">Score:</h3>
                                        <?php
                                        $sql = "SELECT COUNT(*) AS total FROM `research11_4_3`";
                                        $result = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            $row = $result->fetch_assoc();
                                            $totalRecord_1143 = $row['total'];
                                        }
                                        ?>
                                        <h3 class="text-start ms-3">Research on Allow remote working: 
                                            <?php echo $totalRecord_1143 ?></h3>
                                        <?php
                                        $json_data_res1143 = json_encode($totalRecord_1143);

                                    $query1143 = "SELECT * FROM `research11_4_3`";
                                    $select1143 = mysqli_query($conn, $query1143);

                                    if (mysqli_num_rows($select1143) > 0) {
                                        while ($row = mysqli_fetch_assoc($select1143)) {
                                            $num_ppa = $row['num_ppa'];
                                            $t_ppa = $row['t_ppa'];
                                            $short_des = $row['short_des'];
                                            $total_cost = $row['total_cost'];
                                            $fund_src = $row['fund_src'];
                                            

                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of PPAs that promotes sustainable commuting:</span> 
                                            <input type="text" class="form-control" value="<?php echo "$num_ppa"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Title of project:</span>
                                            <input type="text" class="form-control" value="<?php echo "$t_ppa"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Short description:</span>
                                            <input type="text" class="form-control" value="<?php echo "$short_des"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total cost:</span>
                                            <input type="text" class="form-control" value="<?php echo "$total_cost"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Fund source:</span>
                                            <input type="text" class="form-control" value="<?php echo "$fund_src"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
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

                    <!-- research 11.5.4 -->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-11.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">11.5.4</h3>
                                    <h4 class="fw-bolder">Proportion of employees that practice remote working</h4>
                                    <p>Measure and set targets for remote working practices of employees</p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score1144">Score:</h3>
                                        <?php
                                        $sql = "SELECT COUNT(*) AS total FROM `research11_4_4`";
                                        $result = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            $row = $result->fetch_assoc();
                                            $totalRecord_1144 = $row['total'];
                                        }
                                        ?>
                                        <h3 class="text-start ms-3">Research on Proportion of employees that practice remote working: 
                                            <?php echo $totalRecord_1144 ?></h3>
                                        <?php
                                        $json_data_res1144 = json_encode($totalRecord_1144);

                                    $query1144 = "SELECT * FROM `research11_4_4`";
                                    $select1144 = mysqli_query($conn, $query1144);

                                    if (mysqli_num_rows($select1144) > 0) {
                                        while ($row = mysqli_fetch_assoc($select1144)) {
                                            $num_work_arr = $row['num_work_arr'];
                                            $num_work_remotely = $row['num_work_remotely'];
                                            $num_working_week = $row['num_working_week'];
                                            $num_working_arr = $row['num_working_arr'];
                                            

                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of employees that practice flexible work arrangements:</span> 
                                            <input type="text" class="form-control" value="<?php echo "$num_work_arr"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number or employees that work remotely:</span>
                                            <input type="text" class="form-control" value="<?php echo "$num_work_remotely"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of employees that practice condensed working week:</span>
                                            <input type="text" class="form-control" value="<?php echo "$num_working_week"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">% of the employee population practice sustainable working arrangements.</span>
                                            <input type="text" class="form-control" value="<?php echo "$num_working_arr"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
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


                    <!-- research 11.5.5 -->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-11.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">11.5.5</h3>
                                    <h4 class="fw-bolder">Affordable housing for employees</h4>
                                    <p>Provide affordable housing for employees</p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score1145">Score:</h3>
                                        <?php
                                        $sql = "SELECT COUNT(*) AS total FROM `research11_4_5`";
                                        $result = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            $row = $result->fetch_assoc();
                                            $totalRecord_1145 = $row['total'];
                                        }
                                        ?>
                                        <h3 class="text-start ms-3">Research on Affordable housing for employees: 
                                            <?php echo $totalRecord_1145 ?></h3>
                                        <?php
                                        $json_data_res1145 = json_encode($totalRecord_1145);

                                    $query1145 = "SELECT * FROM `research11_4_5`";
                                    $select1145 = mysqli_query($conn, $query1145);

                                    if (mysqli_num_rows($select1145) > 0) {
                                        while ($row = mysqli_fetch_assoc($select1145)) {
                                            $emp_ownHouse = $row['emp_ownHouse'];
                                            $emp_Relatives = $row['emp_Relatives'];
                                            $emp_board = $row['emp_board'];
                                            $emp_rent = $row['emp_rent'];
                                            $emp_dorm = $row['emp_dorm'];
                                            $Pemp_ownHouse = $row['Pemp_ownHouse'];
                                            $Pemp_Relatives = $row['Pemp_Relatives'];
                                            $Pemp_board = $row['Pemp_board'];
                                            $Pemp_rent = $row['Pemp_rent'];
                                            $Pemp_dorm = $row['Pemp_dorm'];
                                            $PPA_housing = $row['PPA_housing'];
                                            $emp_provided = $row['emp_provided'];
                                            $titlePPA = $row['titlePPA'];
                                            $short_descrip = $row['short_descrip'];
                                            $Totalcost = $row['Totalcost'];
                                            $Fund_source = $row['Fund_source'];
                                            

                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of employees who live in their own house:</span> 
                                            <input type="text" class="form-control" value="<?php echo "$emp_ownHouse"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of employee who are living with their relatives:</span>
                                            <input type="text" class="form-control" value="<?php echo "$emp_Relatives"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of employee who stays at the boarding house:</span>
                                            <input type="text" class="form-control" value="<?php echo "$emp_board"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of employee who rents apartment:</span>
                                            <input type="text" class="form-control" value="<?php echo "$emp_rent"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of employee who stays at the dormitory:</span>
                                            <input type="text" class="form-control" value="<?php echo "$emp_dorm"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">% of the employee population live in their own house.</span>
                                            <input type="text" class="form-control" value="<?php echo "$Pemp_ownHouse"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">% of the employee population are living with their relatives.</span>
                                            <input type="text" class="form-control" value="<?php echo "$Pemp_Relatives"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">% of the employee population stays at the boarding house.</span>
                                            <input type="text" class="form-control" value="<?php echo "$Pemp_board"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">% of the employee population rent in the apartment.</span>
                                            <input type="text" class="form-control" value="<?php echo "$Pemp_rent"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">% of the employee population stays at the dormitory.</span>
                                            <input type="text" class="form-control" value="<?php echo "$Pemp_dorm"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of PPAs for affordable housing for employees:</span>
                                            <input type="text" class="form-control" value="<?php echo "$PPA_housing"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of employees provided with housing:</span>
                                            <input type="text" class="form-control" value="<?php echo "$emp_provided"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Title of project:</span>
                                            <input type="text" class="form-control" value="<?php echo "$titlePPA"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Short description:</span>
                                            <input type="text" class="form-control" value="<?php echo "$short_descrip"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total cost:</span>
                                            <input type="text" class="form-control" value="<?php echo "$Totalcost"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Fund source:</span>
                                            <input type="text" class="form-control" value="<?php echo "$fund_source"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
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

                    <!-- research 11.5.6 -->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-11.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">11.5.6</h3>
                                    <h4 class="fw-bolder">Affordable housing for students</h4>
                                    <p>Provide affordable housing for students</p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score1146">Score:</h3>
                                        <?php
                                        $sql = "SELECT COUNT(*) AS total FROM `research11_4_6`";
                                        $result = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            $row = $result->fetch_assoc();
                                            $totalRecord_1146 = $row['total'];
                                        }
                                        ?>
                                        <h3 class="text-start ms-3">Research on Affordable housing for students: 
                                            <?php echo $totalRecord_1146 ?></h3>
                                        <?php
                                        $json_data_res1146 = json_encode($totalRecord_1146);

                                    $query1146 = "SELECT * FROM `research11_4_6`";
                                    $select1146 = mysqli_query($conn, $query1146);

                                    if (mysqli_num_rows($select1146) > 0) {
                                        while ($row = mysqli_fetch_assoc($select1146)) {
                                            $stud_ownHouse = $row['stud_ownHouse'];
                                            $stud_Relatives = $row['stud_Relatives'];
                                            $stud_board = $row['stud_board'];
                                            $stud_rent = $row['stud_rent'];
                                            $stud_dorm = $row['stud_dorm'];
                                            $studPemp_ownHouse = $row['studPemp_ownHouse'];
                                            $studPemp_Relatives = $row['studPemp_Relatives'];
                                            $studPemp_board = $row['studPemp_board'];
                                            $studPemp_rent = $row['studPemp_rent'];
                                            $studPemp_dorm = $row['studPemp_dorm'];
                                            $studPPA_housing = $row['studPPA_housing'];
                                            $stud_provided = $row['stud_provided'];
                                            $stud_titlePPA = $row['stud_titlePPA'];
                                            $stud_short_descrip = $row['stud_short_descrip'];
                                            $stud_Totalcost = $row['stud_Totalcost'];
                                            $stud_Fund_source = $row['stud_Fund_source'];
                                            

                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of students who live in their own house:</span> 
                                            <input type="text" class="form-control" value="<?php echo "$stud_ownHouse"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of students who are living with their relatives:</span>
                                            <input type="text" class="form-control" value="<?php echo "$stud_Relatives"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of students who stays at the boarding house:</span>
                                            <input type="text" class="form-control" value="<?php echo "$stud_board"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of students who rents apartment:</span>
                                            <input type="text" class="form-control" value="<?php echo "$stud_rent"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of students who stays at the dormitory:</span>
                                            <input type="text" class="form-control" value="<?php echo "$stud_dorm"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">% of the students population live in their own house.</span>
                                            <input type="text" class="form-control" value="<?php echo "$studPemp_ownHouse"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">% of the students population are living with their relatives.</span>
                                            <input type="text" class="form-control" value="<?php echo "$studPemp_Relatives"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">% of the students population stays at the boarding house.</span>
                                            <input type="text" class="form-control" value="<?php echo "$studPemp_board"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">% of the students population rent in the apartment.</span>
                                            <input type="text" class="form-control" value="<?php echo "$studPemp_rent"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">% of the students population stays at the dormitory.</span>
                                            <input type="text" class="form-control" value="<?php echo "$studPemp_dorm"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of PPAs for affordable housing for students:</span>
                                            <input type="text" class="form-control" value="<?php echo "$studPPA_housing"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of students provided with housing:</span>
                                            <input type="text" class="form-control" value="<?php echo "$stud_provided"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Title of project:</span>
                                            <input type="text" class="form-control" value="<?php echo "$stud_titlePPA"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Short description:</span>
                                            <input type="text" class="form-control" value="<?php echo "$stud_short_descrip"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total cost:</span>
                                            <input type="text" class="form-control" value="<?php echo "$stud_Totalcost"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Fund source:</span>
                                            <input type="text" class="form-control" value="<?php echo "$stud_Fund_source"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
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

                    <!-- research 11.5.7 -->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-11.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">11.5.7</h3>
                                    <h4 class="fw-bolder">Pedestrian priority on campus</h4>
                                    <p>Prioritize pedestrian access on campus.</p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score1147">Score:</h3>
                                        <?php
                                        $sql = "SELECT COUNT(*) AS total FROM `research11_5_7`";
                                        $result = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            $row = $result->fetch_assoc();
                                            $totalRecord_1147 = $row['total'];
                                        }
                                        ?>
                                        <h3 class="text-start ms-3">Research on Affordable housing for employees: 
                                            <?php echo $totalRecord_1147 ?></h3>
                                        <?php
                                        $json_data_res1147 = json_encode($totalRecord_1147);

                                    $query1147 = "SELECT * FROM `research11_5_7`";
                                    $select1147 = mysqli_query($conn, $query1147);

                                    if (mysqli_num_rows($select1147) > 0) {
                                        while ($row = mysqli_fetch_assoc($select1147)) {
                                            $totalPed = $row['totalPed'];
                                            $totalPed_PPA = $row['totalPed_PPA'];
                                            $PED_PPA = $row['PED_PPA'];
                                            $PED_SHORTDESCRIP = $row['PED_SHORTDESCRIP'];
                                            $ped_totalcost = $row['ped_totalcost'];
                                            $pedFund = $row['pedFund'];

                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of pedestrian access in campus:</span> 
                                            <input type="text" class="form-control" value="<?php echo "$totalPed"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of PPAs prioritizing pedestrian access in the campus:</span> 
                                            <input type="text" class="form-control" value="<?php echo "$totalPed_PPA"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Title of PPA:</span> 
                                            <input type="text" class="form-control" value="<?php echo "$PED_PPA"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Short Description:</span>
                                            <input type="text" class="form-control" value="<?php echo "$PED_SHORTDESCRIP"?>"
                                            readonly aria-label="Username" aria-describedby="basic-short_des">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total cost:</span>
                                            <input type="text" class="form-control" value="<?php echo "$ped_totalcost"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Fund source:</span>
                                            <input type="text" class="form-control" value="<?php echo "$pedFund"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
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

                    <!-- research 11.5.8 -->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-11.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">11.5.8</h3>
                                    <h4 class="fw-bolder">Local authority collaboration regarding planning and development</h4>
                                    <p>Work with local authorities to address planning issues and development, including ensuring that local residents are able to access affordable housing</p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score1148">Score:</h3>
                                        <?php
                                        $sql = "SELECT COUNT(*) AS total FROM `research11_5_8`";
                                        $result = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            $row = $result->fetch_assoc();
                                            $totalRecord_1148 = $row['total'];
                                        }
                                        ?>
                                        <h3 class="text-start ms-3">Research on Local authority collaboration regarding planning and development: 
                                            <?php echo $totalRecord_1148 ?></h3>
                                        <?php
                                        $json_data_res1148 = json_encode($totalRecord_1148);
                                        
                                    $query1148 = "SELECT * FROM `research11_5_8`";
                                    $select1148 = mysqli_query($conn, $query1148);

                                    if (mysqli_num_rows($select1148) > 0) {
                                        while ($row = mysqli_fetch_assoc($select1148)) {
                                            $num_of_collab = $row['num_of_collab'];

                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of collaborations with local authority for the affordable housing for employees and students:</span> 
                                            <input type="text" class="form-control" value="<?php echo "$num_of_collab"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
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

                     <!-- research 11.5.9 -->
                     <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-11.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">11.5.9</h3>
                                    <h4 class="fw-bolder">Planning development-new build standards</h4>
                                    <p>Build new buildings to sustainable standards. This could be policies and practices that the campus chose to adhere to, or from evidence of prior development.</p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score1149">Score:</h3>
                                        <?php
                                        $sql = "SELECT COUNT(*) AS total FROM `research11_5_9`";
                                        $result = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            $row = $result->fetch_assoc();
                                            $totalRecord_1149 = $row['total'];
                                        }
                                        ?>
                                        <h3 class="text-start ms-3">Research on Local authority collaboration regarding planning and development: 
                                            <?php echo $totalRecord_1149 ?></h3>
                                        <?php
                                        $json_data_res1149 = json_encode($totalRecord_1149);

                                    $query1149 = "SELECT * FROM `research11_5_9`";
                                    $select1149 = mysqli_query($conn, $query1149);

                                    if (mysqli_num_rows($select1149) > 0) {
                                        while ($row = mysqli_fetch_assoc($select1149)) {
                                            $TotalNumPol = $row['TotalNumPol'];
                                            $TotalNumPrac = $row['TotalNumPrac'];

                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of policies and/or plans in adhering to sustainable standards of new builds:</span> 
                                            <input type="text" class="form-control" value="<?php echo "$TotalNumPol"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of campus practices for sustainable standards of new builds:</span> 
                                            <input type="text" class="form-control" value="<?php echo "$TotalNumPrac"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
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

                    <!-- research 11.5.10 -->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-11.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">11.5.10</h3>
                                    <h4 class="fw-bolder">Build on brownfield sites</h4>
                                    <p>Build on brownfield sites, where possible. This could be policies and practices that the campus chose to adhere to, or from evidence of prior development.</p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research11_5_10`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_1150 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Research on Build on brownfield sites: 
                                        <?php echo $totalRecord_1150 ?></h3>
                                    <?php
                                    $json_data_res1150 = json_encode($totalRecord_1150);
                                    $query1150 = "SELECT * FROM `research11_5_10`";
                                    $select1150 = mysqli_query($conn, $query1150);

                                    if (mysqli_num_rows($select1150) > 0) {
                                        while ($row = mysqli_fetch_assoc($select1150)) {
                                            $TotalNum_Brownfield = $row['TotalNum_Brownfield'];
                                            $totalnum_Infas = $row['totalnum_Infas'];
                                            $brownTotal = $row['brownTotal'];
                                            $brownFund = $row['brownFund'];

                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of policies and/or plans in building infrastructure on brownfield sites:</span> 
                                            <input type="text" class="form-control" value="<?php echo "$TotalNum_Brownfield"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of campus infrastructure built on brownfield sites:</span> 
                                            <input type="text" class="form-control" value="<?php echo "$totalnum_Infas"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total Cost:</span> 
                                            <input type="text" class="form-control" value="<?php echo "$brownTotal"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Fund Source:</span> 
                                            <input type="text" class="form-control" value="<?php echo "$brownFund"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
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

                    

                    <script>
                        //research 11.1.1
                       document.addEventListener('DOMContentLoaded', function () {
                            var scorebox1111 = document.getElementById("score_1111");
                            var x = <?php echo $json_data_res1111 ?>;
                            var y = 25;
                            var weight = "SCOPUS/Web of Science"; 
                            var maxPoints = 25;
                            var weightPoints = {
                                "SCOPUS/Web of Science": 25,
                                "Other Peer Reviewed": 10};
                            var score = Math.min((x / y) * weightPoints[weight], maxPoints);
                            scorebox1111.textContent = 'Score: ' + score.toFixed(2);
                        });

                        //research 11.3.2
                        document.addEventListener('DOMContentLoaded', function () {
                            var scorebox1132 = document.getElementById("score_1132");
                            var x = <?php echo $json_data_res1132 ?>;
                            var y = 25;
                            var score = Math.min((x / y) * 5, 25);
                            scorebox1132.textContent = 'Score: ' + score.toFixed(2);
                        });

                        //research 11.3.3
                        document.addEventListener('DOMContentLoaded', function () {
                            var scorebox1133 = document.getElementById("score_1133");
                            var x = <?php echo $json_data_res1133 ?>;
                            var MAX_SCORE = 100; 
                            var SCORE_PER_MONTH = 25; 
                            var MONTHS_IN_YEAR = 4; 
                            var score = Math.min((x / SCORE_PER_MONTH) * MONTHS_IN_YEAR, MAX_SCORE);
                            scorebox1133.textContent = 'Score: ' + score.toFixed(2);                
                         });

                         //research 11.3.4
                        document.addEventListener('DOMContentLoaded', function () {
                            var scorebox1134 = document.getElementById("score1134");
                            var x = <?php echo $json_data_res1134 ?>;
                            var y = 2;
                            var score = Math.min((x / y) * 4, 25);
                            scorebox1134.textContent = 'Score: ' + score.toFixed(2);
                        });

                        //research 11.3.5
                        document.addEventListener('DOMContentLoaded', function () {
                            var scorebox1135 = document.getElementById("score1135");
                            var x = <?php echo $json_data_res1135 ?>;
                            var maxPoints = 4;
                            var score = Math.min((x / 4) * maxPoints, maxPoints);
                            scorebox1135.textContent = 'Score: ' + score.toFixed(2);
                        });

                            //research 11.3.6
                            document.addEventListener('DOMContentLoaded', function () {
                                var scorebox1136 = document.getElementById("score1136");
                                var x = <?php echo $json_data_res1136 ?>;
                                var maxPoints = 4;

                                var weights = {
                                    'International': 4,
                                    'National': 3,
                                    'Regional': 2,
                                    'Local': 1
                                };

                                var totalScore = 0;

                                for (var i = 0; i < x.length; i++) {
                                    var num_of_projects = x[i].num_of_projects; 
                                    totalScore += num_of_projects * weights['Local'];
                                }

                                var score = Math.min(totalScore, maxPoints);
                                scorebox1136.textContent = 'Score: ' + score.toFixed(2);
                        });

                         //research 11.3.7
                       document.addEventListener('DOMContentLoaded', function () {
                            var scorebox1137 = document.getElementById("score1137");
                            var x = <?php echo $json_data_res1137 ?>;
                            var score = x / 2 * 5;
                            score = Math.min(score, 5);
                            scorebox1137.textContent = 'Score: ' + score.toFixed(2);
                        });   


                        //research 11.4.1
                        document.addEventListener('DOMContentLoaded', function () {
                            var scorebox1138 = document.getElementById("score1138");
                            var x = <?php echo $json_data_res1138 ?>;
                            var score = (x / 100) * 5; 
                            score = Math.min(score, 5);
                            scorebox1138.textContent = 'Score: ' + score.toFixed(2);
                        });

                        //research 11.5.2
                        document.addEventListener('DOMContentLoaded', function () {
                            var scorebox1142 = document.getElementById("score1142");
                            var x = <?php echo $json_data_res1142 ?>;
                            var score = (x / 5) * 5;  
                            score = Math.min(score, 5);
                            scorebox1142.textContent = 'Score: ' + score.toFixed(2);
                        });

                        //research 11.5.3
                        document.addEventListener('DOMContentLoaded', function () {
                            var scorebox1143 = document.getElementById("score1143");
                            var x = <?php echo $json_data_res1143 ?>;
                            var score = (x / 7) * 5; 
                            score = Math.min(score, 5);
                            scorebox1143.textContent = 'Score: ' + score.toFixed(2);
                        });

                        //research 11.5.4
                        document.addEventListener('DOMContentLoaded', function () {
                            var scorebox1144 = document.getElementById("score1144");
                            var x = <?php echo $json_data_res1144 ?>;
                            var score = (x / 25) * 5; 
                            score = Math.min(score, 5);
                            scorebox1144.textContent = 'Score: ' + score.toFixed(2);
                        });

                        //research 11.5.5
                        document.addEventListener('DOMContentLoaded', function () {
                            var scorebox1145 = document.getElementById("score1145");
                            var x = <?php echo $json_data_res1145 ?>;
                            var score = (x / 2) * 5;
                            score = Math.min(score, 5);
                            scorebox1145.textContent = 'Score: ' + score.toFixed(2);
                        });

                        //research 11.5.6
                        document.addEventListener('DOMContentLoaded', function () {
                            var scorebox1146 = document.getElementById("score1146");
                            var x = <?php echo $json_data_res1146 ?>;
                            var score = (x / 2) * 5;
                            score = Math.min(score, 5);
                            scorebox1146.textContent = 'Score: ' + score.toFixed(2);
                        });


                        //research 11.5.7
                        document.addEventListener('DOMContentLoaded', function () {
                        var scorebox1147 = document.getElementById("score1147");
                        var x = <?php echo $json_data_res1147 ?>;
                        var score = (x / 2) * 5;
                        score = Math.min(score, 5);
                        scorebox1147.textContent = 'Score: ' + score.toFixed(2);
                        });

                        //research 11.5.8
                        document.addEventListener('DOMContentLoaded', function () {
                            var scorebox1148 = document.getElementById("score1148");
                            var x = <?php echo $json_data_res1148 ?>;
                            var score = (x / 2) * 5;  
                            score = Math.min(score, 5);
                            scorebox1148.textContent = 'Score: ' + score.toFixed(2);
                        });


                        //research 11.5.9
                        document.addEventListener('DOMContentLoaded', function () {
                            var scorebox1149 = document.getElementById("score1149");
                            var x = <?php echo $json_data_res1149 ?>;
                            var score = (x / 2) * 5;  
                            score = Math.min(score, 5);
                            scorebox1149.textContent = 'Score: ' + score.toFixed(2);
                        });



                        
                        </script>
        </div>
    </div>
</div>
</div>
</div>