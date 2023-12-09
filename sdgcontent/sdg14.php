<?php include '../includes/header.php';

require("../includes/db.php");
?>
<script src="sdg14compute.js"></script>
<div class="container">
    <div class="row-mt-5">
        <div class="container-xl" style="height:400px; background-color:#1f97d4;">
            <div class="row justify-content-center">
                <div class="co-md-5 text-center text-md-start text-light ps-5">
                    <h1>
                        <div class="display-5 mt-5 f2-bold text-gray" style="font-family:'Oswald', sans-serif;">Goal
                         </div>
                        <div class="display-5 f2-bold">14</div>
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
                <!-- ======================================================================================================== -->
<div class="container d-grid" id="research1411">
    

    <div class="d-inline-flex mt-3">
        <div class="border border-dark w-100">
            <div class=" d-inline-flex justify-content-start align-items-center">
                <img src="../img/sdg14.jpg" class="p-4 d-block" width="150" alt="">
                <div class="d-grid ms-5 me-5">
                    <!-- <p class="fw-normal">Target</p> -->
                    <h3 class="fw-bold">14.1.1</h3>
                    <!--Name of in every research-->
                    <h4 class="fw-bolder">Research on life below water</h4>
                    <p></p>
                </div>
            </div>
            
            <div class="dropdown">

                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" onclick="compute1411();">
                </button>

                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                    <!-- Eto para madisplay yung data sa sdg content-->

                    <?php
                    $sql = "SELECT * FROM `research14.1.1`";
                    $select = mysqli_query($conn, $sql);
                    $x = 0;
                    $y = 0;
                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id = $row['rid'];

                            // $tresearch = $row['tresearch'];
                            $title = $row['title'];
                            $author = $row['author'];
                            $year = $row['year'];
                            $citation = $row['citation'];

                             $x += 1;
                             $title = str_replace(" ",'',$title);
                             $y += (strtoupper($title) != "SCOPUS/WEBOFSCIENCE") ? 10 : 25;
                            ?>
                                                            <h3 class="text-start ms-3" id = "1411score"></h3>
                                                            <h5 class="text-start ms-3" id = "1411tppa"></h5>


                                                                    <div class="container d-grid mt-3">
                                                                        <div class="border border-dark p-3">

                                                                       
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Title</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$title" ?>" name="1411title"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Author/s</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$author" ?>" name="1411author"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Year of publication</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$year" ?>" name="1411year"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Total number of citations</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$citation" ?>"
                                                                                                name="1411citation" aria-describedby="basic-addon1">
                                                                                </div>
                                                                        </div>
                                                                    </div>

                                                                    <?php
                        }
                    }
                    ?>
                        <input type="hidden" id ="1411hiddenx" value = "<?= $x ?>">
                        <input type="hidden" id ="1411hiddeny" value = "<?= $y ?>">


                </ul>
            </div>
        </div>
    </div>
</div>
<!-- ======================================================================================================== -->
<div class="container d-grid" id="research1421">
    
