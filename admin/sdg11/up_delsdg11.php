<?php
include('../../includes/adminHead/header11.php');
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
        include '../../includes/updatesdgdd/ddsdg11.php';
        ?>

        <!--This div is Research 11.1.1-->
        <div class=" w-100 h-auto mt-3" id="research1111" style="display: block ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Year Publication</th>
                        <th scope="col">Total number of citations</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research11.1.1`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id1111 = $row['id'];
                            $title = $row['title'];
                            $author = $row['author'];
                            $year_pub = $row['year_pub'];
                            $no_citations = $row['no_citations'];
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg11/delete/delete1111.php?delete=<?php echo $id1111 ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg11/update/update1111.php?update=<?php echo $id1111 ?>"
                                class="btn btn-success">Update</a>
                        </td>
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

        <!--This div is for research 11.2.1-->
        <div class=" w-100 h-auto mt-3" id="research1121" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total campus land area</th>
                        <th scope="col">Total campus building area</th>
                        <th scope="col">Total area in campus covered in forest vegetation</th>
                        <th scope="col">Total ground parking area</th>
                        <th scope="col">Total number of pedestrian paths on campus</th>
                        <th scope="col">Campus Setting</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research11_2_1`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id1112 = $row['id'];
                            $campusLand = $row['campusLand'];
                            $campusBuilding = $row['campusBuilding'];
                            $campusVegetation = $row['campusVegetation'];
                            $parkingArea = $row['parkingArea'];
                            $pedestrianPath = $row['pedestrianPath'];
                            $campusSettings = $row['campusSettings'];
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg11/delete/delete1112.php?delete=<?php echo $id1112 ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg11/update/update1112.php?update=<?php echo $id1112 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $campusLand ?></td>
                        <td class="text-center"><?php echo $campusBuilding ?></td>
                        <td class="text-center"><?php echo $campusVegetation ?></td>
                        <td class="text-center"><?php echo $parkingArea ?></td>
                        <td class="text-center"><?php echo $pedestrianPath ?></td>
                        <td class="text-center"><?php echo $campusSettings ?></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        
        <!--This div is Research 11.3.1-->
        <div class=" w-100 h-auto mt-3" id="research1131" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of buildings and/or monuments or natural heritage landscapes of cultural significance in the campus</th>
                        <th scope="col">Total number of visitors/guests that visit</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research11_3_1`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id1113 = $row['id'];
                            $TotalNumBuild = $row['TotalNumBuild'];
                            $TotalNumVisitor = $row['TotalNumVisitor'];
                            
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg11/delete/delete1113.php?delete=<?php echo $id1113 ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg11/update/update1113.php?update=<?php echo $id1113 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $TotalNumBuild ?></td>
                        <td class="text-center"><?php echo $TotalNumVisitor ?></td>
                        
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--This div is Research 11.3.2-->
        <div class=" w-100 h-auto mt-3" id="research1132" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of internal stakeholders visiting the campus library (per month)</th>
                        <th scope="col">Total number of visitors/guests visiting the campus library (per month)</th>
                        <th scope="col">Total number of books/publications borrowed by internal stakeholders (per month)</th>
                        <th scope="col">Total number of books/publications borrowed by guests (per month)</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research11_3_2`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id1132 = $row['id'];
                            $TotalNumInternal = $row['TotalNumInternal'];
                            $TotalNumOfVisitor = $row['TotalNumOfVisitor'];
                            $TotalNumOfBooks = $row['TotalNumOfBooks'];
                            $TotalNumBorrowedGuest = $row['TotalNumBorrowedGuest'];
                            
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg11/delete/delete1132.php?delete=<?php echo $id1132 ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg11/update/update1132.php?update=<?php echo $id1132 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $TotalNumInternal ?></td>
                        <td class="text-center"><?php echo $TotalNumOfVisitor ?></td>
                        <td class="text-center"><?php echo $TotalNumOfBooks ?></td>
                        <td class="text-center"><?php echo $TotalNumBorrowedGuest ?></td>
                        
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--This div is Research 11.3.3-->
        <div class=" w-100 h-auto mt-3" id="research1133" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of internal stakeholders visiting the campus museum (per year)</th>
                        <th scope="col">Total number of visitors/guests visiting the campus museum (per year)</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research11_3_3`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id1133 = $row['id'];
                            $TotalNumInternalStakeholder = $row['TotalNumInternalStakeholder'];
                            $TotalNumOfVisitorGuest = $row['TotalNumOfVisitorGuest'];
                            
                            
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg11/delete/delete1133.php?delete=<?php echo $id1133 ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg11/update/update1133.php?update=<?php echo $id1133 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $TotalNumInternalStakeholder ?></td>
                        <td class="text-center"><?php echo $TotalNumOfVisitorGuest ?></td>
                        
                        
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--This div is Research 11.3.4-->
        <div class=" w-100 h-auto mt-3" id="research1134" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of school activities held at campus open/green spaces:</th>
                        <th scope="col">Total number of events open to general public held at campus open/green spaces</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research11_3_4`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id1134 = $row['id'];
                            $no_school_act = $row['no_school_act'];
                            $no_event = $row['no_event'];
                            
                            
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg11/delete/delete1134.php?delete=<?php echo $id1134 ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg11/update/update1134.php?update=<?php echo $id1134 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $no_school_act ?></td>
                        <td class="text-center"><?php echo $no_event ?></td>
                        
                        
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--This div is Research 11.3.5-->
        <div class=" w-100 h-auto mt-3" id="research1135" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of performances:</th>
                        <th scope="col">Total number of performers:</th>
                        <th scope="col">Total number of campus choir groups performances (with list of events) (Internal)</th>
                        <th scope="col">Total number of campus choir groups performances (with list of events) (External)</th>
                        <th scope="col">Total number of campus theater groups performances (with list of events) (Internal)</th>
                        <th scope="col">Total number of campus theater groups performances (with list of events) (External)</th>
                        <th scope="col">Total number of campus dance group performances (with list of events) (Internal) </th>
                        <th scope="col">Total number of campus dance group performances (with list of events) (External)</th>
                        <th scope="col">Total number of campus band group performances (with list of events) (Internal)</th>
                        <th scope="col">Total number of campus band group performances (with list of events) (External)</th>
                        <th scope="col">Total number of donated paintings and sculptures to community museums:</th>
                        <th scope="col">Total amount value of donated paintings and sculptures:</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research11_3_5`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id1135 = $row['id'];
                            $num_of_performances = $row['num_of_performances'];
                            $num_of_perfomers = $row['num_of_perfomers'];
                            $num_of_choir_internal = $row['num_of_choir_internal'];
                            $num_of_choir_external = $row['num_of_choir_external'];
                            $num_of_theater_internal = $row['num_of_theater_internal'];
                            $num_of_theater_external = $row['num_of_theater_external'];
                            $num_of_dance_internal = $row['num_of_dance_internal'];
                            $num_of_dance_external = $row['num_of_dance_external'];
                            $num_of_band_internal = $row['num_of_band_internal'];
                            $num_of_band_external = $row['num_of_band_external'];
                            $num_of_paintings = $row['num_of_paintings'];
                            $val_of_paintings = $row['val_of_paintings'];
                            
                            
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg11/delete/delete1135.php?delete=<?php echo $id1135 ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg11/update/update1135.php?update=<?php echo $id1135 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $num_of_performances ?></td>
                        <td class="text-center"><?php echo $num_of_perfomers ?></td>
                        <td class="text-center"><?php echo $num_of_choir_internal ?></td>
                        <td class="text-center"><?php echo $num_of_choir_external ?></td>
                        <td class="text-center"><?php echo $num_of_theater_internal ?></td>
                        <td class="text-center"><?php echo $num_of_theater_external ?></td>
                        <td class="text-center"><?php echo $num_of_dance_internal ?></td>
                        <td class="text-center"><?php echo $num_of_dance_external ?></td>
                        <td class="text-center"><?php echo $num_of_band_internal ?></td>
                        <td class="text-center"><?php echo $num_of_band_external ?></td>
                        <td class="text-center"><?php echo $num_of_paintings ?></td>
                        <td class="text-center"><?php echo $val_of_paintings ?></td>
                        
                        
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--This div is Research 11.3.6-->
        <div class=" w-100 h-auto mt-3" id="research1136" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of projects intended to preserve cultural heritage:</th>
                        <th scope="col">Title of project:</th>
                        <th scope="col">Short description:</th>
                        <th scope="col">Total cost:</th>
                        <th scope="col">Fund Source:</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research11_3_6`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id1136 = $row['id'];
                            $num_of_projects = $row['num_of_projects'];
                            $title_of_projects = $row['title_of_projects'];
                            $short_des = $row['short_des'];
                            $total_cost = $row['total_cost'];
                            $fund_source = $row['fund_source'];
                            
                            
                            
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg11/delete/delete1136.php?delete=<?php echo $id1136 ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg11/update/update1136.php?update=<?php echo $id1136 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $num_of_projects ?></td>
                        <td class="text-center"><?php echo $title_of_projects ?></td>
                        <td class="text-center"><?php echo $short_des ?></td>
                        <td class="text-center"><?php echo $total_cost ?></td>
                        <td class="text-center"><?php echo $fund_source ?></td>
                        
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--This div is Research 11.3.7-->
        <div class=" w-100 h-auto mt-3" id="research1137" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of other support for arts and heritage</th>
                        <th scope="col">Title of PPA</th>
                        <th scope="col">Short description:</th>
                        <th scope="col">Total cost:</th>
                        <th scope="col">Fund Source:</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research11_3_7`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id1137 = $row['id'];
                            $other_total_Num = $row['other_total_Num'];
                            $Other_PPA_Title = $row['Other_PPA_Title'];
                            $other_short_des = $row['other_short_des'];
                            $other_total_cost = $row['other_total_cost'];
                            $other_fund_source = $row['other_fund_source'];
                            
                            
                            
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg11/delete/delete1137.php?delete=<?php echo $id1137 ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg11/update/update1137.php?update=<?php echo $id1137 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $other_total_Num ?></td>
                        <td class="text-center"><?php echo $Other_PPA_Title ?></td>
                        <td class="text-center"><?php echo $other_short_des ?></td>
                        <td class="text-center"><?php echo $other_total_cost ?></td>
                        <td class="text-center"><?php echo $other_fund_source ?></td>
                        
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--This div is Research 11.4.1-->
        <div class=" w-100 h-auto mt-3" id="research1138" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total campus expenditure on arts and heritage:</th>
                        <th scope="col">% of the total allocated budget for arts and heritage was utilized.</th>
                        <th scope="col">% of total campus expenditure was allotted to arts and heritage.</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research11_3_8`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id1138 = $row['id'];
                            $TotalCampus = $row['TotalCampus'];
                            $AllocBudget = $row['AllocBudget'];
                            $CampusExpen = $row['CampusExpen'];
                           
                            
                            
                            
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg11/delete/delete1138.php?delete=<?php echo $id1138 ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg11/update/update1138.php?update=<?php echo $id1138 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $TotalCampus ?></td>
                        <td class="text-center"><?php echo $AllocBudget ?></td>
                        <td class="text-center"><?php echo $CampusExpen ?></td>
                        
                        
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--This div is Research 11.5.1 wala pang nilalagay for this research-->

        <!--This div is Research 11.5.1.1-->
        <div class=" w-100 h-auto mt-3" id="research1139" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of students who walk to school"</th>
                        <th scope="col">Total number of students who use bicycle:</th>
                        <th scope="col">Total number of students who commute:</th>
                        <th scope="col">Total number of students who use their own vehicle:</th>
                        <th scope="col">Total number of students who carpools:</th>
                        <th scope="col">% of total students population walks to school</th>
                        <th scope="col">% of total students population use bicycle to go to school</th>
                        <th scope="col">% of total students population commute to school</th>
                        <th scope="col">%  of total students population use their own vehicle to go to school</th>
                        <th scope="col">%  of the total students population carpools with relatives/friends to go to school.</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research11_3_9`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id1139 = $row['id'];
                            $StudWalk = $row['StudWalk'];
                            $StudBike = $row['StudBike'];
                            $StudCommute = $row['StudCommute'];
                            $StudVehicle = $row['StudVehicle'];
                            $StudCarpools = $row['StudCarpools'];
                            $StudPopWalk = $row['StudPopWalk'];
                            $StudPopBike = $row['StudPopBike'];
                            $StudPopCommute = $row['StudPopCommute'];
                            $StudPopVehicle = $row['StudPopVehicle'];
                            $StudPopCarpools = $row['StudPopCarpools'];
                           
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg11/delete/delete1139.php?delete=<?php echo $id1139 ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg11/update/update1139.php?update=<?php echo $id1139 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $StudWalk ?></td>
                        <td class="text-center"><?php echo $StudBike ?></td>
                        <td class="text-center"><?php echo $StudCommute ?></td>
                        <td class="text-center"><?php echo $StudVehicle ?></td>
                        <td class="text-center"><?php echo $StudCarpools ?></td>
                        <td class="text-center"><?php echo $StudPopWalk ?></td>
                        <td class="text-center"><?php echo $StudPopBike ?></td>
                        <td class="text-center"><?php echo $StudPopCommute ?></td>
                        <td class="text-center"><?php echo $StudPopVehicle ?></td>
                        <td class="text-center"><?php echo $StudPopCarpools ?></td>

                        
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>    
        
        <!--This div is Research 11.5.1.2-->
        <div class=" w-100 h-auto mt-3" id="research1140" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of students who walk to school</th>
                        <th scope="col">Total number of students who use bicycle:</th>
                        <th scope="col">Total number of students who commute:</th>
                        <th scope="col">Total number of students who use their own vehicle:</th>
                        <th scope="col">Total number of students who carpools:</th>
                        <th scope="col">% of total students population walks to school</th>
                        <th scope="col">% of total students population use bicycle to go to school</th>
                        <th scope="col">% of total students population commute to school</th>
                        <th scope="col">%  of total students population use their own vehicle to go to school</th>
                        <th scope="col">%  of the total students population carpools with relatives/friends to go to school.</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research11_4_0`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id1140 = $row['id'];
                            $emp_walk = $row['emp_walk'];
                            $emp_bicycle = $row['emp_bicycle'];
                            $emp_commute = $row['emp_commute'];
                            $emp_vehicle = $row['emp_vehicle'];
                            $emp_carpools = $row['emp_carpools'];
                            $prct_walks = $row['prct_walks'];
                            $prct_bicycle = $row['prct_bicycle'];
                            $prct_commute = $row['prct_commute'];
                            $prct_vehicle = $row['prct_vehicle'];
                            $prct_carpools = $row['prct_carpools'];
                           
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg11/delete/delete1140.php?delete=<?php echo $id1140 ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg11/update/update1140.php?update=<?php echo $id1140 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $emp_walk ?></td>
                        <td class="text-center"><?php echo $emp_bicycle ?></td>
                        <td class="text-center"><?php echo $emp_commute ?></td>
                        <td class="text-center"><?php echo $emp_vehicle ?></td>
                        <td class="text-center"><?php echo $emp_carpools ?></td>
                        <td class="text-center"><?php echo $prct_walks ?></td>
                        <td class="text-center"><?php echo $prct_bicycle ?></td>
                        <td class="text-center"><?php echo $prct_commute ?></td>
                        <td class="text-center"><?php echo $prct_vehicle ?></td>
                        <td class="text-center"><?php echo $prct_carpools ?></td>

                        
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>   

        <!--This div is Research 11.5.1.3-->
        <div class=" w-100 h-auto mt-3" id="research1141" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">% total campus population walks to school</th>
                        <th scope="col">% total campus population commute to school</th>
                        <th scope="col">% total campus population use their own vehicle to go to school</th>
                        <th scope="col">% total campus population commute to school</th>
                        <th scope="col">% total campus population carpools with relatives/friends to go to school</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research11_4_1`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id1141 = $row['id'];
                            $prct_walks = $row['prct_walks'];
                            $prct_bicycle = $row['prct_bicycle'];
                            $prct_commute = $row['prct_commute'];
                            $prct_vehicle = $row['prct_vehicle'];
                            $prct_carpools = $row['prct_carpools'];
                           
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg11/delete/delete1141.php?delete=<?php echo $id1141 ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg11/update/update1141.php?update=<?php echo $id1141 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $prct_walks ?></td>
                        <td class="text-center"><?php echo $prct_bicycle ?></td>
                        <td class="text-center"><?php echo $prct_commute ?></td>
                        <td class="text-center"><?php echo $prct_vehicle ?></td>
                        <td class="text-center"><?php echo $prct_carpools ?></td>
                        
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>  

        <!--This div is Research 11.5.2-->
        <div class=" w-100 h-auto mt-3" id="research1142" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of PPAs that promotes sustainable commuting:/th>
                        <th scope="col">Title of the PPA:</th>
                        <th scope="col">Short description:</th>
                        <th scope="col">Total cost:</th>
                        <th scope="col">Fund source:</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research11_4_2`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id1142 = $row['id'];
                            $num_ppa = $row['num_ppa'];
                            $t_ppa = $row['t_ppa'];
                            $short_des = $row['short_des'];
                            $total_cost = $row['total_cost'];
                            $fund_src = $row['fund_src'];
                           
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg11/delete/delete1142.php?delete=<?php echo $id1142 ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg11/update/update1142.php?update=<?php echo $id1142 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $num_ppa ?></td>
                        <td class="text-center"><?php echo $t_ppa ?></td>
                        <td class="text-center"><?php echo $short_des ?></td>
                        <td class="text-center"><?php echo $total_cost ?></td>
                        <td class="text-center"><?php echo $fund_src ?></td>
                        
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

         <!--This div is Research 11.5.3-->
         <div class=" w-100 h-auto mt-3" id="research1143" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of PPAs that allow remote working:</th>
                        <th scope="col">Title of the PPA:</th>
                        <th scope="col">Short description:</th>
                        <th scope="col">Total cost:</th>
                        <th scope="col">Fund source:</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research11_4_3`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id1143 = $row['id'];
                            $num_ppa = $row['num_ppa'];
                            $t_ppa = $row['t_ppa'];
                            $short_des = $row['short_des'];
                            $total_cost = $row['total_cost'];
                            $fund_src = $row['fund_src'];
                           
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg11/delete/delete1143.php?delete=<?php echo $id1143 ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg11/update/update1143.php?update=<?php echo $id1143 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $num_ppa ?></td>
                        <td class="text-center"><?php echo $t_ppa ?></td>
                        <td class="text-center"><?php echo $short_des ?></td>
                        <td class="text-center"><?php echo $total_cost ?></td>
                        <td class="text-center"><?php echo $fund_src ?></td>
                        
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--This div is Research 11.5.4-->
        <div class=" w-100 h-auto mt-3" id="research1144" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of students that practice flexible work arrangements:</th>
                        <th scope="col">Total number or students that work remotely:</th>
                        <th scope="col">Total number of students that practice condensed working week:</th>
                        <th scope="col">Percent of the students population practice sustainable working arrangements:</th>                        
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research11_4_4`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id1144 = $row['id'];
                            $num_work_arr = $row['num_work_arr'];
                            $num_work_remotely = $row['num_work_remotely'];
                            $num_working_week = $row['num_working_week'];
                            $num_working_arr = $row['num_working_arr'];
                           
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg11/delete/delete1144.php?delete=<?php echo $id1144 ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg11/update/update1144.php?update=<?php echo $id1144 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $num_work_arr ?></td>
                        <td class="text-center"><?php echo $num_work_remotely ?></td>
                        <td class="text-center"><?php echo $num_working_week ?></td>
                        <td class="text-center"><?php echo $num_working_arr ?></td>
                        
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--This div is Research 11.5.5-->
        <div class=" w-100 h-auto mt-3" id="research1145" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of students who live in their own house</th>
                        <th scope="col">Total number of students who are living with their relatives</th>
                        <th scope="col">Total number of students who stays at the boarding house</th>
                        <th scope="col">Total number of students who rents apartment</th>
                        <th scope="col">Total number of students who stays at the dormitory:</th>
                        <th scope="col">% of the students population live in their own house.</th>
                        <th scope="col">% of the students population are living with their relatives</th>
                        <th scope="col">% of the students population stays at the boarding house</th>   
                        <th scope="col">% of the students population rent in the apartment</th>
                        <th scope="col">% of the students population stays at the dormitory</th>
                        <th scope="col">Total number of PPAs for affordable housing for students</th>
                        <th scope="col">Total number of students provided with housing</th>                           
                        <th scope="col">Title of PPA</th>   
                        <th scope="col">Short description</th>
                        <th scope="col">Total Cost</th>
                        <th scope="col">Fund Source</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research11_4_5`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id1145 = $row['id'];
                            $emp_ownHouse = $row['emp_ownHouse'];
                            $emp_Relatives = $row['emp_Relatives'];
                            $emp_board = $row['emp_board'];
                            $emp_rent = $row['emp_rent'];
                            $emp_dorm = $row['emp_dorm'];
                            $Pemp_ownHouse = $row['Pemp_ownHouse'];
                            $Pemp_Relatives = $row['Pemp_Relatives'];
                            $Pemp_board = $row['Pemp_board'];
                            $Pemp_rent = $row['Pemp_rent'];
                            $Pemp_dorm = $row['Pemp_dorm'];
                            $PPA_housing = $row['PPA_housing'];
                            $emp_provided = $row['emp_provided'];
                            $titlePPA = $row['titlePPA'];
                            $short_descrip = $row['short_descrip'];
                            $Totalcost = $row['Totalcost'];
                            $Fund_source = $row['Fund_source'];
                           
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg11/delete/delete1145.php?delete=<?php echo $id1145 ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg11/update/update1145.php?update=<?php echo $id1145 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $emp_ownHouse ?></td>
                        <td class="text-center"><?php echo $emp_Relatives ?></td>
                        <td class="text-center"><?php echo $emp_board ?></td>
                        <td class="text-center"><?php echo $emp_rent ?></td>
                        <td class="text-center"><?php echo $emp_dorm ?></td>
                        <td class="text-center"><?php echo $Pemp_ownHouse ?></td>
                        <td class="text-center"><?php echo $Pemp_Relatives ?></td>
                        <td class="text-center"><?php echo $Pemp_board ?></td>
                        <td class="text-center"><?php echo $Pemp_rent ?></td>
                        <td class="text-center"><?php echo $Pemp_rent ?></td>
                        <td class="text-center"><?php echo $Pemp_dorm ?></td>
                        <td class="text-center"><?php echo $emp_provided ?></td>
                        <td class="text-center"><?php echo $titlePPA ?></td>
                        <td class="text-center"><?php echo $short_descrip ?></td>
                        <td class="text-center"><?php echo $Totalcost ?></td>
                        <td class="text-center"><?php echo $Fund_source ?></td>
                        
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

            <!--This div is Research 11.5.6-->
        <div class=" w-100 h-auto mt-3" id="research1146" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of students who live in their own house</th>
                        <th scope="col">Total number of students who are living with their relatives</th>
                        <th scope="col">Total number of students who stays at the boarding house</th>
                        <th scope="col">Total number of students who rents apartment</th>
                        <th scope="col">Total number of students who stays at the dormitory:</th>
                        <th scope="col">% of the student population live in their own house.</th>
                        <th scope="col">% of the student population are living with their relatives</th>
                        <th scope="col">% of the student population stays at the boarding house</th>   
                        <th scope="col">% of the student population rent in the apartment</th>
                        <th scope="col">% of the student population stays at the dormitory</th>
                        <th scope="col">Total number of PPAs for affordable housing for students</th>
                        <th scope="col">Total number of students provided with housing</th>                           
                        <th scope="col">Title of PPA</th>   
                        <th scope="col">Short description</th>
                        <th scope="col">Total Cost</th>
                        <th scope="col">Fund Source</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research11_4_6`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id1146 = $row['id'];
                            $stud_ownHouse = $row['stud_ownHouse'];
                            $stud_Relatives = $row['stud_Relatives'];
                            $stud_board = $row['stud_board'];
                            $stud_rent = $row['stud_rent'];
                            $stud_dorm = $row['stud_dorm'];
                            $studPemp_ownHouse = $row['studPemp_ownHouse'];
                            $studPemp_Relatives = $row['studPemp_Relatives'];
                            $studPemp_board = $row['studPemp_board'];
                            $studPemp_rent = $row['studPemp_rent'];
                            $studPemp_dorm = $row['studPemp_dorm'];
                            $studPPA_housing = $row['studPPA_housing'];
                            $stud_provided = $row['stud_provided'];
                            $stud_titlePPA = $row['stud_titlePPA'];
                            $stud_short_descrip = $row['stud_short_descrip'];
                            $stud_Totalcost = $row['stud_Totalcost'];
                            $stud_Fund_source = $row['stud_Fund_source'];
                           
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg11/delete/delete1146.php?delete=<?php echo $id1146 ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg11/update/update1146.php?update=<?php echo $id1146 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $stud_ownHouse ?></td>
                        <td class="text-center"><?php echo $stud_Relatives ?></td>
                        <td class="text-center"><?php echo $stud_board ?></td>
                        <td class="text-center"><?php echo $stud_rent ?></td>
                        <td class="text-center"><?php echo $stud_dorm ?></td>
                        <td class="text-center"><?php echo $studPemp_ownHouse ?></td>
                        <td class="text-center"><?php echo $studPemp_Relatives ?></td>
                        <td class="text-center"><?php echo $studPemp_board ?></td>
                        <td class="text-center"><?php echo $studPemp_rent ?></td>
                        <td class="text-center"><?php echo $studPemp_dorm ?></td>
                        <td class="text-center"><?php echo $studPPA_housing ?></td>
                        <td class="text-center"><?php echo $stud_provided ?></td>
                        <td class="text-center"><?php echo $stud_titlePPA ?></td>
                        <td class="text-center"><?php echo $stud_short_descrip ?></td>
                        <td class="text-center"><?php echo $stud_Totalcost ?></td>
                        <td class="text-center"><?php echo $stud_Fund_source ?></td>
                        
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--This div is Research 11.5.7-->
        <div class=" w-100 h-auto mt-3" id="research1147" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of PPAs for affordable housing for students</th>
                        <th scope="col">Total number of students provided with housing</th>                           
                        <th scope="col">Title of PPA</th>   
                        <th scope="col">Short description</th>
                        <th scope="col">Total Cost</th>
                        <th scope="col">Fund Source</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research11_5_7`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id1147 = $row['id'];
                            $totalPed = $row['totalPed'];
                            $totalPed_PPA = $row['totalPed_PPA'];
                            $PED_PPA = $row['PED_PPA'];
                            $PED_SHORTDESCRIP = $row['PED_SHORTDESCRIP'];
                            $ped_totalcost = $row['ped_totalcost'];
                            $pedFund = $row['pedFund'];
                           
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg11/delete/delete1147.php?delete=<?php echo $id1147 ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg11/update/update1147.php?update=<?php echo $id1147 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $totalPed ?></td>
                        <td class="text-center"><?php echo $totalPed_PPA ?></td>
                        <td class="text-center"><?php echo $PED_PPA ?></td>
                        <td class="text-center"><?php echo $PED_SHORTDESCRIP ?></td>
                        <td class="text-center"><?php echo $ped_totalcost ?></td>
                        <td class="text-center"><?php echo $pedFund ?></td>
                        
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--This div is Research 11.5.8-->
        <div class=" w-100 h-auto mt-3" id="research1148" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of collaborations with local authority for the affordable housing for employees and students:</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research11_5_8`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id1148 = $row['id'];
                            $num_of_collab = $row['num_of_collab'];

                           
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg11/delete/delete1148.php?delete=<?php echo $id1148 ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg11/update/update1148.php?update=<?php echo $id1148 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $num_of_collab ?></td>

                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--This div is Research 11.5.9-->
        <div class=" w-100 h-auto mt-3" id="research1149" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of policies and/or plans in adhering to sustainable standards of new builds:</th>
                        <th scope="col">Total number of campus practices for sustainable standards of new builds:</th>

                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research11_5_9`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id1149 = $row['id'];
                            $TotalNumPol = $row['TotalNumPol'];
                            $TotalNumPrac = $row['TotalNumPrac'];

                           
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg11/delete/delete1149.php?delete=<?php echo $id1149 ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg11/update/update1149.php?update=<?php echo $id1149 ?>"
                                class="btn btn-success">Update</a>
                        </td>

                        <td class="text-center"><?php echo $num_of_collab ?></td>
                        <td class="text-center"><?php echo $TotalNumPrac ?></td>

                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--This div is Research 11.5.10-->
        <div class=" w-100 h-auto mt-3" id="research1150" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of policies and/or plans in building infrastructure on brownfield sites:</th>
                        <th scope="col">Total number of campus infrastructure built on brownfield sites:</th>
                        <th scope="col">Total Cost:</th>
                        <th scope="col">Fund Source:</th>

                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research11_5_10`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id1150 = $row['id'];
                            $TotalNum_Brownfield = $row['TotalNum_Brownfield'];
                            $totalnum_Infas = $row['totalnum_Infas'];
                            $brownTotal = $row['brownTotal'];
                            $brownFund = $row['brownFund'];

                           
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg11/delete/delete1150.php?delete=<?php echo $id1150 ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg11/update/update1150.php?update=<?php echo $id1150 ?>"
                                class="btn btn-success">Update</a>
                        </td>

                        <td class="text-center"><?php echo $TotalNum_Brownfield ?></td>
                        <td class="text-center"><?php echo $totalnum_Infas ?></td>
                        <td class="text-center"><?php echo $brownTotal ?></td>
                        <td class="text-center"><?php echo $brownFund ?></td>

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

//for exit in message
document.addEventListener("DOMContentLoaded", function() {
        var closeBtn = document.getElementById("closeBtn");

        if (closeBtn) {
            closeBtn.addEventListener("click", function(event) {
                event.preventDefault();
                var messageContainer = document.querySelector(".message-container");
                messageContainer.style.display = "none";
                window.location.href = "up_delsdg11.php";
            });
        }
    });
</script>