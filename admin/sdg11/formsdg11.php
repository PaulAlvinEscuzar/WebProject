<?php include('../../includes/adminHead/header11.php');
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
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1111"> Research on Sustainable Cities and Communities</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1121"> Campus land use</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1131"> Public access to buildings</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1132"> Public access to libraries</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1133"> Public access to museums</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1134"> Public access to green spaces</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1135"> Arts and heritage contribution</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1136"> Record and preserve cultural heritage</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1137"> Other campus’ support for arts and heritage</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1138"> Arts and heritage expenditure</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res327"> Sustainable practices targets</button></li> <!-- ito ay skip dahil sa pdf ay di pa alam namin ilalagay -->
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1139"> Student commuting practices</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1140"> Employee commuting practices</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1141"> Campus population commuting practices</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1142"> Promote sustainable commuting</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1143"> Allow remote working</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1144"> Proportion of employees that practice remote working</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1145"> Affordable housing for employees</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1146"> Affordable housing for students</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1147"> Pedestrian priority on campus</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1148"> Local authority collaboration regarding planning and development</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1149"> Planning development-new build standards</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1150"> Build on brownfield sites</button></li>
            </ul>
        </div>
        <div class=" bg-white border border-3 border-dark mt-5 w-100">
            <h2 class="text-center pt-3 mb-3">Add Research</h2>
            <div class="container" style=" height:auto;">
                <div class="d-flex w-100 h-auto">

                    <!--This div is for research 11.1.1-->
                    <div class="collapse w-100 h-auto" id="research1111" style="display: block ;">
                        <h2 class="text-center pb-5">Research on Sustainable Cities and Communities</h2>
                        <form action="../../admin/sdg11/insert/insert1111.php" method="post" name="form1">
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

                    <!--This div is for research 11.2.1-->
                    <div class="collapse w-100 h-auto" id="research1121" style="display: none ;">
                        <h2 class="text-center pb-5"> Campus land use</h2>
                        <form action="../../admin/sdg11/insert/insert1112.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total campus land area" name="campusLand">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total campus building area" name="campusBuilding">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total area in campus covered in forest vegetation" name="campusVegetation">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="text" class="form-control" placeholder="Total ground parking area" name="parkingArea">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total number of pedestrian paths on campus" name="pedestrianPath">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Campus setting" name="campusSettings">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 11.3.1-->
                    <div class="collapse w-100 h-auto" id="research1131" style="display: none ;">
                        <h2 class="text-center pb-5"> Public access to buildings</h2>
                        <form action="../../admin/sdg11/insert/insert1113.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of buildings and/or monuments or natural heritage landscapes of cultural significance in the campus" name="TotalNumBuild">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of visitors/guests that visit" name="TotalNumVisitor">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>


                        </form>
                    </div>

                    <!--This div is for research 11.3.2-->
                    <div class="collapse w-100 h-auto" id="research1132" style="display: none ;">
                        <h2 class="text-center pb-5"> Public access to libraries</h2>
                        <form action="../../admin/sdg11/insert/insert1132.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of internal stakeholders visiting the campus library (per month)" name="TotalNumInternal">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of visitors/guests visiting the campus library (per month)" name="TotalNumOfVisitor">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of books/publications borrowed by internal stakeholders (per month)" name="TotalNumOfBooks">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total number of books/publications borrowed by guests (per month)" name="TotalNumBorrowedGuest">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                     <!--This div is for research 11.3.3-->
                     <div class="collapse w-100 h-auto" id="research1133" style="display: none ;">
                        <h2 class="text-center pb-5"> Public access to museums</h2>
                        <form action="../../admin/sdg11/insert/insert1133.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of internal stakeholders visiting the campus museum (per year)" name="TotalNumInternalStakeholder">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of visitors/guests visiting the campus museum (per year)" name="TotalNumOfVisitorGuest">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 11.3.4-->
                    <div class="collapse w-100 h-auto" id="research1134" style="display: none ;">
                        <h2 class="text-center pb-5">  Public access to green spaces</h2>
                        <form action="../../admin/sdg11/insert/insert1134.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of school activities held at campus open/green spaces:" name="no_school_act">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of events open to general public held at campus open/green spaces" name="no_event">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 11.3.5-->
                    <div class="collapse w-100 h-auto" id="research1135" style="display: none ;">
                        <h2 class="text-center pb-5">  Arts and Heritage Contribution</h2>
                        <form action="../../admin/sdg11/insert/insert1135.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of performances:" name="num_of_performances">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of performers:" name="num_of_perfomers">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Total number of campus choir performances (with list of events)</span>
                                <input type="text" class="form-control" placeholder="Internal" name="num_of_choir_internal">
                                <input type="text" class="form-control" placeholder="External" name="num_of_choir_external">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Total number of campus theater groups performances (with list of events)</span>
                                <input type="text" class="form-control" placeholder="Internal" name="num_of_theater_internal">
                                <input type="text" class="form-control" placeholder="External" name="num_of_theater_external">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Total number of campus dance group performances (with list of events)</span>
                                <input type="text" class="form-control" placeholder="Internal" name="num_of_dance_internal">
                                <input type="text" class="form-control" placeholder="External" name="num_of_dance_external">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Total number of campus band group performances (with list of events)</span>
                                <input type="text" class="form-control" placeholder="Internal" name="num_of_band_internal">
                                <input type="text" class="form-control" placeholder="External" name="num_of_band_external">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of donated paintings and sculptures to community museums:" name="num_of_paintings">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total amount value of donated paintings and sculptures:" name="val_of_paintings">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>
                    
                    <!--This div is for research 11.3.6-->
                    <div class="collapse w-100 h-auto" id="research1136" style="display: none ;">
                        <h2 class="text-center pb-5">Record and preserve cultural heritage</h2>
                        <form action="../../admin/sdg11/insert/insert1136.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of projects intended to preserve cultural heritage:" name="num_of_projects">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of project:" name="title_of_projects">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short description:" name="short_des">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total cost:" name="total_cost">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Fund source:" name="fund_source">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>
                        
                                        
                        <!--This div is for research 11.3.7-->
                        <div class="collapse w-100 h-auto" id="research1137" style="display: none ;">
                            <h2 class="text-center pb-5"> Other campus’ support for arts and heritage</h2>
                            <form action="../../admin/sdg11/insert/insert1137.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of other support for arts and heritage" name="other_total_Num">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of PPA" name="Other_PPA_Title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short description:" name="other_short_des">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total cost:" name="other_total_cost">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Fund source:" name="other_fund_source">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                            </form>
                        </div>  
                        
                        <!--This div is for research 11.4.1-->
                        <div class="collapse w-100 h-auto" id="research1138" style="display: none ;">
                            <h2 class="text-center pb-5">Arts and heritage expenditure</h2>
                            <form action="../../admin/sdg11/insert/insert1138.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total campus expenditure on arts and heritage:" name="TotalCampus">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="% of the total allocated budget for arts and heritage was utilized." name="AllocBudget">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="% of total campus expenditure was allotted to arts and heritage." name="CampusExpen">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                            </form>
                        </div> 

                 
                        <!-- dito dapat yung 11.5.1 Sustainable practices targets (statistics only) -->


                        <!-- This div is for research 11.5.1.1-->
                        <div class="collapse w-100 h-auto" id="research1139" style="display: none ;">
                            <h2 class="text-center pb-5"> Student commuting practices</h2>
                            <form action="../../admin/sdg11/insert/insert1139.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students who walk to school" name="StudWalk">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students who use bicycle:" name="StudBike">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students who commute:" name="StudCommute">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students who use their own vehicle:" name="StudVehicle">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students who carpools:" name="StudCarpools">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="% of total student population walks to school" name="StudPopWalk">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="% of total student population use bicycle to go to school" name="StudPopBike">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="% of total student population commute to school" name="StudPopCommute">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="%  of total student population use their own vehicle to go to school" name="StudPopVehicle">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="%  of the total student population carpools with relatives/friends to go to school." name="StudPopCarpools">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                            </form>
                        </div>

                        <!--This div is for research 11.5.1.2-->
                        <div class="collapse w-100 h-auto" id="research1140" style="display: none ;">
                            <h2 class="text-center pb-5"> Employee commuting practices</h2>
                            <form action="../../admin/sdg11/insert/insert1140.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of employees who walk to school:" name="emp_walk">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of employees who walk to school:" name="emp_bicycle">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of employees who commute:" name="emp_commute">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of employees who use their own vehicle:" name="emp_vehicle">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of employees who carpools:" name="emp_carpools">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Percent of total employee population walks to school:" name="prct_walks">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Percent of total employee population use bicycle to go to school:" name="prct_bicycle">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Percent of total employee population commute to school:" name="prct_commute">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Percent of total employee population use their own vehicle to go to school:" name="prct_vehicle">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Percent of the total employee population carpools with relatives/friends to go to school.:" name="prct_carpools">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                            </form>
                        </div>

                        

                         <!--This div is for research 11.5.1.3-->
                         <div class="collapse w-100 h-auto" id="research1141" style="display: none ;">
                            <h2 class="text-center pb-5"> Campus population commuting practices</h2>
                            <form action="../../admin/sdg11/insert/insert1141.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="% total campus population walks to school" name="prct_walks">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="% total campus population use bicycle to go to school" name="prct_bicycle">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="% total campus population commute to school" name="prct_commute">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="% total campus population use their own vehicle to go to school" name="prct_vehicle">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="% total campus population carpools with relatives/friends to go to school" name="prct_carpools">
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                            </form>
                        </div>
                        
                        <!--This div is for research 11.5.2-->
                        <div class="collapse w-100 h-auto" id="research1142" style="display: none ;">
                            <h2 class="text-center pb-5">Promote sustainable commuting</h2>
                            <form action="../../admin/sdg11/insert/insert1142.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of PPAs that promotes sustainable commuting:" name="num_ppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA:" name="t_ppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short description:" name="short_des">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total cost:" name="total_cost">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Fund source:" name="fund_src">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                            </form>
                        </div>
                        
                         <!--This div is for research 11.5.3-->
                         <div class="collapse w-100 h-auto" id="research1143" style="display: none ;">
                            <h2 class="text-center pb-5"> Allow remote working</h2>
                            <form action="../../admin/sdg11/insert/insert1143.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of PPAs that allow remote working:" name="num_ppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA:" name="t_ppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short description:" name="short_des">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total cost:" name="total_cost">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Fund source:" name="fund_src">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                            </form>
                        </div>  
                        
                         <!--This div is for research 11.5.4-->
                         <div class="collapse w-100 h-auto" id="research1144" style="display: none ;">
                            <h2 class="text-center pb-5">Proportion of employees that practice remote working</h2>
                            <form action="../../admin/sdg11/insert/insert1144.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of employees that practice flexible work arrangements:" name="num_work_arr">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number or employees that work remotely:" name="num_work_remotely">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of employees that practice condensed working week:" name="num_working_week">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Percent of the employee population practice sustainable working arrangements.:" name="num_working_arr">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                            </form>
                        </div>   

                        <!--This div is for research 11.5.5 -->
                        <div class="collapse w-100 h-auto" id="research1145" style="display: none ;">
                            <h2 class="text-center pb-5">Affordable housing for employees</h2>
                            <form action="../../admin/sdg11/insert/insert1145.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of employees who live in their own house" name="emp_ownHouse">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of employee who are living with their relatives" name="emp_Relatives">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of employee who stays at the boarding house" name="emp_board">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of employee who rents apartment" name="emp_rent">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of employee who stays at the dormitory" name="emp_dorm">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="% of the employee population live in their own house." name="Pemp_ownHouse">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="% of the employee population are living with their relatives" name="Pemp_Relatives">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="% of the employee population stays at the boarding house" name="Pemp_board">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="% of the employee population rent in the apartment" name="Pemp_rent">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="% of the employee population stays at the dormitory" name="Pemp_dorm">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of PPAs for affordable housing for employees" name="PPA_housing">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of employees provided with housing" name="emp_provided">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of PPA" name="titlePPA">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short description" name="short_descrip">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total Cost" name="Totalcost">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Fund Source" name="Fund_source">
                            </div>
                        
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                            </form>
                        </div> 
                        
                        <!--This div is for research 11.5.6 -->
                        <div class="collapse w-100 h-auto" id="research1146" style="display: none ;">
                            <h2 class="text-center pb-5">Affordable housing for students</h2>
                            <form action="../../admin/sdg11/insert/insert1146.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students who live in their own house" name="stud_ownHouse">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students who are living with their relatives" name="stud_Relatives">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students who stays at the boarding house" name="stud_board">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students who rents apartment" name="stud_rent">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students who stays at the dormitory" name="stud_dorm">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="% of the students population live in their own house." name="studPemp_ownHouse">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="% of the students population are living with their relatives" name="studPemp_Relatives">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="% of the students population stays at the boarding house" name="studPemp_board">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="% of the students population rent in the apartment" name="studPemp_rent">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="% of the students population stays at the dormitory" name="studPemp_dorm">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of PPAs for affordable housing for students" name="studPPA_housing">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students provided with housing" name="stud_provided">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of PPA" name="stud_titlePPA">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short description" name="stud_short_descrip">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total Cost" name="stud_Totalcost">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Fund Source" name="stud_Fund_source">
                            </div>
                        
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                            </form>
                        </div>

                        <!--This div is for research 11.5.7 -->
                        <div class="collapse w-100 h-auto" id="research1147" style="display: none ;">
                            <h2 class="text-center pb-5">Pedestrian priority on campus</h2>
                            <form action="../../admin/sdg11/insert/insert1147.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of pedestrian access in campus" name="totalPed">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of PPAs prioritizing pedestrian access in the campus" name="totalPed_PPA">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA" name="PED_PPA">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short Description of the PPA" name="PED_SHORTDESCRIP">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total Cost" name="ped_totalcost">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Fund Source" name="pedFund">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                            </form>
                        </div>

                        <!--This div is for research 11.5.8 -->
                        <div class="collapse w-100 h-auto" id="research1148" style="display: none ;">
                            <h2 class="text-center pb-5">Local authority collaboration regarding planning and development</h2>
                            <form action="../../admin/sdg11/insert/insert1148.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of collaborations with local authority for the affordable housing for employees and students:" name="num_of_collab">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                            </form>
                        </div>

                        <!--This div is for research 11.5.9 -->
                        <div class="collapse w-100 h-auto" id="research1149" style="display: none ;">
                            <h2 class="text-center pb-5">Planning development-new build standards</h2>
                            <form action="../../admin/sdg11/insert/insert1149.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of policies and/or plans in adhering to sustainable standards of new builds" name="TotalNumPol">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of campus practices for sustainable standards of new builds" name="TotalNumPrac">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                            </form>
                        </div>

                        <!--This div is for research 11.5.10 -->
                        <div class="collapse w-100 h-auto" id="research1150" style="display: none ;">
                            <h2 class="text-center pb-5">Build on brownfield sites</h2>
                            <form action="../../admin/sdg11/insert/insert1150.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of policies and/or plans in building infrastructure on brownfield sites" name="TotalNum_Brownfield">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of campus infrastructure built on brownfield sites" name="totalnum_Infas">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total Cost" name="brownTotal">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Fund Source" name="brownFund">
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
    var btn_res1111 = document.getElementById("res1111");
    var btn_res1121 = document.getElementById("res1121");
    var btn_res1131 = document.getElementById("res1131");
    var btn_res1132 = document.getElementById("res1132");
    var btn_res1133 = document.getElementById("res1133");
    var btn_res1134 = document.getElementById("res1134");
    var btn_res1135 = document.getElementById("res1135");
    var btn_res1136 = document.getElementById("res1136");
    var btn_res1137 = document.getElementById("res1137");
    var btn_res1138 = document.getElementById("res1138");
    var btn_res1139 = document.getElementById("res1139");
    var btn_res1140 = document.getElementById("res1140");
    var btn_res1140 = document.getElementById("res1140");
    var btn_res1141 = document.getElementById("res1141");
    var btn_res1142 = document.getElementById("res1142");
    var btn_res1143 = document.getElementById("res1143");
    var btn_res1144 = document.getElementById("res1144");
    var btn_res1145 = document.getElementById("res1145");
    var btn_res1146 = document.getElementById("res1146");
    var btn_res1147 = document.getElementById("res1147");
    var btn_res1148 = document.getElementById("res1148");
    var btn_res1149 = document.getElementById("res1149");
    var btn_res1150 = document.getElementById("res1150");


    

    var div_res1111 = document.getElementById("research1111");
    var div_res1121 = document.getElementById("research1121");
    var div_res1131 = document.getElementById("research1131");
    var div_res1132 = document.getElementById("research1132");
    var div_res1133 = document.getElementById("research1133");
    var div_res1134 = document.getElementById("research1134");
    var div_res1135 = document.getElementById("research1135");
    var div_res1136 = document.getElementById("research1136");
    var div_res1137 = document.getElementById("research1137");
    var div_res1138 = document.getElementById("research1138");
    var div_res1139 = document.getElementById("research1139");
    var div_res1140 = document.getElementById("research1140");
    var div_res1141 = document.getElementById("research1141");
    var div_res1142 = document.getElementById("research1142");
    var div_res1143 = document.getElementById("research1143");
    var div_res1144 = document.getElementById("research1144");
    var div_res1145 = document.getElementById("research1145");
    var div_res1146 = document.getElementById("research1146");
    var div_res1147 = document.getElementById("research1147");
    var div_res1148 = document.getElementById("research1148");
    var div_res1149 = document.getElementById("research1149");
    var div_res1150 = document.getElementById("research1150");



    

    btn_res1111.addEventListener('click', () => {
        div_res1111.style.display = "block";
        div_res1121.style.display = "none";
        div_res1131.style.display = "none";
        div_res1132.style.display = "none";
        div_res1133.style.display = "none";
        div_res1134.style.display = "none";
        div_res1135.style.display = "none";
        div_res1136.style.display = "none";
        div_res1137.style.display = "none";
        div_res1138.style.display = "none";
        div_res1139.style.display = "none";
        div_res1140.style.display = "none";
        div_res1141.style.display = "none";
        div_res1142.style.display = "none";
        div_res1143.style.display = "none";
        div_res1144.style.display = "none";
        div_res1145.style.display = "none";
        div_res1146.style.display = "none";
        div_res1147.style.display = "none";
        div_res1148.style.display = "none";
        div_res1149.style.display = "none";
        div_res1150.style.display = "none";






    });
    btn_res1121.addEventListener('click', () => {
        div_res1111.style.display = "none";
        div_res1121.style.display = "block";
        div_res1131.style.display = "none";
        div_res1132.style.display = "none";
        div_res1133.style.display = "none";
        div_res1134.style.display = "none";
        div_res1135.style.display = "none";
        div_res1136.style.display = "none";
        div_res1137.style.display = "none";
        div_res1138.style.display = "none";
        div_res1139.style.display = "none";
        div_res1140.style.display = "none";
        div_res1141.style.display = "none";
        div_res1142.style.display = "none";
        div_res1143.style.display = "none";
        div_res1144.style.display = "none";
        div_res1145.style.display = "none";
        div_res1146.style.display = "none";
        div_res1147.style.display = "none";
        div_res1148.style.display = "none";
        div_res1149.style.display = "none";
        div_res1150.style.display = "none";
    });
    btn_res1131.addEventListener('click', () => {
        div_res1111.style.display = "none";
        div_res1121.style.display = "none";
        div_res1131.style.display = "block";
        div_res1132.style.display = "none";
        div_res1133.style.display = "none";
        div_res1134.style.display = "none";
        div_res1135.style.display = "none";
        div_res1136.style.display = "none";
        div_res1137.style.display = "none";
        div_res1138.style.display = "none";
        div_res1139.style.display = "none";
        div_res1140.style.display = "none";
        div_res1141.style.display = "none";
        div_res1142.style.display = "none";
        div_res1143.style.display = "none";
        div_res1144.style.display = "none";
        div_res1145.style.display = "none";
        div_res1146.style.display = "none";
        div_res1147.style.display = "none";
        div_res1148.style.display = "none";
        div_res1149.style.display = "none";
        div_res1150.style.display = "none";




    });
    btn_res1132.addEventListener('click', () => {
        div_res1111.style.display = "none";
        div_res1121.style.display = "none";
        div_res1131.style.display = "none";
        div_res1132.style.display = "block";
        div_res1133.style.display = "none";
        div_res1134.style.display = "none";
        div_res1135.style.display = "none";
        div_res1136.style.display = "none";
        div_res1137.style.display = "none";
        div_res1138.style.display = "none";
        div_res1139.style.display = "none";
        div_res1140.style.display = "none";
        div_res1141.style.display = "none";
        div_res1142.style.display = "none";
        div_res1143.style.display = "none";
        div_res1144.style.display = "none";
        div_res1145.style.display = "none";
        div_res1146.style.display = "none";
        div_res1147.style.display = "none";
        div_res1148.style.display = "none";
        div_res1149.style.display = "none";
        div_res1150.style.display = "none";





    });
    btn_res1133.addEventListener('click', () => {
        div_res1111.style.display = "none";
        div_res1121.style.display = "none";
        div_res1131.style.display = "none";
        div_res1132.style.display = "none";
        div_res1133.style.display = "block";
        div_res1134.style.display = "none";
        div_res1135.style.display = "none";
        div_res1136.style.display = "none";
        div_res1137.style.display = "none";
        div_res1138.style.display = "none";
        div_res1139.style.display = "none";
        div_res1140.style.display = "none";
        div_res1141.style.display = "none";
        div_res1142.style.display = "none";
        div_res1143.style.display = "none";
        div_res1144.style.display = "none";
        div_res1145.style.display = "none";
        div_res1146.style.display = "none";
        div_res1147.style.display = "none";
        div_res1148.style.display = "none";
        div_res1149.style.display = "none";
        div_res1150.style.display = "none";






    });
    btn_res1134.addEventListener('click', () => {
        div_res1111.style.display = "none";
        div_res1121.style.display = "none";
        div_res1131.style.display = "none";
        div_res1132.style.display = "none";
        div_res1133.style.display = "none";
        div_res1134.style.display = "block";
        div_res1135.style.display = "none";
        div_res1136.style.display = "none";
        div_res1137.style.display = "none";
        div_res1138.style.display = "none";
        div_res1139.style.display = "none";
        div_res1140.style.display = "none";
        div_res1141.style.display = "none";
        div_res1142.style.display = "none";
        div_res1143.style.display = "none";
        div_res1144.style.display = "none";
        div_res1145.style.display = "none";
        div_res1146.style.display = "none";
        div_res1147.style.display = "none";
        div_res1148.style.display = "none";
        div_res1149.style.display = "none";
        div_res1150.style.display = "none";





    });
    btn_res1135.addEventListener('click', () => {
        div_res1111.style.display = "none";
        div_res1121.style.display = "none";
        div_res1131.style.display = "none";
        div_res1132.style.display = "none";
        div_res1133.style.display = "none";
        div_res1134.style.display = "none";
        div_res1135.style.display = "block";
        div_res1136.style.display = "none";
        div_res1137.style.display = "none";
        div_res1138.style.display = "none";
        div_res1139.style.display = "none";
        div_res1140.style.display = "none";
        div_res1141.style.display = "none";
        div_res1142.style.display = "none";
        div_res1143.style.display = "none";
        div_res1144.style.display = "none";
        div_res1145.style.display = "none";
        div_res1146.style.display = "none";
        div_res1147.style.display = "none";
        div_res1148.style.display = "none";
        div_res1149.style.display = "none";
        div_res1150.style.display = "none";




    });
    btn_res1136.addEventListener('click', () => {
        div_res1111.style.display = "none";
        div_res1121.style.display = "none";
        div_res1131.style.display = "none";
        div_res1132.style.display = "none";
        div_res1133.style.display = "none";
        div_res1134.style.display = "none";
        div_res1135.style.display = "none";
        div_res1136.style.display = "block";
        div_res1137.style.display = "none";
        div_res1138.style.display = "none";
        div_res1139.style.display = "none";
        div_res1140.style.display = "none";
        div_res1141.style.display = "none";
        div_res1142.style.display = "none";
        div_res1143.style.display = "none";
        div_res1144.style.display = "none";
        div_res1145.style.display = "none";
        div_res1146.style.display = "none";
        div_res1147.style.display = "none";
        div_res1148.style.display = "none";
        div_res1149.style.display = "none";
        div_res1150.style.display = "none";


    });
    btn_res1137.addEventListener('click', () => {
        div_res1111.style.display = "none";
        div_res1121.style.display = "none";
        div_res1131.style.display = "none";
        div_res1132.style.display = "none";
        div_res1133.style.display = "none";
        div_res1134.style.display = "none";
        div_res1135.style.display = "none";
        div_res1136.style.display = "none";
        div_res1137.style.display = "block";
        div_res1138.style.display = "none";
        div_res1139.style.display = "none";
        div_res1140.style.display = "none";
        div_res1141.style.display = "none";
        div_res1142.style.display = "none";
        div_res1143.style.display = "none";
        div_res1144.style.display = "none";
        div_res1145.style.display = "none";
        div_res1146.style.display = "none";
        div_res1147.style.display = "none";
        div_res1148.style.display = "none";
        div_res1149.style.display = "none";
        div_res1150.style.display = "none";



    });
    btn_res1138.addEventListener('click', () => {
        div_res1111.style.display = "none";
        div_res1121.style.display = "none";
        div_res1131.style.display = "none";
        div_res1132.style.display = "none";
        div_res1133.style.display = "none";
        div_res1134.style.display = "none";
        div_res1135.style.display = "none";
        div_res1136.style.display = "none";
        div_res1137.style.display = "none";
        div_res1138.style.display = "block";
        div_res1139.style.display = "none";
        div_res1140.style.display = "none";
        div_res1141.style.display = "none";
        div_res1142.style.display = "none";
        div_res1143.style.display = "none";
        div_res1144.style.display = "none";
        div_res1145.style.display = "none";
        div_res1146.style.display = "none";
        div_res1147.style.display = "none";
        div_res1148.style.display = "none";
        div_res1149.style.display = "none";
        div_res1150.style.display = "none";

    });
    btn_res1139.addEventListener('click', () => {
         div_res1111.style.display = "none";
        div_res1121.style.display = "none";
        div_res1131.style.display = "none";
        div_res1132.style.display = "none";
        div_res1133.style.display = "none";
        div_res1134.style.display = "none";
        div_res1135.style.display = "none";
        div_res1136.style.display = "none";
        div_res1137.style.display = "none";
        div_res1138.style.display = "none";
        div_res1139.style.display = "block";
        div_res1140.style.display = "none";
        div_res1141.style.display = "none";
        div_res1142.style.display = "none";
        div_res1143.style.display = "none";
        div_res1144.style.display = "none";
        div_res1145.style.display = "none";
        div_res1146.style.display = "none";
        div_res1147.style.display = "none";
        div_res1148.style.display = "none";
        div_res1149.style.display = "none";
        div_res1150.style.display = "none";


    });
    btn_res1140.addEventListener('click', () => {
        div_res1111.style.display = "none";
        div_res1121.style.display = "none";
        div_res1131.style.display = "none";
        div_res1132.style.display = "none";
        div_res1133.style.display = "none";
        div_res1134.style.display = "none";
        div_res1135.style.display = "none";
        div_res1136.style.display = "none";
        div_res1137.style.display = "none";
        div_res1138.style.display = "none";
        div_res1139.style.display = "none";
        div_res1140.style.display = "block";
        div_res1141.style.display = "none";
        div_res1142.style.display = "none";
        div_res1143.style.display = "none";
        div_res1144.style.display = "none";
        div_res1145.style.display = "none";
        div_res1146.style.display = "none";
        div_res1147.style.display = "none";
        div_res1148.style.display = "none";
        div_res1149.style.display = "none";
        div_res1150.style.display = "none";

    });
    btn_res1141.addEventListener('click', () => {
        div_res1111.style.display = "none";
        div_res1121.style.display = "none";
        div_res1131.style.display = "none";
        div_res1132.style.display = "none";
        div_res1133.style.display = "none";
        div_res1134.style.display = "none";
        div_res1135.style.display = "none";
        div_res1136.style.display = "none";
        div_res1137.style.display = "none";
        div_res1138.style.display = "none";
        div_res1139.style.display = "none";
        div_res1140.style.display = "none";
        div_res1141.style.display = "block";
        div_res1142.style.display = "none";
        div_res1143.style.display = "none";
        div_res1144.style.display = "none";
        div_res1145.style.display = "none";
        div_res1146.style.display = "none";
        div_res1147.style.display = "none";
        div_res1148.style.display = "none";
        div_res1149.style.display = "none";
        div_res1150.style.display = "none";


    });
    btn_res1142.addEventListener('click', () => {
        div_res1111.style.display = "none";
        div_res1121.style.display = "none";
        div_res1131.style.display = "none";
        div_res1132.style.display = "none";
        div_res1133.style.display = "none";
        div_res1134.style.display = "none";
        div_res1135.style.display = "none";
        div_res1136.style.display = "none";
        div_res1137.style.display = "none";
        div_res1138.style.display = "none";
        div_res1139.style.display = "none";
        div_res1140.style.display = "none";
        div_res1141.style.display = "none";
        div_res1142.style.display = "block";
        div_res1143.style.display = "none";
        div_res1144.style.display = "none";
        div_res1145.style.display = "none";
        div_res1146.style.display = "none";
        div_res1147.style.display = "none";
        div_res1148.style.display = "none";
        div_res1149.style.display = "none";
        div_res1150.style.display = "none";



    });
    btn_res1143.addEventListener('click', () => {
        div_res1111.style.display = "none";
        div_res1121.style.display = "none";
        div_res1131.style.display = "none";
        div_res1132.style.display = "none";
        div_res1133.style.display = "none";
        div_res1134.style.display = "none";
        div_res1135.style.display = "none";
        div_res1136.style.display = "none";
        div_res1137.style.display = "none";
        div_res1138.style.display = "none";
        div_res1139.style.display = "none";
        div_res1140.style.display = "none";
        div_res1141.style.display = "none";
        div_res1142.style.display = "none";
        div_res1143.style.display = "block";
        div_res1144.style.display = "none";
        div_res1145.style.display = "none";
        div_res1146.style.display = "none";
        div_res1147.style.display = "none";
        div_res1148.style.display = "none";
        div_res1149.style.display = "none";
        div_res1150.style.display = "none";

    });
    btn_res1144.addEventListener('click', () => {
        div_res1111.style.display = "none";
        div_res1121.style.display = "none";
        div_res1131.style.display = "none";
        div_res1132.style.display = "none";
        div_res1133.style.display = "none";
        div_res1134.style.display = "none";
        div_res1135.style.display = "none";
        div_res1136.style.display = "none";
        div_res1137.style.display = "none";
        div_res1138.style.display = "none";
        div_res1139.style.display = "none";
        div_res1140.style.display = "none";
        div_res1141.style.display = "none";
        div_res1142.style.display = "none";
        div_res1143.style.display = "none";
        div_res1144.style.display = "block";
        div_res1145.style.display = "none";
        div_res1146.style.display = "none";
        div_res1147.style.display = "none";
        div_res1148.style.display = "none";
        div_res1149.style.display = "none";
        div_res1150.style.display = "none";


    });
    btn_res1145.addEventListener('click', () => {
        div_res1111.style.display = "none";
        div_res1121.style.display = "none";
        div_res1131.style.display = "none";
        div_res1132.style.display = "none";
        div_res1133.style.display = "none";
        div_res1134.style.display = "none";
        div_res1135.style.display = "none";
        div_res1136.style.display = "none";
        div_res1137.style.display = "none";
        div_res1138.style.display = "none";
        div_res1139.style.display = "none";
        div_res1140.style.display = "none";
        div_res1141.style.display = "none";
        div_res1142.style.display = "none";
        div_res1143.style.display = "none";
        div_res1144.style.display = "none";
        div_res1145.style.display = "block"; 
        div_res1146.style.display = "none";
        div_res1147.style.display = "none";
        div_res1148.style.display = "none";
        div_res1149.style.display = "none";
        div_res1150.style.display = "none";
    });

    btn_res1146.addEventListener('click', () => {
        div_res1111.style.display = "none";
        div_res1121.style.display = "none";
        div_res1131.style.display = "none";
        div_res1132.style.display = "none";
        div_res1133.style.display = "none";
        div_res1134.style.display = "none";
        div_res1135.style.display = "none";
        div_res1136.style.display = "none";
        div_res1137.style.display = "none";
        div_res1138.style.display = "none";
        div_res1139.style.display = "none";
        div_res1140.style.display = "none";
        div_res1141.style.display = "none";
        div_res1142.style.display = "none";
        div_res1143.style.display = "none";
        div_res1144.style.display = "none";
        div_res1145.style.display = "none"; 
        div_res1146.style.display = "block";
        div_res1147.style.display = "none";
        div_res1148.style.display = "none";
        div_res1149.style.display = "none";
        div_res1150.style.display = "none";




    });

    btn_res1147.addEventListener('click', () => {
        div_res1111.style.display = "none";
        div_res1121.style.display = "none";
        div_res1131.style.display = "none";
        div_res1132.style.display = "none";
        div_res1133.style.display = "none";
        div_res1134.style.display = "none";
        div_res1135.style.display = "none";
        div_res1136.style.display = "none";
        div_res1137.style.display = "none";
        div_res1138.style.display = "none";
        div_res1139.style.display = "none";
        div_res1140.style.display = "none";
        div_res1141.style.display = "none";
        div_res1142.style.display = "none";
        div_res1143.style.display = "none";
        div_res1144.style.display = "none";
        div_res1145.style.display = "none"; 
        div_res1146.style.display = "none";
        div_res1147.style.display = "block";
        div_res1148.style.display = "none";
        div_res1149.style.display = "none";
        div_res1150.style.display = "none";



    });

    btn_res1148.addEventListener('click', () => {
        div_res1111.style.display = "none";
        div_res1121.style.display = "none";
        div_res1131.style.display = "none";
        div_res1132.style.display = "none";
        div_res1133.style.display = "none";
        div_res1134.style.display = "none";
        div_res1135.style.display = "none";
        div_res1136.style.display = "none";
        div_res1137.style.display = "none";
        div_res1138.style.display = "none";
        div_res1139.style.display = "none";
        div_res1140.style.display = "none";
        div_res1141.style.display = "none";
        div_res1142.style.display = "none";
        div_res1143.style.display = "none";
        div_res1144.style.display = "none";
        div_res1145.style.display = "none"; 
        div_res1146.style.display = "none";
        div_res1147.style.display = "none";
        div_res1148.style.display = "block";
        div_res1149.style.display = "none";
        div_res1150.style.display = "none";
    });

    btn_res1149.addEventListener('click', () => {
        div_res1111.style.display = "none";
        div_res1121.style.display = "none";
        div_res1131.style.display = "none";
        div_res1132.style.display = "none";
        div_res1133.style.display = "none";
        div_res1134.style.display = "none";
        div_res1135.style.display = "none";
        div_res1136.style.display = "none";
        div_res1137.style.display = "none";
        div_res1138.style.display = "none";
        div_res1139.style.display = "none";
        div_res1140.style.display = "none";
        div_res1141.style.display = "none";
        div_res1142.style.display = "none";
        div_res1143.style.display = "none";
        div_res1144.style.display = "none";
        div_res1145.style.display = "none"; 
        div_res1146.style.display = "none";
        div_res1147.style.display = "none";
        div_res1148.style.display = "none";
        div_res1149.style.display = "block";
        div_res1150.style.display = "none";
    });

    btn_res1150.addEventListener('click', () => {
        div_res1111.style.display = "none";
        div_res1121.style.display = "none";
        div_res1131.style.display = "none";
        div_res1132.style.display = "none";
        div_res1133.style.display = "none";
        div_res1134.style.display = "none";
        div_res1135.style.display = "none";
        div_res1136.style.display = "none";
        div_res1137.style.display = "none";
        div_res1138.style.display = "none";
        div_res1139.style.display = "none";
        div_res1140.style.display = "none";
        div_res1141.style.display = "none";
        div_res1142.style.display = "none";
        div_res1143.style.display = "none";
        div_res1144.style.display = "none";
        div_res1145.style.display = "none"; 
        div_res1146.style.display = "none";
        div_res1147.style.display = "none";
        div_res1148.style.display = "none";
        div_res1149.style.display = "none";
        div_res1150.style.display = "block";
    });

    
</script>