<!-- 5 points 
x/2 (5)
x= no. of extension 
educational programs on 
freshwater ecosystems -->
    <div class="d-inline-flex mt-3">
        <div class="border border-dark w-100">
            <div class=" d-inline-flex justify-content-start align-items-center">
                <img src="../img/sdg14.jpg" class="p-4 d-block" width="150" alt="">
                <div class="d-grid ms-5 me-5">
                    <!-- <p class="fw-normal">Target</p> -->
                    <h3 class="fw-bold">14.2.1</h3>
                    <!--Name of in every research-->
                    <h4 class="fw-bolder">Fresh-water ecosystems(community outreach)</h4>
                    <p></p>
                </div>
            </div>
            
            <div class="dropdown">

                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" onclick="compute1421();">
                </button>

                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                    <!-- Eto para madisplay yung data sa sdg content-->

                    <?php

                    $sql = "SELECT * FROM `research14.2.1`";
                    $select = mysqli_query($conn, $sql);
                    $x = 0;
                    $score = 0;
                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id = $row['rid'];
                            // $tprograms = $row['tprograms'];
                            $ppa = $row['ppa'];
                            $description = $row['description'];
                            $cost = $row['cost'];
                            $fsource = $row['fsource'];

                            $x += 1;

                            ?>
                                                            <h3 class="text-start ms-3" id = "1421score"></h3>
                                                            <h5 class="text-start ms-3" id = "1421tppa"></h5>

                                                                    <div class="container d-grid mt-3">
                                                                        <div class="border border-dark p-3">
                                                                       
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Title </span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$ppa" ?>" name="1421ppa"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Description</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$description" ?>" name="1421description"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$cost" ?>" name="1421cost"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$fsource" ?>"
                                                                                                name="1421fsource" aria-describedby="basic-addon1">
                                                                                </div>
                                                                        </div>
                                                                    </div>

                                                                    <?php
                        }

                    }
                    ?>
                        <input type="hidden" id ="1421hidden" value = "<?= $x ?>">
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- ======================================================================================================== -->
<div class="container d-grid" id="research1422">
    

    <div class="d-inline-flex mt-3">
        <div class="border border-dark w-100">
            <div class=" d-inline-flex justify-content-start align-items-center">
                <img src="../img/sdg14.jpg" class="p-4 d-block" width="150" alt="">
                <div class="d-grid ms-5 me-5">
                    <!-- <p class="fw-normal">Target</p> -->
                    <h3 class="fw-bold">14.2.2</h3>
                    <!--Name of in every research-->
                    <h4 class="fw-bolder">Sustainable fisheries(community outreach)</h4>
                    <p></p>
                </div>
            </div>
            
            <div class="dropdown">

                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"  onclick="compute1422();">
                </button>

                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                    <!-- Eto para madisplay yung data sa sdg content-->

                    <?php
                    $sql = "SELECT * FROM `research14.2.2`";
                    $select = mysqli_query($conn, $sql);
                    $x = 0;
                    $score = 0;
                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id = $row['rid'];
                            // $tprograms = $row['tprograms'];
                            $ppa = $row['ppa'];
                            $description = $row['description'];
                            $cost = $row['cost'];
                            $fsource = $row['fsource'];

                            $x += 1; // or += 1
                            ?>
                                                            <h3 class="text-start ms-3" id = "1422score"></h3>
                                                            <h5 class="text-start ms-3" id = "1422tppa"></h5>

                                                                    <div class="container d-grid mt-3">
                                                                        <div class="border border-dark p-3">

                                                                        
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Title</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$ppa" ?>" name="1422ppa"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Description</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$description" ?>" name="1422description"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$cost" ?>" name="1422cost"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$fsource" ?>"
                                                                                                name="1422fsource" aria-describedby="basic-addon1">
                                                                                </div>
                              
                                                                        </div>
                                                                    </div>

                                                                    <?php
                        }
                    }
                    ?>
                                            <input type="hidden" id ="1422hidden" value = "<?= $x ?>">

                </ul>
            </div>
        </div>
    </div>
