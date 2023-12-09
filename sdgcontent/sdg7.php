<?php include '../includes/header.php';
include '../includes/db.php'; ?>
<div class="container">
    <div class="row-mt-5">
        <div class="container-xl" style="height:400px; background-color:#fbc412;">
            <div class="row justify-content-center">
                <div class="co-md-5 text-center text-md-start text-light ps-5">
                    <h1>
                        <div class="display-5 mt-5 f2-bold text-gray" style="font-family:'Oswald', sans-serif;">Goal
                        </div>
                        <div class="display-5 f2-bold">7</div>
                        <div class="display-3 line-break fw-bold" style="margin-top:80px"> Affordable and Clean Energy
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
            <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="container d-grid" id="research711">


              <!-- research 7.1.1 -->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../img/sdg7.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">7.1.1</h3>
                                    <!--Name of in every research-->
                                    <h4 class="fw-bolder">Research on clean energy</h4>
                                    <p></p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score_711">Score:</h3>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research7.1.1`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_711 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Research on clean energy
                                        <?php echo $totalRecord_711 ?></h3>
                                    <?php
                                    $json_data_res711 = json_encode($totalRecord_711);
                                    $query711 = "SELECT * FROM `research7.1.1`";
                                    $select711 = mysqli_query($conn, $query711);

                                    if (mysqli_num_rows($select711) > 0) {
                                        while ($row = mysqli_fetch_assoc($select711)) {
                                            $totnumres = $row['totnumres'];
                                            $titleores = $row['titleores'];
                                            $author = $row['author'];
                                            $YearoPub = $row['YearoPub'];
                                            $Totnumocit = $row['Totnumocit'];
                                           
                                    ?>

                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of Research</span>
                                            <input type="text" class="form-control" value="<?php echo "$totnumres"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Title</span>
                                            <input type="text" class="form-control" value="<?php echo "$titleores"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Author</span>
                                            <input type="text" class="form-control" value="<?php echo "$author"?>"
                                            readonly    aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Year of Publication</span>
                                            <input type="text" class="form-control" value="<?php echo "$YearoPub"?>"
                                            readonly   aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number</span>
                                            <input type="text" class="form-control" value="<?php echo "$Totnumocit"?>"
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
                                <img src="../img/sdg7.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">7.2.1</h3>
                                    <h4 class="fw-bolder"> Energy-efficient renovation and building</h4>
                                    <p>Have a policy in place for ensuring all renovations or new builds are 
following energy efficient standards. </p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score_712">Score:</h3>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research7.2.1`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_712 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Research on clean energy
                                        <?php echo $totalRecord_712 ?></h3>
                                    <?php
                                    $json_data_res712 = json_encode($totalRecord_712);
                                    $query711 = "SELECT * FROM `research7.2.1`";
                                    $select711 = mysqli_query($conn, $query711);

                                    if (mysqli_num_rows($select711) > 0) {
                                        while ($row = mysqli_fetch_assoc($select711)) {
                                            $totnumene = $row['totnumene'];
                                            $titleores = $row['titleores'];
                                            $shortdes = $row['shortdes'];
                                            $totcost = $row['totcost'];
                                            $fundsource = $row['fundsource'];
                                        

                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of energy efficient policy</span> 
                                            <input type="text" class="form-control" value="<?php echo "$totnumene"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Title of the PPA</span>
                                            <input type="text" class="form-control" value="<?php echo "$titleores"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Short description of the PPA</span>
                                            <input type="text" class="form-control" value="<?php echo "$shortdes"?>"
                                            readonly    aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                            <input type="text" class="form-control" value="<?php echo "$totcost"?>"
                                            readonly   aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Fund source</span>
                                            <input type="text" class="form-control" value="<?php echo "$fundsource"?>"
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
                                <img src="../img/sdg7.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">7.2.2</h3>
                                    <h4 class="fw-bolder">Upgrade buildings to higher energy efficiency</h4>
                                    <p>Have plans to upgrade existing buildings to higher energy efficiency.
</p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score_713">Score:</h3>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research7.2.2`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_713 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Upgrade buildings to higher energy efficiency
                                        <?php echo $totalRecord_713 ?></h3>
                                    <?php
                                    $json_data_res713 = json_encode($totalRecord_713);
                                    $query711 = "SELECT * FROM `research7.2.2`";
                                    $select711 = mysqli_query($conn, $query711);

                                    if (mysqli_num_rows($select711) > 0) {
                                        while ($row = mysqli_fetch_assoc($select711)) {
                                            $totnum = $row['totnum'];
                                            $titleo = $row['titleo'];
                                            $shortdess = $row['shortdess'];
                                            $totcostt = $row['totcostt'];
                                            $fundsourcee = $row['fundsourcee'];
                                            

                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of PPAs implemented in accordance to the plan</span> 
                                            <input type="text" class="form-control" value="<?php echo "$totnum"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Title of the PPA</span>
                                            <input type="text" class="form-control" value="<?php echo "$titleo"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Short description of the PPA</span>
                                            <input type="text" class="form-control" value="<?php echo "$shortdess"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total cost</span>
                                            <input type="text" class="form-control" value="<?php echo "$totcostt"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                            <input type="text" class="form-control" value="<?php echo "$fundsourcee"?>"
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
                                <img src="../img/sdg7.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">7.2.3</h3>
                                    <h4 class="fw-bolder">Carbon reduction and emission process</h4>
                                    <p>Have a process for carbon management and reducing carbon dioxide 
emissions. </p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score_714">Score:</h3>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research7.2.3`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_714 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Carbon reduction and emission process
                                        <?php echo $totalRecord_714 ?></h3>
                                    <?php
                                    $json_data_res714 = json_encode($totalRecord_714);
                                    $query711 = "SELECT * FROM `research7.2.3`";
                                    $select711 = mysqli_query($conn, $query711);

                                    if (mysqli_num_rows($select711) > 0) {
                                        while ($row = mysqli_fetch_assoc($select711)) {
                                            $totnum = $row['totnum'];
                                            $titleo = $row['titleo'];
                                            $shortdess = $row['shortdess'];
                                            $totcostt = $row['totcostt'];
                                            $fundsourcee = $row['fundsourcee'];

                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of PPAs targeted to reduce carbon dioxide emissions</span> 
                                            <input type="text" class="form-control" value="<?php echo "$totnum"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Title of the PPA</span>
                                            <input type="text" class="form-control" value="<?php echo "$titleo"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Short description of the PPA</span>
                                            <input type="text" class="form-control" value="<?php echo "$shortdess"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total cost</span>
                                            <input type="text" class="form-control" value="<?php echo "$totcostt"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                            <input type="text" class="form-control" value="<?php echo "$fundsourcee"?>"
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
                                <img src="../img/sdg7.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">7.2.4</h3>
                                    <h4 class="fw-bolder">Plan to reduce energy consumption</h4>
                                    <p>Have an energy efficiency plan in place to reduce overall energy </p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score_715">Score:</h3>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research7.2.4`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_715 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Carbon reduction and emission process
                                        <?php echo $totalRecord_715 ?></h3>
                                    <?php
                                    $json_data_res715 = json_encode($totalRecord_715);
                                    $query711 = "SELECT * FROM `research7.2.4`";
                                    $select711 = mysqli_query($conn, $query711);

                                    if (mysqli_num_rows($select711) > 0) {
                                        while ($row = mysqli_fetch_assoc($select711)) {
                                            $totnum = $row['totnum'];
                                            $totnumene = $row['totnumene'];
                                            $eneconsump = $row['eneconsump'];
                                            $target = $row['target'];
                                      

                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total energy consumption last year</span> 
                                            <input type="text" class="form-control" value="<?php echo "$totnum"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total energy consumption of the current year</span>
                                            <input type="text" class="form-control" value="<?php echo "$totnumene"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">The energy consumption of the current year higher/lower than the previous year.</span>
                                            <input type="text" class="form-control" value="<?php echo "$eneconsump"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Target energy consumption reduction in the following year</span>
                                            <input type="text" class="form-control" value="<?php echo "$target"?>"
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
                                <img src="../img/sdg7.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">7.2.5</h3>
                                    <h4 class="fw-bolder">Energy wasted identification</h4>
                                    <p>Undergo energy reviews to identify areas where energy waste is 
highest</p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score_716">Score:</h3>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research7.2.5`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_716 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Carbon reduction and emission process
                                        <?php echo $totalRecord_716 ?></h3>
                                    <?php
                                    $json_data_res715 = json_encode($totalRecord_716);
                                    $query711 = "SELECT * FROM `research7.2.5`";
                                    $select711 = mysqli_query($conn, $query711);

                                    if (mysqli_num_rows($select711) > 0) {
                                        while ($row = mysqli_fetch_assoc($select711)) {
                                            $ans = $row['ans'];
                                     

                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Undergone energy audit</span> 
                                            <input type="text" class="form-control" value="<?php echo "$ans"?>"
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
                                <img src="../img/sdg7.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">7.2.6</h3>
                                    <h4 class="fw-bolder">Divestment Policy</h4>
                                    <p>Have a policy on divesting investments from carbon-intensive energy 
industries notably coal and oil</p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score_717">Score:</h3>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research7.2.6`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_717 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Carbon reduction and emission process
                                        <?php echo $totalRecord_717 ?></h3>
                                    <?php
                                    $json_data_res717 = json_encode($totalRecord_717);
                                    $query711 = "SELECT * FROM `research7.2.6`";
                                    $select711 = mysqli_query($conn, $query711);

                                    if (mysqli_num_rows($select711) > 0) {
                                        while ($row = mysqli_fetch_assoc($select711)) {
                                            $totnum = $row['totnum'];
                                            $totnumppa = $row['totnumppa'];
                                            $title = $row['title'];
                                            $shortdes = $row['shortdes'];
                                            $totcost = $row['totcost'];
                                            $fundsource = $row['fundsource'];
                                            $evidence = $row['evidence'];
                                            $policy = $row['policy'];
                                            $proposal = $row['proposal'];
                                           

                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of divestment policies</span> 
                                            <input type="text" class="form-control" value="<?php echo "$totnum"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of PPAs implemented in accordance to the policy</span>
                                            <input type="text" class="form-control" value="<?php echo "$totnumppa"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Title of the PPA</span>
                                            <input type="text" class="form-control" value="<?php echo "$title"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Short description of the PPA</span>
                                            <input type="text" class="form-control" value="<?php echo "$shortdes"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total Cost</span> 
                                            <input type="text" class="form-control" value="<?php echo "$totcost"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                            <input type="text" class="form-control" value="<?php echo "$fundsource"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Evidence</span>
                                            <input type="text" class="form-control" value="<?php echo "$evidence"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Policy</span>
                                            <input type="text" class="form-control" value="<?php echo "$policy"?>"
                                            readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Proposal/Narrative Report with photos</span>
                                            <input type="text" class="form-control" value="<?php echo "$proposal"?>"
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
                                <img src="../img/sdg7.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">7.3.1</h3>
                                    <h4 class="fw-bolder">Total energy used</h4>
                                    <p>Energy generated and purchased by the campus from renewable and 
non-renewable sources (this includes fuel used for vehicles) </p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score_718">Score:</h3>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research7.3.1`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_718 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Carbon reduction and emission process
                                        <?php echo $totalRecord_718 ?></h3>
                                    <?php
                                    $json_data_res718 = json_encode($totalRecord_718);
                                    $query711 = "SELECT * FROM `research7.3.1`";
                                    $select711 = mysqli_query($conn, $query711);

                                    if (mysqli_num_rows($select711) > 0) {
                                        while ($row = mysqli_fetch_assoc($select711)) {
                                            $average = $row['average'];
                                            $totene = $row['totene'];
                                           
                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Monthly average usage of energy in the campus</span> 
                                            <input type="text" class="form-control" value="<?php echo "$average"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total energy used in the campus (monthly)</span>
                                            <input type="text" class="form-control" value="<?php echo "$totene"?>"
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
                                <img src="../img/sdg7.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">7.3.2</h3>
                                    <h4 class="fw-bolder">Energy from non-renewable sources</h4>
                                    <p></p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3">Score:</h3>
                                    <?php
                                    $query711 = "SELECT * FROM `research7.3.2`";
                                    $select711 = mysqli_query($conn, $query711);

                                    if (mysqli_num_rows($select711) > 0) {
                                        while ($row = mysqli_fetch_assoc($select711)) {
                                          
                                            

                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                       
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
                                <img src="../img/sdg7.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">7.3.2.1</h3>
                                    <h4 class="fw-bolder">(Electricity Consumption) (as billed by electricity provider)</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score_720">Score:</h3>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research7.3.2.1`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_720 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">(Electricity Consumption) (as billed by electricity provider)
                                        <?php echo $totalRecord_720 ?></h3>
                                    <?php
                                    $json_data_res720 = json_encode($totalRecord_720);
                                    $query711 = "SELECT * FROM `research7.3.2.1`";
                                    $select711 = mysqli_query($conn, $query711);

                                    if (mysqli_num_rows($select711) > 0) {
                                        while ($row = mysqli_fetch_assoc($select711)) {
                                            $average = $row['average'];
                                            $eleconsump = $row['eleconsump'];
                                            $population = $row['population'];
                                            $eleconsumppercapita = $row['eleconsumppercapita'];
 

                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Monthly average electricity consumption</span> 
                                            <input type="text" class="form-control" value="<?php echo "$average"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Electricity consumption in kWh (monthly)</span> 
                                            <input type="text" class="form-control" value="<?php echo "$eleconsump"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Campus population</span> 
                                            <input type="text" class="form-control" value="<?php echo "$population"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Electricity consumption per capita</span>
                                            <input type="text" class="form-control" value="<?php echo "$eleconsumppercapita"?>"
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
                                <img src="../img/sdg7.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">7.3.2.2</h3>
                                    <h4 class="fw-bolder">Energy from fossil fuel (Vehicle fuel consumption)</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score_721">Score:</h3>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research7.3.2.2`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_721 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Energy from fossil fuel (Vehicle fuel consumption)
                                        <?php echo $totalRecord_721 ?></h3>
                                    <?php
                                    $json_data_res721 = json_encode($totalRecord_721);
                                    $query711 = "SELECT * FROM `research7.3.2.2`";
                                    $select711 = mysqli_query($conn, $query711);

                                    if (mysqli_num_rows($select711) > 0) {
                                        while ($row = mysqli_fetch_assoc($select711)) {
                                            $totnum = $row['totnum'];
                                            $totnumofapproved = $row['totnumofapproved'];
                                            $fuelconsump = $row['fuelconsump'];
                                            $evidence = $row['evidence'];
                                            $totnumofvehicle = $row['totnumofvehicle'];
 

                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of campus-owned vehicle</span> 
                                            <input type="text" class="form-control" value="<?php echo "$totnum"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of approved and served vehicle requests (per vehicle,
per month) </span> 
                                            <input type="text" class="form-control" value="<?php echo "$totnumofapproved"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Fuel consumption of campus-owned vehicles (per vehicle, per month) </span> 
                                            <input type="text" class="form-control" value="<?php echo "$fuelconsump"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Evidence</span>
                                            <input type="text" class="form-control" value="<?php echo "$evidence"?>"
                                            readonly aria-label="Username" aria-describedby="basic-short_des">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Campus total energy consumption was used as fuel for 
campus-owned vehicles</span>
                                            <input type="text" class="form-control" value="<?php echo "$totnumofvehicle"?>"
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

                    <!-- research 11.5.1.1 -->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../img/sdg7.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">7.3.3</h3>
                                    <h4 class="fw-bolder">Energy from renewable sources</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score_722">Score:</h3>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research7.3.3`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_722 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Energy from renewable sources
                                        <?php echo $totalRecord_722 ?></h3>
                                    <?php
                                    $json_data_res722 = json_encode($totalRecord_722);
                                    $query711 = "SELECT * FROM `research7.3.3`";
                                    $select711 = mysqli_query($conn, $query711);

                                    if (mysqli_num_rows($select711) > 0) {
                                        while ($row = mysqli_fetch_assoc($select711)) {
                                            $average = $row['average'];
                                            $totalele = $row['totalele'];
                                            $aveusage = $row['aveusage'];
                                            $totalused = $row['totalused'];
                                           
 

                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Monthly average generation of solar energy in the campus</span> 
                                            <input type="text" class="form-control" value="<?php echo "$average"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total solar electricity generated (monthly)
</span> 
                                            <input type="text" class="form-control" value="<?php echo "$totalele"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Monthly average usage of solar energy</span>
                                            <input type="text" class="form-control" value="<?php echo "$aveusage"?>"
                                            readonly aria-label="Username" aria-describedby="basic-short_des">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total solar electricity used (monthly)
</span> 
                                            <input type="text" class="form-control" value="<?php echo "$totalused"?>"
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

                    <!-- research 11.5.1.2 -->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../img/sdg7.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">7.4.1</h3>
                                    <h4 class="fw-bolder">Local community outreach for energy efficiency</h4>
                                    <p>Provide programmes for the local community to learn about the 
importance of energy efficiency and clean energy. </p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score_723">Score:</h3>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research7.4.1`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_723 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Local community outreach for energy efficiency
                                        <?php echo $totalRecord_723 ?></h3>
                                    <?php
                                    $json_data_res723 = json_encode($totalRecord_723);
                                    $query711 = "SELECT * FROM `research7.4.1`";
                                    $select711 = mysqli_query($conn, $query711);

                                    if (mysqli_num_rows($select711) > 0) {
                                        while ($row = mysqli_fetch_assoc($select711)) {
                                            $totnumppa = $row['totnumppa'];
                                            $title = $row['title'];
                                            $shortdes = $row['shortdes'];
                                            $totcost = $row['totcost'];
                                            $fundsource = $row['fundsource'];
                                            
 

                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of PPAs for local community about energy efficiency and 
clean energy</span> 
                                            <input type="text" class="form-control" value="<?php echo "$totnumppa"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Title of the PPA</span> 
                                            <input type="text" class="form-control" value="<?php echo "$title"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Short Description</span>
                                            <input type="text" class="form-control" value="<?php echo "$shortdes"?>"
                                            readonly aria-label="Username" aria-describedby="basic-short_des">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total Cost</span> 
                                            <input type="text" class="form-control" value="<?php echo "$totcost"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Fund Source</span> 
                                            <input type="text" class="form-control" value="<?php echo "$fundsource"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        
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
                                <img src="../img/sdg7.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">7.4.2</h3>
                                    <h4 class="fw-bolder">100% renewable energy pledge
</h4>
                                    <p>Promote a public pledge toward 100% renewable energy beyond the 
university.</p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score_724">Score:</h3>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research7.4.2`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_724 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">100% renewable energy pledge
                                        <?php echo $totalRecord_724 ?></h3>
                                    <?php
                                    $json_data_res724 = json_encode($totalRecord_724);
                                    $query711 = "SELECT * FROM `research7.4.2`";
                                    $select711 = mysqli_query($conn, $query711);

                                    if (mysqli_num_rows($select711) > 0) {
                                        while ($row = mysqli_fetch_assoc($select711)) {
                                            $totnumppa = $row['totnumppa'];
                                            $title = $row['title'];
                                            $shortdes = $row['shortdes'];
                                            $totcost = $row['totcost'];
                                            $fundsource = $row['fundsource'];

                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of PPAs for the renewable energy pledge</span> 
                                            <input type="text" class="form-control" value="<?php echo "$totnumppa"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Title of the PPA</span> 
                                            <input type="text" class="form-control" value="<?php echo "$title"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Short Description of the PPA:</span> 
                                            <input type="text" class="form-control" value="<?php echo "$shortdes"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total Cost:</span> 
                                            <input type="text" class="form-control" value="<?php echo "$totcost"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Fund Source</span> 
                                            <input type="text" class="form-control" value="<?php echo "$fundsource"?>"
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
                                <img src="../img/sdg7.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">7.4.3</h3>
                                    <h4 class="fw-bolder">Energy efficiency services for industry</h4>
                                    <p>Provide direct services to local industry aimed at improving energy 
efficiency and clean energy (energy efficiency assessments, 
workshops, research renewable energy options)</p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score_725">Score:</h3>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research7.4.3`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_725 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Energy efficiency services for industry
                                        <?php echo $totalRecord_725 ?></h3>
                                    <?php
                                    $json_data_res725 = json_encode($totalRecord_725);
                                    $query711 = "SELECT * FROM `research7.4.3`";
                                    $select711 = mysqli_query($conn, $query711);

                                    if (mysqli_num_rows($select711) > 0) {
                                        while ($row = mysqli_fetch_assoc($select711)) {
                                            $totnum = $row['totnum'];
                                            $title = $row['title'];
                                            $shortdes = $row['shortdes'];
                                            $totcost = $row['totcost'];
                                            $fundsource = $row['fundsource'];

                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of energy efficiency services provided for industry</span> 
                                            <input type="text" class="form-control" value="<?php echo "$totnum"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Title of the PPA</span> 
                                            <input type="text" class="form-control" value="<?php echo "$title"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Short Description of the PPA</span> 
                                            <input type="text" class="form-control" value="<?php echo "$shortdes"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total Cost</span> 
                                            <input type="text" class="form-control" value="<?php echo "$totcost"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Fund Source</span> 
                                            <input type="text" class="form-control" value="<?php echo "$fundsource"?>"
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
                                <img src="../img/sdg7.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">7.4.4</h3>
                                    <h4 class="fw-bolder">Policy development for clean energy technology
</h4>
                                    <p>Inform and support governments in clean energy and energy-efficient 
technology policy development.</p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score_726">Score:</h3>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research7.4.4`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_726 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Policy development for clean energy technology
                                        <?php echo $totalRecord_726 ?></h3>
                                    <?php
                                    $json_data_res726 = json_encode($totalRecord_726);
                                    $query711 = "SELECT * FROM `research7.4.4`";
                                    $select711 = mysqli_query($conn, $query711);

                                    if (mysqli_num_rows($select711) > 0) {
                                        while ($row = mysqli_fetch_assoc($select711)) {
                                            $totnumppa = $row['totnumppa'];
                                            $title = $row['title'];
                                            $shortdes = $row['shortdes'];
                                            $totcost = $row['totcost'];
                                            $fundsource = $row['fundsource'];

                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number assistance provided in policy development for clean energy technology</span> 
                                            <input type="text" class="form-control" value="<?php echo "$totnumppa"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Title/Type of assistance</span> 
                                            <input type="text" class="form-control" value="<?php echo "$title"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Short Description</span> 
                                            <input type="text" class="form-control" value="<?php echo "$shortdes"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total Cost</span> 
                                            <input type="text" class="form-control" value="<?php echo "$totcost"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Fund Source</span> 
                                            <input type="text" class="form-control" value="<?php echo "$fundsource"?>"
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
                                <img src="../img/sdg7.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">7.4.5</h3>
                                    <h4 class="fw-bolder">Assistance to low-carbon innovation</h4>
                                    <p>Provide assistance for start-ups that foster and support a low-carbon 
economy or technology</p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score_727">Score:</h3>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research7.4.5`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_727 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Assistance to low-carbon innovation
                                        <?php echo $totalRecord_727 ?></h3>
                                    <?php
                                    $json_data_res727 = json_encode($totalRecord_727);
                                    $query711 = "SELECT * FROM `research7.4.5`";
                                    $select711 = mysqli_query($conn, $query711);

                                    if (mysqli_num_rows($select711) > 0) {
                                        while ($row = mysqli_fetch_assoc($select711)) {
                                            $totnum = $row['totnum'];
                                            $title = $row['title'];
                                            $shortdes = $row['shortdes'];
                                            $totcost = $row['totcost'];
                                            $fundsource = $row['fundsource'];

                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of assistance provided to low-carbon innovation 
startups</span> 
                                            <input type="text" class="form-control" value="<?php echo "$totnum"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Title/Type of assistance</span> 
                                            <input type="text" class="form-control" value="<?php echo "$title"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Short Description</span> 
                                            <input type="text" class="form-control" value="<?php echo "$shortdes"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total Cost</span> 
                                            <input type="text" class="form-control" value="<?php echo "$totcost"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Fund Source</span> 
                                            <input type="text" class="form-control" value="<?php echo "$fundsource"?>"
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
                                <img src="../img/sdg7.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">7.5.1</h3>
                                    <h4 class="fw-bolder">Number of students with access to electricity</h4>
                                    <p></p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score_728">Score:</h3>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research7.5.1`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_728 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Assistance to low-carbon innovation
                                        <?php echo $totalRecord_728 ?></h3>
                                    <?php
                                    $json_data_res728 = json_encode($totalRecord_728);
                                    $query711 = "SELECT * FROM `research7.5.1`";
                                    $select711 = mysqli_query($conn, $query711);

                                    if (mysqli_num_rows($select711) > 0) {
                                        while ($row = mysqli_fetch_assoc($select711)) {
                                            $totnum = $row['totnum'];
                                            $percentage = $row['percentage'];
                                            
                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of students with access to electricity</span> 
                                            <input type="text" class="form-control" value="<?php echo "$totnum"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Number of student population that has access to electricity</span> 
                                            <input type="text" class="form-control" value="<?php echo "$percentage"?>"
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
                                <img src="../img/sdg7.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">7.5.2</h3>
                                    <h4 class="fw-bolder">Number of employees with access to electricity  </h4>
                                    <p></p>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score_729">Score:</h3>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research7.5.2`";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_729 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Number of employees with access to electricity  
                                        <?php echo $totalRecord_729 ?></h3>
                                    <?php
                                    $json_data_res729 = json_encode($totalRecord_729);
                                    $query711 = "SELECT * FROM `research7.5.2`";
                                    $select711 = mysqli_query($conn, $query711);

                                    if (mysqli_num_rows($select711) > 0) {
                                        while ($row = mysqli_fetch_assoc($select711)) {
                                            $totnum = $row['totnum'];
                                            $percentage = $row['percentage'];
                                            
                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Total number of employees with access to electricity</span> 
                                            <input type="text" class="form-control" value="<?php echo "$totnum"?>"
                                                readonly aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Number of employee population that has access to electricity</span> 
                                            <input type="text" class="form-control" value="<?php echo "$percentage"?>"
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
</div>
</div>

<script>
 
 document.addEventListener('DOMContentLoaded', function () {
    var scorebox711 = document.getElementById("score_711");
    var x = <?php echo $json_data_res711 ?>;
    var weight = 25;

    // Pointing system
    const scopusWebOfSciencePoints = 25;
    const otherPeerReviewedPoints = 10;

    // Calculate score based on pointing system
    var score = 0;

    if (x <= scopusWebOfSciencePoints) {
        score = x * weight;
    } else {
        score = scopusWebOfSciencePoints * weight;
    }

    // Ensure the score doesn't exceed the maximum (25)
    score = Math.min(score, 25);

    scorebox711.textContent = 'Score: ' + score.toFixed(2);
});

document.addEventListener('DOMContentLoaded', function () {
    var scorebox712 = document.getElementById("score_712");
    var x = <?php echo $json_data_res712 ?>;
    
    // Pointing system
    const policyPoints = 4;
    const onePolicyPoints = 1;
    const twoPPAPoints = 3;

    // Calculate score based on pointing system
    var score = 0;

    if (x === 1) {
        // 1 policy
        score = onePolicyPoints;
    } else if (x > 1) {
        // More than 1 policy
        score = twoPPAPoints * (x - 1); // x/2 (3) for x > 1
        score += onePolicyPoints; // 1 policy
    }

    // Ensure the score doesn't exceed the maximum (3 + 1 = 4)
    score = Math.min(score, 4);

    scorebox712.textContent = 'Score: ' + score.toFixed(2);
});

document.addEventListener('DOMContentLoaded', function () {
    var scorebox713 = document.getElementById("score_713");
    var x = <?php echo $json_data_res713 ?>;
    
    // Pointing system
    const policyPoints = 4;
    const onePolicyPoint = 1;
    const ppasPerPolicyPoints = 3;
    
    // Calculate score based on pointing system
    var score = 0;

    // Score for policies
    if (x === 1) {
        score += policyPoints;
    } else if (x > 1) {
        score += onePolicyPoint; // 1 policy
        score += (x / 1); // x/1 for x > 1
    }

    // Ensure the score doesn't exceed the maximum (4 points)
    score = Math.min(score, 4);

    scorebox713.textContent = 'Score: ' + score.toFixed(2);
});

document.addEventListener('DOMContentLoaded', function () {
    var scorebox714 = document.getElementById("score_714");
    var x = <?php echo $json_data_res714 ?>;
    
    // Pointing system
    const policyPoints = 4;
    
    // Calculate score based on pointing system
    var score = 0;

    // Score for number of PPAs
    if (x > 0) {
        // Calculate score for the number of PPAs
        score = Math.min((x / 2) * policyPoints, policyPoints);
    }

    scorebox714.textContent = 'Score: ' + score.toFixed(2);
});

document.addEventListener('DOMContentLoaded', function () {
    var scorebox715 = document.getElementById("score_715");
    var x = <?php echo $json_data_res715 ?>;
    
    // Pointing system
    const policyPoints = 4;
    
    // Calculate score based on pointing system
    var score = 0;

    // Score for number of PPAs
    if (x > 0) {
        // Calculate score for the number of PPAs
        score = Math.min((x / 2) * policyPoints, policyPoints);
    }

    scorebox715.textContent = 'Score: ' + score.toFixed(2);
});
document.addEventListener('DOMContentLoaded', function () {
    var scorebox716 = document.getElementById("score_716");
    var x = <?php echo $json_data_res715 ?>;
    
    // Pointing system
    const policyPoints = 5;
    
    // Calculate score based on pointing system
    var score = 0;

    // Score for undergone energy audit
    if (x > 0) {
        // If 'Yes', assign maximum points
        score = policyPoints;
    }

    scorebox716.textContent = 'Score: ' + score.toFixed(2);
});

document.addEventListener('DOMContentLoaded', function () {
    var scorebox717 = document.getElementById("score_717");
    var x = <?php echo $json_data_res717 ?>;
    
    // Pointing system
    const policyPoints = 4;
    const ppaPoints = 3;
    
    // Calculate score based on pointing system
    var score = 0;

    // Score for number of policies
    if (x > 0) {
        score += policyPoints;
    }

    // Score for number of PPAs implemented
    var numOfPPAs = <?php echo $totalRecord_717 ?>;
    if (numOfPPAs > 0) {
        score += Math.min((numOfPPAs / 2) * ppaPoints, ppaPoints);
    }

    scorebox717.textContent = 'Score: ' + score.toFixed(2);
});

document.addEventListener('DOMContentLoaded', function () {
    var scorebox720 = document.getElementById("score_720");
    var x = <?php echo $json_data_res720 ?>;
    
    // Pointing system
    const electricityConsumptionPoints = 12.5;
    
    // Calculate score based on pointing system
    var score = 0;

    // Score for electricity consumption per capita
    if (x > 0) {
        // Calculate score for electricity consumption per capita
        score = Math.min((5 / x) * electricityConsumptionPoints, electricityConsumptionPoints);
    }

    scorebox720.textContent = 'Score: ' + score.toFixed(2);
});

document.addEventListener('DOMContentLoaded', function () {
    var scorebox721 = document.getElementById("score_721");
    var x = <?php echo $json_data_res721 ?>;
    
    // Pointing system
    const pointsPerConsumption = 5;
    
    // Calculate score based on pointing system
    var score = 0;

    // Score for electricity consumption per person
    if (x > 0) {
        // Calculate score for electricity consumption per person
        score = Math.min((5 / x) * pointsPerConsumption, pointsPerConsumption);
    }

    scorebox721.textContent = 'Score: ' + score.toFixed(2);
});
document.addEventListener('DOMContentLoaded', function () {
    var scorebox722 = document.getElementById("score_722");
    var x = <?php echo $json_data_res722 ?>;
    
    // Pointing system
    const pointsPerUnit = 5;
    
    // Calculate score based on pointing system
    var score = 0;

    // Score for electricity consumption per month per person
    if (x > 0) {
        // Calculate score for electricity consumption
        score = Math.min((pointsPerUnit / x) * 5, 12.5);
    }

    scorebox722.textContent = 'Score: ' + score.toFixed(2);
});
document.addEventListener('DOMContentLoaded', function () {
    var scorebox714 = document.getElementById("score_723");
    var x = <?php echo $json_data_res723 ?>;
    
    // Pointing system
    const policyPoints = 5;
    
    // Calculate score based on pointing system
    var score = 0;

    // Score for number of PPAs
    if (x > 0) {
        // Calculate score for the number of PPAs
        score = Math.min((x / 2) * policyPoints, policyPoints);
    }

    scorebox714.textContent = 'Score: ' + score.toFixed(2);
});
document.addEventListener('DOMContentLoaded', function () {
    var scorebox724 = document.getElementById("score_724");
    var x = <?php echo $json_data_res724 ?>;
    
    // Pointing system
    const policyPoints = 5;
    
    // Calculate score based on pointing system
    var score = 0;

    // Score for number of PPAs
    if (x > 0) {
        // Calculate score for the number of PPAs
        score = Math.min((x / 2) * policyPoints, policyPoints);
    }

    scorebox724.textContent = 'Score: ' + score.toFixed(2);
});
document.addEventListener('DOMContentLoaded', function () {
    var scorebox725 = document.getElementById("score_725");
    var x = <?php echo $json_data_res725 ?>;

    // Pointing system
    const energyEfficiencyPoints = 5;

    // Calculate score based on pointing system
    var score = 0;

    // Score for number of energy efficiency services provided for industry
    if (x > 0) {
        // Calculate score for the number of energy efficiency services
        score = Math.min((x / 2) * energyEfficiencyPoints, energyEfficiencyPoints);
    }

    scorebox725.textContent = 'Score: ' + score.toFixed(2);
});
document.addEventListener('DOMContentLoaded', function () {
    var scorebox726 = document.getElementById("score_726");
    var x = <?php echo $json_data_res726 ?>;
    
    // Pointing system
    const assistancePoints = 5;
    
    // Calculate score based on pointing system
    var score = 0;

    // Score for number of assistance provided
    if (x > 0) {
        // Calculate score for the number of assistance provided
        score = Math.min((x / 3) * assistancePoints, assistancePoints);
    }

    scorebox726.textContent = 'Score: ' + score.toFixed(2);
});
document.addEventListener('DOMContentLoaded', function () {
    var scorebox727 = document.getElementById("score_727");
    var x = <?php echo $json_data_res727 ?>;
    
    // Pointing system
    const assistancePoints = 5;
    
    // Calculate score based on pointing system
    var score = 0;

    // Score for number of assistance provided to low-carbon innovation startups
    if (x > 0) {
        // Calculate score for the number of assistance provided
        score = Math.min((x / 2) * assistancePoints, assistancePoints);
    }

    scorebox727.textContent = 'Score: ' + score.toFixed(2);
});




// Function to calculate the score based on the "Statistics Only" pointing system
function calculateScoreForStatisticsOnly(percentage) {
    // Assuming the maximum score is 25
    const maxScore = 25;

    // Calculate the score based on the percentage
    const score = (percentage / 100) * maxScore;

    return score;
}

// Example usage:
const percentage = 75; // Replace with the actual percentage
const score = calculateScoreForStatisticsOnly(percentage);

// Display the score on the HTML element with id 'score_728'
document.getElementById('score_728').innerText = `Score: ${score}`;


function calculateScore(numOfResearch, weight) {
    // Pointing system for Statistics Only
    return numOfResearch * weight;
}

// Example usage:
const numOfResearch729 = <?php echo $totalRecord_729 ?>; // Replace with the actual number of research
const weight729 = 25; // Replace with the actual weight

const score729 = calculateScore(numOfResearch729, weight729);

// Display the score in the HTML
document.getElementById('score_729').textContent = 'Score: ' + score729;



    </script>