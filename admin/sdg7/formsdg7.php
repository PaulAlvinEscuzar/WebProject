<?php include('../../includes/adminHead/header7.php');
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
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res711"> Research on clean energy</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res712"> Energy-efficient renovation and building</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res713"> Upgrade buildings to higher energy efficiency</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res714"> Carbon reduction and emission process</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res715">  Plan to reduce energy consumption</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res716"> Energy wasted identification</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res717">  Divestment Policy</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res718"> Total energy used</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res719"> Energy from non-renewable sources</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res720"> Electricity Consumption (as billed by electricity provider)</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res721"> Energy from fossil fuel (Vehicle fuel consumption)</button></li> 
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res722">  Energy from renewable sources</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res723"> Local community outreach for energy efficiency</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res724"> 100% renewable energy pledge</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res725"> Energy efficiency services for industry</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res726"> Policy development for clean energy technology</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res727"> Assistance to low-carbon innovation</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res728"> Number of students with access to electricity</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res729"> Number of employees with access to electricity</button></li>
            </ul>
        </div>
        <div class=" bg-white border border-3 border-dark mt-5 w-100">
            <h2 class="text-center pt-3 mb-3">Add Research</h2>
            <div class="container" style=" height:auto;">
                <div class="d-flex w-100 h-auto">

                    <div class="collapse w-100 h-auto" id="research711" style="display: block;">
                        <h2 class="text-center pb-5">Research on clean energy</h2>
                        <form action="../../admin/sdg7/insert711.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of research on clean energy" name="totnumres">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of research" name="titleores">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Author" name="author">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Year of publication" name="YearoPub">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total number of citations" name="Totnumocit">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <div class="collapse w-100 h-auto" id="research712" style="display: none;">
                        <h2 class="text-center pb-5"> Energy-efficient renovation and building</h2>
                        <form action="../../admin/sdg7/insert712.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of energy efficient policy" name="totnumene">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA" name="titleores">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short description of the PPA" name="shortdes">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total cost" name="totcost">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Fund source" name="fundsource">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <div class="collapse w-100 h-auto" id="research713" style="display: none;">
                        <h2 class="text-center pb-5"> Upgrade buildings to higher energy efficiency</h2>
                        <form action="../../admin/sdg7/insert713.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of energy efficient policy" name="totnum">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA" name="titleo">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short description of the PPA" name="shortdess">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total cost" name="totcostt">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Fund source" name="fundsourcee">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>
                   
                    <div class="collapse w-100 h-auto" id="research714" style="display: none;">
                        <h2 class="text-center pb-5"> Carbon reduction and emission process</h2>
                        <form action="../../admin/sdg7/insert714.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of PPAs targeted to reduce carbon dioxide emissions" name="totnum">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA" name="titleo">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short description of the PPA" name="shortdess">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total cost" name="totcostt">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Fund source" name="fundsourcee">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <div class="collapse w-100 h-auto" id="research715" style="display: none;">
                        <h2 class="text-center pb-5"> Plan to reduce energy consumption</h2>
                        <form action="../../admin/sdg7/insert715.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total energy consumption last year" name="totnum">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total energy consumption of the current year" name="totnumene">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="The energy consumption of the current year" name="eneconsump">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Target energy consumption reduction in the following year" name="target">
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>
                    <div class="collapse w-100 h-auto" id="research716" style="display: none;">
                        <h2 class="text-center pb-5">  Energy wasted identification </h2>
                        <form action="../../admin/sdg7/insert716.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="undergone energy audit (yes/no)" name="ans">
                            </div>
                            
                            
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>
                    <div class="collapse w-100 h-auto" id="research717" style="display: none;">
                        <h2 class="text-center pb-5"> Divestment Policy</h2>
                        <form action="../../admin/sdg7/insert717.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of divestment policies" name="totnum">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of PPAs implemented in accordance to the policy" name="totnumppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Short description of the PPA" name="shortdes">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total cost" name="totcost">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Fund Source" name="fundsource">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Evidence" name="evidence">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Policy" name="policy">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Proposal/Narrative Report with photos" name="proposal">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <div class="collapse w-100 h-auto" id="research718" style="display: none;">
                        <h2 class="text-center pb-5"> Total energy used</h2>
                        <form action="../../admin/sdg7/insert718.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Monthly average usage of energy in the campus" name="average">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="TTotal energy used in the campus" name="totene">
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>
                    <div class="collapse w-100 h-auto" id="research719" style="display: none;">
                        <h2 class="text-center pb-5">  Energy from non-renewable sources</h2>
                        <form action="../../admin/sdg7/insert719.php" method="post" name="form1">
                          
                        </form>
                    </div>

                    <div class="collapse w-100 h-auto" id="research720" style="display: none;">
                        <h2 class="text-center pb-5"> Electricity Consumption (as billed by electricity provider)</h2>
                        <form action="../../admin/sdg7/insert720.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Monthly average electricity consumption" name="average">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Electricity consumption in kWh (monthly)" name="eleconsump">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Campus Population" name="population">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Electricity consumption per capita" name="eleconsumppercapita">
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <div class="collapse w-100 h-auto" id="research721" style="display: none;">
                        <h2 class="text-center pb-5"> Energy from fossil fuel (Vehicle fuel consumption)</h2>
                        <form action="../../admin/sdg7/insert721.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of campus-owned vehicle" name="totnum">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of approved and served vehicle requests (per vehicle, per month)" name="totnumofapproved">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Fuel consumption of campus-owned vehicles (per vehicle, per month) " name="fuelconsump">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Evidence" name="evidence">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of private vehicles entering in the campus (per month)" name="totnumofvehicle">
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <div class="collapse w-100 h-auto" id="research722" style="display: none;">
                        <h2 class="text-center pb-5">  Energy from renewable sources</h2>
                        <form action="../../admin/sdg7/insert722.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Monthly average generation of solar energy in the campus" name="average">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total solar electricity generated: (monthly)" name="totalele">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Monthly average usage of solar energy" name="aveusage">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total solar electricity used: (monthly)" name="totalused">
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <div class="collapse w-100 h-auto" id="research723" style="display: none;">
                        <h2 class="text-center pb-5">  Local community outreach for energy efficiency</h2>
                        <form action="../../admin/sdg7/insert723.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of PPAs for local community about energy efficiency and clean energy" name="totnumppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short Description" name="shortdes">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total cost" name="totcost">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Fundsource" name="fundsource">
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <div class="collapse w-100 h-auto" id="research724" style="display: none;">
                        <h2 class="text-center pb-5">  100% renewable energy pledge</h2>
                        <form action="../../admin/sdg7/insert726.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of PPAs for the renewable energy pledge" name="totnumppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short Description" name="shortdes">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total cost" name="totcost">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Fundsource" name="fundsource">
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <div class="collapse w-100 h-auto" id="research725" style="display: none;">
                        <h2 class="text-center pb-5"> Energy efficiency services for industry</h2>
                        <form action="../../admin/sdg7/insert725.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of energy efficiency services provided for industry" name="totnum">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short Description" name="shortdes">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total cost" name="totcost">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Fundsource" name="fundsource">
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <div class="collapse w-100 h-auto" id="research726" style="display: none;">
                        <h2 class="text-center pb-5">  Policy development for clean energy technology</h2>
                        <form action="../../admin/sdg7/insert726.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of assistance provided to low-carbon innovation startups" name="totnumppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short Description" name="shortdes">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total cost" name="totcost">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Fundsource" name="fundsource">
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <div class="collapse w-100 h-auto" id="research727" style="display: none;">
                        <h2 class="text-center pb-5"> Assistance to low-carbon innovation </h2>
                        <form action="../../admin/sdg7/insert727.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of assistance provided to low-carbon innovation startups" name="totnum">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title/Type of assistance" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short Description" name="shortdes">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total cost" name="totcost">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Fundsource" name="fundsource">
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>
                  
                    <div class="collapse w-100 h-auto" id="research728" style="display: none;">
                        <h2 class="text-center pb-5"> Number of students with access to electricity </h2>
                        <form action="../../admin/sdg7/insert728.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students with access to electricity" name="totnum">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Percentage of the of the students population that has access to electricity" name="percentage">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>
                    <div class="collapse w-100 h-auto" id="research729" style="display: none;">
                        <h2 class="text-center pb-5"> Number of employees with access to electricity </h2>
                        <form action="../../admin/sdg7/insert729.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of employees with access to electricity" name="totnum">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Percentage of the of the employees population that has access to electricity" name="percentage">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

