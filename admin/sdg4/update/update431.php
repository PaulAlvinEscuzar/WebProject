<?php include '../../../includes/db.php';
include '../../../includes/adminHeadupdate/header4.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $no_freeapgp = $_POST['no_freeapgp'];
        $titleoppa = $_POST['titleoppa'];
        $shortdotppa = $_POST['shortdotppa'];
        $totalcost = $_POST['totalcost'];
        $fundsource = $_POST['fundsource'];

        $update_query = "UPDATE `research4.3.1`
        SET 
        no_freeapgp = '$no_freeapgp',
        titleoppa = '$titleoppa',
        shortdotppa = '$shortdotppa',
        totalcost = '$totalcost',
        fundsource = '$fundsource'
        WHERE 
           ID = '$id'";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg4/up_delsdg4.php?message=Update Successful");
        }
    }
    $query431 = "SELECT * FROM `research4.3.1` WHERE ID = '$id'";
         $select431 = mysqli_query($conn, $query431);

         if (mysqli_num_rows($select431) > 0) {
            while ($row = mysqli_fetch_assoc($select431)) {
                $no_freeapgp = $row['no_freeapgp'];
                $titleoppa = $row['titleoppa'];
                $shortdotppa = $row['shortdotppa'];
                $totalcost = $row['totalcost'];
                $fundsource= $row['fundsource'];

        ?>

                    <div class="collapse w-100 h-auto" id="research431" style="display: block ;">
                        <h2 class="text-center pb-5">Public resources (lifelong learning)</h2>
                        <form action="" method="post" name="form1">


                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Total number of free access provided to the general public:</span>
                                <input type="text" class="form-control" value="<?php echo "$no_freeapgp" ?>" name="no_freeapgp">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Title of the PPA:</span>
                                <input type="text" class="form-control" value="<?php echo "$titleoppa" ?>"  name="titleoppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i>Short description of the PPA:</span>
                                <input type="text" class="form-control" value="<?php echo "$shortdotppa" ?>" name="shortdotppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i>Total cost:</span>
                                <input type="text" class="form-control" value="<?php echo "$totalcost" ?>" name="totalcost">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i>Fund source:</span>
                                <input type="text" class="form-control" value="<?php echo "$fundsource" ?>" name="fundsource">
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