</div>
<!-- ======================================================================================================== -->
<div class="container d-grid" id="research1423">
    

    <div class="d-inline-flex mt-3">
        <div class="border border-dark w-100">
            <div class=" d-inline-flex justify-content-start align-items-center">
                <img src="../img/sdg14.jpg" class="p-4 d-block" width="150" alt="">
                <div class="d-grid ms-5 me-5">
                    <!-- <p class="fw-normal">Target</p> -->
                    <h3 class="fw-bold">14.2.3</h3>
                    <!--Name of in every research-->
                    <h4 class="fw-bolder">Overfishing(community outreach)</h4>
                    <p></p>
                </div>
            </div>
            
            <div class="dropdown">

                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" onclick="compute1423()">
                </button>

                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                    <!-- Eto para madisplay yung data sa sdg content-->

                    <?php
                    $sql = "SELECT * FROM `research14.2.3`";
                    $select = mysqli_query($conn, $sql);
                    $x = 0;
                    $score = 0;
                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id = $row['rid'];
                            // $tprograms = $row['tprograms'];
                            $ppa = $row['ppa'];
                            $description = $row['description'];
                            $cost = $row['cost'];
                            $fsource = $row['fsource'];

                            $x += 1; // or += 1
                    
                            ?>
                                                            <h3 class="text-start ms-3" id = "1423score"></h3>
                                                            <h5 class="text-start ms-3" id = "1423tppa"></h5>


                                                                    <div class="container d-grid mt-3">
                                                                        <div class="border border-dark p-3">

                                                                       
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Title</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$ppa" ?>" name="1423ppa"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Descriptio</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$description" ?>" name="1423description"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$cost" ?>" name="1423cost"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$fsource" ?>"
                                                                                                name="1423fsource" aria-describedby="basic-addon1">
                                                                                </div>
                                                                        </div>
                                                                    </div>

                                                                    <?php
                        }
                    }
                    ?>
                                            <input type="hidden" id ="1423hidden" value = "<?= $x ?>">
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- ======================================================================================================== -->
<div class="container d-grid" id="research1431">
    

    <div class="d-inline-flex mt-3">
        <div class="border border-dark w-100">
            <div class=" d-inline-flex justify-content-start align-items-center">
                <img src="../img/sdg14.jpg" class="p-4 d-block" width="150" alt="">
                <div class="d-grid ms-5 me-5">
                    <!-- <p class="fw-normal">Target</p> -->
                    <h3 class="fw-bold">14.3.1</h3>
                    <!--Name of in every research-->
                    <h4 class="fw-bolder">Conservation and sustainable utilization of the oceans</h4>
                    <p></p>
                </div>
            </div>
            
            <div class="dropdown">

                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" onclick="compute1431()">
                </button>

                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                    <!-- Eto para madisplay yung data sa sdg content-->

                    <?php
                    $sql = "SELECT * FROM `research14.3.1`";
                    $select = mysqli_query($conn, $sql);
                    $x = 0;
                    $score = 0;
                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id = $row['rid'];
                            // $tppa = $row['tppa'];
                            $ppa = $row['ppa'];
                            $description = $row['description'];
                            $cost = $row['cost'];
                            $fsource = $row['fsource'];

                            $x += 1; // or += 1
                    
                            ?>
                                                            <h3 class="text-start ms-3" id = "1431score"></h3>
                                                            <h5 class="text-start ms-3" id = "1431tppa"></h5>

                                                                    <div class="container d-grid mt-3">
                                                                        <div class="border border-dark p-3">

                                                                        
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Title</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$ppa" ?>" name="1431ppa"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Description</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$description" ?>" name="1431description"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$cost" ?>" name="1431cost"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$fsource" ?>"
                                                                                                name="1431fsource" aria-describedby="basic-addon1">
                                                                                </div>
                                                                        </div>
                                                                    </div>

                                                                    <?php
                        }
                    }
                    ?>
                                            <input type="hidden" id ="1431hidden" value = "<?= $x ?>">
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- ======================================================================================================== -->
<div class="container d-grid" id="research1432">
    

    <div class="d-inline-flex mt-3">
        <div class="border border-dark w-100">
            <div class=" d-inline-flex justify-content-start align-items-center">
                <img src="../img/sdg14.jpg" class="p-4 d-block" width="150" alt="">
                <div class="d-grid ms-5 me-5">
                    <!-- <p class="fw-normal">Target</p> -->
                    <h3 class="fw-bold">14.3.2</h3>
                    <!--Name of in every research-->
                    <h4 class="fw-bolder">Food from aquatic ecosystems</h4>
                    <p></p>
                </div>
            </div>
            
            <div class="dropdown">

                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" onclick="compute1432()">
                </button>

                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                    <!-- Eto para madisplay yung data sa sdg content-->

                    <?php
                    $sql = "SELECT * FROM `research14.3.2`";
                    $select = mysqli_query($conn, $sql);

                    $x = 0;
                    $y = 0;
                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id = $row['rid'];
                            $tpolicy = $row['tpolicy'];
                            // $tppa = $row['tppa'];
                            $ppa = $row['ppa'];
                            $description = $row['description'];
                            $cost = $row['cost'];
                            $fsource = $row['fsource'];
                            $evidence = $row['evidence'];

                            $x += $tpolicy; // or += 1
                            $y += 1; // or += 1;
                    
                            ?>
                                                            <h3 class="text-start ms-3" id = "1432score"></h3>
                                                            <h5 class="text-start ms-3" id = "1432tpolicy"></h5>
                                                            <h5 class="text-start ms-3" id = "1432tppa"></h5>


                                                                    <div class="container d-grid mt-3">
                                                                        <div class="border border-dark p-3">

                                                                        <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Total policy for sustainable harvesting of aquatic ecosystem</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$tpolicy" ?>" name="1432tpolicy"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                               
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Title</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$ppa" ?>" name="1432ppa"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Description</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$description" ?>" name="1432description"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$cost" ?>"
                                                                                                name="1432cost" aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$fsource" ?>"
                                                                                                name="1432fsource" aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Evidence</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$evidence" ?>"
                                                                                                name="1432evidence" aria-describedby="basic-addon1">
                                                                                </div>
                                                                        </div>
                                                                    </div>

                                                                    <?php
                        }
                    }
                    ?>
                                            <input type="hidden" id ="1432hiddenx" value = "<?= $x ?>">
                                            <input type="hidden" id ="1432hiddeny" value = "<?= $y ?>">


                </ul>
            </div>
        </div>
    </div>
