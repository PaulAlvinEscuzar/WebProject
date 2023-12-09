<?php
include('../../includes/adminHead/header15.php');
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
        include '../../includes/updatesdgdd/ddsdg15.php';
        ?>

        <!--res 15.1.1-->
        <div class=" w-100 h-auto mt-3" id="research1511" style="display: block ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of research on land ecosystems</th>
                        <th scope="col">Title of research</th>
                        <th scope="col">Author/s</th>
                        <th scope="col">Year of publication</th>
                        <th scope="col">Total number of citations</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql1511 = "SELECT * FROM `research15.1.1`";
                    $select1511 = mysqli_query($conn, $sql1511);

                    if (mysqli_num_rows($select1511) > 0) {
                        while ($row = mysqli_fetch_assoc($select1511)) {
                            $id_res1511 = $row['ID'];
                            $no_reslandeco = $row['no_reslandeco'];
                            $title = $row['title'];
                            $author = $row['author'];
                            $year_pub = $row['year_pub'];
                            $no_citations = $row['no_citations'];
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg15/delete/delete1511.php?delete=<?php echo $id_res1511 ?>"
                                class="btn btn-danger"
                                onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg15/update/update1511.php?update=<?php echo $id_res1511 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $no_reslandeco ?></td>
                        <td class="text-center"><?php echo $title ?></td>
                        <td class="text-center"><?php echo $author ?></td>
                        <td class="text-center"><?php echo $year_pub ?></td>
                        <td class="text-center"><?php echo $no_citations ?></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--res 15.2.1.1-->
        <div class=" w-100 h-auto mt-3" id="research1521" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of students with available space at home for gardening:</th>
                        <th scope="col">Male</th>
                        <th scope="col">Female</th>
                        <th scope="col">Total number of students with available space at home for vertical gardening:</th>
                        <th scope="col">Male</th>
                        <th scope="col">Female</th>
                        <th scope="col">Percent of the student population has available space at home for gardening.</th>
                        <th scope="col">Percent of the student population has available space at home for vertical gardening.</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql1521 = "SELECT * FROM `research15.2.1`";
                    $select1521 = mysqli_query($conn, $sql1521);

                    if (mysqli_num_rows($select1521) > 0) {
                        while ($row = mysqli_fetch_assoc($select1521)) {
                            $id_res1521 = $row['ID'];
                            $no_gardening = $row['no_gardening'];
                            $gardeningmale = $row['gardeningmale'];
                            $gardeningfemale = $row['gardeningfemale'];
                            $no_vertical = $row['no_vertical'];
                            $verticalmale = $row['verticalmale'];
                            $verticalfemale = $row['verticalfemale'];
                            $percent_gardening = $row['percent_gardening'];
                            $percent_vertical = $row['percent_vertical'];


                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg15/delete/delete1521.php?delete=<?php echo $id_res1521 ?>" class="btn btn-danger">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg15/update/update1521.php?update=<?php echo $id_res1521 ?>" class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $no_gardening ?></td>
                        <td class="text-center"><?php echo $gardeningmale ?></td>
                        <td class="text-center"><?php echo $gardeningfemale ?></td>
                        <td class="text-center"><?php echo $no_vertical ?></td>
                        <td class="text-center"><?php echo $verticalmale ?></td>
                        <td class="text-center"><?php echo $verticalfemale ?></td>
                        <td class="text-center"><?php echo $percent_gardening ?></td>
                        <td class="text-center"><?php echo $percent_vertical ?></td>

                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--res 15.2.1.2-->
        <div class=" w-100 h-auto mt-3" id="research15212" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of employees with available space at home for gardening:</th>
                        <th scope="col">Male</th>
                        <th scope="col">Female</th>
                        <th scope="col">Total number of employees with available space at home for vertical gardening:</th>
                        <th scope="col">Male</th>
                        <th scope="col">Female</th>
                        <th scope="col">Percent of the employee population has available space at home for gardening.</th>
                        <th scope="col">Percent of the employee population has available space at home forvertical gardening.</th>
                        <th scope="col">Total number of sustainable land practices implemented:</th>
                        <th scope="col">Title of the PPA:</th>
                        <th scope="col">Short Description:</th>
                        <th scope="col">Total Cost:</th>
                        <th scope="col">Fund Source:</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql15212 = "SELECT * FROM `research15.2.1.2`";
                    $select15212 = mysqli_query($conn, $sql15212);

                    if (mysqli_num_rows($select15212) > 0) {
                        while ($row = mysqli_fetch_assoc($select15212)) {
                            $id_res15212 = $row['ID'];
                            $employees_gardening = $row['employees_gardening'];
                            $employeegmale = $row['employeegmale'];
                            $employeegfemale = $row['employeegfemale'];
                            $employee_vertical = $row['employee_vertical'];
                            $employeevmale = $row['employeevmale'];
                            $employeevfemale = $row['employeevfemale'];
                            $percente_gardening = $row['percente_gardening'];
                            $percentv_vertical = $row['percentv_vertical'];
                            $no_susland = $row['no_susland'];
                            $ppa = $row['ppa'];
                            $shortd = $row['shortd'];
                            $totalc = $row['totalc'];
                            $FundSource = $row['FundSource'];


                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg15/delete/delete15212.php?delete=<?php echo $id_res15212 ?>" class="btn btn-danger">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg15/update/update15212.php?update=<?php echo $id_res15212 ?>" class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $employees_gardening ?></td>
                        <td class="text-center"><?php echo $employeegmale ?></td>
                        <td class="text-center"><?php echo $employeegfemale ?></td>
                        <td class="text-center"><?php echo $employee_vertical ?></td>
                        <td class="text-center"><?php echo $employeevmale ?></td>
                        <td class="text-center"><?php echo $employeevfemale?></td>
                        <td class="text-center"><?php echo $percente_gardening ?></td>
                        <td class="text-center"><?php echo $percentv_vertical ?></td>
                        <td class="text-center"><?php echo $no_susland ?></td>
                        <td class="text-center"><?php echo $ppa ?></td>
                        <td class="text-center"><?php echo $shortd ?></td>
                        <td class="text-center"><?php echo $totalc ?></td>
                        <td class="text-center"><?php echo $FundSource ?></td>

                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--res 15.3.1-->
        <div class=" w-100 h-auto mt-3" id="research1531" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of endangered flora/fauna in the campus:</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql1531 = "SELECT * FROM `research15.3.1`";
                    $select1531 = mysqli_query($conn, $sql1531);

                    if (mysqli_num_rows($select1531) > 0) {
                        while ($row = mysqli_fetch_assoc($select1531)) {
                            $id_res1531 = $row['ID'];
                            $totalend = $row['totalend'];


                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg15/delete/delete1531.php?delete=<?php echo $id_res1531 ?>" class="btn btn-danger">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg15/update/update1531.php?update=<?php echo $id_res1531 ?>" class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $totalend ?></td>

                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--res 15.3.2-->
        <div class=" w-100 h-auto mt-3" id="research1532" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of conservation measures for endangered species:</th>
                        <th scope="col">Title of PPA:</th>
                        <th scope="col">Short description:</th>
                        <th scope="col">Total cost:</th>
                        <th scope="col">Fund source:</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql1532 = "SELECT * FROM `research15.3.2`";
                    $select1532 = mysqli_query($conn, $sql1532);

                    if (mysqli_num_rows($select1532) > 0) {
                        while ($row = mysqli_fetch_assoc($select1532)) {
                            $id_res1532 = $row['ID'];
                            $totalspecies = $row['totalspecies'];
                            $titleppa = $row['titleppa'];
                            $shortdes = $row['shortdes'];
                            $tcost = $row['tcost'];
                            $fsource = $row['fsource'];


                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg15/delete/delete1532.php?delete=<?php echo $id_res1532 ?>" class="btn btn-danger">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg15/update/update1532.php?update=<?php echo $id_res1532 ?>" class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $totalspecies ?></td>
                        <td class="text-center"><?php echo $titleppa ?></td>
                        <td class="text-center"><?php echo $shortdes ?></td>
                        <td class="text-center"><?php echo $tcost ?></td>
                        <td class="text-center"><?php echo $fsource ?></td>

                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--res 15.4.1-->
        <div class=" w-100 h-auto mt-3" id="research1541" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of events organized/supported by the campus:</th>
                        <th scope="col">Title of PPA:</th>
                        <th scope="col">Short description of the PPA:</th>
                        <th scope="col">Total cost:</th>
                        <th scope="col">Fund source:</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql1541 = "SELECT * FROM `research15.4.1`";
                    $select1541 = mysqli_query($conn, $sql1541);

                    if (mysqli_num_rows($select1541) > 0) {
                        while ($row = mysqli_fetch_assoc($select1541)) {
                            $id_res1541 = $row['ID'];
                            $totalcampus = $row['totalcampus'];
                            $tppa = $row['tppa'];
                            $shortds = $row['shortds'];
                            $totcost = $row['totcost'];
                            $funds = $row['funds'];


                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg15/delete/delete1541.php?delete=<?php echo $id_res1541 ?>" class="btn btn-danger">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg15/update/update1541.php?update=<?php echo $id_res1541 ?>" class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $totalcampus ?></td>
                        <td class="text-center"><?php echo $tppa ?></td>
                        <td class="text-center"><?php echo $shortds ?></td>
                        <td class="text-center"><?php echo $totcost ?></td>
                        <td class="text-center"><?php echo $funds ?></td>

                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--res 15.4.2-->
        <div class=" w-100 h-auto mt-3" id="research1542" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of policies ensuring that food on campus is sustainably farmed:</th>
                        <th scope="col">Total number of PPAs implemented in accordance to the policy:</th>
                        <th scope="col">Title of PPA:</th>                        
                        <th scope="col">Short description of the PPA:</th>
                        <th scope="col">Total cost:</th>
                        <th scope="col">Fund source:</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql1542 = "SELECT * FROM `research15.4.2`";
                    $select1542 = mysqli_query($conn, $sql1542);

                    if (mysqli_num_rows($select1542) > 0) {
                        while ($row = mysqli_fetch_assoc($select1542)) {
                            $id_res1542 = $row['ID'];
                            $no_susfarmed = $row['no_susfarmed'];
                            $no_ppaimplemented = $row['no_ppaimplemented'];
                            $titotppa = $row['titotppa'];
                            $sdotppa = $row['sdotppa'];
                            $tocost = $row['tocost'];
                            $funsource = $row['funsource'];


                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg15/delete/delete1542.php?delete=<?php echo $id_res1542 ?>" class="btn btn-danger">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg15/update/update1542.php?update=<?php echo $id_res1542 ?>" class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $no_susfarmed ?></td>
                        <td class="text-center"><?php echo $no_ppaimplemented ?></td>
                        <td class="text-center"><?php echo $titotppa ?></td>
                        <td class="text-center"><?php echo $sdotppa ?></td>
                        <td class="text-center"><?php echo $tocost ?></td>
                        <td class="text-center"><?php echo $funsource ?></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--res 15.4.3-->
        <div class=" w-100 h-auto mt-3" id="research1543" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of campus initiatives to maintain and extend current ecosystem biodiversity:</th>
                        <th scope="col">Title of PPA:</th>                        
                        <th scope="col">Short description of the PPA:</th>
                        <th scope="col">Total cost:</th>
                        <th scope="col">Fund source:</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql1543 = "SELECT * FROM `research15.4.3`";
                    $select1543 = mysqli_query($conn, $sql1543);

                    if (mysqli_num_rows($select1543) > 0) {
                        while ($row = mysqli_fetch_assoc($select1543)) {
                            $id_res1543 = $row['ID'];
                            $no_maecebio = $row['no_maecebio'];
                            $ppatit = $row['ppatit'];
                            $shortdotppa = $row['shortdotppa'];
                            $costtotal = $row['costtotal'];
                            $sourcefund = $row['sourcefund'];

                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg15/delete/delete1543.php?delete=<?php echo $id_res1543 ?>" class="btn btn-danger">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg15/update/update1543.php?update=<?php echo $id_res1543 ?>" class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $no_maecebio ?></td>
                        <td class="text-center"><?php echo $ppatit ?></td>
                        <td class="text-center"><?php echo $shortdotppa ?></td>
                        <td class="text-center"><?php echo $costtotal ?></td>
                        <td class="text-center"><?php echo $sourcefund ?></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--res 15.5.1-->
        <div class=" w-100 h-auto mt-3" id="research1551" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of extension PPAs that sustain the biodiversity of the community:</th>
                        <th scope="col">Title of PPA:</th>                        
                        <th scope="col">Short description of the PPA:</th>
                        <th scope="col">Total cost:</th>
                        <th scope="col">Fund source:</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql1551 = "SELECT * FROM `research15.5.1`";
                    $select1551 = mysqli_query($conn, $sql1551);

                    if (mysqli_num_rows($select1551) > 0) {
                        while ($row = mysqli_fetch_assoc($select1551)) {
                            $id_res1551 = $row['ID'];
                            $no_bio = $row['no_bio'];
                            $tippa = $row['tippa'];
                            $sdeppa = $row['sdeppa'];
                            $totcst = $row['totcst'];
                            $funs = $row['funs'];

                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg15/delete/delete1551.php?delete=<?php echo $id_res1551 ?>" class="btn btn-danger">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg15/update/update1551.php?update=<?php echo $id_res1551 ?>" class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $no_bio ?></td>
                        <td class="text-center"><?php echo $tippa ?></td>
                        <td class="text-center"><?php echo $sdeppa ?></td>
                        <td class="text-center"><?php echo $totcst ?></td>
                        <td class="text-center"><?php echo $funs ?></td>
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

//for exit in message
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