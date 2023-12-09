<?php
include('../../includes/adminHead/header8.php');
include('../../includes/db.php')


?>
<?php if (isset($_GET['message'])) { ?>
    <div class="message-container bg-success bg-gradient p-4">
    <a class="text-dark float-end text-uppercase text-decoration-none fs-3" href="#" id="closeBtnn">&times;</a>
        <p class="text-center text-light p-2">
            <?php echo $_GET['message']; ?>
        </p>
    </div>
<?php } ?>
<div class="container">
    <div class="row-mt-5">
        <?php
        include '../../includes/menusdg8.php';
        ?>
 
        <!--res 8.1.1-->
        <div class=" w-100 h-auto mt-3" id="research811" style="display: block ;">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover ">
                    <thead class="table-dark text-center">
                        <tr>
                            <th scope="col" colspan="2">Action</th>

                            <th scope="col">Title</th>
                            <th scope="col">Author</th>
                            <th scope="col">Publication Year</th>
                            <th scope="col">Total Citation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM `research8.1.1`";
                        $select = mysqli_query($conn, $sql);
                        
                        if (mysqli_num_rows($select) > 0) {
                            while ($row = mysqli_fetch_assoc($select)) {
                                $id = $row['rid'];
                        
                                $title = $row['title'];
                                $author = $row['author'];
                                $year = $row['year'];
                                $citation = $row['citation'];
                        
                        ?>
                        <tr>
                            <td class="text-center">
                                <a href="./delete/deletesdg8.php?delete=<?php echo "$id" ?>&research=811"
                                    class="btn btn-danger"
                                    onclick="return confirm('Are you sure to delete this?')">Delete</a>
                            </td>
                            <td class="text-center">
                                <a href="./update/updatesdg8.php?update=<?php echo "$id" ?>&research=811"
                                    class="btn btn-success">Update</a>
                            </td>
                            <td class="text-center">
                                <?php echo "$title" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$author" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$year" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$citation" ?>
                            </td>
                        </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!--res 8.2.1-->
        <div class=" w-100 h-auto mt-3" id="research821" style="display: none ;">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover ">
                    <thead class="table-dark text-center">
                        <tr>
                            <th scope="col" colspan="2">Action</th>

                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Total Cost</th>
                            <th scope="col">Fund Source</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM `research8.2.1`";
                        $select = mysqli_query($conn, $sql);
                        
                        if (mysqli_num_rows($select) > 0) {
                            while ($row = mysqli_fetch_assoc($select)) {
                                $id = $row['rid'];
                        
                                $ppa = $row['ppa'];
                                $description = $row['description'];
                                $cost = $row['cost'];
                                $fsource = $row['fund'];
                        
                        ?>
                        <tr>
                            <td class="text-center">
                                <a href="./delete/deletesdg8.php?delete=<?php echo "$id" ?>&research=821"
                                    class="btn btn-danger"
                                    onclick="return confirm('Are you sure to delete this?')">Delete</a>
                            </td>
                            <td class="text-center">
                                <a href="./update/updatesdg8.php?update=<?php echo "$id" ?>&research=821"
                                    class="btn btn-success">Update</a>
                            </td>

                            <td class="text-center">
                                <?php echo "$ppa" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$description" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$cost" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$fsource" ?>
                            </td>
                        </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!--res 8.2.2-->
        <div class=" w-100 h-auto mt-3" id="research822" style="display: none ;">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover ">
                    <thead class="table-dark text-center">
                        <tr>
                            <th scope="col" colspan="2">Action</th>

                            <!-- <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Total Cost</th>
                            <th scope="col">Fund Source</th> -->

                            <th scope="col" colspan="3">GSIS members-M-F</th>
                            <th scope="col" colspan="3">SSS members-M-F</th>
                            <th scope="col" colspan="3">Philhealth members-M-F</th>
                            <th scope="col" colspan="3">pag-ibig members-M-F</th>

                            <th scope="col">GSIS member percentage</th>
                            <th scope="col">SSS member percentage</th>
                            <th scope="col">Philhealth member percentage</th>
                            <th scope="col">Pag-ibig member percentage</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM `research8.2.2`";
                        $select = mysqli_query($conn, $sql);
                        
                        if (mysqli_num_rows($select) > 0) {
                            while ($row = mysqli_fetch_assoc($select)) {
                                $id = $row['rid'];
                        
                        // //        $ppa = $row[''];
                        // //        $description = $row[''];
                        // //        $cost = $row[''];
                        // //        $fsource = $row[''];
                        
                                $gsisTotal = $row['gsisTotal'];
                                $gsisMale = $row['gsisMale'];
                                $gsisFemale = $row['gsisFemale'];
                        
                                $sssTotal = $row['sssTotal'];
                                $sssMale = $row['sssMale'];
                                $sssFemale = $row['sssFemale'];
                        
                                $phTotal = $row['phTotal'];
                                $phMale = $row['phMale'];
                                $phFemale = $row['phFemale'];
                        
                                $piTotal = $row['piTotal'];
                                $piMale = $row['piMale'];
                                $piFemale = $row['piFemale'];
                        
                                $gsispercentage = $row['gsispercentage'];
                                $ssspercentage = $row['ssspercentage'];
                                $phpercentage = $row['phpercentage'];
                                $pipercentage = $row['pipercentage'];
                        
                        ?>
                        <tr>
                            <td class="text-center">
                                <a href="./delete/deletesdg8.php?delete=<?php echo "$id" ?>&research=822"
                                    class="btn btn-danger"
                                    onclick="return confirm('Are you sure to delete this?')">Delete</a>
                            </td>
                            <td class="text-center">
                                <a href="./update/updatesdg8.php?update=<?php echo "$id" ?>&research=822"
                                    class="btn btn-success">Update</a>
                            </td>
                            <!-- <td class="text-center">
                                <?php //echo "ppa" ?>
                            </td>
                            <td class="text-center">
                                <?php //echo "description" ?>
                            </td>
                            <td class="text-center">
                                <?php //echo "cost" ?>
                            </td>
                            <td class="text-center">
                                <?php //echo "fsource" ?>
                            </td> -->

                            <td class="text-center">
                                <?php echo "$gsisTotal" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$gsisMale" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$gsisFemale" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$sssTotal" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$sssMale" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$sssFemale" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$phTotal" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$phMale" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$phFemale" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$piTotal" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$piMale" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$piFemale" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$gsispercentage" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$ssspercentage" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$phpercentage" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$pipercentage" ?>
                            </td>
                        </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!--res 8.2.3-->
        <div class=" w-100 h-auto mt-3" id="research823" style="display: none ;">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover ">
                    <thead class="table-dark text-center">
                        <tr>
                            <th scope="col" colspan="2">Action</th>

                            <!-- <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Fund Source</th>
                            <th scope="col">Total Citations</th> -->

                            <th scope="col">Total Organizatinos</th>

                            <th scope="col" colspan="3">Total Internal Org Members-M-F</th>
                            <th scope="col" colspan="3">Total External Org Members-M-F</th>

                            <th scope="col">Internal org member %</th>
                            <th scope="col">External org member %</th>
                            <th scope="col">Evidence</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM `research8.2.3`";
                        $select = mysqli_query($conn, $sql);
                        
                        if (mysqli_num_rows($select) > 0) {
                            while ($row = mysqli_fetch_assoc($select)) {
                                $id = $row['rid'];
                        
                          //      $ppa = $row[''];
                          //      $description = $row[''];
                          //      $cost = $row[''];
                          //      $fsource = $row[''];
                        
                                $torg = $row['torg'];
                        
                                $tiorg = $row['tiorg'];
                                $tiorgMale = $row['tiorgMale'];
                                $tiorgFemale = $row['tiorgFemale'];
                        
                                $teorg = $row['teorg'];
                                $teorgMale = $row['teorgMale'];
                                $teorgFemale = $row['teorgFemale'];
                        
                                $ipercentage = $row['ipercentage'];
                                $epercentage = $row['epercentage'];
                        
                                $evidence = $row['evidence'];
                        
                        ?>
                        <tr>
                            <td class="text-center">
                                <a href="./delete/deletesdg8.php?delete=<?php echo "$id" ?>&research=823"
                                    class="btn btn-danger"
                                    onclick="return confirm('Are you sure to delete this?')">Delete</a>
                            </td>
                            <td class="text-center">
                                <a href="./update/updatesdg8.php?update=<?php echo "$id" ?>&research=823"
                                    class="btn btn-success">Update</a>
                            </td>
                            <!-- <td class="text-center">
                                <?php //echo "ppa" ?>
                            </td>
                            <td class="text-center">
                                <?php //echo "description" ?>
                            </td>
                            <td class="text-center">
                                <?php //echo "cost" ?>
                            </td>
                            <td class="text-center">
                                <?php //echo "fsource" ?>
                            </td> -->

                            <td class="text-center">
                                <?php echo "$torg" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$tiorg" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$tiorgMale" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$tiorgFemale" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$teorg" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$teorgMale" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$teorgFemale" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$ipercentage" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$epercentage" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$evidence" ?>
                            </td>
                        </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!--res 8.2.4-->
        <div class=" w-100 h-auto mt-3" id="research824" style="display: none ;">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover ">
                    <thead class="table-dark text-center">
                        <tr>
                            <th scope="col" colspan="2">Action</th>

                            <th scope="col">Total employment</th>
                            <th scope="col">Total PPA</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Total Cost</th>
                            <th scope="col">Fund Source</th>

                            <th scope="col">Evidence</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM `research8.2.4`";
                        $select = mysqli_query($conn, $sql);
                        
                        if (mysqli_num_rows($select) > 0) {
                            while ($row = mysqli_fetch_assoc($select)) {
                                $id = $row['rid'];
                        
                                $tpolicy = $row['tpolicy'];
                                $tppa = $row['tppa'];
                        
                                $ppa = $row['ppa'];
                                $description = $row['description'];
                                $cost = $row['cost'];
                                $fsource = $row['fund'];
                        
                                $evidence = $row['evidence'];
                        
                        ?>
                        <tr>
                            <td class="text-center">
                                <a href="./delete/deletesdg8.php?delete=<?php echo "$id" ?>&research=824"
                                    class="btn btn-danger"
                                    onclick="return confirm('Are you sure to delete this?')">Delete</a>
                            </td>
                            <td class="text-center">
                                <a href="./update/updatesdg8.php?update=<?php echo "$id" ?>&research=824"
                                    class="btn btn-success">Update</a>
                            </td>
                            <td class="text-center">
                                <?php echo "$tpolicy" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$tppa" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$ppa" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$description" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$cost" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$fsource" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$evidence" ?>
                            </td>
                        </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!--res 8.2.5-->
        <div class=" w-100 h-auto mt-3" id="research825" style="display: none ;">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover ">
                    <thead class="table-dark text-center">
                        <tr>
                            <th scope="col" colspan="2">Action</th>

                            <th scope="col">Total employment policy</th>
                            <th scope="col">Total PPA</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Total Cost</th>
                            <th scope="col">Fund Source</th>

                            <th scope="col">Evidence</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM `research8.2.5`";
                        $select = mysqli_query($conn, $sql);
                        
                        if (mysqli_num_rows($select) > 0) {
                            while ($row = mysqli_fetch_assoc($select)) {
                                $id = $row['rid'];
                        
                                $temployment = $row['temployment'];
                                $tppa = $row['tppa'];
                        
                                $ppa = $row['ppa'];
                                $description = $row['description'];
                                $cost = $row['cost'];
                                $fsource = $row['fund'];
                        
                                $evidence = $row['evidence'];
                        
                        ?>
                        <tr>
                            <td class="text-center">
                                <a href="./delete/deletesdg8.php?delete=<?php echo "$id" ?>&research=825"
                                    class="btn btn-danger"
                                    onclick="return confirm('Are you sure to delete this?')">Delete</a>
                            </td>
                            <td class="text-center">
                                <a href="./update/updatesdg8.php?update=<?php echo "$id" ?>&research=825"
                                    class="btn btn-success">Update</a>
                            </td>
                            <td class="text-center">
                                <?php echo "$temployment" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$tppa" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$ppa" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$description" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$cost" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$fsource" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$evidence" ?>
                            </td>
                        </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!--res 8.2.6-->
        <div class=" w-100 h-auto mt-3" id="research826" style="display: none ;">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover ">
                    <thead class="table-dark text-center">
                        <tr>
                            <th scope="col" colspan="2">Action</th>

                            <th scope="col">Total Policies</th>
                            <th scope="col">Total PPA</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Total Cost</th>
                            <th scope="col">Fund Source</th>

                            <th scope="col">Evidence</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM `research8.2.6`";
                        $select = mysqli_query($conn, $sql);
                        
                        if (mysqli_num_rows($select) > 0) {
                            while ($row = mysqli_fetch_assoc($select)) {
                                $id = $row['rid'];
                        
                                $tpolicy = $row['tpolicy'];
                                $tppa = $row['tppa'];
                                $ppa = $row['ppa'];
                                $description = $row['description'];
                                $cost = $row['cost'];
                                $fsource = $row['fund'];
                                $evidence = $row['evidence'];
                        
                        ?>
                        <tr>
                            <td class="text-center">
                                <a href="./delete/deletesdg8.php?delete=<?php echo "$id" ?>&research=826"
                                    class="btn btn-danger"
                                    onclick="return confirm('Are you sure to delete this?')">Delete</a>
                            </td>
                            <td class="text-center">
                                <a href="./update/updatesdg8.php?update=<?php echo "$id" ?>&research=826"
                                    class="btn btn-success">Update</a>
                            </td>
                            <td class="text-center">
                                <?php echo "$tpolicy" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$tppa" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$ppa" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$description" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$cost" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$fsource" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$evidence" ?>
                            </td>
                        </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!--res 8.2.7-->
        <div class=" w-100 h-auto mt-3" id="research827" style="display: none ;">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover ">
                    <thead class="table-dark text-center">
                        <tr>
                            <th scope="col" colspan="2">Action</th>

                            <th scope="col">Total Employment Policy</th>
                            <th scope="col">Total PPA</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Total Cost</th>
                            <th scope="col">Fund Source</th>

                            <th scope="col">Evidence</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM `research8.2.7`";
                        $select = mysqli_query($conn, $sql);
                        
                        if (mysqli_num_rows($select) > 0) {
                            while ($row = mysqli_fetch_assoc($select)) {
                                $id = $row['rid'];
                        
                                $tpolicy = $row['tpolicy'];
                                $tppa = $row['tppa'];
                                $ppa = $row['ppa'];
                                $description = $row['description'];
                                $cost = $row['cost'];
                                $fsource = $row['fund'];
                                $evidence = $row['evidence'];
                        
                        ?>
                        <tr>
                            <td class="text-center">
                                <a href="./delete/deletesdg8.php?delete=<?php echo "$id" ?>&research=827"
                                    class="btn btn-danger"
                                    onclick="return confirm('Are you sure to delete this?')">Delete</a>
                            </td>
                            <td class="text-center">
                                <a href="./update/updatesdg8.php?update=<?php echo "$id" ?>&research=827"
                                    class="btn btn-success">Update</a>
                            </td>
                            <td class="text-center">
                                <?php echo "$tpolicy" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$tppa" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$ppa" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$description" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$cost" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$fsource" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$evidence" ?>
                            </td>
                        </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!--res 8.2.8-->
        <div class=" w-100 h-auto mt-3" id="research828" style="display: none ;">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover ">
                    <thead class="table-dark text-center">
                        <tr>
                            <th scope="col" colspan="2">Action</th>

                            <!-- <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Fund Source</th>
                            <th scope="col">Total Citations</th> -->

                            <th scope="col" colspan="3">Salary Grade 3-M-F</th>
                            <th scope="col" colspan="3">Salary Grade 6-M-F</th>
                            <th scope="col" colspan="3">Salary Grade 11-M-F</th>
                            <th scope="col" colspan="3">Salary Grade 12-M-F</th>
                            <th scope="col" colspan="3">Salary Grade 15-M-F</th>
                            <th scope="col" colspan="3">Salary Grade 16-M-F</th>
                            <th scope="col" colspan="3">Salary Grade 17-M-F</th>
                            <th scope="col" colspan="3">Salary Grade 18-M-F</th>
                            <th scope="col" colspan="3">Salary Grade 20-M-F</th>
                            <th scope="col" colspan="3">Salary Grade 21-M-F</th>
                            <th scope="col" colspan="3">Salary Grade 22-M-F</th>
                            <th scope="col" colspan="3">Salary Grade 23-M-F</th>
                            <th scope="col" colspan="3">Salary Grade 29-M-F</th>

                            <th scope="col">Evidence</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM `research8.2.8`";
                        $select = mysqli_query($conn, $sql);
                        
                        if (mysqli_num_rows($select) > 0) {
                            while ($row = mysqli_fetch_assoc($select)) {
                                $id = $row['rid'];
                        
                        // $ppa = $row[''];
                        // $description = $row[''];
                        // $cost = $row[''];
                        // $fsource = $row[''];
                        
                        $sg3 = $row['sg3'];
                        $sgMale1 = $row['sgMale1'];
                        $sgFemale1 = $row['sgFemale1'];
                        
                        $sg6 = $row['sg6'];
                        $sgMale2 = $row['sgMale2'];
                        $sgFemale2 = $row['sgFemale2'];
                        
                        $sg11 = $row['sg11'];
                        $sgMale3 = $row['sgMale3'];
                        $sgFemale3 = $row['sgFemale3'];
                        
                        $sg12 = $row['sg12'];
                        $sgMale4 = $row['sgMale4'];
                        $sgFemale4 = $row['sgFemale4'];
                        
                        $sg15 = $row['sg15'];
                        $sgMale5 = $row['sgMale5'];
                        $sgFemale5 = $row['sgFemale5'];
                        
                        $sg16 = $row['sg16'];
                        $sgMale6 = $row['sgMale6'];
                        $sgFemale6 = $row['sgFemale6'];
                        
                        $sg17 = $row['sg17'];
                        $sgMale7 = $row['sgMale7'];
                        $sgFemale7 = $row['sgFemale7'];
                        
                        $sg18 = $row['sg18'];
                        $sgMale8 = $row['sgMale8'];
                        $sgFemale8 = $row['sgFemale8'];
                        
                        $sg20 = $row['sg20'];
                        $sgMale9 = $row['sgMale9'];
                        $sgFemale9 = $row['sgFemale9'];
                        
                        $sg21 = $row['sg21'];
                        $sgMale10 = $row['sgMale10'];
                        $sgFemale10 = $row['sgFemale10'];
                        
                        $sg22 = $row['sg22'];
                        $sgMale11 = $row['sgMale11'];
                        $sgFemale11 = $row['sgFemale11'];
                        
                        $sg23 = $row['sg23'];
                        $sgMale12 = $row['sgMale12'];
                        $sgFemale12 = $row['sgFemale12'];
                        
                        $sg29 = $row['sg29'];
                        $sgMale13 = $row['sgMale13'];
                        $sgFemale13 = $row['sgFemale13'];
                        
                        $evidence = $row['evidence'];
                        
                        ?>
                        <tr>
                            <td class="text-center">
                                <a href="./delete/deletesdg8.php?delete=<?php echo "$id" ?>&research=828"
                                    class="btn btn-danger"
                                    onclick="return confirm('Are you sure to delete this?')">Delete</a>
                            </td>
                            <td class="text-center">
                                <a href="./update/updatesdg8.php?update=<?php echo "$id" ?>&research=828"
                                    class="btn btn-success">Update</a>
                            </td>
                            <!-- <td class="text-center">
                                <?php // echo "ppa" ?>
                            </td>
                            <td class="text-center">
                                <?php // echo "description" ?>
                            </td>
                            <td class="text-center">
                                <?php // echo "cost" ?>
                            </td>
                            <td class="text-center">
                                <?php // echo "fsource" ?>
                            </td> -->

                            <td class="text-center">
                                <?php echo "$sg3" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$sgMale1" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$sgFemale1" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$sg6" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$sgMale2" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$sgFemale2" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$sg11" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$sgMale3" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$sgFemale3" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$sg12" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$sgMale4" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$sgFemale4" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$sg15" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$sgMale5" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$sgFemale5" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$sg16" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$sgMale6" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$sgFemale6" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$sg17" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$sgMale7" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$sgFemale7" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$sg18" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$sgMale8" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$sgFemale8" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$sg20" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$sgMale9" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$sgFemale9" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$sg21" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$sgMale10" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$sgFemale10" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$sg22" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$sgMale11" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$sgFemale11" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$sg23" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$sgMale12" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$sgFemale12" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$sg29" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$sgMale13" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$sgFemale13" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$evidence" ?>
                            </td>
                        </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!--res 8.2.9-->
        <div class=" w-100 h-auto mt-3" id="research829" style="display: none ;">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover ">
                    <thead class="table-dark text-center">
                        <tr>
                            <th scope="col" colspan="2">Action</th>

                            <th scope="col">Total Employment Practices</th>
                            <th scope="col">Total PPA</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Total Cost</th>
                            <th scope="col">Fund Source</th>

                            <th scope="col">Evidence</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM `research8.2.9`";
                        $select = mysqli_query($conn, $sql);
                        
                        if (mysqli_num_rows($select) > 0) {
                            while ($row = mysqli_fetch_assoc($select)) {
                                $id = $row['rid'];
                        
                                $temployment = $row['temployment'];
                                $tppa = $row['tppa'];
                        
                                $ppa = $row['ppa'];
                                $description = $row['description'];
                                $cost = $row['cost'];
                                $fsource = $row['fund'];
                        
                                $evidence = $row['evidence'];
                        
                        ?>
                        <tr>
                            <td class="text-center">
                                <a href="./delete/deletesdg8.php?delete=<?php echo "$id" ?>&research=829"
                                    class="btn btn-danger"
                                    onclick="return confirm('Are you sure to delete this?')">Delete</a>
                            </td>
                            <td class="text-center">
                                <a href="./update/updatesdg8.php?update=<?php echo "$id" ?>&research=829"
                                    class="btn btn-success">Update</a>
                            </td>
                            <td class="text-center">
                                <?php echo "$temployment" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$tppa" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$ppa" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$description" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$cost" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$fsource" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$evidence" ?>
                            </td>
                        </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!--res 8.3.1-->
        <div class=" w-100 h-auto mt-3" id="research831" style="display: none ;">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover ">
                    <thead class="table-dark text-center">
                        <tr>
                            <th scope="col" colspan="2">Action</th>

                            <!-- <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Fund Source</th>
                            <th scope="col">Total Citations</th> -->

                            <th scope="col" colspan="3">Total employee emp-M-F</th>
                            <th scope="col" colspan="3">Total teaching emp-M-F</th>
                            <th scope="col" colspan="3">Total non-teaching emp-M-F</th>
                            <th scope="col">Evidence</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM `research8.3.1`";
                        $select = mysqli_query($conn, $sql);
                        
                        if (mysqli_num_rows($select) > 0) {
                            while ($row = mysqli_fetch_assoc($select)) {
                                $id = $row['rid'];
                        
                        //        $ppa = $row[''];
                         //       $description = $row[''];
                         //       $cost = $row[''];
                         //       $fsource = $row[''];
                        
                                $temployees = $row['temployees'];
                                $tmMale = $row['tmMale'];
                                $tmFemale = $row['tmFemale'];
                        
                                $tteaching = $row['tteaching'];
                                $ttMale = $row['ttMale'];
                                $ttFemale = $row['ttFemale'];
                        
                                $tnonteaching = $row['tnonteaching'];
                                $tntMale = $row['tntMale'];
                                $tntFemale = $row['tntFemale'];
                        
                                $evidence = $row['evidence'];
                        
                        ?>
                        <tr>
                            <td class="text-center">
                                <a href="./delete/deletesdg8.php?delete=<?php echo "$id" ?>&research=831"
                                    class="btn btn-danger"
                                    onclick="return confirm('Are you sure to delete this?')">Delete</a>
                            </td>
                            <td class="text-center">
                                <a href="./update/updatesdg8.php?update=<?php echo "$id" ?>&research=831"
                                    class="btn btn-success">Update</a>
                            </td>
                            <!-- <td class="text-center">
                                <?php //echo "ppa" ?>
                            </td>
                            <td class="text-center">
                                <?php //echo "description" ?>
                            </td>
                            <td class="text-center">
                                <?php //echo "cost" ?>
                            </td>
                            <td class="text-center">
                                <?php //echo "fsource" ?>
                            </td> -->

                            <td class="text-center">
                                <?php echo "$temployees" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$tmMale" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$tmFemale" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$tteaching" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$ttMale" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$ttFemale" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$tnonteaching" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$tntMale" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$tntFemale" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$evidence" ?>
                            </td>
                        </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!--res 8.3.2-->
        <div class=" w-100 h-auto mt-3" id="research832" style="display: none ;">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover ">
                    <thead class="table-dark text-center">
                        <tr>
                            <th scope="col" colspan="2">Action</th>

                            <th scope="col">Approved Budget</th>
                            <th scope="col">Total Expenditure</th>

                            <th scope="col">Personal Services</th>
                            <th scope="col">Mode</th>
                            <th scope="col">Capital Expenditure</th>

                            <!-- <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Total Cost</th>
                            <th scope="col">Fund Source</th> -->
                            <th scope="col">Evidence</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM `research8.3.2`";
                        $select = mysqli_query($conn, $sql);
                        
                        if (mysqli_num_rows($select) > 0) {
                            while ($row = mysqli_fetch_assoc($select)) {
                                $id = $row['rid'];
                        
                                $tbudget = $row['tbudget'];
                                $texpenditure = $row['texpenditure'];
                        
                                $pservices = $row['pservices'];
                                $mode = $row['mode'];
                                $cexpenditure = $row['cexpenditure'];
                        
                          //         $ppa = $row[''];
                          //         $description = $row[''];
                          //         $cost = $row[''];
                          //         $fsource = $row[''];
                                $evidence = $row['evidence'];
                        
                        ?>
                        <tr>
                            <td class="text-center">
                                <a href="./delete/deletesdg8.php?delete=<?php echo "$id" ?>&research=832"
                                    class="btn btn-danger"
                                    onclick="return confirm('Are you sure to delete this?')">Delete</a>
                            </td>
                            <td class="text-center">
                                <a href="./update/updatesdg8.php?update=<?php echo "$id" ?>&research=832"
                                    class="btn btn-success">Update</a>
                            </td>
                            <td class="text-center">
                                <?php echo "$tbudget" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$texpenditure" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$pservices" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$mode" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$cexpenditure" ?>
                            </td>

                            <!-- <td class="text-center">
                                <?php //echo "ppa" ?>
                            </td>
                            <td class="text-center">
                                <?php //echo "description" ?>
                            </td>
                            <td class="text-center">
                                <?php //echo "cost" ?>
                            </td>
                            <td class="text-center">
                                <?php //echo "fsource" ?>
                            </td> -->
                            <td class="text-center">
                                <?php echo "evidence" ?>
                            </td>
                        </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!--res 8.3.3-->
        <div class=" w-100 h-auto mt-3" id="research833" style="display: none ;">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover ">
                    <thead class="table-dark text-center">
                        <tr>
                            <th scope="col" colspan="2">Action</th>

                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Fund Source</th>
                            <th scope="col">Total Citations</th>

                            <th scope="col">Campus Expenditure-Month</th>
                            <th scope="col">Campus expenditure-Annumn</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM `research8.3.3`";
                        $select = mysqli_query($conn, $sql);
                        
                        if (mysqli_num_rows($select) > 0) {
                            while ($row = mysqli_fetch_assoc($select)) {
                                $id = $row['rid'];
                        
                                $ppa = $row['ppa'];
                                $description = $row['description'];
                                $cost = $row['cost'];
                                $fsource = $row['fund'];
                                $cemonth = $row['cemonth'];
                                $ceannum = $row['ceannum'];
                        
                        ?>
                        <tr>
                            <td class="text-center">
                                <a href="./delete/deletesdg8.php?delete=<?php echo "$id" ?>&research=833"
                                    class="btn btn-danger"
                                    onclick="return confirm('Are you sure to delete this?')">Delete</a>
                            </td>
                            <td class="text-center">
                                <a href="./update/updatesdg8.php?update=<?php echo "$id" ?>&research=833"
                                    class="btn btn-success">Update</a>
                            </td>
                            <td class="text-center">
                                <?php echo "$ppa" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$description" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$cost" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$fsource" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$cemonth" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$ceannum" ?>
                            </td>
                        </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!--res 8.4.1-->
        <div class=" w-100 h-auto mt-3" id="research841" style="display: none ;">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover ">
                    <thead class="table-dark text-center">
                        <tr>
                            <th scope="col" colspan="2">Action</th>

                            <!-- <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Fund Source</th>
                            <th scope="col">Total Citations</th> -->

                            <th scope="col" colspan="3">Total OJT inside-M-F</th>
                            <th scope="col" colspan="3">Total OJT outside-M-F</th>
                            <th scope="col" colspan="3">Total OJT working-M-F</th>
                            <th scope="col">OJT month placement percentage</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM `research8.4.1`";
                        $select = mysqli_query($conn, $sql);
                        
                        if (mysqli_num_rows($select) > 0) {
                            while ($row = mysqli_fetch_assoc($select)) {
                                $id = $row['rid'];
                        
                         //       $ppa = $row[''];
                        //        $description = $row[''];
                         //       $cost = $row[''];
                        //         $fsource = $row[''];
                        
                                $tinside = $row['tinside'];
                                $tiMale = $row['tiMale'];
                                $tiFemale = $row['tiFemale'];
                        
                                $toutside = $row['toutside'];
                                $toMale = $row['toMale'];
                                $oFemale = $row['toFemale'];
                        
                                $tboth = $row['tboth'];
                                $tbMale = $row['tbMale'];
                                $tbFemale = $row['tbFemale'];
                        
                                $percentage = $row['percentage'];
                        
                        ?>
                        <tr>
                            <td class="text-center">
                                <a href="./delete/deletesdg8.php?delete=<?php echo "$id" ?>&research=841"
                                    class="btn btn-danger"
                                    onclick="return confirm('Are you sure to delete this?')">Delete</a>
                            </td>
                            <td class="text-center">
                                <a href="./update/updatesdg8.php?update=<?php echo "$id" ?>&research=841"
                                    class="btn btn-success">Update</a>
                            </td>
                            <!-- <td class="text-center">
                                <?php //echo "ppa" ?>
                            </td>
                            <td class="text-center">
                                <?php // echo "description" ?>
                            </td>
                            <td class="text-center">
                                <?php // echo "cost" ?>
                            </td>
                            <td class="text-center">
                                <?php //echo "fsource" ?>
                            </td> -->

                            <td class="text-center">
                                <?php echo "$tinside" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$tiMale" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$tiFemale" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$toutside" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$toMale" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$oFemale" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$tboth" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$tbMale" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$tbFemale" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$percentage" ?>
                            </td>
                        </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!--res 8.5.1-->
        <div class=" w-100 h-auto mt-3" id="research851" style="display: none ;">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover ">
                    <thead class="table-dark text-center">
                        <tr>
                            <th scope="col" colspan="2">Action</th>

                            <!-- <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Fund Source</th>
                            <th scope="col">Total Citations</th> -->

                            <th scope="col" colspan="3">Permanent Employees</th>
                            <th scope="col" colspan="3">Temporary Employees</th>
                            <th scope="col" colspan="3">Casual Employees</th>
                            <th scope="col" colspan="3">Job Order Employees</th>
                            <th scope="col" colspan="3">Service Employees</th>

                            <th scope="col" colspan="3">Total non-permanent-M-F</th>
                            <th scope="col">non-permanent employee percentage</th>

                            <th scope="col" colspan="3">Total teaching staff-M-F</th>
                            <th scope="col">non-permanent staff percentage</th>

                            <th scope="col" colspan="3">Total non-teaching staff-M-F</th>
                            <th scope="col">non-permanent non-teaching staff percentage</th>
                            <th scope="col">Evidence</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM `research8.5.1`";
                        $select = mysqli_query($conn, $sql);
                        
                        if (mysqli_num_rows($select) > 0) {
                            while ($row = mysqli_fetch_assoc($select)) {
                                $id = $row['rid'];
                        
                        //        $ppa = $row[''];
                        //        $description = $row[''];
                        //        $cost = $row[''];
                        //        $fsource = $row[''];
                        
                                $permanent = $row['permanent'];
                                $pMale = $row['pMale'];
                                $pFemale = $row['pFemale'];
                        
                                $temporary = $row['temporary'];
                                $tMale = $row['tMale'];
                                $tFemale = $row['tFemale'];
                        
                                $casual = $row['casual'];
                                $cMale = $row['cMale'];
                                $cFemale = $row['cFemale'];
                        
                                $joborder = $row['joborder'];
                                $joMale = $row['joMale'];
                                $joFemale = $row['joFemale'];
                        
                                $service = $row['service'];
                                $sMale = $row['sMaleint'];
                                $sFemale = $row['sFemale'];
                        
                                $tnpemployees = $row['tnpemployees'];
                                $tnpeMale = $row['tnpeMale'];
                                $tnpeFemale = $row['tnpeFemale'];
                        
                                $tnpepercentage = $row['tnpepercentage'];
                        
                                $ttstaff = $row['ttstaff'];
                                $ttsMale = $row['ttsMale'];
                                $ttsFemale = $row['ttsFemale'];
                        
                                $tnptspercentage = $row['tnptspercentage'];
                        
                                $tntstaff = $row['tntstaff'];
                                $tntsMale = $row['tntsMale'];
                                $tntsFemale = $row['tntsFemale'];
                        
                                $tnpntspercentage = $row['tnpntspercentage'];
                                $evidence = $row['evidence'];
                        ?>
                        <tr>
                            <td class="text-center">
                                <a href="./delete/deletesdg8.php?delete=<?php echo "$id" ?>&research=851"
                                    class="btn btn-danger"
                                    onclick="return confirm('Are you sure to delete this?')">Delete</a>
                            </td>
                            <td class="text-center">
                                <a href="./update/updatesdg8.php?update=<?php echo "$id" ?>&research=851"
                                    class="btn btn-success">Update</a>
                            </td>
                            <!-- <td class="text-center">
                                <?php //echo "ppa" ?>
                            </td>
                            <td class="text-center">
                                <?php //echo "description" ?>
                            </td>
                            <td class="text-center">
                                <?php //echo "cost" ?>
                            </td>
                            <td class="text-center">
                                <?php //echo "fsource" ?>
                            </td> -->

                            <td class="text-center">
                                <?php echo "$permanent" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$pMale" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$pFemale" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$temporary" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$tMale" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$tFemale" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$casual" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$cMale" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$cFemale" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$joborder" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$joMale" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$joFemale" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$service" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$sMale" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$sFemale" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$tnpemployees" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$tnpeMale" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$tnpeFemale" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$tnpepercentage" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$ttstaff" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$ttsMale" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$ttsFemale" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$tnptspercentage" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$tntstaff" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$tntsMale" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$tntsFemale" ?>
                            </td>

                            <td class="text-center">
                                <?php echo "$tnpntspercentage" ?>
                            </td>
                            
                            <td class="text-center">
                                <?php echo "$evidence" ?>
                            </td>
                        </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!--res 8.6.1-->
        <div class=" w-100 h-auto mt-3" id="research861" style="display: none ;">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover ">
                    <thead class="table-dark text-center">
                        <tr>
                            <th scope="col" colspan="2">Action</th>

                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Total Cost</th>
                            <th scope="col">Fund Source</th>
                            <th scope="col">Evidence</th>
                            <th scope="col">Proposal/Narrative Report</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM `research8.6.1`";
                        $select = mysqli_query($conn, $sql);
                        
                        if (mysqli_num_rows($select) > 0) {
                            while ($row = mysqli_fetch_assoc($select)) {
                                $id = $row['rid'];
                                $ppa = $row['ppa'];
                                $description = $row['description'];
                                $tcost = $row['tcost'];
                                $fsource = $row['fsource'];
                                $evidence = $row['evidence'];
                                $pnreport = $row['pnreport'];
                        ?>
                        <tr>
                            <td class="text-center">
                                <a href="./delete/deletesdg8.php?delete=<?php echo "$id" ?>&research=861"
                                    class="btn btn-danger"
                                    onclick="return confirm('Are you sure to delete this?')">Delete</a>
                            </td>
                            <td class="text-center">
                                <a href="./update/updatesdg8.php?update=<?php echo "$id" ?>&research=861"
                                    class="btn btn-success">Update</a>
                            </td>
                            <td class="text-center">
                                <?php echo "$ppa" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$description" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$tcost" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$fsource" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$evidence" ?>
                            </td>
                            <td class="text-center">
                                <?php echo "$pnreport" ?>
                            </td>
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
</div>
<script>
    //for exit in message
document.addEventListener("DOMContentLoaded", function() {
  var closeBtn = document.getElementById("closeBtnn");

  if (closeBtn) {
      closeBtn.addEventListener("click", function(event) {
          event.preventDefault();
          var messageContainer = document.querySelector(".message-container");
          messageContainer.style.display = "none";
          window.location.href = "updelsdg8.php";
      });
  }
});
</script>
<script src="up_delsdg8.js" defer></script>
