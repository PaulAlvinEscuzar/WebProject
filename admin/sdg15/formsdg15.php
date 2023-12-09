<?php include('../../includes/adminHead/header15.php');
include '../../includes/db.php';?>


<?php if (isset($_GET['message'])) { ?>
            <p class="text-center bg-success bg-gradient text-light p-4"><?php echo $_GET['message']; ?></p>
        <?php } ?>
<div class="container mt-5 mb-5">
    <div class="row-mt-5">
        <div class="dropdown">
            <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Pick a research
            </button>
            <ul class="dropdown-menu bg-white border-0 " aria-labelledby="dropdownMenuButton1">
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1511"> Research on land ecosystems</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1521"> Measures that promote sustainable land practices: Students</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res15212"> Measures that promote sustainable land practices: Employees</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1531"> Number of endangered flora/fauna in the campus</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1532"> Measures to conserve the endangered species</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1541"> Events about sustainable use of land</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1542"> Sustainably farmed food on campus</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1543"> Maintain and extend current ecosystems’ biodiversity</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1551"> Biodiversity in the community</button></li>
            </ul>
        </div>
        <div class=" bg-white border border-3 border-dark mt-5 w-100">
            <h2 class="text-center pt-3 mb-3">Add Research</h2>
            <div class="container" style=" height:auto;">
                <div class="d-flex w-100 h-auto">

                    <!--This div is for research 15.1.1-->
                    <div class="collapse w-100 h-auto" id="research1511" style="display: block ;">
                        <h2 class="text-center pb-5">Research on land ecosystems</h2>
                        <form action="../../admin/sdg15/insert1511.php" method="post" name="form1">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of research on land ecosystems" name="no_reslandeco">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the Research" name="title">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Author" name="author">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Year of Publication" name="year_pub">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total Number of Citations" name="no_citations">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                     <!--This div is for research 15.2.1.1-->
                    <div class="collapse w-100 h-auto" id="research1521" style="display: none;">
                        <h2 class="text-center p-3">Measures that promote sustainable land practices</h2>
                        <h2 class="text-center pb-5">Students</h2>
                        <form action="../../admin/sdg15/insert15211.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students with available space at home for gardening" name="no_gardening">
                                <input type="text" class="form-control" placeholder="Male" name="gardeningmale">
                                <input type="text" class="form-control" placeholder="Female" name="gardeningfemale">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students with available space at home for vertical gardening:" name="no_vertical">
                                <input type="text" class="form-control" placeholder="Male" name="verticalmale">
                                <input type="text" class="form-control" placeholder="Female" name="verticalfemale">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Percent of the student population has available space at home for gardening." name="percent_gardening">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Percent of the student population has available space at home for vertical gardening." name="percent_vertical">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>
                    <!--This div is for research 15.2.1.2-->
                    <div class="collapse w-100 h-auto" id="research15212" style="display: none;">
                        <h2 class="text-center p-3">Measures that promote sustainable land practices</h2>
                        <h2 class="text-center pb-5">Employees</h2>
                        <form action="../../admin/sdg15/insert15212.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of employees with available space at home for gardening:" name="employees_gardening">
                                <input type="text" class="form-control" placeholder="Male" name="employeegmale">
                                <input type="text" class="form-control" placeholder="Female" name="employeegfemale">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of employees with available space at home for vertical gardening:" name="employee_vertical">
                                <input type="text" class="form-control" placeholder="Male" name="employeevmale">
                                <input type="text" class="form-control" placeholder="Female" name="employeevfemale">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Percent of the employee population has available space at home for gardening." name="percente_gardening">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Percent of the employee population has available space at home for vertical gardening." name="percentv_vertical">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total number of sustainable land practices implemented:" name="no_susland">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA:" name="ppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Short Description:" name="shortd">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total Cost:" name="totalc">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Fund Source:" name="FundSource">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>
                    <!--This div is for research 15.3.1-->
                    <div class="collapse w-100 h-auto" id="research1531" style="display: none;">
                        <h2 class="text-center p-3">Number of endangered flora/fauna in the campus</h2>
                        <form action="../../admin/sdg15/insert1531.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of endangered flora/fauna in the campus:" name="totalend">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>
                    <!--This div is for research 15.3.2-->
                    <div class="collapse w-100 h-auto" id="research1532" style="display: none;">
                        <h2 class="text-center p-3">Measures to conserve the endangered species</h2>
                        <form action="../../admin/sdg15/insert1532.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of conservation measures for endangered species:" name="totalspecies">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of PPA:" name="titleppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short description:" name="shortdes">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total cost:" name="tcost">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Fund source:" name="fsource">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>
                    <!--This div is for research 15.4.1-->
                    <div class="collapse w-100 h-auto" id="research1541" style="display: none;">
                        <h2 class="text-center p-3">Events about sustainable use of land</h2>
                        <form action="../../admin/sdg15/insert1541.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of events organized/supported by the campus:" name="totalcampus">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of PPA:" name="tppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short description:" name="shortds">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total cost:" name="totcost">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Fund source:" name="funds">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>
                    <!--This div is for research 15.4.2-->
                    <div class="collapse w-100 h-auto" id="research1542" style="display: none;">
                        <h2 class="text-center p-3">Sustainably farmed food on campus</h2>
                        <form action="../../admin/sdg15/insert1542.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of policies ensuring that food on campus is sustainably farmed:" name="no_susfarmed">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of PPAs implemented in accordance to the policy:" name="no_ppaimplemented">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA:" name="titotppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short description of the PPA:" name="sdotppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total cost:" name="tocost">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Fund source:" name="funsource">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>
                    <!--This div is for research 15.4.3-->
                    <div class="collapse w-100 h-auto" id="research1543" style="display: none;">
                        <h2 class="text-center p-3">Maintain and extend current ecosystems’ biodiversity</h2>
                        <form action="../../admin/sdg15/insert1543.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of campus initiatives to maintain and extend current ecosystem biodiversity:" name="no_maecebio">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA:" name="ppatit">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short Description of the PPA:" name="shortdotppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total Cost:" name="costtotal">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Fund Source:" name="sourcefund">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>
                    <!--This div is for research 15.5.1-->
                    <div class="collapse w-100 h-auto" id="research1551" style="display: none;">
                        <h2 class="text-center p-3">Biodiversity in the community</h2>
                        <form action="../../admin/sdg15/insert1551.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of extension PPAs that sustain the biodiversity of the community:" name="no_bio">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA:" name="tippa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short Description of the PPA:" name="sdeppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total Cost:" name="totcst">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Fund Source:" name="funs">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // id of the button
    var btn_res1511 = document.getElementById("res1511");
    var btn_res1521 = document.getElementById("res1521");
    var btn_res15212 = document.getElementById("res15212");
    var btn_res1531 = document.getElementById("res1531");
    var btn_res1532 = document.getElementById("res1532");
    var btn_res1541 = document.getElementById("res1541");
    var btn_res1542 = document.getElementById("res1542");
    var btn_res1543 = document.getElementById("res1543");
    var btn_res1551 = document.getElementById("res1551");

    // id of the form
    var div_res1511 = document.getElementById("research1511");
    var div_res1521 = document.getElementById("research1521");
    var div_res15212 = document.getElementById("research15212");
    var div_res1531 = document.getElementById("research1531");
    var div_res1532 = document.getElementById("research1532");
    var div_res1541 = document.getElementById("research1541");
    var div_res1542 = document.getElementById("research1542");
    var div_res1543 = document.getElementById("research1543");
    var div_res1551 = document.getElementById("research1551");

    btn_res1511.addEventListener('click', () => {
        div_res1511.style.display = "block";
        div_res1521.style.display = "none";
        div_res15212.style.display = "none";
        div_res1531.style.display = "none";
        div_res1532.style.display = "none";
        div_res1541.style.display = "none";
        div_res1542.style.display = "none";
        div_res1543.style.display = "none";
        div_res1551.style.display = "none";
    });
    btn_res1521.addEventListener('click', () => {
        div_res1511.style.display = "none";
        div_res1521.style.display = "block";
        div_res15212.style.display = "none";
        div_res1531.style.display = "none";
        div_res1532.style.display = "none";
        div_res1541.style.display = "none";
        div_res1542.style.display = "none";
        div_res1543.style.display = "none";
        div_res1551.style.display = "none";
    });
    btn_res15212.addEventListener('click', () => {
        div_res1511.style.display = "none";
        div_res1521.style.display = "none";
        div_res15212.style.display = "block";
        div_res1531.style.display = "none";
        div_res1532.style.display = "none";
        div_res1541.style.display = "none";
        div_res1542.style.display = "none";
        div_res1543.style.display = "none";
        div_res1551.style.display = "none";
    });
    btn_res1531.addEventListener('click', () => {
        div_res1511.style.display = "none";
        div_res1521.style.display = "none";
        div_res15212.style.display = "none";
        div_res1531.style.display = "block";
        div_res1532.style.display = "none";
        div_res1541.style.display = "none";
        div_res1542.style.display = "none";
        div_res1543.style.display = "none";
        div_res1551.style.display = "none";
    });
    btn_res1532.addEventListener('click', () => {
        div_res1511.style.display = "none";
        div_res1521.style.display = "none";
        div_res15212.style.display = "none";
        div_res1531.style.display = "none";
        div_res1532.style.display = "block";
        div_res1541.style.display = "none";
        div_res1542.style.display = "none";
        div_res1543.style.display = "none";
        div_res1551.style.display = "none";
    });
    btn_res1541.addEventListener('click', () => {
        div_res1511.style.display = "none";
        div_res1521.style.display = "none";
        div_res15212.style.display = "none";
        div_res1531.style.display = "none";
        div_res1532.style.display = "none";
        div_res1541.style.display = "block";
        div_res1542.style.display = "none";
        div_res1543.style.display = "none";
        div_res1551.style.display = "none";
    });
    btn_res1542.addEventListener('click', () => {
        div_res1511.style.display = "none";
        div_res1521.style.display = "none";
        div_res15212.style.display = "none";
        div_res1531.style.display = "none";
        div_res1532.style.display = "none";
        div_res1541.style.display = "none";
        div_res1542.style.display = "block";
        div_res1543.style.display = "none";
        div_res1551.style.display = "none";
    });
    btn_res1543.addEventListener('click', () => {
        div_res1511.style.display = "none";
        div_res1521.style.display = "none";
        div_res15212.style.display = "none";
        div_res1531.style.display = "none";
        div_res1532.style.display = "none";
        div_res1541.style.display = "none";
        div_res1542.style.display = "none";
        div_res1543.style.display = "block";
        div_res1551.style.display = "none";
    });
    btn_res1551.addEventListener('click', () => {
        div_res1511.style.display = "none";
        div_res1521.style.display = "none";
        div_res15212.style.display = "none";
        div_res1531.style.display = "none";
        div_res1532.style.display = "none";
        div_res1541.style.display = "none";
        div_res1542.style.display = "none";
        div_res1543.style.display = "none";
        div_res1551.style.display = "block";
    });
</script>