</div>
<!-- ======================================================================================================== -->
<div class="container d-grid" id="research1433">
    

    <div class="d-inline-flex mt-3">
        <div class="border border-dark w-100">
            <div class=" d-inline-flex justify-content-start align-items-center">
                <img src="../img/sdg14.jpg" class="p-4 d-block" width="150" alt="">
                <div class="d-grid ms-5 me-5">
                    <!-- <p class="fw-normal">Target</p> -->
                    <h3 class="fw-bold">14.3.3</h3>
                    <!--Name of in every research-->
                    <h4 class="fw-bolder">maintain ecosystems and their biodiversity</h4>
                    <p></p>
                </div>
            </div>
            
            <div class="dropdown">

                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" onclick="compute1433();">
                </button>

                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                    <!-- Eto para madisplay yung data sa sdg content-->

                    <?php
                    $sql = "SELECT * FROM `research14.3.3`";
                    $select = mysqli_query($conn, $sql);
                    $x = 0;
                    $score = 0;
                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id = $row['rid'];
                            // $tppa = $row['tppa'];
                            $ppa = $row['ppa'];
                            $description = $row['description'];
                            $cost = $row['cost'];
                            $fsource = $row['fsource'];

                            $x += 1; // or += 1
                            ?>
                                                            <h3 class="text-start ms-3" id = "1433score"></h3>
                                                            <h5 class="text-start ms-3" id = "1433tppa"></h5>

                                                                    <div class="container d-grid mt-3">
                                                                        <div class="border border-dark p-3">

                                                                       
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Title</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$ppa" ?>" name="1433ppa"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Description</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$description" ?>" name="1433description"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$cost" ?>" name="1433cost"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$fsource" ?>"
                                                                                                name="1433fsource" aria-describedby="basic-addon1">
                                                                                </div>
                            
                                                                        </div>
                                                                    </div>

                                                                    <?php
                        }
                    }
                    ?>
                                            <input type="hidden" id ="1433hidden" value = "<?= $x ?>">
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- ======================================================================================================== -->
<div class="container d-grid" id="research1434">
    

    <div class="d-inline-flex mt-3">
        <div class="border border-dark w-100">
            <div class=" d-inline-flex justify-content-start align-items-center">
                <img src="../img/sdg14.jpg" class="p-4 d-block" width="150" alt="">
                <div class="d-grid ms-5 me-5">
                    <!-- <p class="fw-normal">Target</p> -->
                    <h3 class="fw-bold">14.3.4</h3>
                    <!--Name of in every research-->
                    <h4 class="fw-bolder">Technologies towards aquatic ecosystem damange prevention</h4>
                    <p></p>
                </div>
            </div>
            
            <div class="dropdown">

            <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" onclick="compute1434();">
                </button>


                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                    <!-- Eto para madisplay yung data sa sdg content-->

                    <?php
                    $sql = "SELECT * FROM `research14.3.4`";
                    $select = mysqli_query($conn, $sql);
                    $y = 0;

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id = $row['rid'];
                            // $tpractices = $row['tpractices'];
                            $ppa = $row['ppa'];
                            $description = $row['description'];
                            $cost = $row['cost'];
                            $fsource = $row['fsource'];

                            // $y += 1; // or += 1
                            $y += 1; // or += 1
                    


                            ?>
                                                            <h3 class="text-start ms-3" id = "1434score"></h3>
                                                            <h5 class="text-start ms-3" id = "1434tppa"></h5>

                                                                    <div class="container d-grid mt-3">
                                                                        <div class="border border-dark p-3">
                                                                        
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Title</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$ppa" ?>" name="1434ppa"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Description</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$description" ?>" name="1434description"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$cost" ?>" name="1434cost"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$fsource" ?>"
                                                                                                name="1434fsource" aria-describedby="basic-addon1">
                                                                                </div>
                                                                        </div>
                                                                    </div>

                                                                    <?php

                        }
                    }

                    ?>
                    <input type="text" id="1434hidden" value = "<?= $y ?>">

                </ul>
            </div>
        </div>
    </div>
