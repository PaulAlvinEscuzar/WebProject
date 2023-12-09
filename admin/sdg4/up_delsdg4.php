<?php
include('../../includes/adminHead/header4.php');
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
        include '../../includes/updatesdgdd/ddsdg4.php';
        ?>

        <!--res 4.1.1-->
        <div class=" w-100 h-auto mt-3" id="research411" style="display: block ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of research on early years and lifelong education:</th>
                        <th scope="col">Title of research:</th>
                        <th scope="col">Author:</th>
                        <th scope="col">Year of publication:</th>
                        <th scope="col">Total number of citations:</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql411 = "SELECT * FROM `research4.1.1`";
                    $select411 = mysqli_query($conn, $sql411);

                    if (mysqli_num_rows($select411) > 0) {
                        while ($row = mysqli_fetch_assoc($select411)) {
                            $id_res411 = $row['ID'];
                            $tno_yale = $row['tno_yale'];
                            $titleores = $row['titleores'];
                            $author= $row['author'];
                            $YearoPub = $row['YearoPub'];
                            $Totnumocit = $row['Totnumocit'];
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg4/delete/delete411.php?delete=<?php echo $id_res411 ?>"
                                class="btn btn-danger"
                                onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg4/update/update411.php?update=<?php echo $id_res411 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $tno_yale ?></td>
                        <td class="text-center"><?php echo  $titleores?></td>
                        <td class="text-center"><?php echo $author ?></td>
                        <td class="text-center"><?php echo $YearoPub ?></td>
                        <td class="text-center"><?php echo $Totnumocit ?></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--res 4.2.1-->
        <div class=" w-100 h-auto mt-3" id="research421" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of graduates who are eligible for licensure examination:</th>
                        <th scope="col">Bachelor of Science Industrial Engineering Male:</th>
                        <th scope="col">Bachelor of Science Industrial Engineering Female:</th>
                        <th scope="col">Bachelor of Science in Psychology Male:</th>
                        <th scope="col">Bachelor of Science in Psychology Female:</th>
                        <th scope="col">Bachelor of Science in Management Accounting Male:</th>
                        <th scope="col">Bachelor of Science in Management Accounting Female:</th>                        
                        <th scope="col">Total number of graduates who take the licensure examination:</th>
                        <th scope="col">Bachelor of Science Industrial Engineering Male:</th>
                        <th scope="col">Bachelor of Science Industrial Engineering Female:</th>
                        <th scope="col">Bachelor of Science in Psychology Male:</th>
                        <th scope="col">Bachelor of Science in Psychology Female:</th>
                        <th scope="col">Bachelor of Science in Management Accounting Male:</th>
                        <th scope="col">Bachelor of Science in Management Accounting Female:</th>
                        <th scope="col">Total number of graduates who acquired license:</th>
                        <th scope="col">Bachelor of Science Industrial Engineering Male:</th>
                        <th scope="col">Bachelor of Science Industrial Engineering Female:</th>
                        <th scope="col">Bachelor of Science in Psychology Male:</th>
                        <th scope="col">Bachelor of Science in Psychology Female:</th>
                        <th scope="col">Bachelor of Science in Management Accounting Male:</th>
                        <th scope="col">Bachelor of Science in Management Accounting Female:</th>
                        <th scope="col">Total number of graduates who failed to pass the licensure examination:</th>
                        <th scope="col">Percent of the total number of graduates are eligible for licensure examination.</th>
                        <th scope="col">Percent of the total number of graduates who are eligible for licensure examination took the licensure examination.</th>
                        <th scope="col">Percent of the graduates who took the licensure examination have successfully acquired their license.</th>
                        <th scope="col">Percent of graduates who took the licensure examination have failed to pass.</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql421 = "SELECT * FROM `research4.2.1`";
                    $select421 = mysqli_query($conn, $sql421);

                    if (mysqli_num_rows($select421) > 0) {
                        while ($row = mysqli_fetch_assoc($select421)) {
                            $id_res421 = $row['ID'];
                            $tno_efle = $row['tno_efle'];
                            $bsie_male = $row['bsie_male'];
                            $bsie_female = $row['bsie_female'];
                            $bsp_male = $row['bsp_male'];
                            $bsp_female = $row['bsp_female'];
                            $bsme_male = $row['bsme_male'];
                            $bsme_female = $row['bsme_female'];
                            $tno_ttle = $row['tno_ttle'];
                            $bsie_male1 = $row['bsie_male1'];
                            $bsie_female1 = $row['bsie_female1'];
                            $bsp_male1 = $row['bsp_male1'];
                            $bsp_female1 = $row['bsp_female1'];
                            $bsme_male1 = $row['bsme_male1'];
                            $bsme_female1 = $row['bsme_female1'];
                            $tno_gwal = $row['tno_gwal'];
                            $bsie_male2 = $row['bsie_male2'];
                            $bsie_female2 = $row['bsie_female2'];
                            $bsp_male2 = $row['bsp_male2'];
                            $bsp_female2 = $row['bsp_female2'];
                            $bsme_male2 = $row['bsme_male2'];
                            $bsme_female2 = $row['bsme_female2'];
                            $no_gwftptle = $row['no_gwftptle'];
                            $Tno_gele = $row['Tno_gele'];
                            $Ptno_elettle = $row['Ptno_elettle'];
                            $Pglesatl = $row['Pglesatl'];
                            $Pglehftp = $row['Pglehftp'];
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg4/delete/delete421.php?delete=<?php echo $id_res421 ?>" class="btn btn-danger">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg4/update/update421.php?update=<?php echo $id_res421 ?>" class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo  $tno_efle ?></td>
                        <td class="text-center"><?php echo $bsie_male ?></td>
                        <td class="text-center"><?php echo $bsie_female ?></td>
                        <td class="text-center"><?php echo $bsp_male ?></td>
                        <td class="text-center"><?php echo $bsp_female ?></td>
                        <td class="text-center"><?php echo $bsme_male ?></td>
                        <td class="text-center"><?php echo $bsme_female ?></td>
                        <td class="text-center"><?php echo $tno_ttle ?></td>
                        <td class="text-center"><?php echo $bsie_male1 ?></td>
                        <td class="text-center"><?php echo $bsie_female1 ?></td>
                        <td class="text-center"><?php echo $bsp_male1 ?></td>
                        <td class="text-center"><?php echo $bsp_female1 ?></td>
                        <td class="text-center"><?php echo $bsme_male1  ?></td>
                        <td class="text-center"><?php echo $bsme_female1 ?></td>
                        <td class="text-center"><?php echo $tno_gwal ?></td>
                        <td class="text-center"><?php echo $bsie_male2 ?></td>
                        <td class="text-center"><?php echo $bsie_female2 ?></td>
                        <td class="text-center"><?php echo $bsp_male2?></td>
                        <td class="text-center"><?php echo $bsp_female2 ?></td>
                        <td class="text-center"><?php echo $bsme_male2 ?></td>
                        <td class="text-center"><?php echo $bsme_female2 ?></td>
                        <td class="text-center"><?php echo $no_gwftptle ?></td>
                        <td class="text-center"><?php echo $Tno_gele ?></td>
                        <td class="text-center"><?php echo $Ptno_elettle ?></td>
                        <td class="text-center"><?php echo $Pglesatl ?></td>
                        <td class="text-center"><?php echo $Pglehftp ?></td>

                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--res 4.2.2-->
        <div class=" w-100 h-auto mt-3" id="research422" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of LET passers:</th>
                        <th scope="col">Total number of BSED LET passers:</th>
                        <th scope="col">Total number of BEED LET passers:</th>
                        <th scope="col">Total number of BPED LET passers:</th>
                        <th scope="col">Total number of BTLED LET passers:</th>
                        <th scope="col">Percent of graduates who acquired a license have teaching qualifications to teach at primary level.</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql422 = "SELECT * FROM `research4.2.2`";
                    $select422 = mysqli_query($conn, $sql422);

                    if (mysqli_num_rows($select422) > 0) {
                        while ($row = mysqli_fetch_assoc($select422)) {
                            $id_res422 = $row['ID'];
                            $no_letpassers = $row['no_letpassers'];
                            $no_bsedletpassers = $row['no_bsedletpassers'];
                            $no_beedletpassers = $row['no_beedletpassers'];
                            $no_bpedletpassers = $row['no_bpedletpassers'];
                            $no_btledletpassers = $row['no_btledletpassers'];
                            $percentg_lhtqttapl = $row['percentg_lhtqttapl'];
                            
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg4/delete/delete422.php?delete=<?php echo $id_res422 ?>" class="btn btn-danger">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg4/update/update422.php?update=<?php echo $id_res422 ?>" class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $no_letpassers ?></td>
                        <td class="text-center"><?php echo $no_bsedletpassers ?></td>
                        <td class="text-center"><?php echo $no_beedletpassers ?></td>
                        <td class="text-center"><?php echo $no_bpedletpassers ?></td>
                        <td class="text-center"><?php echo $no_btledletpassers?></td>
                        <td class="text-center"><?php echo $percentg_lhtqttapl?></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--res 4.3.1-->
        <div class=" w-100 h-auto mt-3" id="research431" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of free access provided to the general public:</th>
                        <th scope="col">Title of the PPA:</th>
                        <th scope="col">Short description of the PPA:</th>
                        <th scope="col">Total cost:</th>
                        <th scope="col">Fund source:</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql431 = "SELECT * FROM `research4.3.1`";
                    $select431 = mysqli_query($conn, $sql431);

                    if (mysqli_num_rows($select431) > 0) {
                        while ($row = mysqli_fetch_assoc($select431)) {
                            $id_res431 = $row['ID'];
                            $no_freeapgp = $row['no_freeapgp'];
                            $titleoppa = $row['titleoppa'];
                            $shortdotppa = $row['shortdotppa'];
                            $totalcost = $row['totalcost'];
                            $fundsource= $row['fundsource'];


                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg4/delete/delete431.php?delete=<?php echo $id_res431 ?>" class="btn btn-danger">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg4/update/update431.php?update=<?php echo $id_res431 ?>" class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $no_freeapgp ?></td>
                        <td class="text-center"><?php echo $titleoppa ?></td>
                        <td class="text-center"><?php echo $shortdotppa ?></td>
                        <td class="text-center"><?php echo $totalcost ?></td>
                        <td class="text-center"><?php echo $fundsource ?></td>

                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--res 4.3.2-->
        <div class=" w-100 h-auto mt-3" id="research432" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of educational events hosted at the university that are open to the general public:</th>
                        <th scope="col">Title of PPA:</th>
                        <th scope="col">Short description:</th>
                        <th scope="col">Total cost:</th>
                        <th scope="col">Fund source:</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql432 = "SELECT * FROM `research4.3.2`";
                    $select432 = mysqli_query($conn, $sql432);

                    if (mysqli_num_rows($select432) > 0) {
                        while ($row = mysqli_fetch_assoc($select432)) {
                            $id_res432 = $row['ID'];
                            $no_univottgp = $row['no_univottgp'];
                            $titleppa = $row['titleppa'];
                            $shortdesppa = $row['shortdesppa'];
                            $totalcost = $row['totalcost'];
                            $fundsource= $row['fundsource'];


                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg4/delete/delete432.php?delete=<?php echo $id_res432 ?>" class="btn btn-danger">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg4/update/update432.php?update=<?php echo $id_res432 ?>" class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $no_univottgp ?></td>
                        <td class="text-center"><?php echo $titleppa ?></td>
                        <td class="text-center"><?php echo $shortdesppa ?></td>
                        <td class="text-center"><?php echo $totalcost ?></td>
                        <td class="text-center"><?php echo $fundsource ?></td>

                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--res 4.3.3-->
        <div class=" w-100 h-auto mt-3" id="research433" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of vocational training events hosted at the university that are open to the general public:</th>
                        <th scope="col">Title of PPA:</th>
                        <th scope="col">Short description of the PPA:</th>
                        <th scope="col">Total cost:</th>
                        <th scope="col">Fund source:</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql433 = "SELECT * FROM `research4.3.3`";
                    $select433 = mysqli_query($conn, $sql433);

                    if (mysqli_num_rows($select433) > 0) {
                        while ($row = mysqli_fetch_assoc($select433)) {
                            $id_res433 = $row['ID'];
                            $no_voctrai = $row['no_voctrai'];
                            $titleppa = $row['titleppa'];
                            $shortdesppa = $row['shortdesppa'];
                            $totalcost = $row['totalcost'];
                            $fundsource = $row['fundsource'];


                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg4/delete/delete433.php?delete=<?php echo $id_res433 ?>" class="btn btn-danger">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg4/update/update433.php?update=<?php echo $id_res433 ?>" class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $no_voctrai ?></td>
                        <td class="text-center"><?php echo $titleppa ?></td>
                        <td class="text-center"><?php echo $shortdesppa ?></td>
                        <td class="text-center"><?php echo $totalcost ?></td>
                        <td class="text-center"><?php echo $fundsource ?></td>

                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--res 4.3.4-->
        <div class=" w-100 h-auto mt-3" id="research434" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of education outreach activities beyond campus:</th>
                        <th scope="col">Title of the PPA:</th>                        
                        <th scope="col">Short description of the PPA:</th>
                        <th scope="col">Total cost:</th>
                        <th scope="col">Fund source:</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql434 = "SELECT * FROM `research4.3.4`";
                    $select434 = mysqli_query($conn, $sql434);

                    if (mysqli_num_rows($select434) > 0) {
                        while ($row = mysqli_fetch_assoc($select434)) {
                            $id_res434 = $row['ID'];
                            $no_edoutact = $row['no_edoutact'];
                            $titleppa = $row['titleppa'];
                            $shortdesppa = $row['shortdesppa'];
                            $totalcost = $row['totalcost'];
                            $fundsource = $row['fundsource'];


                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg4/delete/delete434.php?delete=<?php echo $id_res434 ?>" class="btn btn-danger">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg4/update/update434.php?update=<?php echo $id_res434 ?>" class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $no_edoutact ?></td>
                        <td class="text-center"><?php echo $titleppa ?></td>
                        <td class="text-center"><?php echo $shortdesppa ?></td>
                        <td class="text-center"><?php echo $totalcost ?></td>
                        <td class="text-center"><?php echo $fundsource ?></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--res 4.3.5-->
        <div class=" w-100 h-auto mt-3" id="research435" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of students who are 50 years old and above:</th>
                        <th scope="col">Percent of the student population aged 50 years old and above.</th>
                        <th scope="col">Total number of learning access policy:</th>
                        <th scope="col">Total number of PPAs implemented in accordance to the policy:</th>
                        <th scope="col">Title of the PPA:</th>                        
                        <th scope="col">Short description of the PPA:</th>
                        <th scope="col">Total cost:</th>
                        <th scope="col">Fund source:</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql435 = "SELECT * FROM `research4.3.5`";
                    $select435 = mysqli_query($conn, $sql435);

                    if (mysqli_num_rows($select435) > 0) {
                        while ($row = mysqli_fetch_assoc($select435)) {
                            $id_res435 = $row['ID'];
                            $no_stud = $row['no_stud'];
                            $percofstudpop = $row['percofstudpop'];
                            $totnumlearnap = $row['totnumlearnap'];
                            $totnumofppaimap = $row['totnumofppaimap'];
                            $titleppa = $row['titleppa'];
                            $shortdesppa = $row['shortdesppa'];
                            $totalcost = $row['totalcost'];
                            $fundsource = $row['fundsource'];
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg4/delete/delete435.php?delete=<?php echo $id_res435 ?>" class="btn btn-danger">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg4/update/update435.php?update=<?php echo $id_res435 ?>" class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $no_stud ?></td>
                        <td class="text-center"><?php echo $percofstudpop ?></td>
                        <td class="text-center"><?php echo $totnumlearnap ?></td>
                        <td class="text-center"><?php echo $totnumofppaimap ?></td>
                        <td class="text-center"><?php echo $titleppa ?></td>
                        <td class="text-center"><?php echo $shortdesppa ?></td>
                        <td class="text-center"><?php echo $totalcost ?></td>
                        <td class="text-center"><?php echo $fundsource ?></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--res 4.4.1-->
        <div class=" w-100 h-auto mt-3" id="research441" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of first-generation students:</th>
                        <th scope="col">Total number of first year students:</th>                        
                        <th scope="col">Total number of first-generation students in first year level:</th>
                        <th scope="col">Percent of the student population are first-generation students.</th>
                        <th scope="col">Percent of first year students are first-generation students.</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql441 = "SELECT * FROM `research4.4.1`";
                    $select441 = mysqli_query($conn, $sql441);

                    if (mysqli_num_rows($select441) > 0) {
                        while ($row = mysqli_fetch_assoc($select441)) {
                            $id_res441 = $row['ID'];
                            $totnofgens = $row['totnofgens'];
                            $totnumfys = $row['totnumfys'];
                            $totnumfgsfyl = $row['totnumfgsfyl'];
                            $pstudpfgs = $row['pstudpfgs'];
                            $pfysfgs = $row['pfysfgs'];
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg4/delete/delete441.php?delete=<?php echo $id_res441 ?>" class="btn btn-danger">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg4/update/update441.php?update=<?php echo $id_res441 ?>" class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $totnofgens ?></td>
                        <td class="text-center"><?php echo $totnumfys ?></td>
                        <td class="text-center"><?php echo $totnumfgsfyl ?></td>
                        <td class="text-center"><?php echo $pstudpfgs ?></td>
                        <td class="text-center"><?php echo $pfysfgs ?></td>
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