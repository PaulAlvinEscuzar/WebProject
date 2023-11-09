<?php include 'header.php'?>
<!-- this form is for inserting the data in your data base -->
<!-- Note : wala pa tong connection sa database gagawa pa kayo at 
wala pa din java script
just simply layout -->
<div class="container mt-5">
    <div class="row-mt-5">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown button
            </button>
            <ul class="dropdown-menu bg-white border-0 " aria-labelledby="dropdownMenuButton1">
                <li class="text-center"><button class="btn btn-primary w-100 mb-2" id="res311"> Research on health and wellbeing</button></li>
                <li class="text-center"><button class="btn btn-primary w-100 mb-2" id="res321"> Current collaborations with health institutions</button></li>
                <li class="text-center"><button class="btn btn-primary w-100 mb-2" id="res322"> Health outreach programmes (extension project/activity)</button></li>
                <li class="text-center"><button class="btn btn-primary w-100 mb-2" id="res323"> Shared sport facilities</button></li>
                <li class="text-center"><button class="btn btn-primary w-100 mb-2" id="res324"> Sexual and reproductive health care services for students</button></li>

            </ul>
        </div>
        <div class="col-lg-4 bg-white m-auto border border-danger-subtle mt-5">
            <h2 class="text-center pt-3 mb-3">Add Research</h2>
            <div class="container" style="width: 400px; height: auto;">
                <div class="d-flex w-100 h-100">

                    <!--This div is for research 3.1.1-->
                    <div class="collapse w-100 h-auto" id="research311" style="display: block ;">
                        <h2 class="text-center pb-5">Research on health and wellbeing</h2>
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                <input type="text" class="form-control" placeholder="Title of the Research" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                <input type="text" class="form-control" placeholder="Author" name="author">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                <input type="text" class="form-control" placeholder="Year of Publication" name="year_pub">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="Total Number of clinical citations" name="no_clinical">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total Number of Citations" name="no_citations">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 3.2.1-->
                    <div class=" w-100 h-auto" id="research321" style="display: none ;">
                        <h2 class="text-center pb-4">Current collaborations with health institutions</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                <input type="text" class="form-control" placeholder="Total number of collaborations with health institutions" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                <input type="text" class="form-control" placeholder="Total number of local collaborations" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                <input type="text" class="form-control" placeholder="Total number of national collaborations" name="author">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                <input type="text" class="form-control" placeholder="Total number of global collaborations" name="year_pub">
                            </div>
                            <p class="text-center lead">List of collaborations with health institutions</p>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="Name of health institution" name="no_clinical">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Categorized as local, national, global" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Number of years in collaboration" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Title and description of collab project" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total cost" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Fund source" name="no_citations">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 3.2.2-->
                    <div class=" w-100 h-auto" id="research322" style="display: none ;">
                        <h2 class="text-center pb-4">Current collaborations with health institutions</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                <input type="text" class="form-control" placeholder="Total number of health outreach programmes/activity:" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                <input type="text" class="form-control" placeholder="Short description of the PPA" name="author">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                <input type="text" class="form-control" placeholder="Total cost" name="year_pub">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="Fund source" name="no_clinical">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add Research</button>
                            </div>
                        </form>
                    </div>


                    <!--This div is for research 3.2.3-->
                    <div class=" w-100 h-auto" id="research323" style="display: none ;">
                        <h2 class="text-center pb-4">Current collaborations with health institutions</h2>
                        <form action="" method="post">

                            <div class="border border-dark mb-3 p-2">
                                <p class="text-start lead">Does your campus share sports facilities to the general public?</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No
                                    </label>
                                </div>
                            </div>
                            <div class="border border-dark mb-3 p-2">
                                <div class="input-group mb-3">
                                    <p>Total number of approved requests from the community on the use of
                                        sport facilities</p>
                                    <input type="text" class="form-control" placeholder="" name="title">
                                </div>
                            </div>

                            <div class="border border-dark mb-3 p-2">
                                <p class="text-start lead">Facility type</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Gymnasium
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Outdoor field
                                    </label>
                                </div>
                            </div>

                            <div class="border border-dark mb-3 p-2">
                                <p class="text-start lead">Level of Community</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Local
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Regional
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        National
                                    </label>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                <input type="text" class="form-control" placeholder="Title of Event/Type of Event" name="year_pub">
                            </div>

                            <div class="border border-dark mb-3 p-2">
                                <p class="text-start lead">No. of hours</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Paid
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Free
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        National
                                    </label>
                                </div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 3.2.3-->
                    <div class=" w-100 h-auto" id="research323" style="display: none ;">
                        <h2 class="text-center pb-4">Current collaborations with health institutions</h2>
                        <form action="" method="post">

                            <div class="border border-dark mb-3 p-2">
                                <p class="text-start lead">Does your campus share sports facilities to the general public?</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No
                                    </label>
                                </div>
                            </div>
                            <div class="border border-dark mb-3 p-2">
                                <div class="input-group mb-3">
                                    <p>Total number of approved requests from the community on the use of
                                        sport facilities</p>
                                    <input type="text" class="form-control" placeholder="" name="title">
                                </div>
                            </div>

                            <div class="border border-dark mb-3 p-2">
                                <p class="text-start lead">Facility type</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Gymnasium
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Outdoor field
                                    </label>
                                </div>
                            </div>

                            <div class="border border-dark mb-3 p-2">
                                <p class="text-start lead">Level of Community</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Local
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Regional
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        National
                                    </label>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                <input type="text" class="form-control" placeholder="Title of Event/Type of Event" name="year_pub">
                            </div>

                            <div class="border border-dark mb-3 p-2">
                                <p class="text-start lead">No. of hours</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Paid
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Free
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        National
                                    </label>
                                </div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 3.2.1-->
                    <div class=" w-100 h-auto" id="research324" style="display: none ;">
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students that are sexually active:" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                <input type="text" class="form-control" placeholder="Total number of pregnant students" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students have already given birth" name="author">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students with pregnancy loss" name="year_pub">
                            </div>
                            <p class="text-center lead">List of collaborations with health institutions</p>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="Total number of students who have impregnated someone" name="no_clinical">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students that has been tested for HIV/AIDS" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Number of years in collaboration" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Title and description of collab project" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total cost" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Fund source" name="no_citations">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add Research</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var btn_res311 = document.getElementById("res311");
    var btn_res321 = document.getElementById("res321");
    var btn_res322 = document.getElementById("res322");
    var btn_res323 = document.getElementById("res323");
    var div_res311 = document.getElementById("research311")
    var div_res321 = document.getElementById("research321")
    var div_res322 = document.getElementById("research322")
    var div_res323 = document.getElementById("research323")

    btn_res311.addEventListener('click', () => {
        div_res311.style.display = "block";
        div_res321.style.display = "none";
        div_res322.style.display = "none";
        div_res323.style.display = "none";
    });
    btn_res321.addEventListener('click', () => {
        div_res321.style.display = "block";
        div_res311.style.display = "none";
        div_res322.style.display = "none";
        div_res323.style.display = "none";
    });
    btn_res322.addEventListener('click', () => {
        div_res321.style.display = "none";
        div_res311.style.display = "none";
        div_res322.style.display = "block";
        div_res323.style.display = "none";
    });
    btn_res323.addEventListener('click', () => {
        div_res321.style.display = "none";
        div_res311.style.display = "none";
        div_res322.style.display = "none";
        div_res323.style.display = "block";
    });
</script>