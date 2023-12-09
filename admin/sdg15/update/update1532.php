<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header15.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $totalspecies = $_POST['totalspecies'];
        $titleppa = $_POST['titleppa'];
        $shortdes = $_POST['shortdes'];
        $tcost = $_POST['tcost'];
        $fsource = $_POST['fsource'];

        $update_query = "UPDATE `research15.3.2` 
        SET 
            totalspecies = '$totalspecies',
            titleppa = '$titleppa',
            shortdes = '$shortdes',
            tcost = '$tcost',
            fsource = '$fsource'
        WHERE 
           ID = '$id'";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg15/up_delsdg15.php?message=Update Successful");
        }
    }
    $query1532 = "SELECT * FROM `research15.3.2` WHERE ID = '$id'";
    $select1532 = mysqli_query($conn, $query1532);

        if (mysqli_num_rows($select1532) > 0) {
            while ($row = mysqli_fetch_assoc($select1532)) {
                $totalspecies = $row['totalspecies'];
                $titleppa = $row['titleppa'];
                $shortdes = $row['shortdes'];
                $tcost = $row['tcost'];
                $fsource= $row['fsource'];
                
?>

                    <div class="collapse w-100 h-auto" id="research1532" style="display: block;">
                        <h2 class="text-center p-3">Measures to conserve the endangered species</h2>
                        <form action="" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Total number of conservation measures for endangered species:</span>
                                <input type="text" class="form-control" value="<?php echo "$totalspecies" ?>" name="totalspecies">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Title of PPA:</span>
                                <input type="text" class="form-control" value="<?php echo "$titleppa" ?>" name="titleppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Short description:</span>
                                <input type="text" class="form-control" value="<?php echo "$shortdes" ?>" name="shortdes">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Total cost:</span>
                                <input type="text" class="form-control" value="<?php echo "$tcost" ?>" name="tcost">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Fund source:</span>
                                <input type="text" class="form-control" value="<?php echo "$fsource" ?>" name="fsource">
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