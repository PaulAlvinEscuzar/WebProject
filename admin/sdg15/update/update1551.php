<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header15.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $no_bio = $_POST['no_bio'];
        $tippa = $_POST['tippa'];
        $sdeppa = $_POST['sdeppa'];
        $totcst = $_POST['totcst'];
        $funs = $_POST['funs'];

        $update_query = "UPDATE `research15.5.1` 
        SET 
            no_bio = '$no_bio',
            tippa = '$tippa',
            sdeppa = '$sdeppa',
            totcst = '$totcst',
            funs = '$funs'
        WHERE 
           ID = '$id'";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg15/up_delsdg15.php?message=Update Successful");
        }
    }
        $query1551 = "SELECT * FROM `research15.5.1` WHERE ID = '$id' ";
        $select1551 = mysqli_query($conn, $query1551);

            if (mysqli_num_rows($select1551) > 0) {
                while ($row = mysqli_fetch_assoc($select1551)) {
                    $no_bio = $row['no_bio'];
                    $tippa = $row['tippa'];
                    $sdeppa = $row['sdeppa'];
                    $totcst = $row['totcst'];
                    $funs = $row['funs'];
                
?>

                    <div class="collapse w-100 h-auto" id="research1551" style="display: block;">
                        <h2 class="text-center p-3">Biodiversity in the community</h2>
                        <form action="" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Total number of extension PPAs that sustain the biodiversity of the community:</span>
                                <input type="text" class="form-control" value="<?php echo "$no_bio" ?>" name="no_bio">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Title of the PPA:</span>
                                <input type="text" class="form-control" value="<?php echo "$tippa" ?>" name="tippa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Short description of the PPA:</span>
                                <input type="text" class="form-control" value="<?php echo "$sdeppa" ?>" name="sdeppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Total cost:</span>
                                <input type="text" class="form-control" value="<?php echo "$totcst" ?>" name="totcst">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Fund source:</span>
                                <input type="text" class="form-control" value="<?php echo "$funs" ?>" name="funs">
                            </div>
                              <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Update
                                    Research</button>
                                    <a href="../../../admin/sdg15/up_delsdg15.php" class="btn btn-danger">Cancel</a>
                            </div>
                        </form>
                    </div>

<?php
        }
    }
}


?>