</div>



 
<script>
    var btn_res711 = document.getElementById("res711");
    var btn_res712 = document.getElementById("res712");
    var btn_res713 = document.getElementById("res713");
    var btn_res714 = document.getElementById("res714");
    var btn_res715 = document.getElementById("res715");
    var btn_res716 = document.getElementById("res716");
    var btn_res717 = document.getElementById("res717");
    var btn_res718 = document.getElementById("res718");
    var btn_res719 = document.getElementById("res719");
    var btn_res720 = document.getElementById("res720");
    var btn_res721 = document.getElementById("res721");
    var btn_res722 = document.getElementById("res722");
    var btn_res723 = document.getElementById("res723");
    var btn_res724 = document.getElementById("res724");
    var btn_res725 = document.getElementById("res725");
    var btn_res726 = document.getElementById("res726");
    var btn_res727 = document.getElementById("res727");
    var btn_res728 = document.getElementById("res728");
    var btn_res729 = document.getElementById("res729");
  


    

    var div_res711 = document.getElementById("research711");
    var div_res712 = document.getElementById("research712");
    var div_res713 = document.getElementById("research713");
    var div_res714 = document.getElementById("research714");
    var div_res715 = document.getElementById("research715");
    var div_res716 = document.getElementById("research716");
    var div_res717 = document.getElementById("research717");
    var div_res718 = document.getElementById("research718");
    var div_res719 = document.getElementById("research719");
    var div_res720 = document.getElementById("research720");
    var div_res721 = document.getElementById("research721");
    var div_res722 = document.getElementById("research722");
    var div_res723 = document.getElementById("research723");
    var div_res724 = document.getElementById("research724");
    var div_res725 = document.getElementById("research725");
    var div_res726 = document.getElementById("research726");
    var div_res727 = document.getElementById("research727");
    var div_res728 = document.getElementById("research728");
    var div_res729 = document.getElementById("research729");
   

    

    btn_res711.addEventListener('click', () => {
        div_res711.style.display = "block";
        div_res712.style.display = "none";
        div_res713.style.display = "none";
        div_res714.style.display = "none";
        div_res715.style.display = "none";
        div_res716.style.display = "none";
        div_res717.style.display = "none";
        div_res718.style.display = "none";
        div_res719.style.display = "none";
        div_res720.style.display = "none";
        div_res721.style.display = "none";
        div_res722.style.display = "none";
        div_res723.style.display = "none";
        div_res724.style.display = "none";
        div_res725.style.display = "none";
        div_res726.style.display = "none";
        div_res727.style.display = "none";
        div_res728.style.display = "none";
        div_res729.style.display = "none";
    });
   
    btn_res712.addEventListener('click', () => {
        div_res711.style.display = "none";
        div_res712.style.display = "block";
        div_res713.style.display = "none";
        div_res714.style.display = "none";
        div_res715.style.display = "none";
        div_res716.style.display = "none";
        div_res717.style.display = "none";
        div_res718.style.display = "none";
        div_res719.style.display = "none";
        div_res720.style.display = "none";
        div_res721.style.display = "none";
        div_res722.style.display = "none";
        div_res723.style.display = "none";
        div_res724.style.display = "none";
        div_res725.style.display = "none";
        div_res726.style.display = "none";
        div_res727.style.display = "none";
        div_res728.style.display = "none";
        div_res729.style.display = "none";
    });

    btn_res713.addEventListener('click', () => {
        div_res711.style.display = "none";
        div_res712.style.display = "none";
        div_res713.style.display = "block";
        div_res714.style.display = "none";
        div_res715.style.display = "none";
        div_res716.style.display = "none";
        div_res717.style.display = "none";
        div_res718.style.display = "none";
        div_res719.style.display = "none";
        div_res720.style.display = "none";
        div_res721.style.display = "none";
        div_res722.style.display = "none";
        div_res723.style.display = "none";
        div_res724.style.display = "none";
        div_res725.style.display = "none";
        div_res726.style.display = "none";
        div_res727.style.display = "none";
        div_res728.style.display = "none";
        div_res729.style.display = "none";
    });

    btn_res714.addEventListener('click', () => {
        div_res711.style.display = "none";
        div_res712.style.display = "none";
        div_res713.style.display = "none";
        div_res714.style.display = "block";
        div_res715.style.display = "none";
        div_res716.style.display = "none";
        div_res717.style.display = "none";
        div_res718.style.display = "none";
        div_res719.style.display = "none";
        div_res720.style.display = "none";
        div_res721.style.display = "none";
        div_res722.style.display = "none";
        div_res723.style.display = "none";
        div_res724.style.display = "none";
        div_res725.style.display = "none";
        div_res726.style.display = "none";
        div_res727.style.display = "none";
        div_res728.style.display = "none";
        div_res729.style.display = "none";
    });

    btn_res715.addEventListener('click', () => {
        div_res711.style.display = "none";
        div_res712.style.display = "none";
        div_res713.style.display = "none";
        div_res714.style.display = "none";
        div_res715.style.display = "block";
        div_res716.style.display = "none";
        div_res717.style.display = "none";
        div_res718.style.display = "none";
        div_res719.style.display = "none";
        div_res720.style.display = "none";
        div_res721.style.display = "none";
        div_res722.style.display = "none";
        div_res723.style.display = "none";
        div_res724.style.display = "none";
        div_res725.style.display = "none";
        div_res726.style.display = "none";
        div_res727.style.display = "none";
        div_res728.style.display = "none";
        div_res729.style.display = "none";
    });

    btn_res716.addEventListener('click', () => {
        div_res711.style.display = "none";
        div_res712.style.display = "none";
        div_res713.style.display = "none";
        div_res714.style.display = "none";
        div_res715.style.display = "none";
        div_res716.style.display = "block";
        div_res717.style.display = "none";
        div_res718.style.display = "none";
        div_res719.style.display = "none";
        div_res720.style.display = "none";
        div_res721.style.display = "none";
        div_res722.style.display = "none";
        div_res723.style.display = "none";
        div_res724.style.display = "none";
        div_res725.style.display = "none";
        div_res726.style.display = "none";
        div_res727.style.display = "none";
        div_res728.style.display = "none";
        div_res729.style.display = "none";
    });

    btn_res717.addEventListener('click', () => {
        div_res711.style.display = "none";
        div_res712.style.display = "none";
        div_res713.style.display = "none";
        div_res714.style.display = "none";
        div_res715.style.display = "none";
        div_res716.style.display = "none";
        div_res717.style.display = "block";
        div_res718.style.display = "none";
        div_res719.style.display = "none";
        div_res720.style.display = "none";
        div_res721.style.display = "none";
        div_res722.style.display = "none";
        div_res723.style.display = "none";
        div_res724.style.display = "none";
        div_res725.style.display = "none";
        div_res726.style.display = "none";
        div_res727.style.display = "none";
        div_res728.style.display = "none";
        div_res729.style.display = "none";
    });

    btn_res718.addEventListener('click', () => {
        div_res711.style.display = "none";
        div_res712.style.display = "none";
        div_res713.style.display = "none";
        div_res714.style.display = "none";
        div_res715.style.display = "none";
        div_res716.style.display = "none";
        div_res717.style.display = "none";
        div_res718.style.display = "block";
        div_res719.style.display = "none";
        div_res720.style.display = "none";
        div_res721.style.display = "none";
        div_res722.style.display = "none";
        div_res723.style.display = "none";
        div_res724.style.display = "none";
        div_res725.style.display = "none";
        div_res726.style.display = "none";
        div_res727.style.display = "none";
        div_res728.style.display = "none";
        div_res729.style.display = "none";
    });

    btn_res719.addEventListener('click', () => {
        div_res711.style.display = "none";
        div_res712.style.display = "none";
        div_res713.style.display = "none";
        div_res714.style.display = "none";
        div_res715.style.display = "none";
        div_res716.style.display = "none";
        div_res717.style.display = "none";
        div_res718.style.display = "none";
        div_res719.style.display = "block";
        div_res720.style.display = "none";
        div_res721.style.display = "none";
        div_res722.style.display = "none";
        div_res723.style.display = "none";
        div_res724.style.display = "none";
        div_res725.style.display = "none";
        div_res726.style.display = "none";
        div_res727.style.display = "none";
        div_res728.style.display = "none";
        div_res729.style.display = "none";
    });

    btn_res720.addEventListener('click', () => {
        div_res711.style.display = "none";
        div_res712.style.display = "none";
        div_res713.style.display = "none";
        div_res714.style.display = "none";
        div_res715.style.display = "none";
        div_res716.style.display = "none";
        div_res717.style.display = "none";
        div_res718.style.display = "none";
        div_res719.style.display = "none";
        div_res720.style.display = "block";
        div_res721.style.display = "none";
        div_res722.style.display = "none";
        div_res723.style.display = "none";
        div_res724.style.display = "none";
        div_res725.style.display = "none";
        div_res726.style.display = "none";
        div_res727.style.display = "none";
        div_res728.style.display = "none";
        div_res729.style.display = "none";
    });

    btn_res721.addEventListener('click', () => {
        div_res711.style.display = "none";
        div_res712.style.display = "none";
        div_res713.style.display = "none";
        div_res714.style.display = "none";
        div_res715.style.display = "none";
        div_res716.style.display = "none";
        div_res717.style.display = "none";
        div_res718.style.display = "none";
        div_res719.style.display = "none";
        div_res720.style.display = "none";
        div_res721.style.display = "block";
        div_res722.style.display = "none";
        div_res723.style.display = "none";
        div_res724.style.display = "none";
        div_res725.style.display = "none";
        div_res726.style.display = "none";
        div_res727.style.display = "none";
        div_res728.style.display = "none";
        div_res729.style.display = "none";
    });

    btn_res722.addEventListener('click', () => {
        div_res711.style.display = "none";
        div_res712.style.display = "none";
        div_res713.style.display = "none";
        div_res714.style.display = "none";
        div_res715.style.display = "none";
        div_res716.style.display = "none";
        div_res717.style.display = "none";
        div_res718.style.display = "none";
        div_res719.style.display = "none";
        div_res720.style.display = "none";
        div_res721.style.display = "none";
        div_res722.style.display = "block";
        div_res723.style.display = "none";
        div_res724.style.display = "none";
        div_res725.style.display = "none";
        div_res726.style.display = "none";
        div_res727.style.display = "none";
        div_res728.style.display = "none";
        div_res729.style.display = "none";
    });

    btn_res723.addEventListener('click', () => {
        div_res711.style.display = "none";
        div_res712.style.display = "none";
        div_res713.style.display = "none";
        div_res714.style.display = "none";
        div_res715.style.display = "none";
        div_res716.style.display = "none";
        div_res717.style.display = "none";
        div_res718.style.display = "none";
        div_res719.style.display = "none";
        div_res720.style.display = "none";
        div_res721.style.display = "none";
        div_res722.style.display = "none";
        div_res723.style.display = "block";
        div_res724.style.display = "none";
        div_res725.style.display = "none";
        div_res726.style.display = "none";
        div_res727.style.display = "none";
        div_res728.style.display = "none";
        div_res729.style.display = "none";
    });

    btn_res724.addEventListener('click', () => {
        div_res711.style.display = "none";
        div_res712.style.display = "none";
        div_res713.style.display = "none";
        div_res714.style.display = "none";
        div_res715.style.display = "none";
        div_res716.style.display = "none";
        div_res717.style.display = "none";
        div_res718.style.display = "none";
        div_res719.style.display = "none";
        div_res720.style.display = "none";
        div_res721.style.display = "none";
        div_res722.style.display = "none";
        div_res723.style.display = "none";
        div_res724.style.display = "block";
        div_res725.style.display = "none";
        div_res726.style.display = "none";
        div_res727.style.display = "none";
        div_res728.style.display = "none";
        div_res729.style.display = "none";
    });

    btn_res725.addEventListener('click', () => {
        div_res711.style.display = "none";
        div_res712.style.display = "none";
        div_res713.style.display = "none";
        div_res714.style.display = "none";
        div_res715.style.display = "none";
        div_res716.style.display = "none";
        div_res717.style.display = "none";
        div_res718.style.display = "none";
        div_res719.style.display = "none";
        div_res720.style.display = "none";
        div_res721.style.display = "none";
        div_res722.style.display = "none";
        div_res723.style.display = "none";
        div_res724.style.display = "none";
        div_res725.style.display = "block";
        div_res726.style.display = "none";
        div_res727.style.display = "none";
        div_res728.style.display = "none";
        div_res729.style.display = "none";
    });

    btn_res726.addEventListener('click', () => {
        div_res711.style.display = "none";
        div_res712.style.display = "none";
        div_res713.style.display = "none";
        div_res714.style.display = "none";
        div_res715.style.display = "none";
        div_res716.style.display = "none";
        div_res717.style.display = "none";
        div_res718.style.display = "none";
        div_res719.style.display = "none";
        div_res720.style.display = "none";
        div_res721.style.display = "none";
        div_res722.style.display = "none";
        div_res723.style.display = "none";
        div_res724.style.display = "none";
        div_res725.style.display = "none";
        div_res726.style.display = "block";
        div_res727.style.display = "none";
        div_res728.style.display = "none";
        div_res729.style.display = "none";
    });

    btn_res727.addEventListener('click', () => {
        div_res711.style.display = "none";
        div_res712.style.display = "none";
        div_res713.style.display = "none";
        div_res714.style.display = "none";
        div_res715.style.display = "none";
        div_res716.style.display = "none";
        div_res717.style.display = "none";
        div_res718.style.display = "none";
        div_res719.style.display = "none";
        div_res720.style.display = "none";
        div_res721.style.display = "none";
        div_res722.style.display = "none";
        div_res723.style.display = "none";
        div_res724.style.display = "none";
        div_res725.style.display = "none";
        div_res726.style.display = "none";
        div_res727.style.display = "block";
        div_res728.style.display = "none";
        div_res729.style.display = "none";
    });

    btn_res728.addEventListener('click', () => {
        div_res711.style.display = "none";
        div_res712.style.display = "none";
        div_res713.style.display = "none";
        div_res714.style.display = "none";
        div_res715.style.display = "none";
        div_res716.style.display = "none";
        div_res717.style.display = "none";
        div_res718.style.display = "none";
        div_res719.style.display = "none";
        div_res720.style.display = "none";
        div_res721.style.display = "none";
        div_res722.style.display = "none";
        div_res723.style.display = "none";
        div_res724.style.display = "none";
        div_res725.style.display = "none";
        div_res726.style.display = "none";
        div_res727.style.display = "none";
        div_res728.style.display = "block";
        div_res729.style.display = "none";

    });
    btn_res729.addEventListener('click', () => {
        div_res711.style.display = "none";
        div_res712.style.display = "none";
        div_res713.style.display = "none";
        div_res714.style.display = "none";
        div_res715.style.display = "none";
        div_res716.style.display = "none";
        div_res717.style.display = "none";
        div_res718.style.display = "none";
        div_res719.style.display = "none";
        div_res720.style.display = "none";
        div_res721.style.display = "none";
        div_res722.style.display = "none";
        div_res723.style.display = "none";
        div_res724.style.display = "none";
        div_res725.style.display = "none";
        div_res726.style.display = "none";
        div_res727.style.display = "none";
        div_res728.style.display = "none";
        div_res729.style.display = "block";
    });

    
</script>