<?php
include('../../includes/adminHead/header14.php');
include('../../includes/db.php')

    ?>
<script src="up_delsdg14.js" defer></script>

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
        include '../../includes/menusdg14.php';
        ?>

        <!--res 14.1.1-->
        <div class=" w-100 h-auto mt-3" id="research1411" style="display: block ;">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>

                        <!-- <th scope="col">Total research</th> -->
 
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Publication Year</th>
                        <th scope="col">Total Citations</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research14.1.1`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id = $row['rid'];

                            // $tresearch = $row['tresearch'];
                            $title = $row['title'];
                            $author = $row['author'];
                            $year = $row['year'];
                            $citation = $row['citation'];

                            ?>
                            <tr>
                                <td class="text-center">
                                    <a href="./delete/deletesdg14.php?delete=<?php echo "$id" ?>&research=1411"
                                        class="btn btn-danger"
                                        onclick="return confirm('Are you sure to delete this?')">Delete</a>
                                </td>
                                <td class="text-center">
                                    <a href="./update/updatesdg14.php?update=<?php echo "$id" ?>&research=1411"
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

        <!--res 14.2.1-->
        <div class=" w-100 h-auto mt-3" id="research1421" style="display: none ;">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>

                        <!-- <th scope="col">Total educational programs</th> -->

                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Total cost</th>
                        <th scope="col">Fund source</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research14.2.1`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id = $row['rid'];
                            // $tprograms = $row['tprograms'];
                            $ppa = $row['ppa'];
                            $description = $row['description'];
                            $cost = $row['cost'];
                            $fsource = $row['fsource'];



                            ?>
                            <tr>
                                <td class="text-center">
                                    <a href="./delete/deletesdg14.php?delete=<?php echo "$id" ?>&research=1421"
                                        class="btn btn-danger"
                                        onclick="return confirm('Are you sure to delete this?')">Delete</a>
                                </td>
                                <td class="text-center">
                                    <a href="./update/updatesdg14.php?update=<?php echo "$id" ?>&research=1421"
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

        <!--res 14.2.2-->
        <div class=" w-100 h-auto mt-3" id="research1422" style="display: none ;">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>

                        <!-- <th scope="col">Total Educational Programs</th> -->

                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Total cost</th>
                        <th scope="col">Fund source</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research14.2.2`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id = $row['rid'];
                            // $tprograms = $row['tprograms'];
                            $ppa = $row['ppa'];
                            $description = $row['description'];
                            $cost = $row['cost'];
                            $fsource = $row['fsource'];


                            ?>
                            <tr>
                                <td class="text-center">
                                    <a href="./delete/deletesdg14.php?delete=<?php echo "$id" ?>&research=1422"
                                        class="btn btn-danger"
                                        onclick="return confirm('Are you sure to delete this?')">Delete</a>
                                </td>
                                <td class="text-center">
                                    <a href="./update/updatesdg14.php?update=<?php echo "$id" ?>&research=1422"
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

        <!--res 14.2.3-->
        <div class=" w-100 h-auto mt-3" id="research1423" style="display: none ;">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>

                        <!-- <th scope="col">Total Educational Programs</th> -->

                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Total cost</th>
                        <th scope="col">Fund source</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research14.2.3`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id = $row['rid'];
                            // $tprograms = $row['tprograms'];
                            $ppa = $row['ppa'];
                            $description = $row['description'];
                            $cost = $row['cost'];
                            $fsource = $row['fsource'];


                            ?>
                            <tr>
                                <td class="text-center">
                                    <a href="./delete/deletesdg14.php?delete=<?php echo "$id" ?>&research=1423"
                                        class="btn btn-danger"
                                        onclick="return confirm('Are you sure to delete this?')">Delete</a>
                                </td>
                                <td class="text-center">
                                    <a href="./update/updatesdg14.php?update=<?php echo "$id" ?>&research=1423"
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

        <!--res 14.3.1-->
        <div class=" w-100 h-auto mt-3" id="research1431" style="display: none ;">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>

                        <!-- <th scope="col">Total PPA</th> -->

                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Total cost</th>
                        <th scope="col">Fund source</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research14.3.1`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id = $row['rid'];
                            // $tppa = $row['tppa'];
                            $ppa = $row['ppa'];
                            $description = $row['description'];
                            $cost = $row['cost'];
                            $fsource = $row['fsource'];



                            ?>
                            <tr>
                                <td class="text-center">

                                    <a href="./delete/deletesdg14.php?delete=<?php echo "$id" ?>&research=1431"
                                        class="btn btn-danger"
                                        onclick="return confirm('Are you sure to delete this?')">Delete</a>
                                </td>
                                <td class="text-center">
                                    <a href="./update/updatesdg14.php?update=<?php echo "$id" ?>&research=1431"
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

        <!--res 14.3.2-->
        <div class=" w-100 h-auto mt-3" id="research1432" style="display: none ;">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>

                        <th scope="col">Total Policies</th>
                        <!-- <th scope="col">Total PPA</th> -->

                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Total cost</th>
                        <th scope="col">Fund source</th>
                        <th scope="col">Evidence</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research14.3.2`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id = $row['rid'];
                            $tpolicy = $row['tpolicy'];
                            // $tppa = $row['tppa'];
                            $ppa = $row['ppa'];
                            $description = $row['description'];
                            $cost = $row['cost'];
                            $fsource = $row['fsource'];
                            $evidence = $row['evidence'];



                            ?>
                            <tr>
                                <td class="text-center">
                                    <a href="./delete/deletesdg14.php?delete=<?php echo "$id" ?>&research=1432"
                                        class="btn btn-danger"
                                        onclick="return confirm('Are you sure to delete this?')">Delete</a>
                                </td>
                                <td class="text-center">
                                    <a href="./update/updatesdg14.php?update=<?php echo "$id" ?>&research=1432"
                                        class="btn btn-success">Update</a>
                                </td>
                                <td class="text-center">
                                    <?php echo "$tpolicy" ?>
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

        <!--res 14.3.3-->
        <div class=" w-100 h-auto mt-3" id="research1433" style="display: none ;">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>

                        <!-- <th scope="col">Total PPA</th> -->

                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Total cost</th>
                        <th scope="col">Fund source</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research14.3.3`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id = $row['rid'];
                            // $tppa = $row['tppa'];
                            $ppa = $row['ppa'];
                            $description = $row['description'];
                            $cost = $row['cost'];
                            $fsource = $row['fsource'];


                            ?>
                            <tr>
                                <td class="text-center">
                                    <a href="./delete/deletesdg14.php?delete=<?php echo "$id" ?>&research=1433"
                                        class="btn btn-danger"
                                        onclick="return confirm('Are you sure to delete this?')">Delete</a>
                                </td>
                                <td class="text-center">
                                    <a href="./update/updatesdg14.php?update=<?php echo "$id" ?>&research=1433"
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

        <!--res 14.3.4-->
        <div class=" w-100 h-auto mt-3" id="research1434" style="display: none ;">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>

                        <!-- <th scope="col">Total Technologies</th> -->

                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Total cost</th>
                        <th scope="col">Fund source</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research14.3.4`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id = $row['rid'];
                            // $tpractices = $row['tpractices'];
                            $ppa = $row['ppa'];
                            $description = $row['description'];
                            $cost = $row['cost'];
                            $fsource = $row['fsource'];



                            ?>
                            <tr>
                                <td class="text-center">
                                    <a href="./delete/deletesdg14.php?delete=<?php echo "$id" ?>&research=1434"
                                        class="btn btn-danger"
                                        onclick="return confirm('Are you sure to delete this?')">Delete</a>
                                </td>
                                <td class="text-center">
                                    <a href="./update/updatesdg14.php?update=<?php echo "$id" ?>&research=1434"
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

        <!--res 14.4.1-->
        <div class=" w-100 h-auto mt-3" id="research1441" style="display: none ;">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>

                        <th scope="col">Campus water discharge</th>
                        <!-- <th scope="col">Total PPA</th> -->

                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Total cost</th>
                        <th scope="col">Fund source</th>
                        <th scope="col">Evidence</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research14.4.1`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id = $row['rid'];
                            $guidelines = $row['guidelines'];
                            // $tppa = $row['tppa'];
                            $ppa = $row['ppa'];
                            $description = $row['description'];
                            $cost = $row['cost'];
                            $fsource = $row['fsource'];
                            $evidence = $row['evidence'];



                            ?>
                            <tr>
                                <td class="text-center">
                                    <a href="./delete/deletesdg14.php?delete=<?php echo "$id" ?>&research=1441"
                                        class="btn btn-danger"
                                        onclick="return confirm('Are you sure to delete this?')">Delete</a>
                                </td>
                                <td class="text-center">
                                    <a href="./update/updatesdg14.php?update=<?php echo "$id" ?>&research=1441"
                                        class="btn btn-success">Update</a>
                                </td>
                                <td class="text-center">
                                    <?php echo "$guidelines" ?>
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

        <!--res 14.4.2-->
        <div class=" w-100 h-auto mt-3" id="research1442" style="display: none ;">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>

                        <th scope="col">Does Campus reduce plastic waste</th>
                        <!-- <th scope="col">Total PPA</th> -->

                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Total cost</th>
                        <th scope="col">Fund source</th>
                        <th scope="col">Evidence</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research14.4.2`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id = $row['rid'];
                            $plan = $row['plan'];
                            // $tppa = $row['tppa'];
                            $ppa = $row['ppa'];
                            $description = $row['description'];
                            $cost = $row['cost'];
                            $fsource = $row['fsource'];
                            $evidence = $row['evidence'];



                            ?>
                            <tr>
                                <td class="text-center">
                                    <a href="./delete/deletesdg14.php?delete=<?php echo "$id" ?>&research=1442"
                                        class="btn btn-danger"
                                        onclick="return confirm('Are you sure to delete this?')">Delete</a>
                                </td>
                                <td class="text-center">
                                    <a href="./update/updatesdg14.php?update=<?php echo "$id" ?>&research=1442"
                                        class="btn btn-success">Update</a>
                                </td>
                                <td class="text-center">
                                    <?php echo "$plan" ?>
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

        <!--res 14.4.3-->
        <div class=" w-100 h-auto mt-3" id="research1443" style="display: none ;">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>

                        <th scope="col">Does campus prevent marin pollution</th>
                        <!-- <th scope="col">Total PPA</th> -->

                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Total cost</th>
                        <th scope="col">Fund source</th>
                        <th scope="col">Evidence</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research14.4.3`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id = $row['rid'];
                            $policy = $row['policy'];
                            // $tppa = $row['tppa'];
                            $ppa = $row['ppa'];
                            $description = $row['description'];
                            $cost = $row['cost'];
                            $fsource = $row['fsource'];
                            $evidence = $row['evidence'];



                            ?>
                            <tr>
                                <td class="text-center">
                                    <a href="./delete/deletesdg14.php?delete=<?php echo "$id" ?>&research=1443"
                                        class="btn btn-danger"
                                        onclick="return confirm('Are you sure to delete this?')">Delete</a>
                                </td>
                                <td class="text-center">
                                    <a href="./update/updatesdg14.php?update=<?php echo "$id" ?>&research=1443"
                                        class="btn btn-success">Update</a>
                                </td>
                                <td class="text-center">
                                    <?php echo "$policy" ?>
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

        <!--res 14.5.1-->
        <div class=" w-100 h-auto mt-3" id="research1451" style="display: none ;">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>

                        <th scope="col">Does Campus minimize any alteration</th>

                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Total cost</th>
                        <th scope="col">Fund source</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research14.5.1`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id = $row['rid'];
                            $plan = $row['plan'];
                            $ppa = $row['ppa'];
                            $description = $row['description'];
                            $cost = $row['cost'];
                            $fsource = $row['fsource'];



                            ?>
                            <tr>
                                <td class="text-center">
                                    <a href="./delete/deletesdg14.php?delete=<?php echo "$id" ?>&research=1451"
                                        class="btn btn-danger"
                                        onclick="return confirm('Are you sure to delete this?')">Delete</a>
                                </td>
                                <td class="text-center">
                                    <a href="./update/updatesdg14.php?update=<?php echo "$id" ?>&research=1451"
                                        class="btn btn-success">Update</a>
                                </td>
                                <td class="text-center">
                                    <?php echo "$plan" ?>
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

        <!--res 14.5.2-->
        <div class=" w-100 h-auto mt-3" id="research1452" style="display: none ;">
         <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>

                        <!-- <th scope="col">Totel PPA</th> -->

                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Total cost</th>
                        <th scope="col">Fund source</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research14.5.2`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id = $row['rid'];
                            // $tppa = $row['tppa'];
                            $ppa = $row['ppa'];
                            $description = $row['description'];
                            $cost = $row['cost'];
                            $fsource = $row['fsource'];




                            ?>
                            <tr>
                                <td class="text-center">
                                    <a href="./delete/deletesdg14.php?delete=<?php echo "$id" ?>&research=1452"
                                        class="btn btn-danger"
                                        onclick="return confirm('Are you sure to delete this?')">Delete</a>
                                </td>
                                <td class="text-center">
                                    <a href="./update/updatesdg14.php?update=<?php echo "$id" ?>&research=1452"
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

        <!--res 14.5.3-->
        <div class=" w-100 h-auto mt-3" id="research1453" style="display: none ;">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>

                        <!-- <th scope="col">Total programs</th> -->

                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col" colspan="3">Total Enrollees-M-F</th>
                        <th scope="col">Total cost</th>
                        <th scope="col">Fund source</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research14.5.3`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id = $row['rid'];
                            // $tppa = $row['tppa'];
                            $title = $row['title'];
                            $description = $row['description'];

                            $tenrollees = $row['tenrollees'];
                            $teMale = $row['teMale'];
                            $teFemale = $row['teFemale'];

                            $tcost = $row['tcost'];
                            $fsource = $row['fsource'];



                            ?>
                            <tr>
                                <td class="text-center">
                                    <a href="./delete/deletesdg14.php?delete=<?php echo "$id" ?>&research=1453"
                                        class="btn btn-danger"
                                        onclick="return confirm('Are you sure to delete this?')">Delete</a>
                                </td>
                                <td class="text-center">
                                    <a href="./update/updatesdg14.php?update=<?php echo "$id" ?>&research=1453"
                                        class="btn btn-success">Update</a>
                                </td>
                                
                                <td class="text-center">
                                    <?php echo "$title" ?>
                                </td>
                                <td class="text-center">
                                    <?php echo "$description" ?>
                                </td>
                                <td class="text-center">
                                    <?php echo "$tenrollees" ?>
                                </td>
                                <td class="text-center">
                                    <?php echo "$teMale" ?>
                                </td>
                                <td class="text-center">
                                    <?php echo "$teFemale" ?>
                                </td>
                                <td class="text-center">
                                    <?php echo "$tcost" ?>
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

        <!--res 14.5.4-->
        <div class=" w-100 h-auto mt-3" id="research1454" style="display: none ;">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>

                        <!-- <th scope="col">Total collaborations</th> -->

                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Total cost</th>
                        <th scope="col">Fund source</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research14.5.4`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id = $row['rid'];

                            // $tcollaboration = $row['tcollaboration'];
                            $ppa = $row['ppa'];
                            $description = $row['description'];
                            $cost = $row['cost'];
                            $fsource = $row['fsource'];



                            ?>
                            <tr>
                                <td class="text-center">
                                    <a href="./delete/deletesdg14.php?delete=<?php echo "$id" ?>&research=1454"
                                        class="btn btn-danger"
                                        onclick="return confirm('Are you sure to delete this?')">Delete</a>
                                </td>
                                <td class="text-center">
                                    <a href="./update/updatesdg14.php?update=<?php echo "$id" ?>&research=1454"
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

        <!--res 14.5.5-->
        <div class=" w-100 h-auto mt-3" id="research1455" style="display: none ;">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>

                        <th scope="col">Does campus manage watershed </th>
                        <!-- <th scope="col">Total Strategies</th> -->

                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Total cost</th>
                        <th scope="col">Fund source</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research14.5.5`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id = $row['rid'];
 
                            $strategy = $row['strategy'];
                            // $tppa = $row['tppa'];
                            $ppa = $row['ppa'];
                            $description = $row['description'];
                            $cost = $row['cost'];
                            $fsource = $row['fsource'];
                            ?>
                            <tr>
                                <td class="text-center">
                                    <a href="./delete/deletesdg14.php?delete=<?php echo "$id" ?>&research=1455"
                                        class="btn btn-danger"
                                        onclick="return confirm('Are you sure to delete this?')">Delete</a>
                                </td>
                                <td class="text-center">
                                    <a href="./update/updatesdg14.php?update=<?php echo "$id" ?>&research=1455"
                                        class="btn btn-success">Update</a>
                                </td>
                                <td class="text-center">
                                    <?php echo "$strategy" ?>
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
    </div>
</div>
<script>

</script>