</div>
<!-- ======================================================================================================== -->
<div class="container d-grid" id="research1441">
    

    <div class="d-inline-flex mt-3">
        <div class="border border-dark w-100">
            <div class=" d-inline-flex justify-content-start align-items-center">
                <img src="../img/sdg14.jpg" class="p-4 d-block" width="150" alt="">
                <div class="d-grid ms-5 me-5">
                    <!-- <p class="fw-normal">Target</p> -->
                    <h3 class="fw-bold">14.4.1</h3>
                    <!--Name of in every research-->
                    <h4 class="fw-bolder">Water discharge guidelines and standards</h4>
                    <p></p>
                </div>
            </div>
            
            <div class="dropdown">

                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" onclick="compute1441();">
                </button>

                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                    <!-- Eto para madisplay yung data sa sdg content-->

                    <?php
                    $sql = "SELECT * FROM `research14.4.1`";
                    $select = mysqli_query($conn, $sql);

                    $checker = 0;
                    $score = 0;
                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id = $row['rid'];
                            $guidelines = $row['guidelines'];
                            // $tppa = $row['tppa'];
                            $ppa = $row['ppa'];
                            $description = $row['description'];
                            $cost = $row['cost'];
                            $fsource = $row['fsource'];
                            $evidence = $row['evidence'];


                            $checker += ((String) (strtoupper($guidelines)) == "YES") ? 1 : 0;
                            $score += 1; //or += 1
                    
                            ?>
                                                            <h3 class="text-start ms-3" id = "1441score"></h3>
                                                            <h5 class="text-start ms-3" id = "1441tppa"></h5>

                                                                    <div class="container d-grid mt-3">
                                                                        <div class="border border-dark p-3">

                                                                        <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Does your campus have water quality standards and guidelines for water discharges?</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$guidelines" ?>" name="1441guidelines"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                              
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Title</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$ppa" ?>" name="1441ppa"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Description</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$description" ?>" name="1441description"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$cost" ?>"
                                                                                                name="1441cost" aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$fsource" ?>"
                                                                                                name="1441fsource" aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Evidence</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$evidence" ?>"
                                                                                                name="1441evidence" aria-describedby="basic-addon1">
                                                                                </div>
                                                                        </div>
                                                                    </div>

                                                                    <?php
                        }
                    }
                    ?>
                    <input type="hidden" id="1441hiddenx" value = "<?= $checker ?>">
                    <input type="hidden" id="1441hiddeny" value = "<?= $score ?>">

                </ul>
            </div>
        </div>
    </div>
