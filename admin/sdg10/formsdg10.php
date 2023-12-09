<?php include('../../includes/adminHead/header10.php'); ?>


<?php if (isset($_GET['message'])) { ?>
        <div id="insertMessage">
            <p class="text-center bg-gradient text-light p-4" style="background-color: #e01a83;">
                <?php echo $_GET['message']; ?>
            </p>
        </div>
<?php }
$totalStudNum = 4780; ?>
<div class="container mt-5 mb-5">
    <div class="row-mt-5">
        <div class="dropdown" onclick="hideMessage()">
            <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton1"
                data-bs-toggle="dropdown" aria-expanded="false">
                Pick SDG Target
            </button>
            <ul class="dropdown-menu bg-white border-0 " aria-labelledby="dropdownMenuButton1">
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1011">Research on reduced
                        inequalities</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1031">Proportion of students with
                        disabilities</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1032">Proportion of employees
                        with disabilities</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1041">Proportion of students who
                        belong to IPs</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1042">Proportion of employees who
                        belong to IPs</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1051">Proportion of students who
                        are member of LGBTQIA+ group</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1052">Proportion of employees who
                        are member of LGBTQIA+ group</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1061">Proportion of students
                        based on religion</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1062">Proportion of employees
                        based on religion</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1071">Proportion of refugee
                        students</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1072">Proportion of refugee
                        employees</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1081">Non-discriminatory
                        admissions policy</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1082">Access to university track
                        underrepresented groups applications</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1083">Access to university
                        underrepresented groups recruit</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1084">Anti-Discrimination
                        Policies</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1085">Campus diversity officer</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1086">Support for underrepresented groups (exclude PWDs)</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1087">Accessible facilities</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1088">Disability support services for students and employees</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res1089">Disability access scheme</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res10810">Disability accommodation policy</button></li>
                
            </ul>
        </div>
        <div class=" bg-white border border-3 border-dark mt-5 w-100">
            <h2 class="text-center pt-3 mb-3">Add Information</h2>
            <div class="container" style=" height:auto;">
                <div class="d-flex w-100 h-auto">

                    <!--This div is for research 10.1.1-->
                    <div class="collapse w-100 h-auto" id="research1011" style="display: block ;">
                    <h2 class="text-center pb-5">Research on reduced inequalities</h2>
                    <form action="insert/insertres10.1.1.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Title</span>
                                <input type="text" class="form-control" name="title"
                                    aria-describedby="basic-addon1" required>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Author</span>
                                <input type="text" class="form-control" name="author"
                                    aria-describedby="basic-addon1" required>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Year Publication</span>
                                <input type="text" class="form-control" name="year_pub"
                                    aria-describedby="basic-addon1" required>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Number of
                                    Citations</span>
                                <input type="text" class="form-control" name="no_citations"
                                    aria-describedby="basic-addon1" required>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Indexed In</span>
                                <input type="text" class="form-control" name="indexedIn"
                                    aria-describedby="basic-addon1" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn mb-3" style="background-color: #e01a83; color: white"
                                    name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 10.3.1-->
                    <div class="collapse w-100 h-auto" id="research1031" style="display: none ;">
                        <h2 class="text-center pb-5">Proportion of students with disabilities</h2>
                        <form action="insert/insertres10.3.1.php" method="post" name="form1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male students with disabilities</span>
                            <input type="number" class="form-control" name="numSWDmale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female students with disabilities</span>
                            <input type="number" class="form-control" name="numSWDfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of students with disabilities</span>
                            <input type="number" class="form-control" name="numSWDtotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Psychosocial disability (ex. anxiety, depression)</span>
                            <input type="number" class="form-control" name="psychosocialDis_S"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Disability caused by Chronic Illness</span>
                            <input type="number" class="form-control" name="CI_Dis_S"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of PWDs students that have PWD ID</span>
                            <input type="number" class="form-control" name="learningDis_S"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Learning disability</span>
                            <input type="number" class="form-control" name="visualDis_S"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Visual disability</span>
                            <input type="number" class="form-control" name="locoDis_S"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Orthopedic/Locomotor disability</span>
                            <input type="number" class="form-control" name="commDis_S"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Communication disabilit</span>
                            <input type="number" class="form-control" name="numSWPI_S"
                                aria-describedby="basic-addon1" required>
                        </div>
                            <div class="d-grid">
                                <button type="submit" class="btn mb-3" style="background-color: #e01a83; color: white"
                                    name="submit">Submit</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 10.3.2-->
                    <div class="collapse w-100 h-auto" id="research1032" style="display: none ;">
                        <h2 class="text-center pb-5">Proportion of employees with disabilities</h2>
                        <form action="insert/insertres10.3.2.php" method="post" name="form1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male employees with disabilities</span>
                            <input type="number" class="form-control" name="numEWDmale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female employees with disabilities</span>
                            <input type="number" class="form-control" name="numEWDfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of employees with disabilities</span>
                            <input type="number" class="form-control" name="numEWDtotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Psychiatric disorder</span>
                            <input type="number" class="form-control" name="psychiatricDis_E"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Disability caused by chronic illness</span>
                            <input type="number" class="form-control" name="CI_Dis_E"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Learning disability</span>
                            <input type="number" class="form-control" name="learningDis_E"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Visual disability</span>
                            <input type="number" class="form-control" name="visualDis_E"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Orthopedic/Locomotor disability</span>
                            <input type="number" class="form-control" name="locoDis_E"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Communication disability</span>
                            <input type="number" class="form-control" name="commDis_E"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Congenital</span>
                            <input type="number" class="form-control" name="congenital_E"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of PWDs employees that have PWD ID</span>
                            <input type="number" class="form-control" name="numEWPI"
                                aria-describedby="basic-addon1" required>
                        </div>
                            <div class="d-grid">
                                <button type="submit" class="btn mb-3" style="background-color: #e01a83; color: white"
                                    name="submit">Submit</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 10.4.1-->
                    <div class="collapse w-100 h-auto" id="research1041" style="display: none ;">
                        <h2 class="text-center pb-5">Proportion of students who belong to IPs </h2>
                        <form action="insert/insertres10.4.1.php" method="post" name="form1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male IP students</span>
                            <input type="number" class="form-control" name="numIPmem_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female IP students</span>
                            <input type="number" class="form-control" name="numIPmem_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of IP students</span>
                            <input type="number" class="form-control" name="numIPmem_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                            <div class="d-grid">
                                <button type="submit" class="btn mb-3" style="background-color: #e01a83; color: white"
                                    name="submit">Submit</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 10.4.2-->
                    <div class="collapse w-100 h-auto" id="research1042" style="display: none ;">
                        <h2 class="text-center pb-5">Proportion of employees who belong to IPs </h2>
                        <form action="insert/insertres10.4.2.php" method="post" name="form1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male IP employees</span>
                            <input type="number" class="form-control" name="numIPmem_Emale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female IP employees</span>
                            <input type="number" class="form-control" name="numIPmem_Efemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of IP employees</span>
                            <input type="number" class="form-control" name="numIPmem_Etotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                            <div class="d-grid">
                                <button type="submit" class="btn mb-3" style="background-color: #e01a83; color: white"
                                    name="submit">Submit</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 10.5.1-->
                    <div class="collapse w-100 h-auto" id="research1051" style="display: none ;">
                        <h2 class="text-center pb-5">Proportion of students who are member of LGBTQIA+ group</h2>
                        <form action="insert/insertres10.5.1.php" method="post" name="form1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of students who are member of LGBTQIA+</span>
                            <input type="number" class="form-control" name="numLGBT_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div> 
                            <div class="d-grid">
                                <button type="submit" class="btn mb-3" style="background-color: #e01a83; color: white"
                                    name="submit">Submit</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 10.5.2-->
                    <div class="collapse w-100 h-auto" id="research1052" style="display: none ;">
                        <h2 class="text-center pb-5">Proportion of employees who are member of LGBTQIA+ group</h2>
                        <form action="insert/insertres10.5.2.php" method="post" name="form1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of employees who are member of LGBTQIA+</span>
                            <input type="number" class="form-control" name="numLGBT_Etotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                            <div class="d-grid">
                                <button type="submit" class="btn mb-3" style="background-color: #e01a83; color: white"
                                    name="submit">Submit</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 10.6.1-->
                    <div class="collapse w-100 h-auto" id="research1061" style="display: none ;">
                        <h2 class="text-center pb-5">Proportion of students based on religion</h2>
                        <form action="insert/insertres10.6.1.php" method="post" name="form1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male students who belongs to religious groups</span>
                            <input type="number" class="form-control" name="numReligiousGroup_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female students who belongs to religious groups</span>
                            <input type="number" class="form-control" name="numReligiousGroup_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of students who belongs to religious groups</span>
                            <input type="number" class="form-control" name="numReligiousGroup_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male students who belongs to Aglipayan</span>
                            <input type="number" class="form-control" name="numAglipayan_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female students who belongs to Aglipayan</span>
                            <input type="number" class="form-control" name="numAglipayan_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of students who belongs to Aglipayan</span>
                            <input type="number" class="form-control" name="numAglipayan_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male students who belongs to Born Again</span>
                            <input type="number" class="form-control" name="numBornAgain_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female students who belongs to Born Again</span>
                            <input type="number" class="form-control" name="numBornAgain_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of students who belongs to Born Again</span>
                            <input type="number" class="form-control" name="numBornAgain_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male students who belongs to Buddhism</span>
                            <input type="number" class="form-control" name="numBuddhism_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female students who belongs to Buddhism</span>
                            <input type="number" class="form-control" name="numBuddhism_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of students who belongs to Buddhism</span>
                            <input type="number" class="form-control" name="numBuddhism_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male students who belongs to Hinduism</span>
                            <input type="number" class="form-control" name="numHinduism_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female students who belongs to Hinduism</span>
                            <input type="number" class="form-control" name="numHinduism_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of students who belongs to Hinduism</span>
                            <input type="number" class="form-control" name="numHinduism_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male students who belongs to Iglesia ni Cristo</span>
                            <input type="number" class="form-control" name="numINC_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female students who belongs to Iglesia ni Cristo</span>
                            <input type="number" class="form-control" name="numINC_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of students who belongs to Iglesia ni Cristo</span>
                            <input type="number" class="form-control" name="numINC_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male students who belongs to Islam</span>
                            <input type="number" class="form-control" name="numIslam_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female students who belongs to Islam</span>
                            <input type="number" class="form-control" name="numIslam_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of students who belongs to Islam</span>
                            <input type="number" class="form-control" name="numIslam_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male students who belongs to Jehovah's Witnesses</span>
                            <input type="number" class="form-control" name="numJW_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female students who belongs to Jehovah's Witnesses</span>
                            <input type="number" class="form-control" name="numJW_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of students who belongs to Jehovah's Witnesses</span>
                            <input type="number" class="form-control" name="numJW_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male students who belongs to Latter-Day Saints</span>
                            <input type="number" class="form-control" name="numLDS_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female students who belongs to Latter-Day Saints</span>
                            <input type="number" class="form-control" name="numLDS_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of students who belongs to Latter-Day Saints</span>
                            <input type="number" class="form-control" name="numLDS_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male students who belongs to Protestant</span>
                            <input type="number" class="form-control" name="numProtestant_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female students who belongs to Protestant</span>
                            <input type="number" class="form-control" name="numProtestant_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of students who belongs to Protestant</span>
                            <input type="number" class="form-control" name="numProtestant_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male students who belongs to Roman Catholic</span>
                            <input type="number" class="form-control" name="numRC_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female students who belongs to Roman Catholic</span>
                            <input type="number" class="form-control" name="numRC_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of students who belongs to Roman Catholic</span>
                            <input type="number" class="form-control" name="numRC_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male students who belongs to Seventh-day Adventists</span>
                            <input type="number" class="form-control" name="numSA_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female students who belongs to Seventh-day Adventists</span>
                            <input type="number" class="form-control" name="numSA_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of students who belongs to Seventh-day Adventists</span>
                            <input type="number" class="form-control" name="numSA_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male students who belongs to Others</span>
                            <input type="number" class="form-control" name="numOthers_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female students who belongs to Others</span>
                            <input type="number" class="form-control" name="numOthers_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of students who belongs to Others</span>
                            <input type="number" class="form-control" name="numOthers_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of students not affiliated with any religious denomination</span>
                            <input type="number" class="form-control" name="numNoReligion_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                            <div class="d-grid">
                                <button type="submit" class="btn mb-3" style="background-color: #e01a83; color: white"
                                    name="submit">Submit</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 10.6.2-->
                    <div class="collapse w-100 h-auto" id="research1062" style="display: none ;">
                        <h2 class="text-center pb-5">Proportion of employees based on religion</h2>
                        <form action="insert/insertres10.6.2.php" method="post" name="form1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male employees who belongs to religious groups</span>
                            <input type="text" class="form-control" name="numReligiousGroup_Emale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female employees who belongs to religious groups</span>
                            <input type="text" class="form-control" name="numReligiousGroup_Efemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female employees who belongs to religious groups</span>
                            <input type="text" class="form-control" name="numReligiousGroup_Etotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male employees who belongs to Aglipayan</span>
                            <input type="text" class="form-control" name="numAglipayan_Emale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female employees who belongs to Aglipayan</span>
                            <input type="text" class="form-control" name="numAglipayan_Efemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of employees who belongs to Aglipayan</span>
                            <input type="text" class="form-control" name="numAglipayan_Etotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male employees who belongs to Born Again</span>
                            <input type="text" class="form-control" name="numBornAgain_Emale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female employees who belongs to Born Again</span>
                            <input type="text" class="form-control" name="numBornAgain_Efemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of employees who belongs to Born Again</span>
                            <input type="text" class="form-control" name="numBornAgain_Etotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male employees who belongs to Buddhism</span>
                            <input type="text" class="form-control" name="numBuddhism_Emale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female employees who belongs to Buddhism</span>
                            <input type="text" class="form-control" name="numBuddhism_Efemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of employees who belongs to Buddhism</span>
                            <input type="text" class="form-control" name="numBuddhism_Etotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male employees who belongs to Hinduism</span>
                            <input type="text" class="form-control" name="numHinduism_Emale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female employees who belongs to Hinduism</span>
                            <input type="text" class="form-control" name="numHinduism_Efemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of employees who belongs to Hinduism</span>
                            <input type="text" class="form-control" name="numHinduism_Etotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male employees who belongs to Iglesia ni Cristo</span>
                            <input type="text" class="form-control" name="numINC_Emale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female employees who belongs to Iglesia ni Cristo</span>
                            <input type="text" class="form-control" name="numINC_Efemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of employees who belongs to Iglesia ni Cristo</span>
                            <input type="text" class="form-control" name="numINC_Etotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male employees who belongs to Islam</span>
                            <input type="text" class="form-control" name="numIslam_Emale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female employees who belongs to Islam</span>
                            <input type="text" class="form-control" name="numIslam_Efemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of employees who belongs to Islam</span>
                            <input type="text" class="form-control" name="numIslam_Etotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male employees who belongs to Jehovah's Witnesses</span>
                            <input type="text" class="form-control" name="numJW_Emale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female employees who belongs to Jehovah's Witnesses</span>
                            <input type="text" class="form-control" name="numJW_Efemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of employees who belongs to Jehovah's Witnesses</span>
                            <input type="text" class="form-control" name="numJW_Etotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                    <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male employees who belongs to Latter-Day Saints</span>
                            <input type="text" class="form-control" name="numLDS_Emale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female employees who belongs to Latter-Day Saints</span>
                            <input type="text" class="form-control" name="numLDS_Efemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of employees who belongs to Latter-Day Saints</span>
                            <input type="text" class="form-control" name="numLDS_Etotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male employees who belongs to Protestant</span>
                            <input type="text" class="form-control" name="numProtestant_Emale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female employees who belongs to Protestant</span>
                            <input type="text" class="form-control" name="numProtestant_Efemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of employees who belongs to Protestant</span>
                            <input type="text" class="form-control" name="numProtestant_Etotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male employees who belongs to Roman Catholic</span>
                            <input type="text" class="form-control" name="numRC_Emale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female employees who belongs to Roman Catholic</span>
                            <input type="text" class="form-control" name="numRC_Efemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of employees who belongs to Roman Catholic</span>
                            <input type="text" class="form-control" name="numRC_Etotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male employees who belongs to Seventh-day Adventists</span>
                            <input type="text" class="form-control" name="numSA_Emale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female employees who belongs to Seventh-day Adventists</span>
                            <input type="text" class="form-control" name="numSA_Efemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of employees who belongs to Seventh-day Adventists</span>
                            <input type="text" class="form-control" name="numSA_Etotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male employees who belongs to Others</span>
                            <input type="text" class="form-control" name="numOthers_Emale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female employees who belongs to Others</span>
                            <input type="text" class="form-control" name="numOthers_Efemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of employees who belongs to Others</span>
                            <input type="text" class="form-control" name="numOthers_Etotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of employees not affiliated with any religious denomination</span>
                            <input type="text" class="form-control" name="numNoReligion_Etotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                            <div class="d-grid">
                                <button type="submit" class="btn mb-3" style="background-color: #e01a83; color: white"
                                    name="submit">Submit</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 10.7.1-->
                    <div class="collapse w-100 h-auto" id="research1071" style="display: none ;">
                        <h2 class="text-center pb-5">Proportion of refugee students</h2>
                        <form action="insert/insertres10.7.1.php" method="post" name="form1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male refugee students</span>
                            <input type="text" class="form-control" name="numRefugee_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female refugee students</span>
                            <input type="text" class="form-control" name="numRefugee_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of refugee students</span>
                            <input type="text" class="form-control" name="numRefugee_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                            <div class="d-grid">
                                <button type="submit" class="btn mb-3" style="background-color: #e01a83; color: white"
                                    name="submit">Submit</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 10.7.2-->
                    <div class="collapse w-100 h-auto" id="research1072" style="display: none ;">
                        <h2 class="text-center pb-5">Proportion of refugee employees</h2>
                        <form action="insert/insertres10.7.2.php" method="post" name="form1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male refugee employees</span>
                            <input type="text" class="form-control" name="numRefugee_Emale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female refugee employees</span>
                            <input type="text" class="form-control" name="numRefugee_Efemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of refugee employees</span>
                            <input type="text" class="form-control" name="numRefugee_Etotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                            <div class="d-grid">
                                <button type="submit" class="btn mb-3" style="background-color: #e01a83; color: white"
                                    name="submit">Submit</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 10.8.1-->
                    <div class="collapse w-100 h-auto" id="research1081" style="display: none ;">
                        <h2 class="text-center pb-5">Non-discriminatory admissions policy</h2>
                        <form action="insert/insertres10.8.1.php" method="post" name="form1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Title of the PPA</span>
                            <input type="text" class="form-control" name="PPA1081title"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Short description of the PPA</span>
                            <input type="text" class="form-control" name="PPA1081shortDesc"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total cost</span>
                            <input type="text" class="form-control" name="ppa1081T_Cost"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Fund source</span>
                            <input type="text" class="form-control" name="ppa1081Fsource"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Evidence</span>
                            <input type="text" class="form-control" name="PPA1081evidence"
                                aria-describedby="basic-addon1" required>
                        </div>
                            <div class="d-grid">
                                <button type="submit" class="btn mb-3" style="background-color: #e01a83; color: white"
                                    name="submit">Submit</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 10.8.2-->
                    <div class="collapse w-100 h-auto" id="research1082" style="display: none ;">
                        <h2 class="text-center pb-3">Access to university underrepresented groups applicant</h2>
                        <form action="insert/insertres10.8.2.php" method="post" name="form1">
                        <h3 class="text-center">Student applicants tracking</h3>
                    
                    <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male student applicants who belong to low-income families</span>
                            <input type="text" class="form-control" name="numLIFapplicant_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female student applicants who belong to low-income families</span>
                            <input type="text" class="form-control" name="numLIFapplicant_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of student applicants who belong to low-income families</span>
                            <input type="text" class="form-control" name="numLIFapplicant_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>

                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male student applicants who belong to LGBTQIA+ group</span>
                            <input type="text" class="form-control" name="numLGBTapplicant_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female student applicants who belong to LGBTQIA+ group</span>
                            <input type="text" class="form-control" name="numLGBTapplicant_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of student applicants who belong to LGBTQIA+ group</span>
                            <input type="text" class="form-control" name="numLGBTapplicant_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>

                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male student applicants who are refugee</span>
                            <input type="text" class="form-control" name="numRefugeeApplicant_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female student applicants who are refugee</span>
                            <input type="text" class="form-control" name="numRefugeeApplicant_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of student applicants who are refugee</span>
                            <input type="text" class="form-control" name="numRefugeeApplicant_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>

                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male student applicants who are disabled</span>
                            <input type="text" class="form-control" name="numDisApplicant_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female student applicants who are disabled</span>
                            <input type="text" class="form-control" name="numDisApplicant_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of student applicants who are disabled</span>
                            <input type="text" class="form-control" name="numDisApplicant_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>

                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male student applicants are child of solo parent</span>
                            <input type="text" class="form-control" name="numCoSPapplicant_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female student applicants are child of solo parent</span>
                            <input type="text" class="form-control" name="numCoSPapplicant_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of student applicants are child of solo parent</span>
                            <input type="text" class="form-control" name="numCoSPapplicant_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>

                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male student applicants are member of IPs</span>
                            <input type="text" class="form-control" name="numIPapplicant_Smale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female student applicants are member of IPs</span>
                            <input type="text" class="form-control" name="numIPapplicant_Sfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of student applicants are member of IPs</span>
                            <input type="text" class="form-control" name="numIPapplicant_Stotal"
                                aria-describedby="basic-addon1" required>
                        </div>

                        <h3 class="text-center">Job applicants tracking</h3>
                        
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male job applicants who belong to low-income families</span>
                            <input type="text" class="form-control" name="numLIFapplicant_Jmale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female job applicants who belong to low-income families</span>
                            <input type="text" class="form-control" name="numLIFapplicant_Jfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of job applicants who belong to low-income families</span>
                            <input type="text" class="form-control" name="numLIFapplicant_Jtotal"
                                aria-describedby="basic-addon1" required>
                        </div>

                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male job applicants who belong to LGBTQIA+ group</span>
                            <input type="text" class="form-control" name="numLGBTapplicant_Jmale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female job applicants who belong to LGBTQIA+ group</span>
                            <input type="text" class="form-control" name="numLGBTapplicant_Jfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of job applicants who belong to LGBTQIA+ group</span>
                            <input type="text" class="form-control" name="numLGBTapplicant_Jtotal"
                                aria-describedby="basic-addon1" required>
                        </div> 

                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male job applicants who are refugee</span>
                            <input type="text" class="form-control" name="numRefugeeApplicant_Jmale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female job applicants who are refugee</span>
                            <input type="text" class="form-control" name="numRefugeeApplicant_Jfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of job applicants who are refugee</span>
                            <input type="text" class="form-control" name="numRefugeeApplicant_Jtotal"
                                aria-describedby="basic-addon1" required>
                        </div>

                        <br> 
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male job applicants who are disabled</span>
                            <input type="text" class="form-control" name="numDisApplicant_Jmale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female job applicants who are disabled</span>
                            <input type="text" class="form-control" name="numDisApplicant_Jfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of job applicants who are disabled</span>
                            <input type="text" class="form-control" name="numDisApplicant_Jtotal"
                                aria-describedby="basic-addon1" required>
                        </div>

                        <br>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male job applicants are child of solo parent</span>
                            <input type="text" class="form-control" name="numCoSPapplicant_Jmale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female job applicants are child of solo parent</span>
                            <input type="text" class="form-control" name="numCoSPapplicant_Jfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of job applicants are child of solo parent</span>
                            <input type="text" class="form-control" name="numCoSPapplicant_Jtotal"
                                aria-describedby="basic-addon1" required>
                        </div>

                        <br> 
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of male job applicants are member of IPs</span>
                            <input type="text" class="form-control" name="numIPapplicant_Jmale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Number of female job applicants are member of IPs</span>
                            <input type="text" class="form-control" name="numIPapplicant_Jfemale"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of job applicants are member of IPs</span>
                            <input type="text" class="form-control" name="numIPapplicant_Jtotal"
                                aria-describedby="basic-addon1" required>
                        </div>
                            <div class="d-grid">
                                <button type="submit" class="btn mb-3" style="background-color: #e01a83; color: white"
                                    name="submit">Submit</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 10.8.3-->
                    <div class="collapse w-100 h-auto" id="research1083" style="display: none ;">
                        <h2 class="text-center pb-5">Access to university underrepresented groups recruit</h2>
                        <form action="insert/insertres10.8.3.php" method="post" name="form1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Title/Type of recruitment programs</span>
                            <input type="text" class="form-control" name="RPtitle"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Short description</span>
                            <input type="text" class="form-control" name="RPshortDesc"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total cost</span>
                            <input type="text" class="form-control" name="rpT_Cost"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Fund source</span>
                            <input type="text" class="form-control" name="rpFsource"
                                aria-describedby="basic-addon1" required>
                        </div>
                            <div class="d-grid">
                                <button type="submit" class="btn mb-3" style="background-color: #e01a83; color: white"
                                    name="submit">Submit</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 10.8.4-->
                    <div class="collapse w-100 h-auto" id="research1084" style="display: none ;">
                        <h2 class="text-center pb-5">Anti-Discrimination Policies</h2>
                        <form action="insert/insertres10.8.4.php" method="post" name="form1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Title of the PPA</span>
                            <input type="text" class="form-control" name="PPA1084title"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Short description of the PPA</span>
                            <input type="text" class="form-control" name="PPA1084shortDesc"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total cost</span>
                            <input type="text" class="form-control" name="ppa1084T_Cost"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Fund source</span>
                            <input type="text" class="form-control" name="ppa1084Fsource"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Evidence</span>
                            <input type="text" class="form-control" name="PPA1084evidence"
                                aria-describedby="basic-addon1" required>
                        </div>
                            <div class="d-grid">
                                <button type="submit" class="btn mb-3" style="background-color: #e01a83; color: white"
                                    name="submit">Submit</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 10.8.5-->
                    <div class="collapse w-100 h-auto" id="research1085" style="display: none ;">
                        <h2 class="text-center pb-5">Campus diversity officer</h2>
                        <form action="insert/insertres10.8.5.php" method="post" name="form1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Is there an existence of committee and/or offices</span>
                            <input type="text" class="form-control" name="comoffExist" id="comoffExist"
                                aria-describedby="basic-addon1" required>
                                <div class="d-flex my-2 mx-3">
                                    <input type="radio" id="yes" name="existence" value="Yes">
                                    <label for="yes">Yes</label>
                                </div>
                                <div class="d-flex my-2 mx-3">
                                    <input type="radio" id="no" name="existence" value="No">
                                    <label for="no">No</label>
                                </div>
                        </div>
                            <div class="d-grid">
                                <button type="submit" class="btn mb-3" style="background-color: #e01a83; color: white" name="submit">Submit</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 10.8.6-->
                    <div class="collapse w-100 h-auto" id="research1086" style="display: none ;">
                        <h2 class="text-center pb-5">Support for underrepresented groups (exclude PWDs)</h2>
                        <form action="insert/insertres10.8.6.php" method="post" name="form1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Title of the PPA</span>
                            <input type="text" class="form-control" name="PPA1086title"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Short description of the PPA</span>
                            <input type="text" class="form-control" name="PPA1086shortDesc"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total cost</span>
                            <input type="text" class="form-control" name="ppa1086T_Cost"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Fund source</span>
                            <input type="text" class="form-control" name="ppa1086Fsource"
                                aria-describedby="basic-addon1" required>
                        </div>
                            <div class="d-grid">
                                <button type="submit" class="btn mb-3" style="background-color: #e01a83; color: white"
                                    name="submit">Submit</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 10.8.7-->
                    <div class="collapse w-100 h-auto" id="research1087" style="display: none ;">
                        <h2 class="text-center pb-5">Accessible facilities</h2>
                        <form action="insert/insertres10.8.7.php" method="post" name="form1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total number of facilities available in the campus for PWDs</span>
                            <input type="text" class="form-control" name="PWDfacilityAvailable"
                                aria-describedby="basic-addon1" required>
                        </div>
                            <div class="d-grid">
                                <button type="submit" class="btn mb-3" style="background-color: #e01a83; color: white"
                                    name="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                    
                    <!--This div is for research 10.8.8-->
                    <div class="collapse w-100 h-auto" id="research1088" style="display: none ;">
                        <h2 class="text-center pb-5">Disability support services for students and employees</h2>
                        <form action="insert/insertres10.8.8.php" method="post" name="form1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Title/Type of support service</span>
                            <input type="text" class="form-control" name="SStitle"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Short description</span>
                            <input type="text" class="form-control" name="SSshortDesc"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total cost</span>
                            <input type="text" class="form-control" name="ssT_Cost"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Fund source</span>
                            <input type="text" class="form-control" name="ssFsource"
                                aria-describedby="basic-addon1" required>
                        </div>
                            <div class="d-grid">
                                <button type="submit" class="btn mb-3" style="background-color: #e01a83; color: white"
                                    name="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                    
                    <!--This div is for research 10.8.9-->
                    <div class="collapse w-100 h-auto" id="research1089" style="display: none ;">
                        <h2 class="text-center pb-5">Disability access scheme</h2>
                        <form action="insert/insertres10.8.9.php" method="post" name="form1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Title/Type of access scheme</span>
                            <input type="text" class="form-control" name="AStitle"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Short description</span>
                            <input type="text" class="form-control" name="ASshortDesc"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total cost</span>
                            <input type="text" class="form-control" name="asT_Cost"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Fund source</span>
                            <input type="text" class="form-control" name="asFsource"
                                aria-describedby="basic-addon1" required>
                        </div>
                            <div class="d-grid">
                                <button type="submit" class="btn mb-3" style="background-color: #e01a83; color: white"
                                    name="submit">Submit</button>
                            </div>
                        </form>
                    </div>


                    <!--This div is for research 10.8.10-->
                    <div class="collapse w-100 h-auto" id="research10810" style="display: none ;">
                        <h2 class="text-center pb-5">Disability accommodation policy</h2>
                        <form action="insert/insertres10.8.10.php" method="post" name="form1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Title of the PPA</span>
                            <input type="text" class="form-control" name="PPA10810title"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Short description of the PPA</span>
                            <input type="text" class="form-control" name="PPA10810shortDesc"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Total cost</span>
                            <input type="text" class="form-control" name="ppa10810T_Cost"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Fund source</span>
                            <input type="text" class="form-control" name="ppa10810Fsource"
                                aria-describedby="basic-addon1" required>
                        </div>
                            <div class="d-grid">
                                <button type="submit" class="btn mb-3" style="background-color: #e01a83; color: white"
                                    name="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    //For buttons
    var btn_res1011 = document.getElementById("res1011");
    var btn_res1031 = document.getElementById("res1031");
    var btn_res1032 = document.getElementById("res1032");
    var btn_res1041 = document.getElementById("res1041");
    var btn_res1042 = document.getElementById("res1042");
    var btn_res1051 = document.getElementById("res1051");
    var btn_res1052 = document.getElementById("res1052");
    var btn_res1061 = document.getElementById("res1061");
    var btn_res1062 = document.getElementById("res1062");
    var btn_res1071 = document.getElementById("res1071");
    var btn_res1072 = document.getElementById("res1072");
    var btn_res1081 = document.getElementById("res1081");
    var btn_res1082 = document.getElementById("res1082");
    var btn_res1083 = document.getElementById("res1083");
    var btn_res1084 = document.getElementById("res1084");
    var btn_res1085 = document.getElementById("res1085");
    var btn_res1086 = document.getElementById("res1086");
    var btn_res1087 = document.getElementById("res1087");
    var btn_res1088 = document.getElementById("res1088");
    var btn_res1089 = document.getElementById("res1089");
    var btn_res10810 = document.getElementById("res10810");

    //For divs
    var div_res1011 = document.getElementById("research1011");
    var div_res1031 = document.getElementById("research1031");
    var div_res1032 = document.getElementById("research1032");
    var div_res1041 = document.getElementById("research1041");
    var div_res1042 = document.getElementById("research1042");
    var div_res1051 = document.getElementById("research1051");
    var div_res1052 = document.getElementById("research1052");
    var div_res1061 = document.getElementById("research1061");
    var div_res1062 = document.getElementById("research1062");
    var div_res1071 = document.getElementById("research1071");
    var div_res1072 = document.getElementById("research1072");
    var div_res1081 = document.getElementById("research1081");
    var div_res1082 = document.getElementById("research1082");
    var div_res1083 = document.getElementById("research1083");
    var div_res1084 = document.getElementById("research1084");
    var div_res1085 = document.getElementById("research1085");
    var div_res1086 = document.getElementById("research1086");
    var div_res1087 = document.getElementById("research1087");
    var div_res1088 = document.getElementById("research1088");
    var div_res1089 = document.getElementById("research1089");
    var div_res10810 = document.getElementById("research10810");

    //For buttons to display or hide content
    //display research1011
    btn_res1011.addEventListener('click', () => {
        div_res1011.style.display = "block";
        div_res1031.style.display = "none";
        div_res1041.style.display = "none";
        div_res1042.style.display = "none";
        div_res1051.style.display = "none";
        div_res1052.style.display = "none";
        div_res1061.style.display = "none";
        div_res1062.style.display = "none";
        div_res1071.style.display = "none";
        div_res1072.style.display = "none";
        div_res1081.style.display = "none";
        div_res1082.style.display = "none";
        div_res1083.style.display = "none";
        div_res1084.style.display = "none";
        div_res1085.style.display = "none";
        div_res1086.style.display = "none";
        div_res1087.style.display = "none";
        div_res1088.style.display = "none";
        div_res1089.style.display = "none";
        div_res10810.style.display = "none";
    });

    //display research1031
    btn_res1031.addEventListener('click', () => {
        console.log("Button res1011 clicked");
        div_res1011.style.display = "none";
        div_res1031.style.display = "block";
        div_res1032.style.display = "none";
        div_res1041.style.display = "none";
        div_res1042.style.display = "none";
        div_res1051.style.display = "none";
        div_res1052.style.display = "none";
        div_res1061.style.display = "none";
        div_res1062.style.display = "none";
        div_res1071.style.display = "none";
        div_res1072.style.display = "none";
        div_res1081.style.display = "none";
        div_res1082.style.display = "none";
        div_res1083.style.display = "none";
        div_res1084.style.display = "none";
        div_res1085.style.display = "none";
        div_res1086.style.display = "none";
        div_res1087.style.display = "none";
        div_res1088.style.display = "none";
        div_res1089.style.display = "none";
        div_res10810.style.display = "none";
    });

    //display research1032
    btn_res1032.addEventListener('click', () => {
        div_res1011.style.display = "none";
        div_res1031.style.display = "none";
        div_res1032.style.display = "block";
        div_res1041.style.display = "none";
        div_res1042.style.display = "none";
        div_res1051.style.display = "none";
        div_res1052.style.display = "none";
        div_res1061.style.display = "none";
        div_res1062.style.display = "none";
        div_res1071.style.display = "none";
        div_res1072.style.display = "none";
        div_res1081.style.display = "none";
        div_res1082.style.display = "none";
        div_res1083.style.display = "none";
        div_res1084.style.display = "none";
        div_res1085.style.display = "none";
        div_res1086.style.display = "none";
        div_res1087.style.display = "none";
        div_res1088.style.display = "none";
        div_res1089.style.display = "none";
        div_res10810.style.display = "none";
    });

    //display research1041
    btn_res1041.addEventListener('click', () => {
        div_res1011.style.display = "none";
        div_res1031.style.display = "none";
        div_res1032.style.display = "none";
        div_res1041.style.display = "block";
        div_res1042.style.display = "none";
        div_res1051.style.display = "none";
        div_res1052.style.display = "none";
        div_res1061.style.display = "none";
        div_res1062.style.display = "none";
        div_res1071.style.display = "none";
        div_res1072.style.display = "none";
        div_res1081.style.display = "none";
        div_res1082.style.display = "none";
        div_res1083.style.display = "none";
        div_res1084.style.display = "none";
        div_res1085.style.display = "none";
        div_res1086.style.display = "none";
        div_res1087.style.display = "none";
        div_res1088.style.display = "none";
        div_res1089.style.display = "none";
        div_res10810.style.display = "none";
    });

    //display research1042
    btn_res1042.addEventListener('click', () => {
        div_res1011.style.display = "none";
        div_res1031.style.display = "none";
        div_res1032.style.display = "none";
        div_res1041.style.display = "none";
        div_res1042.style.display = "block";
        div_res1051.style.display = "none";
        div_res1052.style.display = "none";
        div_res1061.style.display = "none";
        div_res1062.style.display = "none";
        div_res1071.style.display = "none";
        div_res1072.style.display = "none";
        div_res1081.style.display = "none";
        div_res1082.style.display = "none";
        div_res1083.style.display = "none";
        div_res1084.style.display = "none";
        div_res1085.style.display = "none";
        div_res1086.style.display = "none";
        div_res1087.style.display = "none";
        div_res1088.style.display = "none";
        div_res1089.style.display = "none";
        div_res10810.style.display = "none";
    });

    //display research1051
    btn_res1051.addEventListener('click', () => {
        div_res1011.style.display = "none";
        div_res1031.style.display = "none";
        div_res1032.style.display = "none";
        div_res1041.style.display = "none";
        div_res1042.style.display = "none";
        div_res1051.style.display = "block";
        div_res1052.style.display = "none";
        div_res1061.style.display = "none";
        div_res1062.style.display = "none";
        div_res1071.style.display = "none";
        div_res1072.style.display = "none";
        div_res1081.style.display = "none";
        div_res1082.style.display = "none";
        div_res1083.style.display = "none";
        div_res1084.style.display = "none";
        div_res1085.style.display = "none";
        div_res1086.style.display = "none";
        div_res1087.style.display = "none";
        div_res1088.style.display = "none";
        div_res1089.style.display = "none";
        div_res10810.style.display = "none";
    });

    //display research1052
    btn_res1052.addEventListener('click', () => {
        div_res1011.style.display = "none";
        div_res1031.style.display = "none";
        div_res1032.style.display = "none";
        div_res1041.style.display = "none";
        div_res1042.style.display = "none";
        div_res1051.style.display = "none";
        div_res1052.style.display = "block";
        div_res1061.style.display = "none";
        div_res1062.style.display = "none";
        div_res1071.style.display = "none";
        div_res1072.style.display = "none";
        div_res1081.style.display = "none";
        div_res1082.style.display = "none";
        div_res1083.style.display = "none";
        div_res1084.style.display = "none";
        div_res1085.style.display = "none";
        div_res1086.style.display = "none";
        div_res1087.style.display = "none";
        div_res1088.style.display = "none";
        div_res1089.style.display = "none";
        div_res10810.style.display = "none";
    });

    //display research1061
    btn_res1061.addEventListener('click', () => {
        div_res1011.style.display = "none";
        div_res1031.style.display = "none";
        div_res1032.style.display = "none";
        div_res1041.style.display = "none";
        div_res1042.style.display = "none";
        div_res1051.style.display = "none";
        div_res1052.style.display = "none";
        div_res1061.style.display = "block";
        div_res1062.style.display = "none";
        div_res1071.style.display = "none";
        div_res1072.style.display = "none";
        div_res1081.style.display = "none";
        div_res1082.style.display = "none";
        div_res1083.style.display = "none";
        div_res1084.style.display = "none";
        div_res1085.style.display = "none";
        div_res1086.style.display = "none";
        div_res1087.style.display = "none";
        div_res1088.style.display = "none";
        div_res1089.style.display = "none";
        div_res10810.style.display = "none";
    });

    //display research1062
    btn_res1062.addEventListener('click', () => {
        div_res1011.style.display = "none";
        div_res1031.style.display = "none";
        div_res1032.style.display = "none";
        div_res1041.style.display = "none";
        div_res1042.style.display = "none";
        div_res1051.style.display = "none";
        div_res1052.style.display = "none";
        div_res1061.style.display = "none";
        div_res1062.style.display = "block";
        div_res1071.style.display = "none";
        div_res1072.style.display = "none";
        div_res1081.style.display = "none";
        div_res1082.style.display = "none";
        div_res1083.style.display = "none";
        div_res1084.style.display = "none";
        div_res1085.style.display = "none";
        div_res1086.style.display = "none";
        div_res1087.style.display = "none";
        div_res1088.style.display = "none";
        div_res1089.style.display = "none";
        div_res10810.style.display = "none";
    });

    //display research1071
    btn_res1071.addEventListener('click', () => {
        div_res1011.style.display = "none";
        div_res1031.style.display = "none";
        div_res1032.style.display = "none";
        div_res1041.style.display = "none";
        div_res1042.style.display = "none";
        div_res1051.style.display = "none";
        div_res1052.style.display = "none";
        div_res1061.style.display = "none";
        div_res1062.style.display = "none";
        div_res1071.style.display = "block";
        div_res1072.style.display = "none";
        div_res1081.style.display = "none";
        div_res1082.style.display = "none";
        div_res1083.style.display = "none";
        div_res1084.style.display = "none";
        div_res1085.style.display = "none";
        div_res1086.style.display = "none";
        div_res1087.style.display = "none";
        div_res1088.style.display = "none";
        div_res1089.style.display = "none";
        div_res10810.style.display = "none";
    });

    //display research1072
    btn_res1072.addEventListener('click', () => {
        div_res1011.style.display = "none";
        div_res1031.style.display = "none";
        div_res1032.style.display = "none";
        div_res1041.style.display = "none";
        div_res1042.style.display = "none";
        div_res1051.style.display = "none";
        div_res1052.style.display = "none";
        div_res1061.style.display = "none";
        div_res1062.style.display = "none";
        div_res1071.style.display = "none";
        div_res1072.style.display = "block";
        div_res1081.style.display = "none";
        div_res1082.style.display = "none";
        div_res1083.style.display = "none";
        div_res1084.style.display = "none";
        div_res1085.style.display = "none";
        div_res1086.style.display = "none";
        div_res1087.style.display = "none";
        div_res1088.style.display = "none";
        div_res1089.style.display = "none";
        div_res10810.style.display = "none";
    });

    //display research1081
    btn_res1081.addEventListener('click', () => {
        div_res1011.style.display = "none";
        div_res1031.style.display = "none";
        div_res1032.style.display = "none";
        div_res1041.style.display = "none";
        div_res1042.style.display = "none";
        div_res1051.style.display = "none";
        div_res1052.style.display = "none";
        div_res1061.style.display = "none";
        div_res1062.style.display = "none";
        div_res1071.style.display = "none";
        div_res1072.style.display = "none";
        div_res1081.style.display = "block";
        div_res1082.style.display = "none";
        div_res1083.style.display = "none";
        div_res1084.style.display = "none";
        div_res1085.style.display = "none";
        div_res1086.style.display = "none";
        div_res1087.style.display = "none";
        div_res1088.style.display = "none";
        div_res1089.style.display = "none";
        div_res10810.style.display = "none";
    });

    //display research1082
    btn_res1082.addEventListener('click', () => {
        div_res1011.style.display = "none";
        div_res1031.style.display = "none";
        div_res1032.style.display = "none";
        div_res1041.style.display = "none";
        div_res1042.style.display = "none";
        div_res1051.style.display = "none";
        div_res1052.style.display = "none";
        div_res1061.style.display = "none";
        div_res1062.style.display = "none";
        div_res1071.style.display = "none";
        div_res1072.style.display = "none";
        div_res1081.style.display = "none";
        div_res1082.style.display = "block";
        div_res1083.style.display = "none";
        div_res1084.style.display = "none";
        div_res1085.style.display = "none";
        div_res1086.style.display = "none";
        div_res1087.style.display = "none";
        div_res1088.style.display = "none";
        div_res1089.style.display = "none";
        div_res10810.style.display = "none";
    });

    //display research1083
    btn_res1083.addEventListener('click', () => {
        div_res1011.style.display = "none";
        div_res1031.style.display = "none";
        div_res1032.style.display = "none";
        div_res1041.style.display = "none";
        div_res1042.style.display = "none";
        div_res1051.style.display = "none";
        div_res1052.style.display = "none";
        div_res1061.style.display = "none";
        div_res1062.style.display = "none";
        div_res1071.style.display = "none";
        div_res1072.style.display = "none";
        div_res1081.style.display = "none";
        div_res1082.style.display = "none";
        div_res1083.style.display = "block";
        div_res1084.style.display = "none";
        div_res1085.style.display = "none";
        div_res1086.style.display = "none";
        div_res1087.style.display = "none";
        div_res1088.style.display = "none";
        div_res1089.style.display = "none";
        div_res10810.style.display = "none";
    });

    //display research1084
    btn_res1084.addEventListener('click', () => {
        div_res1011.style.display = "none";
        div_res1031.style.display = "none";
        div_res1032.style.display = "none";
        div_res1041.style.display = "none";
        div_res1042.style.display = "none";
        div_res1051.style.display = "none";
        div_res1052.style.display = "none";
        div_res1061.style.display = "none";
        div_res1062.style.display = "none";
        div_res1071.style.display = "none";
        div_res1072.style.display = "none";
        div_res1081.style.display = "none";
        div_res1082.style.display = "none";
        div_res1083.style.display = "none";
        div_res1084.style.display = "block";
        div_res1085.style.display = "none";
        div_res1086.style.display = "none";
        div_res1087.style.display = "none";
        div_res1088.style.display = "none";
        div_res1089.style.display = "none";
        div_res10810.style.display = "none";
    });
    
    //display research1085
    btn_res1085.addEventListener('click', () => {
        div_res1011.style.display = "none";
        div_res1031.style.display = "none";
        div_res1032.style.display = "none";
        div_res1041.style.display = "none";
        div_res1042.style.display = "none";
        div_res1051.style.display = "none";
        div_res1052.style.display = "none";
        div_res1061.style.display = "none";
        div_res1062.style.display = "none";
        div_res1071.style.display = "none";
        div_res1072.style.display = "none";
        div_res1081.style.display = "none";
        div_res1082.style.display = "none";
        div_res1083.style.display = "none";
        div_res1084.style.display = "none";
        div_res1085.style.display = "block";
        div_res1086.style.display = "none";
        div_res1087.style.display = "none";
        div_res1088.style.display = "none";
        div_res1089.style.display = "none";
        div_res10810.style.display = "none";
    });
    
    //display research1086
    btn_res1086.addEventListener('click', () => {
        div_res1011.style.display = "none";
        div_res1031.style.display = "none";
        div_res1032.style.display = "none";
        div_res1041.style.display = "none";
        div_res1042.style.display = "none";
        div_res1051.style.display = "none";
        div_res1052.style.display = "none";
        div_res1061.style.display = "none";
        div_res1062.style.display = "none";
        div_res1071.style.display = "none";
        div_res1072.style.display = "none";
        div_res1081.style.display = "none";
        div_res1082.style.display = "none";
        div_res1083.style.display = "none";
        div_res1084.style.display = "none";
        div_res1085.style.display = "none";
        div_res1086.style.display = "block";
        div_res1087.style.display = "none";
        div_res1088.style.display = "none";
        div_res1089.style.display = "none";
        div_res10810.style.display = "none";
    });
    
    //display research1087
    btn_res1087.addEventListener('click', () => {
        div_res1011.style.display = "none";
        div_res1031.style.display = "none";
        div_res1032.style.display = "none";
        div_res1041.style.display = "none";
        div_res1042.style.display = "none";
        div_res1051.style.display = "none";
        div_res1052.style.display = "none";
        div_res1061.style.display = "none";
        div_res1062.style.display = "none";
        div_res1071.style.display = "none";
        div_res1072.style.display = "none";
        div_res1081.style.display = "none";
        div_res1082.style.display = "none";
        div_res1083.style.display = "none";
        div_res1084.style.display = "none";
        div_res1085.style.display = "none";
        div_res1086.style.display = "none";
        div_res1087.style.display = "block";
        div_res1088.style.display = "none";
        div_res1089.style.display = "none";
        div_res10810.style.display = "none";
    });
    
    //display research1088
    btn_res1088.addEventListener('click', () => {
        div_res1011.style.display = "none";
        div_res1031.style.display = "none";
        div_res1032.style.display = "none";
        div_res1041.style.display = "none";
        div_res1042.style.display = "none";
        div_res1051.style.display = "none";
        div_res1052.style.display = "none";
        div_res1061.style.display = "none";
        div_res1062.style.display = "none";
        div_res1071.style.display = "none";
        div_res1072.style.display = "none";
        div_res1081.style.display = "none";
        div_res1082.style.display = "none";
        div_res1083.style.display = "none";
        div_res1084.style.display = "none";
        div_res1085.style.display = "none";
        div_res1086.style.display = "none";
        div_res1087.style.display = "none";
        div_res1088.style.display = "block";
        div_res1089.style.display = "none";
        div_res10810.style.display = "none";
    });
    
    //display research1089
    btn_res1089.addEventListener('click', () => {
        div_res1011.style.display = "none";
        div_res1031.style.display = "none";
        div_res1032.style.display = "none";
        div_res1041.style.display = "none";
        div_res1042.style.display = "none";
        div_res1051.style.display = "none";
        div_res1052.style.display = "none";
        div_res1061.style.display = "none";
        div_res1062.style.display = "none";
        div_res1071.style.display = "none";
        div_res1072.style.display = "none";
        div_res1081.style.display = "none";
        div_res1082.style.display = "none";
        div_res1083.style.display = "none";
        div_res1084.style.display = "none";
        div_res1085.style.display = "none";
        div_res1086.style.display = "none";
        div_res1087.style.display = "none";
        div_res1088.style.display = "none";
        div_res1089.style.display = "block";
        div_res10810.style.display = "none";
    });
    
    //display research10810
    btn_res10810.addEventListener('click', () => {
        div_res1011.style.display = "none";
        div_res1031.style.display = "none";
        div_res1032.style.display = "none";
        div_res1041.style.display = "none";
        div_res1042.style.display = "none";
        div_res1051.style.display = "none";
        div_res1052.style.display = "none";
        div_res1061.style.display = "none";
        div_res1062.style.display = "none";
        div_res1071.style.display = "none";
        div_res1072.style.display = "none";
        div_res1081.style.display = "none";
        div_res1082.style.display = "none";
        div_res1083.style.display = "none";
        div_res1084.style.display = "none";
        div_res1085.style.display = "none";
        div_res1086.style.display = "none";
        div_res1087.style.display = "none";
        div_res1088.style.display = "none";
        div_res1089.style.display = "none";
        div_res10810.style.display = "block";
    });

    onclick = function () {
        insertMessage.style.display = "none";
        window.location.href = "formsdg10.php";
    };

    yes.onclick = function () {
        document.getElementById('comoffExist').value = "";
        document.getElementById('comoffExist').value = "Yes";
    };

    no.onclick = function () {
        document.getElementById('comoffExist').value = "";
        document.getElementById('comoffExist').value = "No";
    };
</script>