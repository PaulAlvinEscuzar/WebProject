<?php 
include '../../../includes/adminHeadupdate/header14.php';
include '../../../includes/db.php';


if (isset($_GET['update'])) {
        $update = $_GET['update'];
       // echo $update;

        $research = $_GET['research'];
       // echo $research;
        if ($research == '1411') {
                if(isset($_POST['btnUpdate'])){

                // $tresearch = $_POST['1411tresearch'];

                $title = $_POST['1411title'];
                $author = $_POST['1411author'];
                $year = $_POST['1411year'];
                $citation = $_POST['1411citation'];
               

                $query = "UPDATE `research14.1.1` SET title = '{$title}',author = '{$author}',year = '{$year}',citation = '{$citation}'  WHERE `RID` = ".$update."";
                $updateChecker = mysqli_query($conn, $query);
                if ($updateChecker) {
                    header("Location:../up_delsdg14.php?message=Update Successful");
                } else {
                    die("Query failed. " . mysqli_error($conn));
                }
                }

                $outerquery = "SELECT * FROM `research14.1.1` WHERE `RID` = ".$update."";
                $select = mysqli_query($conn, $outerquery);
                if (mysqli_num_rows($select) > 0) {
                while ($row = mysqli_fetch_assoc($select)) {
                        $id = $row['rid'];

                //        $tresearch = $row['tresearch'];
                        $title = $row['title'];
                        $author = $row['author'];
                        $year = $row['year'];
                        $citation = $row['citation'];

                ?>
                                <!-- html code here This div is for research 14.1.1 -->
                                <div class="collapse w-100 h-auto p-3" id="research1411" style="display: block ;">
                                        <h2 class="text-center pb-5">Research on life below water</h2>
                                        <form action="" method="post">
                                                
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Title</span>
                                                        <input type="text" class="form-control" value="<?php echo "$title" ?>" name="1411title"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Author/s</span>
                                                        <input type="text" class="form-control" value="<?php echo "$author" ?>" name="1411author"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Year of publication</span>
                                                        <input type="text" class="form-control" value="<?php echo "$year" ?>" name="1411year"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total number of citations</span>
                                                        <input type="text" class="form-control" value="<?php echo "$citation" ?>"
                                                                name="1411citation" aria-describedby="basic-addon1">
                                                </div>
                                               <div class="d-grid">
                                                        <button type="submit" class="btn btn-success mb-3" name="btnUpdate">Update Research</button>
                                                        <a href="../../../admin/sdg14/up_delsdg14.php" class="btn btn-danger">Cancel</a>
                                                </div>
                                        </form>
                                </div>
                                <?php
                }
}
        } elseif ($research == '1421') {
                if(isset($_POST['btnUpdate'])){

                // $tprograms = $_POST['1421tprograms'];

                $ppa = $_POST['1421ppa'];
                $description = $_POST['1421description'];
                $year = $_POST['1421cost'];
                $citation = $_POST['1421fsource'];

                $query = "UPDATE `research14.2.1` SET ppa = '{$ppa}',description = '{$description}',cost = '{$year}',fsource = '{$citation}'  WHERE `RID` = ".$update."";
                $updateChecker = mysqli_query($conn, $query);
                if ($updateChecker) {
                    header("Location:../up_delsdg14.php?message=Update Successful");
                } else {
                    die("Query failed. " . mysqli_error($conn));
                }
                }
                $outerquery = "SELECT * FROM `research14.2.1` WHERE `RID` = ".$update."";
                $select = mysqli_query($conn, $outerquery);
                if (mysqli_num_rows($select) > 0) {
                while ($row = mysqli_fetch_assoc($select)) {
                        $id = $row['rid'];
                        // $tprograms = $row['tprograms'];
                        $ppa = $row['ppa'];
                        $description = $row['description'];
                        $year = $row['cost'];
                        $citation = $row['fsource'];


                ?>
                                <!-- html code here This div is for research 14.2.1-->
                                <div class="collapse w-100 h-auto p-3" id="research1421" style="display: block ;">
                                        <h2 class="text-center pb-5">Fresh-water ecosystems</h2>
                                        <form action="" method="post">
                                               
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Title</span>
                                                        <input type="text" class="form-control" value="<?php echo "$ppa" ?>" name="1421ppa"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Description</span>
                                                        <input type="text" class="form-control" value="<?php echo "$description" ?>" name="1421description"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                                        <input type="text" class="form-control" value="<?php echo "$year" ?>" name="1421cost"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                                        <input type="text" class="form-control" value="<?php echo "$citation" ?>"
                                                                name="1421fsource" aria-describedby="basic-addon1">
                                                </div>
                              
                                               <div class="d-grid">
                                                        <button type="submit" class="btn btn-success mb-3" name="btnUpdate">Update Research</button>
                                                        <a href="../../../admin/sdg14/up_delsdg14.php" class="btn btn-danger">Cancel</a>
                                                </div>
                                        </form>
                                </div>
                                <?php
                }
}
        } elseif ($research == '1422') {
                if(isset($_POST['btnUpdate'])){

                // $tprograms = $_POST['1422tprograms'];

                $ppa = $_POST['1422ppa'];
                $description = $_POST['1422description'];
                $year = $_POST['1422cost'];
                $citation = $_POST['1422fsource'];

                $query = "UPDATE `research14.2.2` SET ppa = '{$ppa}',description = '{$description}',cost = '{$year}',fsource = '{$citation}'  WHERE `RID` = ".$update."";
                $updateChecker = mysqli_query($conn, $query);
                if ($updateChecker) {
                    header("Location:../up_delsdg14.php?message=Update Successful");
                } else {
                    die("Query failed. " . mysqli_error($conn));
                }
                }

                $outerquery = "SELECT * FROM `research14.2.2` WHERE `RID` = ".$update."";
                $select = mysqli_query($conn, $outerquery);
                if (mysqli_num_rows($select) > 0) {
                while ($row = mysqli_fetch_assoc($select)) {
                        $id = $row['rid'];
                        // $tprograms = $row['tprograms'];
                        $ppa = $row['ppa'];
                        $description = $row['description'];
                        $year = $row['cost'];
                        $citation = $row['fsource'];

                ?>
                                <!-- html code here This div is for research 14.2.2-->
                                <div class="collapse w-100 h-auto p-3" id="research1422" style="display: block ;">
                                        <h2 class="text-center pb-5">Sustainable fisheries</h2>
                                        <form action="" method="post">
                                               
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Title</span>
                                                        <input type="text" class="form-control" value="<?php echo "$ppa" ?>" name="1422ppa"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Description</span>
                                                        <input type="text" class="form-control" value="<?php echo "$description" ?>" name="1422description"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                                        <input type="text" class="form-control" value="<?php echo "$year" ?>" name="1422cost"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                                        <input type="text" class="form-control" value="<?php echo "$citation" ?>"
                                                                name="1422fsource" aria-describedby="basic-addon1">
                                                </div>
                              
                                               <div class="d-grid">
                                                        <button type="submit" class="btn btn-success mb-3" name="btnUpdate">Update Research</button>
                                                        <a href="../../../admin/sdg14/up_delsdg14.php" class="btn btn-danger">Cancel</a>
                                                </div>
                                        </form>
                                </div>
                                <?php
                }
}
        } elseif ($research == '1423') {
                if(isset($_POST['btnUpdate'])){

                // $tprograms = $_POST['1423tprograms'];

                $ppa = $_POST['1423ppa'];
                $description = $_POST['1423description'];
                $year = $_POST['1423cost'];
                $citation = $_POST['1423fsource'];

                $query = "UPDATE `research14.2.3` SET ppa = '{$ppa}',description = '{$description}',cost = '{$year}',fsource = '{$citation}'  WHERE `RID` = ".$update."";
                $updateChecker = mysqli_query($conn, $query);
                if ($updateChecker) {
                    header("Location:../up_delsdg14.php?message=Update Successful");
                } else {
                    die("Query failed. " . mysqli_error($conn));
                }
                }

                $outerquery = "SELECT * FROM `research14.2.3` WHERE `RID` = ".$update."";
                $select = mysqli_query($conn, $outerquery);
                if (mysqli_num_rows($select) > 0) {
                while ($row = mysqli_fetch_assoc($select)) {
                        $id = $row['rid'];
                        // $tprograms = $row['tprograms'];
                        $ppa = $row['ppa'];
                        $description = $row['description'];
                        $year = $row['cost'];
                        $citation = $row['fsource'];

                ?>
                                <!-- html code here This div is for research 14.2.3-->
                                <div class="collapse w-100 h-auto p-3" id="research311" style="display: block ;">
                                        <h2 class="text-center pb-5">Overfishing</h2>
                                        <form action="" method="post">
                                                
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Title</span>
                                                        <input type="text" class="form-control" value="<?php echo "$ppa" ?>" name="1423ppa"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Description</span>
                                                        <input type="text" class="form-control" value="<?php echo "$description" ?>" name="1423description"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                                        <input type="text" class="form-control" value="<?php echo "$year" ?>" name="1423cost"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                                        <input type="text" class="form-control" value="<?php echo "$citation" ?>"
                                                                name="1423fsource" aria-describedby="basic-addon1">
                                                </div>
                               
                                               <div class="d-grid">
                                                        <button type="submit" class="btn btn-success mb-3" name="btnUpdate">Update Research</button>
                                                        <a href="../../../admin/sdg14/up_delsdg14.php" class="btn btn-danger">Cancel</a>
                                                </div>
                                        </form>
                                </div>
                                <?php
                }
}
        } elseif ($research == '1431') {
                if(isset($_POST['btnUpdate'])){

                // $tppa = $_POST['1431tppa'];

                $ppa = $_POST['1431ppa'];
                $description = $_POST['1431description'];
                $year = $_POST['1431cost'];
                $citation = $_POST['1431fsource'];

                $query = "UPDATE `research14.3.1` SET ppa = '{$ppa}',description = '{$description}',cost = '{$year}',fsource = '{$citation}'   WHERE `RID` = ".$update."";
                $updateChecker = mysqli_query($conn, $query);
                if ($updateChecker) {
                    header("Location:../up_delsdg14.php?message=Update Successful");
                } else {
                    die("Query failed. " . mysqli_error($conn));
                }
                }

                $outerquery = "SELECT * FROM `research14.3.1` WHERE `RID` = ".$update."";
                $select = mysqli_query($conn, $outerquery);
                if (mysqli_num_rows($select) > 0) {
                while ($row = mysqli_fetch_assoc($select)) {
                        $id = $row['rid'];
                        // $tppa = $row['tppa'];
                        $ppa = $row['ppa'];
                        $description = $row['description'];
                        $year = $row['cost'];
                        $citation = $row['fsource'];

                ?>
                                <!-- html code here This div is for research 14.3.1-->
                                <div class="collapse w-100 h-auto p-3" id="research311" style="display: block ;">
                                        <h2 class="text-center pb-5">Conservation and sustainable utilization of the oceans</h2>
                                        <form action="" method="post">
                                                
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Title</span>
                                                        <input type="text" class="form-control" value="<?php echo "$ppa" ?>" name="1431ppa"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Description</span>
                                                        <input type="text" class="form-control" value="<?php echo "$description" ?>" name="1431description"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                                        <input type="text" class="form-control" value="<?php echo "$year" ?>" name="1431cost"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                                        <input type="text" class="form-control" value="<?php echo "$citation" ?>"
                                                                name="1431fsource" aria-describedby="basic-addon1">
                                                </div>
                               
                                               <div class="d-grid">
                                                        <button type="submit" class="btn btn-success mb-3" name="btnUpdate">Update Research</button>
                                                        <a href="../../../admin/sdg14/up_delsdg14.php" class="btn btn-danger">Cancel</a>
                                                </div>
                                        </form>
                                </div>
                                <?php
                }
}
        } elseif ($research == '1432') {
                if(isset($_POST['btnUpdate'])){

                $tpolicy = $_POST['1432tpolicy'];
                // $tppa = $_POST['1432tppa'];

                $ppa = $_POST['1432ppa'];
                $description = $_POST['1432description'];
                $year = $_POST['1432cost'];
                $citation = $_POST['1432fsource'];

                $evidence = $_POST['1432evidence'];

                $query = "UPDATE `research14.3.2` SET tpolicy = '{$tpolicy}',ppa = '{$ppa}',description = '{$description}',cost = '{$year}',fsource = '{$citation}',evidence = '{$evidence}'  WHERE `RID` = ".$update."";
                $updateChecker = mysqli_query($conn, $query);
                if ($updateChecker) {
                    header("Location:../up_delsdg14.php?message=Update Successful");
                } else {
                    die("Query failed. " . mysqli_error($conn));
                }
                }

                $outerquery = "SELECT * FROM `research14.3.2` WHERE `RID` = ".$update."";
                $select = mysqli_query($conn, $outerquery);
                if (mysqli_num_rows($select) > 0) {
                while ($row = mysqli_fetch_assoc($select)) {
                        $id = $row['rid'];
                        $tpolicy = $row['tpolicy'];
                        // $tppa = $row['tppa'];
                        $ppa = $row['ppa'];
                        $description = $row['description'];
                        $year = $row['cost'];
                        $citation = $row['fsource'];
                        $evidence = $row['evidence'];

                ?>
                                <!-- html code here This div is for research 14.3.2-->
                                <div class="collapse w-100 h-auto p-3" id="research311" style="display: block ;">
                                        <h2 class="text-center pb-5">Food from aquatic ecosystems</h2>
                                        <form action="" method="post">
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total policy for sustainable harvesting of aquatic ecosystem</span>
                                                        <input type="text" class="form-control" value="<?php echo "$tpolicy" ?>" name="1432tpolicy"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                              
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Title</span>
                                                        <input type="text" class="form-control" value="<?php echo "$ppa" ?>" name="1432ppa"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Description</span>
                                                        <input type="text" class="form-control" value="<?php echo "$description" ?>" name="1432description"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                                        <input type="text" class="form-control" value="<?php echo "$year" ?>"
                                                                name="1432cost" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                                        <input type="text" class="form-control" value="<?php echo "$citation" ?>"
                                                                name="1432fsource" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Evidence</span>
                                                        <input type="text" class="form-control" value="<?php echo "$evidence" ?>"
                                                                name="1432evidence" aria-describedby="basic-addon1">
                                                </div>
                                               <div class="d-grid">
                                                        <button type="submit" class="btn btn-success mb-3" name="btnUpdate">Update Research</button>
                                                        <a href="../../../admin/sdg14/up_delsdg14.php" class="btn btn-danger">Cancel</a>
                                                </div>
                                        </form>
                                </div>
                                <?php
                }
}
        } elseif ($research == '1433') {
                if(isset($_POST['btnUpdate'])){

                // $tppa = $_POST['1433tppa'];

                $ppa = $_POST['1433ppa'];
                $description = $_POST['1433description'];
                $year = $_POST['1433cost'];
                $citation = $_POST['1433fsource'];

                $query = "UPDATE `research14.3.3` SET ppa = '{$ppa}',description = '{$description}',cost = '{$year}',fsource = '{$citation}'  WHERE `RID` = ".$update."";
                $updateChecker = mysqli_query($conn, $query);
                if ($updateChecker) {
                    header("Location:../up_delsdg14.php?message=Update Successful");
                } else {
                    die("Query failed. " . mysqli_error($conn));
                }
                }

                $outerquery = "SELECT * FROM `research14.3.3` WHERE `RID` = ".$update."";
                $select = mysqli_query($conn, $outerquery);
                if (mysqli_num_rows($select) > 0) {
                while ($row = mysqli_fetch_assoc($select)) {
                        $id = $row['rid'];
                        // $tppa = $row['tppa'];
                        $ppa = $row['ppa'];
                        $description = $row['description'];
                        $year = $row['cost'];
                        $citation = $row['fsource'];

                ?>
                                <!-- html code here This div is for research 14.3.3-->
                                <div class="collapse w-100 h-auto p-3" id="research311" style="display: block ;">
                                        <h2 class="text-center pb-5">maintain ecosystems and their biodiversity</h2>
                                        <form action="" method="post">
                                               
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Title</span>
                                                        <input type="text" class="form-control" value="<?php echo "$ppa" ?>" name="1433ppa"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Description</span>
                                                        <input type="text" class="form-control" value="<?php echo "$description" ?>" name="1433description"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                                        <input type="text" class="form-control" value="<?php echo "$year" ?>" name="1433cost"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                                        <input type="text" class="form-control" value="<?php echo "$citation" ?>"
                                                                name="1433fsource" aria-describedby="basic-addon1">
                                                </div>
                            
                                               <div class="d-grid">
                                                        <button type="submit" class="btn btn-success mb-3" name="btnUpdate">Update Research</button>
                                                        <a href="../../../admin/sdg14/up_delsdg14.php" class="btn btn-danger">Cancel</a>
                                                </div>
                                        </form>
                                </div>
                                <?php
                }
}
        } elseif ($research == '1434') {
                if(isset($_POST['btnUpdate'])){

                // $tpractices = $_POST['1434tpractices'];

                $ppa = $_POST['1434ppa'];
                $description = $_POST['1434description'];
                $year = $_POST['1434cost'];
                $citation = $_POST['1434fsource'];

                $query = "UPDATE `research14.3.4` SET ppa = '{$ppa}',description = '{$description}',cost = '{$year}',fsource = '{$citation}'  WHERE `RID` = ".$update."";
                $updateChecker = mysqli_query($conn, $query);
                if ($updateChecker) {
                    header("Location:../up_delsdg14.php?message=Update Successful");
                } else {
                    die("Query failed. " . mysqli_error($conn));
                }
                }

                $outerquery = "SELECT * FROM `research14.3.4` WHERE `RID` = ".$update."";
                $select = mysqli_query($conn, $outerquery);
                if (mysqli_num_rows($select) > 0) {
                while ($row = mysqli_fetch_assoc($select)) {
                        $id = $row['rid'];
                        // $tpractices = $row['tpractices'];
                        $ppa = $row['ppa'];
                        $description = $row['description'];
                        $year = $row['cost'];
                        $citation = $row['fsource'];

                ?>
                                <!-- html code here This div is for research 14.3.4-->
                                <div class="collapse w-100 h-auto p-3" id="research311" style="display: block ;">
                                        <h2 class="text-center pb-5">Technologies towards aquatic ecosystem damange prevention</h2>
                                        <form action="" method="post">
                                                
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Title</span>
                                                        <input type="text" class="form-control" value="<?php echo "$ppa" ?>" name="1434ppa"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Description</span>
                                                        <input type="text" class="form-control" value="<?php echo "$description" ?>" name="1434description"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                                        <input type="text" class="form-control" value="<?php echo "$year" ?>" name="1434cost"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                                        <input type="text" class="form-control" value="<?php echo "$citation" ?>"
                                                                name="1434fsource" aria-describedby="basic-addon1">
                                                </div>
                                
                                               <div class="d-grid">
                                                        <button type="submit" class="btn btn-success mb-3" name="btnUpdate">Update Research</button>
                                                        <a href="../../../admin/sdg14/up_delsdg14.php" class="btn btn-danger">Cancel</a>
                                                </div>
                                        </form>
                                </div>
                                <?php
                }
}
        } elseif ($research == '1441') {
                if(isset($_POST['btnUpdate'])){

                $guidelines = $_POST['1441guidelines'];
                // $tppa = $_POST['1441tppa'];

                $ppa = $_POST['1441ppa'];
                $description = $_POST['1441description'];
                $year = $_POST['1441cost'];
                $citation = $_POST['1441fsource'];

                $evidence = $_POST['1441evidence'];

                $query = "UPDATE `research14.4.1` SET guidelines = '{$guidelines}',ppa = '{$ppa}',description = '{$description}',cost = '{$year}',fsource = '{$citation}',evidence = '{$evidence}'  WHERE `RID` = ".$update."";
                $updateChecker = mysqli_query($conn, $query);
                if ($updateChecker) {
                    header("Location:../up_delsdg14.php?message=Update Successful");
                } else {
                    die("Query failed. " . mysqli_error($conn));
                }
                }

                $outerquery = "SELECT * FROM `research14.4.1` WHERE `RID` = ".$update."";
                $select = mysqli_query($conn, $outerquery);
                if (mysqli_num_rows($select) > 0) {
                while ($row = mysqli_fetch_assoc($select)) {
                        $id = $row['rid'];
                        $guidelines = $row['guidelines'];
                        // $tppa = $row['tppa'];
                        $ppa = $row['ppa'];
                        $description = $row['description'];
                        $year = $row['cost'];
                        $citation = $row['fsource'];
                        $evidence = $row['evidence'];

                ?>
                                <!-- html code here This div is for research 14.4.1-->
                                <div class="collapse w-100 h-auto p-3" id="research311" style="display: block ;">
                                        <h2 class="text-center pb-5">Water discharge guidelines and standards</h2>
                                        <form action="" method="post">
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Does your campus have water quality standards and guidelines for water discharges?</span>
                                                        <input type="text" class="form-control" value="<?php echo "$guidelines" ?>" name="1441guidelines"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Title</span>
                                                        <input type="text" class="form-control" value="<?php echo "$ppa" ?>" name="1441ppa"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Description</span>
                                                        <input type="text" class="form-control" value="<?php echo "$description" ?>" name="1441description"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                                        <input type="text" class="form-control" value="<?php echo "$year" ?>"
                                                                name="1441cost" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                                        <input type="text" class="form-control" value="<?php echo "$citation" ?>"
                                                                name="1441fsource" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Evidence</span>
                                                        <input type="text" class="form-control" value="<?php echo "$evidence" ?>"
                                                                name="1441evidence" aria-describedby="basic-addon1">
                                                </div>
                                               <div class="d-grid">
                                                        <button type="submit" class="btn btn-success mb-3" name="btnUpdate">Update Research</button>
                                                        <a href="../../../admin/sdg14/up_delsdg14.php" class="btn btn-danger">Cancel</a>
                                                </div>
                                        </form>
                                </div>
                                <?php
                }
}
        } elseif ($research == '1442') {
                if(isset($_POST['btnUpdate'])){

                $plan = $_POST['1442plan'];
                // $tppa = $_POST['1442tppa'];

                $ppa = $_POST['1442ppa'];
                $description = $_POST['1442description'];
                $year = $_POST['1442cost'];
                $citation = $_POST['1442fsource'];

                $evidence = $_POST['1442evidence'];

                $query = "UPDATE `research14.4.2` SET plan = '{$plan}',ppa = '{$ppa}',description = '{$description}',cost = '{$year}',fsource = '{$citation}',evidence = '{$evidence}'   WHERE `RID` = ".$update."";
                $updateChecker = mysqli_query($conn, $query);
                if ($updateChecker) {
                    header("Location:../up_delsdg14.php?message=Update Successful");
                } else {
                    die("Query failed. " . mysqli_error($conn));
                }
                }

                $outerquery = "SELECT * FROM `research14.4.2` WHERE `RID` = ".$update."";
                $select = mysqli_query($conn, $outerquery);
                if (mysqli_num_rows($select) > 0) {
                while ($row = mysqli_fetch_assoc($select)) {
                        $id = $row['rid'];
                        $plan = $row['plan'];
                        // $tppa = $row['tppa'];
                        $ppa = $row['ppa'];
                        $description = $row['description'];
                        $year = $row['cost'];
                        $citation = $row['fsource'];
                        $evidence = $row['evidence'];

                ?>
                                <!-- html code here This div is for research 14.4.2-->
                                <div class="collapse w-100 h-auto p-3" id="research311" style="display: block ;">
                                        <h2 class="text-center pb-5">Action plan to reducing plastic waste</h2>
                                        <form action="" method="post">
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Does your campus have an action pan in place to reduce plastic waste?</span>
                                                        <input type="text" class="form-control" value="<?php echo "$plan" ?>" name="1442plan"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                               
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Title</span>
                                                        <input type="text" class="form-control" value="<?php echo "$ppa" ?>" name="1442ppa"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Description</span>
                                                        <input type="text" class="form-control" value="<?php echo "$description" ?>" name="1442description"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                                        <input type="text" class="form-control" value="<?php echo "$year" ?>" name="1442cost"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                                        <input type="text" class="form-control" value="<?php echo "$citation" ?>"
                                                                name="1442fsource" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Evidence</span>
                                                        <input type="text" class="form-control" value="<?php echo "$evidence" ?>"
                                                                name="1442evidence" aria-describedby="basic-addon1">
                                                </div>
                                               <div class="d-grid">
                                                        <button type="submit" class="btn btn-success mb-3" name="btnUpdate">Update Research</button>
                                                        <a href="../../../admin/sdg14/up_delsdg14.php" class="btn btn-danger">Cancel</a>
                                                </div>
                                        </form>
                                </div>
                                <?php
                }
}
        } elseif ($research == '1443') {
                if(isset($_POST['btnUpdate'])){

                $policy = $_POST['1443policy'];
                // $tppa = $_POST['1443tppa'];

                $ppa = $_POST['1443ppa'];
                $description = $_POST['1443description'];
                $year = $_POST['1443cost'];
                $citation = $_POST['1443fsource'];

                $evidence = $_POST['1443evidence'];

                $query = "UPDATE `research14.4.3` SET policy = '{$policy}',ppa = '{$ppa}',description = '{$description}',cost = '{$year}',fsource = '{$citation}',evidence = '{$evidence}'  WHERE `RID` = ".$update."";
                $updateChecker = mysqli_query($conn, $query);
                if ($updateChecker) {
                    header("Location:../up_delsdg14.php?message=Update Successful");
                } else {
                    die("Query failed. " . mysqli_error($conn));
                }
                }

                $outerquery = "SELECT * FROM `research14.4.3` WHERE `RID` = ".$update."";
                $select = mysqli_query($conn, $outerquery);
                if (mysqli_num_rows($select) > 0) {
                while ($row = mysqli_fetch_assoc($select)) {
                        $id = $row['rid'];
                        $policy = $row['policy'];
                        // $tppa = $row['tppa'];
                        $ppa = $row['ppa'];
                        $description = $row['description'];
                        $year = $row['cost'];
                        $citation = $row['fsource'];
                        $evidence = $row['evidence'];

                ?>
                                <!-- html code here This div is for research 14.4.3-->
                                <div class="collapse w-100 h-auto p-3" id="research311" style="display: block ;">
                                        <h2 class="text-center pb-5">Reducing marine pollution</h2>
                                        <form action="" method="post">
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Does your campus have a policy on preventing and reducing marine pollution of all kinds, in particular from land-based activities?</span>
                                                        <input type="text" class="form-control" value="<?php echo "$policy" ?>" name="1443policy"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                               
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Title</span>
                                                        <input type="text" class="form-control" value="<?php echo "$ppa" ?>" name="1443ppa"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Description</span>
                                                        <input type="text" class="form-control" value="<?php echo "$description" ?>" name="1443description"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                                        <input type="text" class="form-control" value="<?php echo "$year" ?>" name="1443cost"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                                        <input type="text" class="form-control" value="<?php echo "$citation" ?>"
                                                                name="1443fsource" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Evidence</span>
                                                        <input type="text" class="form-control" value="<?php echo "$evidence" ?>"
                                                                name="1443evidence" aria-describedby="basic-addon1">
                                                </div>
                                               <div class="d-grid">
                                                        <button type="submit" class="btn btn-success mb-3" name="btnUpdate">Update Research</button>
                                                        <a href="../../../admin/sdg14/up_delsdg14.php" class="btn btn-danger">Cancel</a>
                                                </div>
                                        </form>
                                </div>
                                <?php
                }
}
        } elseif ($research == '1451') {
                if(isset($_POST['btnUpdate'])){

                $plan = $_POST['1451plan'];

                $ppa = $_POST['1451ppa'];
                $description = $_POST['1451description'];
                $year = $_POST['1451cost'];
                $citation = $_POST['1451fsource'];

                $query = "UPDATE `research14.5.1` SET plan = '{$plan}',ppa = '{$ppa}',description = '{$description}',cost = '{$year}',fsource = '{$citation}'  WHERE `RID` = ".$update."";
                $updateChecker = mysqli_query($conn, $query);
                if ($updateChecker) {
                    header("Location:../up_delsdg14.php?message=Update Successful");
                } else {
                    die("Query failed. " . mysqli_error($conn));
                }
                }

                $outerquery = "SELECT * FROM `research14.5.1` WHERE `RID` = ".$update."";
                $select = mysqli_query($conn, $outerquery);
                if (mysqli_num_rows($select) > 0) {
                while ($row = mysqli_fetch_assoc($select)) {
                        $id = $row['rid'];
                        $plan = $row['plan'];
                        $ppa = $row['ppa'];
                        $description = $row['description'];
                        $year = $row['cost'];
                        $citation = $row['fsource'];

                ?>
                                <!-- html code here This div is for research 14.5.1-->
                                <div class="collapse w-100 h-auto p-3" id="research311" style="display: block ;">
                                        <h2 class="text-center pb-5">Minimizing alteration of aquatic ecosystems</h2>
                                        <form action="" method="post">
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Does your campus have a plan to minimize physical, chemical and biological alterations of related aquatic ecosystems</span>
                                                        <input type="text" class="form-control" value="<?php echo "$plan" ?>" name="1451plan"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Title</span>
                                                        <input type="text" class="form-control" value="<?php echo "$ppa" ?>" name="1451ppa"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Description</span>
                                                        <input type="text" class="form-control" value="<?php echo "$description" ?>" name="1451description"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                                        <input type="text" class="form-control" value="<?php echo "$year" ?>" name="1451cost"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                                        <input type="text" class="form-control" value="<?php echo "$citation" ?>"
                                                                name="1451fsource" aria-describedby="basic-addon1">
                                                </div>
                               
                                               <div class="d-grid">
                                                        <button type="submit" class="btn btn-success mb-3" name="btnUpdate">Update Research</button>
                                                        <a href="../../../admin/sdg14/up_delsdg14.php" class="btn btn-danger">Cancel</a>
                                                </div>
                                        </form>
                                </div>
                                <?php
                }
}
        } elseif ($research == '1452') {
                if(isset($_POST['btnUpdate'])){

                // $tppa = $_POST['1452tppa'];

                $ppa = $_POST['1452ppa'];
                $description = $_POST['1452description'];
                $year = $_POST['1452cost'];
                $citation = $_POST['1452fsource'];

                $query = "UPDATE `research14.5.2` SET ppa = '{$ppa}',description = '{$description}',cost = '{$year}',fsource = '{$citation}'  WHERE `RID` = ".$update."";
                $updateChecker = mysqli_query($conn, $query);
                if ($updateChecker) {
                    header("Location:../up_delsdg14.php?message=Update Successful");
                } else {
                    die("Query failed. " . mysqli_error($conn));
                }
                }

                $outerquery = "SELECT * FROM `research14.5.2` WHERE `RID` = ".$update."";
                $select = mysqli_query($conn, $outerquery);
                if (mysqli_num_rows($select) > 0) {
                while ($row = mysqli_fetch_assoc($select)) {
                        $id = $row['rid'];
                        // $tppa = $row['tppa'];
                        $ppa = $row['ppa'];
                        $description = $row['description'];
                        $year = $row['cost'];
                        $citation = $row['fsource'];

                ?>
                                <!-- html code here This div is for research 14.5.2-->
                                <div class="collapse w-100 h-auto p-3" id="research311" style="display: block ;">
                                        <h2 class="text-center pb-5">Monitoring the health of aquatic ecosysystems</h2>
                                        <form action="" method="post">
                                                
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Title</span>
                                                        <input type="text" class="form-control" value="<?php echo "$ppa" ?>" name="1452ppa"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Description</span>
                                                        <input type="text" class="form-control" value="<?php echo "$description" ?>" name="1452description"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                                        <input type="text" class="form-control" value="<?php echo "$year" ?>" name="1452cost"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                                        <input type="text" class="form-control" value="<?php echo "$citation" ?>"
                                                                name="1452fsource" aria-describedby="basic-addon1">
                                                </div>
                              
                                               <div class="d-grid">
                                                        <button type="submit" class="btn btn-success mb-3" name="btnUpdate">Update Research</button>
                                                        <a href="../../../admin/sdg14/up_delsdg14.php" class="btn btn-danger">Cancel</a>
                                                </div>
                                        </form>
                                </div>
                                <?php
                }
}
        } elseif ($research == '1453') {
                if(isset($_POST['btnUpdate'])){

                // $tppa = $_POST['1453tppa'];

                $title = $_POST['1453title'];
                $description = $_POST['1453description'];

                $tenrollees = $_POST['1453tenrollees'];
                $teMale = $_POST['1453teMale'];
                $teFemale = $_POST['1453teFemale'];

                $tcost = $_POST['1453tcost'];
                $fsource = $_POST['1453fsource'];

                $query = "UPDATE `research14.5.3` SET title = '{$title}',description = '{$description}',tenrollees = '{$tenrollees}',teMale = '{$teMale}',teFemale = '{$teFemale}',tcost = '{$tcost}',fsource = '{$fsource}'  WHERE `RID` = ".$update."";
                $updateChecker = mysqli_query($conn, $query);
                if ($updateChecker) {
                    header("Location:../up_delsdg14.php?message=Update Successful");
                } else {
                    die("Query failed. " . mysqli_error($conn));
                }
                }

                $outerquery = "SELECT * FROM `research14.5.3` WHERE `RID` = ".$update."";
                $select = mysqli_query($conn, $outerquery);
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
                                <!-- html code here This div is for research 14.5.3-->
                                <div class="collapse w-100 h-auto p-3" id="research311" style="display: block ;">
                                        <h2 class="text-center pb-5">Programmes towards food aquatic stewardship practices</h2>
                                        <form action="" method="post">
                                               
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Title</span>
                                                        <input type="text" class="form-control" value="<?php echo "$title" ?>" name="1453title"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Description</span>
                                                        <input type="text" class="form-control" value="<?php echo "$description" ?>" name="1453description"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total Enrollees</span>
                                                        <input type="text" class="form-control" value="<?php echo "$tenrollees" ?>" name="1453tenrollees"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Male</span>
                                                        <input type="text" class="form-control" value="<?php echo "$teMale" ?>" name="1453teMale"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Female</span>
                                                        <input type="text" class="form-control" value="<?php echo "$teFemale" ?>" name="1453teFemale"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                                        <input type="text" class="form-control" value="<?php echo "$tcost" ?>"
                                                                name="1453tcost" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                                        <input type="text" class="form-control" value="<?php echo "$fsource" ?>"
                                                                name="1453fsource" aria-describedby="basic-addon1">
                                                </div>
                                               <div class="d-grid">
                                                        <button type="submit" class="btn btn-success mb-3" name="btnUpdate">Update Research</button>
                                                        <a href="../../../admin/sdg14/up_delsdg14.php" class="btn btn-danger">Cancel</a>
                                                </div>
                                        </form>
                                </div>
                                <?php
                }
}
        } elseif ($research == '1454') {
                if(isset($_POST['btnUpdate'])){

                // $tcollaboration = $_POST['1454tcollaboration'];

                $ppa = $_POST['1454ppa'];
                $description = $_POST['1454description'];
                $year = $_POST['1454cost'];
                $citation = $_POST['1454fsource'];

                $query = "UPDATE `research14.5.4` SET ppa = '{$ppa}',description = '{$description}',cost = '{$year}',fsource = '{$citation}'  WHERE `RID` = ".$update."";
                $updateChecker = mysqli_query($conn, $query);
                if ($updateChecker) {
                    header("Location:../up_delsdg14.php?message=Update Successful");
                } else {
                    die("Query failed. " . mysqli_error($conn));
                }
                }

                $outerquery = "SELECT * FROM `research14.5.4` WHERE `RID` = ".$update."";
                $select = mysqli_query($conn, $outerquery);
                if (mysqli_num_rows($select) > 0) {
                while ($row = mysqli_fetch_assoc($select)) {
                        $id = $row['rid'];

                        // $tcollaboration = $row['tcollaboration'];
                        $ppa = $row['ppa'];
                        $description = $row['description'];
                        $year = $row['cost'];
                        $citation = $row['fsource'];

                ?>
                                <!-- html code here This div is for research 14.5.4-->
                                <div class="collapse w-100 h-auto p-3" id="research311" style="display: block ;">
                                        <h2 class="text-center pb-5">Collaboration For Shared Aquatic Ecosystems</h2>
                                        <form action="" method="post">
                                              
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Title</span>
                                                        <input type="text" class="form-control" value="<?php echo "$ppa" ?>" name="1454ppa"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Description</span>
                                                        <input type="text" class="form-control" value="<?php echo "$description" ?>" name="1454description"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                                        <input type="text" class="form-control" value="<?php echo "$year" ?>" name="1454cost"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                                        <input type="text" class="form-control" value="<?php echo "$citation" ?>"
                                                                name="1454fsource" aria-describedby="basic-addon1">
                            
                                                
                                                </div>
                                                <div class="d-grid">
                                                        <button type="submit" class="btn btn-success mb-3" name="btnUpdate">Update Research</button>
                                        </form>
                                </div>
                                <?php
                }
}
        } elseif ($research == '1455') {
                if(isset($_POST['btnUpdate'])){

                $strategy = $_POST['1455strategy'];
                // $tppa = $_POST['1455tppa'];

                $ppa = $_POST['1455ppa'];
                $description = $_POST['1455description'];
                $year = $_POST['1455cost'];
                $citation = $_POST['1455fsource'];
 
                $query = "UPDATE `research14.5.5` SET strategy = '{$strategy}',ppa = '{$ppa}',description = '{$description}',cost = '{$year}',fsource = '{$citation}'   WHERE `RID` = ".$update."";
                $updateChecker = mysqli_query($conn, $query);
                if ($updateChecker) {
                    header("Location:../up_delsdg14.php?message=Update Successful");
                } else {
                    die("Query failed. " . mysqli_error($conn));
                }
                }
                $outerquery = "SELECT * FROM `research14.5.5` WHERE `RID` = ".$update."";
                $select = mysqli_query($conn, $outerquery);
                if (mysqli_num_rows($select) > 0) {
                while ($row = mysqli_fetch_assoc($select)) {
                        $id = $row['rid'];

                        $strategy = $row['strategy'];
                        // $tppa = $row['tppa'];
                        $ppa = $row['ppa'];
                        $description = $row['description'];
                        $year = $row['cost'];
                        $citation = $row['fsource'];

                ?>
                                <!-- html code here This div is for research 14.5.5-->
                                <div class="collapse w-100 h-auto p-3" id="research311" style="display: block ;">
                                        <h2 class="text-center pb-5">Watershed management strategy</h2>
                                        <form action="" method="post">
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Does your campus have a watershed management strategy based on location specific diversity of aquatic species?</span>
                                                        <input type="text" class="form-control" value="<?php echo "$strategy" ?>" name="1455strategy"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                               
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Title</span>
                                                        <input type="text" class="form-control" value="<?php echo "$ppa" ?>" name="1455ppa"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Description</span>
                                                        <input type="text" class="form-control" value="<?php echo "$description" ?>" name="1455description"
                                                                aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Total Cost</span>
                                                        <input type="text" class="form-control" value="<?php echo "$year" ?>"
                                                                name="1455cost" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Fund Source</span>
                                                        <input type="text" class="form-control" value="<?php echo "$citation" ?>"
                                                                name="1455fsource" aria-describedby="basic-addon1">
                                                </div>
                                               <div class="d-grid">
                                                        <button type="submit" class="btn btn-success mb-3" name="btnUpdate">Update Research</button>
                                                        <a href="../../../admin/sdg14/up_delsdg14.php" class="btn btn-danger">Cancel</a>
                                                </div>
                                        </form>
                                </div>
                                <?php
                }
}
        }
}

// This div is for research 14.1.1
// This div is for research 14.2.1
//  This div is for research 14.2.2
// This div is for research 14.2.3
//  This div is for research 14.3.1
//  This div is for research 14.3.2
//  This div is for research 14.3.3
//  This div is for research 14.3.4
//  This div is for research 14.4.1
//  This div is for research 14.4.2
//  This div is for research 14.4.3
//  This div is for research 14.5.1
//  This div is for research 14.5.2
//  This div is for research 14.5.3
//  This div is for research 14.5.4
//  This div is for research 14.5.5


?>