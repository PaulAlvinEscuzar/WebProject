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
                    <button class="nav-link active text-light fw-dark" style="letter-spacing :2px;" id="pills-home-tab"
                        data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab"
                        aria-controls="pills-home" aria-selected="true">Overview</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-light fw-dark" style="letter-spacing :2px;" id="pills-profile-tab"
                        data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab"
                        aria-controls="pills-profile" aria-selected="false">Target</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-light fw-light" style="letter-spacing :2px;" id="pills-contact-tab"
                        data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab"
                        aria-controls="pills-contact" aria-selected="false">Progress and Info</button>
                </li>
            </ul>
        </div>
        <div class="tab-content container-lg justify-content-center" id="pills-tabContent">
            <div class="tab-pane fade show active " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                Lorem ipsum
                dolor sit amet consectetur adipisic ing elit
                . Excepturi magnam alias ipsam quod repellat, numquam minima totam corporis deleniti iusto nostrum
                tempor
                placeat velit ratione ea doloribus, facere id sint.
            </div>
            <div class="tab-pane fade " id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="container d-grid" id="research311">

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
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <h3 class="text-start ms-3">Score:</h3>
                                    <?php
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
                                            <span class="input-group-text" id="basic-addon1">Number of Clinical</span>
                                            <input type="text" class="form-control" value="<?php echo "$no_clinical"?>"
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
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

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
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

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
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

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
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

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
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

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
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

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
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum magnam, dignissimos vel sapiente at
                cumque
                repellat numquam consectetur laboriosam. Atque autem provident, d
                ucimus numquam dolore dolorem! Repellendus earum dolor officil
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum magnam, dignissimos vel sapiente at
                cumque
                repellat numquam consectetur laboriosam. Atque autem provident, d
                ucimus numquam dolore dolorem! Repellendus earum dolor officil
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum magnam, dignissimos vel sapiente at
                cumque
                repellat numquam consectetur laboriosam. Atque autem provident, d
                ucimus numquam dolore dolorem! Repellendus earum dolor officil.
            </div>
        </div>
    </div>
</div>
</div>
</div>