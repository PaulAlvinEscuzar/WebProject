<?php include '../includes/header.php';
include '../includes/db.php'; 
$studentTotal = 4784;
$empTotal = 206;
?>
<div class="container">
    <div class="row-mt-5">
        <div class="container-xl" style="height:400px; background-color:#e01a83;">
            <div class="row justify-content-center">
                <div class="co-md-5 text-center text-md-start text-light ps-5">
                    <h1>
                        <div class="display-5 mt-5 f2-bold text-gray" style="font-family:'Oswald', sans-serif;">Goal
                        </div>
                        <div class="display-5 f2-bold">10</div>
                        <div class="display-3 line-break fw-bold" style="margin-top:80px">Reduce inequality within and
                            among countries</div>
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

                <!--target 10.1-->
                <div class="container d-grid">
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../img/sdg10.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">10.1</h3>
                                    <h4 class="fw-bolder">Research on Reduced Inequalities</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton101" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton101" style="background-color:lightgrey;">
                                <?php
                                    // Perform a SELECT query to fetch the scores
                                    $query101 = "SELECT score FROM `research 10.1.1`";
                                    $result101 = mysqli_query($conn, $query101);

                                    if($result101) {
                                        $sumOfScores1011 = 0;
                                        $countOfTitles1011 = 0;

                                        // Loop through the result set and calculate the sum of scores and count of titles
                                        while($row = mysqli_fetch_assoc($result101)) {
                                            $sumOfScores1011 += $row['score'];
                                            $countOfTitles1011++;
                                        }

                                        // Calculate the average
                                        if($countOfTitles1011 > 0) {
                                            $averageScore1011 = $sumOfScores1011 / $countOfTitles1011;
                                        } else {
                                            $averageScore1011 = 0;
                                        }

                                        // Free the result set
                                        mysqli_free_result($result101);
                                    } else {
                                        echo "Query failed. ".mysqli_error($conn);
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Score:
                                        <?php echo $averageScore1011; ?>
                                    </h3>
                <!--target 10.1.1-->
                <div class="container d-grid" id="research1011" style="background-color:lightgrey;">
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../img/sdg10.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <h3 class="fw-bold">10.1.1</h3>
                                    <!--Name of in every research-->
                                    <h4 class="fw-bolder">Research on Reduced Inequalities</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1011" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1011" style="background-color:lightgrey;">
                                    <?php
                                    $query1011 = "SELECT * FROM `research 10.1.1`";
                                    $select1011 = mysqli_query($conn, $query1011);

                                    if(mysqli_num_rows($select1011) > 0) {
                                        while($row = mysqli_fetch_assoc($select1011)) {
                                            ?>
                                            <div class="container d-grid mt-3">
                                                <div class="border border-dark p-3">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Title</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['title']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Author</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['author']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Year Publication</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['year_pub']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of
                                                            Citations</span>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo $row['no_citations']; ?>" aria-label="Username"
                                                            aria-describedby="basic-addon1" readonly>
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
            </ul>
        </div>
    </div>
                    </div>
                </div>


            
                <!--target 10.3-->
                <div class="container d-grid">
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../img/sdg10.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">10.3</h3>
                                    <h4 class="fw-bolder">Proportion of Students and Employees with Disabilities</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton103" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton103" style="background-color:lightgrey;">
                <!--target 10.3.1-->
                <div class="container d-grid" id="research1031">
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../img/sdg10.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <h3 class="fw-bold">10.3.1</h3>
                                    <!--Name of in every research-->
                                    <h4 class="fw-bolder">Proportion of Students with Disabilities</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1031" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1031" style="background-color:lightgrey;">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <?php
                                    $query1031 = "SELECT * FROM `research 10.3.1`";
                                    $select1031 = mysqli_query($conn, $query1031);

                                    if(mysqli_num_rows($select1031) > 0) {
                                        while($row = mysqli_fetch_assoc($select1031)) {
                                            ?>
                                        <div class="container d-grid mt-3">
                                            <div class="border border-dark p-3">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Number of Male Student
                                                        with Disabilities</span>
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $row['numSWDmale']; ?>" aria-label="Username"
                                                        aria-describedby="basic-addon1" readonly>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Number of Female
                                                        Student with Disabilities</span>
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $row['numSWDfemale']; ?>" aria-label="Username"
                                                        aria-describedby="basic-addon1" readonly>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Total Number of Student
                                                        with Disabilities</span>
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $row['numSWDtotal']; ?>" aria-label="Username"
                                                        aria-describedby="basic-addon1" readonly>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Psychosocial
                                                        Disorder</span>
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $row['psychosocialDis_S']; ?>"
                                                        aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Disability caused by
                                                        Chronic Illness</span>
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $row['CI_Dis_S']; ?>" aria-label="Username"
                                                        aria-describedby="basic-addon1" readonly>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Learning
                                                        Disability</span>
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $row['learningDis_S']; ?>" aria-label="Username"
                                                        aria-describedby="basic-addon1" readonly>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Visual
                                                        Disability</span>
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $row['visualDis_S']; ?>" aria-label="Username"
                                                        aria-describedby="basic-addon1" readonly>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Orthopedic/Locomotor
                                                        Disability</span>
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $row['locoDis_S']; ?>" aria-label="Username"
                                                        aria-describedby="basic-addon1" readonly>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Communication
                                                        Disability</span>
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $row['commDis_S']; ?>" aria-label="Username"
                                                        aria-describedby="basic-addon1" readonly>
                                                </div>
                                                <?php
                                                $perc1031_1 = ($row['numSWDtotal'] / $studentTotal) * 100;
                                                ?>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control text-center"
                                                        value="<?php echo number_format($perc1031_1, 2); ?>% of the student population belongs to PWDs." aria-label="Username"
                                                        aria-describedby="basic-addon1" readonly>
                                                </div>
                                                <br>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Student with PWD
                                                        ID</span>
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $row['numSWPI_S']; ?>" aria-label="Username"
                                                        aria-describedby="basic-addon1" readonly>
                                                </div>
                                                <?php
                                                $perc1031_2 = ($row['numSWPI_S'] / $row['numSWDtotal']) * 100;
                                                ?>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control text-center"
                                                        value="<?php echo number_format($perc1031_2, 2); ?>% of the PWD student population have a PWD ID." aria-label="Username"
                                                        aria-describedby="basic-addon1" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        }
                                    } else {
                                        echo '<div class="container mt-3"><p class="text-center">No records found</p></div>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                
                <!--target 10.3.2-->
                <div class="container d-grid" id="research1032">
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class="d-inline-flex justify-content-start align-items-center">
                                <img src="../img/sdg10.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <h3 class="fw-bold">10.3.2</h3>
                                    <!--Name of in every research-->
                                    <h4 class="fw-bolder">Proportion of Employees with Disabilities</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1032" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1032" style="background-color:lightgrey;">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <?php
                                    $query1032 = "SELECT * FROM `research 10.3.2`";
                                    $select1032 = mysqli_query($conn, $query1032);

                                    if(mysqli_num_rows($select1032) > 0) {
                                        while($row = mysqli_fetch_assoc($select1032)) {
                                            ?>
                                                    <div class="container d-grid mt-3">
                                                        <div class="border border-dark p-3">
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text" id="basic-addon1">Number of Male
                                                                    Employees with Disabilities</span>
                                                                <input type="text" class="form-control"
                                                                    value="<?php echo $row['numEWDmale']; ?>" aria-label="Username"
                                                                    aria-describedby="basic-addon1" readonly>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text" id="basic-addon1">Number of Female
                                                                    Employees with Disabilities</span>
                                                                <input type="text" class="form-control"
                                                                    value="<?php echo $row['numEWDfemale']; ?>" aria-label="Username"
                                                                    aria-describedby="basic-addon1" readonly>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text" id="basic-addon1">Total Number of
                                                                    Employees with Disabilities</span>
                                                                <input type="text" class="form-control"
                                                                    value="<?php echo $row['numEWDtotal']; ?>" aria-label="Username"
                                                                    aria-describedby="basic-addon1" readonly>
                                                            </div>
                                                            <br>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text" id="basic-addon1">Psychiatric
                                                                    Disorder</span>
                                                                <input type="text" class="form-control"
                                                                    value="<?php echo $row['psychiatricDis_E']; ?>"
                                                                    aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text" id="basic-addon1">Disability caused by
                                                                    Chronic Illness</span>
                                                                <input type="text" class="form-control"
                                                                    value="<?php echo $row['CI_Dis_E']; ?>" aria-label="Username"
                                                                    aria-describedby="basic-addon1" readonly>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text" id="basic-addon1">Learning
                                                                    Disability</span>
                                                                <input type="text" class="form-control"
                                                                    value="<?php echo $row['learningDis_E']; ?>" aria-label="Username"
                                                                    aria-describedby="basic-addon1" readonly>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text" id="basic-addon1">Visual
                                                                    Disability</span>
                                                                <input type="text" class="form-control"
                                                                    value="<?php echo $row['visualDis_E']; ?>" aria-label="Username"
                                                                    aria-describedby="basic-addon1" readonly>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text" id="basic-addon1">Orthopedic/Locomotor
                                                                    Disability</span>
                                                                <input type="text" class="form-control"
                                                                    value="<?php echo $row['locoDis_E']; ?>" aria-label="Username"
                                                                    aria-describedby="basic-addon1" readonly>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text" id="basic-addon1">Communication
                                                                    Disability</span>
                                                                <input type="text" class="form-control"
                                                                    value="<?php echo $row['commDis_E']; ?>" aria-label="Username"
                                                                    aria-describedby="basic-addon1" readonly>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text" id="basic-addon1">Congenital</span>
                                                                <input type="text" class="form-control"
                                                                    value="<?php echo $row['congenital_E']; ?>" aria-label="Username"
                                                                    aria-describedby="basic-addon1" readonly>
                                                            </div>
                                                            <?php
                                                            $perc1032_1 = ($row['numEWDtotal'] / $empTotal) * 100;
                                                            ?>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control text-center"
                                                                    value="<?php echo number_format($perc1032_1, 2); ?>% of the employees population belongs to PWDs." aria-label="Username"
                                                                    aria-describedby="basic-addon1" readonly>
                                                            </div>
                                                            <br>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text" id="basic-addon1">Employees with PWD
                                                                    ID</span>
                                                                <input type="text" class="form-control"
                                                                    value="<?php echo $row['numEWPI']; ?>" aria-label="Username"
                                                                    aria-describedby="basic-addon1" readonly>
                                                            </div>
                                                            <?php
                                                            $numEWPI = $row['numEWPI'];
                                                            $numEWDtotal = $row['numEWDtotal'];
                                                            
                                                            // Check if $numEWDtotal is 0 to avoid division by zero
                                                            $perc1032_2 = ($numEWDtotal != 0) ? ($numEWPI / $numEWDtotal) * 100 : 0;
                                                            
                                                            // If the result is NaN, set it to 0
                                                            $perc1032_2 = is_nan($perc1032_2) ? 0 : $perc1032_2;
                                                            ?>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control text-center"
                                                                    value="<?php echo number_format($perc1032_2, 2); ?>% of the PWD employee population have a PWD ID." aria-label="Username"
                                                                    aria-describedby="basic-addon1" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                        }
                                    } else {
                                        echo '<div class="container mt-3"><p class="text-center">No records found</p></div>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </ul>
        </div>
    </div>
                    </div>
                </div>


                <!--target 10.4-->
                <div class="container d-grid">
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../img/sdg10.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">10.4</h3>
                                    <h4 class="fw-bolder">Proportion of Students and Employees who belong to Indigenous Peoples (IPs) Group</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton104" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton104" style="background-color:lightgrey;">
                <!--target 10.4.1-->
                <div class="container d-grid" id="research1041">
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class="d-inline-flex justify-content-start align-items-center">
                                <img src="../img/sdg10.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <h3 class="fw-bold">10.4.1</h3>
                                    <!--Name of in every research-->
                                    <h4 class="fw-bolder">Proportion of Students Who Belong to IPs</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1041" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1041" style="background-color:lightgrey;">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <?php
                                    $query1041 = "SELECT * FROM `research 10.4.1`";
                                    $select1041 = mysqli_query($conn, $query1041);

                                    if(mysqli_num_rows($select1041) > 0) {
                                        while($row = mysqli_fetch_assoc($select1041)) {
                                            ?>
                                                    <div class="container d-grid mt-3">
                                                        <div class="border border-dark p-3">
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text" id="basic-addon1">Number of Male Students
                                                                    Who Belong to IPs</span>
                                                                <input type="text" class="form-control"
                                                                    value="<?php echo $row['numIPmem_Smale']; ?>" aria-label="Username"
                                                                    aria-describedby="basic-addon1" readonly>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text" id="basic-addon1">Number of Female
                                                                    Students Who Belong to IPs</span>
                                                                <input type="text" class="form-control"
                                                                    value="<?php echo $row['numIPmem_Sfemale']; ?>"
                                                                    aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text" id="basic-addon1">Total Number of
                                                                    Students Who Belong to IPs</span>
                                                                <input type="text" class="form-control"
                                                                    value="<?php echo $row['numIPmem_Stotal']; ?>" aria-label="Username"
                                                                    aria-describedby="basic-addon1" readonly>
                                                            </div>
                                                            <?php
                                                            $perc1041 = ($row['numIPmem_Stotal'] / $studentTotal) * 100;
                                                            ?>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control text-center"
                                                                    value="<?php echo number_format($perc1041, 2); ?>% of the total student population belong to IPs." aria-label="Username"
                                                                    aria-describedby="basic-addon1" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                        }
                                    } else {
                                        echo '<div class="container mt-3"><p class="text-center">No records found</p></div>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!--target 10.4.2-->
                <div class="container d-grid" id="research1042">
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class="d-inline-flex justify-content-start align-items-center">
                                <img src="../img/sdg10.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <h3 class="fw-bold">10.4.2</h3>
                                    <!--Name of in every research-->
                                    <h4 class="fw-bolder">Proportion of Employees Who Belong to IPs</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1042" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1042" style="background-color:lightgrey;">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <?php
                                    $query1042 = "SELECT * FROM `research 10.4.2`";
                                    $select1042 = mysqli_query($conn, $query1042);

                                    if(mysqli_num_rows($select1042) > 0) {
                                        while($row = mysqli_fetch_assoc($select1042)) {
                                            ?>
                                                    <div class="container d-grid mt-3">
                                                        <div class="border border-dark p-3">
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text" id="basic-addon1">Number of Male
                                                                    Employees Who Belong to IPs</span>
                                                                <input type="text" class="form-control"
                                                                    value="<?php echo $row['numIPmem_Emale']; ?>" aria-label="Username"
                                                                    aria-describedby="basic-addon1" readonly>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text" id="basic-addon1">Number of Female
                                                                    Employees Who Belong to IPs</span>
                                                                <input type="text" class="form-control"
                                                                    value="<?php echo $row['numIPmem_Efemale']; ?>"
                                                                    aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text" id="basic-addon1">Total Number of
                                                                    Employees Who Belong to IPs</span>
                                                                <input type="text" class="form-control"
                                                                    value="<?php echo $row['numIPmem_Etotal']; ?>" aria-label="Username"
                                                                    aria-describedby="basic-addon1" readonly>
                                                            </div>
                                                            <?php
                                                            $numIPmem_Etotal = $row['numIPmem_Etotal'];

                                                            // Check if the denominator ($empTotal) is not zero to avoid division by zero
                                                            $perc1042 = ($empTotal != 0) ? ($numIPmem_Etotal / $empTotal) * 100 : 0;
                                                            
                                                            // If the result is NaN, set it to 0
                                                            $perc1042 = is_nan($perc1042) ? 0 : $perc1042;
                                                            ?>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control text-center"
                                                                    value="<?php echo number_format($perc1042, 2); ?>% of the total employees population belong to IPs." aria-label="Username"
                                                                    aria-describedby="basic-addon1" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                        }
                                    } else {
                                        echo '<div class="container mt-3"><p class="text-center">No records found</p></div>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </ul>
        </div>
    </div>
                    </div>
                </div>


                <!--target 10.5-->
                <div class="container d-grid">
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../img/sdg10.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">10.5</h3>
                                    <h4 class="fw-bolder">Proportion of Students and Employees who are Member of LGBTQIA+ Group</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton105" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton105" style="background-color:lightgrey;">
                <!--target 10.5.1-->
                <div class="container d-grid" id="research1051">
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class="d-inline-flex justify-content-start align-items-center">
                                <img src="../img/sdg10.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <h3 class="fw-bold">10.5.1</h3>
                                    <!--Name of in every research-->
                                    <h4 class="fw-bolder">Proportion of Students who are Member of LGBTQIA+ Group</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1051" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1051" style="background-color:lightgrey;">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <?php
                                    $query1051 = "SELECT * FROM `research 10.5.1`";
                                    $select1051 = mysqli_query($conn, $query1051);

                                    if(mysqli_num_rows($select1051) > 0) {
                                        while($row = mysqli_fetch_assoc($select1051)) {
                                            ?>
                                                    <div class="container d-grid mt-3">
                                                        <div class="border border-dark p-3">
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text" id="basic-addon1">Number of Students who
                                                                    are Members of LGBTQIA+ Group</span>
                                                                <input type="text" class="form-control"
                                                                    value="<?php echo $row['numLGBT_Stotal']; ?>" aria-label="Username"
                                                                    aria-describedby="basic-addon1" readonly>
                                                            </div>
                                                            <?php
                                                            $perc1051 = ($row['numLGBT_Stotal'] / $studentTotal) * 100;
                                                            ?>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control text-center"
                                                                    value="<?php echo number_format($perc1051, 2); ?>% of student population are members of LGBTQIA+ group." aria-label="Username"
                                                                    aria-describedby="basic-addon1" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                        }
                                    } else {
                                        echo '<div class="container mt-3"><p class="text-center">No records found</p></div>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!--target 10.5.2-->
                <div class="container d-grid" id="research1052">
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class="d-inline-flex justify-content-start align-items-center">
                                <img src="../img/sdg10.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <h3 class="fw-bold">10.5.2</h3>
                                    <!--Name of in every research-->
                                    <h4 class="fw-bolder">Proportion of Employees who are Member of LGBTQIA+ Group</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1052" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1052" style="background-color:lightgrey;">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <?php
                                    $query1052 = "SELECT * FROM `research 10.5.2`";
                                    $select1052 = mysqli_query($conn, $query1052);

                                    if(mysqli_num_rows($select1052) > 0) {
                                        while($row = mysqli_fetch_assoc($select1052)) {
                                            ?>
                                                    <div class="container d-grid mt-3">
                                                        <div class="border border-dark p-3">
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text" id="basic-addon1">Number of Employees who
                                                                    are Members of LGBTQIA+ Group</span>
                                                                <input type="text" class="form-control"
                                                                    value="<?php echo $row['numLGBT_Etotal']; ?>" aria-label="Username"
                                                                    aria-describedby="basic-addon1" readonly>
                                                            </div>
                                                            <?php
                                                            $perc1052 = ($empTotal != 0) ? ($row['numLGBT_Etotal'] / $empTotal) * 100 : 0;
                                                            $perc1052 = is_nan($perc1052) ? 0 : $perc1052;
                                                            ?>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control text-center"
                                                                    value="<?php echo number_format($perc1052, 2); ?>% of employee population are members of LGBTQIA+ group." aria-label="Username"
                                                                    aria-describedby="basic-addon1" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                        }
                                    } else {
                                        echo '<div class="container mt-3"><p class="text-center">No records found</p></div>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </ul>
        </div>
    </div>
                    </div>
                </div>


                <!--target 10.6-->
                <div class="container d-grid">
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../img/sdg10.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">10.6</h3>
                                    <h4 class="fw-bolder">Proportion of Students and Employees based on Religion</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton106" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton106" style="background-color:lightgrey;">
                <!--target 10.6.1-->
                <div class="container d-grid" id="research1061">
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class="d-inline-flex justify-content-start align-items-center">
                                <img src="../img/sdg10.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <h3 class="fw-bold">10.6.1</h3>
                                    <!--Name of in every research-->
                                    <h4 class="fw-bolder">Proportion of Students based on Religion</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1061" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1061" style="background-color:lightgrey;">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <?php
                                    $query1061 = "SELECT * FROM `research 10.6.1`";
                                    $select1061 = mysqli_query($conn, $query1061);

                                    if(mysqli_num_rows($select1061) > 0) {
                                        while($row = mysqli_fetch_assoc($select1061)) {
                                            ?>
                                        <div class="container d-grid mt-3">
                                            <div class="border border-dark p-3">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Number of male students
                                                        who belong to religious groups</span>
                                                    <input type="text" class="form-control" value="<?php echo $row['numReligiousGroup_Smale']; ?>"
                                                        name="numReligiousGroup_Smale" readonly>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Number of female
                                                        students who belong to religious groups</span>
                                                    <input type="text" class="form-control" value="<?php echo $row['numReligiousGroup_Sfemale']; ?>"
                                                        name="numReligiousGroup_Sfemale" readonly>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Total number of
                                                        students who belong to religious groups</span>
                                                    <input type="text" class="form-control" value="<?php echo $row['numReligiousGroup_Stotal']; ?>"
                                                        name="numReligiousGroup_Stotal" readonly>
                                                </div>
                                                <br>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of male students who belongs to Aglipayan</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numAglipayan_Smale']; ?>" name="numAglipayan_Smale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of female students who belongs to Aglipayan</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numAglipayan_Sfemale']; ?>" name="numAglipayan_Sfemale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of students who belongs to Aglipayan</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numAglipayan_Stotal']; ?>" name="numAglipayan_Stotal" readonly>
                                                    </div>
                                                    <br>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of male students who belongs to Born Again</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numBornAgain_Smale']; ?>" name="numBornAgain_Smale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of female students who belongs to Born Again</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numBornAgain_Sfemale']; ?>" name="numBornAgain_Sfemale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of students who belongs to Born Again</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numAglipayan_Stotal']; ?>" name="numBornAgain_Stotal" readonly>
                                                    </div>
                                                    <br>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of male students who belongs to Buddhism</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numBuddhism_Smale']; ?>" name="numBuddhism_Smale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of female students who belongs to Buddhism</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numBuddhism_Sfemale']; ?>" name="numBuddhism_Sfemale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of students who belongs to Buddhism</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numBuddhism_Stotal']; ?>" name="numBuddhism_Stotal" readonly>
                                                    </div>
                                                    <br>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of male students who belongs to Hinduism</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numHinduism_Smale']; ?>" name="numHinduism_Smale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of female students who belongs to Hinduism</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numHinduism_Sfemale']; ?>" name="numHinduism_Sfemale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of students who belongs to Hinduism</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numHinduism_Stotal']; ?>" name="numHinduism_Stotal" readonly>
                                                    </div>
                                                    <br>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of male students who belongs to Iglesia ni Cristo</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numINC_Smale']; ?>" name="numINC_Smale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of female students who belongs to Iglesia ni Cristo</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numINC_Sfemale']; ?>" name="numINC_Sfemale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of students who belongs to Iglesia ni Cristo</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numINC_Stotal']; ?>" name="numINC_Stotal" readonly>
                                                    </div>
                                                    <br>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of male students who belongs to Islam</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numIslam_Smale']; ?>" name="numIslam_Smale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of female students who belongs to Islam</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numIslam_Sfemale']; ?>" name="numIslam_Sfemale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of students who belongs to Islam</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numIslam_Stotal']; ?>" name="numIslam_Stotal" readonly>
                                                    </div>
                                                    <br>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of male students who belongs to Jehovah's Witnesses</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numJW_Smale']; ?>" name="numJW_Smale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of female students who belongs to Jehovah's Witnesses</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numJW_Sfemale']; ?>" name="numJW_Sfemale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of students who belongs to Jehovah's Witnesses</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numJW_Stotal']; ?>" name="numJW_Stotal" readonly>
                                                    </div>
                                                    <br>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of male students who belongs to Latter-Day Saints</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numLDS_Smale']; ?>" name="numLDS_Smale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of female students who belongs to Latter-Day Saints</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numLDS_Sfemale']; ?>" name="numLDS_Sfemale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of students who belongs to Latter-Day Saints</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numLDS_Stotal']; ?>" name="numLDS_Stotal" readonly>
                                                    </div>
                                                    <br>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of male students who belongs to Protestant</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numProtestant_Smale']; ?>" name="numProtestant_Smale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of female students who belongs to Protestant</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numProtestant_Sfemale']; ?>" name="numProtestant_Sfemale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of students who belongs to Protestant</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numProtestant_Stotal']; ?>" name="numProtestant_Stotal" readonly>
                                                    </div>
                                                    <br>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of male students who belongs to Roman Catholic</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numRC_Smale']; ?>" name="numRC_Smale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of female students who belongs to Roman Catholic</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numRC_Sfemale']; ?>" name="numRC_Sfemale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of students who belongs to Roman Catholic</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numRC_Stotal']; ?>" name="numRC_Stotal" readonly>
                                                    </div>
                                                    <br>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of male students who belongs to Seventh-day Adventists</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numSA_Smale']; ?>" name="numSA_Smale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of female students who belongs to Seventh-day Adventists</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numSA_Sfemale']; ?>" name="numSA_Sfemale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of students who belongs to Seventh-day Adventists</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numSA_Stotal']; ?>" name="numSA_Stotal" readonly>
                                                    </div>
                                                    <br>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of male students who belongs to Others</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numOthers_Smale']; ?>" name="numOthers_Smale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of female students who belongs to Others</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numOthers_Sfemale']; ?>" name="numOthers_Sfemale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of students who belongs to Others</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numOthers_Stotal']; ?>" name="numOthers_Stotal" readonly>
                                                    </div>
                                                    <br>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of students not affiliated with any religious denomination</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numNoReligion_Stotal']; ?>" name="numNoReligion_Stotal" readonly>
                                                    </div>
                                            </div>
                                        </div>
                                        <?php
                                        }
                                    } else {
                                        echo '<div class="container mt-3"><p class="text-center">No records found</p></div>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!--target 10.6.2-->
                <div class="container d-grid" id="research1062">
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class="d-inline-flex justify-content-start align-items-center">
                                <img src="../img/sdg10.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <h3 class="fw-bold">10.6.2</h3>
                                    <!--Name of in every research-->
                                    <h4 class="fw-bolder">Proportion of Employees based on Religion</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1062" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1062" style="background-color:lightgrey;">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <?php
                                    $query1062 = "SELECT * FROM `research 10.6.2`";
                                    $select1062 = mysqli_query($conn, $query1062);

                                    if(mysqli_num_rows($select1062) > 0) {
                                        while($row = mysqli_fetch_assoc($select1062)) {
                                            ?>
                                            <div class="container d-grid mt-3">
                                                <div class="border border-dark p-3">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of male employees
                                                            who belong to religious groups</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numReligiousGroup_Emale']; ?>"
                                                            name="numReligiousGroup_Emale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of female
                                                            employees who belong to religious groups</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numReligiousGroup_Efemale']; ?>"
                                                            name="numReligiousGroup_Efemale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of
                                                            employees who belong to religious groups</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numReligiousGroup_Etotal']; ?>"
                                                            name="numReligiousGroup_Etotal" readonly>
                                                    </div>
                                                    <br>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of male students who belongs to Aglipayan</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numAglipayan_Emale']; ?>" name="numAglipayan_Emale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of female students who belongs to Aglipayan</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numAglipayan_Efemale']; ?>" name="numAglipayan_Efemale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of students who belongs to Aglipayan</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numAglipayan_Etotal']; ?>" name="numAglipayan_Etotal" readonly>
                                                    </div>
                                                    <br>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of male employees who belongs to Born Again</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numBornAgain_Emale']; ?>" name="numBornAgain_Emale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of female employees who belongs to Born Again</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numBornAgain_Efemale']; ?>" name="numBornAgain_Efemale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of employees who belongs to Born Again</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numBornAgain_Etotal']; ?>" name="numBornAgain_Etotal" readonly>
                                                    </div>
                                                    <br>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of male employees who belongs to Buddhism</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numBuddhism_Emale']; ?>" name="numBuddhism_Emale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of female employees who belongs to Buddhism</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numBuddhism_Efemale']; ?>" name="numBuddhism_Efemale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of employees who belongs to Buddhism</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numBuddhism_Etotal']; ?>" name="numBuddhism_Etotal" readonly>
                                                    </div>
                                                    <br>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of male employees who belongs to Hinduism</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numHinduism_Emale']; ?>" name="numHinduism_Emale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of female employees who belongs to Hinduism</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numHinduism_Efemale']; ?>" name="numHinduism_Efemale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of employees who belongs to Hinduism</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numHinduism_Etotal']; ?>" name="numHinduism_Etotal" readonly>
                                                    </div>
                                                    <br>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of male employees who belongs to Iglesia ni Cristo</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numINC_Emale']; ?>" name="numINC_Emale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of female employees who belongs to Iglesia ni Cristo</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numINC_Efemale']; ?>" name="numINC_Efemale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of employees who belongs to Iglesia ni Cristo</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numINC_Etotal']; ?>" name="numINC_Etotal" readonly>
                                                    </div>
                                                    <br>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of male employees who belongs to Islam</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numIslam_Emale']; ?>" name="numIslam_Emale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of female employees who belongs to Islam</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numIslam_Efemale']; ?>" name="numIslam_Efemale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of employees who belongs to Islam</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numIslam_Etotal']; ?>" name="numIslam_Etotal" readonly>
                                                    </div>
                                                    <br>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of male employees who belongs to Jehovah's Witnesses</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numJW_Emale']; ?>" name="numJW_Emale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of female employees who belongs to Jehovah's Witnesses</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numJW_Efemale']; ?>" name="numJW_Efemale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of employees who belongs to Jehovah's Witnesses</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numJW_Etotal']; ?>" name="numJW_Etotal" readonly>
                                                    </div>
                                                    <br>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of male employees who belongs to Latter-Day Saints</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numLDS_Emale']; ?>" name="numLDS_Emale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of female employees who belongs to Latter-Day Saints</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numLDS_Efemale']; ?>" name="numLDS_Efemale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of employees who belongs to Latter-Day Saints</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numLDS_Etotal']; ?>" name="numLDS_Etotal" readonly>
                                                    </div>
                                                    <br>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of male employees who belongs to Protestant</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numProtestant_Emale']; ?>" name="numProtestant_Emale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of female employees who belongs to Protestant</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numProtestant_Efemale']; ?>" name="numProtestant_Efemale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of employees who belongs to Protestant</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numProtestant_Etotal']; ?>" name="numProtestant_Etotal" readonly>
                                                    </div>
                                                    <br>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of male employees who belongs to Roman Catholic</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numRC_Emale']; ?>" name="numRC_Emale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of female employees who belongs to Roman Catholic</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numRC_Efemale']; ?>" name="numRC_Efemale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of employees who belongs to Roman Catholic</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numRC_Etotal']; ?>" name="numRC_Etotal" readonly>
                                                    </div>
                                                    <br>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of male employees who belongs to Seventh-day Adventists</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numSA_Emale']; ?>" name="numSA_Emale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of female employees who belongs to Seventh-day Adventists</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numSA_Efemale']; ?>" name="numSA_Efemale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of employees who belongs to Seventh-day Adventists</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numSA_Etotal']; ?>" name="numSA_Etotal" readonly>
                                                    </div>
                                                    <br>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of male employees who belongs to Others</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numOthers_Emale']; ?>" name="numOthers_Emale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of female employees who belongs to Others</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numOthers_Efemale']; ?>" name="numOthers_Efemale" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of employees who belongs to Others</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numOthers_Etotal']; ?>" name="numOthers_Etotal" readonly>
                                                    </div>
                                                    <br>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of employees not affiliated with any religious denomination</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numNoReligion_Etotal']; ?>" name="numNoReligion_Etotal" readonly>
                                                    </div>
                                             </div>
                                         </div>
                                         <?php
                                        }
                                    } else {
                                        echo '<div class="container mt-3"><p class="text-center">No records found</p></div>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </ul>
        </div>
    </div>
                    </div>
                </div>


                <!--target 10.7-->
                <div class="container d-grid">
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../img/sdg10.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">10.7</h3>
                                    <h4 class="fw-bolder">Proportion of Refugee Students and Employees</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton107" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton107" style="background-color:lightgrey;">
                <!--target 10.7.1-->
                <div class="container d-grid" id="research1071">
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class="d-inline-flex justify-content-start align-items-center">
                                <img src="../img/sdg10.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <h3 class="fw-bold">10.7.1</h3>
                                    <!-- Name of in every research -->
                                    <h4 class="fw-bolder">Proportion of refugee student</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button" id="dropdownMenuButton1071"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1071" style="background-color:lightgrey;">
                                <!-- Eto para madisplay yung data sa sdg content -->
                                <?php
                                $query1071 = "SELECT * FROM `research 10.7.1`";
                                $select1071 = mysqli_query($conn, $query1071);

                                if(mysqli_num_rows($select1071) > 0) {
                                    while($row = mysqli_fetch_assoc($select1071)) {
                                        ?>
                                            <div class="container d-grid mt-3">
                                                <div class="border border-dark p-3">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of Male Refugees student</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numRefugee_Smale']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of Female Refugees student</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numRefugee_Sfemale']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total Number of Refugees student</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numRefugee_Stotal']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                            <?php
                                                            $perc1071 = ($row['numRefugee_Stotal'] / $studentTotal) * 100;
                                                            $perc1071 = is_nan($perc1071) ? 0 : $perc1071;
                                                            ?>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control text-center"
                                                                    value="<?php echo number_format($perc1071, 2); ?>% of the student population are refugees." aria-label="Username"
                                                                    aria-describedby="basic-addon1" readonly>
                                                            </div>
                                                </div>
                                            </div>
                                            <?php
                                    }
                                } else {
                                    echo '<div class="container mt-3"><p class="text-center">No records found</p></div>';
                                }
                                ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!--target 10.7.2-->
                <div class="container d-grid" id="research1072">
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class="d-inline-flex justify-content-start align-items-center">
                                <img src="../img/sdg10.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <h3 class="fw-bold">10.7.2</h3>
                                    <!-- Name of in every research -->
                                    <h4 class="fw-bolder">Proportion of refugee employees</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button" id="dropdownMenuButton1072"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1072" style="background-color:lightgrey;">
                                <!-- Eto para madisplay yung data sa sdg content -->
                                <?php
                                $query1072 = "SELECT * FROM `research 10.7.2`";
                                $select1072 = mysqli_query($conn, $query1072);

                                if(mysqli_num_rows($select1072) > 0) {
                                    while($row = mysqli_fetch_assoc($select1072)) {
                                        ?>
                                            <div class="container d-grid mt-3">
                                                <div class="border border-dark p-3">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of male refugee employees</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numRefugee_Emale']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of female refugee employees</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numRefugee_Efemale']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of refugee employees</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numRefugee_Etotal']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                            <?php
                                                            $perc1072 = ($row['numRefugee_Etotal'] / $empTotal) * 100;
                                                            $perc1072 = is_nan($perc1072) ? 0 : $perc1072;
                                                            ?>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control text-center"
                                                                    value="<?php echo number_format($perc1072, 2); ?>% of the employees population are refugees." aria-label="Username"
                                                                    aria-describedby="basic-addon1" readonly>
                                                            </div>
                                                </div>
                                            </div>
                                            <?php
                                    }
                                } else {
                                    echo '<div class="container mt-3"><p class="text-center">No records found</p></div>';
                                }
                                ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </ul>
        </div>
    </div>
                    </div>
                </div>


                <!--target 10.8-->
                <div class="container d-grid">
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../img/sdg10.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>
                                    <h3 class="fw-bold">10.8</h3>
                                    <h4 class="fw-bolder">Measures Against Discrimination on Students and Employees</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton108" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton108" style="background-color:lightgrey;">
                                <?php
                                    //Score for 10.8.1
                                    $count1081 = "SELECT COUNT(`10.8.1 ID`) AS count1081 FROM `research 10.8.1`";
                                    $result1081 = mysqli_query($conn, $count1081);
                                    if ($result1081) {
                                        // Fetch the result as an associative array
                                        $row = $result1081->fetch_assoc();
                                        // Access the count
                                        $c1081 = $row['count1081'];

                                        $score1081 = (($c1081/2) * 8) + 1;
                                        $score1081 = is_nan($score1081) ? 0 : $score1081;
                                        
                                        if ($score1081 > 9){
                                            $score1081 = 9;
                                        }
                                    } else {
                                        echo "Error: " . $conn->error;
                                    }
                                    
                                    //Score for 10.8.3
                                    $count1083 = "SELECT COUNT(`10.8.3 ID`) AS count1083 FROM `research 10.8.3`";
                                    $result1083 = mysqli_query($conn, $count1083);
                                    if ($result1083) {
                                        // Fetch the result as an associative array
                                        $row = $result1083->fetch_assoc();
                                        // Access the count
                                        $c1083 = $row['count1083'];

                                        $score1083 = ($c1083/2) * 9;
                                        $score1083 = is_nan($score1083) ? 0 : $score1083;

                                        if ($score1083 > 9){
                                            $score1083 = 9;
                                        }
                                    } else {
                                        echo "Error: " . $conn->error;
                                    }

                                    //Score for 10.8.4
                                    $count1084 = "SELECT COUNT(`10.8.4 ID`) AS count1084 FROM `research 10.8.4`";
                                    $result1084 = mysqli_query($conn, $count1084);
                                    if ($result1084) {
                                        // Fetch the result as an associative array
                                        $row = $result1084->fetch_assoc();
                                        // Access the count
                                        $c1084 = $row['count1084'];

                                        $score1084 = (1/2) + ($c1084/2) * 7;
                                        $score1084 = is_nan($score1084) ? 0 : $score1084;

                                        if ($score1084 > 9){
                                            $score1084 = 9;
                                        }
                                    } else {
                                        echo "Error: " . $conn->error;
                                    }

                                    //Score for 10.8.5
                                    $count1085 = "SELECT score FROM `research 10.8.5`";
                                    $result1085 = mysqli_query($conn, $count1085);
                                    if ($result1085) {
                                        // Fetch the result as an associative array
                                        $row = $result1085->fetch_assoc();
                                        // Access the count
                                        $score1085 = $row['score'];
                                        $score1085 = is_nan($score1085) ? 0 : $score1085;
                                    } else {
                                        echo "Error: " . $conn->error;
                                    }
                                    
                                    //Score for 10.8.6
                                    $count1086 = "SELECT COUNT(`10.8.6 ID`) AS count1086 FROM `research 10.8.6`";
                                    $result1086 = mysqli_query($conn, $count1086);
                                    if ($result1086) {
                                        // Fetch the result as an associative array
                                        $row = $result1086->fetch_assoc();
                                        // Access the count
                                        $c1086 = $row['count1086'];

                                        $score1086 = ($c1086/2) * 9;
                                        $score1086 = is_nan($score1086) ? 0 : $score1086;

                                        if ($score1086 > 9){
                                            $score1086 = 9;
                                        }
                                    } else {
                                        echo "Error: " . $conn->error;
                                    }
                                    
                                    //Score for 10.8.7
                                    $count1087 = "SELECT score FROM `research 10.8.7`";
                                    $result1087 = mysqli_query($conn, $count1087);
                                    if ($result1087) {
                                        // Fetch the result as an associative array
                                        $row = $result1087->fetch_assoc();
                                        // Access the count
                                        $score1087 = $row['score'];
                                        $score1087 = is_nan($score1087) ? 0 : $score1087;

                                        if ($score1087 > 9){
                                            $score1087 = 9;
                                        }
                                    } else {
                                        echo "Error: " . $conn->error;
                                    }
                                    
                                    //Score for 10.8.8
                                    $count1088 = "SELECT COUNT(`10.8.8 ID`) AS count1088 FROM `research 10.8.8`";
                                    $result1088 = mysqli_query($conn, $count1088);
                                    if ($result1088) {
                                        // Fetch the result as an associative array
                                        $row = $result1088->fetch_assoc();
                                        // Access the count
                                        $c1088 = $row['count1088'];

                                        $score1088 = ($c1088/5) * 9;
                                        $score1088 = is_nan($score1088) ? 0 : $score1088;

                                        if ($score1088 > 9){
                                            $score1088 = 9;
                                        }
                                    } else {
                                        echo "Error: " . $conn->error;
                                    }

                                    //Score for 10.8.9
                                    $count1089 = "SELECT COUNT(`10.8.9 ID`) AS count1089 FROM `research 10.8.9`";
                                    $result1089 = mysqli_query($conn, $count1089);
                                    if ($result1089) {
                                        // Fetch the result as an associative array
                                        $row = $result1089->fetch_assoc();
                                        // Access the count
                                        $c1089 = $row['count1089'];

                                        $score1089 = ($c1089/2) * 9;
                                        $score1089 = is_nan($score1089) ? 0 : $score1089;

                                        if ($score1089 > 9){
                                            $score1089 = 9;
                                        }
                                    } else {
                                        echo "Error: " . $conn->error;
                                    }

                                    //Score for 10.8.10
                                    $count10810 = "SELECT COUNT(`10.8.10 ID`) AS count10810 FROM `research 10.8.10`";
                                    $result10810 = mysqli_query($conn, $count10810);
                                    if ($result10810) {
                                        // Fetch the result as an associative array
                                        $row = $result10810->fetch_assoc();
                                        // Access the count
                                        $c10810 = $row['count10810'];

                                        $score10810 = (($c10810/2) * 8) + 1;
                                        $score10810 = is_nan($score10810) ? 0 : $score10810;

                                        if ($score10810 > 9){
                                            $score10810 = 9;
                                        }
                                    } else {
                                        echo "Error: " . $conn->error;
                                    }

                                    //summation of score for 10.8
                                    $score108 = $score1081 + $score1083 + $score1084 + $score1085 + $score1086 + $score1087 + $score1088 + $score1089 + $score10810;

                                    if ($score108 > 75) {
                                        $score108 = 75;
                                    }
                                ?>
                                <h3 class="text-start ms-3">Score:
                                    <?php echo $score108; ?>
                                </h3>
                <!--target 10.8.1-->
                <div class="container d-grid" id="research1081">
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class="d-inline-flex justify-content-start align-items-center">
                                <img src="../img/sdg10.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <h3 class="fw-bold">10.8.1</h3>
                                    <!-- Name of in every research -->
                                    <h4 class="fw-bolder">Non-discriminatory admissions policy</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button" id="dropdownMenuButton1081"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1081" style="background-color:lightgrey;">
                                <!-- Eto para madisplay yung data sa sdg content -->
                                <?php
                                $query1081 = "SELECT * FROM `research 10.8.1`";
                                $select1081 = mysqli_query($conn, $query1081);

                                if(mysqli_num_rows($select1081) > 0) {
                                    while($row = mysqli_fetch_assoc($select1081)) {
                                        ?>
                                            <div class="container d-grid mt-3">
                                                <div class="border border-dark p-3">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Title of the PPA</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['PPA1081title']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Short description of the PPA</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['PPA1081shortDesc']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total cost</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['ppa1081T_Cost']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Fund source</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['ppa1081Fsource']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Evidence</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['PPA1081evidence']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                    }
                                } else {
                                    echo '<div class="container mt-3"><p class="text-center">No records found</p></div>';
                                }
                                ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!--target 10.8.2-->
                <div class="container d-grid" id="research1082">
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class="d-inline-flex justify-content-start align-items-center">
                                <img src="../img/sdg10.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <h3 class="fw-bold">10.8.2</h3>
                                    <!-- Name of in every research -->
                                    <h4 class="fw-bolder">Student applicants tracking</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button" id="dropdownMenuButton1082"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1082" style="background-color:lightgrey;">
                                <!-- Eto para madisplay yung data sa sdg content -->
                                <?php
                                $query1082 = "SELECT * FROM `research 10.8.2`";
                                $select1082 = mysqli_query($conn, $query1082);

                                if(mysqli_num_rows($select1082) > 0) {
                                    while($row = mysqli_fetch_assoc($select1082)) {
                                        ?>
                                            <div class="container d-grid mt-3">
                                                <div class="border border-dark p-3">
                                                    <h4 class="text-center">Student Applicant Tracking</h4>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of male student applicants who belong to low-income families</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numLIFapplicant_Smale']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of female student applicants who belong to low-income families</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numLIFapplicant_Sfemale']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of student applicants who belong to low-income families</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numLIFapplicant_Stotal']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <?php
                                                    $perc1082_1 = ($row['numLIFapplicant_Stotal'] / $studentTotal) * 100;
                                                    $perc1082_1 = is_nan($perc1082_1) ? 0 : $perc1082_1;
                                                    ?>
                                                    <div class="input-group mb-3">
                                                                <input type="text" class="form-control text-center"
                                                                    value="<?php echo number_format($perc1082_1, 2); ?>% of student applicants belong to low-income families." aria-label="Username"
                                                                    aria-describedby="basic-addon1" readonly>
                                                            </div>
                                                    <br>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of male student applicants who belong to LGBTQIA+ group</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numLGBTapplicant_Smale']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of female student applicants who belong to LGBTQIA+ group</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numLGBTapplicant_Sfemale']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of student applicants who belong to LGBTQIA+ group</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numLGBTapplicant_Stotal']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <?php
                                                    $perc1082_2 = ($row['numLGBTapplicant_Stotal'] / $studentTotal) * 100;
                                                    $perc1082_2 = is_nan($perc1082_2) ? 0 : $perc1082_2;
                                                    ?>
                                                    <div class="input-group mb-3">
                                                                <input type="text" class="form-control text-center"
                                                                    value="<?php echo number_format($perc1082_2, 2); ?>% of student applicants belong to LGBTQIA+ group." aria-label="Username"
                                                                    aria-describedby="basic-addon1" readonly>
                                                            </div>
                                                    <br>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of male student applicants who are refugee</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numRefugeeApplicant_Smale']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of female student applicants who are refugee</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numRefugeeApplicant_Sfemale']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of student applicants who are refugee</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numRefugeeApplicant_Stotal']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <?php
                                                            $perc1082_3 = ($row['numRefugeeApplicant_Stotal'] / $studentTotal) * 100;
                                                            $perc1082_3 = is_nan($perc1082_3) ? 0 : $perc1082_3;
                                                    ?>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control text-center"
                                                                    value="<?php echo number_format($perc1082_3, 2); ?>% of student applicants are refugee." aria-label="Username"
                                                                    aria-describedby="basic-addon1" readonly>
                                                            </div>
                                                    <br>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of male student applicants who are disabled</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numDisApplicant_Smale']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div><div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of female student applicants who are disabled</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numDisApplicant_Sfemale']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of student applicants who are disabled</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numDisApplicant_Stotal']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <?php
                                                            $perc1082_4 = ($row['numDisApplicant_Stotal'] / $studentTotal) * 100;
                                                            $perc1082_4 = is_nan($perc1082_4) ? 0 : $perc1082_4;
                                                    ?>
                                                    <div class="input-group mb-3">
                                                                <input type="text" class="form-control text-center"
                                                                    value="<?php echo number_format($perc1082_4, 2); ?>% of student applicants have a disability." aria-label="Username"
                                                                    aria-describedby="basic-addon1" readonly>
                                                            </div>
                                                    <br>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of male student applicants are child of solo parent</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numCoSPapplicant_Smale']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of female student applicants are child of solo parent</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numCoSPapplicant_Sfemale']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of student applicants are child of solo parent</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numCoSPapplicant_Stotal']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <?php
                                                            $perc1082_5 = ($row['numCoSPapplicant_Stotal'] / $studentTotal) * 100;
                                                            $perc1082_5 = is_nan($perc1082_5) ? 0 : $perc1082_5;
                                                    ?>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control text-center"
                                                                    value="<?php echo number_format($perc1082_5, 2); ?>% of student applicants are child of solo parent." aria-label="Username"
                                                                    aria-describedby="basic-addon1" readonly>
                                                            </div>
                                                    <br>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of male student applicants are member of IPs</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numIPapplicant_Smale']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of female student applicants are member of IPs</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numIPapplicant_Sfemale']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of student applicants are member of IPs</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numIPapplicant_Stotal']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                            <?php
                                                            $perc1082_6 = ($row['numIPapplicant_Stotal'] / $studentTotal) * 100;
                                                            $perc1082_6 = is_nan($perc1082_6) ? 0 : $perc1082_6;
                                                            ?>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control text-center"
                                                                    value="<?php echo number_format($perc1082_6, 2); ?>% of student applicants are member of IPs." aria-label="Username"
                                                                    aria-describedby="basic-addon1" readonly>
                                                            </div>
                                                    <br>
                                                    <h4 class="text-center">Job Applicant Tracking</h4>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of male job applicants who belong to low-income families</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numLIFapplicant_Jmale']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of female job applicants who belong to low-income families</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numLIFapplicant_Jfemale']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div><div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of job applicants who belong to low-income families</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numLIFapplicant_Jtotal']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                            <?php
                                                            $perc1082_7 = ($row['numLIFapplicant_Jtotal'] / $empTotal) * 100;
                                                            $perc1082_7 = is_nan($perc1082_7) ? 0 : $perc1082_7;
                                                            ?>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control text-center"
                                                                    value="<?php echo number_format($perc1082_7, 2); ?>% of job applicants belong to low-income families." aria-label="Username"
                                                                    aria-describedby="basic-addon1" readonly>
                                                            </div>
                                                    <br>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of male job applicants who belong to LGBTQIA+ group</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numLGBTapplicant_Jmale']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of female job applicants who belong to LGBTQIA+ group</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numLGBTapplicant_Jfemale']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of job applicants who belong to LGBTQIA+ group</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numLGBTapplicant_Jtotal']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                            <?php
                                                            $perc1082_8 = ($row['numLGBTapplicant_Jtotal'] / $empTotal) * 100;
                                                            $perc1082_8 = is_nan($perc1082_8) ? 0 : $perc1082_8;
                                                            ?>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control text-center"
                                                                    value="<?php echo number_format($perc1082_8, 2); ?>% of job applicants belong to LGBTQIA+ group." aria-label="Username"
                                                                    aria-describedby="basic-addon1" readonly>
                                                            </div>
                                                    <br>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of male job applicants who are refugee</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numRefugeeApplicant_Jmale']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div><div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of female job applicants who are refugee</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numRefugeeApplicant_Jfemale']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of job applicants who are refugee</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numRefugeeApplicant_Jtotal']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                            <?php
                                                            $perc1082_9 = ($row['numRefugeeApplicant_Jtotal'] / $empTotal) * 100;
                                                            $perc1082_9 = is_nan($perc1082_9) ? 0 : $perc1082_9;
                                                            ?>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control text-center"
                                                                    value="<?php echo number_format($perc1082_9, 2); ?>% of job applicants are refugee." aria-label="Username"
                                                                    aria-describedby="basic-addon1" readonly>
                                                            </div>
                                                    <br>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of male job applicants who are disabled</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numDisApplicant_Jmale']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of female job applicants who are disabled</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numDisApplicant_Jfemale']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of job applicants who are disabled</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numDisApplicant_Jtotal']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                            <?php
                                                            $perc1082_10 = ($row['numDisApplicant_Jtotal'] / $empTotal) * 100;
                                                            $perc1082_10 = is_nan($perc1082_10) ? 0 : $perc1082_10;
                                                            ?>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control text-center"
                                                                    value="<?php echo number_format($perc1082_10, 2); ?>% of job applicants have a disability." aria-label="Username"
                                                                    aria-describedby="basic-addon1" readonly>
                                                            </div>
                                                    <br>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of male job applicants are child of solo parent</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numCoSPapplicant_Jmale']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of female job applicants are child of solo parent</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numCoSPapplicant_Jfemale']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of job applicants are child of solo parent</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numCoSPapplicant_Jtotal']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                            <?php
                                                            $perc1082_11 = ($row['numCoSPapplicant_Jtotal'] / $empTotal) * 100;
                                                            $perc1082_11 = is_nan($perc1082_11) ? 0 : $perc1082_11;
                                                            ?>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control text-center"
                                                                    value="<?php echo number_format($perc1082_11, 2); ?>% of job applicants are solo parent." aria-label="Username"
                                                                    aria-describedby="basic-addon1" readonly>
                                                            </div>
                                                    <br>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of male job applicants are member of IPs</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numIPapplicant_Jmale']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Number of female job applicants are member of IPs</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numIPapplicant_Jfemale']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of job applicants are member of IPs</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['numIPapplicant_Jtotal']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                            <?php
                                                            $perc1082_12 = ($row['numIPapplicant_Jtotal'] / $empTotal) * 100;
                                                            $perc1082_12 = is_nan($perc1082_12) ? 0 : $perc1082_12;
                                                            ?>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control text-center"
                                                                    value="<?php echo number_format($perc1082_12, 2); ?>% of job applicants are member of IP groups." aria-label="Username"
                                                                    aria-describedby="basic-addon1" readonly>
                                                            </div>
                                                </div>
                                            </div>
                                            <?php
                                    }
                                } else {
                                    echo '<div class="container mt-3"><p class="text-center">No records found</p></div>';
                                }
                                ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--target 10.8.3-->
                <div class="container d-grid" id="research1083">
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class="d-inline-flex justify-content-start align-items-center">
                                <img src="../img/sdg10.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <h3 class="fw-bold">10.8.3</h3>
                                    <!-- Name of in every research -->
                                    <h4 class="fw-bolder">Access to university underrepresented groups recruit</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button" id="dropdownMenuButton1083"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1083" style="background-color:lightgrey;">
                                <!-- Eto para madisplay yung data sa sdg content -->
                                <?php
                                $query1083 = "SELECT * FROM `research 10.8.3`";
                                $select1083 = mysqli_query($conn, $query1083);

                                if(mysqli_num_rows($select1083) > 0) {
                                    while($row = mysqli_fetch_assoc($select1083)) {
                                        ?>
                                            <div class="container d-grid mt-3">
                                                <div class="border border-dark p-3">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Title/Type of recruitment programs</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['RPtitle']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Short description</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['RPshortDesc']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total cost</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['rpT_Cost']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Fund source</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['rpFsource']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                          
                                                </div>
                                            </div>
                                            <?php
                                    }
                                } else {
                                    echo '<div class="container mt-3"><p class="text-center">No records found</p></div>';
                                }
                                ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!--target 10.8.4-->
                <div class="container d-grid" id="research1084">
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class="d-inline-flex justify-content-start align-items-center">
                                <img src="../img/sdg10.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <h3 class="fw-bold">10.8.4</h3>
                                    <!-- Name of in every research -->
                                    <h4 class="fw-bolder">Anti-Discrimination Policies</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button" id="dropdownMenuButton1084"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1084" style="background-color:lightgrey;">
                                <!-- Eto para madisplay yung data sa sdg content -->
                                <?php
                                $query1084 = "SELECT * FROM `research 10.8.4`";
                                $select1084 = mysqli_query($conn, $query1084);

                                if(mysqli_num_rows($select1084) > 0) {
                                    while($row = mysqli_fetch_assoc($select1084)) {
                                        ?>
                                            <div class="container d-grid mt-3">
                                                <div class="border border-dark p-3">
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Title of the PPA</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['PPA1084title']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Short description of the PPA</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['PPA1084shortDesc']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total cost</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['ppa1084T_Cost']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Fund source</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['ppa1084Fsource']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Evidence</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['PPA1084evidence']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                           
                                                </div>
                                            </div>
                                            <?php
                                    }
                                } else {
                                    echo '<div class="container mt-3"><p class="text-center">No records found</p></div>';
                                }
                                ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!--target 10.8.5-->
                <div class="container d-grid" id="research1085">
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class="d-inline-flex justify-content-start align-items-center">
                                <img src="../img/sdg10.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <h3 class="fw-bold">10.8.5</h3>
                                    <!-- Name of in every research -->
                                    <h4 class="fw-bolder">Campus diversity officer</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button" id="dropdownMenuButton1085"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1085" style="background-color:lightgrey;">
                                <!-- Eto para madisplay yung data sa sdg content -->
                                <?php
                                $query1085 = "SELECT * FROM `research 10.8.5`";
                                $select1085 = mysqli_query($conn, $query1085);

                                if(mysqli_num_rows($select1085) > 0) {
                                    while($row = mysqli_fetch_assoc($select1085)) {
                                        ?>
                                            <div class="container d-grid mt-3">
                                                <div class="border border-dark p-3">
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Is there an existence of committee and/or offices</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['comoffExist']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                            
                           
                                                </div>
                                            </div>
                                            <?php
                                    }
                                } else {
                                    echo '<div class="container mt-3"><p class="text-center">No records found</p></div>';
                                }
                                ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!--target 10.8.6-->
                <div class="container d-grid" id="research1086">
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class="d-inline-flex justify-content-start align-items-center">
                                <img src="../img/sdg10.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <h3 class="fw-bold">10.8.6</h3>
                                    <!-- Name of in every research -->
                                    <h4 class="fw-bolder">Support for underrepresented groups (exclude PWDs)</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button" id="dropdownMenuButton1086"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1086" style="background-color:lightgrey;">
                                <!-- Eto para madisplay yung data sa sdg content -->
                                <?php
                                $query1086 = "SELECT * FROM `research 10.8.6`";
                                $select1086 = mysqli_query($conn, $query1086);

                                if(mysqli_num_rows($select1086) > 0) {
                                    while($row = mysqli_fetch_assoc($select1086)) {
                                        ?>
                                            <div class="container d-grid mt-3">
                                                <div class="border border-dark p-3">
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Title of the PPA</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['PPA1086title']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Short description of the PPA</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['PPA1086shortDesc']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total cost</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['ppa1086T_Cost']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Fund source</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['ppa1086Fsource']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                                      
                                                </div>
                                            </div>
                                            <?php
                                    }
                                } else {
                                    echo '<div class="container mt-3"><p class="text-center">No records found</p></div>';
                                }
                                ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!--target 10.8.7-->
                <div class="container d-grid" id="research1087">
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class="d-inline-flex justify-content-start align-items-center">
                                <img src="../img/sdg10.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <h3 class="fw-bold">10.8.7</h3>
                                    <!-- Name of in every research -->
                                    <h4 class="fw-bolder">Accessible facilities</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button" id="dropdownMenuButton1087"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1087" style="background-color:lightgrey;">
                                <!-- Eto para madisplay yung data sa sdg content -->
                                <?php
                                $query1087 = "SELECT * FROM `research 10.8.7`";
                                $select1087 = mysqli_query($conn, $query1087);

                                if(mysqli_num_rows($select1087) > 0) {
                                    while($row = mysqli_fetch_assoc($select1087)) {
                                        ?>
                                            <div class="container d-grid mt-3">
                                                <div class="border border-dark p-3">
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of facilities available in the campus for PWDs</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['PWDfacilityAvailable']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                            
                                                                      
                                                </div>
                                            </div>
                                            <?php
                                    }
                                } else {
                                    echo '<div class="container mt-3"><p class="text-center">No records found</p></div>';
                                }
                                ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!--target 10.8.8-->
                <div class="container d-grid" id="research1088">
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class="d-inline-flex justify-content-start align-items-center">
                                <img src="../img/sdg10.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <h3 class="fw-bold">10.8.8</h3>
                                    <!-- Name of in every research -->
                                    <h4 class="fw-bolder">Disability support services for students and employees</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button" id="dropdownMenuButton1088"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1088" style="background-color:lightgrey;">
                                <!-- Eto para madisplay yung data sa sdg content -->
                                <?php
                                $query1088 = "SELECT * FROM `research 10.8.8`";
                                $select1088 = mysqli_query($conn, $query1088);

                                if(mysqli_num_rows($select1088) > 0) {
                                    while($row = mysqli_fetch_assoc($select1088)) {
                                        ?>
                                            <div class="container d-grid mt-3">
                                                <div class="border border-dark p-3">
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Title/Type of support service</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['SStitle']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Short description</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['SSshortDesc']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total cost</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['ssT_Cost']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Fund source</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['ssFsource']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                                      
                                                </div>
                                            </div>
                                            <?php
                                    }
                                } else {
                                    echo '<div class="container mt-3"><p class="text-center">No records found</p></div>';
                                }
                                ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!--target 10.8.9-->
                <div class="container d-grid" id="research1089">
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class="d-inline-flex justify-content-start align-items-center">
                                <img src="../img/sdg10.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <h3 class="fw-bold">10.8.9</h3>
                                    <!-- Name of in every research -->
                                    <h4 class="fw-bolder">Disability access scheme</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button" id="dropdownMenuButton1089"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1089" style="background-color:lightgrey;">
                                <!-- Eto para madisplay yung data sa sdg content -->
                                <?php
                                $query1089 = "SELECT * FROM `research 10.8.9`";
                                $select1089 = mysqli_query($conn, $query1089);

                                if(mysqli_num_rows($select1089) > 0) {
                                    while($row = mysqli_fetch_assoc($select1089)) {
                                        ?>
                                            <div class="container d-grid mt-3">
                                                <div class="border border-dark p-3">
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Title/Type of access scheme</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['AStitle']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Short description</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['ASshortDesc']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total cost</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['asT_Cost']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Fund source</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['asFsource']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                                      
                                                </div>
                                            </div>
                                            <?php
                                    }
                                } else {
                                    echo '<div class="container mt-3"><p class="text-center">No records found</p></div>';
                                }
                                ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!--target 10.8.10-->
                <div class="container d-grid" id="research10810">
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class="d-inline-flex justify-content-start align-items-center">
                                <img src="../img/sdg10.jpg" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <h3 class="fw-bold">10.8.10</h3>
                                    <!-- Name of in every research -->
                                    <h4 class="fw-bolder">Disability accommodation policy</h4>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button" id="dropdownMenuButton10810"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton10810 style="background-color:lightgrey;"">
                                <!-- Eto para madisplay yung data sa sdg content -->
                                <?php
                                $query10810 = "SELECT * FROM `research 10.8.10`";
                                $select10810 = mysqli_query($conn, $query10810);

                                if(mysqli_num_rows($select10810) > 0) {
                                    while($row = mysqli_fetch_assoc($select10810)) {
                                        ?>
                                            <div class="container d-grid mt-3">
                                                <div class="border border-dark p-3">
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Title of the PPA</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['PPA10810title']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Short description of the PPA</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['PPA10810shortDesc']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total cost</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['ppa10810T_Cost']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Fund source</span>
                                                        <input type="text" class="form-control" value="<?php echo $row['ppa10810Fsource']; ?>"
                                                            aria-label="Username" aria-describedby="basic-addon1" readonly>
                                                    </div>
                                                                      
                                                </div>
                                            </div>
                                            <?php
                                    }
                                } else {
                                    echo '<div class="container mt-3"><p class="text-center">No records found</p></div>';
                                }
                                ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
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