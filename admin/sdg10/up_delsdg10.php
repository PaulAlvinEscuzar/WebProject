<?php
include('../../includes/adminHead/header10.php');
include("../../includes/db.php");
?>
<?php if (isset($_GET['message'])) { ?>
    <div id="messageContainer">
        <p class="text-center bg-gradient text-light p-4" style="background-color: #e01a83;">
            <?php echo $_GET['message']; ?>
        </p>
    </div>
<?php } ?>
<div class="container">
    <div class="row-mt-5">
        <?php
        include '../../includes/updatesdgdd/ddsdg10.php';
        ?>

        <!-- res 10.1.1 -->
        <div class="w-100 h-auto mt-3" id="research1011" style="display: block;">
            <h2 class="text-center pb-5">Research on Reduced Inequalities</h2>
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Year Publication</th>
                        <th scope="col">Total number of citations</th>
                        <th scope="col">Indexed In</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research 10.1.1`";
                    $select = mysqli_query($conn, $sql);

                    // Check for SQL errors
                    if (!$select) {
                        die("Query failed. " . mysqli_error($conn));
                    }

                    // Check if there are rows in the result set
                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id_res1011 = $row['10.1.1 ID'];
                            $title = $row['title'];
                            $author = $row['author'];
                            $yearPub = $row['year_pub'];
                            $no_citations = $row['no_citations'];
                            $indexed = $row['indexedIn'];
                            ?>
                            <tr>
                                <td class="text-center">
                                    <a href="../../admin/sdg10/delete/delete1011.php?delete=<?php echo $id_res1011 ?>"
                                        class="btn btn-danger"
                                        onclick="return confirm('Are you sure to delete this?')">Delete</a>
                                </td>
                                <td class="text-center">
                                    <a href="../../admin/sdg10/update/update1011.php?update=<?php echo $id_res1011 ?>"
                                        class="btn btn-success">Update</a>
                                   </td>
                                <td class="text-center">
                                    <?php echo $title ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $author ?>
                                </td>
                                <td class="text-center">
                                   <?php echo $yearPub ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $no_citations ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $indexed ?>
                                </td>
                            </tr>
                             <?php
                        }
                    } else {
                        echo '<tr><td colspan="7" class="text-center">No records found</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- res 10.3.1 -->
        <div class="w-100 h-auto mt-3" id="research1031" style="display: none;">
            <h2 class="text-center pb-5">Proportion of Students with Disabilities</h2>
            <table class="table table-striped table-bordered table-hover">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col">Disabilities</th>
                        <th scope="col">Male</th>
                        <th scope="col">Female</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research 10.3.1`";
                    $select = mysqli_query($conn, $sql);

                    // Check for SQL errors
                    if (!$select) {
                        die("Query failed. " . mysqli_error($conn));
                    }

                    // Check if there are rows in the result set
                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            ?>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Number of Student with Disabilities"; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numSWDmale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numSWDfemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numSWDtotal']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Psychosocial Disorder"; ?>
                                </td>
                                <td class="text-center">
                                    ---
                                </td>
                                <td class="text-center">
                                    ---
                                </td>
                                <td class="text-center">
                                    <?php echo $row['psychosocialDis_S']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Disability caused by Chronic Illness"; ?>
                                </td>
                                <td class="text-center">
                                    ---
                                </td>
                                <td class="text-center">
                                    ---
                                </td>
                                <td class="text-center">
                                    <?php echo $row['CI_Dis_S']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Learning Disability"; ?>
                                </td>
                                <td class="text-center">
                                    ---
                                </td>
                                <td class="text-center">
                                    ---
                                </td>
                                <td class="text-center">
                                    <?php echo $row['learningDis_S']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Visual Disability"; ?>
                                </td>
                                <td class="text-center">
                                    ---
                                </td>
                                <td class="text-center">
                                    ---
                                </td>
                                <td class="text-center">
                                    <?php echo $row['visualDis_S']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Orthopedic/Locomotor Disability"; ?>
                                </td>
                                <td class="text-center">
                                    ---
                                </td>
                                <td class="text-center">
                                    ---
                                </td>
                                <td class="text-center">
                                    <?php echo $row['locoDis_S']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Communication Disability"; ?>
                                </td>
                                <td class="text-center">
                                    ---
                                </td>
                                <td class="text-center">
                                    ---
                                </td>
                                <td class="text-center">
                                    <?php echo $row['commDis_S']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Student with PWD ID"; ?>
                                </td>
                                <td class="text-center">
                                    ---
                                </td>
                                <td class="text-center">
                                    ---
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numSWPI_S']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center" colspan="4">
                                    <a href="../../admin/sdg10/update/update1031.php?update=<?php echo $row['10.3.1 ID'] ?>" 
                                class="btn btn-success">Update All</a>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo '<tr><td colspan="4" class="text-center">No records found</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- res 10.3.2 -->
        <div class="w-100 h-auto mt-3" id="research1032" style="display: none;">
            <h2 class="text-center pb-5">Proportion of Employees with Disabilities</h2>
            <table class="table table-striped table-bordered table-hover">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col">Disabilities</th>
                        <th scope="col">Male</th>
                        <th scope="col">Female</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research 10.3.2`";
                    $select = mysqli_query($conn, $sql);

                    // Check for SQL errors
                    if (!$select) {
                        die("Query failed. " . mysqli_error($conn));
                    }

                    // Check if there are rows in the result set
                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            ?>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Number of Employees with Disabilities"; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numEWDmale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numEWDfemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numEWDtotal']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Psychiatric Disorder"; ?>
                                </td>
                                <td class="text-center">
                                    ---
                                </td>
                                <td class="text-center">
                                    ---
                                </td>
                                <td class="text-center">
                                    <?php echo $row['psychiatricDis_E']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Disability caused by Chronic Illness"; ?>
                                </td>
                                <td class="text-center">
                                    ---
                                </td>
                                <td class="text-center">
                                    ---
                                </td>
                                <td class="text-center">
                                    <?php echo $row['CI_Dis_E']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Learning Disability"; ?>
                                </td>
                                <td class="text-center">
                                    ---
                                </td>
                                <td class="text-center">
                                    ---
                                </td>
                                <td class="text-center">
                                    <?php echo $row['learningDis_E']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Visual Disability"; ?>
                                </td>
                                <td class="text-center">
                                    ---
                                </td>
                                <td class="text-center">
                                    ---
                                </td>
                                <td class="text-center">
                                    <?php echo $row['visualDis_E']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Orthopedic/Locomotor Disability"; ?>
                                </td>
                                <td class="text-center">
                                    ---
                                </td>
                                <td class="text-center">
                                    ---
                                </td>
                                <td class="text-center">
                                    <?php echo $row['locoDis_E']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Communication Disability"; ?>
                                </td>
                                <td class="text-center">
                                    ---
                                </td>
                                <td class="text-center">
                                    ---
                                </td>
                                <td class="text-center">
                                    <?php echo $row['commDis_E']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Congenital"; ?>
                                </td>
                                <td class="text-center">
                                    ---
                                </td>
                                <td class="text-center">
                                    ---
                                </td>
                                <td class="text-center">
                                    <?php echo $row['congenital_E']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Employees with PWD ID"; ?>
                                </td>
                                <td class="text-center">
                                    ---
                                </td>
                                <td class="text-center">
                                    ---
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numEWPI']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center" colspan="4">
                                    <a href="../../admin/sdg10/update/update1032.php?update=<?php echo $row['10.3.2 ID'] ?>" 
                                class="btn btn-success">Update All</a>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo '<tr><td colspan="13" class="text-center">No records found</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- res 10.4.1 -->
        <div class="w-100 h-auto mt-3" id="research1041" style="display: none;">
            <h2 class="text-center pb-5">Proportion of Students Who Belong to IPs</h2>
            <table class="table table-striped table-bordered table-hover">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col">Action</th>
                        <th scope="col" colspan="3">Students Who Belong to IPs</th>
                    </tr>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Male</th>
                        <th scope="col">Female</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research 10.4.1`";
                    $select = mysqli_query($conn, $sql);

                    // Check for SQL errors
                    if (!$select) {
                        die("Query failed. " . mysqli_error($conn));
                    }

                    // Check if there are rows in the result set
                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            ?>
                            <tr>
                                <td class="text-center">
                                    <a href="../../admin/sdg10/update/update1041.php?update=<?php echo $row['10.4.1 ID'] ?>"
                                        class="btn btn-success">Update</a>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numIPmem_Smale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numIPmem_Sfemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numIPmem_Stotal']; ?>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo '<tr><td colspan="5" class="text-center">No records found</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- res 10.4.2 -->
        <div class="w-100 h-auto mt-3" id="research1042" style="display: none;">
            <h2 class="text-center pb-5">Proportion of Employees Who Belong to IPs</h2>
            <table class="table table-striped table-bordered table-hover">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col">Action</th>
                        <th scope="col" colspan="3">Employees Who Belong to IPs</th>
                    </tr>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Male</th>
                        <th scope="col">Female</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research 10.4.2`";
                    $select = mysqli_query($conn, $sql);

                    // Check for SQL errors
                    if (!$select) {
                        die("Query failed. " . mysqli_error($conn));
                    }

                    // Check if there are rows in the result set
                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            ?>
                            <tr>
                                <td class="text-center">
                                    <a href="../../admin/sdg10/update/update1042.php?update=<?php echo $row['10.4.2 ID'] ?>"
                                        class="btn btn-success">Update</a>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numIPmem_Emale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numIPmem_Efemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numIPmem_Etotal']; ?>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo '<tr><td colspan="5" class="text-center">No records found</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- res 10.5.1 -->
        <div class="w-100 h-auto mt-3" id="research1051" style="display: none;">
            <h2 class="text-center pb-5">Proportion of Students who are Member of LGBTQIA+ Group</h2>
            <table class="table table-striped table-bordered table-hover">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col">Action</th>
                        <th scope="col">Students who are Member of LGBTQIA+ Group</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research 10.5.1`";
                    $select = mysqli_query($conn, $sql);

                    // Check for SQL errors
                    if (!$select) {
                        die("Query failed. " . mysqli_error($conn));
                    }

                    // Check if there are rows in the result set
                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            ?>
                            <tr>
                                <td class="text-center">
                                    <a href="../../admin/sdg10/update/update1051.php?update=<?php echo $row['10.5.1 ID'] ?>"
                                        class="btn btn-success">Update</a>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numLGBT_Stotal']; ?>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo '<tr><td colspan="3" class="text-center">No records found</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- res 10.5.2 -->
        <div class="w-100 h-auto mt-3" id="research1052" style="display: none;">
            <h2 class="text-center pb-5">Proportion of Employees who are Member of LGBTQIA+ Group</h2>
            <table class="table table-striped table-bordered table-hover">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col">Action</th>
                        <th scope="col">Employees who are Member of LGBTQIA+ Group</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research 10.5.2`";
                    $select = mysqli_query($conn, $sql);

                    // Check for SQL errors
                    if (!$select) {
                        die("Query failed. " . mysqli_error($conn));
                    }

                    // Check if there are rows in the result set
                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            ?>
                            <tr>
                                <td class="text-center">
                                    <a href="../../admin/sdg10/update/update1052.php?update=<?php echo $row['10.5.2 ID'] ?>"
                                        class="btn btn-success">Update</a>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numLGBT_Etotal']; ?>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo '<tr><td colspan="3" class="text-center">No records found</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- res 10.6.1 -->
        <div class="w-100 h-auto mt-3" id="research1061" style="display: none;">
            <h2 class="text-center pb-5">Proportion of Students based on Religion</h2>
            <table class="table table-striped table-bordered table-hover">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col">Religion</th>
                        <th scope="col">Male</th>
                        <th scope="col">Female</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research 10.6.1`";
                    $select = mysqli_query($conn, $sql);

                    // Check for SQL errors
                    if (!$select) {
                        die("Query failed. " . mysqli_error($conn));
                    }

                    // Check if there are rows in the result set
                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            ?>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Religious Group"; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numReligiousGroup_Smale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numReligiousGroup_Sfemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numReligiousGroup_Stotal']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Aglipayan"; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numAglipayan_Smale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numAglipayan_Sfemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numAglipayan_Stotal']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Born Again"; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numBornAgain_Smale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numBornAgain_Sfemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numBornAgain_Stotal']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Buddhism"; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numBuddhism_Smale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numBuddhism_Sfemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numBuddhism_Stotal']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Hinduism"; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numHinduism_Smale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numHinduism_Sfemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numHinduism_Stotal']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Iglesia ni Cristo"; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numINC_Smale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numINC_Sfemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numINC_Stotal']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Islam"; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numIslam_Smale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numIslam_Sfemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numIslam_Stotal']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Jehovah's Witnesses"; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numJW_Smale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numJW_Sfemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numJW_Stotal']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Latter_Day Saints"; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numLDS_Smale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numLDS_Sfemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numLDS_Stotal']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Protestant"; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numProtestant_Smale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numProtestant_Sfemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numProtestant_Stotal']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Roman Catholic"; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numRC_Smale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numRC_Sfemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numRC_Stotal']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Seventh_day Adventists"; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numSA_Smale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numSA_Sfemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numSA_Stotal']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Others"; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numOthers_Smale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numOthers_Sfemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numOthers_Stotal']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "No Religion"; ?>
                                </td>
                                <td class="text-center">
                                    ---
                                </td>
                                <td class="text-center">
                                    ---
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numNoReligion_Stotal']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center" colspan="4">
                                    <a href="../../admin/sdg10/update/update1061.php?update=<?php echo $row['10.6.1 ID'] ?>" 
                                class="btn btn-success">Update All</a>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo '<tr><td colspan="4" class="text-center">No records found</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- res 10.6.2 -->
        <div class="w-100 h-auto mt-3" id="research1062" style="display: none;">
            <h2 class="text-center pb-5">Proportion of Employees based on Religion</h2>
            <table class="table table-striped table-bordered table-hover">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col">Religion</th>
                        <th scope="col">Male</th>
                        <th scope="col">Female</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research 10.6.2`";
                    $select = mysqli_query($conn, $sql);

                    // Check for SQL errors
                    if (!$select) {
                        die("Query failed. " . mysqli_error($conn));
                    }

                    // Check if there are rows in the result set
                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            ?>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Religious Group"; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numReligiousGroup_Emale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numReligiousGroup_Efemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numReligiousGroup_Etotal']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Aglipayan"; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numAglipayan_Emale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numAglipayan_Efemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numAglipayan_Etotal']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Born Again"; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numBornAgain_Emale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numBornAgain_Efemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numBornAgain_Etotal']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Buddhism"; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numBuddhism_Emale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numBuddhism_Efemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numBuddhism_Etotal']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Hinduism"; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numHinduism_Emale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numHinduism_Efemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numHinduism_Etotal']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Iglesia ni Cristo"; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numINC_Emale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numINC_Efemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numINC_Etotal']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Islam"; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numIslam_Emale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numIslam_Efemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numIslam_Etotal']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Jehovah's Witnesses"; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numJW_Emale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numJW_Efemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numJW_Etotal']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Latter_Day Saints"; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numLDS_Emale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numLDS_Efemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numLDS_Etotal']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Protestant"; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numProtestant_Emale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numProtestant_Efemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numProtestant_Etotal']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Roman Catholic"; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numRC_Emale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numRC_Efemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numRC_Etotal']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Seventh_day Adventists"; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numSA_Emale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numSA_Efemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numSA_Etotal']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Others"; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numOthers_Emale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numOthers_Efemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numOthers_Etotal']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "No Religion"; ?>
                                </td>
                                <td class="text-center">
                                    ---
                                </td>
                                <td class="text-center">
                                    ---
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numNoReligion_Etotal']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center" colspan="4">
                                    <a href="../../admin/sdg10/update/update1062.php?update=<?php echo $row['10.6.2 ID'] ?>" 
                                class="btn btn-success">Update All</a>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo '<tr><td colspan="4" class="text-center">No records found</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- res 10.7.1 -->
        <div class="w-100 h-auto mt-3" id="research1071" style="display: none;">
            <h2 class="text-center pb-5">Number of Refugees</h2>
            <table class="table table-striped table-bordered table-hover">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col">Action</th>
                        <th scope="col" colspan="3">Number of Refugees</th>
                    </tr>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Male</th>
                        <th scope="col">Female</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research 10.7.1`";
                    $select = mysqli_query($conn, $sql);

                    // Check for SQL errors
                    if (!$select) {
                        die("Query failed. " . mysqli_error($conn));
                    }

                    // Check if there are rows in the result set
                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            ?>
                            <tr>
                                <td class="text-center">
                                    <a href="../../admin/sdg10/update/update1071.php?update=<?php echo $row['10.7.1 ID'] ?>"
                                        class="btn btn-success">Update</a>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numRefugee_Smale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numRefugee_Sfemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numRefugee_Stotal']; ?>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo '<tr><td colspan="4" class="text-center">No records found</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- res 10.7.2 -->
        <div class="w-100 h-auto mt-3" id="research1072" style="display: none;">
            <h2 class="text-center pb-5">Proportion of Employees Who are Refugees</h2>
            <table class="table table-striped table-bordered table-hover">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col">Action</th>
                        <th scope="col" colspan="3">Employees Who are Refugees</th>
                    </tr>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Male</th>
                        <th scope="col">Female</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research 10.7.2`";
                    $select = mysqli_query($conn, $sql);

                    // Check for SQL errors
                    if (!$select) {
                        die("Query failed. " . mysqli_error($conn));
                    }

                    // Check if there are rows in the result set
                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            ?>
                            <tr>
                                <td class="text-center">
                                    <a href="../../admin/sdg10/update/update1072.php?update=<?php echo $row['10.7.2 ID'] ?>"
                                        class="btn btn-success">Update</a>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numRefugee_Emale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numRefugee_Efemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numRefugee_Etotal']; ?>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo '<tr><td colspan="4" class="text-center">No records found</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- res 10.8.1 -->
        <div class="w-100 h-auto mt-3" id="research1081" style="display: none;">
            <h2 class="text-center pb-5">Non-discriminatory Admissions Policy</h2>
            <table class="table table-striped table-bordered table-hover">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Title of the PPA</th>
                        <th scope="col">Short Description of the PPA</th>
                        <th scope="col">Total Cost</th>
                        <th scope="col">Funding Source</th>
                        <th scope="col">Evidence</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research 10.8.1`";
                    $select = mysqli_query($conn, $sql);

                    // Check for SQL errors
                    if (!$select) {
                        die("Query failed. " . mysqli_error($conn));
                    }

                    // Check if there are rows in the result set
                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            ?>
                            <tr>
                                <td class="text-center">
                                    <a href="../../admin/sdg10/delete/delete1081.php?delete=<?php echo $row['10.8.1 ID'] ?>"
                                        class="btn btn-danger"
                                        onclick="return confirm('Are you sure to delete this?')">Delete</a>
                                </td>
                                <td class="text-center">
                                    <a href="../../admin/sdg10/update/update1081.php?update=<?php echo $row['10.8.1 ID'] ?>"
                                        class="btn btn-success">Update</a>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['PPA1081title']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['PPA1081shortDesc']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['ppa1081T_Cost']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['ppa1081Fsource']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['PPA1081evidence']; ?>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo '<tr><td colspan="6" class="text-center">No records found</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- res 10.8.2 -->
        <div class="w-100 h-auto mt-3" id="research1082" style="display: none;">
            <h2 class="text-center pb-5">Access to University Underrepresented Groups Applicant</h2>
            <table class="table table-striped table-bordered table-hover">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col">Underrepresented Group</th>
                        <th scope="col">Male (Student)</th>
                        <th scope="col">Female (Student)</th>
                        <th scope="col">Total (Student)</th>
                        <th scope="col">Male (Applicant)</th>
                        <th scope="col">Female (Applicant)</th>
                        <th scope="col">Total (Applicant)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research 10.8.2`";
                    $select = mysqli_query($conn, $sql);

                    // Check for SQL errors
                    if (!$select) {
                        die("Query failed. " . mysqli_error($conn));
                    }

                    // Check if there are rows in the result set
                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            ?>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Low Income Family"; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numLIFapplicant_Smale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numLIFapplicant_Sfemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numLIFapplicant_Stotal']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numLIFapplicant_Jmale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numLIFapplicant_Jfemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numLIFapplicant_Jtotal']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "LGBTQA+"; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numLGBTapplicant_Smale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numLGBTapplicant_Sfemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numLGBTapplicant_Stotal']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numLGBTapplicant_Jmale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numLGBTapplicant_Jfemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numLGBTapplicant_Jtotal']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Refugee"; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numRefugeeApplicant_Smale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numRefugeeApplicant_Sfemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numRefugeeApplicant_Stotal']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numRefugeeApplicant_Jmale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numRefugeeApplicant_Jfemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numRefugeeApplicant_Jtotal']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Disabled"; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numDisApplicant_Smale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numDisApplicant_Sfemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numDisApplicant_Stotal']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numDisApplicant_Jmale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numDisApplicant_Jfemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numDisApplicant_Jtotal']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Child of Solo Parent"; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numCoSPapplicant_Smale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numCoSPapplicant_Sfemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numCoSPapplicant_Stotal']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numCoSPapplicant_Jmale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numCoSPapplicant_Jfemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numCoSPapplicant_Jtotal']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <?php echo "Indigenous People"; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numIPapplicant_Smale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numIPapplicant_Sfemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numIPapplicant_Stotal']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numIPapplicant_Jmale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numIPapplicant_Jfemale']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['numIPapplicant_Jtotal']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center" colspan="7">
                                <a href="../../admin/sdg10/update/update1082.php?update=<?php echo $row['10.8.2 ID'] ?>" 
                                class="btn btn-success">Update All</a>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo '<tr><td colspan="7" class="text-center">No records found</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- res 10.8.3 -->
        <div class="w-100 h-auto mt-3" id="research1083" style="display: none;">
            <h2 class="text-center pb-5">Access to University Underrepresented Groups Recruit</h2>
            <table class="table table-striped table-bordered table-hover">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Title/Type of Recruitment Programs</th>
                        <th scope="col">Short Description</th>
                        <th scope="col">Total Cost</th>
                        <th scope="col">Funding Source</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research 10.8.3`";
                    $select = mysqli_query($conn, $sql);

                    // Check for SQL errors
                    if (!$select) {
                        die("Query failed. " . mysqli_error($conn));
                    }

                    // Check if there are rows in the result set
                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            ?>
                            <tr>
                                <td class="text-center">
                                    <a href="../../admin/sdg10/delete/delete1083.php?delete=<?php echo $row['10.8.3 ID'] ?>"
                                        class="btn btn-danger"
                                        onclick="return confirm('Are you sure to delete this?')">Delete</a>
                                </td>
                                <td class="text-center">
                                    <a href="../../admin/sdg10/update/update1083.php?update=<?php echo $row['10.8.3 ID'] ?>"
                                        class="btn btn-success">Update</a>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['RPtitle']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['RPshortDesc']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['rpT_Cost']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['rpFsource']; ?>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo '<tr><td colspan="6" class="text-center">No records found</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- res 10.8.4 -->
        <div class="w-100 h-auto mt-3" id="research1084" style="display: none;">
            <h2 class="text-center pb-5">Anti-Discrimination Policies</h2>
            <table class="table table-striped table-bordered table-hover">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Title of the PPA</th>
                        <th scope="col">Short Description of the PPA</th>
                        <th scope="col">Total Cost</th>
                        <th scope="col">Funding Source</th>
                        <th scope="col">Evidence</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research 10.8.4`";
                    $select = mysqli_query($conn, $sql);

                    // Check for SQL errors
                    if (!$select) {
                        die("Query failed. " . mysqli_error($conn));
                    }

                    // Check if there are rows in the result set
                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            ?>
            <tr>
                <td class="text-center">
                    <a href="../../admin/sdg10/delete/delete1084.php?delete=<?php echo $row['10.8.4 ID'] ?>"
                        class="btn btn-danger"
                        onclick="return confirm('Are you sure to delete this?')">Delete</a>
                </td>
                <td class="text-center">
                    <a href="../../admin/sdg10/update/update1084.php?update=<?php echo $row['10.8.4 ID'] ?>"
                        class="btn btn-success">Update</a>
                </td>
                <td class="text-center">
                    <?php echo $row['PPA1084title']; ?>
                </td>
                <td class="text-center">
                    <?php echo $row['PPA1084shortDesc']; ?>
                </td>
                <td class="text-center">
                    <?php echo $row['ppa1084T_Cost']; ?>
                </td>
                <td class="text-center">
                    <?php echo $row['ppa1084Fsource']; ?>
                </td>
                <td>
                    <?php echo $row['PPA1084evidence']; ?>
                </td>
            </tr>
            <?php
                        }
                    } else {
                        echo '<tr><td colspan="5" class="text-center">No records found</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- res 10.8.5 -->
        <div class="w-100 h-auto mt-3" id="research1085" style="display: none;">
            <h2 class="text-center pb-5">Campus Diversity Officer</h2>
            <table class="table table-striped table-bordered table-hover">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col">Action</th>
                        <th scope="col">Is there an existence of committee and/or offices?</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research 10.8.5`";
                    $select = mysqli_query($conn, $sql);

                    // Check for SQL errors
                    if (!$select) {
                        die("Query failed. " . mysqli_error($conn));
                    }

                    // Check if there are rows in the result set
                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            ?>
    <tr>
        <td class="text-center">
            <a href="../../admin/sdg10/update/update1085.php?update=<?php echo $row['10.8.5 ID'] ?>"
                class="btn btn-success">Update</a>
        </td>
        <td class="text-center">
            <?php echo $row['comoffExist']; ?>
        </td>
    </tr>
    <?php
                        }
                    } else {
                        echo '<tr><td colspan="2" class="text-center">No records found</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- res 10.8.6 -->
        <div class="w-100 h-auto mt-3" id="research1086" style="display: none;">
            <h2 class="text-center pb-5">Support for Underrepresented Groups (exclude PWDs)</h2>
            <table class="table table-striped table-bordered table-hover">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Title of the PPA</th>
                        <th scope="col">Short Description of the PPA</th>
                        <th scope="col">Total Cost</th>
                        <th scope="col">Funding Source</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research 10.8.6`";
                    $select = mysqli_query($conn, $sql);

                    // Check for SQL errors
                    if (!$select) {
                        die("Query failed. " . mysqli_error($conn));
                    }

                    // Check if there are rows in the result set
                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            ?>
    <tr>
        <td class="text-center">
            <a href="../../admin/sdg10/delete/delete1086.php?delete=<?php echo $row['10.8.6 ID'] ?>"
                class="btn btn-danger"
                onclick="return confirm('Are you sure to delete this?')">Delete</a>
        </td>
        <td class="text-center">
            <a href="../../admin/sdg10/update/update1086.php?update=<?php echo $row['10.8.6 ID'] ?>"
                class="btn btn-success">Update</a>
        </td>
        <td class="text-center">
            <?php echo $row['PPA1086title']; ?>
        </td>
        <td class="text-center">
            <?php echo $row['PPA1086shortDesc']; ?>
        </td>
        <td class="text-center">
            <?php echo $row['ppa1086T_Cost']; ?>
        </td>
        <td class="text-center">
            <?php echo $row['ppa1086Fsource']; ?>
        </td>
    </tr>
    <?php
                        }
                    } else {
                        echo '<tr><td colspan="6" class="text-center">No records found</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- res 10.8.7 -->
        <div class="w-100 h-auto mt-3" id="research1087" style="display: none;">
            <h2 class="text-center pb-5">Accessible Facilities</h2>
            <table class="table table-striped table-bordered table-hover">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col">Action</th>
                        <th scope="col">PWD Facility Available</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research 10.8.7`";
                    $select = mysqli_query($conn, $sql);

                    // Check for SQL errors
                    if (!$select) {
                        die("Query failed. " . mysqli_error($conn));
                    }

                    // Check if there are rows in the result set
                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            ?>
                            <tr>
                                <td class="text-center">
                                     <a href="../../admin/sdg10/update/update1087.php?update=<?php echo $row['10.8.7 ID'] ?>"
                                        class="btn btn-success">Update</a>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['PWDfacilityAvailable']; ?>
                                </td>
                            </tr>
                        <?php
                        }
                    } else {
                        echo '<tr><td colspan="3" class="text-center">No records found</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
        
        <!-- res 10.8.8 -->
<div class="w-100 h-auto mt-3" id="research1088" style="display: none;">
    <h2 class="text-center pb-5">Disability Support Services for Students and Employees</h2>
    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark text-center">
            <tr>
                <th scope="col" colspan="2">Action</th>
                <th scope="col">Title/Type of Support Service</th>
                <th scope="col">Short Description</th>
                <th scope="col">Total Cost</th>
                <th scope="col">Funding Source</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM `research 10.8.8`";
            $select = mysqli_query($conn, $sql);

            // Check for SQL errors
            if (!$select) {
                die("Query failed. " . mysqli_error($conn));
            }

            // Check if there are rows in the result set
            if (mysqli_num_rows($select) > 0) {
                while ($row = mysqli_fetch_assoc($select)) {
                    ?>
                                    <tr>
                                        <td class="text-center">
                                            <a href="../../admin/sdg10/delete/delete1088.php?delete=<?php echo $row['10.8.8 ID'] ?>"
                                                class="btn btn-danger"
                                                onclick="return confirm('Are you sure to delete this?')">Delete</a>
                                        </td>
                                        <td class="text-center">
                                            <a href="../../admin/sdg10/update/update1088.php?update=<?php echo $row['10.8.8 ID'] ?>"
                                                class="btn btn-success">Update</a>
                                        </td>
                                        <td class="text-center">
                                            <?php echo $row['SStitle']; ?>
                                        </td>
                                        <td class="text-center">
                                            <?php echo $row['SSshortDesc']; ?>
                                        </td>
                                        <td class="text-center">
                                            <?php echo $row['ssT_Cost']; ?>
                                        </td>
                                        <td class="text-center">
                                            <?php echo $row['ssFsource']; ?>
                                        </td>
                                    </tr>
                                    <?php
                }
            } else {
                echo '<tr><td colspan="6" class="text-center">No records found</td></tr>';
            }
            ?>
        </tbody>
    </table>
</div>

        <!-- res 10.8.9 -->
<div class="w-100 h-auto mt-3" id="research1089" style="display: none;">
    <h2 class="text-center pb-5">Disability Access Scheme</h2>
    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark text-center">
            <tr>
                <th scope="col" colspan="2">Action</th>
                <th scope="col">Title/Type of Access Scheme</th>
                <th scope="col">Short Description</th>
                <th scope="col">Total Cost</th>
                <th scope="col">Funding Source</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM `research 10.8.9`";
            $select = mysqli_query($conn, $sql);

            // Check for SQL errors
            if (!$select) {
                die("Query failed. " . mysqli_error($conn));
            }

            // Check if there are rows in the result set
            if (mysqli_num_rows($select) > 0) {
                while ($row = mysqli_fetch_assoc($select)) {
                    ?>
                                    <tr>
                                        <td class="text-center">
                                            <a href="../../admin/sdg10/delete/delete1089.php?delete=<?php echo $row['10.8.9 ID'] ?>"
                                                class="btn btn-danger"
                                                onclick="return confirm('Are you sure to delete this?')">Delete</a>
                                        </td>
                                        <td class="text-center">
                                            <a href="../../admin/sdg10/update/update1089.php?update=<?php echo $row['10.8.9 ID'] ?>"
                                                class="btn btn-success">Update</a>
                                        </td>
                                        <td class="text-center">
                                            <?php echo $row['AStitle']; ?>
                                        </td>
                                        <td class="text-center">
                                            <?php echo $row['ASshortDesc']; ?>
                                        </td>
                                        <td class="text-center">
                                            <?php echo $row['asT_Cost']; ?>
                                        </td>
                                        <td class="text-center">
                                            <?php echo $row['asFsource']; ?>
                                        </td>
                                    </tr>
                                    <?php
                }
            } else {
                echo '<tr><td colspan="6" class="text-center">No records found</td></tr>';
            }
            ?>
        </tbody>
    </table>
</div>

        <!-- res 10.8.10 -->
<div class="w-100 h-auto mt-3" id="research10810" style="display: none;">
    <h2 class="text-center pb-5">Disability Accommodation Policy</h2>
    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark text-center">
            <tr>
                <th scope="col" colspan="2">Action</th>
                <th scope="col">Title of the PPA</th>
                <th scope="col">Short Description of the PPA</th>
                <th scope="col">Total Cost</th>
                <th scope="col">Funding Source</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM `research 10.8.10`";
            $select = mysqli_query($conn, $sql);

            // Check for SQL errors
            if (!$select) {
                die("Query failed. " . mysqli_error($conn));
            }

            // Check if there are rows in the result set
            if (mysqli_num_rows($select) > 0) {
                while ($row = mysqli_fetch_assoc($select)) {
                    ?>
                                    <tr>
                                        <td class="text-center">
                                            <a href="../../admin/sdg10/delete/delete10810.php?delete=<?php echo $row['10.8.10 ID'] ?>"
                                                class="btn btn-danger"
                                                onclick="return confirm('Are you sure to delete this?')">Delete</a>
                                        </td>
                                        <td class="text-center">
                                            <a href="../../admin/sdg10/update/update10810.php?update=<?php echo $row['10.8.10 ID'] ?>"
                                                class="btn btn-success">Update</a>
                                        </td>
                                        <td class="text-center">
                                            <?php echo $row['PPA10810title']; ?>
                                        </td>
                                        <td class="text-center">
                                            <?php echo $row['PPA10810shortDesc']; ?>
                                        </td>
                                        <td class="text-center">
                                            <?php echo $row['ppa10810T_Cost']; ?>
                                        </td>
                                        <td class="text-center">
                                            <?php echo $row['ppa10810Fsource']; ?>
                                        </td>
                                    </tr>
                                    <?php
                }
            } else {
                echo '<tr><td colspan="6" class="text-center">No records found</td></tr>';
            }
            ?>
        </tbody>
    </table>
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


    // for exit in message
    onclick = function () {
        messageContainer.style.display = "none";
        window.location.href = "up_delsdg10.php";
    };
</script>