<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header4.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $totnofgens = $_POST['totnofgens'];
        $totnumfys = $_POST['totnumfys'];
        $totnumfgsfyl = $_POST['totnumfgsfyl'];
        $pstudpfgs = $_POST['pstudpfgs'];
        $pfysfgs = $_POST['pfysfgs'];

        $update_query = "UPDATE `research4.4.1`
        SET 
        totnofgens = '$totnofgens',
        totnumfys = '$totnumfys',
        totnumfgsfyl = '$totnumfgsfyl',
        pstudpfgs = '$pstudpfgs',
        pfysfgs = '$pfysfgs'
        WHERE 
           ID = '$id'";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg4/up_delsdg4.php?message=Update Successful");
        }
    }
    $query441 = "SELECT * FROM `research4.4.1` WHERE ID = '$id'";
         $select441 = mysqli_query($conn, $query441);

         if (mysqli_num_rows($select441) > 0) {
            while ($row = mysqli_fetch_assoc($select441)) {
                $totnofgens = $row['totnofgens'];
                $totnumfys = $row['totnumfys'];
                $totnumfgsfyl = $row['totnumfgsfyl'];
                $pstudpfgs = $row['pstudpfgs'];
                $pfysfgs = $row['pfysfgs'];



?>

                   <div class="collapse w-100 h-auto" id="research441" style="display: block ;">
                        <h2 class="text-center pb-5">Proportion of first-generation students</h2>
                        <form action="../../admin/sdg4/insert441.php" method="post" name="form1">


                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Total number of first-generation students:</span>
                                <input type="text" class="form-control" value="<?php echo "$totnofgens" ?>" name="totnofgens">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Total number of first year students:</span>
                                <input type="text" class="form-control" value="<?php echo "$totnumfys" ?>" name="totnumfys">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Total number of first-generation students in first year level:</span>
                                <input type="text" class="form-control" value="<?php echo "$totnumfgsfyl" ?>" name="totnumfgsfyl">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Percent of the student population are first-generation students.</span>
                                <input type="text" class="form-control" value="<?php echo "$pstudpfgs" ?>" name="pstudpfgs">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Percent of first year students are first-generation students.</span>
                                <input type="text" class="form-control" value="<?php echo "$pfysfgs" ?>" name="pfysfgs">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Update
                                    Research</button>
                                    <a href="../../../admin/sdg4/up_delsdg4.php" class="btn btn-danger">Cancel</a>
                            </div>
                        </form>
                    </div>

<?php
        }
    }
}


?>