<?php
include('../../includes/header.php');
include("../../includes/db.php");
?>
<?php if (isset($_GET['message'])) { ?>
    <div class="message-container bg-success bg-gradient p-4">
        <a class="text-dark float-end text-uppercase text-decoration-none fs-3" href="#" id="closeBtn">&times;</a>
        <p class="text-center text-light p-2">
            <?php echo $_GET['message']; ?>
        </p>
    </div>
<?php } ?>
<div class="container">
    <div class="row-mt-5">
        <?php
        include '../../includes/updatesdgdd/ddsdg3.php';
        ?>

        <!--res 3.1.1-->
        <div class=" w-100 h-auto mt-3" id="research311" style="display: block ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Year Publication</th>
                        <th scope="col">Number of Clinical Citations</th>
                        <th scope="col">Total number of citations</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research3.1.1`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id_res311 = $row['ID'];
                            $title = $row['title'];
                            $author = $row['author'];
                            $yearPub = $row['yearPub'];
                            $no_clinical = $row['no_clinical'];
                            $no_citations = $row['no_citation'];
                    ?>
                            <tr>
                                <td class="text-center">
                                    <a href="../../admin/sdg3/delete/delete311.php?delete=<?php echo $id_res311 ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                                </td>
                                <td class="text-center">
                                    <a href="../../admin/sdg3/update/update311.php?update=<?php echo $id_res311 ?>" class="btn btn-success">Update</a>
                                </td>
                                <td class="text-center"><?php echo $title ?></td>
                                <td class="text-center"><?php echo $author ?></td>
                                <td class="text-center"><?php echo $yearPub ?></td>
                                <td class="text-center"><?php echo $no_clinical ?></td>
                                <td class="text-center"><?php echo $no_citations ?></td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--res 3.2.1-->
        <div class=" w-100 h-auto mt-3" id="research321" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Name of health institution</th>
                        <th scope="col">Categorized as local, national, global</th>
                        <th scope="col">Number of years in collaboration</th>
                        <th scope="col">Title and description of collab project</th>
                        <th scope="col">Total cost</th>
                        <th scope="col">Fund source</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research3.2.1`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id_res321 = $row['ID'];
                            $name_health_institute = $row['name_health_institute'];
                            $categ = $row['categ'];
                            $no_year_collab = $row['no_year_collab'];
                            $title_project = $row['title_project'];
                            $cost = $row['cost'];
                            $fund = $row['fund'];


                    ?>
                            <tr>
                                <td class="text-center">
                                    <a href="../../admin/sdg3/delete/delete311.php?delete=<?php echo $id_res321 ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                                </td>
                                <td class="text-center">
                                    <a href="../../admin/sdg3/update/update321.php?update=<?php echo $id_res321 ?>" class="btn btn-success">Update</a>
                                </td>
                                <td class="text-center"><?php echo $name_health_institute ?></td>
                                <td class="text-center"><?php echo $categ ?></td>
                                <td class="text-center"><?php echo $no_year_collab ?></td>
                                <td class="text-center"><?php echo $title_project ?></td>
                                <td class="text-center"><?php echo $cost ?></td>
                                <td class="text-center"><?php echo $fund ?></td>

                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--res 3.2.2-->
        <div class=" w-100 h-auto mt-3" id="research322" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Title of the PPA</th>
                        <th scope="col">Short description of the PPA</th>
                        <th scope="col">Total cost</th>
                        <th scope="col">Fund source</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research3.2.2`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id_res322 = $row['ID'];
                            $title = $row['title'];
                            $description = $row['description'];
                            $total = $row['total'];
                            $fund = $row['fund'];

                    ?>
                            <tr>
                                <td class="text-center">
                                    <a href="../../admin/sdg3/delete/delete311.php?delete=<?php echo $id_res322 ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                                </td>
                                <td class="text-center">
                                    <a href="../../admin/sdg3/update/update322.php?update=<?php echo $id_res322 ?>" class="btn btn-success">Update</a>
                                </td>
                                <td class="text-center"><?php echo $title ?></td>
                                <td class="text-center"><?php echo $description ?></td>
                                <td class="text-center"><?php echo $total ?></td>
                                <td class="text-center"><?php echo $fund ?></td>

                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--res 3.2.3-->
        <div class=" w-100 h-auto mt-3" id="research323" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Does your campus share sports facilities to the general public?</th>
                        <th scope="col">Total number of approved requests from the community on the use of sport
                            facilities</th>
                        <th scope="col">Facility type</th>
                        <th scope="col">Level of Community</th>
                        <th scope="col">Title of Event/Type of Event</th>
                        <th scope="col">No. of hours</th>
                        <th scope="col">Total number of guests benefited from free access</th>
                        <th scope="col">Total amount generated from paid access to sport facilities</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research3.2.3`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id_res323 = $row['ID'];
                            $respond = $row['respond'];
                            $no_approved = $row['no_approved'];
                            $facility = $row['facility'];
                            $lvlofCommunity = $row['lvlofCommunity'];
                            $titleEvent = $row['titleEvent'];
                            $noHours = $row['noHours'];
                            $noGuest = $row['noGuest'];
                            $amountFromPaid = $row['amountFromPaid'];

                    ?>
                            <tr>
                                <td class="text-center">

                                    <a href="../../admin/sdg3/delete/delete311.php?delete=<?php echo $id_res323 ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                                </td>
                                <td class="text-center">
                                    <a href="../../admin/sdg3/update/update323.php?update=<?php echo $id_res323 ?>" class="btn btn-success">Update</a>
                                </td>
                                <td class="text-center"><?php echo $respond ?></td>
                                <td class="text-center"><?php echo $no_approved ?></td>
                                <td class="text-center"><?php echo $facility ?></td>
                                <td class="text-center"><?php echo $lvlofCommunity ?></td>
                                <td class="text-center"><?php echo $titleEvent ?></td>
                                <td class="text-center"><?php echo $noHours ?></td>
                                <td class="text-center"><?php echo $noGuest ?></td>
                                <td class="text-center"><?php echo $amountFromPaid ?></td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--res 3.2.4-->
        <div class=" w-100 h-auto mt-3" id="research324" style="display: none; overflow-x: auto;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of students that are sexually active</th>
                        <th scope="col">Total number of pregnant students</th>
                        <th scope="col">Total number of students have already given birth</th>
                        <th scope="col">Total number of students with pregnancy loss</th>
                        <th scope="col">Total number of students who have impregnated someone</th>
                        <th scope="col">Total number of students that has been tested for HIV/AIDS</th>
                        <th scope="col">Percent of the student’s population is sexually active</th>
                        <th scope="col">Percent of the female student’s population is currently pregnant</th>
                        <th scope="col">Percent of the female student’s population have already given birth</th>
                        <th scope="col">Percent of the female student’s population have experienced pregnancy loss</th>
                        <th scope="col">Percent of the male student’s population have impregnated someone</th>
                        <th scope="col">Percent of the male/female student’s population have been tested for HIV/AIDS
                        </th>
                        <th scope="col">Total number of sexual and reproductive health-care services for students</th>
                        <th scope="col">Title of the PPA</th>
                        <th scope="col">Short description of the PPA</th>
                        <th scope="col">Total cost</th>
                        <th scope="col">Fund source</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research3.2.4`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id_res324 = $row['ID'];
                            $sexActive = $row['sexActive'];
                            $pregnant = $row['pregnant'];
                            $haveBirth = $row['haveBirth'];
                            $pregnantLoss = $row['pregnantLoss'];
                            $impregnated = $row['impregnated'];
                            $testHIV = $row['testHIV'];
                            $percentSexActive = $row['percentSexActive'];
                            $percentfPregnant = $row['percentfPregnant'];
                            $percentfBirth = $row['percentfBirth'];
                            $percentfPregLoss = $row['percentfPregLoss'];
                            $percentmImpreg = $row['percentmImpreg'];
                            $percenttestHIV = $row['percenttestHIV'];
                            $nohealthcare = $row['nohealthcare'];
                            $title = $row['title'];
                            $description = $row['description'];
                            $total = $row['total'];
                            $fund = $row['fund'];

                    ?>
                            <tr>
                                <td class="text-center">
                                    <a href="../../admin/sdg3/delete/delete311.php?delete=<?php echo $id_res324 ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                                </td>
                                <td class="text-center">
                                    <a href="../../admin/sdg3/update/update324.php?update=<?php echo $id_res324 ?>" class="btn btn-success">Update</a>
                                </td>
                                <td class="text-center"><?php echo $sexActive ?></td>
                                <td class="text-center"><?php echo $pregnant ?></td>
                                <td class="text-center"><?php echo $haveBirth ?></td>
                                <td class="text-center"><?php echo $pregnantLoss ?></td>
                                <td class="text-center"><?php echo $impregnated ?></td>
                                <td class="text-center"><?php echo $testHIV ?></td>
                                <td class="text-center"><?php echo $percentSexActive ?></td>
                                <td class="text-center"><?php echo $percentfPregnant ?></td>
                                <td class="text-center"><?php echo $percentfBirth ?></td>
                                <td class="text-center"><?php echo $percentfPregLoss ?></td>
                                <td class="text-center"><?php echo $percentmImpreg ?></td>
                                <td class="text-center"><?php echo $percenttestHIV ?></td>
                                <td class="text-center"><?php echo $nohealthcare ?></td>
                                <td class="text-center"><?php echo $title ?></td>
                                <td class="text-center"><?php echo $description ?></td>
                                <td class="text-center"><?php echo $total ?></td>
                                <td class="text-center"><?php echo $fund ?></td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--res 3.2.5-->
        <div class=" w-100 h-auto mt-3" id="research325" style="display: none; overflow-x: auto;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of employees that are sexually active</th>
                        <th scope="col">Total number of pregnant employees</th>
                        <th scope="col">Total number of employees have already given birth</th>
                        <th scope="col">Total number of employees with pregnancy loss</th>
                        <th scope="col">Total number of employees who have impregnated someone</th>
                        <th scope="col">Total number of employees that has been tested for HIV/AIDS</th>
                        <th scope="col">Percent of the employee's population is sexually active</th>
                        <th scope="col">Percent of the female employee's population is currently pregnant</th>
                        <th scope="col">Percent of the female employee's population have already given birth</th>
                        <th scope="col">Percent of the female employee's population have experienced pregnancy loss</th>
                        <th scope="col">Percent of the male employee's population have impregnated someone</th>
                        <th scope="col">Percent of the male/female employee's population have been tested for HIV/AIDS
                        </th>
                        <th scope="col">Total number of sexual and reproductive health-care services for employees</th>
                        <th scope="col">Title of the PPA</th>
                        <th scope="col">Short description of the PPA</th>
                        <th scope="col">Total cost</th>
                        <th scope="col">Fund source</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research3.2.5`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id_res325 = $row['ID'];
                            $sexActive = $row['sexActive'];
                            $pregnant = $row['pregnant'];
                            $haveBirth = $row['haveBirth'];
                            $pregnantLoss = $row['pregnantLoss'];
                            $impregnated = $row['impregnated'];
                            $testHIV = $row['testHIV'];
                            $percentSexActive = $row['percentSexActive'];
                            $percentfPregnant = $row['percentfPregnant'];
                            $percentfBirth = $row['percentfBirth'];
                            $percentfPregLoss = $row['percentfPregLoss'];
                            $percentmImpreg = $row['percentmImpreg'];
                            $percenttestHIV = $row['percenttestHIV'];
                            $nohealthcare = $row['nohealthcare'];
                            $title = $row['title'];
                            $description = $row['description'];
                            $total = $row['total'];
                            $fund = $row['fund'];

                    ?>
                            <tr>
                                <td class="text-center">
                                    <a href="../../admin/sdg3/delete/delete311.php?delete=<?php echo $id_res325 ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                                </td>
                                <td class="text-center">
                                    <a href="../../admin/sdg3/update/update325.php?update=<?php echo $id_res325 ?>" class="btn btn-success">Update</a>
                                </td>
                                <td class="text-center"><?php echo $sexActive ?></td>
                                <td class="text-center"><?php echo $pregnant ?></td>
                                <td class="text-center"><?php echo $haveBirth ?></td>
                                <td class="text-center"><?php echo $pregnantLoss ?></td>
                                <td class="text-center"><?php echo $impregnated ?></td>
                                <td class="text-center"><?php echo $testHIV ?></td>
                                <td class="text-center"><?php echo $percentSexActive ?></td>
                                <td class="text-center"><?php echo $percentfPregnant ?></td>
                                <td class="text-center"><?php echo $percentfBirth ?></td>
                                <td class="text-center"><?php echo $percentfPregLoss ?></td>
                                <td class="text-center"><?php echo $percentmImpreg ?></td>
                                <td class="text-center"><?php echo $percenttestHIV ?></td>
                                <td class="text-center"><?php echo $nohealthcare ?></td>
                                <td class="text-center"><?php echo $title ?></td>
                                <td class="text-center"><?php echo $description ?></td>
                                <td class="text-center"><?php echo $total ?></td>
                                <td class="text-center"><?php echo $fund ?></td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--res 3.2.6-->
        <div class=" w-100 h-auto mt-3" id="research326" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of students with psychiatric disorder</th>
                        <th scope="col">Total number of employees with psychiatric disorder</th>
                        <th scope="col">Total number of mental health support for students and employees</th>
                        <th scope="col">Title of the PPA</th>
                        <th scope="col">Short description of the PPA</th>
                        <th scope="col">Total cost</th>
                        <th scope="col">Fund source</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research3.2.6`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id_res326 = $row['ID'];
                            $no_psydis = $row['no_psydis'];
                            $no_emp_psydis = $row['no_emp_psydis'];
                            $no_mentalh = $row['no_mentalh'];
                            $title = $row['title'];
                            $description = $row['description'];
                            $total = $row['total'];
                            $fund = $row['fund'];

                    ?>
                            <tr>
                                <td class="text-center">

                                    <a href="../../admin/sdg3/delete/delete311.php?delete=<?php echo $id_res326 ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                                </td>
                                <td class="text-center">
                                    <a href="../../admin/sdg3/update/update326.php?update=<?php echo $id_res326 ?>" class="btn btn-success">Update</a>
                                </td>
                                <td class="text-center"><?php echo $no_psydis ?></td>
                                <td class="text-center"><?php echo $no_emp_psydis ?></td>
                                <td class="text-center"><?php echo $no_mentalh ?></td>
                                <td class="text-center"><?php echo $title ?></td>
                                <td class="text-center"><?php echo $description ?></td>
                                <td class="text-center"><?php echo $total ?></td>
                                <td class="text-center"><?php echo $fund ?></td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--res 3.2.7-->
        <div class=" w-100 h-auto mt-3" id="research327" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total Number of policy</th>
                        <th scope="col">Total number of PPAs implemented in accordance to the policy</th>
                        <th scope="col">Title of the PPA</th>
                        <th scope="col">Short description of the PPA</th>
                        <th scope="col">Total cost</th>
                        <th scope="col">Fund source</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research3.2.7`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id_res327 = $row['ID'];
                            $no_policy = $row['no_policy'];
                            $no_PPAs = $row['no_PPAs'];
                            $title = $row['title'];
                            $description = $row['description'];
                            $total = $row['total'];
                            $fund = $row['fund'];

                    ?>
                            <tr>
                                <td class="text-center">

                                    <a href="../../admin/sdg3/delete/delete327.php?delete=<?php echo $id_res327 ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                                </td>
                                <td class="text-center">
                                    <a href="../../admin/sdg3/update/update327.php?update=<?php echo $id_res327 ?>" class="btn btn-success">Update</a>
                                </td>
                                <td class="text-center"><?php echo $no_policy ?></td>
                                <td class="text-center"><?php echo $no_PPAs ?></td>
                                <td class="text-center"><?php echo $title ?></td>
                                <td class="text-center"><?php echo $description ?></td>
                                <td class="text-center"><?php echo $total ?></td>
                                <td class="text-center"><?php echo $fund ?></td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    var btn_res311 = document.getElementById("res311");
    var btn_res321 = document.getElementById("res321");
    var btn_res322 = document.getElementById("res322");
    var btn_res323 = document.getElementById("res323");
    var btn_res324 = document.getElementById("res324");
    var btn_res325 = document.getElementById("res325");
    var btn_res326 = document.getElementById("res326");
    var btn_res327 = document.getElementById("res327");
    var div_res311 = document.getElementById("research311");
    var div_res321 = document.getElementById("research321");
    var div_res322 = document.getElementById("research322");
    var div_res323 = document.getElementById("research323");
    var div_res324 = document.getElementById("research324");
    var div_res325 = document.getElementById("research325");
    var div_res326 = document.getElementById("research326");
    var div_res327 = document.getElementById("research327");

    btn_res311.addEventListener('click', () => {
        div_res311.style.display = "block";
        div_res321.style.display = "none";
        div_res322.style.display = "none";
        div_res323.style.display = "none";
        div_res324.style.display = "none";
        div_res325.style.display = "none";
        div_res326.style.display = "none";
        div_res327.style.display = "none";
    });
    btn_res321.addEventListener('click', () => {
        div_res321.style.display = "block";
        div_res311.style.display = "none";
        div_res322.style.display = "none";
        div_res323.style.display = "none";
        div_res324.style.display = "none";
        div_res325.style.display = "none";
        div_res326.style.display = "none";
        div_res327.style.display = "none";
    });
    btn_res322.addEventListener('click', () => {
        div_res321.style.display = "none";
        div_res311.style.display = "none";
        div_res322.style.display = "block";
        div_res323.style.display = "none";
        div_res324.style.display = "none";
        div_res325.style.display = "none";
        div_res326.style.display = "none";
        div_res327.style.display = "none";
    });
    btn_res323.addEventListener('click', () => {
        div_res321.style.display = "none";
        div_res311.style.display = "none";
        div_res322.style.display = "none";
        div_res323.style.display = "block";
        div_res324.style.display = "none";
        div_res325.style.display = "none";
        div_res326.style.display = "none";
        div_res327.style.display = "none";
    });
    btn_res324.addEventListener('click', () => {
        div_res321.style.display = "none";
        div_res311.style.display = "none";
        div_res322.style.display = "none";
        div_res323.style.display = "none";
        div_res324.style.display = "block";
        div_res325.style.display = "none";
        div_res326.style.display = "none";
        div_res327.style.display = "none";
    });
    btn_res325.addEventListener('click', () => {
        div_res321.style.display = "none";
        div_res311.style.display = "none";
        div_res322.style.display = "none";
        div_res323.style.display = "none";
        div_res324.style.display = "none";
        div_res325.style.display = "block";
        div_res326.style.display = "none";
        div_res327.style.display = "none";
    });
    btn_res326.addEventListener('click', () => {
        div_res321.style.display = "none";
        div_res311.style.display = "none";
        div_res322.style.display = "none";
        div_res323.style.display = "none";
        div_res324.style.display = "none";
        div_res325.style.display = "none";
        div_res326.style.display = "block";
        div_res327.style.display = "none";
    });
    btn_res327.addEventListener('click', () => {
        div_res321.style.display = "none";
        div_res311.style.display = "none";
        div_res322.style.display = "none";
        div_res323.style.display = "none";
        div_res324.style.display = "none";
        div_res325.style.display = "none";
        div_res326.style.display = "none";
        div_res327.style.display = "block";
    });
    document.addEventListener("DOMContentLoaded", function() {
        var closeBtn = document.getElementById("closeBtn");

        if (closeBtn) {
            closeBtn.addEventListener("click", function(event) {
                event.preventDefault();
                var messageContainer = document.querySelector(".message-container");
                messageContainer.style.display = "none";
                window.location.href = "up_delsdg3.php";
            });
        }
    });
</script>