</div>
<!-- ======================================================================================================== -->
<div class="container d-grid" id="research1442">
    

    <div class="d-inline-flex mt-3">
        <div class="border border-dark w-100">
            <div class=" d-inline-flex justify-content-start align-items-center">
                <img src="../img/sdg14.jpg" class="p-4 d-block" width="150" alt="">
                <div class="d-grid ms-5 me-5">
                    <!-- <p class="fw-normal">Target</p> -->
                    <h3 class="fw-bold">14.4.2</h3>
                    <!--Name of in every research-->
                    <h4 class="fw-bolder">Action plan to reducing plastic waste</h4>
                    <p></p>
                </div>
            </div>
            
            <div class="dropdown">

                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" onclick = "compute1442();">
                </button>

                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                    <!-- Eto para madisplay yung data sa sdg content-->

                    <?php
                    $sql = "SELECT * FROM `research14.4.2`";
                    $select = mysqli_query($conn, $sql);
                    $checker = 0;
                    $score = 0;
                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id = $row['rid'];
                            $plan = $row['plan'];
                            // $tppa = $row['tppa'];
                            $ppa = $row['ppa'];
                            $description = $row['description'];
                            $cost = $row['cost'];
                            $fsource = $row['fsource'];
                            $evidence = $row['evidence'];

                            $checker += ((String) (strtoupper($plan)) == "YES") ? 1 : 0;
                            $score += 1; //or += 1
                    
                            ?>
                                                            <h3 class="text-start ms-3" id = "1442score"></h3>
                                                            <h5 class="text-start ms-3" id = "1442tppa"></h5>

                                                                    <div class="container d-grid mt-3">
                                                                        <div class="border border-dark p-3">

                                                                        <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Does your campus have an action pan in place to reduce plastic waste?</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$plan" ?>" name="1442plan"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                               
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Title</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$ppa" ?>" name="1442ppa"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Description</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$description" ?>" name="1442description"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$cost" ?>" name="1442cost"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$fsource" ?>"
                                                                                                name="1442fsource" aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Evidence</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$evidence" ?>"
                                                                                                name="1442evidence" aria-describedby="basic-addon1">
                                                                                </div>
                                                                        </div>
                                                                    </div>

                                                                    <?php
                        }
                    }
                    ?>                    
                    <input type="hidden" id="1442hiddenx" value = "<?= $checker ?>">
                    <input type="hidden" id="1442hiddeny" value = "<?= $score ?>">
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- ======================================================================================================== -->
<div class="container d-grid" id="research1443">
    

    <div class="d-inline-flex mt-3">
        <div class="border border-dark w-100">
            <div class=" d-inline-flex justify-content-start align-items-center">
                <img src="../img/sdg14.jpg" class="p-4 d-block" width="150" alt="">
                <div class="d-grid ms-5 me-5">
                    <!-- <p class="fw-normal">Target</p> -->
                    <h3 class="fw-bold">14.4.3</h3>
                    <!--Name of in every research-->
                    <h4 class="fw-bolder">Reducing marine pollution</h4>
                    <p></p>
                </div>
            </div>
            
            <div class="dropdown">

                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" onclick="compute1443();">
                </button>

                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                    <!-- Eto para madisplay yung data sa sdg content-->

                    <?php
                    $sql = "SELECT * FROM `research14.4.3`";
                    $select = mysqli_query($conn, $sql);
                    $checker = 0;
                    $score = 0;
                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id = $row['rid'];
                            $policy = $row['policy'];
                            // $tppa = $row['tppa'];
                            $ppa = $row['ppa'];
                            $description = $row['description'];
                            $cost = $row['cost'];
                            $fsource = $row['fsource'];
                            $evidence = $row['evidence'];

                            $checker += ((String) (strtoupper($policy)) == "YES") ? 1 : 0;
                            $score += 1; //or += 1
                            ?>
                                                            <h3 class="text-start ms-3" id = "1443score"></h3>
                                                            <h5 class="text-start ms-3" id = "1443tppa"></h5>

                                                                    <div class="container d-grid mt-3">
                                                                        <div class="border border-dark p-3">

                                                                        <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Does your campus have a policy on preventing and reducing marine pollution of all kinds, in particular from land-based activities?</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$policy" ?>" name="1443policy"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                               
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Title</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$ppa" ?>" name="1443ppa"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Description</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$description" ?>" name="1443description"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$cost" ?>" name="1443cost"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$fsource" ?>"
                                                                                                name="1443fsource" aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Evidence</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$evidence" ?>"
                                                                                                name="1443evidence" aria-describedby="basic-addon1">
                                                                                </div>
                                                                        </div>
                                                                    </div>

                                                                    <?php
                        }
                    }
                    ?>                    
                    <input type="hidden" id="1443hiddenx" value = "<?= $checker ?>">
                    <input type="hidden" id="1443hiddeny" value = "<?= $score ?>">
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- ======================================================================================================== -->
<div class="container d-grid" id="research1451">
    

    <div class="d-inline-flex mt-3">
        <div class="border border-dark w-100">
            <div class=" d-inline-flex justify-content-start align-items-center">
                <img src="../img/sdg14.jpg" class="p-4 d-block" width="150" alt="">
                <div class="d-grid ms-5 me-5">
                    <!-- <p class="fw-normal">Target</p> -->
                    <h3 class="fw-bold">14.5.1</h3>
                    <!--Name of in every research-->
                    <h4 class="fw-bolder">Minimizing alteration of aquatic ecosystems</h4>
                    <p></p>
                </div>
            </div>
            
            <div class="dropdown">

                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" onclick = "compute1451();">
                </button>

                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                    <!-- Eto para madisplay yung data sa sdg content-->

                    <?php
                    $sql = "SELECT * FROM `research14.5.1`";
                    $select = mysqli_query($conn, $sql);
                    $checker = 0;
                    $score = 0;
                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id = $row['rid'];
                            $plan = $row['plan'];
                            $ppa = $row['ppa'];
                            $description = $row['description'];
                            $cost = $row['cost'];
                            $fsource = $row['fsource'];

                            $checker += ((String) (strtoupper($plan)) == "YES") ? 1 : 0;
                            $score += 1;

                            ?>
                                                            <h3 class="text-start ms-3" id = "1451score"></h3>
                                                            <h5 class="text-start ms-3" id = "1451tppa"></h5>

                                                                    <div class="container d-grid mt-3">
                                                                        <div class="border border-dark p-3">

                                                                        <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Does your campus have a plan to minimize physical, chemical and biological alterations of related aquatic ecosystems</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$plan" ?>" name="1451plan"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Title</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$ppa" ?>" name="1451ppa"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Description</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$description" ?>" name="1451description"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$cost" ?>" name="1451cost"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$fsource" ?>"
                                                                                                name="1451fsource" aria-describedby="basic-addon1">
                                                                                </div>
                                                                        </div>
                                                                    </div>

                                                                    <?php
                        }
                    }
                    ?>                    
                    <input type="hidden" id="1451hiddenx" value = "<?= $checker ?>">
                    <input type="hidden" id="1451hiddeny" value = "<?= $score ?>">
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- ======================================================================================================== -->
<div class="container d-grid" id="research1452">
    

    <div class="d-inline-flex mt-3">
        <div class="border border-dark w-100">
            <div class=" d-inline-flex justify-content-start align-items-center">
                <img src="../img/sdg14.jpg" class="p-4 d-block" width="150" alt="">
                <div class="d-grid ms-5 me-5">
                    <!-- <p class="fw-normal">Target</p> -->
                    <h3 class="fw-bold">14.5.2</h3>
                    <!--Name of in every research-->
                    <h4 class="fw-bolder">Monitoring the health of aquatic ecosysystems</h4>
                    <p></p>
                </div>
            </div>
            
            <div class="dropdown">

                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" onclick = "compute1452();">
                </button>
 
                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                    <!-- Eto para madisplay yung data sa sdg content-->

                    <?php
                    $sql = "SELECT * FROM `research14.5.2`";
                    $select = mysqli_query($conn, $sql);
                    $score = 0;
                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id = $row['rid'];
                            // $tppa = $row['tppa'];
                            $ppa = $row['ppa'];
                            $description = $row['description'];
                            $cost = $row['cost'];
                            $fsource = $row['fsource'];

                            $score += 1; // or += 1
                            ?>
                                                            <h3 class="text-start ms-3" id = "1452score"></h3>
                                                            <h5 class="text-start ms-3" id = "1452tppa"></h5>

                                                                    <div class="container d-grid mt-3">
                                                                        <div class="border border-dark p-3">
                                                                       
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Title</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$ppa" ?>" name="1452ppa"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Description</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$description" ?>" name="1452description"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$cost" ?>" name="1452cost"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$fsource" ?>"
                                                                                                name="1452fsource" aria-describedby="basic-addon1">
                                                                                </div>
                                                                        </div>
                                                                    </div>

                                                                    <?php
                        }
                    }
                    ?>
                    <input type="hidden" id="1452hidden" value = "<?= $score ?>">
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- ======================================================================================================== -->
<div class="container d-grid" id="research1453">
    

    <div class="d-inline-flex mt-3">
        <div class="border border-dark w-100">
            <div class=" d-inline-flex justify-content-start align-items-center">
                <img src="../img/sdg14.jpg" class="p-4 d-block" width="150" alt="">
                <div class="d-grid ms-5 me-5">
                    <!-- <p class="fw-normal">Target</p> -->
                    <h3 class="fw-bold">14.5.3</h3>
                    <!--Name of in every research-->
                    <h4 class="fw-bolder">Programmes towards food aquatic stewardship practices</h4>
                    <p></p>
                </div>
            </div>
            
            <div class="dropdown">

                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" onclick = "compute1453();">
                </button>

                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                    <!-- Eto para madisplay yung data sa sdg content-->
 
                    <?php
                    $sql = "SELECT * FROM `research14.5.3`";
                    $select = mysqli_query($conn, $sql);
                    $score = 0;
                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id = $row['rid'];
                            // $tppa = $row['tppa'];
                            $title = $row['title'];
                            $description = $row['description'];

                            $tenrollees = $row['tenrollees'];
                            $teMale = $row['teMale'];
                            $teFemale = $row['teFemale'];

                            $tcost = $row['tcost'];
                            $fsource = $row['fsource'];

                            $score += 1; // or += 1
                    

                            ?>
                                                            <h3 class="text-start ms-3" id = "1453score"></h3>
                                                            <h5 class="text-start ms-3" id = "1453tppa"></h5>

                                                                    <div class="container d-grid mt-3">
                                                                        <div class="border border-dark p-3">

                                                                        
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Title</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$title" ?>" name="1453title"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Description</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$description" ?>" name="1453description"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                    <span class="input-group-text" id="basic-addon1">Total Enrollees</span>
                                                                                    <input type="text" class="form-control" value="<?php echo "$tenrollees" ?>" name="1453tenrollees"
                                                                                            aria-describedby="basic-addon1">
                                                                                            <span class="input-group-text" id="basic-addon1">Male</span>
                                                                                    <input type="text" class="form-control" value="<?php echo "$teMale" ?>" name="1453teMale"
                                                                                            aria-describedby="basic-addon1">
                                                                                    <span class="input-group-text" id="basic-addon1">Female</span>
                                                                                    <input type="text" class="form-control" value="<?php echo "$teFemale" ?>" name="1453teFemale"
                                                                                            aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$cost" ?>"
                                                                                                name="1453cost" aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$fsource" ?>"
                                                                                                name="1453fsource" aria-describedby="basic-addon1">
                                                                                </div>
                                                                        </div>
                                                                    </div>

                                                                    <?php
                        }
                    }
                    ?>
                    <input type="hidden" id="1453hidden" value = "<?= $score ?>">
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- ======================================================================================================== -->
<div class="container d-grid" id="research1454">
    

    <div class="d-inline-flex mt-3">
        <div class="border border-dark w-100">
            <div class=" d-inline-flex justify-content-start align-items-center">
                <img src="../img/sdg14.jpg" class="p-4 d-block" width="150" alt="">
                <div class="d-grid ms-5 me-5">
                    <!-- <p class="fw-normal">Target</p> -->
                    <h3 class="fw-bold">14.5.4</h3>
                    <!--Name of in every research-->
                    <h4 class="fw-bolder">Collaboration For Shared Aquatic Ecosystems</h4>
                    <p></p>
                </div>
            </div>
            
            <div class="dropdown">

                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" onclick = "compute1454();">
                </button>

                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                    <!-- Eto para madisplay yung data sa sdg content-->

                    <?php
                    $sql = "SELECT * FROM `research14.5.4`";
                    $select = mysqli_query($conn, $sql);
                    $score = 0;
                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id = $row['rid'];

                            // $tcollaboration = $row['tcollaboration'];
                            $ppa = $row['ppa'];
                            $description = $row['description'];
                            $cost = $row['cost'];
                            $fsource = $row['fsource'];

                            $score += 1; // or += 1
                            // $score += 1; // or += 1
                            ?>
                                                            <h3 class="text-start ms-3" id = "1454score"></h3>
                                                            <h5 class="text-start ms-3" id = "1454tppa"></h5>

                                                                    <div class="container d-grid mt-3">
                                                                        <div class="border border-dark p-3">

                                                                       
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Title</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$ppa" ?>" name="1454ppa"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Description</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$description" ?>" name="1454description"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$cost" ?>" name="1454cost"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$fsource" ?>"
                                                                                                name="1454fsource" aria-describedby="basic-addon1">
                                                                        </div>
                                                                    </div>

                                                                    <?php
                        }
                    }
                    ?>
                    <input type="hidden" id="1454hidden" value = "<?= $score ?>">
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- ======================================================================================================== -->
<div class="container d-grid" id="research1455">
    

    <div class="d-inline-flex mt-3">
        <div class="border border-dark w-100">
            <div class=" d-inline-flex justify-content-start align-items-center">
                <img src="../img/sdg14.jpg" class="p-4 d-block" width="150" alt="">
                <div class="d-grid ms-5 me-5">
                    <!-- <p class="fw-normal">Target</p> -->
                    <h3 class="fw-bold">14.5.5</h3>
                    <!--Name of in every research-->
                    <h4 class="fw-bolder">Watershed Management Strategy</h4>
                    <p></p>
                </div>
            </div>
            
            <div class="dropdown">

                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" onclick = "compute1455();">
                </button>

                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                    <!-- Eto para madisplay yung data sa sdg content-->

                    <?php
                    $sql = "SELECT * FROM `research14.5.5`";
                    $select = mysqli_query($conn, $sql);
                    $checker = 0;
                    $score = 0;
                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id = $row['rid'];

                            $strategy = $row['strategy'];
                            // $tppa = $row['tppa'];
                            $ppa = $row['ppa'];
                            $description = $row['description'];
                            $cost = $row['cost'];
                            $fsource = $row['fsource'];

                            $checker += ((String) (strtoupper($strategy)) == "YES") ? 1 : 0;
                            $score += 1; // or += 1
                            ?>
                                                            <h3 class="text-start ms-3" id = "1455score"></h3>
                                                            <h5 class="text-start ms-3" id = "1455tppa"></h5>

                                                                    <div class="container d-grid mt-3">
                                                                        <div class="border border-dark p-3">

                                                                        <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Does your campus have a watershed management strategy based on location specific diversity of aquatic species?</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$strategy" ?>" name="1455strategy"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Title</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$ppa" ?>" name="1455ppa"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Description</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$description" ?>" name="1455description"
                                                                                                aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$cost" ?>"
                                                                                                name="1455cost" aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <div class="input-group mb-3">
                                                                                        <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                                                                        <input type="text" class="form-control" value="<?php echo "$fsource" ?>"
                                                                                                name="1455fsource" aria-describedby="basic-addon1">
                                                                                </div>
                                                                        </div>
                                                                    </div>

                                                                    <?php
                        }
                    }
                    ?>                    
                    <input type="hidden" id="1455hiddenx" value = "<?= $checker ?>">
                    <input type="hidden" id="1455hiddeny" value = "<?= $score ?>">
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