<?php include('../../includes/adminHead/header4.php');
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
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res411"> Research on early years and lifelong learning education</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res421"> Proportion of graduates with relevant qualifications in each respective field</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res422">Proportion of graduates with teaching qualifications to teach at primary level</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res431">Public resources (lifelong learning)</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res432">Public events (lifelong learning)</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res433">Vocational training events</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res434">Education outreach activities beyond campus (extension activities)</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res435">Lifelong learning access policy</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res441">Proportion of first-generation students</button></li>
            </ul>
        </div>
        <div class=" bg-white border border-3 border-dark mt-5 w-100">
            <h2 class="text-center pt-3 mb-3">Add Research</h2>
            <div class="container" style=" height:auto;">
                <div class="d-flex w-100 h-auto">

                    <!--This div is for research 4.1.1-->
                    <div class="collapse w-100 h-auto" id="research411" style="display: block ;">
                        <h2 class="text-center pb-5">Research on early years and lifelong learning education</h2>
                        <form action="../../admin/sdg4/insert411.php" method="post" name="form1">
    

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of research on early years and lifelong education:" name="tno_yale">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of research:" name="titleores">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Author:" name="author">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Year of publication:" name="YearoPub">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total number of citations:" name="Totnumocit">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>
                    <!--This div is for research 4.2.1-->
                    <div class="collapse w-100 h-auto" id="research421" style="display: none ;">
                        <h2 class="text-center pb-5">Proportion of graduates with relevant qualifications in each respective field</h2>
                        <form action="../../admin/sdg4/insert421.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of graduates who are eligible for licensure examination:" name="tno_efle">
                            </div>
                            <div class="input-group mb-3">    
                                <span class="input-group-text"><i class="">Bachelor of Science Industrial Engineering</i></span>
                                <input type="text" class="form-control" placeholder="Male" name="bsie_male">
                                
                                <input type="text" class="form-control" placeholder="Female" name="bsie_female">
                            </div>
                            <div class="input-group mb-3">    
                                <span class="input-group-text"><i class="">Bachelor of Science in Psychology</i></span>
                                <input type="text" class="form-control" placeholder="Male" name="bsp_male">
                                
                                <input type="text" class="form-control" placeholder="Female" name="bsp_female">
                            </div>
                            <div class="input-group mb-3">    
                                <span class="input-group-text"><i class="">Bachelor of Science in Management Accounting</i></span>
                                <input type="text" class="form-control" placeholder="Male" name="bsme_male">
                                
                                <input type="text" class="form-control" placeholder="Female" name="bsme_female">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of graduates who take the licensure examination:" name="tno_ttle">
                            </div>
                            <div class="input-group mb-3">    
                                <span class="input-group-text"><i class="">Bachelor of Science Industrial Engineering</i></span>
                                <input type="text" class="form-control" placeholder="Male" name="bsie_male1">
                 
                                <input type="text" class="form-control" placeholder="Female" name="bsie_female1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="">Bachelor of Science in Psychology</i></span>
                                <input type="text" class="form-control" placeholder="Male" name="bsp_male1">

                                <input type="text" class="form-control" placeholder="Female" name="bsp_female1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="">Bachelor of Science in Management Accounting</i></span>
                                <input type="text" class="form-control" placeholder="Male" name="bsme_male1">

                                <input type="text" class="form-control" placeholder="Female" name="bsme_female1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of graduates who acquired license:" name="tno_gwal">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="">Bachelor of Science Industrial Engineering</i></span>
                                <input type="text" class="form-control" placeholder="Male" name="bsie_male2">
                 
                                <input type="text" class="form-control" placeholder="Female" name="bsie_female2">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="">Bachelor of Science in Psychology</i></span>
                                <input type="text" class="form-control" placeholder="Male" name="bsp_male2">

                                <input type="text" class="form-control" placeholder="Female" name="bsp_female2">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="">Bachelor of Science in Management Accounting</i></span>
                                <input type="text" class="form-control" placeholder="Male" name="bsme_male2">

                                <input type="text" class="form-control" placeholder="Female" name="bsme_female2">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of graduates who failed to pass the licensure examination:" name="no_gwftptle">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Percent of the total number of graduates are eligible for licensure examination." name="Tno_gele">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Percent of the total number of graduates who are eligible for licensure examination took the licensure examination." name="Ptno_elettle">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder=" Percent of the graduates who took the licensure examination have successfully acquired their license." name="Pglesatl">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Percent of graduates who took the licensure examination have failed to pass." name="Pglehftp">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>
                    <!--This div is for research 4.2.2-->
                    <div class="collapse w-100 h-auto" id="research422" style="display: none ;">
                        <h2 class="text-center pb-5">Proportion of graduates with teaching qualifications to teach at primary level</h2>
                        <form action="../../admin/sdg4/insert422.php" method="post" name="form1">


                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="">This is the total headcount number of graduates at all levels from your  institution who gained a qualification that entitled them to teach at   primary school level.</i></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of LET passers:" name="no_letpassers">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of BSED LET passers" name="no_bsedletpassers">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of BEED LET passers" name="no_beedletpassers">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of BPED LET passers" name="no_bpedletpassers">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of BTLED LET passers" name="no_btledletpassers">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="">Percent of graduates who acquired a license have teaching qualifications to teach at primary level.</i></span>
                                <input type="text" class="form-control" placeholder="%" name="percentg_lhtqttapl">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>
                    <!--This div is for research 4.3.1-->
                    <div class="collapse w-100 h-auto" id="research431" style="display: none ;">
                        <h2 class="text-center pb-5">Public resources (lifelong learning)</h2>
                        <form action="../../admin/sdg4/insert431.php" method="post" name="form1">


                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of free access provided to the general public:" name="no_freeapgp">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA:" name="titleoppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short description of the PPA:" name="shortdotppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total cost:" name="totalcost">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Fund source:" name="fundsource">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>
                    <!--This div is for research 4.3.2-->
                    <div class="collapse w-100 h-auto" id="research432" style="display: none ;">
                        <h2 class="text-center pb-5">Public events (lifelong learning)</h2>
                        <form action="../../admin/sdg4/insert432.php" method="post" name="form1">


                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of educational events hosted at the university that are open to the general public:" name="no_univottgp">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA:" name="titleppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short description of the PPA:" name="shortdesppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total cost:" name="totalcost">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Fund source:" name="fundsource">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>
                    <!--This div is for research 4.3.3-->
                    <div class="collapse w-100 h-auto" id="research433" style="display: none ;">
                        <h2 class="text-center pb-5">Vocational training events</h2>
                        <form action="../../admin/sdg4/insert433.php" method="post" name="form1">


                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of vocational training events hosted at the university that are open to the general public:" name="no_voctrai">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA:" name="titleppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short description of the PPA:" name="shortdesppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total cost:" name="totalcost">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Fund source:" name="fundsource">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>
                    <!--This div is for research 4.3.4-->
                    <div class="collapse w-100 h-auto" id="research434" style="display: none ;">
                        <h2 class="text-center pb-5">Education outreach activities beyond campus (extension activities)</h2>
                        <form action="../../admin/sdg4/insert434.php" method="post" name="form1">


                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of education outreach activities beyond campus:" name="no_edoutact">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA:" name="titleppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short description of the PPA:" name="shortdesppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total cost:" name="totalcost">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Fund source:" name="fundsource">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>
                    <!--This div is for research 4.3.5-->
                    <div class="collapse w-100 h-auto" id="research435" style="display: none ;">
                        <h2 class="text-center pb-5">Lifelong learning access policy</h2>
                        <form action="../../admin/sdg4/insert435.php" method="post" name="form1">


                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students who are 50 years old and above:" name="no_stud">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Percent of the student population aged 50 years old and above." name="percofstudpop">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of learning access policy:" name="totnumlearnap">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of PPAs implemented in accordance to the policy:" name="totnumofppaimap">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA:" name="titleppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short description of the PPA:" name="shortdesppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total cost:" name="totalcost">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Fund source:" name="fundsource">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>
                    <!--This div is for research 4.4.1-->
                    <div class="collapse w-100 h-auto" id="research441" style="display: none ;">
                        <h2 class="text-center pb-5">Proportion of first-generation students</h2>
                        <form action="../../admin/sdg4/insert441.php" method="post" name="form1">


                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students:" name="totnofgens">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first year students:" name="totnumfys">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students in first year level:" name="totnumfgsfyl">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Percent of the student population are first-generation students." name="pstudpfgs">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Percent of first year students are first-generation students." name="pfysfgs">
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
    var btn_res411 = document.getElementById("res411");
    var btn_res421 = document.getElementById("res421");
    var btn_res422 = document.getElementById("res422");
    var btn_res431 = document.getElementById("res431");
    var btn_res432 = document.getElementById("res432");
    var btn_res433 = document.getElementById("res433");
    var btn_res434 = document.getElementById("res434");
    var btn_res435 = document.getElementById("res435");
    var btn_res441 = document.getElementById("res441");
    // id of the form
    var div_res411 = document.getElementById("research411");
    var div_res421 = document.getElementById("research421");
    var div_res422 = document.getElementById("research422");
    var div_res431 = document.getElementById("research431");
    var div_res432 = document.getElementById("research432");
    var div_res433 = document.getElementById("research433");
    var div_res434 = document.getElementById("research434");
    var div_res435 = document.getElementById("research435");
    var div_res441 = document.getElementById("research441");



    btn_res411.addEventListener('click', () => {
        div_res411.style.display = "block";
        div_res421.style.display = "none";
        div_res422.style.display = "none";
        div_res431.style.display = "none";
        div_res432.style.display = "none";
        div_res433.style.display = "none";
        div_res434.style.display = "none";
        div_res435.style.display = "none";
        div_res441.style.display = "none";
    });
    btn_res421.addEventListener('click', () => {
        div_res411.style.display = "none";
        div_res421.style.display = "block";
        div_res422.style.display = "none";
        div_res431.style.display = "none";
        div_res432.style.display = "none";
        div_res433.style.display = "none";
        div_res434.style.display = "none";
        div_res435.style.display = "none";
        div_res441.style.display = "none";
    });
    btn_res422.addEventListener('click', () => {
        div_res411.style.display = "none";
        div_res421.style.display = "none";
        div_res422.style.display = "block";
        div_res431.style.display = "none";
        div_res432.style.display = "none";
        div_res433.style.display = "none";
        div_res434.style.display = "none";
        div_res435.style.display = "none";
        div_res441.style.display = "none";
    });
    btn_res431.addEventListener('click', () => {
        div_res411.style.display = "none";
        div_res421.style.display = "none";
        div_res422.style.display = "none";
        div_res431.style.display = "block";
        div_res432.style.display = "none";
        div_res433.style.display = "none";
        div_res434.style.display = "none";
        div_res435.style.display = "none";
        div_res441.style.display = "none";
    });
    btn_res432.addEventListener('click', () => {
        div_res411.style.display = "none";
        div_res421.style.display = "none";
        div_res422.style.display = "none";
        div_res431.style.display = "none";
        div_res432.style.display = "block";
        div_res433.style.display = "none";
        div_res434.style.display = "none";
        div_res435.style.display = "none";
        div_res441.style.display = "none";
    });
    btn_res433.addEventListener('click', () => {
        div_res411.style.display = "none";
        div_res421.style.display = "none";
        div_res422.style.display = "none";
        div_res431.style.display = "none";
        div_res432.style.display = "none";
        div_res433.style.display = "block";
        div_res434.style.display = "none";
        div_res435.style.display = "none";
        div_res441.style.display = "none";
    });
    btn_res434.addEventListener('click', () => {
        div_res411.style.display = "none";
        div_res421.style.display = "none";
        div_res422.style.display = "none";
        div_res431.style.display = "none";
        div_res432.style.display = "none";
        div_res433.style.display = "none";
        div_res434.style.display = "block";
        div_res435.style.display = "none";
        div_res441.style.display = "none";
    });
    btn_res435.addEventListener('click', () => {
        div_res411.style.display = "none";
        div_res421.style.display = "none";
        div_res422.style.display = "none";
        div_res431.style.display = "none";
        div_res432.style.display = "none";
        div_res433.style.display = "none";
        div_res434.style.display = "none";
        div_res435.style.display = "block";
        div_res441.style.display = "none";
    });
    btn_res441.addEventListener('click', () => {
        div_res411.style.display = "none";
        div_res421.style.display = "none";
        div_res422.style.display = "none";
        div_res431.style.display = "none";
        div_res432.style.display = "none";
        div_res433.style.display = "none";
        div_res434.style.display = "none";
        div_res435.style.display = "none";
        div_res441.style.display = "block";
    });
</script>
