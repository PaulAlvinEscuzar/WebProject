<?php include '../includes/header.php';
include '../includes/db.php'; ?>
<div class="container">
    <div class="row-mt-5">
        <div class="container-xl" style="height:400px; background-color:#13496b;">
            <div class="row justify-content-center">
                <div class="co-md-5 text-center text-md-start text-light ps-5">
                    <h1>
                        <div class="display-5 mt-5 f2-bold text-gray" style="font-family:'Oswald', sans-serif;">Goal
                        </div>
                        <div class="display-5 f2-bold">17</div>
                        <div class="display-3 line-break fw-bold" style="margin-top:80px">Revitalize the global
                            partnership for sustainable development
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
            <div class="tab-pane fade show active " id="pills-profile" role="tabpanel"
                aria-labelledby="pills-profile-tab">
                <div class="container d-grid" id="research311">


                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../img/sdg17.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">17.1.1</h3>
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
                                    <?php
                                    $sql = "SELECT * FROM `17.1.1`";
                                    $select = mysqli_query($conn, $sql);

                                    if (!$select) {
                                        die("Query failed: " . mysqli_error($conn));
                                    }

                                    if (mysqli_num_rows($select) > 0) {
                                        while ($row = mysqli_fetch_assoc($select)) {
                                            $goals = $row['goals'];
                                            $research = $row['research'];
                                            $title = $row['title'];
                                            $author = $row['author'];
                                            $year = $row['year'];
                                            $userCitation = $row['citation'];
                                            $pts = $row['pts'];
                                    ?>
                                    <h3 class="text-start ms-3" style="margin-top: 10px" ;>Score: <?php echo $pts ?>
                                    </h3>
                                    <div class="collapse w-100 h-auto p-3" style="display: block ;">
                                        <form action="" method="post">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total Number of
                                                    Research into Partnership for the Goals</span>
                                                <span class="form-control" id="goals" aria-describedby="basic-addon1"
                                                    style="background-color: #e9ecef;"><?php echo "$goals" ?></span>
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total Number of
                                                    Research Co-authored with low or lower middle income countrie</span>
                                                <span class="form-control" id="goals" aria-describedby="basic-addon1"
                                                    style="background-color: #e9ecef;"><?php echo "$research" ?></span>
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Title of
                                                    Research</span>
                                                <span class="form-control" id="goals" aria-describedby="basic-addon1"
                                                    style="background-color: #e9ecef;"><?php echo "$title" ?></span>
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Author</span>
                                                <span class="form-control" id="goals" aria-describedby="basic-addon1"
                                                    style="background-color: #e9ecef;"><?php echo "$author" ?></span>
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Year of
                                                    Publication</span>
                                                <span class="form-control" id="goals" aria-describedby="basic-addon1"
                                                    style="background-color: #e9ecef;"><?php echo "$year" ?></span>
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number of
                                                    citations</span>
                                                <span class="form-control" id="goals" aria-describedby="basic-addon1"
                                                    style="background-color: #e9ecef;"><?php echo "$userCitation" ?></span>
                                            </div>


                                        </form>
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
                                <img src="../img/sdg17.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">17.2.1</h3>
                                    <h4 class="fw-bolder">Relationships with regional NGOs and government for SDG policy
                                    </h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <?php
                                    $sql = "SELECT * FROM `17.2.1`";
                                    $select = mysqli_query($conn, $sql);

                                    if (!$select) {
                                        die("Query failed: " . mysqli_error($conn));
                                    }

                                    if (mysqli_num_rows($select) > 0) {
                                        while ($row = mysqli_fetch_assoc($select)) {
                                            $id = $row['id'];
                                            $sdg = $row['sdg'];
                                            $title = $row['title'];
                                            $description = $row['description'];
                                            $cost = $row['cost'];
                                            $source = $row['source'];
                                            $pts = $row['pts'];
                                    ?>
                                    <h3 class="text-start ms-3" style="margin-top: 10px" ;>Score: <?php echo $pts ?>
                                    </h3>
                                    <div class="collapse w-100 h-auto p-3" style="display: block ;">
                                        <form action="" method="post">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number of campus
                                                    direct involvement with regional NGOs and government for SDG
                                                    policy</span>
                                                <span class="form-control" id="goals" aria-describedby="basic-addon1"
                                                    style="background-color: #e9ecef;"><?php echo "$sdg" ?></span>
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Title of the
                                                    policy</span>
                                                <span class="form-control" id="goals" aria-describedby="basic-addon1"
                                                    style="background-color: #e9ecef;"><?php echo "$title" ?></span>
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Short description
                                                    (Regional NGO or Government)</span>
                                                <span class="form-control" id="goals" aria-describedby="basic-addon1"
                                                    style="background-color: #e9ecef;"><?php echo "$description" ?></span>
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                                <span class="form-control" id="goals" aria-describedby="basic-addon1"
                                                    style="background-color: #e9ecef;"><?php echo "$cost" ?></span>
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                                <span class="form-control" id="goals" aria-describedby="basic-addon1"
                                                    style="background-color: #e9ecef;"><?php echo "$source" ?></span>
                                            </div>



                                        </form>
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
                                <img src="../img/sdg17.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">17.2.2</h3>
                                    <h4 class="fw-bolder">Cross sectoral dialogue about SDGs</p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>

                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                <?php 
                $sql = "SELECT * FROM `17.2.2`";
                $select = mysqli_query($conn, $sql);

                if (!$select) {
                    die("Query failed: " . mysqli_error($conn));
                }

                if (mysqli_num_rows($select) > 0) {
                    while ($row = mysqli_fetch_assoc($select)) {
                        $id = $row['id'];
                        $sdg = $row['sdg'];
                        $title = $row['title'];
                        $description = $row['description'];
                        $cost = $row['cost'];
                        $source = $row['source'];
                        $pts = $row['pts'];
                ?>
                        <h3 class="text-start ms-3"style="margin-top: 10px"; >Score: <?php echo $pts ?> </h3>
                        <div class="collapse w-100 h-auto p-3" style="display: block ;">
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Total number of cross-sectoral SDG dialogue initiated and/or participated</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$sdg" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Title of the PPA</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$title" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Short description</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$description" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$cost" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$source" ?></span>
                            </div>
                            
                           
                                
                            </form>
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
                                <img src="../img/sdg17.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">17.2.3</h3>
                                    <h4 class="fw-bolder">International collaboration data gathering for SDG</h4>
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
                $sql = "SELECT * FROM `17.2.3`";
                $select = mysqli_query($conn, $sql);

                if (!$select) {
                    die("Query failed: " . mysqli_error($conn));
                }

                if (mysqli_num_rows($select) > 0) {
                    while ($row = mysqli_fetch_assoc($select)) {
                        $id = $row['id'];
                        $sdg = $row['sdg'];
                        $title = $row['title'];
                        $description = $row['description'];
                        $cost = $row['cost'];
                        $source = $row['source'];
                        $pts = $row['pts'];
                ?>
                        <h3 class="text-start ms-3"style="margin-top: 10px"; >Score: <?php echo $pts ?> </h3>
                        <div class="collapse w-100 h-auto p-3" style="display: block ;">
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Total number of international collaboration on SDG data gathering</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$sdg" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Title of the PPA</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$title" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Short description</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$description" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$cost" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$source" ?></span>
                            </div>
                            
                           
                                
                            </form>
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
                                <img src="../img/sdg17.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">17.2.4</h3>
                                    <h4 class="fw-bolder">Collaboration for SDG best practice</h4>
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
                $sql = "SELECT * FROM `17.2.4`";
                $select = mysqli_query($conn, $sql);

                if (!$select) {
                    die("Query failed: " . mysqli_error($conn));
                }

                if (mysqli_num_rows($select) > 0) {
                    while ($row = mysqli_fetch_assoc($select)) {
                        $id = $row['id'];
                        $sdg = $row['sdg'];
                        $title = $row['title'];
                        $description = $row['description'];
                        $cost = $row['cost'];
                        $source = $row['source'];
                        $pts = $row['pts'];
                ?>
                        <h3 class="text-start ms-3"style="margin-top: 10px"; >Score: <?php echo $pts ?> </h3>
                        <div class="collapse w-100 h-auto p-3" style="display: block ;">
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Total number of international collaboration for SDG best practice</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$sdg" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Title of the PPA</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$title" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Short description</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$description" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$cost" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$source" ?></span>
                            </div>
                            
                           
                                
                            </form>
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
                                <img src="../img/sdg17.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">17.2.5</h3>
                                    <h4 class="fw-bolder">Collaboration with NGOs for SDGs</h4>
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
                $sql = "SELECT * FROM `17.2.5`";
                $select = mysqli_query($conn, $sql);

                if (!$select) {
                    die("Query failed: " . mysqli_error($conn));
                }

                if (mysqli_num_rows($select) > 0) {
                    while ($row = mysqli_fetch_assoc($select)) {
                        $id = $row['id'];
                        $sdg = $row['sdg'];
                        $volunteer = $row['volunteer'];
                        $research = $row['research'];
                        $developed = $row['developed'];
                        $title = $row['title'];
                        $description = $row['description'];
                        $cost = $row['cost'];
                        $source = $row['source'];
                        $pts = $row['pts'];
                
                ?>
                        <h3 class="text-start ms-3"style="margin-top: 10px"; >Score: <?php echo $pts ?> </h3>
                        <div class="collapse w-100 h-auto p-3" style="display: block ;">
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Total number of SDG projects in collaboration with NGOs</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$sdg" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Total number of volunteering programmes</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$volunteer" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Total number of research programmes</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$research" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Total number of developed educational resources</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$developed" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Title of the PPA</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$title" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Short description</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$description" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$cost" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$source" ?></span>
                            </div>
                            
                           
                                
                            </form>
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
                                <img src="../img/sdg17.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">17.3.1</h3>
                                    <h4 class="fw-bolder">Publication of SDG reports - per SDG</h4>
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
                $sql = "SELECT * FROM `17.3.1`";
                $select = mysqli_query($conn, $sql);

                if (!$select) {
                    die("Query failed: " . mysqli_error($conn));
                }

                if (mysqli_num_rows($select) > 0) {
                    while ($row = mysqli_fetch_assoc($select)) {
                        $id = $row['id'];
                        $radio = $row['radio'];
                        $checkbox_value = $row['checkbox_value'];
                        $pts = $row['pts'];
                ?>
                        <h3 class="text-start ms-3"style="margin-top: 10px"; >Score: <?php echo $pts ?> </h3>
                        <div class="collapse w-100 h-auto p-3" style="display: block ;">
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Does your campus have separate publications per SDGs?</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$radio" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">If yes, kindly check all the SDGs with separate publications</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$checkbox_value" ?></span>
                            </div>
                    
                            
                           
                                
                            </form>
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
                                <img src="../img/sdg17.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">17.4.1</h3>
                                    <h4 class="fw-bolder">Education for SDGs commitment to meaningful education</p>
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
                $sql = "SELECT * FROM `17.4.1`";
                $select = mysqli_query($conn, $sql);

                if (!$select) {
                    die("Query failed: " . mysqli_error($conn));
                }

                if (mysqli_num_rows($select) > 0) {
                    while ($row = mysqli_fetch_assoc($select)) {
                        $id = $row['id'];
                        $radio = $row['radio'];
                        $ppa = $row['ppa'];
                        $pts = $row['pts'];
                ?>
                        <h3 class="text-start ms-3"style="margin-top: 10px"; >Score: <?php echo $pts ?> </h3>
                        <div class="collapse w-100 h-auto p-3" style="display: block ;">
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Does your campus have a commitment to meaningful education around the SDGs that is relevant and applicable to all students?</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$radio" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Total number of PPAs implemented in accordance to the commitment</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$ppa" ?></span>
                            </div>
                    
                            
                           
                                
                            </form>
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
                                <img src="../img/sdg17.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">17.4.2</h3>
                                    <h4 class="fw-bolder">Education for SDGs: specific courses on sustainability</h4>
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
                $sql = "SELECT * FROM `17.4.2`";
                $select = mysqli_query($conn, $sql);

                if (!$select) {
                    die("Query failed: " . mysqli_error($conn));
                }

                if (mysqli_num_rows($select) > 0) {
                    while ($row = mysqli_fetch_assoc($select)) {
                        $id = $row['id'];
                        $radio = $row['radio'];
                        $sustain = $row['sustain'];
                        $title = $row['title'];
                        $course = $row['course'];
                        $description = $row['description'];
                        $cost = $row['cost'];
                        $source = $row['source'];
                        $pts = $row['pts'];
                ?>
                
                
                        <h3 class="text-start ms-3"style="margin-top: 10px"; >Score: <?php echo $pts ?> </h3>
                        <div class="collapse w-100 h-auto p-3" style="display: block ;">
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Does your campus offer specific courses on sustainability?</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$radio" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Total number of specific courses on sustainability</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$sustain" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Title of course</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$title" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Type of course</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$course" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Short description</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$description" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$cost" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$source" ?></span>
                            </div>
                            
                           
                                
                            </form>
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
                                <img src="../img/sdg17.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">17.4.3</h3>
                                    <h4 class="fw-bolder">Education for SDGs in the wider community</h4>
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
                $sql = "SELECT * FROM `17.4.3`";
                $select = mysqli_query($conn, $sql);

                if (!$select) {
                    die("Query failed: " . mysqli_error($conn));
                }

                if (mysqli_num_rows($select) > 0) {
                    while ($row = mysqli_fetch_assoc($select)) {
                        $id = $row['id'];
                            $outreach = $row['outreach'];
                            $alumni = $row['alumni'];
                            $resident = $row['resident'];
                            $people = $row['people'];
                            $title = $row['title'];
                            $description = $row['description'];
                            $cost = $row['cost'];
                            $source = $row['source'];
                            $pts = $row['pts'];
                ?>
                
                
                        <h3 class="text-start ms-3"style="margin-top: 10px"; >Score: <?php echo $pts ?> </h3>
                        <div class="collapse w-100 h-auto p-3" style="display: block ;">
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Total number of educational outreach activities for the wider community</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$outreach" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Total number of educational outreach activities for campus alumni</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$alumni" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Total number of educational outreach activities for local residents</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$resident" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Total number of educational outreach activities for displaced people</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$people" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Title of the PPA</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$title" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Short description</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$description" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$cost" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$source" ?></span>
                            </div>
                            
                           
                                
                            </form>
                        </div>
                        
                    <?php
                    }
                }
                ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- research 11.5.1.1 -->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../img/sdg17.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">17.5.1</h3>
                                    <h4 class="fw-bolder">Number of local partnerships</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>

                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <?php 
                $sql = "SELECT * FROM `17.5.1`";
                $select = mysqli_query($conn, $sql);

                if (!$select) {
                    die("Query failed: " . mysqli_error($conn));
                }

                if (mysqli_num_rows($select) > 0) {
                    while ($row = mysqli_fetch_assoc($select)) {
                        $id = $row['id'];
                        $local = $row['local'];
                        $title = $row['title'];
                        $description = $row['description'];
                        $cost = $row['cost'];
                        $source = $row['source'];
                        $pts = $row['pts'];
                ?>
                
                
                        <h3 class="text-start ms-3"style="margin-top: 10px"; >Score: <?php echo $pts ?> </h3>
                        <div class="collapse w-100 h-auto p-3" style="display: block ;">
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Total number of local partnerships</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$local" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Title of partnership</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$title" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Short description</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$description" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$cost" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$source" ?></span>
                            </div>
                            
                           
                                
                            </form>
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
                                <img src="../img/sdg17.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">17.5.2</h3>
                                    <h4 class="fw-bolder">Number of international partnerships</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>

                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <?php 
                $sql = "SELECT * FROM `17.5.2`";
                $select = mysqli_query($conn, $sql);

                if (!$select) {
                    die("Query failed: " . mysqli_error($conn));
                }

                if (mysqli_num_rows($select) > 0) {
                    while ($row = mysqli_fetch_assoc($select)) {
                        $id = $row['id'];
                            $international = $row['international'];
                            $title = $row['title'];
                            $description = $row['description'];
                            $cost = $row['cost'];
                            $source = $row['source'];
                            $pts = $row['pts'];
                ?>
                
                
                        <h3 class="text-start ms-3"style="margin-top: 10px"; >Score: <?php echo $pts ?> </h3>
                        <div class="collapse w-100 h-auto p-3" style="display: block ;">
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Total number of international partnerships</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$international" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Title of partnership</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$title" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Short description</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$description" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$cost" ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                <span class="form-control" id="goals" aria-describedby="basic-addon1" style="background-color: #e9ecef;"><?php echo "$source" ?></span>
                            </div>
                            
                           
                                
                            </form>
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
</div>